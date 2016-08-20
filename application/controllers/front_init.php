<?
class Front_init extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['fields'] = array(	'name' => array(	'label' => 'Nombre',
															'type' => 'text',
															'validation' => 'required|xss_clean',
															'visibility' => 'contact'
															),
										'last_name' => array(	'label' => 'Apellido',
															'type' => 'text',
															'validation' => 'required|xss_clean',
															'visibility' => 'contact'
															),
										'email' => array(	'label' => 'Email',
															'type' => 'text',
															'validation' => 'required|valid_email|xss_clean',
															'visibility' => 'contact'
															),
										'telephone' => array(	'label' => 'Teléfono',
																'type' => 'text',
																'validation' => 'xss_clean',
																'visibility' => 'contact'
															),
										'subject' => array(	'label' => 'Asunto',
															'type' => 'text',
															'validation' => 'required|xss_clean',
															'visibility' => 'contact'
															),
										'message' => array(	'label' => 'Mensaje',
															'type' => 'textarea',
															'validation' => 'required|xss_clean',
															'visibility' => 'contact'
															),
								);

		$this->split_fields();

	}

	public function clear_session()
	{
		$this->session->sess_destroy();
	}

	public function get_slider(){
			$sql = "SELECT * FROM slider WHERE active = 1 ORDER BY date_created DESC";
			$result = $this->db->query($sql)->result_array();

			$this->load->model('admin/slider_model', 'slider_model');
			$this->data['slider'] = array();

			foreach ($result as $row){
				$slider = new Slider_model();
				$slider->set($row);
				$slider->get_files();
				$this->data['slider'][] = $slider;
			}
	}

	public function get_obras(){
			$sql = "SELECT * FROM portfolio WHERE active = 1 ORDER BY obra_id DESC";
			$result = $this->db->query($sql)->result_array();

			$this->load->model('admin/portfolio_model', 'portfolio_model');
			$this->data['obras'] = array();

			foreach ($result as $row){
				$portfolio = new Portfolio_model();
				$portfolio->set($row);
				$portfolio->get_files();
				$this->data['obras']['by_category'][$portfolio->category][] = $portfolio;
			}
	}

	public function get_news(){
			$sql = "SELECT * FROM prensa WHERE active = 1 ORDER BY new_id DESC";
			$result = $this->db->query($sql)->result_array();

			$this->load->model('admin/prensa_model', 'prensa_model');
			$this->data['news'] = array();

			foreach ($result as $row){
				$prensa = new Prensa_model();
				$prensa->set($row);
				$prensa->get_files();
				$this->data['news'][] = $prensa;
			}
	}
	
	public function get_marcas(){
			$sql = "SELECT * FROM marcas WHERE active = 1 ORDER BY marca_id DESC";
			$result = $this->db->query($sql)->result_array();

			$this->load->model('admin/marcas_model', 'marcas_model');
			$this->data['marcas'] = array();

			foreach ($result as $row){
				$marcas = new Marcas_model();
				$marcas->set($row);
				$marcas->get_files();
				$this->data['marcas'][] = $marcas;
			}
	}

	/*
	Splits the fields array into page_fields[$visible_page][field_id][field_attributes]
	*/
	protected function split_fields()
	{
		if(!is_array($this->data['fields'])) return 0;

		$file_types = array('image','video','archive');
		$this->data['page_fields'] = array();
		foreach($this->data['fields'] as $field_id => $attrs)
		{
			if($attrs['visibility'])
			{
				$visibilities = explode("|", $attrs['visibility']);
				foreach($visibilities as $visibility)
				{
					$this->data['page_fields'][$visibility][$field_id] = $attrs;
				}
			}
			// insert file fields;
			if(in_array($attrs['type'],$file_types))
			{
				$this->file_fields[$field_id] = $attrs;
			}
		}
	}

	public function get_file_manager()
	{
		$this->load->model('admin/file_manager_model', 'file_manager');
		if($this->form_model->file_manager_id && $this->file_manager->get($this->form_model->file_manager_id))
		{
			return;
		}
		else
		{
			$this->file_manager->create();
			$this->form_model->set_field('file_manager_id',$this->file_manager->get_id());
			$this->form_model->save();
		}
	}

	public function validate_contact_form($page)
	{
		$output['page'] = $page;
		$output['valid'] = false;
		$this->form_validation->set_message('matches', '%s y %s deben ser iguales');
		$this->form_validation->set_message('required', 'Falta completar este campo');
		$this->form_validation->set_message('valid_email', 'Este email no es v&aacute;lido');
		$this->form_validation->set_message('alpha_numeric_space', 'Este campo solo puede contener letras, n&uacute;meros y espacios');


		foreach($this->data['page_fields'][$page] as $field_id => $field)
		{
			$this->form_validation->set_rules($field_id, $field['label'], $field['validation']);
		}

		$this->data['post'] = $this->input->post();
		if(!$this->form_validation->run())
		{
			$output['valid'] = 0;

			foreach($this->data['page_fields'][$page] as $field_id => $field)
			{
				$output['errors'][$field_id] = form_error($field_id);
			}
		}
		else
		{
			$output['valid'] = true;

			switch($page)
			{
				case 'contact':
					$this->load->model("admin/contact_model","form_model");
					$this->data['post']['name'] = $this->data['post']['name']." ".$this->data['post']['last_name'];
					unset($this->data['post']['last_name']);
					break;
			}

			if(!isset($output['valid']) || $output['valid'])
			{

				$this->form_model->set($this->data['post']);

				if($this->form_model->save())
				{
					$output['valid'] = 1;
					switch($page)
					{
						case 'contact':
							$this->send_register_email();
							break;
					}
				}
				else
				{
					$output['valid'] = 0;
					$output['errors'] = $this->form_model->get_error_message();
				}
			}
		}
		echo json_encode($output);
	}

	protected function send_register_email()
	{
		$this->load->library('email');

		$config['protocol'] = 'mail';
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('admin@verellen.com', 'Nueva consulta en Verellen Hnos');

		$this->email->to($this->configuration_model->form_emails);
		$this->email->reply_to($this->form_model->email);

		$this->email->subject($this->form_model->subject);

		$body= "Nombre: ".$this->form_model->name."<br>";
		$body.= "Email: ".$this->form_model->email."<br>";
		$body.= "Teléfono: ".$this->form_model->telephone."<br>";
		$body.= "Asunto: ".$this->form_model->subject."<br>";
		$body.= "Mensaje: ".$this->form_model->message."<br>";
		$body.= "--";

		$this->email->message($body);

		$this->email->send();

	}


	protected function check_captcha()
	{
		$captcha_input = $this->input->post('captcha_input', TRUE);
    	$captcha_text = $this->simple_captcha->get_captcha_text('signup');
		return $captcha_input && ($captcha_input == $captcha_text);
	}
}

?>
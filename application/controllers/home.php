<?
require_once(dirname(__FILE__)."/front_init.php");
class Home extends Front_init
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("admin/configuration_model","configuration_model");
  	$this->configuration_model->get(1);
	}

	public function index()
	{
		$this->get_slider();
		$this->load->view("front/index.php", $this->data);
	}

	public function showroom()
	{
		$this->load->view("front/showroom.php", $this->data);
	}

	public function todas()
	{
		$this->load->view("front/todas.php", $this->data);
	}

	public function novedades()
	{
		$this->load->view("front/novedades.php", $this->data);
	}

	public function marcas()
	{
		$this->get_marcas();

		$this->load->view("front/marcas.php", $this->data);
	}

	public function prensa()
	{
		$this->get_news();

		$this->load->view("front/prensa.php", $this->data);
	}

	public function contact()
	{
		$this->load->view("front/contact.php", $this->data);
	}

	public function noticia($new_id)
	{
		$this->load->model('admin/prensa_model', 'prensa_model');
		$this->prensa_model->get($new_id);
		$this->get_news();

		$this->data['section'] = "noticia";

		if(!$this->prensa_model->get_id()){
			$this->prensa();
			die();
		}

		$this->load->view("front/noticia.php", $this->data);
	}

	public function portfolio()
	{
		$this->get_obras();

		$this->load->view("front/portfolio.php", $this->data);
	}

	public function obra($obra_id)
	{
		$this->load->model('admin/portfolio_model', 'portfolio_model');
		$this->portfolio_model->get($obra_id);
		$this->get_obras();

		$this->data['section'] = "obra";

		if(!$this->portfolio_model->get_id()){
			$this->portfolio();
			die();
		}

		$this->load->view("front/detail.php", $this->data);
	}

}

<?php
class contactform extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
    }

    function index()
    {
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            $this->load->view('front/contact');
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $to_email = 'admin@issue.com';

            //configure email settings
            $this->load->library('email');

            $config['protocol'] = 'mail';
            $config['charset'] = 'utf-8';
            $config['mailtype'] = 'html';

            $this->email->initialize($config);

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Tu mensaje fue enviado correctamente!</div>');
                redirect('contactform/index');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Hubo un error al enviar tu mensaje. Intenta nuevamente!</div>');
                redirect('contactform/index');
            }
        }
    }

    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'El campo %s solo debe tener letras y espacios.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
?>
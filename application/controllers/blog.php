<?php

class Blog extends CI_Controller {

    protected $data;

    function __construct() {

        parent::__construct();

        $this->load->helper('url');

        $this->data['query'] = $this->blog_model->show_all_posts();
        $this->data['user'] = $this->ion_auth->user()->row();

        $this->data['mobile_brand'] = $this->wurfl->get_mobile_brand();
        $this->data['mobile_model'] = $this->wurfl->get_mobile_model();

    }

    public function index() {

        $data = $this->data;

        $this->load->view('blog/header');
        $this->load->view('blog/_index',$data);
        $this->load->view('blog/template',$data);

    }

    public function read($id) {

        $data = $this->data;
        $data['post'] = $this->blog_model->read_post($id);

        $this->load->view('blog/header');
        $this->load->view('blog/_read',$data);
        $this->load->view('blog/template',$data);

    }

    public function add() {

        if (!$this->ion_auth->logged_in()) {

            redirect('auth/login');

        } else {

            $data = $this->data;

            $this->load->helper('form');
            $this->load->library(array('form_validation','session'));

            $data['entry_name'] = array(
                'name' => 'entry_name',
                'class' => 'add-post',
                'maxlenght' => '200',
            );

            $data['entry_body'] = array(
                'name' => 'entry_body',
                'class' => 'add-post',
                'rows' => '10',
                'cols' => '50'
            );

            $data['submit'] = array(
                'value' => 'Submit post!',
                'class' => 'btn btn-primary'
            );

            $this->form_validation->set_rules('entry_name', 'Title', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('entry_body', 'Body', 'required|xss_clean');

            if ($this->form_validation->run() == FALSE) {

                $this->load->view('blog/header');
                $this->load->view('blog/_add',$data);
                $this->load->view('blog/template',$data);

            } else {

                $name = $this->input->post('entry_name');
                $body = $this->input->post('entry_body');
                $this->blog_model->add_new_post($name,$body);
                $this->session->set_flashdata('message', '1 new entry added!');
                redirect('blog/index');

            }

        }

    }

    public function login() {

        $data = $this->data;

        $this->load->view('blog/header');
        $this->load->view('auth/login');
        $this->load->view('blog/template',$data);

    }

    public function logout() {

        $this->ion_auth->logout();
        $this->session->set_flashdata('message', 'Logged out succesfully!');
        redirect('/');

    }

}

?>
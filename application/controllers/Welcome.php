<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model');
	}
	public function index_logined()
	{

		$this->load->library('pagination');
		$user=$this->session->userdata('user');

		$total=$this->Article_model->get_own_count_article($user->user_id);
		$config['base_url'] = base_url().'welcome/index_logined';
		$config['total_rows'] = $total;
		$config['per_page'] = 2;

		$this->pagination->initialize($config);

		$links= $this->pagination->create_links();
		$results = $this->Article_model->get_own_article_list($this->uri->segment(3),$config['per_page'],$user->user_id);





//		$user = $this->session->userdata('user');
		$types = $this->Article_model->get_own_article_type($user->user_id);

		$this->load->view('index_logined',array('list'=>$results,'types'=>$types,'links'=>$links));
	}
	public function index()
	{

		$this->load->library('pagination');
		$total=$this->Article_model->get_count_article();
		$config['base_url'] = base_url().'welcome/index';
		$config['total_rows'] = $total;
		$config['per_page'] = 2;

		$this->pagination->initialize($config);

		$links= $this->pagination->create_links();
		$results = $this->Article_model->get_article_list($this->uri->segment(3),$config['per_page']);

		$types = $this->Article_model->get_article_type();

		$this->load->view('index',array('list'=>$results,'types'=>$types,'links'=>$links));
	}

	public function newBlog(){

		$user = $this->session->userdata('user');
		$types = $this->Article_model->get_type_by_user_id($user->user_id);


		$this->load->view('newBlog',array('types'=>$types));
	}
	public function publish_blog(){
		$title=$this->input->post('title');
		$catalog=$this->input->post('catalog');
		$content = $this->input->post('content');
		$user = $this->session->userdata('user');
		date_default_timezone_set('Asia/Shanghai');
		$rows=$this->Article_model->publish_blog(array(
				'title'=>$title,
				'content'=>$content,
				'post_date'=>date("Y_m_d h:m:s"),
				'user_id'=>$user->user_id,
				'type_id'=>$catalog
		));
		if($rows>0){
			redirect('welcome/index_logined');
		}
	}
}

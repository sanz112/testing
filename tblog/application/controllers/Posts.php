<?php
class Posts extends CI_Controller {

   public function index($offset = 0) {
   
     //pagination config
     $config['base_url'] = base_url().'posts/index';
     $config['total_rows'] = $this->db->count_all('posts');
     $config['per_page'] = 3;
     $config['uri_segment'] = 3;
     $config['next_link'] = 'Next &gt;&gt;';
     $config['prev_link'] = 'Previous &lt;&lt;';
     
     $config['attributes'] = array('class' => 'pagination-link');

      $this->pagination->initialize($config);
      $data['title'] = 'Latest Posts';
      $data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);
      $this->load->view('template/header');
      $this->load->view('posts/index', $data);
      $this->load->view('template/footer');
    }

  public function view($slug) {
    $data['post'] = $this->post_model->get_posts($slug);
    $post_id = $data['post']['id'];
    $data['categories'] = $this->post_model->get_categories();
    $data['comments'] = $this->comment_model->get_comments($post_id);

    if(empty($data['post'])) {
      show_404();
    } 
    $data['title'] = $data['post']['title'];
    $this->load->view('template/header');
    $this->load->view('posts/view', $data);
    $this->load->view('template/footer');

    }
    public function create() {

      if(!$this->session->userdata('logged_in')) {
        redirect('users/login');
      }
      $data['title'] = 'Create Post';
      $data['categories'] = $this->post_model->get_categories();

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('body', 'Body', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('template/header');
        $this->load->view('posts/create', $data);
        $this->load->view('template/footer');
      } else {
        //upload image
        $config['upload_path']='./assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000000000;
        $config['max_width'] = 50000;
        $config['max_height'] = 50000;


        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $post_imag = "noimage.jpg";
        }
        else {
          $data = array('upload_data' => $this->upload->data());
          $post_imag = $_FILES['userfile']['name'];
        }
         
        $this->post_model->create_post($post_imag);

        $this->session->set_flashdata('post_created', 'your post has been created');

        redirect('posts');
      }
    }
    public function delete($id) {
      
      if(!$this->session->userdata('logged_in')) {
        redirect('users/login');
      }
      $this->post_model->delete_post($id);
      $this->session->set_flashdata('post_deleted', 'Your post has been deleted');
        redirect('posts');
    }

    public function edit($slug) {
      
      if(!$this->session->userdata('logged_in')) {
        redirect('users/login');
      }

      $data['post'] = $this->post_model->get_posts($slug);
      
      //check user
      if($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']) {
        redirect('posts');
      }
      
      $data['categories'] = $this->post_model->get_categories();
      if (empty($data['post'])) {
        show_404();
      } else {
      $data['title'] = 'Edit Post';

      $this->load->view('template/header');
      $this->load->view('posts/edit', $data);
      $this->load->view('template/footer');
    }
  }
  public function update() {
   
      if(!$this->session->userdata('logged_in')) {
        redirect('users/login');
      }

    $this->post_model->update_post($post_imag);

    $this->session->set_flashdata('post_updated', 'Your post has been updated');
    
    redirect('posts');
  }
  }
?>

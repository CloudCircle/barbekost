<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function Welcome(){
		parent::__construct();
		$this->load->helper(array('file'));
    
	}

	public function index()
	{
		$this->template->write('title', 'Barbekost');
		$this->template->write('title_desc', 'There is text for promoted Barbe-Kost to everyones');
		$this->template->write('header', 'Cloud Circle');	
		$this->template->write_view('navigation', '/layout/navigation');
		//form
		$data["form"]= $this->formRegister();
		$this->template->write_view('content', 'welcome_message',$data);
		//$this->template->write_view('sidebar', '/layout/sidebar');
		$this->template->write_view('footer', '/layout/footer');
		$this->template->render();
	}

	private function formRegister(){

		$form=array();
		$attributes = array('id' => 'inputs');
		array_push($form,form_open_multipart('userform/addexkoster'));

		$attr = array(
		        'name'        => 'firstname',
		        'id'		  => 'prependedInput',
		        'class'       => 'input-xlarge',
		        'type'        => 'text',
		        'label'       => 'Username',
		        'title'   	  => 'Masukkan firstname terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Firstname',
		        'icon'		  => 'icon-user'
		);
		array_push($form,form_input($attr) );

		$attr = array(
		        'name'        => 'lastname',
		        'id'		  => 'prependedInput',
		        'class'       => 'input-xlarge',
		        'type'        => 'text',
		        'title'   	  => 'Masukkan lastname terlebih dahulu',
		        'placeholder' => 'lastname',
		        'icon'		  => 'icon-user'
		);
		array_push($form,form_input($attr) );

		$attr = array(
		        'name'        => 'email',
		        'id'		  => 'prependedInput',
		        'class'       => 'input-xlarge',
		        'type'        => 'email',
		        'label'       => 'Email',
		        'title'   	  => 'Masukkan email terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Email',
		);
		array_push($form,form_input($attr) );

		$attr = array(
		        'name'        => 'alamat',
		        'id'		  => 'prependedInput',
		        'class'       => 'input-xxlarge',
		        'type'        => 'text',
		        'label'       => 'Address',
		        'title'   	  => 'Masukkan alamatmu',
		        'placeholder' => 'Address',
		        'icon'		  => 'icon-home'
		);
		array_push($form,form_input($attr) );

		$attr = array(
		        'name'        => 'phone',
		        'id'		  => 'prependedInput',
		        'class'       => 'input-large',
		        'type'        => 'text',
		        'label'       => 'Phone',
		        'title'   	  => 'Masukkan no telephone terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Phone number',
		        'icon'		  => 'icon-signal'
		);
		array_push($form,form_input($attr) );

		$attr = array(
		        'name'        => 'password',
		        'id'		  => 'prependedInput',
		        'class'       => 'input-large',
		        'type'        => 'password',
		        'label'       => 'Password',
		        'title'   	  => 'Masukkan password terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Password',
		        'icon'		  => 'icon-lock'
		);
		array_push($form,form_input($attr) );

		$attr = array(
		        'label'       => 'Regions',
		        'class'       => 'span2',
		        'title'   	  => 'Choose Regions First',
		        'class'		  => 'long',
		);
		array_push( $form, form_dropdown('Regions', $this->get_dropdown(),"0",
		        $attr));

		$attr = array(
		        'label'       => 'City',
		        'class'       => 'span2',
		        'title'   	  => 'Choose City First',
		        'class'		  => 'long',
		);
		array_push( $form, form_dropdown('City', $this->get_dropdown(),"0",
		        $attr));

		$attr = array(
		        'name'        => 'save',
		        'type'        => 'submit',
		        'label'       => 'johndoe',
		        'content'     => 'Register Now',
		        'icon'		  => 'save',
		        'class'       => 'btn btn-success btn-large',
		);
		array_push( $form, form_button($attr));
		array_push( $form, form_close());
		return $form;
	}

	 public function get_dropdown() {
        $p = new Provinsi();
        $p->get_by_id(12);
        $p->kota->get_iterated();
        $dropdown = array('0' => 'Choose Regions');
		foreach( $p->kota as $c ){
           	$dropdown[$c->id] = $c->nama_kota;
		}
        
        return $dropdown;
    }
}

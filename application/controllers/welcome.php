<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function Welcome(){
		parent::__construct();
		$this->load->helper(array('file'));
		$this->load->model('Books',NULL, TRUE);	
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
		//$this->template->write_view('footer', '/layout/footer');
		$this->template->render();
	}

	private function formRegister(){

		$form=array();
		$attributes = array('id' => 'inputs');
		array_push($form,form_open('email/send',$attributes));
		$attr = array(
		        'name'        => 'email',
		        'id'          => 'email',
		        'type'        => 'email',
		        'value'       => 'johndoe',
		        'label'       => 'Username',
		        'title'   	  => 'Isilah dengan nama terlebih dahulu',
		        'help'   	  => 'Isilah dengan nama terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Username',
		);
		array_push($form,form_input($attr) );
		$attr = array(
		        'label'       => 'johndoe',
		);
		array_push( $form, form_dropdown('category', $this->Books->get_dropdown(),array(),
		        $attr));
		$attr = array(
		        'name'        => 'save',
		        'type'        => 'submit',
		        'label'       => 'johndoe',
		        'content'     => 'save',
		        'class'       => 'button save',
		);
		array_push( $form, form_button($attr));
		array_push( $form, form_close());
		return $form;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
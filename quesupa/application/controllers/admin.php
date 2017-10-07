<?php
class Admin extends CI_Controller{
	public function adminLogin()
	{
		$this->load->view('admin/admin_login');
	}

	public function adminValidation()
	{
		$this->form_validation->set_rules('username','User name','required');
		$this->form_validation->set_rules('password','Password','required');


		if($this->form_validation->run())
		{
			
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));

			$login_id = $this->admin_model->adminLogin($username, $password);
			if( $login_id)
			{
				$this->session->set_userdata('u_id',$login_id);
				$this->load->view('panel/dashboard');

			}
			else
			{
				return redirect('admin_login');
			}
		}
		else
		{
			echo "Try Again!!!";
		}
	}

	public function services()
	{
		$records = $this->admin_model->serviceInfo();
		$this->load->view('admin/services',['records'=>$records]);
	}

	public function user()
	{
		$records = $this->admin_model->userInfo();
		$this->load->view('admin/user',['records'=>$records]);
	}



	public function blogs()
	{
		$records = $this->admin_model->blogs();
		$this->load->view('admin/blogs',['records'=>$records]);
	}

	public function newService()
	{
		$this->load->view('admin/newservice',array('error' => " " ));
	}


	public function newBlog()
	{
		$this->load->view('admin/newblog',array('error' => " " ));
	}

	public function newUser()
	{
		$this->load->view('admin/newuser');
	}

	public function newServiceValidation()
	{

		$this->load->view('admin/newservice');
	}

	public function editService($s_id)
	{
		$service = $this->admin_model->findService($s_id);
		$this->load->view('admin/editservice',['service'=>$service]);
	}
public function viewService($s_id)
	{
	/*	print_r($s_id);
		exit();*/

		$service = $this->admin_model->findService($s_id);
		$this->load->view('user/service',['service'=>$service]);
	}
		public function editBlog($b_id)
	{
		$blog = $this->admin_model->findBlog($b_id);
		$this->load->view('admin/editblog',['blog'=>$blog]);
	}

	public function editUser($u_id)
	{
		$user = $this->admin_model->findUser($u_id);
		$this->load->view('admin/edituser',['user'=>$user]);
	}
public function dashboard()
	{
	
		$this->load->view('panel/dashboard');
	}
	public function deleteService()
	{
		$s_id = $this->input->post('s_id');
		return $this->_falshAndRedirect(
			$this->admin_model->deleteService($s_id),
			"Deleted Successully.",
			"Failed To Delete, Please Try Again."
			);
	}
	public function deleteBlog()
	{
		$b_id = $this->input->post('b_id');
		return $this->_falshAndRedirectnb(
			$this->admin_model->deleteBlog($b_id),
			"Deleted Successully.",
			"Failed To Delete, Please Try Again."
			);
	}

	public function deleteUser()
	{
		$u_id = $this->input->post('u_id');
		return $this->_falshAndRedirectd(
			$this->admin_model->deleteUser($u_id),
			"Deleted Successully.",
			"Failed To Delete, Please Try Again."
			);
	}

	public function updateService($s_id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('service_name','name','required|trim');
		$this->form_validation->set_rules('description','description','required');
		

		if( $this->form_validation->run() ) {
			$post = $this->input->post();
			unset($post['submit']);
			return $this->_falshAndRedirect(
				$this->admin_model->updateService($s_id,$post),
				" Updated Successully.",
				"Failed To Update, Please Try Again."
				);
		} else {
			$service = $this->admin_model->findService($s_id);
			$this->load->view('admin/editservice',['service'=>$service]);
		}
	}

	public function updateBlog($b_id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('blog_name','name','required|trim');
		$this->form_validation->set_rules('description','description','required');
		

		if( $this->form_validation->run() ) {
			$post = $this->input->post();
			unset($post['submit']);
			return $this->_falshAndRedirectnb(
				$this->admin_model->updateBlog($b_id,$post),
				" Updated Successully.",
				"Failed To Update, Please Try Again."
				);
		} else {
			$blog = $this->admin_model->findBlog($s_id);
			$this->load->view('admin/editblog',['blog'=>$blog]);
		}
	}
	
	public function updateUser($u_id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','name','required|trim');
		$this->form_validation->set_rules('role','role','required');

		if( $this->form_validation->run() ) {
			$post = $this->input->post();
			unset($post['submit']);
			return $this->_falshAndRedirectd(
				$this->admin_model->updateUser($u_id,$post),
				" Updated Successully.",
				"Failed To Update, Please Try Again."
				);
		} else {
			$this->load->view('admin/editUser');
		}
	}	

	public function serviceValidation()
	{	
		$config = [
		'upload_path'	=>		'./uploads/',
		'allowed_types'	=>		'jpg|gif|png|jpeg',
		/*'max_size'      =>      '10',
		'max_width'     =>      '300',
		'max_height'    =>      '300',*/
		];
		$this->load->library('upload', $config);


		$this->form_validation->set_rules('name','name','required|trim');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('s_description','Short description','required');
		$this->form_validation->set_rules('created_by','created_by','required');
		if($this->form_validation->run() ) 
		{
			/*$post = array(
				'service_name'=>$this->input->post('name'),
				'description'=>$this->input->post('description'),
				'status'=>$this->input->post('status'),
				'created_by'=>$this->input->post('created_by')
				);
			$this->upload->do_upload();
			$data = $this->upload->data();
			$image =  $data['file_name'];
			$post['image'] = $image;
			return $this->_falshAndRedirects(
				$this->admin_model->add($post),
				"Failed To Insert, Please Try Again.",
				" Inserted Successully."

				);		

*/
				if(!$this->upload->do_upload()){
					
					$error = array('error'=>$this->upload->display_errors());
					$error1 =array( "error" => "You did not select a file to upload.");
					if($error== $error1){

						$data = $this->upload->data();
						$image =$data['file_name'];
						$post = array(
							'service_name'=>$this->input->post('name'),
							'description'=>$this->input->post('description'),
							's_description'=>$this->input->post('s_description'),
							'status'=>$this->input->post('status'),
							'created_by'=>$this->input->post('created_by')
							);
						$post['image'] = $image;
						return $this->_falshAndRedirects(
							$this->admin_model->add($post),
							"Failed To Insert, Please Try Again.",
							" Inserted Successully."

							);		


					}else{
					

							$this->load->view('admin/newservice',$error); 
					}

				}else{

					$data = $this->upload->data();
					$image =$data['file_name'];
					$post = array(
						'service_name'=>$this->input->post('name'),
						'description'=>$this->input->post('description'),
						's_description'=>$this->input->post('s_description'),
						'status'=>$this->input->post('status'),
						'created_by'=>$this->input->post('created_by')
						);
					$post['image'] = $image;
					return $this->_falshAndRedirects(
						$this->admin_model->add($post),
						"Failed To Insert, Please Try Again.",
						" Inserted Successully."

						);	


				}
			}
			else
			{
				echo "Not Register...Try again!!!nnnn";
			}

		}

		public function blogValidation()
	{	
		$config = [
		'upload_path'	=>		'./uploads/',
		'allowed_types'	=>		'jpg|gif|png|jpeg',
		/*'max_size'      =>      '10',
		'max_width'     =>      '300',
		'max_height'    =>      '300',*/
		];
		$this->load->library('upload', $config);


		$this->form_validation->set_rules('name','name','required|trim');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('s_description','Short description','required');
		$this->form_validation->set_rules('created_by','created_by','required');
		if($this->form_validation->run() ) 
		{
			/*$post = array(
				'service_name'=>$this->input->post('name'),
				'description'=>$this->input->post('description'),
				'status'=>$this->input->post('status'),
				'created_by'=>$this->input->post('created_by')
				);
			$this->upload->do_upload();
			$data = $this->upload->data();
			$image =  $data['file_name'];
			$post['image'] = $image;
			return $this->_falshAndRedirects(
				$this->admin_model->add($post),
				"Failed To Insert, Please Try Again.",
				" Inserted Successully."

				);		

*/
				if(!$this->upload->do_upload()){
					
					$error = array('error'=>$this->upload->display_errors());
					$error1 =array( "error" => "You did not select a file to upload.");
					if($error== $error1){

						$data = $this->upload->data();
						$image =$data['file_name'];
						$post = array(
							'blog_name'=>$this->input->post('name'),
							'description'=>$this->input->post('description'),
							's_description'=>$this->input->post('s_description'),
							'status'=>$this->input->post('status'),
							'created_by'=>$this->input->post('created_by')
							);
						$post['image'] = $image;
						return $this->_falshAndRedirectb(
							$this->admin_model->addblog($post),
							"Failed To Insert, Please Try Again.",
							" Inserted Successully."

							);		


					}else{
					

							$this->load->view('admin/newservice',$error); 
					}

				}else{

					$data = $this->upload->data();
					$image =$data['file_name'];
					$post = array(
						'blog_name'=>$this->input->post('name'),
						'description'=>$this->input->post('description'),
						's_description'=>$this->input->post('s_description'),
						'status'=>$this->input->post('status'),
						'created_by'=>$this->input->post('created_by')
						);
					$post['image'] = $image;
					return $this->_falshAndRedirectb(
						$this->admin_model->addblog($post),
						"Failed To Insert, Please Try Again.",
						" Inserted Successully."

						);	


				}
			}
			else
			{
				echo "Not Register...Try again!!!nnnn";
			}

		}


		public function userValidation()
		{	


			$this->form_validation->set_rules('name','name','required|trim');
			$this->form_validation->set_rules('status','status','required');
			$this->form_validation->set_rules('role','role','required');
			$this->form_validation->set_rules('created_by','created_by','required');
			if($this->form_validation->run() ) 
			{
				$post = array(
					'name'=>$this->input->post('name'),
					'role'=>$this->input->post('role'),
					'status'=>$this->input->post('status'),
					'created_by'=>$this->input->post('created_by'),
					'email'=>$this->input->post('email'),
					'password'=>md5($this->input->post('password'))
					);

				return $this->_falshAndRedirectu(
					$this->admin_model->addUser($post),
					"Failed To Insert, Please Try Again.",
					" Inserted Successully."

					);		
			}
			else
			{
				echo "Not Register...Try again!!!";
			}

		}


		private function _falshAndRedirect( $successful, $successMessage, $failureMessage )
		{
			if( $successful ) {
				$this->session->set_flashdata('feedback',$successMessage);
				$this->session->set_flashdata('feedback_class', 'alert-success');
			} else {
				$this->session->set_flashdata('feedback', $failureMessage);
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			}
			return redirect('admin/services');

		}
			private function _falshAndRedirectnb( $successful, $successMessage, $failureMessage )
		{
			if( $successful ) {
				$this->session->set_flashdata('feedback',$successMessage);
				$this->session->set_flashdata('feedback_class', 'alert-success');
			} else {
				$this->session->set_flashdata('feedback', $failureMessage);
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			}
			return redirect('admin/blog');

		}

		private function _falshAndRedirects( $successful, $successMessage, $failureMessage )
		{
			if( $successful ) {
				$this->session->set_flashdata('feedback',$successMessage);
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			} else {
				$this->session->set_flashdata('feedback', $failureMessage);
				$this->session->set_flashdata('feedback_class', 'alert-success');
			}
			return redirect('admin/newService');

		}
			private function _falshAndRedirectb( $successful, $successMessage, $failureMessage )
		{
			if( $successful ) {
				$this->session->set_flashdata('feedback',$successMessage);
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			} else {
				$this->session->set_flashdata('feedback', $failureMessage);
				$this->session->set_flashdata('feedback_class', 'alert-success');
			}
			return redirect('admin/newBlog');

		}

		private function _falshAndRedirectu( $successful, $successMessage, $failureMessage )
		{
			if( $successful ) {
				$this->session->set_flashdata('feedback',$successMessage);
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			} else {
				$this->session->set_flashdata('feedback', $failureMessage);
				$this->session->set_flashdata('feedback_class', 'alert-success');
			}
			return redirect('admin/newUser');

		}

		private function _falshAndRedirectd( $successful, $successMessage, $failureMessage )
		{
			if( $successful ) {
				$this->session->set_flashdata('feedback',$successMessage);
				$this->session->set_flashdata('feedback_class', 'alert-danger');
			} else {
				$this->session->set_flashdata('feedback', $failureMessage);
				$this->session->set_flashdata('feedback_class', 'alert-success');
			}
			return redirect('admin/user');

		}


	}
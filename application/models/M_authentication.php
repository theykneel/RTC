<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class M_authentication extends CI_Model{
		

		public function __construct(){
			$this->load->database();
		}

		// insert into collateral table
		public function inquire(){
			
			$data = array(
				'users_name' 			=> $this->input->post('full_name'),
				'institution' 			=> $this->input->post('institution'),
				'address' 				=> $this->input->post('institution_address'),
				'mobile_number' 		=> $this->input->post('mobile'),
				'telephone_number' 		=> $this->input->post('landline'),
				'email' 				=> $this->input->post('email'),
				'password' 				=> $this->input->post('password')
			);

			$this->db->insert('acc_user_tbl', $data);
			return $this->input->post('full_name');
		}

		// client login function
		public function login(){

			//Get all inputs
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->db->select("*");
			$this->db->from("acc_user_tbl");
			$this->db->where("email", $email);
			$query = $this->db->get();
			$row = $query->row_array();

			if($query->num_rows() == 1){
				if($email == $row['email'] && $password == $row['password']){

					$newdata = array(
						'userID'  			=> $row['userID'],
				        'users_name'  		=> $row['users_name'],
				        'institution'  		=> $row['institution'],
				        'address'  			=> $row['address'],
				        'mobile_number'  	=> $row['mobile_number'],
				        'telephone_number'  => $row['telephone_number'],
				        'email'				=> $row['email'],
				        'logged_in' 		=> TRUE
					);


					$this->session->set_userdata($newdata);
					#$this->session->set_flashdata('msg', '<script> window.onload = function(){new PNotify({title: "Success !", text: "Welcome back '.$row['Firstname'].'!", type: "success", nonblock: {nonblock: true }});}</script>');
					redirect('client/order');

				}else{
					$this->session->set_flashdata('errors',"<li>Email/Password is incorrect.</li>");
					// $this->load->view('common/lp-assets', $data);
					// $this->load->view('index/exec', $data);
					// $this->load->view('common/lp-footer');
					redirect('home/index');
				}
				
			}else{
				$this->session->set_flashdata('errors',"<li>Email/Password is incorrect.</li>");
				// $this->load->view('common/lp-assets', $data);
				// $this->load->view('index/exec', $data);
				// $this->load->view('common/lp-footer');
				redirect('home/index');
			}

		}


		public function update_profile() {
			$data = array(
				'users_name'		=> $this->input->post('name'),
				'institution'		=> $this->input->post('institution'),
				'address'			=> $this->input->post('address'),
				'mobile_number'		=> $this->input->post('mobile_number'),
				'telephone_number'	=> $this->input->post('landline'),
				'email'				=> $this->input->post('email')
			);

			$this->db->where('userID', $this->input->post('userID'));
			$this->db->update('acc_user_tbl', $data);
			return $this->db->affected_rows();
		}
		
		// admin login function
		public function exec(){

			//Get all inputs
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->db->select("*");
			$this->db->from("admin_tbl");
			$this->db->where("email", $email);
			$query = $this->db->get();
			$row = $query->row_array();

			if($query->num_rows() == 1){
				if($email == $row['email'] && $password == $row['password']){

					$newdata = array(
						'adminID'  			=> $row['adminID'],
				        'admin_name'  		=> $row['admin_name'],
				        'position'  		=> $row['position'],
				        'specimen'  		=> $row['specimen'],
				        'image'  			=> $row['image'],
				        'email'				=> $row['email'],
				        'logged_in' 		=> TRUE
					);


					$this->session->set_userdata($newdata);
					#$this->session->set_flashdata('msg', '<script> window.onload = function(){new PNotify({title: "Success !", text: "Welcome back '.$row['Firstname'].'!", type: "success", nonblock: {nonblock: true }});}</script>');
					redirect('admin/orders');

				}else{
					$this->session->set_flashdata('errors',"<li>Email/Password is incorrect.</li>");
					// $this->load->view('common/lp-assets', $data);
					// $this->load->view('index/exec', $data);
					// $this->load->view('common/lp-footer');
					redirect('home/exec');
				}
				
			}else{
				$this->session->set_flashdata('errors',"<li>Email/Password is incorrect.</li>");
				// $this->load->view('common/lp-assets', $data);
				// $this->load->view('index/exec', $data);
				// $this->load->view('common/lp-footer');
				redirect('home/exec');
			}

		}

		public function update_profile_admin(){
			$data = array(
				'admin_name'		=> $this->input->post('name'),
				'position'			=> $this->input->post('Position'),
				'email'				=> $this->input->post('email'),
				'specimen'			=> $this->input->post('specimen')
			);

			$this->db->where('adminID', $this->input->post('adminID'));
			$this->db->update('adminID', $data);
			return $this->db->affected_rows();
		}

	}
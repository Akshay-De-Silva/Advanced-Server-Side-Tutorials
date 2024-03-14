<?php

defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
	class EmployeeController extends CI_Controller {
		public function index() {
			$this->load->model ( 'EmployeeModel', 'emp' );
			$data ['employees'] = $this->emp->fetch ();

			$this->load->view ( 'template/header.php' );
			$this->load->view ( 'frontend/employee.php', $data );
			$this->load->view ( 'template/footer.php' );
		}

		public function create() {
			$this->load->view ( 'template/header.php' );
			$this->load->view ( 'frontend/create.php' );
			$this->load->view ( 'template/footer.php' );
		}

		public function store() {
			$this->form_validation->set_rules ( 'first_name', 'First Name', 'required' );
			$this->form_validation->set_rules ( 'last_name', 'Last Name', 'required' );
			$this->form_validation->set_rules ( 'phone', 'Phone', 'required' );
			$this->form_validation->set_rules ( 'email', 'Email', 'required' );

			if ($this->form_validation->run ()) {
				$data = array(
					'first_name' => $this->input->post ( 'first_name' ),
					'last_name' => $this->input->post ( 'last_name' ),
					'phone' => $this->input->post ( 'phone' ),
					'email' => $this->input->post ( 'email' )
				);

				$this->load->model ( 'EmployeeModel', 'emp' );
				$this->emp->insertEmployee ( $data );
				$this->session->set_flashdata ( 'status', 'Employee added successfully' );
				redirect(base_url('employee'));
			} else {
				$this->create();
			}
		}

		public function edit($id) {
			$this->load->model ( 'EmployeeModel', 'emp' );
			$data ['employee'] = $this->emp->editEmployee($id);

			$this->load->view ( 'template/header.php' );
			$this->load->view ( 'frontend/edit.php', $data );
			$this->load->view ( 'template/footer.php' );
		}

		public function update($id) {
			$this->form_validation->set_rules ( 'first_name', 'First Name', 'required' );
			$this->form_validation->set_rules ( 'last_name', 'Last Name', 'required' );
			$this->form_validation->set_rules ( 'phone', 'Phone', 'required' );
			$this->form_validation->set_rules ( 'email', 'Email', 'required' );

			if ($this->form_validation->run ()) {
				$data = array(
					'first_name' => $this->input->post ( 'first_name' ),
					'last_name' => $this->input->post ( 'last_name' ),
					'phone' => $this->input->post ( 'phone' ),
					'email' => $this->input->post ( 'email' )
				);

				$this->load->model ( 'EmployeeModel', 'emp' );
				$this->emp->update($id, $data);
				$this->session->set_flashdata ( 'status', 'Employee updated successfully' );
				redirect(base_url('employee'));
			} else {
				$this->edit($id);
			}
		}

		public function delete($id)
		{
			$this->load->model('EmployeeModel', 'emp');
			$this->emp->delete($id);
			$this->session->set_flashdata ( 'status', 'Employee removed successfully' );
			redirect(base_url('employee'));
		}

		public function deleteAll()
		{
			if(isset($_POST['deleteEmpBtn']))
			{
				if(!empty($this->input->post('checkbox_value')))
				{
					$checkedEmp = $this->input->post('checkbox_value');
					$checked_id = [];
					foreach($checkedEmp as $checked)
					{
						array_push($checked_id, $checked);
					}
					$this->load->model('EmployeeModel', 'emp');
					$this->emp->deleteSelectedEmp($checked_id);
					$this->session->set_flashdata ( 'status', 'Selected employees removed successfully' );
					redirect(base_url('employee'));
				}
				else
				{
					$this->session->set_flashdata ( 'status', 'Please select at least one checkbox' );
					redirect(base_url('employee'));
				}
			}
		}

	}


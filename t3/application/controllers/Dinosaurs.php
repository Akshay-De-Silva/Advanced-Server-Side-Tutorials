<?php
class Dinosaurs extends CI_Controller {
	public function index() {
		// Load the model to fetch data about the periods
		$this->load->model('period_model');
		$data['periods'] = $this->period_model->get_all_periods();

		// Load the view for the main page with the periods data
		$this->load->view('main_page', $data);
	}

	public function getinfo($period = NULL) {
		if (!$period) {
			show_error('No period specified',  400);
		}

		// Load the model to fetch data about the period
		$this->load->model('period_model');
		$data['info'] = $this->period_model->get_info($period);

		// Load the view for the specific period
		$this->load->view('period_info', $data);
	}
}
?>


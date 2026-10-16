<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data = array(
			'meta_title' => 'VOXINNOV | Custom Software & Web Development Company Cochin, Kerala',
			'meta_description' => 'VOXINNOV is a premier software development and digital solutions company founded in 2007. We craft bespoke web applications, mobile apps, enterprise software, and branding solutions.',
			'meta_keywords' => 'VOXINNOV, software development company Cochin, web development Kerala, custom software solutions, mobile app development Cochin, IT company Kakkanad, responsive web design, digital transformation Kerala',
			'canonical_url' => base_url()
		);
		$this->load->view('home', $data);
	}

	public function about() {
		$data = array(
			'meta_title' => 'About Us | VOXINNOV - Leading IT & Software Solutions Provider',
			'meta_description' => 'Learn about VOXINNOV\'s journey since 2007. Dynamic IT professionals delivering enterprise software, innovative digital architectures, and scalable technology solutions globally.',
			'meta_keywords' => 'about VOXINNOV, software development team Kerala, IT consulting company Cochin, IT entrepreneurs Kerala, enterprise software development, tech solutions provider India',
			'canonical_url' => base_url('about')
		);
		$this->load->view('about', $data);
	}

	public function service() {
		$data = array(
			'meta_title' => 'Services | VOXINNOV - Web Development, Mobile Apps, Cloud & Branding',
			'meta_description' => 'Explore VOXINNOV\'s digital services: custom web applications, mobile app development, UI/UX web design, corporate branding, managed data center hosting, and data management.',
			'meta_keywords' => 'web development services, mobile app development Kerala, custom web application Cochin, corporate branding design, UI UX design Kerala, managed cloud hosting, data center services Cochin, data management solutions',
			'canonical_url' => base_url('service')
		);
		$this->load->view('service', $data);
	}

	public function contact() {
		$data = array(
			'meta_title' => 'Contact Us | VOXINNOV - Kakkanad, Cochin, Kerala',
			'meta_description' => 'Contact VOXINNOV for your software and web development projects. Visit our office at BCG Tower, Kakkanad, Cochin, or reach us at info@voxinnov.com or +(91) 833-000-1050.',
			'meta_keywords' => 'contact VOXINNOV, IT company Kakkanad address, software company near CSEZ Cochin, hire web developers Kerala, software development inquiry, VOXINNOV phone number, VOXINNOV email',
			'canonical_url' => base_url('contact')
		);
		$this->load->view('contact', $data);
	}
}
<?php
$this->load->view($module . '/layouts/header', ['title' => $title]);
$this->load->view($module . '/layouts/sidebar');
$this->load->view($module . '/layouts/navbar');
$this->load->view($module . '/' . $content);
$this->load->view($module . '/layouts/footer');

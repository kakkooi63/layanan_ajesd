<?php 
require 'vendor/autoload.php';
use Firebase\JWT\JWT;
class Cjwt
{
	private $pv;
	public function __construct()
	{
		$this->pv =& get_instance();
		$this->pv->config->load('custom_config');
		$this->data['key'] = $this->pv->config->item('jwtkey');
	}
	public function encode($data)
	{
		return JWT::encode($data, $this->data['key']);
	}
	public function decode($token)
	{
		return JWT::decode($token, $this->data['key'], ['HS256']);
	}
}
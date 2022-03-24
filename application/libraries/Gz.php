<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class Gz
{
	private $pv;

	public function __construct()
	{
		$this->pv = &get_instance();
		$this->pv->config->load('custom_config');
		$this->api = $this->pv->config->item('api');
		$this->keyauth = $this->pv->config->item('keyauth');
		$this->jw_auth = $this->pv->config->item('jw_auth');
		$this->_client = new Client([
			'base_uri'	=>	$this->api['base_uri'],
			'headers' =>
			[
				'auth-apikey' => $this->keyauth,
				//'Authorization' => $this->jw_auth,
			]
			//'auth'		=>	[$this->api['auth'][0],$this->api['auth'][1]]
		]);

		$this->data['opt'] = [
			'auth-apikey' =>    $this->keyauth,
		];
	}

	public function GET($url, $cond = '', $auth = '')
	{
		if (is_array($cond)) :
			$options = [
				'headers' => $auth,
				'query' =>  array_merge($this->data['opt'], $cond)
			];
		else :
			$options = [
				'headers' => $auth,
				'query' =>  $this->data['opt']
			];
		endif;

		try {
			$response = $this->_client->request('GET', $url, $options);
			$body = $response->getBody();
			return $body->getContents();
		} catch (Exception $e) {
			return $e->getResponse()->getBody()->getContents();
		}
	}

	public function POST($url, $data, $auth = '')
	{
		try {
			$response = $this->_client->request('POST', $url, ['headers' => $auth, 'form_params' => $data]);
			$body = $response->getBody();
			return $body->getContents();
		} catch (Exception $e) {
			return $e->getResponse()->getBody()->getContents();
		}
	}

	public function POST_MULTIPART($url, $data, $auth = '')
	{
		try {
			$arr = [];
			foreach ($data as $key => $value) {

				if (is_array($value) == true) {
					if (isset($_FILES[$key]["name"])) {
						if (is_array($_FILES[$key]["name"]) == true) {
							for($j=0;$j<count($_FILES[$key]["name"]);$j++){
								$arr[] = [
									'Content-type' => 'multipart/form-data',
									'name' => 'img_'.$j,
									'contents' => fopen($_FILES[$key]["tmp_name"][$j], 'r'),
									'filename' => $_FILES[$key]["name"][$j],
									'Mime-Type'=> $_FILES[$key]["type"][$j],
									'size'=> $_FILES[$key]["size"][$j],
								];
							}
						} else {
							if (!empty($_FILES[$key]["name"])) {
								$arr[] = [
									'Content-type' => 'multipart/form-data',
									'name' => $key,
									'contents' => fopen($_FILES[$key]["tmp_name"], 'r'),
									'filename' => $_FILES[$key]["name"],
									'Mime-Type'=> $_FILES[$key]["type"],
									'size'=> $_FILES[$key]["size"],
								];
							}
						}
					} else {
						$arr[] = [
							'name' => $key,
							'contents' => json_encode($value),
						];	
					}

				} else {
					$arr[] = [
						'name' => $key,
						'contents' => $value,
					];	
				}
			}
			$response = $this->_client->request('POST', $url, ['headers' => $auth, 'multipart' => $arr]);
			$body = $response->getBody();
			return $body->getContents();
		} catch (Exception $e) {
			return $e->getResponse()->getBody()->getContents();
		}
		return $data;
	}

	public function PUT_MULTIPART($url, $data, $auth = '')
	{
		try {
			$response = $this->_client->request('PUT', $url, ['headers' => $auth, 'multipart' => $data]);
			$body = $response->getBody();
			return $body->getContents();
		} catch (Exception $e) {
			return $e->getResponse()->getBody()->getContents();
		}
	}


	public function PUT($url, $data, $auth = '')
	{
		try {
			$response = $this->_client->request('PUT', $url, ['headers' => $auth, 'form_params' => $data]);
			$body = $response->getBody();
			return $body->getContents();
		} catch (Exception $e) {
			return $e->getResponse()->getBody()->getContents();
		}
	}


	public function DELETE($url, $data, $auth = '')
	{
		try {
			$response = $this->_client->request('DELETE', $url, ['headers' => $auth, 'form_params' => $data]);
			$body = $response->getBody();
			return $body->getContents();
		} catch (Exception $e) {
			return $e->getResponse()->getBody()->getContents();
		}
	}
}

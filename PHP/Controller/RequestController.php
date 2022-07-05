<?php
class RequestController{
	public $color = 'green';

	private function setConnection(){
		$curl   = curl_init();

		curl_setopt_array($curl, array(
	      CURLOPT_URL => 'https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items?color=' . $this->color,
	      CURLOPT_RETURNTRANSFER    => true,
	      CURLOPT_CUSTOMREQUEST     => 'GET',
	    ));
	    $response = curl_exec($curl);
	    curl_close($curl);

	    return $response;
	}
	
	public function getData( $color ){
		$this->color = ( empty($color)) ? $this->color : $color;
		$data = $this->setConnection();
	    
	    return $data;
	}

	public function createFile( $data ){
		$fechaData  	= gmdate("Y-m-d H:i:s ") . " ::: ";
		$nombreArchivo 	= 'Respuesta1.json';
        $miArchivo  	= fopen( $nombreArchivo, "a" );

        fwrite( $miArchivo, $fechaData . $data . "\n" );
        fclose( $miArchivo );
	}
}
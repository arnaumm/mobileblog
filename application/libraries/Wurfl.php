<?php

require_once 'Wurfl/Client/Client.php';

Class Wurfl {

    private $client;
    private $brand;
    private $model;

    public function __construct() {

        $config = new WurflCloud_Client_Config();

        $config->api_key = ''; // <---------- INSERT YOUR WURFL-CLOUD API KEY HERE <----------

        $this->client = new WurflCloud_Client_Client($config);

        $this->client->detectDevice();

    }

    public function get_mobile_brand() {

        if ($this->client->getDeviceCapability('brand_name') == 'generic web browser') {

            $this->brand = 'You are not using a mobile device!!';

        } else {

            $this->brand = $this->client->getDeviceCapability('brand_name');

        }

        return $this->brand;

    }

    public function get_mobile_model() {

        $this->model = $this->client->getDeviceCapability('model_name');

        return $this->model;

    }

}

?>
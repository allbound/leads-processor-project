<?php

class Processor {

    public function __construct() {


    }

    public function getClient() {

        switch($_GET['processor']) {

            default:
            case 'onestar_upload':

                $auth_token = $_GET['token'];

                $client = new GuzzleHttpClient();
                $client->setHeader('Authorization : ', $auth_token);

                break;
        }

        $this->setClient($client);

        return $client;

    }

    public function setClient($client) {
        $this->client = $client;
        return $client;
    }

    public function upload() {
        $this->client->request('POST', '/upload', [
            'body' => $this->data
        ]);
    }

}

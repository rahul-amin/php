<?php

$response_data = [
    'status' => 200,
    'alerts' => [], // user alert
    'server' => [], // server alert
    'data' => [], // data for json
];
$common_response = new common_response();

class common_response{
    public $status = 200;
    public $alerts = [];
    public $server = [];
    public $data = [];


    function print_json($exit = 1)
    {
        $response_data = [
            'status' => $this->status,
            'alerts' => $this->alerts, // user alert
            'server' => $this->server, // server alert
            'data' => $this->data, // data for json
        ];
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response_data);
        if($exit)
        {
            exit;
        }
    }
}

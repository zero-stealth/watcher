<?php

class Api
{
   
    public $url;
    public $data;
    public $port;
    public $method;

    //get response
    public function get_response() {
        
        //using curl to perfom a post request
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_PORT => $this->port,
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->method,
            CURLOPT_POSTFIELDS => $this->data,
            CURLOPT_HTTPHEADER => [
                "Accept: */*",
                "Content-Type: application/json",
                "User-Agent: Watcher client"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            
            return $response;
        }
    }

     //get response
     public function post_response() {
        
        //using curl to perfom a post request
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_PORT => $this->port,
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->method,
            CURLOPT_HTTPHEADER => [
                "Accept: */*",
                "Content-Type: application/json",
                "User-Agent: Watcher client"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            
            return $response;
        }
    }
}

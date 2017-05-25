<?php

namespace App\Models\LoremIpsum;

use App\Models\LoremIpsum\Request\Data;

class RequestBuilder
{
    /**
     * @var string
     */
    private $format = 'json';

    /**
     * @return string
     */
    private $baseurl;

    /**
     * RequestBuilder constructor.
     * @param $baseurl
     */
    public function __construct($baseurl)
    {
        $this->baseurl = $baseurl;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    public function sendRequest(Data $data)
    {
        $options = array(
            'http' => array(
                'header' => ["Content-type: application/x-www-form-urlencoded"],
                'method' => 'POST',
                'content' => http_build_query($data->getData())
            )
        );

//        dump($data);

        $context = stream_context_create($options);
        $result = file_get_contents($this->baseurl . $this->getFormat(), false, $context);

        if ($result === FALSE) {
            return null;
        }

        $result = json_decode($result);
        return $result->feed->lipsum;
    }
}
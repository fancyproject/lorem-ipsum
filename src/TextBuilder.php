<?php

namespace Fancyproject\LoremIpsum;

class TextBuilder
{
    const PARAGRAPHS = 'paras';
    const WORDS = 'words';
    const BYTES = 'bytes';

    /**
     * @var string
     */
    private $baseurl = 'http://www.lipsum.com/feed/';

    /**
     * @var bool
     */
    private $startWithLorem = true;

    public function __construct()
    {
        $this->requestBuilder = new RequestBuilder($this->baseurl);
    }

    /**
     * @return self
     */
    public function disableStartWithLorem()
    {
        $this->startWithLorem = false;
        return $this;
    }

    /**
     * @return self
     */
    public function enableStartWithLorem()
    {
        $this->startWithLorem = true;
        return $this;
    }

    /**
     * @param $count
     * @return string
     */
    public function words($count)
    {
        return $this->getData(new RequestData($count, self::WORDS, $this->startWithLorem));
    }

    /**
     * @param $count
     * @return string
     */
    public function paragraphs($count)
    {
        return $this->getData(new RequestData($count, self::PARAGRAPHS, $this->startWithLorem));
    }

    /**
     * @param $count
     * @return string
     */
    public function bytes($count)
    {
        return $this->getData(new RequestData($count, self::BYTES, $this->startWithLorem));
    }

    /**
     * @param RequestData $requestData
     * @return string
     */
    private function getData(RequestData $requestData)
    {
        return $this->requestBuilder->sendRequest($requestData);
    }

}

<?php

namespace Fancyproject\LoremIpsum;

class Data
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $type = TextBuilder::WORDS;

    /**
     * @var bool
     */
    private $startWithLorem = true;

    /**
     * Data constructor.
     * @param int $amount
     * @param string $type
     * @param bool $startWithLorem
     */
    public function __construct($amount, $type = TextBuilder::WORDS, $startWithLorem = true)
    {
        $this->amount = $amount;
        $this->type = $type;
        $this->startWithLorem = $startWithLorem;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return [
            'start' => $this->startWithLorem ? 'yes' : 'no',
            'amount' => $this->amount,
            'what' => $this->type
        ];
    }
}
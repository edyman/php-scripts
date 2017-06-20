<?php
namespace App;

Class Divider
{

    protected $counter;
    private $dividers;
    protected $results;

    public function __construct()
    {
        $this->dividers = [3 => ["By 3"], 5 => ["By 5"]];
        $this->results = [];
    }

    public function setCounterNumber($counter)
    {
        $this->counter = $counter;
    }

    public function isDivided()
    {
        $isdivided = 0;
        $stringResult = '';
        foreach ($this->dividers as $key => $divider) {
            if (((int)$this->counter % (int)($key)) == 0) {
                $isdivided++;
                $stringResult .= (string)$divider[0];

            }
        }
        // Not divided more than cero
        if ($isdivided == 0)
            $stringResult .= $this->counter;
        return $stringResult;

    }


}

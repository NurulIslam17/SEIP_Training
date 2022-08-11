<?php

namespace App\classes;

class Series
{
    public $start, $ends, $btnres,$i;
    public $res;
  public function __construct($data)
  {
//      print_r($data);
//      exit();
      $this->start = $data['strat'];
      $this->ends = $data['end'];
      $this->btnres = $data['resultSeries'];
  }

  public function getResult()
  {
      if($this->start < $this->ends)
      {
        for ($i=$this->start; $i<=$this->ends; $i++)
        {
            $this->res .=" ".$i;
        }
      }
      else{
          return "Incorect Series";
      }

      return $this->res;
  }
}
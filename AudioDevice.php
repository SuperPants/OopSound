<?php
  require 'TrackList.php';

   abstract class AudioDevice{
    protected $serialId; //Unieke numerieke serialId van het device.

    protected $model; //Modelnaam van het device.

    protected $make; //Merk van het device.

    protected $priceExBtw; //Prijs van het device exclusief BTW.

    protected $creationDate; //Datum/Tijd waarop het device gemaakt is.

    protected const BTW_PERCENTAGE =  21;//BTW Percentage.


    public function DisplayIdentity($makeInfo,$modelInfo)
    {
      if ($makeInfo == true) {
        $mi1 = "Make: ".$this->make;
      }
      if ($modelInfo == true) {
        $mi2 = "Model: ".$this->model;
      }
      return "Serial: ".$this->serialId .'<br>'.$mi1."<br>".$mi2."<br>";

    }

    public function GetDeviceLifeTime()
    {
      if ($this->creationDate != null) {
        $nu = time(); //datum van vandaag
        $devicedate = strtotime($this->creationDate); //yyyy-mm-dd
        $datediff = $nu - $devicedate;

        return "Lifetime " . round($datediff / (60 * 60 * 24)) . " days. <br>";
      }
      else {
        return "Lifetime unknown. <br>";
      }

    }

    abstract protected function DisplayStorageCapacity();

    //serialId
    function setSerialId($serialId)
    {
      $this->serialId = $serialId;
    }
    function getSerialId()
    {
      return $this->serialId."<br>";
    }

    //Model
    function setModel($model)
    {
      $this->model = $model;
    }
    function getModel()
    {
      return $this->model."<br>";
    }

    //Make
    function setMake($make)
    {
      $this->make = $make;
    }
    function getMake()
    {
      return $this->make."<br>";
    }

    //PriceExBtw
    function setPriceExBtw($priceExBtw)
    {
      $this->priceExBtw = $priceExBtw;
    }
    function getPriceExBtw()
    {
      return $this->priceExBtw."<br>";
    }

    //ConsumerPrice
    function getConsumerPrice()
    {
      return strval($this->priceExBtw += (($this->priceExBtw / 100) * AudioDevice::BTW_PERCENTAGE)) ."<br>";
    }

    //CreationDate
    function setCreationDate($creationDate)
    {
      $this->creationDate = strval($creationDate);
    }
    function getCreationDate()
    {
      return $this->creationDate ."<br>";
    }

  }


?>

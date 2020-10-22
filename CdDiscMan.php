<?php

  require 'MemoRecorder.php';
  require 'interfaces.php';


  class CdDiscMan extends AudioDevice implements IDisplay
  {

    private $mBSize = 700; // Opslagcapaciteit van de CD Discman in MB.

    private $displayWidth; // Breedte van het display in pixels.

    private $displayHeight; // Hoogte van het display in pixels.

    private $isEjected = 'false'; // Geeft de ejection status van de CD Discman aan.

    public function __construct(int $serialId){
      // hier code om serialId uit abstract class AudioDevice te vullen
      // met argument serialId;
      $this->serialId = $serialId;
    }

    function GetResolutionInfo(){
      return "Resolution: ".$this->displayWidth * $this->displayHeight." pixels.";
    }

    function DisplayStorageCapacity(){
      return $this->mBSize . " mB. <br>";
    }

    function Eject(){
      if ($this->isEjected == 'false') {
         $this->isEjected = 'true';
       }
       elseif ($this->isEjected == 'true') {
         $this->isEjected = 'false';
       }
     }

    // MbSize
    function getMbSize(){
      return $this->mBSize ."<br>";
    }

    // DisplayWidth
    function setDisplayWidth($displayWidth){
      $this->displayWidth = $displayWidth;
    }
    function getDisplayWidth(){
      return $this->displayWidth ."<br>";
    }

    // DisplayHeight
    function setDisplayHeigth($displayHeight){
      $this->displayHeight = $displayHeight;
    }
    function getDisplayHeigth(){
      return $this->displayHeight ."<br>";
    }

    // TotalPixels
    function getTotalPixels(){
      return ($this->displayWidth * $this->displayHeight) ."<br>";
    }

    // IsEjected
    function getIsEjected(){
      return $this->isEjected ."<br>";
    }


  }

  $test = new CdDiscMan(2);
  echo $test->getIsEjected();

  $discman = new CdDiscMan(1000);
  $discman->setMake("JVC");
  $discman->setModel("HG-410");
  $discman->setPriceExBtw(149.00);
  $discman->setDisplayWidth(320);
  $discman->setDisplayHeigth(160);
  $discman->setCreationDate("12-02-2006");
  echo $discman->DisplayIdentity( true, true );
  echo "Opslag capacity: " . $discman->DisplayStorageCapacity();
  echo "Display resolution pixels: " . $discman->getTotalPixels();
  echo $discman->GetResolutionInfo(). "<br>";
  echo "Consumer price: " . $discman->getConsumerPrice();
  echo $discman->GetDeviceLifeTime();
  echo "Eject status: " . $discman->getIsEjected();
  $discman->Eject();
  echo "Eject status: " . $discman->getIsEjected();



 ?>

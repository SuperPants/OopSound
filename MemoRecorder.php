<?php

  require 'AudioDevice.php';


  class MemoRecorder extends AudioDevice
  {

    private $maxCartridgeType; // Cartridge met de grootste opslagcapaciteit die
                              // gebruikt kan worden bij deze memorecorder.

    function __construct(int $serialId)
    {
      // hier code om serialId uit abstract class AudioDevice te vullen
      // met argument serialId;
      $this->serialId = $serialId;

    }

    function DisplayStorageCapacity()
    {
      if ($this->maxCartridgeType == 0) {
        return $this->maxCartridgeType = "Max capacity 60 min. <br>";
      }
      if ($this->maxCartridgeType == 1) {
        return $this->maxCartridgeType = "Max capacity 90 min. <br>";
      }
      if ($this->maxCartridgeType == 2) {
        return $this->maxCartridgeType = "Max capacity 120 min. <br>";
      }
      else {
        return  $this->maxCartridgeType = "Max capacity unknown <br>";
      }
    }

    //MaxCartridgeType
    function setMaxCartridgeType($maxCartridgeType)
    {
      $this->maxCartridgeType = $maxCartridgeType; // 'C60'/'C90'/'C120'
    }
    function getMaxCartridgeType()
    {
        return $this->maxCartridgeType."<br>";
    }

  }

  abstract class MemoCartridgeType{
    const __default = self::Unknown;
    const C60 = 0;
    const C90 = 1;
    const C120 = 2;
    const Unknown = 3;
  }

  $memo = new MemoRecorder(1000);
  $memoType = MemoCartridgeType::C90;
  $memo->setMaxCartridgeType($memoType);
  $memo->setMake("Sony");
  $memo->setModel("FE190");
  $memo->setPriceExBtw(129.95);
  $memo->setCreationDate("2016/11/01");
  echo $memo->DisplayIdentity( true, true );
  echo $memo->DisplayStorageCapacity();
  echo $memo->getConsumerPrice();
  echo $memo->GetDeviceLifeTime();
  echo "<br>";



 ?>

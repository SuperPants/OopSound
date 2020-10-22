<?php

  /**
   *
   */
  interface IDisplay
  {
    public function GetResolutionInfo();

    function setDisplayWidth($displayWidth);
    function getDisplayWidth();

    function setDisplayHeigth($displayHeight);
    function getDisplayHeigth();

    function getTotalPixels();


  }



 ?>

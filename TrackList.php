<?php
  require 'Track.php';
  /**
   *
   */
  class TrackList
  {

    private $items = array();


    function __construct()
    {
      $a = func_get_args();
      $i = func_num_args();
      if (method_exists($this,$f='__construct'.$i))
      {
          call_user_func_array(array($this,$f),$a);
      }
    }

    //1 parameter
    public function __construct1()
    {
      //;
    }

    //2 parameters
    public function __construct2($a1)
    {
      //$this->items = array($a1);
    }

    public function Add($obj, $key = null)
    {
      if ($key == null) {
        $this->items[] = $obj;
      }
      else {
        if (isset($this->items[$key])) {
          throw new KeyHasUseException("Key $key already in use.");
        }
        else {
          $this->items[$key] = $obj;
        }
      }
    }

    public function Remove()
    {
      if (isset($this->items[$key])) {
        unset($this- >items[$key]);
      }
      else {
        throw new KeyInvalidException("Invalid key $key.");
      }
    }

    public function Clear()
    {

    }

    public function GetAllTracks()
    {

    }

    public function Shuffle()
    {

    }

    public function getTracks()
    {
      //return
    }

    public function getTotalTime()
    {

    }

  }

  // $t2 = new track(2, 'David Bowie','Heroes');
  // $tl = new TrackList($t2);
  // $tl->Add($t2);
  // foreach ($tl->items as $item) {
  //
  //   echo strval($item);
  // }




?>

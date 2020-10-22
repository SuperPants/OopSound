<?php
  class track{
    private  $id; //Unieke numerieke id voor de track.

    private  $name; //Naam van de track

    private  $artist; //Naam van de uitvoerende artiest

    private  $albumSource; //Naam van het album waar de track van afkomstig is.

    private  $style; //Muziek style categorie.

    private  $length; //Lengte van de track.


    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    function __construct1($id)
    {
      $this->id = $id;
    }

    function __construct2($id,$artist)
    {
      $this->id = $id;
      $this->artist = $artist;
    }

    function __construct3($id,$artist,$name)
    {
      $this->id = $id;
      $this->artist = $artist;
      $this->name = $name;
    }

    //Id
    function setId($id)
    {
      $this->id = $id;
    }
    function getId()
    {
      return $this->id;
    }

    //Name
    function setName($name)
    {
      $this->name = $name;
    }
    function getName()
    {
      return $this->name;
    }

    //Artist
    function setArtist($artist)
    {
      $this->artist = $artist;
    }
    function getArtist()
    {
      return $this->artist;
    }

    //AlbumSource
    function setAlbumSource($albumSource)
    {
      $this->albumSource = $albumSource;
    }
    function getAlbumScource()
    {
      return $this->albumSource;
    }

    //Style
    function setStyle($style)
    {
      $this->style = $style;
    }
    function getStyle()
    {
      return $this->style;
    }

    //Length
    function setlength($seconds, $minutes=null, $hours=null)
    {
      $this->length = new Time($seconds,$minutes,$hours);
    }
    function getLength()
    {
      return $this->length;
    }

    //track
    function getTrack()
    {
      return "id: ".$this->id .'<br>'.
       "name: ".$this->name .'<br>'.
       "artist: ".$this->artist .'<br>'.
       "albumsource: ".$this->albumSource .'<br>'.
       "style: ".$this->style .'<br>'.
       "length: ".$this->length.'<br>';
    }

  }

  abstract class Category{
     const __default =  self::Unknown;
     const Ambient = 0;
     const Blues = 1;
     const Country = 2;
     const Disco = 3;
     const Electro = 4;
     const Hardcore = 5;
     const HardRock = 6;
     const HeavyMetal = 7;
     const Hiphop = 8;
     const Jazz = 9;
     const Jumpstyle = 10;
     const Klassiek = 11;
     const Latin = 12;
     const Other = 13;
     const Pop = 14;
     const Punk = 15;
     const Reggae = 16;
     const Rock = 17;
     const Soul = 18;
     const Trance = 19;
     const Techno = 20;
     const Unknown = 21;
  }

  class Time{
    var $_hours;

    var $_minutes;

    var $_seconds;

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
    public function __construct1($seconds)
    {
      $this->_seconds = $seconds;
    }

    //2 parameters
    public function __construct2($seconds,$minutes)
    {
      $this->_seconds = $seconds;
      $this->_minutes = $minutes;
    }

    //3 parameters
    public function __construct3($seconds,$minutes,$hours)
    {
      $this->_seconds = $seconds;
      $this->_minutes = $minutes;
      $this->_hours = $hours;
    }

    //zet tijd om in secondes
    function GetLengthInSeconds($hours,$minutes,$seconds)
    {
      $secInHours = $hours * 3600; //uur naar secondes en erbij opgetelt
      $secInMinutes = $minutes * 60; //minutes naar secondes en erbij opgetelt
      $secondsInSeconds = $secInHours + $secInMinutes + $seconds; //secondes worden er bij opgetelt
      return $secondsInSeconds;//sprintf('%02d:%02d:%02d',$hours,$minutes,$seconds);
    }

    function __toString()
    {
      return gmdate("H:i:s",$this->GetLengthInSeconds($this->_hours,$this->_minutes,$this->_seconds));
      //return sprintf('%02d:%02d:%02d',$this->_hours,$this->_minutes,$this->_seconds);
    }
  }

  $t1 = new track(1,'Nelly Furtado','Maneater');
  $t1->setAlbumSource('Loose');
  $t1->setlength(100);
  $t1->setStyle('Pop');
  echo $t1->getTrack();
  echo "<br>";

  //$t = new Time(100);
  //echo $t;
 ?>

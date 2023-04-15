<?php
  class Country {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $Code;
    public $Name;
    public $Continent;
    public $Region;
    


    public function __construct($Code,$Name,$Continent,$Region) {
      $this->$Code=$Code;
      $this->$Name=$Name;
      $this->$Continent=$Continent;
      $this->$Region=$Region;
     
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM country');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Country($post['Code'], $post['Name'], $post['Continent'], $post['Region']);
      }

      return $list;
    }
    

    
  }
?>
<?php
  class City {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $ID;
    public $Name;
    public $CountryCode;
    public $District;
    public $Population;

    public function __construct($ID, $Name,$CountryCode,$District,$Population) {
      $this->ID      = $ID;
      $this->Name  = $Name;
      $this->CountryCode = $CountryCode;
      $this->District = $District;
      $this->Population = $Population;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM city LIMIT 20');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new City($post['ID'], $post['Name'],$post['CountryCode'],$post['District'],$post['Population']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM city WHERE ID = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new City($post['ID'], $post['Name'],$post['CountryCode'],$post['District'],$post['Population']);
    }
    public static function delete($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
	  $sql="DELETE FROM city WHERE ID ='$id'";
	  //echo $sql;
	  
      //$req = $db->prepare($sql);
      // the query was prepared, now we replace :id with our actual $id value
      //if ($req->execute(array('id' => $id))){
		  //$req=$r->execute($sql);
	if ($db->query($sql) == TRUE){
	//if (1==2){
		  $rez="USPJESNO brisanje";
	  }
		  else {
			 $rez="NESPJESNO brisanje";;
		  }
		  return $rez;
	  
}
  }
?>
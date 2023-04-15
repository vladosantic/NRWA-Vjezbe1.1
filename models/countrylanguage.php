<?php
  class Countrylanguage {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $CountryCode;
    public $Language;
    public $IsOfficial;
    public $Percentage;

    public function __construct($CountryCode, $Language, $IsOfficial,$Percentage) {
      $this->CountryCode      = $CountryCode;
      $this->Language  = $Language;
      $this->IsOfficial = $IsOfficial;
      $this->Percentage = $Percentage;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM countrylanguage LIMIT 10');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Countrylanguage($post['CountryCode'], $post['Language'], $post['IsOfficial'], $post['Percentage']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $req = $db->prepare('SELECT * FROM countrylanguage WHERE CountryCode = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Countrylanguage($post['CountryCode'], $post['Language'], $post['IsOfficial'], $post['Percentage']);
    }

    public static function delete($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
	  $sql="DELETE FROM countrylanguage WHERE CountryCode ='$id'";
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
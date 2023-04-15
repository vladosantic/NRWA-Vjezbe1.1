<?php
  class CountryController {
    public function index() {
      // we store all the posts in a variable
      $posts = Country::all();
      require_once('views/country/index.php');
    }

   
  }
?>
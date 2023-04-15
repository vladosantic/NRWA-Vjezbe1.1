<?php
  class CountrylanguageController {
    public function index() {
      // we store all the posts in a variable
      $posts = Countrylanguage::all();
      require_once('views/countrylanguage/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Countrylanguage::find($_GET['id']);
      require_once('views/countrylanguage/show.php');
    }

    public function delete() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $zupanija = Countrylanguage::delete($_GET['id']);
      require_once('views/countrylanguage/delete.php');
    }
  }
?>
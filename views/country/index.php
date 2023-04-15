<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->Name; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->Code; ?>'>See content</a>
  </p>
<?php } ?>
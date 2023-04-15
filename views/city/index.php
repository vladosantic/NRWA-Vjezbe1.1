

  <table class="table">
  <thead>
    <tr>
    <th  scope="col">Name</th>
    <th  scope="col">CountryCode</th>
    <th  scope="col">Details</th>
    <th  scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($posts as $post) { ?>
    <tr>
      <th scope="row"><?php echo $post->Name; ?></th>
      <td><?php echo $post->CountryCode; ?></td>
      <td><a href='?controller=city&action=show&id=<?php echo $post->ID; ?>'>See</a></td>
      <td><a href='?controller=city&action=delete&id=<?php echo $post->ID; ?>'>Delete City</a></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>


<table class="table">
  <thead>
    <tr>
    <th  scope="col">CountryCode</th>
    <th  scope="col">Lanuage</th>
    <th  scope="col">Official</th>
    <th  scope="col">Percentage</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($posts as $post) { ?>
    <tr>
      <th scope="row"><?php echo $post->Language; ?></th>
      <td><?php echo $post->CountryCode; ?></td>
      <td><a href='?controller=countrylanguage&action=show&id=<?php echo $post->CountryCode; ?>'>See</a></td>
      <td><a href='?controller=countrylanguage&action=delete&id=<?php echo $post->CountryCode; ?>'>Obrisi ConutryLanuage</a></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>

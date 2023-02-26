<form action="update_profile.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $profile['name']; ?>">
  <label for="description">Description:</label>
  <textarea id="description" name="description"><?php echo $profile['description']; ?></textarea>
  <button type="submit" name="submit">Update</button>
</form>

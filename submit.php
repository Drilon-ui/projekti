<?php 

include 'header.php';
  if (isset($_POST['submit'])) {
      $dbc = mysqli_connect('localhost', 'drilon', 'drilon123', 'web-projekti');
      $title = mysqli_real_escape_string($dbc, trim($_POST['title']));
    $description = mysqli_real_escape_string($dbc, trim($_POST['description']));
    $target_dir = "images/";
$image = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $image);
    $query = "INSERT INTO posts (title, description, image) VALUES ('$title', '$description', '$image')";
    mysqli_query($dbc, $query);
    mysqli_close($dbc);
  }

?>


<div id="container">
        <div class="submit-heading">
            <h1>Submit a post</h1>
        </div>
        <form method="post" class="submit-form" enctype="multipart/form-data"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="submit-title">
                <label for="title">Title: </label>
                <input type="text" name="title" required id="title" placeholder="Enter a title">
            </div>
            <div class="submit-image">
                <label for="image">Image: </label>
                <input type="file" name="file" required id="file">
            </div>
            <div class="submit-description">
                <label for="description">Description: </label>
                <textarea name="description" id="" cols="60" rows="8" value="" required id="description"
                          placeholder="Enter a description"></textarea>
            </div>
            <div class="submit-btn">
                <button name="submit" type="submit">
                    Submit
                </button>
            </div>
        </form>
       <?php
         //   $util::submit();
        ?>
    </div>
<?php 

	include 'footer.php';

?>
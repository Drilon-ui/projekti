<?php 

	include 'header.php';

	$dbc = mysqli_connect('localhost', 'drilon', 'drilon123', 'web-projekti');
	$query = "SELECT * FROM posts";

	$data = mysqli_query($dbc, $query);

	while ($row = $data->fetch_row()) {
		?>
<div style="width: 32%; display: inline-block;">
<h3 style="line-height: 1"><?php echo $row[1] ?></h3>
<img src="<?php echo $row[3] ?>">
<p style="line-height: 1"><?php echo $row[2] ?></div>
 <?php	}

?>

kom ndryshu diqka
<?php 
	
	include 'footer.php';

?>
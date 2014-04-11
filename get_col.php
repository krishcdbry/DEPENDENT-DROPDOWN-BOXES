<?php
include('db_connect.php');
$state = $_POST['state'];
?>

<select name="district">
<?php
$k = @mysql_query("SELECT * FROM state");
while($kk = @mysql_fetch_array($k)){  ?>
	<option name="<?php echo $kk[$state]; ?>" value="<?php echo $kk[$state]; ?>">
	<?php echo $kk[$state]; ?>
	 </option>

<?php }
?>
</select>
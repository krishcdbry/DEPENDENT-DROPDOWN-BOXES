<?php include('db_connect.php'); ?>
<html>
<head>
<style>
select{
	width:300px;
	padding:13px;
	font-size: 17px;
	font-family: calibri;
}
h1{
	font-family: calibri;
	color:#22a0ce;

}
 </style>
</head>
<body>
	<br><center>
	<h1> DEPENDING DROPDOWN BOXES </h1>
	<br><br>
<center>

<form>

<select name="state" id="state">	
	<?php $l = mysql_query("select column_name from information_schema.columns where table_name='state'");
while($ll = @mysql_fetch_array($l)){  ?>

	<option name="<?php echo $ll['column_name']; ?>" value="<?php echo $ll['column_name']; ?>"><?php echo $ll['column_name']; ?> </option>


<?php }
?>
</select>	
<br><br>
 <div class="state_dis">
<select name="district">
	 
	
	 	<option>Srikakulam</option>
	 	<option>Vishakapatnam</option>
	 

</select>

</div>

</form>

</center>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
 <script type="text/javascript">

$( "select" ).change(function () {
    var state = $(this).find("option:selected").val();
    var data = '&state='+state;
    $.ajax({
     type:"POST",
     url:"get_col.php",
     data:data,
     cache:false,
     success:function(html){
      $('.state_dis').html('');
      $('.state_dis').append(html);
     }
    });
  });

 </script>

</body>
</html>
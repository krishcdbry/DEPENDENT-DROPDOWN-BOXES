Hi guyz ,

Now we are going to deal with dependent dropbown boxes. Here it includes two drop dpwn boxes in that the options in second drop down box will be depends on the selection of the first box.

Example :  if  a registration form requires "Country" and "State" or  "state" and "district" select boxes
 that means the second drop down box options will be changed depending on the selection of first box.

If the person chooses the "Tamil nadu " state in the first select box then the options of the second select box alters to tamilnadu districts.

1. Database contains a table with state and district rows and coloumns.

2. HTML page with JQUERY code.

DATABASE :  state.sql

CREATE TABLE IF NOT EXISTS `state` (
  `Andhra Pradesh` varchar(255) NOT NULL,
  `Karnataka` varchar(255) NOT NULL,
  `Madhya Pradesh` varchar(255) NOT NULL,
  `Maharashtra` varchar(255) NOT NULL,
  `Tamil Nadu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Andhra Pradesh`, `Karnataka`, `Madhya Pradesh`, `Maharashtra`, `Tamil Nadu`) VALUES
('Srikakulam', 'Ramanagara', 'Ahmednaga', 'Kalanagar', 'ellurumbam'),
('Vishakapatnam', 'Davanagere', 'Bhandara', 'karmanghar', 'arumbakkam');

  



DATABASE CONNECTION  : db_connect.php

Hostname : localhost
Username  : root (by default)
Password : "" (empty)
Databasename : state-district.

As i already explained the detailed database connection code in my previous post "MYSQL PHP DATABASE CONNECTION" go through it for detailed connection

code as follows

<?php
mysql_connect("localhost","root","");
$j = mysql_select_db("state-district");

?>


HTML CODE: index.php

html code for first select box , the sate - dropdown box


<select name="state" id="state"> 
 <?php $l = mysql_query("select column_name from information_schema.columns where table_name='state'");
while($ll = @mysql_fetch_array($l)){  ?>

 <option name="<?php echo $ll['column_name']; ?>" value="<?php echo $ll['column_name']; ?>"><?php echo $ll['column_name']; ?> </option>


<?php }
?>
</select> 

and initially we has to leave the second drop downbox , i mean the district dropdown box with some default values:

 <div class="state_dis">
<select name="district">
 
<option>Srikakulam</option>
<option>Vishakapatnam</option>
 

</select>
</div>


JQUERY CODE : This jquery code will alter the options in district dropdown box depends on the selected option from the state dropdown box

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


RETRIEVING VALUES FROM TABLE: get_col.php

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
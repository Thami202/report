<?php
include('include/config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysql_query("SELECT * FROM complaintitem WHERE categoryid=$id");
?>
<option value="">Select Complaint Item</option>
<?php
 while($row=mysql_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['complaintitem']); ?></option>
  <?php
 }
}
?>
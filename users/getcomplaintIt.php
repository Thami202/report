<?php
include('includes/config.php');
if(!empty($_POST["catid"])) 
{
 $id=intval($_POST['catid']);
 if(!is_numeric($id)){
 
 	echo htmlentities("invalid industryid");exit;
 }
 else{
 $stmt = mysqli_query($con,"SELECT complaintitem FROM complaintitem WHERE categoryid ='$id'");
 ?><option selected="selected">Select Complaint Item </option><?php
 while($row=mysqli_fetch_array($stmt))
 {
  ?>
  <option value="<?php echo htmlentities($row['complaintitem']); ?>"><?php echo htmlentities($row['complaintitem']); ?></option>
  <?php
 }
}

}
?>
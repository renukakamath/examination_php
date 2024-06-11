<?php include 'teacherheader.php' ;
$tid=$_SESSION['teacher_id'];
extract($_GET);

if (isset($_POST['exam'])) {
	extract($_POST);

	$q="insert into exams values(null,'$sub','$tid','$title','$details','$dat','pending')";
	insert($q);
	alert('successfully');
	return redirect('teacher_manageexam.php');



}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from exams where exam_id='$did'";
	delete($q);
	alert('successfully');
	return redirect('teacher_manageexam.php');
	
}
if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from exams where exam_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);
	$q="update exams set exam_title='$title',exam_details='$details',exam_date='$dat' where exam_id='$uid'";
	update($q);
	alert('successfully');
	return redirect('teacher_manageexam.php');

}





?>


 <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
          <!-- Indicators -->
          
          <div class="carousel-inner" role="listbox">
               <div class="carousel-item active">
                    <div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
                         <div class="dtab">
                              <div class="container">
                                   <div class="row">
                                        <div class="col-md-12 col-sm-12 text-right">
<center>
	<h1 style="color: white">manage exam</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>subject</th>
				<td>
					<select name="sub"  required=""  class="form-control">
						<option>select</option>
						<?php 
                      $q="select * from subjects";
                      $m=select($q);
                      foreach ($m as $row) {?>
                     <option value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_name'] ?></option>
                      <?php }
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>exam title</th>
				<td><input type="text" name="title"  required="" class="form-control" value="<?php echo $res[0]['exam_title'] ?>"></td>
			</tr>
			<tr>
				<th>exam details</th>
				<td><input type="text" name="details"  required="" class="form-control" value="<?php echo $res[0]['exam_details'] ?>"></td>
			</tr>
			<tr>
				<th>exam date</th>
				<td><input type="date" name="dat"  required=""  class="form-control" value="<?php echo $res[0]['exam_date'] ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>subject</th>
				<td>
					<select name="sub"  required=""  class="form-control">
						<option>select</option>
						<?php 
                      $q="select * from subjects";
                      $m=select($q);
                      foreach ($m as $row) {?>
                     <option value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_name'] ?></option>
                      <?php }
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>exam title</th>
				<td><input type="text"  class="form-control" required="" name="title"></td>
			</tr>
			<tr>
				<th>exam details</th>
				<td><input type="text"  class="form-control"  required="" name="details"></td>
			</tr>
			<tr>
				<th>exam date</th>
				<td><input type="date"  class="form-control"  required="" name="dat"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="exam" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>
</div></div></div></div></div></div></div></div>
<center>
	<h1>manage exam</h1>
	<form>
		<table class="table" style="width: 500px"> 
			<tr>
				<th>sino</th>
				<th>subject</th>
				<th>teacher</th>
				<th>exam title</th>
				<th>exam details</th>
				<th>exam date</th>
				<th>exam status</th>
			</tr>
			<?php 

           $q="select * from exams inner join subjects using(subject_id) inner join  teachers using(teacher_id)";
           $res=select($q);
           $sino=1;
           foreach ($res as $row) {
           	?>
           	<tr>
           		<td><?php echo $sino++; ?></td>
           		<td><?php echo $row['subject_name'] ?></td>
           		<td><?php echo $row['first_name'] ?></td>
           		<td><?php echo $row['exam_title'] ?></td>
           		<td><?php echo $row['exam_details'] ?></td>
           		<td><?php echo $row['exam_date'] ?></td>
           		<td><?php echo $row['exam_status'] ?></td>
           		<td><a class="btn btn-success" href="?uid=<?php echo $row['exam_id'] ?>">update</a></td>
           		<td><a class="btn btn-success" href="?did=<?php echo $row['exam_id'] ?>">delete</a></td>
           			<td><a  class="btn btn-success"href="teacher_managequestion.php?eid=<?php echo $row['exam_id'] ?>&ex_name=<?php echo $row['exam_title'] ?>&sid=<?php echo $row['subject_id'] ?>&tid=<?php echo $row['teacher_id'] ?>">manage question</a></td>
           			<td><a  class="btn btn-success" href="teacher_viewparticipation.php?eid=<?php echo $row['exam_id'] ?>">view participation</a></td>
           		
           	</tr>
         <?php 
     }



			 ?>
		</table>
	</form>
</center>

<?php include 'footer.php' ?>
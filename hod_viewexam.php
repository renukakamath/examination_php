<?php include 'hodheader.php' ;


if (isset($_GET['uid'])) {
	extract($_GET);
$q="update exams set exam_status='accept' where exam_id='$uid'";
update($q);



		
}





?>
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false"  style="height: 200px">
		<!-- Indicators -->
		
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.jpg'); ">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">




									</center></div></div></div></div></div></div></div></div>

									
<center>
  
	<h1 style="">view exam</h1>

	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>sino</th>
			<th>exam title</th>
			<th>exam details</th>
			<th>exam date</th>
			<th>exam status</th>
		</tr>
		<?php 
$q="select * from exams inner join subjects using (subject_id) inner join teachers using (teacher_id)";
$res=select($q);
$sino=1;
foreach ($res as $row) {?>
	<tr>
		<td><?php echo $sino++; ?></td>
		<td><?php echo $row['exam_title'] ?></td>
		<td><?php echo $row['exam_details'] ?></td>
		<td><?php echo $row['exam_date'] ?></td>
		<?php 

            if ($row['exam_status']=="pending") {?>
            	<td><a class="btn btn-success" href="?uid=<?php echo $row['exam_id'] ?>">accept</a></td>
           <?php }else{


		 ?>
		<td><?php echo $row['exam_status'] ?></td>
	</tr>
<?php }
}
		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
<?php include 'studentheader.php';

extract($_GET);

 ?>
 <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" style="height: 200px" >
		<!-- Indicators -->
		
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									</div></div></div></div></div></div></div></div>

<center>
	<h1 style="">view result</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>exam</th>
			<th>student</th>
			<th>total marks</th>
		</tr>
		<?php 
$q="SELECT * FROM result INNER JOIN exams USING(exam_id)INNER JOIN students USING (student_id) WHERE exam_id='$eid'
";
$res=select($q);
$sino=1;
foreach ($res as $row) {?>
	<tr>
		<td><?php echo $sino++; ?></td>
		<td><?php echo $row['exam_title'] ?></td>
		<td><?php echo $row['first_name'] ?></td>
		<td><?php echo $row['total_mark'] ?></td>
	
	</tr>
<?php }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
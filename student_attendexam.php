<?php include 'studentheader.php' ;
$sid=$_SESSION['student_id'];
extract($_GET);

if (isset($_GET['eid'])) {
	extract($_GET);
	echo$q="insert into participation values(null,'$eid','$sid')";
       insert($q);
    
       
}




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
	<h1 style="color: white">attend exam</h1>
	<table class="table" style="width: 500px;color: white">
	<!-- /<h1 style="">view question</h1> -->
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>exam</th>
			
			<th>subject</th>
			
		
			
			<?php 

           $q="SELECT * FROM questions INNER JOIN subjects USING (subject_id) INNER JOIN exams USING(subject_id) WHERE subject_id='$sid'";
           $res=select($q);
           $sino=1;
           foreach ($res as $row) {
           	?>
           <tr>
           	<td><?php echo $sino++; ?></td>
           	<td><?php echo $row['exam_title'] ?></td>
           
           	<td><?php echo $row['subject_name'] ?></td>
           <td><a class="btn btn-success" href="attend_exam.php?quid=<?php echo $row['question_id'] ?>&qid=<?php echo $row['question'] ?>">attend exam</a></td>
           	
           
           </tr>
          <?php
           }



			 ?>
		</tr>
	</table>
</center>
	</form>
</center>

<?php include 'footer.php' ?>

<?php include 'studentheader.php' ?>
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
	<h1 style="">view question</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>exam</th>
			<th>teacher</th>
			<th>subject</th>
			<th>question</th>
			<th>mark</th>
			<th>description</th>
			<?php 

           $q="SELECT * FROM questions  INNER JOIN teachers USING(teacher_id) INNER JOIN `exams` USING(`teacher_id`) INNER JOIN `subjects` ON `subjects`.`subject_id`=`questions`.`subject_id`";
           $res=select($q);
           $sino=1;
           foreach ($res as $row) {
           	?>
           <tr>
           	<td><?php echo $sino++; ?></td>
           	<td><?php echo $row['exam_title'] ?></td>
           	<td><?php echo $row['first_name'] ?></td>
           	<td><?php echo $row['subject_name'] ?></td>
           	<td><?php echo $row['question'] ?></td>
           	<td><?php echo $row['maximum_mark'] ?></td>
           	<td><?php echo $row['description'] ?></td>
           	
           	<td><a class="btn btn-success" href="student_option.php?qid=<?php echo $row['question_id'] ?>&quid=<?php echo $row['question'] ?>">option</a></td>
           </tr>
          <?php
           }



			 ?>
		</tr>
	</table>
</center>

<?php include 'footer.php' ?>
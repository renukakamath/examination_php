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
	<h1 style="">view exam</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>subject</th>
				<th>student</th>
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

              <?php 

                if ($row['exam_status']=="accept") {?>

                  <td><a  class=" btn btn-success"href="student_attendexam.php?eid=<?php echo $row['exam_id'] ?>&sid=<?php echo $row['subject_id'] ?>">attend exam</a></td>
                 <td><a class="btn btn-success" href="student_viewresult.php?eid=<?php echo $row['exam_id'] ?>">view result</a></td>
                 
               <?php }else{


               ?>

           		<td><?php echo $row['exam_status'] ?></td>
           		
           		
           		

           	</tr>
         <?php 
     }

}

			 ?>
		</table>
	</form>
</center>

<?php include 'footer.php' ?>

<?php include 'studentheader.php';
$sid=$_SESSION['student_id'];
extract($_GET);
if (isset($_POST['question'])) {
	extract($_POST);





echo$q="insert into answers values(null,'$quid','$sid','$options','1')";
insert($q);
 //      alert('successfully');
	// return redirect('attend_exam.php');
  }
  	


 ?>
 <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
    <!-- Indicators -->
    
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
          <div class="dtab">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 text-right">
<center>
	<form method="post">
		<table class="table" style="width: 700px">
			<tr>
				<th style="color: white">question</th>
				<td><textarea name="que"><?php echo $qid; ?></textarea></td>
			</tr>
		<tr>
			<th style="color: white">answers</th>
			<?php 
         $q="SELECT * FROM `option` INNER JOIN questions USING (question_id) where question_id='$quid'";
             $res=select($q);

               foreach ($res as $row) {?>
               <td style="color: white"><input type="radio" class="btn btn-success" name="options" value="<?php echo $row['option'] ?>"><?php echo $row['option'] ?>
				</td>
              <?php }


			 ?>
			
		</tr>
		
		<tr>
			<td><input type="submit" name="question" value="submit"></td>
		</tr>
		</table>
	</form>
</center>
 </div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>
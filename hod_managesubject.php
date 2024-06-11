<?php include 'hodheader.php' ;
if (isset($_POST['course'])) {
	extract($_POST);

	$q="insert into subjects values(null,'$cou','$sub')";
	insert($q);

	alert('successfully');
	return redirect('hod_managesubject.php');
	
}
if (isset($_GET['did'])) {
	extract($_GET);

	echo$q="delete from subjects where subject_id='$did'";
	delete($q);

	alert('successfully');
	return redirect('hod_managesubject.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);
	echo$q="select * from subjects where subject_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);
	$q="update subjects set course_id='$cou',subject_name='$sub' where subject_id='$uid'";
	update($q);

alert('successfully');
	return redirect('hod_managesubject.php');
	
}







?>
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<center>
<center>
	<h1 style="color: white">manage subject</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>course</th>
				<td>
					<select name="cou"  required="" class="form-control">
						<option>select</option>
						<?php 

                         $q="select * from courses";
                         $m=select($q);
                         foreach ($m as $row) {
                         	?>
                         	<option value="<?php echo $row['course_id'] ?>"><?php echo $row['course_name'] ?></option>
                        <?php
                    }

						 ?>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>subject name</th>
				<td><input type="text" name="sub"  required="" class="form-control" value="<?php echo $res[0]['subject_name'] ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>course</th>
				<td>
					<select name="cou"  required="" class="form-control">
						<option>select</option>
						<?php 

                         $q="select * from courses";
                         $m=select($q);
                         foreach ($m as $row) {
                         	?>
                         	<option value="<?php echo $row['course_id'] ?>"><?php echo $row['course_name'] ?></option>
                        <?php
                    }

						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>subject name</th>
				<td><input type="text"  required="" class="form-control" name="sub"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="course" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>
</center></div></div></div></div></div></div></div></div>
<center>
	<h1>view manage subject</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>course</th>
			<th>subject</th>
		</tr>
		<?php 


    $q="select * from subjects inner join courses using (course_id)";
    $res=select($q);
    $sino=1;
    foreach ($res as $row) {
    	?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['course_name'] ?></td>
    		<td><?php echo $row['subject_name'] ?></td>
    		<td><a class="btn btn-success" href="?uid=<?php echo $row['course_id'] ?>">update</a></td>
    		<td><a class="btn btn-success" href="?did=<?php echo $row['course_id'] ?>">delete</a></td>
    	</tr>
    <?php
}



		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
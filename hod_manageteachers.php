<?php include 'hodheader.php';

if (isset($_POST['teacher'])) {
	extract($_POST);


   echo$q="insert into login values(null,'$uname','$pwd','teacher')";
   $id=insert($q);
   echo$q="insert into teachers values(null,'$id','$sub','$fname','$lname','$qua','$phone','$email','$date')";
   insert($q);
   alert('successfully');
   return redirect('hod_manageteachers.php');
 }

if (isset($_GET['did'])) {
	extract($_GET);

	echo$q="delete from teachers where teacher_id='$did' ";
	delete($q);
	alert('successfully');
   return redirect('hod_manageteachers.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);

	echo$q="select * from teachers inner join subjects using(subject_id) where teacher_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update teachers set subject_id='$sub',first_name='$fname',last_name='$lname',qualification='$qua',phone='$phone',email='$email',join_date='$date' where teacher_id='$uid'";
	update($q);
				alert('successfully');
			   return redirect('hod_manageteachers.php');
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
	<h1 style="color: white">manage teacher</h1>
	<form method="POST">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>subjects</th>
				<td>
					<select name="sub"  required="" class="form-control" >
						<option value="<?php echo $res[0]['subject_id'] ?>"><?php echo $res[0]['subject_name'] ?></option>
						<option>select</option>
						<?php 
                       $q="select * from subjects";
                       $m=select($q);
                       foreach ($m as $row) {
                       	?>
                       	<option value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_name'] ?></option>
                       <?php
                   }


						 ?>
			
			<tr>
				<th>first name</th>
				<td><input type="text" name="fname"   required="" class="form-control" value="<?php echo $res[0]['first_name']; ?>"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" name="lname"  required="" class="form-control" value="<?php echo $res[0]['last_name']; ?>"></td>
			</tr>
			<tr>
				<th>qualification</th>
				<td><input type="text" name="qua"  required=""  class="form-control" value="<?php echo $res[0]['qualification'];?>"></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text" name="phone"  required="" pattern="[0-9]{10}" class="form-control" value="<?php echo $res[0]['phone']; ?>"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email" name="email"  required="" class="form-control" value="<?php echo $res[0]['email']; ?>"></td>
			</tr>
			
			<tr>
				<th>join date</th>
				<td><input type="date" name="date"  required="" class="form-control" value="<?php echo $res[0]['join_date']; ?>"></td>
			
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>subjects</th>
				<td>
					<select name="sub"  required="" class="form-control" >
						<option>select</option>
						<?php 
                       $q="select * from subjects";
                       $m=select($q);
                       foreach ($m as $row) {
                       	?>
                       	<option value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_name'] ?></option>
                       <?php
                   }


						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>first name</th>
				<td><input type="text"  class="form-control"  required="" name="fname"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text"  class="form-control"  required="" name="lname"></td>
			</tr>
			<tr>
				<th>qualification</th>
				<td><input type="text"  class="form-control"  required="" name="qua"></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text"  class="form-control"  required="" pattern="[0-9]{10}" name="phone"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email"  class="form-control"  required="" name="email"></td>
			</tr>
			
			<tr>
				<th>join date</th>
				<td><input type="date"  class="form-control"  required="" name="date"></td>
			</tr>
				<tr>
				<th>User Name</th>
				<td><input type="text"  class="form-control"  required="" name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password"  class="form-control"  required="" name="pwd"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="teacher" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	<?php } ?>

	</form>
</center>
</div></div></div></div></div></div></div></div>
<center>
	<h1>view manage teacher</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>subject</th>
				<th>first name</th>
				<th>last name</th>
				<th>qualification</th>
				<th>phone</th>
				<th>email</th>
				
				<th>join date</th>
			</tr>
          <?php 

     $q="select * from teachers inner join subjects using(subject_id)";
     $res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
     	<tr>
     		<td><?php echo $sino++; ?></td>
     		<td><?php echo $row['subject_name'] ?></td>
     		<td><?php echo $row['first_name'] ?></td>
     		<td><?php echo $row['last_name'] ?></td>
     		<td><?php echo $row['qualification'] ?></td>
     		<td><?php echo $row['phone'] ?></td>
     		<td><?php echo $row['email'] ?></td>
     		
     		<td><?php echo $row['join_date'] ?></td>
     		<td><a class="btn btn-success" href="?uid=<?php echo $row['teacher_id'] ?>">update</a></td>
     		<td><a class="btn btn-success" href="?did=<?php echo $row['teacher_id'] ?>">delete</a></td>
     	</tr>
    <?php 
}





           ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>
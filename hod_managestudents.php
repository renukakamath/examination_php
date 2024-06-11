<?php include 'hodheader.php';

if (isset($_POST['student'])) {
	extract($_POST);


   $q="insert into login values(null,'$uname','$pwd','student')";
   $id=insert($q);
   $q="insert into students values(null,'$id','$cour','$fname','$lname','$dob','$place','$email','$add','$place','$pin')";
   insert($q);
   alert('successfully');
   return redirect('hod_managestudents.php');
}
if (isset($_GET['did'])) {
	extract($_GET);

	echo$q="delete from students where student_id='$did' ";
	delete($q);
	alert('successfully');
   return redirect('hod_managestudents.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);

$q="select * from students  where student_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update students set course_id='$cour', first_name='$fname',last_name='$lname',dob='$dob',phone='$phone',email='$email',address='$add',place='$place',pincode='$pin' where student_id='$uid'";
	update($q);
	alert('successfully');
   return redirect('hod_managestudents.php');
}




 ?>

 <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<
		<div class="carousel-inner" role="listbox" >
			<div class="carousel-item active">
				<div id="home" class="first-section"  style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
								                   
                        

<center>
	<h1  style="color: white">manage students</h1>
	<form method="POST">
		<?php if (isset($_GET['uid'])) { ?>
			<div>
		<table class="table" style="width: 500px;height: auto;color: white">
			<tr>
				<th>course</th>
				<td>
					<select name="cour"  required="" class="form-control">
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
				<th>first name</th>
				<td><input type="text" name="fname"  required="" class="form-control" value="<?php echo $res[0]['first_name']; ?>"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" name="lname"  required=""  class="form-control" value="<?php echo $res[0]['last_name']; ?>"></td>
			</tr>
			<tr>
				<th>dob</th>
				<td><input type="date" name="dob"  required="" class="form-control" value="<?php echo $res[0]['dob'];?>"></td>
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
				<th>address</th>
				<td><textarea name="add"  required=""  class="form-control" ><?php echo $res[0]['address']; ?></textarea></td>
			</tr>
			<tr>
				<th>place</th>
				<td><input type="text" name="place"  required=""  class="form-control" value="<?php echo $res[0]['place']; ?>"></td>
			</tr>
			<tr>
				<th>picode</th>
				<td><input type="text" name="pin"  required="" pattern="[0-9]{6}"  class="form-control" value="<?php echo $res[0]['pincode']; ?>"></td>
			
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
		</div>
	<?php }else{ ?>



		<div style="overflow: scroll;height: 550px;width: 1300px">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>course</th>
				<td>
					<select name="cour"  class="form-control">
						<option>select</option>
						<?php 
                       $q="select * from courses";
                       $res=select($q);
                       foreach ($res as $row) {
                       	?>
                       	<option value="<?php echo $row['course_id'] ?>"><?php echo $row['course_name'] ?></option>
                       <?php
                   }


						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>first name</th>
				<td><input type="text"  required=""  class="form-control" name="fname"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text"   required="" class="form-control" name="lname"></td>
			</tr>
			<tr>
				<th>dob</th>
				<td><input type="date"  required=""  class="form-control" name="dob"></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text"  required="" pattern="[0-9]{10}" class="form-control" name="phone"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email"  required=""  class="form-control" name="email"></td>
			</tr>
			<tr>
				<th>address</th>
				<td><textarea name="add"  required="" class="form-control"></textarea></td>
			</tr>
			<tr>
				<th>place</th>
				<td><input type="text"   required="" class="form-control" name="place"></td>
			</tr>
			<tr>
				<th>picode</th>
				<td><input type="text"  required="" pattern="[0-9]{6}" class="form-control" name="pin"></td>
			</tr>
				<tr>
				<th>User Name</th>
				<td><input type="text" required=""  class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password"  required=""  class="form-control" name="pwd"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="student" value="submit" class="btn btn-success"></td>
			</tr>
		</table>
	</div>
	<?php } ?>

	</form>
</center>
  </div></div></div></div></div></div></div></div>  
<center>
	<h1>view manage students</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>course</th>
				<th>first name</th>
				<th>last name</th>
				<th>dob</th>
				<th>phone</th>
				<th>email</th>
				<th>address</th>
				<th>place</th>
				<th>picode</th>
			</tr>
          <?php 

     $q="select * from students inner join courses using(course_id)";
     $res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
     	<tr>
     		<td><?php echo $sino++; ?></td>
     		<td><?php echo $row['course_name'] ?></td>
     		<td><?php echo $row['first_name'] ?></td>
     		<td><?php echo $row['last_name'] ?></td>
     		<td><?php echo $row['dob'] ?></td>
     		<td><?php echo $row['phone'] ?></td>
     		<td><?php echo $row['email'] ?></td>
     		<td><?php echo $row['address'] ?></td>
     		<td><?php echo $row['place'] ?></td>
     		<td><?php echo $row['pincode'] ?></td>
     		<td><a class="btn btn-success" href="?uid=<?php echo $row['student_id'] ?>">update</a></td>
     		<td><a class="btn btn-success" href="?did=<?php echo $row['student_id'] ?>">delete</a></td>
     	</tr>
    <?php 
}





           ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>
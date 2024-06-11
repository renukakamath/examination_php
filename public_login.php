<?php include 'publicheader.php';


if (isset($_POST['login'])) 
{
	extract($_POST);
	
	$q="select * from login where user_name='$uname' and password='$pwd'";
	$res=select($q);

	if (sizeof($res>0)){
		$_SESSION['logid']=$res[0]['login_id'];
		          $lid=$_SESSION['logid'];

		if ($res[0]['user_type']=="HOD") 
		{
			return redirect('hod_home.php');
		}elseif($res[0]['user_type']=="teacher")
		{
			$q="select * from teachers where login_id='$lid'";
			$r=select($q);
			if (sizeof($r>0)) {
				$_SESSION['teacher_id']=$r[0]['teacher_id'];
				$tid=$_SESSION['teacher_id'];
			}

			
	      return redirect('teacher_home.php');
        }elseif ($res[0]['user_type']=="student") {
        	echo$q="select * from students where login_id='$lid'";
        	$r=select($q);
        	   if (sizeof($r>0)) {
        		$_SESSION['student_id']=$r[0]['student_id'];
        		echo$sid=$_SESSION['student_id'];
        	}
        	return redirect('student_home.php');
        }else{
            alert('invalid username & password');
        }

	}

	      
	
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

	<h1 style="color:white ">Login</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>User Name</th>
				<td><input type="text"  required="" class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password"  required=""  class="form-control" name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="login" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	</form>
</center>   
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
		</div>
	</div>

     
                       

<?php include 'footer.php' ?>

<?php include 'studentheader.php';
extract($_GET);


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
	<h1 style="color: white">option</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
		<tr>
			<th>question</th>
			<td><input type="" value="<?php echo $quid ?>" name="answer"></td>
		</tr>
		
		<tr>
			<th>option</th>
			<?php 

              $q="select * from `option`";
              $res=select($q);
              foreach ($res as $row) {
              	?>

             
              <?php
          }
                 

			 ?>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="option" class="btn btn-success" value="submit"></td>
		</tr>

	</table>
	</form>
</center>
<?php include 'footer.php' ?>
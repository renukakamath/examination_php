
<?php include 'studentheader.php' ?>
 <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false"  style="height: 200px">
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
	<h1 style="">view manage teacher</h1>
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
     	
     	</tr>
    <?php 
}





           ?>
		</table>
	</form>
</center>

<?php include 'footer.php' ?>
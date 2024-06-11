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
	<h1 style="">view subject</h1>
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
    		
    	</tr>
    <?php
}



		 ?>
	</table>
</center>
<?php include 'footer.php' ?>
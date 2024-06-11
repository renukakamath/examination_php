<?php include 'teacherheader.php';
extract($_GET);
 ?>
<center>
	
		<table class="table" style="height: 100px">
			<tr>
				<th>sino</th>
				
				<th>answer details</th>
				<th>correct answer</th>
				
				
			</tr>
			<?php 

              $q="select * from answers inner join `option` using(question_id) where student_id='$sid' ";
                   $res=select($q);
                   $sino=1;

                   foreach ($res as $row) {
                   	?>
                   <tr>
                   	
                   	<td><?php echo $sino++; ?></td>
                   	<td><?php echo $row['answer_details'] ?></td>
                   	<td><?php echo $row['correctanswer'] ?></td>
                   
                   </tr>

                   <?php
                    }
			 ?>
		</table>
	<a class="btn btn-success"href="teacher_publishresult.php?sid=<?php echo $row['student_id'] ?>&sid=<?php echo $row['student_id'] ?>">publish result</a>
</center>
<?php include 'footer.php' ?>
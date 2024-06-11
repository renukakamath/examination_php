<?php 
include "examiner_header.php";
extract($_GET);
?>
<?php
if(isset($_POST['submit'])){
    extract($_POST);
    $q="INSERT INTO `questions` VALUES(NULL,'$ex_id','qust','1')";
    $q_id=insert($q);
    //  $noofoption;

    for($i=1; $i<=intval($noofoption); $i++){
        $t1="text".$i;
       $t1=$_POST[$t1];
    //   alert($t1);
      if (intval($i)==intval($answersel)){
        $status="Yes";
      }
       
    else{
        $status="No";
        
    }
    // alert($status);
      $q="INSERT INTO `qstnanswer` VALUES(NULL,'$q_id','$t1','$status')";
      insert($q);
   
    }

}
?>

         <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix" style="height: 200px;">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
      
      </div>

    </div>
  </section><!-- End Hero -->
    <br><br>

<form method="post">
 <center>
        <h1><U>Exam Name : <?php echo $ex_name; ?></U></h1><br>
     <h1><U>QUESTIONS</U></h1><br>
     <table class="table" style="width: 600px;">
        

         <tr>
             <th>Question</th>
             <td><textarea name="qust" class="form-control"></textarea></td>
         </tr>
           <tr>
                <th>Number of Option</th>
                <td><select id="noofoption" name="noofoption" class="form-control">
                     <option Selected>Select</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                </select></td>
           </tr>
           <tr>
                <td colspan="2" align="center">
                     <table id="container"> 
                     </table>	
                </td>
           </tr>
         
         <tr>
         <td colspan="2" align="center"><input type="submit" name="submit" class="btn btn-success" value="Submit"></td>
         </tr>
         
     </table>
<br><br>
     <table class="table" style="width: 700px;">
         <h2>Questions Details</h2><br>
         <tr>
             <th>Question</th>
             <th>Option</th>
             <th>Answer</th>
             <th>Mark</th>
            
         </tr>
         <?php 

            $qu1="SELECT * FROM `questions` INNER JOIN `qstnanswer` USING(`qstn_id`) WHERE `exam_id`='$ex_id' AND `status`='Yes'";
            $rt=select($qu1);

            foreach($rt as $rows){ ?>
               
                    <tr>
                    <td><?php echo $rows['question']; ?></td>
                     <td>
               
              
                <?php
                $qu="SELECT * FROM `qstnanswer` INNER JOIN `questions` USING(`qstn_id`) WHERE `qstn_id`='".$rows['qstn_id']."'";
            $ress=select($qu);

            foreach($ress as $row){ ?>
            <table>
                <tr>        
                    <td><?php echo $row['option']; ?></td>              
                </tr>
            </table>
         <?php   } ?>
         </td>   
        
         <?php 
                       if($rows['status']=='Yes'){ ?>
                     
                        <td ><?php echo $rows['option']; ?></td>
                        <td ><?php echo $rows['max_mark']; ?></td>
                    <?php   }

                    ?>
         </tr>
         <?php   }
            ?>
           
     </table>
 </center>		
</form>
<br><br>
<script type="text/javascript">
$(document).ready(function () {
      
    $('#noofoption').change(function () {

        var value = $(this).val(); var toAppend = '';
        if (value == 2) {
            toAppend = "<tr><th>Option&nbsp;&nbsp;</th><td>1<input type='text' class='form-control' name='text1'><br>2<input type='text' class='form-control' name='text2' ></td></tr><tr><th>Answer</th><td align='center'>1&nbsp;&nbsp;<input type='radio' name='answersel' value='1'>&nbsp;&nbsp;2&nbsp;&nbsp;<input type='radio' name='answersel' value='2'></td></tr>"; $("#container").html(toAppend); return;
        }
        if (value == 3) {
            toAppend = "<tr><th>Option&nbsp;&nbsp;</th><td>1<input type='text'  class='form-control' name='text1'><br>2<input type='text'  class='form-control' name='text2'><br>3<input type='text'  class='form-control' name='text3'></td></tr><tr><th>Answer</th><td align='center'>1&nbsp;&nbsp;<input type='radio' name='answersel' value='1'>&nbsp;&nbsp;2&nbsp;&nbsp;<input type='radio' name='answersel' value='2'>&nbsp;&nbsp;3&nbsp;&nbsp;<input type='radio' name='answersel' value='3'></td></tr>"; $("#container").html(toAppend); return;
        }
         if (value == 4) {
            toAppend = "<tr><th>Option&nbsp;&nbsp;</th><td>1<input type='text' class='form-control' name='text1'><br>2<input type='text' class='form-control' name='text2'><br>3<input type='text' class='form-control' name='text3'><br>4<input type='text' class='form-control' name='text4'></td></tr><tr><th>Answer</th><td align='center'>1&nbsp;&nbsp;<input type='radio' name='answersel' value='1'>&nbsp;&nbsp;2&nbsp;&nbsp;<input type='radio' name='answersel' value='2'>&nbsp;&nbsp;3&nbsp;&nbsp;<input type='radio' name='answersel' value='3'>&nbsp;&nbsp;4&nbsp;&nbsp;<input type='radio' name='answersel' value='4'></td></tr>"; $("#container").html(toAppend); return;
        
        }
        if (value == 5) {
            toAppend = "<tr><th>Option&nbsp;&nbsp;</th><td>1<input type='text' class='form-control' name='text1'><br>2<input type='text' class='form-control' name='text2'><br>3<input type='text' class='form-control' name='text3'><br>4<input type='text' class='form-control' name='text4'><br>5<input type='text' class='form-control' name='text5'></td></tr><tr><th>Answer</th><td align='center'>1&nbsp;&nbsp;<input type='radio' name='answersel' value='1'>&nbsp;&nbsp;2&nbsp;&nbsp;<input type='radio' name='answersel' value='2'>&nbsp;&nbsp;3&nbsp;&nbsp;<input type='radio' name='answersel' value='3'>&nbsp;&nbsp;4&nbsp;&nbsp;<input type='radio' name='answersel' value='4'>&nbsp;&nbsp;5&nbsp;&nbsp;<input type='radio' name='answersel' value='5'></td></tr>"; $("#container").html(toAppend); return;
        
        }

    });

});
 </script>


<?php 
include "footer.php";
?>


 $q1="select * from `option` inner join questions using (question_id) where question_id='$quid'";
  $res=select($q1);
  if ($res['correctanswer']=='$option') 
  {
    $q2="insert into answers values(null,'$quid','$sid','$options','1')";
    insert($q2);
  }
  elseif($res['correctanswer']=='$option')
  {
      $q3="insert into answers values(null,'$quid','$sid','$options','0')";
      insert($q3);
  }
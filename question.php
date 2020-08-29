
<?php
include "header.php";
include "connection.php";
$id=$_GET["id"];
$idl=$_GET["idl"];
$exam_for_user="";
$res=mysqli_query($link,"select * from exam_for_user where id=$id");
while($row=mysqli_fetch_array($res))
{
    $exam_for_user=$row["exam"];

}
?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="add_edit_question.php"  class="tip-bottom"><i class="icon-home"></i>
            Add question inside <?php echo"<font color='red'>".$exam_for_user."</font>"?></a>
    </div>
</div>

<div class="container-fluid">
  <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Question With Text</h5>
      </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Add Question :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Question" name="question" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 1 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 1" name="add_opt1"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 2 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 2" name="add_opt2"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 3 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 3" name="add_opt3"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 4 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 4" name="add_opt4"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Answer :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Answer" name="add_answer"/>
              </div>
            </div>
            <div class="alert alert-danger" id="error" style="display:none">
                <strong>The Question Already Exist! Please Try Another.</strong>
            </div>
            <div class="form-actions text-center">
              
              <button type="submit" name="submitl"  class="btn btn-success">Save Question</button>
              
            </div>
            <div class="alert alert-success" id="success" style="display:none">
                <strong>Record Inserted Successfully!</strong>
            </div>
          </form>
        </div>
      </div>

      <br>
      <br>
      <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Question With Image</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Add Question :</label>
              <div class="controls">
                <input type="text" class="span11" name="txquestion" />
              </div>
              
            </div>
            <div class="control-group">
              <label class="control-label">Add Image Option 1 :</label>
              <div class="controls">
                <input type="file" class="span11" name="add_igopt1"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Image Option 2 :</label>
              <div class="controls">
                <input type="file" class="span11" name="add_igopt2"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Image Option 3 :</label>
              <div class="controls">
                <input type="file" class="span11" name="add_igopt3"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Image Option 4 :</label>
              <div class="controls">
                <input type="file" class="span11" name="add_igopt4"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Image Answer :</label>
              <div class="controls">
                <input type="file" class="span11" name="add_iganswer"/>
              </div>
            </div>
            <div class="alert alert-danger" id="error" style="display:none">
                <strong>The Question Already Exist! Please Try Another.</strong>
            </div>
            <div class="form-actions text-center">
              
              <button type="submit" name="submitl_img"  class="btn btn-success">Save Image Question</button>
              
            </div>
            <div class="alert alert-success" id="success" style="display:none">
                <strong>Record Inserted Successfully!</strong>
            </div>
          </form>
        </div>
        </div>
        </div>


        <br>
      <br>
      <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
      <div id="content-header">
        <div id="breadcrumb"><a href="add_edit_question.php"  class="tip-bottom"><i class="icon-home"></i>
            Question Inside <?php echo"<font color='red'>".$exam_for_user."</font>"?></a></div>
    </div>
      </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Question</th>
              <th>Opt1</th>
              <th>Opt2</th>
              <th>Opt3</th>
              <th>Opt4</th>
              <th>Answer</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
             <tbody>
            <?php

$res=mysqli_query($link,"select * from question where exam='$exam_for_user' ORDER BY question_no ASC");
while($row=mysqli_fetch_array($res))
{
    echo "<tr>";
    echo "<td>"; echo $row["question_no"]; echo"</td>";
    echo "<td>"; echo $row["question"]; echo"</td>";
    echo "<td>"; 
    
    if(strpos($row["opt1"],'image_question/') !== false)
    {
        ?>
        <img src="<?php echo $row["opt1"]; ?>" height="50" width="50">
        <?php
    }
    else{

        echo $row["opt1"];
    }
    
    echo"</td>";
    echo "<td>"; 
    
    if(strpos($row["opt2"],'image_question/') !== false)
    {
        ?>
        <img src="<?php echo $row["opt2"]; ?>" height="50" width="50">
        <?php
    }
    else{

        echo $row["opt2"];
    }
    
    echo"</td>";
    echo "<td>"; 
    
    if(strpos($row["opt3"],'image_question/') !== false)
    {
        ?>
        <img src="<?php echo $row["opt3"]; ?>" height="50" width="50">
        <?php
    }
    else{

        echo $row["opt3"];
    }
    
    echo"</td>";
    echo "<td>"; 
    
    if(strpos($row["opt4"],'image_question/') !== false)
    {
        ?>
        <img src="<?php echo $row["opt4"]; ?>" height="50" width="50">
        <?php
    }
    else{

        echo $row["opt4"];
    }
    
    echo"</td>";
    echo "<td>"; 
    
    if(strpos($row["answer"],'image_question/') !== false)
    {
        ?>
        <img src="<?php echo $row["answer"]; ?>" height="50" width="50">
        <?php
    }
    else{

        echo $row["answer"];
    }
    
    echo"</td>";

    echo "<td>";
     if(strpos($row["answer"],'image_question/') !== false)
    {
        ?>
        <a href="edit_question_image.php?id=<?php echo $row["id"]; ?>&idl=<?php echo $id; ?>">Edit</a>
        <?php
    }
    else{
      ?>
      <a href="edit_question.php?id=<?php echo $row["id"]; ?> &idl=<?php echo $id; ?>">Edit</a>
      <?php
    }
    echo "</td>";

    echo "<td>";
        ?>
        <a href="delete_question.php?id=<?php echo $row["id"]; ?>&idl=<?php echo $id; ?>">Delete</a>
        <?php
    echo "</td>";
    echo "</tr>";
}

?>
</tbody>
          </table>
         
        </div>
        </div>
        </div>
        

    </div>
</div>
<?php
if(isset($_POST["submitl"]))
{   
$loop=0;
    $count = 0;
    $res=mysqli_query($link,"select * from question where exam='$exam_for_user' ORDER BY id ASC") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display="none";
            document.getElementById("error").style.display="block";
        </script>
        <?php
    }
    else
    {
       while($row=mysqli_fetch_array($res))
       {
           $loop=$loop+1;
           mysqli_query($link,"update question set question_no='$loop' where id=$row[id]");
       }
       ?>
        <script type="text/javascript">
            document.getElementById("error").style.display="none";
            document.getElementById("success").style.display="block";
            setTimeout(function(){
                window.location.href=window.location.href;
            }, 1000);
        </script>
        <?php
    }

    $loop=$loop+1;
    mysqli_query($link,"insert into question value(NULL,'$loop','$_POST[question]','$_POST[add_opt1]','$_POST[add_opt2]','$_POST[add_opt3]','$_POST[add_opt4]','$_POST[add_answer]','$exam_for_user')");
    
}
?>


<?php
if(isset($_POST["submitl_img"]))
{   
$loop=0;
    $count = 0;
    $res=mysqli_query($link,"select * from question where exam='$exam_for_user' ORDER BY id ASC") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);

    if($count==0)
    {
    }
    else
    {
       while($row=mysqli_fetch_array($res))
       {
           $loop=$loop+1;
           mysqli_query($link,"update question set question_no='$loop' where id=$row[id]");
       }
    }

    $loop=$loop+1;

    $tm=md5(time());
   

    $fnml=$_FILES["add_igopt1"]["name"];
    $dstl="./image_question/".$tm .$fnml;
    $dst_dbl="image_question/".$tm .$fnml;
    move_uploaded_file($_FILES["add_igopt1"]["tmp_name"],$dstl);

    $fnm2=$_FILES["add_igopt2"]["name"];
    $dst2="./image_question/".$tm .$fnm2;
    $dst_db2="image_question/".$tm .$fnm2;
    move_uploaded_file($_FILES["add_igopt2"]["tmp_name"],$dst2);

    $fnm3=$_FILES["add_igopt3"]["name"];
    $dst3="./image_question/".$tm .$fnm3;
    $dst_db3="image_question/".$tm .$fnm3;
    move_uploaded_file($_FILES["add_igopt3"]["tmp_name"],$dst3);

    $fnm4=$_FILES["add_igopt4"]["name"];
    $dst4="./image_question/".$tm .$fnm4;
    $dst_db4="image_question/".$tm .$fnm4;
    move_uploaded_file($_FILES["add_igopt4"]["tmp_name"],$dst4);

    $fnm5=$_FILES["add_iganswer"]["name"];
    $dst5="./image_question/".$tm .$fnm5;
    $dst_db5="image_question/".$tm .$fnm5;
    move_uploaded_file($_FILES["add_iganswer"]["tmp_name"],$dst5);


    mysqli_query($link,"insert into question value(NULL,'$loop','$_POST[txquestion]','$dst_dbl','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_for_user')");
    
}
?>

<?php
include "footer.php";
?>

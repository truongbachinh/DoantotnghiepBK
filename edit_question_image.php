
<?php
include "header.php";
include "connection.php";
$id=$_GET["id"];
$idl=$_GET["idl"];

$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";

$res=mysqli_query($link,"select * from question where id=$id");
while($row=mysqli_fetch_array($res))
{
    $question=$row["question"];
    $opt1=$row["opt1"];
    $opt2=$row["opt2"];
    $opt3=$row["opt3"];
    $opt4=$row["opt4"];
    $answer=$row["answer"];


}
?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html"  class="tip-bottom"><i class="icon-home"></i>
           Update Imgae Question</a>
    </div>
</div>

    <div class="container-fluid">
        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update Question With Image</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Add Question :</label>
              <div class="controls">
                <input type="text" class="span11" name="txquestion" value="<?php echo $question; ?>"/>
              </div>
              
            </div>
            <div class="control-group">
            
              <label class="control-label">Add Image Option 1 :</label>
              <div class="controls">
                <input type="file" class="span11" name="update_igopt1"/>
              </div>
              
              <img src="<?php echo $opt1;?>" height="50" width="50" style="margin-left: 200px;">
              <br>
              <br>
            </div>
            <div class="control-group">
            
              <label class="control-label">Add Image Option 2 :</label>
              <div class="controls">
                <input type="file" class="span11" name="update_igopt2"/>
              </div>
              <img src="<?php echo $opt2;?>" height="50" width="50" style="margin-left: 200px;">
            <br>
            <br>
            </div>
            <div class="control-group">
              <label class="control-label">Add Image Option 3 :</label>
              <div class="controls">
                <input type="file" class="span11" name="update_igopt3"/>
              </div>
              <img src="<?php echo $opt3;?>" height="50" width="50" style="margin-left: 200px;">
            <br>
            <br>
            </div>
            <div class="control-group">
              <label class="control-label">Add Image Option 4 :</label>
              <div class="controls">
                <input type="file" class="span11" name="update_igopt4"/>
              </div>
              <img src="<?php echo $opt4;?>" height="50" width="50" style="margin-left: 200px;">
            <br>
            <br>
            </div>
            <div class="control-group">
              <label class="control-label">Add Image Answer :</label>
              <div class="controls">
                <input type="file" class="span11" name="update_iganswer"/>
              </div>
              <img src="<?php echo $answer;?>" height="50" width="50" style="margin-left: 200px;">
            <br>
            <br>
            </div>
            <div class="alert alert-danger" id="error" style="display:none">
                <strong>The Question Already Exist! Please Try Another.</strong>
            </div>
            <div class="form-actions text-center">
              
              <button type="submit" name="submitl_img" value="Update Question" class="btn btn-success">Save Image Question</button>
              
            </div>
            <div class="alert alert-success" id="success" style="display:none">
                <strong>Record Inserted Successfully!</strong>
            </div>
          </form>
        </div>
        </div>
        

        </div>

    </div>
</div>

<?php
if(isset($_POST["submitl_img"])){

$opt1=$_FILES["update_igopt1"]["name"];
$opt2=$_FILES["update_igopt2"]["name"];
$opt3=$_FILES["update_igopt3"]["name"];
$opt4=$_FILES["update_igopt4"]["name"];
$answer=$_FILES["update_iganswer"]["name"];

$tm= md5(time());

  if ($opt1!="")
  {
        $dstl="./image_question/".$tm .$opt1;
        $dst_dbl="image_question/".$tm .$opt1;
        move_uploaded_file($_FILES["update_igopt1"]["tmp_name"], $dstl);
        mysqli_query($link,"update question set question='$_POST[txquestion]',opt1='$dst_dbl' where id=$id");
  }
  if ($opt2!="")
  {
        $dst2="./image_question/".$tm .$opt2;
        $dst_db2="image_question/".$tm .$opt2;
        move_uploaded_file($_FILES["update_igopt1"]["tmp_name"], $dst2);
        mysqli_query($link,"update question set question='$_POST[txquestion]',opt2='$dst_db2' where id=$id");
  }
  if ($opt3!="")
  {
        $dst3="./image_question/".$tm .$opt3;
        $dst_db3="image_question/".$tm .$opt3;
        move_uploaded_file($_FILES["update_igopt1"]["tmp_name"], $dst3);
        mysqli_query($link,"update question set question='$_POST[txquestion]',opt1='$dst_db3' where id=$id");
  }
  if ($opt4!="")
  {
        $dst4="./image_question/".$tm .$opt4;
        $dst_db4="image_question/".$tm .$opt4;
        move_uploaded_file($_FILES["update_igopt1"]["tmp_name"], $dst4);
        mysqli_query($link,"update question set question='$_POST[txquestion]',opt1='$dst_db4' where id=$id");
  }
  if ($answer!="")
  {
        $dst5="./image_question/".$tm .$answer;
        $dst_db5="image_question/".$tm .$answer;
        move_uploaded_file($_FILES["update_igopt1"]["tmp_name"], $dst5);
        mysqli_query($link,"update question set question='$_POST[txquestion]',opt1='$dst_db5' where id=$id");
  }
  ?>
  <script type="text/javascript">
      window.location="question.php?id=<?php echo $idl ?>";
  </script>
  <?php

}
?>

<?php
include "footer.php";
?>

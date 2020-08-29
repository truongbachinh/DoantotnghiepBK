
<?php
include "header.php";
include "connection.php";
$id=$_GET["id"];
$unit="";
$res=mysqli_query($link,"select * from materials where id=$id");
while($row=mysqli_fetch_array($res))
{
    $material_name=$row["material_name"];
    $content=$row["content"];
    $authod=$row["authod"];

}
?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="index.html"  class="tip-bottom"><i class="icon-home"></i>
            Edit Materials</a></div>
</div>
 
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Materials</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Material Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Material Name" name="materialname" value="<?php echo $material_name; ?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Content :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Content" name="content" value="<?php echo $content; ?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Authod :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Content" name="authod" value="<?php echo $authod; ?>" />
              </div>
            </div>
            <div class="form-actions text-center">
              
              <button type="submit" name="submitl" class="btn btn-success">Update</button>
              
            </div>
            <div class="alert alert-success" id="success" style="display:none">
                <strong>Record Updateed Successfully!</strong>
            </div>
          </form>
        </div>
      </div>
        </div>

    </div>
</div>
<?php
if(isset($_POST["submitl"]))
{
    mysqli_query($link,"update materials set material_name='$_POST[materialname]' where id=$id");
    mysqli_query($link,"update materials set content='$_POST[content]' where id=$id");
    mysqli_query($link,"update materials set authod='$_POST[authod]' where id=$id");
    ?>
    <script type="text/javascript">
        document.getElementById("success").style.display="block";
        setTimeout(function(){
            window.location.href="add_materials.php";
        }, 1000);
    </script>
    <?php
}
?>

<?php
include "footer.php";
?>
<?php
include "header.php";
include "connection.php";
?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
        <a href="home.php"  class="tip-bottom"><i class="icon-user"></i> Add New Unit</a>  
        </div>
</div>

<div class="container-fluid">
  <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Material</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Material Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Material Name" name="materialname" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Contents :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Contents" name="content" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Authod :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Authod" name="authod" />
              </div>
            </div>
            <div class="alert alert-danger" id="error" style="display:none">
                <strong>The Unit Already Exist! Please Try Another.</strong>
            </div>
            <div class="form-actions text-center">
              
              <button type="submit" name="submitl" class="btn btn-success">Save</button>
              
            </div>
            <div class="alert alert-success" id="success" style="display:none">
                <strong>Record Inserted Successfully!</strong>
            </div>
          </form>
        </div>
      </div>
      <div class="widget-content nopadding">
      <div class="widget-title"> <span class="icon"> <i class="icon-tag"></i> </span>
          <h5>Material Categories</h5>
        </div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Material Name</th>
                  <th>Contetns</th>
                  <th>Author</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php
                  $res=mysqli_query($link,"select * from materials");
                  while($row=mysqli_fetch_array($res))  
                  {
                    ?>
                          <tr>
                          <td><?php echo $row["id"];?></td>
                          <td><?php echo $row["material_name"];?></td>
                          <td><?php echo $row["content"];?></td>
                          <td><?php echo $row["authod"];?></td>
                          <td><a href="edit_materials.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                          <td><a href="delete_materials.php?id=<?php echo $row["id"]; ?>">Delete</a>
                        </td>
                          </tr>
              
                    <?php

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
    $count = 0;
    $res=mysqli_query($link,"select * from materials where material_name='$_POST[materialname]'" );
    $count=mysqli_num_rows($res);

    if($count>0)
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
        mysqli_query($link,"insert into materials values(NUll,'$_POST[materialname]','$_POST[content]','$_POST[authod]')");

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
}
?>
<?php
include "footer.php";
?>

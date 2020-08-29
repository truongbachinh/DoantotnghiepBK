
<?php
session_start();
include "header.php";
include "connection.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="home.php"  class="tip-bottom"><i class="icon-home"></i>
            All result of student have been done</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <?php
    $count=0;
    $res=mysqli_query($link,"select * from exam_result ORDER BY id DESC");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
         ?>
            <h1 style="text-align: center;">No results have been done</h1>
         <?php 
    }
  
    else{
        echo "<table class='table table-bordered table-striped'>";
        echo "<tr >";
        echo "<th>"; echo"username"; echo"</th>";
        echo "<th>"; echo"exam"; echo"</th>";
        echo "<th>"; echo"total question"; echo"</th>";
        echo "<th>"; echo"correct answer"; echo"</th>";
        echo "<th>"; echo"wrong answer"; echo"</th>";
        echo "<th>"; echo"exam time"; echo"</th>";
        echo "<tr>";

        while($row=mysqli_fetch_array($res))
        {
           
            echo "<tr>";
            echo "<td>"; echo $row["username"]; echo"</td>";
            echo "<td>"; echo $row["exam"]; echo"</td>";
            echo "<td>"; echo $row["total_question"]; echo"</td>";
            echo "<td>"; echo $row["correct_answer"]; echo"</td>";
            echo "<td>"; echo $row["wrong_answer"]; echo"</td>";
            echo "<td>"; echo $row["exam_time"]; echo"</td>";
            echo "<tr>";
        }
        echo "</table>";
        
    }
    ?>
        </div>

    </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->
<?php
include "footer.php";
?>

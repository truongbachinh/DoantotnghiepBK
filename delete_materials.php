<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from materials where id=$id") or die(mysqli_error($link));
?>
<script type="text/javascript">
    window.location="add_materials.php";
</script>
<?php
include "../connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from category where id=$id");
?>

<script type="text/javascript">
    window.location="exam_category.php";       //this is our file name
</script>
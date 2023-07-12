<?php

$id = $_GET["id"];
include("./header.php");
include("./nav.php");
include("./storydatabase.php");
 $sql = "select * from `topics` where id = '$id'";
 $result = mysqli_query($con,$sql) or die(mysqli_error($con));
 $row = mysqli_fetch_assoc($result);

?>
<!-- Jumbotron -->
<div class="p-4 bg-warning  shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">
    <h2><?php echo $row["name"] ?></h2>
    <p class="my-2">
        <?php echo $row["descriptoin"]; ?>
    </p>
</div>
<!-- Jumbotron -->
<div class="text-center display-4 text-success">Thanks For Reading</div>
<!DOCTYPE html>
<html>
    <head>
        <title>REPORT POST</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <style> <?php include 'style.css'?></style>
<!--php code select all fields from a table-->
        <?php

            include('connect.php');
            $result = mysqli_query($conn,"SELECT * FROM teachers");
            if (mysqli_num_rows($result) > 0) {

            $i=0;
            while($row = mysqli_fetch_array($result)) {
        ?>

        <div class="blog">       
            <h2 class="name"><?php echo $row["name"]; ?></h2>
            <div class="li-st">
                <ul class="list">
                    <li><?php echo $row["time"]; ?></li>
                    <li><?php echo $row["class_group"]; ?></li>
                    <li><?php echo $row["date"]; ?></li>
                </ul>
            </div>
            <div class="topic">
                <ul class="l-ist">
                    <li><?php echo $row["topic"]; ?></li>
                </ul>
            </div>
            <p class="p"><?php echo $row["remarks"]; ?></p>
        </div>

        <?php
            $i++;
            }
            }else{
                echo "No result found";
            }
        ?>
    </body>
</html>
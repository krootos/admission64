<?php

session_start();
$msg = !empty($_SESSION['msg']) ? $_SESSION['msg'] : '';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Compress Image Size Using PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <!--====image upload form===-->

    <?php

    echo $msg;
    unset($_SESSION['msg']);
    ?>

    <form action="compress-script.php" method="post" enctype="multipart/form-data">
        <label>Select Your File</label>
        <input type="file" name="image">
        <input type="submit" value="Compress Now" name="submit">
    </form>

    <!-- image upload form====-->
</body>

</html>
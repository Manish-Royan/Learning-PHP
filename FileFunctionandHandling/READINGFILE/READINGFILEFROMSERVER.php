<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <!-- Always rember to use 'enenctype="multipart/form-data"' when the form has file input -->
    <form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

        <input type="file" name="file" /><br>
        <button type="submit" name="btn_read">Read File Name</button>
    </form>
</body>
</html>


<?php

if(isset($_FILES['file'])) //checking if file is set
{
    $file = $_FILES['file']['tmp_name'];

    $file_open = fopen($file, "r") or die ("unable to get read file");

    echo fread($file_open, filesize($file));

    fclose($file_open);
}

?>
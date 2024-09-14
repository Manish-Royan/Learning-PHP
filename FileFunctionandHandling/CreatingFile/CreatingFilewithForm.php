<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Enter file name" name="fileName" required>
        <br><br>
        <textarea name="content" required></textarea>
        <br><br>
        <button type="submit" name="btn">Create file</button>
    </form>

</body>
</html>

<?php
if (isset($_POST)) {
    if (isset($_POST['fileName'])) {
        $file_name = "file/".$_POST['fileName'];
        $content = $_POST['content'];
        $file = fopen($file_name, "w") or die("unable to create file"); 
        fwrite($file, $content);
        fclose($file);

        echo "file created";
    }
}
?>
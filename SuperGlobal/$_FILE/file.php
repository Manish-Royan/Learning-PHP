<?php

//i. To get the uploaded file information
/* print_r($_FILES); */


//let's
if(isset($_FILES['fileUpload'])) //if file is being uploaded to 'input type = 'file' then
{
    $path = $_FILES['fileUpload']['name'];
    
    $upload_path = "./upload/".$path;

    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path))
    {
        echo "File Uploaded!!";
    } else {
        die("Failed to upload");
    }
} else {
die("no file found");}

//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file_upload">
        <button type="submit">Submit</button>
    </form>    
</body>
</html>

<?php
// print_r($_FILES);

if(isset($_FILES['file_upload']) && $_FILES['file_upload']['error']==0) {
    $filename = basename($_FILES['file_upload']['name']);
    $tempPath = $_FILES['file_upload']['tmp_name'];
    $uploadPath = "../uploads/".$filename;

    if(move_uploaded_file($tempPath, $uploadPath)) {
        echo "File uploaded successfully<br>";
    } else {
        echo "Failed to upload file<br>";
    }
} else {
    echo "No file uploaded or there is an error<br>";
}

?>
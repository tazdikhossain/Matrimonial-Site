<?php 

    $src = $_FILES['myfile']['tmp_name'];
    $name = $_FILES['myfile']['name'];
    $folder='../upload/'.$name;

    if(move_uploaded_file($src, $folder)){
        echo "Success";
    }else{
        echo "Error!";
    }

?>


<html lang="en">
<head>
    <title>Upload</title>
</head>
<body>
    <form action = "" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile"><br><br>
        <input type="submit" name="upload" value="Upload File">
    </form>
</body>
</html>
<?php

/*
**************File Uploads********************
~In php to handle file uploads, $_FILES array is used.
~The elements of the $_FILES array given information about the uploaded file.
~Keys are:
1]name:the name of the file. //ex-demo.jpeg      $_FILE['filename']['name']
2]Type:the type of the uploaded file(extension). //ex-image/jpeg.    $_FILE['filename']['type']
3]Size:size of the uplaode file(in byte)         $_FILE['filename']['size']
4]tmp_name:the name of the temporary file on the server that holdes the uploaded file.  $_FILE['filename']['tmp_name']
5]Error:the error code resulting from the uplaode file.      $_FILE['filename']['error']

~Functions:
1] is_uploaded_file(): this function checks whthere the file is uploaded or not on the server.
2]move_uploaded_file():moves an uploaded file to a new destination.

*/

?>

<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            Select File :
            <input type="file" name="filename" />
            <input type="submit" name="submit"  />
        </form>
    </body>
</html>

<?php
if(isset($_FILES['filename']))
{
   /* echo"<pre>";
    print_r($_FILES);
    echo"</pre>";
    */

    $file_name=$_FILES['filename']['name'];
    $file_size=$_FILES['filename']['size'];
    $file_tmp=$_FILES['filename']['tmp_name'];
    $file_type=$_FILES['filename']['type'];
    $file_error=$_FILES['filename']['error'];

    move_uploaded_file($file_tmp,"upload_images/".$file_name);

    if(move_uploaded_file($file_tmp,"destination_file/".$file_name))
    {
        echo"File is Uplaoded Succesfully";
    }
    else
    {
        echo"File is not Uplaoded ";
        print_r($file_type);
    }
    
}
?>
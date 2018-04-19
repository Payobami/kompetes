<?php
session_start();
   /* if($_SERVER['REQUEST_METHOD'] == 'POST'){
        print_r($_FILES);

        die('jsdsdjjs');

        if(!empty($_FILES)){


        }
    }*/



if($_SERVER['REQUEST_METHOD'] == 'POST') {

   //die('wel done');

   // die($_FILES['file']['name']);

    $ds = DIRECTORY_SEPARATOR;  //1

    $storeFolder = 'uploads';   //2

    if (!empty($_FILES)) {




        $tempFile = $_FILES['file']['tmp_name'];          //3

        $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;  //4

        $targetFile = $targetPath . $_FILES['file']['name'];  //5


        $countPicture = count($_FILES['file']['name']);

        for($i; $i<$countPicture; $i++){

           $_SESSION['uploadedName'] = $_FILES['file']['name'][$i];

        }


        //$_SESSION['uploadedName'] = $_FILES['file']['name'];

        $moveupload = move_uploaded_file($tempFile, $targetFile); //6

        die(count($_FILES['file']['name']));

    }

    else{


        echo $_SESSION['uploadedName'];
        //header('Location: index.html');

        //die('Error Uploading');
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>..:: Kompetes || ::..</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap_3.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/kompetes.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/masonry.css"/>

    <link rel="icon" href="img/ico.png">

    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
</head>
<body>
<div class="drop-zone-upload">
    <form action="upload.php" enctype="multipart/form-data" method="post" class="dropzone" id="myDropzone">
        <div class="dropzon">
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </div>


        <input type="submit" class="btn btn-success">


</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='js/dropzone.js'></script>


<script>


    $("div#myDropzone").dropzone({

        acceptedFiles: ".jpeg,.jpg,.png,.gif"

    });

    //Dropzone.options.myDropZone = false;
</script>
</body>
</html>

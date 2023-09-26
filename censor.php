<?php 
$paragraph= $_GET['paragraph'];
$paragraph_leng= strlen($paragraph);


$badword=$_GET['badword'];
$censured_paragraph= str_replace($badword,'***',$paragraph);
$censured_paragraph_leng=strlen($censured_paragraph)


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP-BADWORDS</title>

    <!-- FOGLIO DI STILE CSS -->
    <link rel="stylesheet" href="./style.css" />

    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        <p>
            <?php echo $paragraph ?>;
        </p>
        <b>
            <?php echo $paragraph_leng ?> caratteri
        </b>

        <hr>


        <p>
            <?php echo $censured_paragraph ?>;
        </p>
        <p> <?php echo $censured_paragraph_leng ?>;</p>

    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$siteName?> | <?=$title?></title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php //itt daraboltuk fel a layoutot
        require_once "header.php";
        require_once "$view.php";  
        require_once "footer.php";
    ?>
    
</body>
</html>
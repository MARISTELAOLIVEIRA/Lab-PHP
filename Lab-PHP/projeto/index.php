<?php
$title = "Laboratório PHP";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>🚀 PHP funcionando!</h1>

<p>Se você está vendo esta página, o servidor PHP está ativo.</p>

<?php
echo "<p>Hoje é: " . date("d/m/Y H:i:s") . "</p>";
?>

<script src="js/script.js"></script>

</body>
</html>

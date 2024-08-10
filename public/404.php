<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
</head>
<body>
<?php
$pageTitle = "404 - Page Not Found";
include '/src/View/partials/header.php';
?>

<main>
    <div class="container">
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>The page you are looking for does not exist. Please go back to the <a href="index.php">homepage</a>.</p>
    </div>
</main>


</body>
</html>
<?php include '/src/View/partials/footer.php'; ?>

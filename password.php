<?php
session_start();
if(isset($_SESSION['generated_password'])) {
    $generatedPassword = $_SESSION['generated_password'];
    session_destroy();
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Mongiello">
    <meta name="description" content="Generated Password Page">
    <title>Generated Password</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <h1 class="text-center">Password</h1>
        <div class="container w-50 d-flex flex-column align-items-center">
            <div class="alert alert-info">
                La password generata è: <strong><?= $generatedPassword ?></strong>
            </div>
            <a href="index.php" class="btn btn-primary">Genera una nuova password</a>
        </div>
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Mongiello">
    <meta name="description" content="PHP Strong Password Generator">
    <title>PHP Strong Password Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <h1 class="text-center">Password Generator</h1>
        <div class="container w-50 d-flex flex-column align-items-center ">
            <form action="index.php" method="GET">
                <label for="length">Lunghezza Password:</label>
                <input type="number" id="length" name="length" min="1" max="50" required>
                <button type="submit">Genera Password</button>
            </form>
       </div> 

    </main>
</body>

</html>
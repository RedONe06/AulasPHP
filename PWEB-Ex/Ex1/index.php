<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="calculadora.php" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Número um</span>
            <input type="number" aria-label="Username" aria-describedby="basic-addon1" name="numero1">
        </div>
        <div class="input-group mb-3 col-3 ">
            <span class="input-group-text" id="basic-addon2">Número dois</span>
            <input type="number" aria-label="Username" aria-describedby="basic-addon2" name="numero2">
        </div>

        <div class="d-inline-flex p-2">
            <button type="submit" class="btn btn-primary" name="mu">Multiplicação</button>
            <button type="submit" class="btn btn-primary" name="d">Divisão</button>
            <button type="submit" class="btn btn-primary" name="so">Somar</button>
            <button type="submit" class="btn btn-primary" name="su">Subtrair</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
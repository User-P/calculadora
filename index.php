<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Calculadora</title>

</head>
<!-- <style>
    html {
        font-size: 62.5%;
        box-sizing: border-box;
    }

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
    }

    .calculator {
        border: 1px solid #ccc;
        border-radius: 5px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }

    .calculator-screen {
        width: 100%;
        height: 80px;
        border: none;
        background-color: #252525;
        color: #fff;
        text-align: right;
        padding-right: 20px;
        padding-left: 10px;
        font-size: 4rem;
    }

    button {
        height: 60px;
        font-size: 2rem !important;
    }

    .equal-sign {
        height: 98%;
        grid-area: 2 / 4 / 6 / 5;
    }

    .calculator-keys {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
        padding: 20px;
    }
</style> -->

<body>

    <div class="calculator card">

        <input type="text" class="calculator-screen z-depth-1" value="" disabled />

        <div class="calculator-keys">

            <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>
            <button type="button" class="operator btn btn-info" value="%">%</button>
            <button type="button" class="operator btn btn-info" value="-">√</button>
            <button type="button" class="operator btn btn-info" value="/">&divide;</button>

            <button type="button" value="7" class="btn btn-secondary waves-effect">7</button>
            <button type="button" value="8" class="btn btn-secondary waves-effect">8</button>
            <button type="button" value="9" class="btn btn-secondary waves-effect">9</button>

            <button type="button" class="operator btn btn-info" value="*">&times;</button>

            <button type="button" value="4" class="btn btn-secondary waves-effect">4</button>
            <button type="button" value="5" class="btn btn-secondary waves-effect">5</button>
            <button type="button" value="6" class="btn btn-secondary waves-effect">6</button>

            <button type="button" class="operator btn btn-info" value="-">-</button>

            <button type="button" value="1" class="btn btn-secondary waves-effect">1</button>
            <button type="button" value="2" class="btn btn-secondary waves-effect">2</button>
            <button type="button" value="3" class="btn btn-secondary waves-effect">3</button>


            <button type="button" value="0" class="btn btn-secondary waves-effect">0</button>
            <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
            <button type="button" class="operator btn btn-primary" value="=">=</button>

            <button type="button" class="equal-sign operator btn btn-success" value="+">+</button>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./assets/js/funciones.js"></script>
</body>

</html>
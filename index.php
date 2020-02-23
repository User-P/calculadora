<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculadora</title>
</head>

<body>
    <form name="calculator">
        <div class="calculator card">

            <input type="text" class="calculator-screen z-depth-1" name="pantalla" disabled placeholder="0" />

            <div class="calculator-keys">

                <input type="button" value="mc" class="btn btn-warning" onClick="plus.value=''">
                <input type="hidden" value="" name="plus" class="btn">
                <input type="button" value="m+" class="btn btn-warning" onClick="plus.value=pantalla.value">
                <input type="button" value="m-" class="btn btn-warning" onClick="plus.value-=pantalla.value">
                <input type="button" value="mr" name="recall" class="btn btn-warning" onClick="pantalla.value=plus.value">

                <input type="button" value="AC" class="all-clear function btn btn-danger btn-sm" onClick="pantalla.value=''">
                <input type="button" value="%" class="operator btn btn-info" onClick="pantalla.value+=''">
                <input type="button" value="√" class="operator btn btn-info" onClick="pantalla.value+=''">
                <input type="button" value="/" class="operator btn btn-info" onClick="pantalla.value+='/'">

                <input type="button" value="7" class="btn btn-secondary waves-effect" onClick="pantalla.value+='7'">
                <input type="button" value="8" class="btn btn-secondary waves-effect" onClick="pantalla.value+='8'">
                <input type="button" value="9" class="btn btn-secondary waves-effect" onClick="pantalla.value+='9'">
                <input type="button" value="*" class="operator btn btn-info" onClick="pantalla.value+='*'">

                <input type="button" value="4" class="btn btn-secondary waves-effect" onClick="pantalla.value+='4'">
                <input type="button" value="5" class="btn btn-secondary waves-effect" onClick="pantalla.value+='5'">
                <input type="button" value="6" class="btn btn-secondary waves-effect" onClick="pantalla.value+='6'">

                <input type="button" value="-" class="operator btn btn-info" onClick="pantalla.value+='-'">

                <input type="button" value="1" class="btn btn-secondary waves-effect" onClick="pantalla.value+='1'">
                <input type="button" value="2" class="btn btn-secondary waves-effect" onClick="pantalla.value+='2'">
                <input type="button" value="3" class="btn btn-secondary waves-effect" onClick="pantalla.value+='3'">

                <input type="button" value="0" class="btn btn-secondary waves-effect" onClick="pantalla.value+='0'">
                <input type="button" value="." class="btn btn-secondary waves-effect" onClick="pantalla.value+='.'">
                <input type="button" value="=" class="operator btn btn-primary" onClick="pantalla.value=eval(pantalla.value)">

                <input type="button" value="+" class="equal-sign operator btn btn-success" onClick="pantalla.value+='+'">
            </div>
        </div>
    </form>
    <!-- <script src="./assets/js/funciones.js"></script> -->
</body>

</html>
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
    <div class="calculator card">

        <input type="text" class="calculator-screen z-depth-1" name="pantalla" placeholder="0" id="screen" disabled />
        <div class="calculator-keys">

            <button type="button" class="btn btn-warning" onClick="mClear()">mc</button>
            <button type="button" class="btn btn-warning" onClick="mPlus()">m+</button>
            <button type="button" class="btn btn-warning" onClick="mSubtraction()">m-</button>
            <button type="button" class="btn btn-warning" onClick="mRecall()">mr</button>

            <button type="button" class="btn btn-danger btn-sm" onClick="reset()">AC</button>
            <button type="button" class="btn btn-info" onClick="percentage()">%</button>
            <button type="button" class="btn btn-info" onClick="raiz()">&radic;</button>
            <button type="button" class="btn btn-info" onClick="item('/')">/</button>
            <!-- onClick="pantalla.value+='\u221a'" -->

            <button type="button" class="btn btn-secondary waves-effect" onClick="item(7)">7</button>
            <button type="button" class="btn btn-secondary waves-effect" onClick="item(8)">8</button>
            <button type="button" class="btn btn-secondary waves-effect" onClick="item(9)">9</button>
            <button type="button" class="btn btn-info" onClick="item('*')">x</button>

            <button type="button" class="btn btn-secondary waves-effect" onClick="item(4)">4</button>
            <button type="button" class="btn btn-secondary waves-effect" onClick="item(5)">5</button>
            <button type="button" class="btn btn-secondary waves-effect" onClick="item(6)">6</button>
            <button type="button" class="btn btn-info" onClick="item('-')">-</button>

            <button type="button" class="btn btn-secondary waves-effect" onClick="item(1)">1</button>
            <button type="button" class="btn btn-secondary waves-effect" onClick="item(2)">2</button>
            <button type="button" class="btn btn-secondary waves-effect" onClick="item(3)">3</button>

            <button type="button" class="btn btn-secondary waves-effect" onClick="item(0)">0</button>
            <button type="button" class="btn btn-secondary waves-effect" onClick="item('.')">.</button>
            <button type="button" class="btn btn-primary waves-effect" onClick="calcular()">=</button>

            <button type="button" class="equal-sign operator btn btn-success" onClick="item('+')">+</button>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script>
        function item(valor) {
            screen = document.getElementById("screen");
            valorViejo = screen.value;
            comprueba = valorViejo.slice((valorViejo.length - 1), valorViejo.length);
            // console.log("comprueba:");
            // console.log(comprueba);
            if ((comprueba == '+' || comprueba == '-' || comprueba == '*' || comprueba == '/') && (valor == '-' || valor == '*' || valor == '+' || valor == '/')) {
                // console.log('NO se puede realizar');
            } else {
                if (valorViejo.length == 0 && (valor == '-' || valor == '*' || valor == '+' || valor == '/')) {
                    // console.log('No signo -');
                } else {
                    valorNuevo = valorViejo + valor;
                    screen.value = valorNuevo;
                }

            }
        }

        function reset() {
            screen = document.getElementById("screen");
            screen.value = "";
            console.log("longitud:", screen.length);
        }

        function raiz() {
            screen = document.getElementById("screen");
            valor = screen.value;

            $.ajax({
                url: 'server.php',
                method: 'post',
                data: {
                    'raiz': valor
                }
            }).done(function(respuesta) {

                screen.value = respuesta;
            })
        }

        function calcular() {
            screen = document.getElementById("screen");
            valor = screen.value;
            comprueba = valor.slice((valor.length - 1), valor.length);
            console.log(comprueba);
            if (comprueba == '+' || comprueba == '-' || comprueba == '*' || comprueba == '/') {
                //console.log('NO se puede realizar');
                valorNuevo = valor.slice(0, (valor.length - 1));
                console.log("longitud:", valorNuevo.length);
                console.log("valor:", valorNuevo);
            }
            $.ajax({
                url: 'server.php',
                method: 'post',
                data: {
                    'resultado': valorNuevo
                }
            }).done(function(respuesta) {
                screen.value = respuesta;
            })
        }
    </script>
</body>

</html>
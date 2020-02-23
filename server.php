<?php
include("MathHelp_jmd.php");
if ($_POST) {
    if (isset($_POST["raiz"])) {
        $numbers = $_POST["raiz"];
        $raiz = sqrt($numbers);
        echo $raiz;
    }

    if (isset($_POST["resultado"])) {
        $numbers = $_POST["resultado"];
        if ($numbers == null) {
            $resultado = 0;
        }
        $resultado = MathHelp_jmd::calculate_str($numbers);
        if ($resultado == 0)
            $resultado = null;
        echo  $resultado;
    }
}

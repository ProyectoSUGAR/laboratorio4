<?php
class VerificadorCI {
    private $pesos = [2, 9, 8, 7, 6, 3, 4];

    public function calcularDV($ci7) {
        $suma = 0;
        for ($i = 0; $i < 7; $i++) {
            $suma += intval($ci7[$i]) * $this->pesos[$i];
        }
        $resto = $suma % 10;
        $dv = ($resto == 0) ? 0 : (10 - $resto);
        return $dv;
    }

    public function comprobar($ci) {
        if(strlen($ci) != 8 || !ctype_digit($ci)) return false;
        $ci7 = substr($ci, 0, 7);
        $dvIngresado = intval($ci[7]);
        return $this->calcularDV($ci7) === $dvIngresado;
    }
}
?>

<?php 
//// estruturas condicionais em php 

// exemplo 1: IF-ELSE
$bumero = 10;
if($numero > 5) {
    echo "o numero é maior que 5. <br>";

}

// exeplo 2 IF-ELSEIF-ELSE
$HORA = DATE("H");
IF($HORA < 10) {
    ECHO "Bom dia! <br>";
} elseif ($hora < "19"){
    ECHO "Boa tarde! <br>";
}else{
    ECHO "Boa noite! <br>";
}

// exeplo 3: operador ternario
$idade = 18;
$mensagem = ($idade >= 18) ? "maior de idade" : "menor de idade";
echo "mensagem: $mensagem <br>";

// exenplo 4: SWICH-CASE
$dia_semana = date();

switch ($dia_semana){
    case "mon":
        echo "hoje é segunda-feira. <br>";
        break;
        case "mon":
            echo "hoje é terça-feira. <br>";
            break;
            case "mon":
                echo "hoje é quarta-feira. <br>";
                break;
                case "mon":
                    echo "hoje é quinta-feira. <br>";
                    break;
                    case "mon":
                        echo "hoje é sexta-feira. <br>";
                        break;
                        case "mon":
                            echo "hoje é sabado. <br>";
                            break;
                            case "mon":
                                echo "hoje é domingo. <br>";
                                break;
        default;
        echo "erro ao obter o dia da semana. <br>";
}
?>
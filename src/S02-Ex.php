<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S02-Ex</title>
</head>

<body>
    <h1>S02-Ex</h1>

    <!-- EXERCICI 01 -->
    <h2>Exercici 01</h2>
    <?php
    $texto = "Hello world!";
    echo "$texto <br>";
    $textoMayus = strtoupper($texto);
    echo "$textoMayus <br>";
    $textoMinus = strtolower($texto);
    echo "$textoMinus <br>";
    $textoNumChars = strlen($texto);
    echo "$textoNumChars <br>";
    ?>


    <!-- EXERCICI 02 -->
    <h2>Exercici 02</h2>
    <?php
    $webAdress = "https://gracia.sallenet.org/login/index.php";
    echo substr($webAdress, 34) . "<br>";
    echo explode("/", $webAdress)[4] . "<br>";
    ?>


    <!-- EXERCICI 03 -->
    <h2>Exercici 03</h2>
    <?php
    $ciutats = [
        ["Tokyo", "Japan", "Asia"],
        ["Mexico City", "Mexico", "North America"],
        ["New York City", "USA", "North America"],
        ["Mumbai", "India", "Asia"],
        ["Seoul", "Korea", "Asia"],
        ["Shanghai", "China", "Asia"],
        ["Chicago", "USA", "North America"],
        ["Buenos Aires", "Argentina", "South America"],
        ["Cairo", "Egypt", "Africa"],
        ["London", "UK", "Europe"]
    ];

    $recompteUSA = 0;
    foreach ($ciutats as $c) {
        if ($c[1] == "USA") {
            $recompteUSA++;
        }
    }
    echo "Ciutats dels USA: $recompteUSA <br>";
    ?>


    <!-- EXERCICI 04 -->
    <h2>Exercici 04</h2>
    <?php
    function eliminarValorArray($array, $valor)
    {
        array_search($valor, $array);
        if (array_search($valor, $array)) {
            $index = array_search($valor, $array);
            unset($array[$index]);
            $array = array_values($array);
            return $array;
        } else {
            echo "El valor $valor no està dins l'array.";
            return $array;
        }
    }
    ?>


    <!-- EXERCICI 05 -->
    <h2>Exercici 05</h2>
    <?php
    function eliminarValorRepetitArray($array)
    {
        $array = array_unique($array);
        $array = array_values($array);
        return $array;
    }
    ?>


    <!-- EXERCICI 06 -->
    <h2>Exercici 06</h2>
    <?php
    function sumaDigits($num)
    {
        if (is_int($num) && $num >= 0) {
            $suma = 0;
            $strNum = strval($num);
            $numDigits = strlen($strNum);
            for ($i = 0; $i < $numDigits; $i++) {
                $suma += intval($strNum[$i]);
            }
            echo "El valor té $numDigits digits i sumen $suma";
        } else {
            echo "El valor ha de ser un número enter.";
        }
    }
    ?>

    <!-- EXERCICI 07 -->
    <h2>Exercici 07</h2>
    <?php
    // Carregar les classes
    require_once 'Classes/Vehicle.php';
    require_once 'Classes/Terrestre.php';
    require_once 'Classes/Maritim.php';

    // Importar el namespace
    use Classes\Vehicle;
    use Classes\Terrestre;
    use Classes\Maritim;

    // Crear objecte Terrestre
    $cotxe = new Terrestre();
    $cotxe->setMatricula("1234-ABC");
    $cotxe->setPotencia(150);
    $cotxe->setVelocitatMitjana(60);
    $cotxe->setNumRodes(4);
    $cotxe->setCapacitatMaleter(false);
    $cotxe->setRailsCarretera(true);

    // Crear objecte Maritim
    $vaixell = new Maritim();
    $vaixell->setMatricula("5678-DEF");
    $vaixell->setPotencia(300);
    $vaixell->setVelocitatMitjana(40);
    $vaixell->setEsloraTotal(20);
    $vaixell->setEsloraFlotacio(15);
    $vaixell->setNumHelix(2);

    // Mètode calcularTemps
    $distancia = 120;
    $tempsCotxe = $cotxe->calcularTemps($distancia);
    $tempsVaixell = $vaixell->calcularTemps($distancia);
    echo "El cotxe triga $tempsCotxe hores a recórrer $distancia km. <br>";
    echo "El vaixell triga $tempsVaixell hores a recórrer $distancia km. <br>";

    // Mètode calcularPreu
    $preuVaixell = $vaixell->calcularPreu($vaixell->getEsloraTotal(), $vaixell->getPotencia());
    echo "El preu del vaixell és $preuVaixell €. <br>";
    ?>
</body>

</html>

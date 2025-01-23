<?php
echo "Hola Mundo";
?>

<?php
$array = array("isai","jose","abel");
var_dump($array[0]);
?>

<?php
$isai = 16;
$jose = 17;
if($isai >= $jose){
    echo"isai es el mayor";
}else{
    echo"jose es mayor";
    }?>
<br>
    <?php
    $estudiantes = array ("studiante1","estudiante2","estudiante3","estudiante4","estudiante5","estudiante6","estudiante7","estudiante8","estudiante9","estudiante10");
 
    for($i =0; $i < count($estudiantes); $i++){
        echo " ".$estudiantes[$i]." ";

    }
    ?>
    <br>
<?php
$frutas =array("melon","sandia","uvas",);
$compradores = array("juan","fer","ling ling");

    function asignarCompradores($compradores, $frutas){
        foreach ($compradores as $comprador){
            foreach ($frutas as $fruta){
                echo $comprador." compro ".$fruta."<br>";
                
       }   
    }
}

\asignarCompradores($compradores, $frutas);

?>
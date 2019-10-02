<?php
  include("./header.php");
  require_once("./tableau_en_select.php");
  $destinations =
      array(
          "Europe" => array(
              "France" => array("Aix" => 10, "Paris" => 20, "Les Sables d'Olonne" =>30),
              "Allemagne" => array("Aix" =>100,"Berlin" => 200, "Munich" =>210, "Dresde" =>150),
              "Italie" => array("Venise" => 500),
          ),
          "Asie" => array(
              "Japon" => array("Tokyo" => 1000, "Kyoto" => 900),
              "Vietnam" => array("Saïgon" => 870, "Hanoï" => 780, "Đà Nẵng" => 600)
          ),
          "Afrique" => array(
              "Côte d'Ivoire" =>  array("Yamoussoukro" => 650, "Abidjan" => 800),
              "Afrique du Sub" =>  array("Prétoria" => 950, "Le Cap" => 800)
          )
      );
  if(isset($_POST["destination"])){
    $truc = explode(".", $_POST["destination"]);
    
    if($destinations[$truc[0]][$truc[1]])
    echo tableau_en_select(array($truc[1] => $destinations[$truc[0]][$truc[1]]) , "choisir_triple.php");
  }else{
      echo tableau_en_select($destinations, "");
  }

  include("./footer.php")
?>

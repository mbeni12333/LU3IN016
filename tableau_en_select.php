<?php

  function tableau_en_select($destinations, $fichier=""){
    $form = '<form action="'.$fichier.'" method="POST">';

    $form .= '<label for="destination">Destination : </label><select id="destination" name="destination">';
    foreach($destinations as $continent=>$pays){
      $form .= '<optgroup label='.$continent.'>';
      foreach($pays as $p=>$villes){
        $form .= '<option value="'.$continent.'.'.$p.'">'.$p."</option>";
      }
      $form .= '</optgroup>';
    }
    $form .= "</select>";
    $form .= '<input type="submit" value="Submit"/>';
    $form .= "</fieldset>";
    $form .= "</form>";

    return $form;
  }
?>

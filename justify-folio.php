<?php
  function justify_folio($folio) {
    $numbers = "";
    $letters = "";
    $array = str_split($folio,1);
    for ($i=0; $i<count($array);$i++) {
      $c = $array[$i];
      if (is_numeric($c)) {
        $numbers .= $c;
      } else if (ctype_alpha($c)) {
        $letters .= $c;
      }
    }
    //echo "$letters $numbers\n";
    $letter_count = strlen($letters);
    $number_count = strlen($numbers);

    //echo "$letter_count $number_count\n";
    $new_folio = $numbers;
    if (($letter_count - $number_count) < 9) {
      for ($i=$number_count; $i<9 - $letter_count; $i++) {
        $new_folio = "0" . $new_folio;
      }
      $new_folio = $letters . $new_folio;
    } else {
      $new_folio = $letters . $numbers;
    }
    $new_folio = strtoupper($new_folio);
    return $new_folio;
  }

  function dejustify_folio($folio) {
    $whitout_zero = "";
    if ($folio != null) {
      $bandera = true;
      $array = str_split($folio,1);
      for ($i=0; $i<count($array); $i++) {
        $c = $array[$i];
        if (is_numeric($c)) {
          if ($c != "0") {
            $whitout_zero .= $c;
            $bandera = false;
          } else if (!$bandera) {
            $whitout_zero .= $c;
          }
        } else {
          $whitout_zero .= $c;

        }
      }
      $whitout_zero = strtoupper($whitout_zero);

    } else {
      $whitout_zero = "--";
    }
    return $whitout_zero;
  }
?>

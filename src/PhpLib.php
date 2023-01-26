<?php

declare(strict_types=1);
/**
* @version 1.0.0
*/

namespace PhpLib;

class PhpLib {

  public function vdump($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }
  
}

?>

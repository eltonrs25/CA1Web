<?php
require 'INCLUDE/header.php';
include 'INCLUDE/navbar.php';

$arraydata = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

?>

<div class="container">
  <h2>Array Data</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Country</th>
        <th>Capital</th>
      </tr>
    </thead>
    <tbody>
      <?php

      foreach ($arraydata as $key => $value) {
        echo "<tr>
        <td>".$key."</td>
        <td>".$value."</td>
      </tr>";
      }

      ?>
    </tbody>
  </table>
</div>

<?php

require 'INCLUDE/footer.php';

?>
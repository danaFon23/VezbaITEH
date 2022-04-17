
<?php

$oktalniBroj = 01234;  // Svi oktalni brojevi pocinju sa '0'

$heksadecimalniBroj = 0xABC;  // Svi heksadecimalni brojevi pocinju sa '0x'

$binarniBroj = 0b1000;  // Svi binarni brojevi pocinju sa '0b'

var_dump($oktalniBroj);
echo "<br/>";
var_dump($heksadecimalniBroj);
echo "<br/>";
var_dump($binarniBroj);
echo "<br/>";
?>

<?php
      $persons = 
      [
            "students" => [
                  "first_year" => [
				[
					"ime" => "Filip",
                              "prezime" => "Furtula"	
                        ],
                        [
					"ime" => "Marko",
                              "prezime" => "Stanimirovic"	
                        ]
                  ],
                  "second_year" => [
                        [
					"ime" => "Edis",
                              "prezime" => "Sarda"	
                        ]
                  ]
            ],
            "teachers"	=> [
              	"profesors" => [
				[
					"ime" => "Marko",
                              "prezime" => "Perovic"	
                        ]
                  ],
                  "assistants" => [
				[
					"ime" => "Milos",
                              "prezime" => "Zlatic"	
                        ]
                  ]
            ]
      ];
	print_r($persons);

      foreach($persons["students"]["first_year"] as $student)
	{
	      echo '<br/>' . $student["ime"] . ' ' . $student["prezime"] . '<br/>';
      }
     


?>















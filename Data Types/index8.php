<?php 
/* Array
(
  [FrontEnd] => Array
    (
      [0] => HTML
      [1] => CSS
      [JS] => Array
        (
          [Vuejs] => Array
            (
              [2] => v2
              [3] => v3
            )

          [0] => Reactjs
          [1] => Svelte
        )
    )

  [BackEnd] => Array
    (
      [0] => PHP
      [1] => MySQL
      [2] => Security
    )

  [0] => Git
  [1] => Github
  [Testing] => Array
    (
      [0] => Unit Testing
      [1] => End To End
      [2] => Integration
    )
)
*/
$arry = ["FrontEnd" =>["html","css","js"=>["vueJS"=>[2=>"v2",3=>"v3"],0=>"Reactjs",1 =>"Svelte"]]] ;

echo "<pre>" ;
print_r($arry) ;
echo "</pre>"
 ?>
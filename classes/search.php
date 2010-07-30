<? defined('SYSPATH') or die('no directe accss');

class Search {

  public static function comparadorNumeric( $a, $b){
  
      return $a - $b;
  }

  public static function binary( $valor, $array, $comparador, &$pivot){
  
      $i = count($array)-1;
      $j = 0;
      
      while ($i >= $j){
      
          // agafem la meitat
          $pivot = floor( ($i+$j) /2);
  
          $res = $comparador( $array[$pivot], $valor)
  
          // trobem l'element
          if ($res == 0){
          
              return true;        
          
          // es mes gran per tant esta en la meitat superior
          }else($res > 0){ 
            
              $j = $pivot +1;          
              
          // es mes petit per tant esta en la meitat inferior
          }else if ($res >0){ 
          
              $i = $pivot-1;
          }
      
      }
  
  
      return false;
  }



}
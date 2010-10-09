<? 

class helper_validate {
 
 
     public static function complementA11( $num){
     
           $num = 11-($num%11);
         
           if ($num == 10) $num = 1;
           if ($num == 11) $num = 0;
         
           return $num;
     
     }
 
     public static function ccc($EntitatSucursal,$Compte){
      
           if (strlen($EntitatSucursal)!=8 ||
               strlen($Compte) != 10){
               
               return NULL;    
           }
     
           $pesos= Array(1,2,4,8,5,10,9,7,3,6);
           
           $digit1 = $digit2 = 0;
           
           for ($x=7; $x>=0; --$x){
               
               $digit1 += $pesos[$x+2]*$EntitatSucursal[$x];               
           }
           
           $digit1 = self::complementA11($digit1);
           
           for ($x=9; $x>=0; --$x){
    
               $digit2 += $pesos[$x]*$Compte[$x];
           }
           
           $digit2 = self::complementA11($digit2);

           return $digit1.$digit2;
           
      }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
}
<? defined('SYSPATH') or die('parser');

class Parser{


  public static function import2english($import){
        if ( !strstr($import,",") ) $import .= ",00";
        $import = str_replace('.','',$import);

        return substr_replace($import,'.',strlen($import)-3,1);
  }

  public static function nif($nif){

	$n = strlen($nif);

        if ($n != 9){

		if (is_numeric( substr($nif,0,1))){

        		if ($n < 9){
        			$nif = str_pad($nif,9,'0', STR_PAD_LEFT);
			}
		}else{
        		// te una lletra al principi
	                if ($n< 9){
        	        	$nif = substr($nif,0,1).str_pad( substr($nif,1,strlen($nif)-1), 8,'0', STR_PAD_LEFT);
			}
		}
        }

	return (String)strtoupper(substr($nif,0,9));
  }



  // es una clase estatica
  private function __construct(){ }

	/**
	 * Formats a phone number according to the specified format.
	 *
	 * @param   string  phone number
	 * @param   string  format string
	 * @return  string
	 */
	public static function phone($number, $format = '2.3.2.2')
	{
		//els 900 i mobils format 3-2-2-2, la resta 2-3-2-2
		if (substr($number,0,2)=='90' || substr($number,0,1)=='6' || substr($number,0,1)=='7')
			$format = '3.2.2.2';

		// Get rid of all non-digit characters in number string
		$number_clean = preg_replace('/\D+/', '', (string) $number);

		// Array of digits we need for a valid format
		$format_parts = preg_split('/[^1-9][^0-9]*/', $format, -1, PREG_SPLIT_NO_EMPTY);

		// Number must match digit count of a valid format
		if (strlen($number_clean) !== array_sum($format_parts))
			return $number;

		// Build regex
		$regex = '(\d{'.implode('})(\d{', $format_parts).'})';

		// Build replace string
		for ($i = 1, $c = count($format_parts); $i <= $c; $i++)
		{
			$format = preg_replace('/(?<!\$)[1-9][0-9]*/', '\$'.$i, $format, 1);
		}

		// Hocus pocus!
		return preg_replace('/^'.$regex.'$/', $format, $number_clean);
	}

	public static function r_data($data){
		if ($data == "") return $data;
		return substr($data,8,2) . "-" . substr($data,5,2) . "-" . substr($data,0,4);
	}

	   //de dd/mm/aaaa a aaaammdd
	public static function l_data($data){
		if ($data == "") return $data;
		return substr($data,6,4) . substr($data,3,2) .  substr($data,0,2);
	}

	public static function rh_data($data){ return substr($data,8,2) . "-" . substr($data,5,2) . "-" . substr($data,0,4) . " " . substr($data,11,5); }







}

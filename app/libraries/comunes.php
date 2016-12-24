<?php

class Comunes {
    
    public static function cambiaf_normal($fechadb){
        //2014-11-24 14:36:39
        $fecha=array();
        $fechaX=explode(" ",$fechadb);
        $fecha=explode("-",$fechaX[0]);
        /*
        echo "--";
        print_r($fecha); 
        echo "--";exit;
        */
        if($fecha[0] && $fecha[1] && $fecha[2]){
          //list($fecha[0],$fecha[1],$fecha[2])=explode("-",$fechadb[0]);
          return $fecha[2]."/".$fecha[1]."/".$fecha[0];
        }else{
          return "";
        }
    }
    public static function cambiaf_a_mysql($fechadb){ //sale 2015-01-29  entra 25/08/2015
        //$fechadb=explode(" ",$fechadb);
        $fecha=array();
        $fecha=explode("/",$fechadb);
        
        if($fecha[0] && $fecha[1] && $fecha[2]){
            return $fecha[2]."-".$fecha[1]."-".$fecha[0];
        }else{
          return "";
        }
    }
    
    public static function cambiaf_normal_hora($fechadb){
        //2014-11-24 14:36:39
        $fecha=array();
        $fechaX=explode(" ",$fechadb);
        $fecha=explode("-",$fechaX[0]);
        /*
        echo "--";
        print_r($fecha); 
        echo "--";exit;
        */
        if($fecha[0] && $fecha[1] && $fecha[2]){
          //list($fecha[0],$fecha[1],$fecha[2])=explode("-",$fechadb[0]);
          return $fecha[2]."/".$fecha[1]."/".$fecha[0]." ".$fechaX[1];
        }else{
          return "";
        }
    }

    public static function fechaBlog($fechadb){
        //2014-11-24 14:36:39
        $fecha      =array();
        $fechaX     =explode(" ",$fechadb);   
        $fecha      =explode("-",$fechaX[0]);
        
        $laFecha  = array();
        $losMeses = ["01"=>"Enero", 
                     "02"=>"Febrero", 
                     "03"=>"Marzo", 
                     "04"=>"Abril", 
                     "05"=>"Mayo", 
                     "06"=>"Junio", 
                     "07"=>"Julio", 
                     "08"=>"Agosto", 
                     "09"=>"Septiembre",
                     "10"=>"Octubre",
                     "11"=>"Noviembre",
                     "12"=>"Diciembre"];
        
        $lafecha["dia"]     = $fecha[2];
        $lafecha["mes"]     = $losMeses[$fecha[1]];
        $lafecha["anno"]    = $fecha[0];

        return $lafecha;

    }


    public static function cambiaf_a_mysqlOLD($fecha){ 
	      $date=array();
        $date=explode("/",$fecha);
	return $date[2]."-".$date[1]."-".$date[0]; 
    }
    public static function cambiaf_a_mysql_corta_excel($fecha){ ///23-09-2015 DD-MM-AAAA -> 2015-09-23
        //echo "F:".$fecha."<br>";
        if(strpos($fecha, "-")){
            $fecha=explode("-",$fecha);
            return $fecha[2]."-".$fecha[1]."-".$fecha[0]; 
        }elseif(strpos($fecha, "/" )){
            $fecha=explode("/",$fecha);
            return $fecha[2]."-".$fecha[1]."-".$fecha[0]; 
        }else{
            return "0000-00-00";
        }
        
    }
    
    public static function horaRegistro($fecha){ 
	$hora=array();
        list($hora[0], $hora[1])=explode(" ",$fecha);
	return $hora[1]; 
    }
    
    public static function formatoNumerico($numero){
        $numero = number_format($numero, 0, '.', '');
        return $numero;

    }
    public static function validarCelular($fono){
        $cadena2="";
        $cadena1=(string)$fono;
        /*
        Números Celulares: Todas las compañias
           Expresión Regular: ^(09[6-9][0-9]{7})$
           Patrón Asterisk: 09[6-9]XXXXXXX
         * //56987435493
        */
        //elimino caracteres no numericos
        for ($i=0; $i<strlen($cadena1); $i++) {
            if (is_numeric($cadena1[$i])) {$cadena2.=$cadena1[$i];}
        }
        if(strlen($cadena2)>11){
            $cadena2=substr($cadena2, -11);
        }
        elseif(strlen($cadena2)<8){
            $cadena2=false;
        }elseif(strlen($cadena2)==8){
            $cadena2="569".$cadena2;
        }elseif(strlen($cadena2)==9){
            $cadena2="56".$cadena2;
        }
        elseif(strlen($cadena2)==10){
            $cadena2="5".$cadena2;
        }
        return $cadena2;
    }
    /*
    * SANITIZAR VARS
    */
    public static function globalXssClean(){
        // Recursive cleaning for array [] inputs, not just strings.
        $sanitized = static::arrayStripTags(Input::get());
        $sanitized = Comunes::parsearParametros( $sanitized );
        Input::merge($sanitized);
    }
 
    public static function arrayStripTags($array){
        
        $result = array();

        foreach ($array as $key => $value) {
            // Don't allow tags on key either, maybe useful for dynamic forms.
            
            $key = strip_tags($key);

            // If the value is an array, we will just recurse back into the
            // function to keep stripping the tags out of the array,
            // otherwise we will set the stripped value.
            if (is_array($value)) {
                
                $result[$key] = static::arrayStripTags($value);
            } else {
                // I am using strip_tags(), you may use htmlentities(),
                // also I am doing trim() here, you may remove it, if you wish.
                $result[$key] = trim(strip_tags($value));
            }
        }

        return $result;
    }
    
    public static function parsearParametros( $param ) {
        //echo "parsea<br>";
       // $param   =RemoveXSS($param);
        $param   =str_replace("'","`",$param);
        $param   =str_replace('"','`',$param);
        $param   =str_replace("#","",$param);
        $param   =str_replace("%","",$param);
        $cross_site_scripting = array ( '@<script[^>]*?>.*?</script>@si', // Remover javascript
               '@<[\/\!]*?[^<>]*?>@si' );             // Remover etiquetas HTML
        $inyeccion_sql = array ( '/\bAND\b/i', '/\bOR\b/i', '/\bSELECT\b/i',
               '/\bFROM\b/i', '/\bWHERE\b/i', '/\bUPDATE\b/i',
               '/\bDELETE\b/i', '/\b\*\b/i', '/\bCREATE\b/i' );
        $retorno = str_replace ( $inyeccion_sql, "", $param );
        $retorno = str_replace ( $cross_site_scripting, "", $retorno );
    return  $retorno;
   }
	
    public static function mostrarFecha($date)
    {
            if(empty($date))
            {
                    return "No date provided";
            }

            $periods = array("segundo", "minuto", "hora", "dia", "semana", "mes", "año", "decada");
            $lengths = array("60","60","24","7","4.35","12","10");

            $now = time();
            $unix_date = strtotime($date);

            // check validity of date
            if(empty($unix_date))
            {  
                    return "sin info";
            }

            // is it future date or past date
            if($now > $unix_date) 
            {  
                    $difference     = $now - $unix_date;
                    $tense         = "hace";
            } 
            else 
            {
                    $difference     = $unix_date - $now;
                    $tense         = "ahora";
            }

            for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) 
            {
                    $difference /= $lengths[$j];
            }

            $difference = round($difference);

            if($difference != 1) 
            {
                    $periods[$j].= "s";
            }

            return "{$tense} $difference $periods[$j] ";
    }
    
    public static function compararFechas($primera, $segunda){
	echo "fecha hoy: ".$val1 = $primera;
        echo "<br>";
        echo "fecha envio: ".$val2 = $segunda;

        $datetime1 = new DateTime($val1);
        $datetime2 = new DateTime($val2);
        //echo "<pre>";
        //var_dump($datetime1->diff($datetime2));

        if($datetime1 > $datetime2)
            //fecha actual (hoy) es mayor por lo que se debe activar el envio
            //echo "<br> primera is bigger";
            return true;
        else
           //Aun no se cumple
          //echo "<br> segunda is bigger";
            return false;

    }
    
    public static function objectToArray ($object) {
        if(!is_object($object) && !is_array($object))
            return $object;

        return array_map('objectToArray', (array) $object);
    }
    
    public static function getRealIP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
		return $_SERVER['HTTP_CLIENT_IP'];
		
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	
	return $_SERVER['REMOTE_ADDR'];
    }
    
    public static function sacar_extension($file) {
        $trozos = explode("." , $file);
        $cuantos = count($trozos);
        $ext = $trozos[$cuantos - 1];
        return (string) $ext;
    }
    
    public static function text2url($title, $separator='-')
    {
        return Illuminate\Support\Str::slug($title, $separator);
    }
    
    /////////VALIDA EMAIL
    public static function comprobar_email($email){
        $mail_correcto = 0;
        //compruebo unas cosas primeras
        if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
           if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
              //miro si tiene caracter .
              if (substr_count($email,".")>= 1){
                 //obtengo la terminacion del dominio
                 $term_dom = substr(strrchr ($email, '.'),1);
                 //compruebo que la terminación del dominio sea correcta
                 if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                    //compruebo que lo de antes del dominio sea correcto
                    $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
                    $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
                    if ($caracter_ult != "@" && $caracter_ult != "."){
                       $mail_correcto = 1;
                    }
                 }
              }
           }
        }
        if ($mail_correcto)
           return 1;
        else
           return 0;
    }
    /////////FIN VALIDA EMAIL
    
    ////VALIDA RUT
    public static function valida_rut($r){
            $r=strtoupper(str_replace(array(".","-"," "),'',$r));
            //$r=strtoupper(ereg_replace('\.|,|-','',$r));
            if(strlen($r) < 7){ return false;}

            $sub_rut=substr($r,0,strlen($r)-1);
            $sub_dv=substr($r,-1);
            $x=2;
            $s=0;
            for ( $i=strlen($sub_rut)-1;$i>=0;$i-- )
            {
                    if ( $x >7 )
                    {
                            $x=2;
                    }
                    $s += $sub_rut[$i]*$x;
                    $x++;
            }
            $dv=11-($s%11);
            if ( $dv==10 )
            {
                    $dv='K';
            }
            if ( $dv==11 )
            {
                    $dv='0';
            }
            if ( $dv==$sub_dv )
            {
                //return true;
                return substr($r, 0, -1)."-".substr($r, -1);
            }
            else
            {
                    return false;
            }
    }
    
  
    public static function detect() { 
	$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME"); 
	$os=array("WIN","MAC","LINUX"); 
	# definimos unos valores por defecto para el navegador y el sistema operativo 
	$info['browser'] = "OTHER"; $info['os'] = "OTHER"; 
	# buscamos el navegador con su sistema operativo 
	foreach($browser as $parent) { 
            $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent); 
            $f = $s + strlen($parent); $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15); 
            $version = preg_replace('/[^0-9,.]/','',$version); if ($s) { 
                $info['browser'] = $parent; $info['version'] = $version; 
            } 
        } 
	# obtenemos el sistema operativo 
	foreach($os as $val) { 
            if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false) $info['os'] = $val; 
        } 
	# devolvemos el array de valores 
	return $info; 
    }
    
    public static function logConsole($txt=null) { 
        // id user_id user_email log IP created_at updated_at
        // HomeController::insertaLogin(Auth::user()->id, Auth::user()->email, "-" , 1 ); 
        $ip = Comunes::getRealIP();
        $os = Comunes::detect();
        $infoUser = $os["os"]." | ".$os["browser"]." | ".$os["version"]." | ".$_SERVER['HTTP_USER_AGENT'];
        
        $log                = new ConsoleLog;
       if (Auth::check()){
            $log->user_id       = Auth::user()->id;
            $log->username      = Auth::user()->username;
        }else{
            $log->user_id       = 0;
            $log->username      = "NO LOGIN";
        }
        $log->log           = $txt;
        $log->IP            = $ip;
        $log->info_user     = $infoUser;
        $log->save();
        
        if($log){return true;}else{return false;}
    }
    
     //////////////////////////////////////////////////////////   
    public static function RemoveXSSN($val) { 
   // remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed 
   // this prevents some character re-spacing such as <java\0script> 
   // note that you have to handle splits with \n, \r, and \t later since they *are* allowed in some inputs 
   $val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val); 
    
   // straight replacements, the user should never need these since they're normal characters 
   // this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&#X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29> 
   $search = 'abcdefghijklmnopqrstuvwxyz'; 
   $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
   $search .= '1234567890!@#$%^&*()'; 
   $search .= '~`";:?+/={}[]-_|\'\\'; 
   for ($i = 0; $i < strlen($search); $i++) { 
      // ;? matches the ;, which is optional 
      // 0{0,7} matches any padded zeros, which are optional and go up to 8 chars 
    
      // &#x0040 @ search for the hex values 
      $val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val); // with a ; 
      // &#00064 @ 0{0,7} matches '0' zero to seven times 
      $val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ; 
   } 
    
   // now the only remaining whitespace attacks are \t, \n, and \r 
   $ra1 = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base'); 
   $ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload'); 
   $ra = array_merge($ra1, $ra2); 
    
   $found = true; // keep replacing as long as the previous round replaced something 
   while ($found == true) { 
      $val_before = $val; 
      for ($i = 0; $i < sizeof($ra); $i++) { 
         $pattern = '/'; 
         for ($j = 0; $j < strlen($ra[$i]); $j++) { 
            if ($j > 0) { 
               $pattern .= '('; 
               $pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?'; 
               $pattern .= '|(&#0{0,8}([9][10][13]);?)?'; 
               $pattern .= ')?'; 
            } 
            $pattern .= $ra[$i][$j]; 
         } 
         $pattern .= '/i'; 
         $replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2); // add in <> to nerf the tag 
         $val = preg_replace($pattern, $replacement, $val); // filter out the hex tags 
         if ($val_before == $val) { 
            // no replacements were made, so exit the loop 
            $found = false; 
         } 
      } 
   } 
   return $val; 
} 
public static function filtra($variable, $largo)
{
	//$variable	=mysql_real_escape_string($variable);
	$variable   =  Comunes::RemoveXSSN($variable);
	$variable   =  Comunes::parsearParametros2($variable);
	$variable   =str_replace("'","",$variable);
	$variable   =str_replace("#","",$variable);
	$variable   =str_replace("%","",$variable);
	if($largo>0){
		$variable   =substr($variable, 0, $largo);
	}
	return $variable;
}
public static function parsearParametros2( $param ) {
    $param   =  Comunes::RemoveXSSN($param);
    $param   =str_replace("'","`",$param);
    $param   =str_replace('"','`',$param);
    $param   =str_replace("#","",$param);
    $param   =str_replace("%","",$param);
    $cross_site_scripting = array ( '@<script[^>]*?>.*?</script>@si', // Remover javascript
           '@<[\/\!]*?[^<>]*?>@si' );             // Remover etiquetas HTML
    $inyeccion_sql = array ( '/\bAND\b/i', '/\bOR\b/i', '/\bSELECT\b/i',
           '/\bFROM\b/i', '/\bWHERE\b/i', '/\bUPDATE\b/i',
           '/\bDELETE\b/i', '/\b\*\b/i', '/\bCREATE\b/i' );

    $retorno = preg_replace ( $inyeccion_sql, "", $param );
    $retorno = preg_replace ( $cross_site_scripting, "", $retorno );
    return trim( $retorno );
   }
/////////////////////////////////////////////////////////////
    public static function object_to_array($object) {
      return (array) $object;
    } 

    public static function array_to_object($array) {
      return (object) $array;
    } 
    
    public static function nombreRegion( $id ) {
        $region = DB::table('regiones')
              ->where('id', $id)
              ->first();
        if($region){
          return $region->nombre;
        }
    }
    public static function nombreComuna( $id ) {
         $comuna = DB::table('comunas')
              ->where('id', $id)
              ->first();
        if($comuna){
          return $comuna->nombre;
        }
    }

    public static function br2nl ( $string ){
        return preg_replace('/\<br(\s*)?\/?\>/i', PHP_EOL, $string);
    }
   

   public static function iva($subtotal){
      $porcent  = 0.19;
      $result   = array();

      //obtener solo el IVA
      $result["iva"]    = $subtotal*$porcent;
      $result["total"]  = $subtotal*($porcent+1);

      return $result;
  } 


}//Comunes


class Validator2 extends Validator {

  public function __call($method, $parameters)
  {
      if (substr($method, -6) === '_array')
      {
          $method = substr($method, 0, -6);
          $values = $parameters[1];
          $success = true;
          foreach ($values as $value) {
              $parameters[1] = $value;
              $success &= call_user_func_array(array($this, $method), $parameters);
          }
          return $success;
      }
      else 
      {
          return parent::__call($method, $parameters);
      }
  }

  protected function getMessage($attribute, $rule)
  {
      if (substr($rule, -6) === '_array')
      {
          $rule = substr($rule, 0, -6);
      }

      return parent::getMessage($attribute, $rule);
  }



}
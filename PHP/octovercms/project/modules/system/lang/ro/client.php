<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAACQAwAA/HAugkiQVfy25a+TZaaswbY2OjpAYpXO8ywVKhZO81ipiBTUnnJQqU+nNENQ7CikqhoGMf/b35SM3X5vIsQUq735fT53u02OdXXJyfvlWBE4N2QYSleZqdn35U0gsPlRyl/w3HfQU9qlCxx8N57VVuecpzZG0i6WW/Y9ATK6JIOfrZP9y0KpDFytReb7Ec4b0f48CLLB2TEUj5aV6HNoVSHcA7C0yrZYK6SGtg6xxK9KiHkjuJSZoro8wV10faHkdeUI6eQpPbdKkZeY6kbbPEgweTVcrAW1fX5goxdsjevIVP2xppqqkfdfvNLdRY+W4ug3XKQHSMn3S3Tu+Uo/NdqAzWB9hhvORkv2fN/Fm7mTD1wXv9HTQKTpbh525vXbNAdOEr3n/mw7QdKBPiuM6xUyQBPx0VNBpOw0p30nR+zXWegT5gKeAfW7KU2rWd/nkXLeHXy7Sv6ykeHYiXjJSGpcXf5TLsQKxx1sJMovLpBcNcfjb6yE41YLClXwn4EzKCjizh+MIUpwZXmf2DmEkOcvqT6835SvDWV9gmStDURzx8y+4YG2ACHvZDxj8pk+ygyOyxU+Oq4ye49wIIVLd0x8ewfdd5acL9P+OO71Azkm+4LRJXc3xUOgdSJ5F/eOE/DbUPT7mDDkd8PmsmFHinfm1aGlINHPFX3UErf5B8a4uQSY4Xo9OT3Lgyp+8O9bPcDIx1uAqdaShicUZyICHrfzhwsAAvusJx8fsuCTUvxGTQONr0uZzOZLvte8dxioCqZs5+VqOAd5jfPdqnjXQ3dr2xe7uV+sRCztpGcNV3wS1cmmr7q1fEZRrwGX97HmoCt7nvq7hgE1yIIukk06Yqj5BPUbbiHz9DLG8N0qQogRiqKNptQM0jNCjoTJqjQsJvSIEp7HcTWF+r3KbhV3E8e3bSr4uDVrhjh8gojAMvsiu4U66ncQtHmm4rch49+Sj76ntx1Vd6+ZRXYObrs1FUh/dHSUalLaV0I0RobDyvHGMrq7RxM9tIFYC0TeE1vlat4LL9iBN5yZ/0BLU6IpuaT4AmkkpdIrvz4e+FKoDk+wQ8QVdTC5RTnQt3XWO+M7T9o4TA285//Gs1vFDS2mHYIUc44HJ4WAdMyr4gHGKjN3WkBi5uLynOuuvWpIiEmEX430+ac3OiZuQc7BJX1UpZvevSFITcdt4F1j/Xzio0lW+ZyzSBoo6YscisJSHdd/AAAAAA==');

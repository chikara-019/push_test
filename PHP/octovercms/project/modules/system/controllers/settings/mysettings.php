<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAC4AwAANjxW6lba4EtTXnXEI+gDQttnE8g8YI+ozwCoS0sUj+VhWVndL+zatHxFwSYZjsY9sAGBAKnajl4zFAczCm7hc0CFaqGSPaHpcCjugVVYrIUIFO17GsMdq15gwv1C8jpe3hsT6i0ZafP+Ot1qSY3VJu6kNPAorOJokfjbDvoxvrp6MepJtkRUGIFb4tIn7rK38Zd8t8SAUE6xXW3MnEYl0KeJ21zcL4j9CGUB11Io6jvQ1UDha0q1lLITBUnTwUY2plMozfh+vOH9pZZjaIeOmfoUIXAOBXKXjIulQWRmolW7HZ0k/BvJG2DyJnGt+IDZMEj4azy8rjhRRk5fWBvBXIrsOOqcoRoAgDBW93weJb3ZiDR2l20Aixhw/8hzt9XLZtd/HwXEBf+MdDqURNMfdjg0uLlE4uuWQ+EHhMJ1wG/kGMFIbhBsOERI0A3fDgp5u3lBtDphhzN0mQojw8+RbRhXY8MeyGrVnumB0oYe259hTVZ0ts7EzNAyt+bd86IgCgupARJjXmfjG6xnxRzKkWpJ6AD4FYm/T7ujIjdLTP/CZ2O/ckIpo10TkBCvLjgjsNRaLUmN6rxuc8FrHkiORB+e21pnu1ukUFws35BlI4CFx1xyMEM4ChSde4PYdtUj33XkAl/UuYSTWhzyKYSnfOikgDeqfxwbXRrCgUoWnK/cR3/uYt9/mFYfgQEjjrLCmgU6dOZwZS01Cc2aP8oE1bELVG7WBDXEEx99kZjvoECY7oeb7bOtkIWTbmffEqRzKJsBfn9qOu/Pr1+QLtj9AfhKRa04ocG01Wkn08E/VYgN1xRVnXnndka3WXVvpSIlZqbc5xR5EN3C3Gii5bPlR0V1hxZUrm3gUDsoAyh4w16fK7X66Cbt59eO8QW0TcERq93cdVCaFTiUWkOZFjbXcEVrdB3vZASlq54Ac4p4o+Ql7LaBzoPSrtEHe5kUaryHJ3k5Siv4XQsddGxnVd5CIFEMVcDY7CvSdVz5nlYag/ZheZ+ZmAn1EYTOrkh4pnY/Wb5+TD9l1znQ2P63tztJhaUlaqNEoii2hvV1nX/aLW59S/f7KMCQanQM9Y4k6UKaGH6tL/TOJIWo+bVT/5V9fOl1ef7UHnV8Ut2uHtABedjRloEjgXeJ4wlmZShEsMuCaeYbNnlwgD8JU+qwIIdsvzeOrzZKeaA6jpuChwrshiSdpeNSb9QI9dlY4aBU837gaOZXmtJa1Q8dFUtDrFCl7w2cIYNkvbYzfgrGoV9JzDpo/+PFeJAdQgAAAAA=');

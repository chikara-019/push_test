<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAAgAwAAfnRjrFF6n0h45H0+LoWwFa0JjRKjIjbNO+FV4vxvdUHPMmN25EfAypfY4qccmSpsbjHRLT39wFHEXeFOjqW9ANhijnbLill1Eu7l8WwyGLw1JhT0AKpw2ELcYGa3KMnf591Rffn96OX/f/5BlDtkp/k+dkvUWSutIXiUXnSdU8HIgxhOiavwRLhHWrXVepo58iOzp9mlwUtVrOJO5TwaCmnMkBOfVg6Q5P2ah7BFFiG/eNDsBKzh/VIYNNyTTUE43AdbKpsUVQeytii6wEOX96BrWSVThLLlnK0AreoScIX7fKr87UTPKe3m5pFdj7qwURLqwe6XnhMKDXhw+At2/Zz+T+pkC7aDIXVgN81tHOKtb7D+m8xPuS8Lyzzjzl/WJfvK4dXgudxQ0vkv8At764k4OKYyjogdN0464DVFpyEKIipm4/h9xkFPX7Oc7vXpDgeYst/MwYEPrx+JJCM+dy3zGi3WLdSN3gJjvpmIlhRFx3XSw51t0KkK9EPsaGmse4vgpxK+jF0p8lklGZbzs8pJ/7t1id2RbctYOPfVo7RsFH85LF/dHnMi5SaUwsL77cOjrnoV1VkIxGYUJdMWEnJNvRAFaLuFsIP616/CJODu3iYa8wZ38phz/KeNZB0OOrKPeqA0sgWNYRpJayVtL3X88mXgoLSvoQzCFvu1XvJtZ+yzsi+NgVTHGfFflJ/D+x5M6zhBaPKB2yfdU08ZURFZYsU/tSrRdShPci6tYVWhRRZkn91n1Zz/Wezgue/g96sS13CCmDnBN9u86szLpO+lhpGc3O6Ike6VpbiTUirDhZifIh7kaBe1f7EZUUjQc2BXBwEfDWoW6K4sqx0JPYxOMFrYcgk3/Z8XsB4zPq1N2pjOCci2Gdz6radGP0ivDfXyFhg8WWNZBWr0jN1XLFpJyIonjUYrxG4HNzbspfGJRMauj0W5g8ptLOGlIRblUUERBhbS31zIFqusOwTLJONiFgvXR8dPV5X9ziZtpoVNDMB3VZbKDkLdAFrmX8skbQS1IM4U5ZvpAZooUszMIz6Ttdhw/4HHWf3+zO+5zFsAAAAA');

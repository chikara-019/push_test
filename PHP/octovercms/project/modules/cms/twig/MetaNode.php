<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABoAwAAhXTjPwKUV786IKdmDMISYsDJGLli2cO0dk89SZlnfVfw2e4q9tbr4sAXlX0ZGv0LOoPvcR5icSvgX/UibAkdxaoO6MZSdfi5j1M72qXFheYDm13w60NXbpXlDx2ZPzfbnSEzuMLGL8AveTbk2JipK3uIdHI/uA26PeirjBj+BEQxfEV/wnR2b40xBN9RllyfURSS0tbS78JW+n094A9gajlNXg6jGx0TsuiyI8jg3ODSVh3CfKAsS+EIz3KjUBPQsFJrIpP/WQKyPW03bGbwwip41LuhAgDg3KUnhRwgw7dfGj4M3r+2h/wf8gtBDwwa20PZKffko26e5IPlLEB356zo0C2nAyN8j8vZ9iviMHHu02gMXk1Bbi+HamwsH95RwjaBBYxVC1iJZY1xce1G6twzgflPjId7gDa1lr8p5+LM6ZBw69C6FwyHNVPjNmMO9wgoIVw/ID5yIpt+QWtESli50qAjelxgGQgu+WFOtX3kbpqXSTy1wEyB/WmMypZFpcMYWZ3sfXonsY8CZZhBJrB8B4PzDqjFrmhzJRhicp3sB2CiAkN4GAUfVdFHnE9FYR2H6CZy8zCRmj0iy2KUN3xx5vvZWWs0Q5+Y4HJVgL5Gh74PCMnTUDVwg4E4sDeE8qyVG/Mz/+vpTDykXmmYdy+E8xT2wPhR4+W40lWlSSMJGL7Ey3+p0QdNHCjI1j+N1uBmi/6+aCjRdOqBz8f8e1y9lfC60U+MPBeBAi2jBEpARlE0k9Adggut+1/sTbfagfCxCRGEIsWVtIyBG2kvtJaNgBtnGz1FgydRu7PovxRpf3PvjjzZ9PN3LzcmcsirGlAcHWrdai3hHy4X6qrL9caZkYNz/3O70qb253CRv+SnqtAozPpR0ioKyKzZaQMg6rWDvPjN/jZWREO43361oxx9fmiNFwrM0i82rLdz5lvFbIUXt/hNOpzvvUQ6dHgMFJX98aCB79eSB48P1cUoBhI660txTYTYnCzlfF5ZOKzn6dgTI3m49erZHTH0je9eL9jDoyhrHJwu5GnYloVGrnKvrcv2cs8OQFSrG2p1TuxWSQLGnPpbniLOqXgee2B6j+7DWDKQHJav+hiPtTuQPimXvTAwFMdnyBAMJlUfx2LdR0dcw4A67skW0giJuZDLHfhKiLQe0SIAAAAA');

<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

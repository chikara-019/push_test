<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

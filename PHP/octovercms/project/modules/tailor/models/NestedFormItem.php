<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAACwCAAAjpJ8JzZFvE2tA9+kMMNGtD3VgT3girv5c1qTXDEqzDsxk9YTBOPCl50cPLRWH8ZUPp+dKayDVxc2js1ON1AxvI6JOIkSpyLB6keAGxgHOFwWCNPPaD2LkHNhehr9+hCcCX8w7TsM71SwZ1e/YsiictZo5x0IexwFVnQ6BUtb1pLGo0011pML+7mhkUZFa9JCQm4Bn/3Ap1wrEXR1C+fUk302pOg0wlmJB9g8PCoqSjkPR4qXIlzhdPpdktNVHE5fyL7DusDpDuTK8Sn30/O3ZUV3NxrXonjPbN7twVGRT+wEEGH/8QHcfPBQ0XgpXUjv3XJAJtghsFH0Wtr4q8/kQVgGyqY3rjTRoMn5c4n4p8UGxt2nGmU7rCiiYYCgUyS3w0Vb+/Kh/I0cG+0biCTRRe22nk1OfqV2qQQvegBkJoo5gnBbVSpL8p3MNVETnc8ElLgVCIJENMQ3f85BMyKLN659Ov6wvYwSpCFiooj82U4HRA0XAIEi7RIDfNK2agMDoJ9R64s2JY6+h+KLc80A90vjoUkfAMCzgleAqp3Ef94YJWF7aTK2BZ0PKhCxLQ9xTnoEXWNHPqODUWdlZQWlDB9ZiezqZ9ZwISBvTT2p/a895e+vOe6K5Uf+WFQPQSctbj+dxq5bvGO2YbCeoVQaXrf7SWXyYpuCzookv7NzCVHf5PGmDnomSYROQfpkVBWOY47QSfBe4ryST/Z65rUzaGCrCQDtY4HVdJstWhOUJK0QBs9uWA7Vcgbyv/IBPMd8ZR5rU5zSKZbedLCGJ2t4KKnODbu7xF+nJuYwMexsp9tZGQ2ih1tjEWuxmGEk0kt3vMkOT1eDbbUyViCulTjf2fgyZgexro9F787cJQGVIv/OlKCDuv3ErKHjHPuzJj3rMmJ0OMziB2Q4nKzN82p0PUS0MgatcnmBjhZthBIMt2avaHDYm84d0Mp6eH/IqRv77iMDnCr1vLdnh/CqjJCru+do4DlIvW6th2DLd7ribQFMc+OoWe+Wvewye8wBIGH+Fp+F32VbKQIsncIfvjVcl4XAyYa9mIdEvnByypMWVa/1d2cmpC7EGlmyjI76MA7NlE//y4svo6nxzId6HNSpqTOeWbUXg3/zL4jc2UUzwrOaiJQBJKtVmtA4L/9GLLuLQy+NR8hzf/POE90Byhq1G2vEjkpdkwbypPZchq5OfNjsh0Iee3mzUDxg2b3I/XJGsa3SrJXfSQFb6QICG/cm/9DabFsi4eZoIDF3oYnLqDzNhhwHqeIrw26/Z/RGWeip6TZ81SZXDk8MU1AeW4kZq/PtGHlMADVztkSFC8XT85Uzwz9QcclGt5+Ud4U9qUvR4kw4uPfIVw7+v+nX4BYQdzv82jnVrwluZPfWJGz933tUBPyLL6ob89pSnTUN24Vg81zoLkRqt0TK/zdX7NtBUBZfiaBFprtfgGbpQw98JH0gBatHXpudeySwdBhzFXX9oeasbJznFkxenMAvLohyNwJBI1C05CxGd6SxvghPOThsGvEqkJX2Ju5+gqt65igF7HX3EDv63aBkQHsHHqGtwtg+kUUsNM67wZerypaR9U+ZBNHz26Clr+8K3UFzDQTAuJwi9N0uWTtL4Jd7nHvp/FSoP37WczWjkvgsLbJLmjetS1ESX5UjH20vDAu5I5ZG2bHDj5Avya3E2NM3xVmLC/DADbE/gAowtXrACY60RypViYu0r2yo21ADe8Whew1C/2MP9m/MTyartmU6/fnqhM0fbWaTKRkDXbKXuW3r3G9Xcr/ioEJx08YYh+LG7BU66lMexl6H5YEJVq6feag6EsnmL2KdTjVnaz0pVyn2Zs1c9J1PAnNPicC9E553bn7VYaco7yfDmzvxO2o0f+EamFm0l/B/rfBgyftATwCdQPSffnS9/tn2bnumcZCe7xP+XaZJcCZyl6ORMCqOYBK7hplFidm3d6ylerua0cswDU1w24teaQyXJVgjgyUgSTHVrgYRmhoqj+av9gzYRpS6BamvpBvnd2Kp99j+hSGkhu64eITCtTWiirZVi/0TjK2mDopzlHQycqNL7JNd5XliocAS0Cpidl6W07pmyQWScGhIXnHBk9IWtJYUSB+QGHooNbCHMcczWBzGLU1YrpyMziW+nYnaTpbJWY5lO6hCIoWuNsHtCPRNB/IUJwre+09saqDMMbfHxhxxQ/7xjzWzFHVynWJW/QdU5h6rCAUypK7kWKH06He0qXGwfx1ftUjUkNvnPPrHNnVYcuJxYf88VMCP53FeU2Oa7Z9V4wFdaE6FRAsuK/CLZOa7mcQ3z+RmzInKKTUwOZtvQNagHZ6Hy8KeG7wq26NLH3/bkAgHnZt/XmClDJLjP2V6FJ2xEfj+7gN0z1CXIS4E7bG8LuI0dTF+4byIwxt6ClLRZB7IM90sQe1ESwMzoUAmIjpG/9pOJ3nbZ+b47EORN33z9rqMome8rhjEaa9jspvwHbXaaxkQmGWqY0So7uGL8SLY+Q4/UwG9cnckcpPT4WEsB2ygUKmXjX0iw0oOMdJerxcGnjof8WwjM5SON4Ej1NeUoDqiFI7bsrRuGkD545Fzl/vIr51J/Qxd/VZ08skZl6c68qPaQAeVlx6xqNtgPTEt3jGL9h+m3DuKcyE4PE23c/VI8sdPEUj8Z9QRN0aGth3VQ/9KTaxdtdEM4BrpLRMe0asXF3c6cRNAsTCXxwf/R+W1awlymmBkVcpZeEudfCUDIPhHX9FVeeLy86TL/AbYCB0u9UtznLeNViUTAaZaL30U3HQ2cq3abcqKGyQoaNtg0UklIRVq1eWNAEPmEbF7wC6FE9c6R166GDofJPEtC38EE5nWTybHgg2/ZeFigKPvfU2y3FEb87DPTuhQRt9V3q8V69KHaT3hCMIgoJk9Qoqr5+mOiN7b11rV144K0mPuQY04FO+fxQYto0inlU4TtlO9zQQALot3YiGrwOjGhMEoMgAAAAA=');

<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAADoGAAAdaYCg4q8rOFpKiFmLQ5u0weUsiIKvzgDGn/ET7Kdnm5HAkDJpd0FYQ1D4m7nfKeaf8cdVks8VXaDwz2MSQ7SuCPSMdsD73dPm7UH/8ksG27HBBk86TKQTnpB2pvZ+oBi8rfj7/D4nC6GZKdW6nndl63zPn7qr9x6abRt1CxuyaoJ/tfSBJVr0m7o6bQjSoOjmVTzLzzHCkGRcRJmnV6RTR1y7vDunH1d3B6NGAT12oWVcEuTS64TBKTnr6lX5XUdAFzMYUFiU+d9OUBQI/s3eUlYRnVsxr4MZz2uzDwhDEnp8jInMNI846tpbK6CEvdD8HeuXuZwE+EFVr0sr846Kewa6sIlPnQ2Id1mX7djehQtptB4ywrzuOsO4uqyJxWnOB0ZWNbbG9gWe3mIsDZqFHbqBdD+uOi+5gYqszrqEPfd5GIjweyzI8Rkyi1wtG56h0OWysCG6vTUE8tyCvPjDjZPpqxp0tk7KgBktTqUL01LxAbInk/yRu7bSIkQ6R9KrOCvxTwiWj3c0fB3h98YBQtm96MILD40kLssl+XHST7yOyxQ6//jZZH8dIwaXSE3+1wWb1b2fypX7eTKx/MFzdZVJz8HGfKjDoAB68nZ617tnBPx+99eDGuvOHIs3Atjio4Kz7J7DSYWZVHlzNdYOceZ94KWkKr0FkyrwrJQrF4mp7G4a3sumPnFJL7WQk5/nDVmFvDs8DGbVyOBRo8slcctc+tcw4bsdDfuFGfaykJJL8w6G2F7Aay3JUMN27FHZlbZjp+jVH9CJ0yiklOTgyVqTGFQs8snDMBLVnstB2cVJfBrHtLDOWRBFtXNcrpzJ6d7w7NyQUS0Qqi3BskStuPq3IDwZPMEehak0/k1I7jzmIe1YxzspVof70TYSNiTibUOkKLjkVT+tBw4x/DWKSRS1a+utinMyPFJevpvv+esUyWkEnzuozwaN/M2ZbmblegOrZoIZFtxXQC3AX3aJKnf7suMxTzrTIwPwvT/yURpGayDs6DzlyvqEDkkooA4MPMgX7qzjwKxHUa817jh2KFk2uUzL9fmKZudHUhajcd+m92tC+XWkjHu+YVAF3b0mfjftwPtnZf6SYmUb7C29kib+y6jD/7q/WNE1ct1Qb4dbp1qnUBs/XS/DocBgtDikZ8NekjVGw32Nb9OmUlujEzfIzAO1e9NBGM+xvhRnD4TQgrvVBXKcTptLvzLdNZjI+03tmmsu8zWrUZE/jFjLkrzSNqzTgOWHh6ZE/kkRjCjFjuDmaX4PH1H3E0ujK7Lpt5pZY27UiQa46hYqmu/1l90hHsy/GtKIOdGeuuG5Z02Nm4ig2LWE8jCYnVnVikZ2uY++f2El+8Y/0HmqmyrYNyz4kL2+h15nHwQUuWeR/Lp/qKtqRPMyV11Qt1l+gvldPdsHPnLbAczAMnuARDnklM5NI6s2Fp/dcQCgEvlEqbPDWwHNJdm/4l7q7cDPeUdLOJ4/i2f0Xe464S7GGt0BVqinjMUotP4JP+CraZaiKitfF0ts1zcCYnnitpJxNzZToLYTRrMdkJMdKB8q9PQEp7NXAp6T2kuXM5PQ/QKlLLOf+dRirXS8OhKFI+h8QN6Xtiu3UtXALuJDJEEsbjsxfUp6iuv0x1H+Xvdr7se78iQTJAkGrmlusgxTYMDa0Ebf5ye3Bo0fjAZ0u9iTD2yJhxhkYVpM6cnnuxtDfM971jKgbs8cRFqRYoJKp8J2WTFgPZORPlMX5Bx/3T/356ek1l9+kkMJkpyAxZGuOtat4kkjJC2qZBQJeV+oeAUEe54s2cpKjib3RQ2lX93Udv0JZIw1kyzXGDIcqspngPRTs7+cQjcIk6l6mX8ucB/eAcFbCtHitQAAepxBaMreSoCDIitknYbd2GFX9nNrV953Yq/bQix049oNSubEL3vJijD/ntRRg26wFY3dN79O/PnkxQZaS7CtQ/5fXaFa8nuI0nJ/+zu7yMlektWctSvXOk3PMlfSIwrYWgR6pBGVfCFgOhbHC9FtaI0JxLoSarc8F3GBQubvVtSqr+SwoSaN79ObTqviTHeaZFjLokpjpbKPu5NUgXNjEnsmCAErd+s1ilg/KeOPVAQL1wu4Xmw92H2xbMw6BT6xXY2UrqxxSsnen5eY9uwpahzwIc7jVBCjQOtTThDYQoeezqO+P2jysbJxtEpLjqYm0VBAxfTgPuoi/KIojn5pMApRlw2ZN+4qcNf8+j5DkoGSKilUFCCjnXjUIdit6w4jeLf7D7gvTcY4bQ4zdqrbAQR7R6JanO7nFyBL8Lg82bGF54qUU4UoZYbmcaEwHpd8j1XO0Ily5T0cAH0yypaR5x1K6QErbM7l9dFXlzNDIbS8ifKczfmJPgG5f9CWW8LmkpEnQU3YEE9kfBuYBxyWvC28yIwyFPcJ4CUEqhFPLZR9Zp7CsHyLa0S/2baJrDxmwyq4VK1dOESZT6S33W36OK77yjdTy/Ho8r4CikIUdtzKwQLZc3qc57VQJwfzehyEAO1KFeq6GraNXstN1Eak0hSIKHJWsp/QYUfuSk8J6l9BRH1/Coy+zntqQFdN5/f+HVw7himNlg65JRvZ3KwlTtDdNkAk2l559Gvz+IVIc6QW6dBionBdFHAqyytKrZIXWs+esSXjY5tb9ykVs4/z6tgdq2SytQNY3/8aTPkSNIVpTFY5Oa4qOxmdG0b+6ZKnVz2iNIGiA+DAqLIRn3C4RzTK1mmTRf9pBNIuQDuqjMlR8pqa1Qg7t0/vBojRKqzCnYcmyhEsPmQEB/7DmR2Quo+ox5HVfrlg+dxMRkkVZ9vr9GYtMGcLJStpImGKEqwKuECVO9Pod5PKJuj5l/dnv/J4aUmA7JULiq8mYtUvuxGkfxf7MEpN9xlfHdPB+bt351clABs5lNym4dNXhLlxCgzDuj9mSKWjCSlHOslAbQJ4qOLD9pIXnl1PLWwAsQsaLYIuXmuuyaHkkh+GK9/mefLxhDk8cJlOt4Esd2SVAjeu6aWG6fm0DVJjD6kAeR+v2UHvlmM3ZGGHPc9ggQPxec5tuGr18N/uHkB5j611ufewKFnDjZuH28wWxJtQZOmkgSXKh+rPJCgLrvK+tMLrDM0qDpqmP4MJsx2qx44dFPjyZEzgDoMcB2g+OSJ0K1O8kSCyDuGVclMLUlkf9cvatY5KsL1j7RLWyluMwbxm7K/naLCer6Uvwcc5ePckeaEq6sXu7i+PtuVu5WWB3v2TxmUUtGwoWVZL5uYs0BplHm5j5u6+bJtSuZwjQSu2uWb/OIZWO/QfyXAkvL/jOpLbYGqFtNhXSei2Y3R08HD0Hpg7IiOTR7BB350LHkrn9AKYjLmnSE1xR/J8H8ufCCJchB4/5JcbxT/SnfLnSEsSXmYXnIpM4UA1OkkDdpGzuJ+N8dk3xQJqqwf973IiIw71AlW00wPgCVa1/rZQwGTKyCZlMdJGgBmXUO97fQmx0ToncvM4a1J6MP2bBJkVzpxTFC5VDKpJjs5qAB/ORBo9aAfw6yfCkTJJJKPt8eAYB5VzhbH3FkcqppypfWCy9RwmnfQPLB1UkqsnDuKDTK63SQA0pFNKbtvi0ck7SWpXLCO3nlIxIz3blfnDwitYqnjcPxVf5wuMPCKBNMblNMqV0Hmz5tEvOnWxOdX0FPEa0bCtYcM03y0A2MoTT0yEy1z+zK0IgDB7KhNq8FYNHXgUNSGM0j3XqKwLSnyS31ysmcYdJjXWzp4L37ca7ZedFdwug/kSzFPZm3r4/sjHX1FoPYIheNTx9gQYZR/rxgOFaapV+0RpAHC7d01wTgiagS6uy9h5dxkfi6Uxfv0DbqVO6L4pbTtfLqiDTeedoeYaug+46OunrDjSVdcqsqVhybZQKlbZfs7Sna9YWszYnWlBiJNGK1gnTEPdXL+mVHd96EZnjvmKTEy7G1xsWSrpG/HSHyKjC10CxDZYlcKNdkBbZPR085j3e9Enb3D8pI2uLtpCvfHWewKVaJjwB/Ta2Oi3SXQflsOHqR/Pi8bFNSgPzEgyJAxMmtqJ6oS9zWl7o+7FdMWY539MGf7echmgE+LarPm/OoPeQz/a8JBk6P7UYn+BvXkE4U+wdNkaT6E0ub5Dy4FtKmTAXba+ctEar9FCrPSBiF1wJJW7jm8xnoAoAixXoP9dhchBTrU0t74WRjOUcuPzcXLLonuncKZBWulsK/L7acLFumeU7npC7uXaIKratLwkrfvWxVSehtWEAdHJo3IUP1UJqZy2qgtGsWs/MUHMkILvCM9sB4GtpzoTlCvFg++BYrvYUv5I0l72VRbBcmft+8q+etMjiYNnLdJY7CNI88kEvpjjm5O64AfzYVcPl4aSQNvDc+nfUz0JNMfHWpRKfg9X/+oXi3XUmCDWWJJZO8W6d1Fu/UnskVahXnUK8E12AMlEY+3DaPlynNLWKQj74kia4DmWNmJTYv0fy3lkSDspicO9ZLvTgK9XzNDpOHI43a5gHCH5z/F18xZQUzL9ISqvm2/0VNABdFRekU7Yl8L7XvMcBuMNZnheVbiY7kSdYPUi3ULl2HKVPY6jXgml16oJMI+dTHSkAyimBYBVcmqWoDWokWx+fVgm5WeVmadNmLsIbJ4LaouaUCf779JCFBdsKcWqSJtyC+7qDjJviAtLtEVs+cInM5hMKF4mLzJloKhZPf8RIIs60skRQrZsQD7Ez6/IfHs6x3+mT9RbGmibPc9auSyWWorS2eyIyKc796xEOgSHFTGf7Zxs6mXNLcahVI7HVz4Bv+tXAiGX1iR3ORLpB5qzYgmS30C+24KBg7T7RluOGXqTYgD4M0hFxrYt76zsJaR+9amXQXCBFHjOxzHb6/o06+NMGHrZ9AYq7j8ikYyDInMqtCfPUtXrICO0hmRhs24TBpGgeKwMWMzbHq9WQCN1mLjdzpOsjLlr6mPH+747bcT7EKNQg2dpKM63SQreNaXHOzJDFQ1YlSNkPWNys3q/R+CI7PV4kZObRcCdlk4u7B98Rxnw2FEYqoDltQSNdcCsLv1rKeA64m5WSxnX/yiMp5WWTWqUGr/4PcbHW3SSKyGVz0HmOyNIhO8RbWj4P11RFewntyFPhyt0rX+EsoOx57ueAgrQwdJ5Z/hvWiebNSuL5eIL8t/XDEjSVlp3b8lyxMkF8ZIsPmwiKOsKH3e1HNYJa1gzUDKGG2hmBQWLxHo7Lwotmx1WU4PxJX7NvT0WW2Rq+ok+C4LBREGLPiMK6UPpvWOrdOn8BC9KAIeY4hLUnCiwhV0TTs9yjZ6RSB5vfg2vkcKvGVkigRJpJkggEmyYMVGNDn9Vm+Ka4ZjQKDThmp22ZQaz4V1Y1J4ekQHfhIzV18wM/gNQCs+l8z0Rg1OGNV43a5KjeKyvMvPa5CewsEWffr6NZWs6HpIKEz+rFerKx63HNETYDk8L8VeipvE/Q2gT+KWNsdq/BDsIrzm5SJB0B0r0ojQ8IEz97xcXxoyzI173qMf1iyeK9wulbOa/mzuhA6WbSBCu5ZTJRA7ZEHMQ4W/RqYLegJM4OmMRVweLq5YSIZsGaEp482S3XjLK+nU1bV30ecrDXPFtiFxDDQ04cvDi304DhquOgmXhFJYllxKSgKIlAe6P4dKz8KleszSqjJYJTfl/xUAsQ7Ge4+q4Tyz2MA1ghNddxFd4shmAJ5cv1aXfVzaUGw2PE/q+45O7CnFxPEQ7ALnl7AStd2GnOfecMQJ9kbyMOYp19WIgo4ZVumUVsTmmXLj0DK7jzlKwvQIzamnsvUWVClDoaA62Uy0Em75yQ9lNzsKG67tYndTn4cJxr+oO62oE28QVoYxBsIps8Bk+eKDZV92v/CA7GCRdaOJ5HFXf95pYUGyV+EWMpLpqg1cxqhnMLDa8WmHlHK2ZE1J7YN8ZxMroOVCL7RPHh7tKgiYN5WoLuYgFfr5xZBzj5Z6UzdLzf6I9SzR10OG/5HzqDoJoNI/F+jRedHIZna5wQkpsb/57Se7PfexkWMwW3IqmoAOLUFulHwu7vzCkjUi5g4Lu9VF6tUKeCxxjo4PEQyYLhNPCflcsG4GVh+TIaDwgyIBtwvTbmSeGoNFEDRDQxAb4V2CHgXaS+NzHDzkjwwTgjRbrDizLXhVOsKmwpRfwzCEoM92po/H0NXDaOf3Et0GSEqmZZRES55ulAPVNo048QThs2/wTM4VDhFt709U1naYN08Ma5CW19HLpVhlJmeUhfAPlh/AInzQ3gakLaNf7Qxy3DSAHxPwi2Z/05hQs1I9fJXRR3oYXnAdrMuorhNz+ePB2X3Xd6Au6twYBjuPUDCBBEmJboPtj908PDqt4gexIlNW5Ospxj5F4oL0mk6HDvuebqMmXjLbZ/hSnaqprXhAtcbkQFTwwoxV/1F1cSqL5B8F4PLM1qiw5I6UTK5rXEBKmKFJ811zzH9eD9hfeklYRNC3+iVfvPWMe9u7hqzzTffc7Eamfr0x6f/9zYITmGIrY4Up2b0bIf7UVPgIRD5GEmsZHvJlJ14ZdhQSv0+zmUy2gYc80NnxIRg52yaD+f4tMkK3xjkBgTSjcmMr6IL0JXbo2rFOxUccml5haq6RlDhZdWyBeU+Uwi8U1jGPbVuD7NQLiawInjFM0NU9dybIPGqW/GwKf82CrnY5q2GKRH8oTmCUFquwkyi9fojVz9oaqRTWeD/ewFU17NsMxmzVbcmms4UMSWo8QO66kKr6C6HcA2rSVmINZeDo8yBNRI0VKmcdQXjbTUbQpoou8sI4DEZAnwTX2oSBxBwsLW6jb3rk1p/80E20mOpf6dG0Ugz8BLeKrCHber5KHsNmBuqFfTD7beRFb2xcwoF9qPXfiN1qa/zl5XIVMWBLxCmpntOSTAkaXGDupIPVAlTnt+rqePdjcGjVgzftSvhstM77xLlymVx57XHzIicbkOpjOaw7rTC/LeSGbAmpkT40BlAQ+22FBSq55lx3m+Ms8W7IqsVccUGoiwY9KlP0mF6x+XsignCfTsX+upfC6nIt0c5BVlcBaAEd7JKlsnQTIguMsFcZQM3kXMyBk0wr1DyY/sq9+Zj8Aku6eSmIqY0b3stQsnm2HlEaQQ6MsEHqxaZITvsE00TThiHv1IvQfE4TnbwKrvNE4+FDYqLxf/Owa5uAquToYi7HnOnjzfzKgXuYVQr4vJWWVun2RuaPHsj8UnfPpWQ+BxeTBAkHaAhm2EZJQNRooYoDs7r+NU1gOnaKUSAzm3aq5UUP61fHMTIDlFYVQcA9g24j4V/dO/cg41tt72UIrQd52FvDBpD6/lWhBnEfxndl0aDnuSH7beI7hCMc7koZN/doO6U+R5in+sn10N/8YqrYIidLMETEd2Lu8/AALRMikgwHXfFPHADkutPggD2E5BCSJjvZEdZaIfy7q1OabBrFNXebzyPdERJeeAu8dnyoEG/IPEnTbb8TzmIylhUdmnjEBTm9BYaUQMfr8U7QCPRJVG+8qk8C9cZoiI3MV+PloXOYYy3fUpb4cT7O/DyLsOvojgkA/hHq9FrPLCDoRZdJSe/CrptOeAp5lGRPOymbNSaaEsiIjFaVpTqraO1Nz0/+pSepb70Oa4ix97gDRyvEFtUztv4QxlZUK6hyC7Ivm8GTxLNNnd2a6uGTxlUNG2q4NEXB9PZHWj8xqfUU6z7+S0GNWhlTq6WjkKZa+/FJMf46KGHxk/h6SsRYdbf9TKgkQvy8sReUFhCKIHljgbzIun49hH/AEM82+NHJxBuL7htb/N8NVlcRpNbCVObNXAsrwZS5CWFPGcGLsCyYHcJGzs8mm2SnFpW2C+X4awZY42ftlfJ/tD5s3qyfmpQhNvsIq46p9hJid0IWZi0d1ZedS6WkMCfn/VPeNzGAO8Pygbsah/Bz8lnQpv0oflJ4naaxmSwUsjtKx6iAXEf2qZw/nZNQzvL2r7ypLexHQw86ZuklwbnYWR+sajyQSVRaTeqOZ8KmV8L4rV0OKjMiYqJsLAn4MwZqmhe670k8Ng7rx7yYWuSbQ2HbWi0bfS88CywwhD0mqdUSlfzJHlczOZ9sHfsKiStsozwUA/QywbO8DhfMd9WB8w3i0VujZw/UOH3347i2vxLBgP3H1cbi1LOE6QO+PcTmk40x9M9JJ7LtWOqF/zkM6mV96LtjXm0BCvjnPeRtI8orz3/j1q7cqa5xCQYgeocourvD5HwvX5u0+wJDpTfIehEd72/gFXJc/WAyO40bZBnxKvqUMk1ir8N56qwjMPURRb5RZlYRI+bISo4rCp/xnvHNwNNOojkZD/d7AhrFoH8diM4Kmp5CgOVrFHkjlI9xYVUVnnpcFzKWoiohX4VWr+EOZKnWny/hNB8VazUcyS3hfZNi3hAtWREtEGFCAPBVzmQ+QQXEM/N78HqHYNh1X2frmNSWdhmV68RTz9NNgOTlM0THGehfn7JHdmG9ebHgHskjweiwy4NhesQvlFkig1e7JzmpSLCjNhZz+MYc14Dmm3ILaH6tltLhUfEJYYQ0XE4rz2steEJH3AAAAAA=');

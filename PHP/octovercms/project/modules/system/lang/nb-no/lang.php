<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAD4EwAA87gy+tjFrs7Lp2xM4SfQs4uM+Y/ZcWEUQIpJ7JUfpy0WJ3EAU6LMGSYrL3SH7neBxkGSgHYY7q7j+qkQ23uLLfdzec7TtmR7axvj90cxPr8qAKtcf/ANjyx1GA/ERLe54vGGQ9ynHov35PL0Vhb/3HUzPnIWRJE3w8a9EBgJPTNt9LZ0XXA2j3FYl1J0uRW03uqtPsIu+qCT9+RNZLwMKJAU79zAzB8aBc3bOq4sR5wBFT9yWvm6Y/ZcqyR4CdhEtL21SW+8HcwwZyOP9qd+zAgva1KYSSdsTcHVotvN/iJbvPPRzxC4t3kmcxf/5qqd5aqXB4udSpZzKuplb0kxBVsqxMu4KWsbbyVSfg4wtQa9fTFCL0OjOuL53ZfckWs6WyUy9XqWMwwj5kEd0ya6u3SMzHY3XUGEvr2rs5ibnmkQs3Tgt+Sh5dQsWPzSa+Ko7RdeBEbfgvKu1DZJCSPG5yVde+tWDg6CTLrJdDJJ3yYruNrKQ2xI3uQ99Zio9VUxj8b7feHfGjJayLAZztEqb6wbqRREIMfHxlSl1AiAsZwIXrHovkzBf0JAb5K4mJ+rIDzMuWxEdT9SVvs5Cwk/oCLKeAC7eyS9L2pPgZ+u7pV5/3UGAcI1aXSeBG0s4uKaQhcH6+eXet4QcQADmSI90GYoMGwWyyKa+86O8tlIPYN4iUAQ/cf57XXUdC1wVPVT8/7gS1TMWUS+0bTncJcsgJTkQTuPkfy0ZLzMcEL85cRCeKXREmc1L9ckJEed8nBA9c+/We5lL1JRWWQ4QB677faqt1Y13W9z81oA86Df5H7Z6+IiTwxVZwkmzk8f8y+GrE8tuOlijuHLGPJ6mNfw1ndPTR3V0J0wsvRPIL8LxgdS0PFudufcd52oq0wgigAEovXL4X+64LRcgUdJul3b+RljiMmRffVCgPMfABnVoN/MfktRRn529ZlL3rHCS6fiMbytlIONGWgj8TErf+5/VTA6ORF0rZb24a3+HFhQPIWg4Qo2N7TY/bLtTd0wiGXgStE899bDzj0ASEg72yoykG4rzbVgzyKqGtFzRF1bJoF0VmU16Ux9ozqCDpCWK7FFE6mHSGupRfcqjPdy2rEnIBfddPOBWNvT9BQjFQt2/7nH9jV4uAwBp6NiDq0kMNaBfSgOaVOVoCxiKbq8PdS2hjdglV5KTTinsG5LRWaLBuwh1QquDxsw71lM84vQlHzewSHwZAJKb6zi01qV8s9pOv/L5MY/cf603dPcCKHawj50966nb/43SnBUKxG+jwMif2iGI7UyuVH/VZFP2MN2tKnkvzKhAOFURvPWXMJ5W+KmiLRjwyMrj8ZKYDMb63voWd+ucDJPZq+q/3W7uDriial4adODRjemroQhyxgKaJMHZFWy9S0uFNmRmcw6l9WxPa899e+/WjdXcrhq2kbM93JMWEzZVzxMpBIHf6AnXJbY+2y4Wc5hAybzO6evkJocxM2d9JpnqrgpJ2b3zFAa64wplJUpxCk1bLymsUdGZc4c+3wdPQdnNLAUH46/6oUG+Usz/rDZG5FRGH961XTajEfdF3W01byMckZBdywoyKURoFap1zt0nivctKVu27cNxBSSnYX3BtMETu4F3hoPyvl4ZrtksVnblVpq+gW37zdzV4Q5WAfL0DY1IsAzH0dSclUunC7uJTy0ddOOlznU39Og1s8zhb4Xo6bE3XHk77KgR97UojKNJxyaGR2BBKcQ0N0WVuRZ3l1BR6dv3Hci01ItDZnkXeiT/Rwon1k/26GD+qnI2VZuLUySoLjh6ag9A97oI9hlLRfqdCpw7kDZK6c5WA2ywnwzVq//oYNa5Nlyh9I1lmVefNEgUSR49OABjNAkl3HoRVQ/YZir1CCCuTa/gjBwqOEDa5V1h2sopUSYDf6d4H4aZykJYWGSdHZFSjpW5AFLxJ7FEVd3Bjkf1fZRPY84HtBPw3iOP3cllMPvRdesYp5EqQzFZNfQwASagGELDURAMAa+qktVN1pOYG09yoPjXDH80fsbsuyqMdjQxX3S2DCQWPYtBJdzzJEZhiIQ+7lDdRYrDz/RfWneBI5Gc5tnUrpPdygrh1RfMerUnTZINadu6cRlSAgtyb2iz2gPVpAh5h+V+FYwzUyShz4L8QACvPJJsDMO56JhS59lX692VCJwFznbdUDHvpxEMV3YMsLUeM4UcVsdCfYAstSZxghUtfFhl660tNQKHVqunVsgMxz0xh6yQXhkYeMHYO85OUAfLL5HkPwBTg9x5HXFtar2WfM+GwchWZ57nT7IKRwhiJiD2HROkHJCjs35zoSu5BmT/rdniHAA2FAGpysORBdzMzLHuhPyvGdf3yAq/Abpgi5vPNmXH1/WNzfbSwOHZLXLuiF0t20DcDgYyYhJnxDiz+OmxlNhOrkrZKLUdFjhNxpzW6A/snV1Uze9pbf2a1lyGM5AY99Cgk50epGrPEok1uIwO/ZdFzuu88wfMR/5TU0skP26VwP0wUcQ6uaR5n1bM70jvwpWaKTR8DmGmAYeIA1hUM6+GVDLuZo/usB4i4bn8XhV2fVOtqUl8iqUQy4gtlFl2UAer8LxXDVndSGbK1a/Pfu4oc4QN90O5Ibnsx8X/rChasV3bAIrjhAjRuqumvo1TYxZ+ohvpiBMET8cQ/o3rhmiVyOtV4QBMW6cnOg1aSMd9ew/z2WsnQ1SKQ2pkRBOR+//qr1907g8hY4cENrRGRbBOvy++vTimPLN/CPz3wYoR8lRKPrlYUaekT8VpzLYYbghvL1xqzlaqwrzsLRDhR0Pr91FVDCjrDjCiw9XK+nX3sZvwfc7S9dewssu3uKGlvcNXZ1y8ZV584R98Fw8D0C07zx1Ca34BQuDWK9b4QydBzonnWgGnd8g0WdiELV3YUgaEslTSab+o1oIKoWx9NxhCeIcE4FKy6CGk5D1cgoUTJFzv1bptvxyOIG402CbNJruyL+iXG1l34kqkhF+l0xZUF+hC9oPVyC7LbrAavaWQFepnwnvk4WYRf7jZqv7p8TyY8azSW+XWhJkj8ZnfTmkEh8nU3qOFcGAVqy4FooxrcLevPMOdNU25lBb7Z6Tu1sr33QbV+y0l/9ia21tSyi618Nr5wgwzEqqJwEl6sWD0Qdyawij/zC2HDIwvBlIMJA3OY6/ohJi/cya0jHDjE/61EEF7ZlNTeW1G5YzcaClYogW3jBvCTTbj+DRnxSZP78T29AAXfNJFuzZ7gujB53voGd/M5iM6W/5woyFhp9UrJfYvZMAO5fUNU88RqL0sB8wrrbAkvpdmoWOixAAYgd/W2aHefKXeIjf3+Dsb0g36xiE4Y70j2gkcvspewgbt81xQi+7JjqOiN6gssM5p3T9+gPid3pBinmncX8oMta7k9wVCEVR/alNxfIGnXy6vvCOBQJy5nhQpL8CHDVnSGGoCAKx7jHSmbFxWZ8nO1BJjVjznGqXpnFbWQcnmr6lkSWZwyRBmqqoNFZjfTOx0mIsueDQ8U4sm2qKdiF6aFf+1UDo5sbFoUmJ/PZpBBrJmtdJKWQddOjrD5v6cewpK/iNU9dfBNRGRoJurZjoaBk5AackrbBsnOe5mA2oVKnXFCFGeL5mFqy/fb+/Qi02M5D/LjqkQiMed1klg5oiAcV3cU455S18qOV7fklxu7c8ft7R/XeT8JiuyOP6gn0ut1STp24n2CSDvZAy9W9fcK/tRJIjbdtXKiLzlPsa+zL5prFXuG6yMP/SokiQdOveJNGw92+//WztDUnp9m6LzxZq/05cff+WNswC1HX7bB54+0jKEyEJwCUVh3+mTyuA8xEvsI/JIyONHo9XN9lBymLd5QVhzyi/D+rOMlKFLUXvRZdm29sD4HZhsFN/wB56xPUMHMrrzxAHm3s8iY458LsbXROK+jUGtm4tk2zJXS6E2liKZ0XZfv5Y+q9Y0khrSp0E5k8japflABnqkmqRwG3ZuocltivLLjSNwPpiUsJqnUeHIL1xGKLpuQucTATkkKzbxqR3rDVVjF+vXPtOWKbz8hteGrYC0bDRVSwiIG6HgEXB4Ri/VaTN6gNaVQd3fMD/O5Hx0FTvB0wMvE3aj8n779+bldTxDPfc1ZFGfpQFcmIGygQtFdxOgR4qgM5+F/9XzVuhp+9DeVm1xJ6gzffwa593a/0bm5cH4U62Tf4N+985fSvaNV1CJiJErnFoajz87nigkLOftLV+noKrUmYPbm8gTnCTyn9kEUptVETOjo0Uq1FqcrqYXDjaoetHzT8jOrtwTz2iro7wbCeLorpLjJiN7m/KO+DcHO1nxOPFu+Iiqodw6487pB+leCAcW/qbQzF7YJY3nULzu16N/uEoyKyrAjOQ6Vk5LPyr9TlnUJ2e0UdT2e5RkNcx9eyE+15hQGpWrmRfBJhXT8Orfdprs018UhfFE/VbfgtZG8hs741Z+BYJO8kMqUVhEawfTRvRZCMsXcs9i5XUEVc3INFW7fhAn4LpgVkljZZQbV0EJq/MBrmTkN5qGks2YCjG4bu7GsIYZygEYz2CE7z116/8AMI2xDGLXqW79AAV409wFX4W8ue0PWSGmedfOagnBk2eWi5iZsMJwaqL9b0g0sVybHiuyOHiRt0sp4NGQNRqXeYVlspyNQmb89v/uYNzfZEOA8AEszcjyonSrF4OOt+tY55GAj6T0VuyrEB5KFOEn69WvXheb9qq2R7aSDH7NF1HGUshLJPUdk01IRoErIS38X4e0GjE5AEeCmM3HffJ48lzv6AF/vBLGEdJJWnmeCSFMj4QbQUTbMwB29qP3DwNZ3pm12OcvwYkXMxdNTiOF10O0LqL79U5k+zNce0RfRfdKd1SqSPRjfwMjI7ciZxEQBicI5zTN7nQrkSlKW9n/qQRQIEPdrjAkZQGAvd6tPWXKH7PLsZBdDsvnWRj+7UiE3fkBK6vk/3do5mmuV5CVuLWG6LbtthRTc6oo+mfTRuo3MDHTtzUsAEBi3FJpEiHv2rGs3yHLqGT1n4FMQOsZPGI7Qut3cvDopxCEKTTYMqdeZctajoQ69BtlEoM3jOjeGIj4nvj1YGrfik9aW845ti1jLlemcLrdIzHyGpdQUcT6cESa2u7E8vhcz4vBVvehtgxUOzVbCD5wpmeSNfFHKZKiHa7tml8jVrqKlo1ovg12+MJaNLW5xkK1Y1TF/12MhcEbWB5GKbR+QkFdFx8HiB37sFN7To6B+HrKzwYCy2VlAhiTjVGM8ldKqWfdOg10u9t4C263waRdWbjo7NgbK1R2mp26rLI+g5rQ4SSn5WLmLJ0F1OKCEfSuXM0vj0f6Rw6RDLo4JNWMpkXwluG4qs+7ftX9MBkwwsARG8NhG36zsliMv6LhCIjE0U4FIurdBycgQ2K39CuEskwG7GUDQ7scjWqVrfkCBHv0bAtCLTlCyvp8uFMvGKPqVreDk86xMKSkYtq5rpm6nXiPQ9IfWy+AGg7POBlSrwOCcQpQVJjDlPzvBdQ/v2P9irVszEOHRZNaiChWZ6o432h58/pLK8YnozF2Y28Z4eLD3tPqhVib3r5Uz+Hcypxl/at57OiiuPqjfpP5Igj+Xco6r9UQStDLpwfRM4WhZfujRtgMmXa+Dc29FMdN+/FAGehid6QlU90v3U0Lp1qFTyQfFJdTtkhcrPswIS2koKsjwxmjjP0O4v5P6mSIZ2Cf1NCOvsQayM5yXRs4/rH41SVbAFACYou1sG0/qgnabcphfb4yMTAvg37TamRTgGrkqwSObXGQDuL8fqAQg9AY/gfbhtqQMlNqMUWy9v5uD7PVId8c0d53j6dgiOLDScuRYxI80+xSChZCCU3+4si4tNjEPkZmf3A61uHW41H1UVcpIWyO35KL9qh0XcK56PLK5XHDyHs0Q9i5rhe8pnOsKw689ixPCX5WjnYQI5y4UW5WpRnmBC3+lVW++RNhJ/b2eVGR0th4MicVM0HqxQC8JKKHbpDzlqLp1S8BVwBbVkzfipWzv7H6RpfpkoD2uRuahR98ObZEoShsIp1GkkH0ahimBQoOrOL3ewN8lkRpf/yoGFHQ3CjUi21PdiY57oenIz3482kDBkJw6ge/YbROjQEcz3U45gk54wvPVbOUkFdZfEy7pwzuexaT/RTLtXdsHgzbsiz2MOgLXjdN3VihP1gZ/slnU1qvdvwqe7IJP5x520WqsC0HK2UlbL0gETcsP1FfItsw+ez921+sYmPeGwlZlXWJeI6YF3pv4nGqVOII1CB2SzujJXn2ign/gsR460vrc1a02NwK74uLG4jbL82OgsuOE8+Od+NYO9UKS/t4Kw8Ooocbu+7lgQI759dhSEHM+Vi0YGTsZSm5i99caBOPQZxGJliBpeGr9TjPQQi54mtWC+bzlh2qmHMDgjR2RW7N8vr2Z7Nuk73iHFJlZjMWmS6uapLgRYnjhU0TjiIfGhcN6QBeCeIfVH3CqfouiLh/Lxf/SYKOk9xoQjE4sVsCGhOaeYB67jjwWVqmeCVuF1lZCMki7PoznYEEMimiJvXSX/qKaUnL/bLmnizwQ1rAcZgsVj0WARmAD8+u2XDbYl6SKTTeHcftIKbi+Kk72tuZ8P7D+bVXVKtDvwICC0YqOM1kvElXDIoiwqwg6jxDdf9bWAC5D+5ZAtQS2t7bVUQSLHBZKOXCab4Ab96Fd2BkOl7bJsiN4LuMguzmeQ2ji339wyaDdbP+XMvOyXlDgVd5azuOaKu10j8yaV0SdtCdGvmn9LvjUMQ4mEysgY+aIyiYPuGHdE9gYlJvv4L1j2y42Bec/FkfawymxyNBbpDxtFD2zsmAJN0meDVhYuw9zwpAAAAAA==');

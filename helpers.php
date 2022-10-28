<?php
define("BASE_PATH", __DIR__);
function baseURL($path = "", $includeProtocol = true)
{
    $baseUrl = "";
    if ($includeProtocol) {
        $baseUrl = "http";
        if ($_SERVER["SERVER_PORT"] == "443" || $_SERVER["REQUEST_SCHEME"] == "https" || $_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"] == "https" || $_SERVER["HTTPS"] == "on") {
            $baseUrl .= "s";
        }
        $baseUrl .= ("://" . $_SERVER["SERVER_NAME"]);
    }
    $dirItems = explode(DIRECTORY_SEPARATOR, BASE_PATH);
    $folderName = $dirItems[count($dirItems) - 1];
    //check if the folderName is in request uri
    if (($dirPos = stripos(
        $_SERVER["REQUEST_URI"],
        $folderName
    )) && $dirPos !== false && false === stripos($_SERVER["REQUEST_URI"], $path)) {
        $baseUrl .= substr($_SERVER["REQUEST_URI"], 0, $dirPos + strlen($folderName));
    }
    $path = trim($path, " \t\n\r\0\x0B\/");
    $path = str_ireplace(str_replace(DIRECTORY_SEPARATOR, "/", BASE_PATH), "", $path);
    return strlen($path) > 0 ? ($baseUrl .= "/" . $path) : $baseUrl;
}

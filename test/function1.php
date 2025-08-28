
<?php

function UrlValidation($url){
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

function EmailValidation($email){        
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function BrowserAgent(){
    return $_SERVER['HTTP_USER_AGENT'];
}

function UserIP(){
    return $_SERVER['REMOTE_ADDR'];
}
?>
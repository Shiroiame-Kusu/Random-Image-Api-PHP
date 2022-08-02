<?php /*PHP判断是否是移动端*/ 
redirect();

function redirect() { 

if ( empty($_SERVER['HTTP_USER_AGENT']) ) 
{ 
    $img=file('image-list-mobile');
    $url=array_rand($img);
    header("Location:".$img[$url]);
    header('Access-Control-Allow-Origin:*');
}
elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false || 
    strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false || 
    strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false || 
    strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false || 
    strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false || 
    strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false || 
    strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) 
{ 
    $img=file('image-list-mobile');
    $url=array_rand($img);
    header("Location:".$img[$url]);
    header('Access-Control-Allow-Origin:*'); 
    
} 
else 
{ 
    $img=file('image-list-desktop');
    $url=array_rand($img);
    header("Location:".$img[$url]);
    header('Access-Control-Allow-Origin:*');
} 

} 
?>
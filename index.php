<?php
$string = json_decode(file_get_contents('php://input'));
    
    function objectToArray( $object )
    {
        if( !is_object( $object ) && !is_array( $object ) )
        {
            return $object;
        }
        if( is_object( $object ) )
        {
            $object = get_object_vars( $object );
        }
        return array_map( 'objectToArray', $object );
    }
    
    $result = objectToArray($string);
    $user_id = $result['message']['from']['id'];
    $text = $result['message']['text'];
    $token = '282292401:AAE2ns2v0dHgEopS58BhllzKh1694mDGavs';
    $text_reply ='<b>bold</b>, <strong>bold</strong>
<i>italic</i>, <em>italic</em>
<a href="http://www.example.com/">inline URL</a>
<code>inline fixed-width code</code>
<pre>pre-formatted fixed-width code block</pre>';
    
    $url = 'https://api.telegram.org/bot'.$token.'/sendMessage?parse_mode=html&chat_id='.$user_id;
    $url .= '&text=' .$text_reply;
    
        $res = file_get_contents($url);

?>

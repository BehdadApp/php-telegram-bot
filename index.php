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
    $text_reply = 'پیام من دریافت شد.';
    
    $url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$user_id;
    $url .= '&text=' .$text_reply;
    
        $res = file_get_contents($url);

?>

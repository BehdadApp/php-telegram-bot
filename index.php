<?php
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '258123864:AAGf0QayDyTslQ1-V5d3hb49nD3y0C1b424';
$BOT_NAME = 'ibnSinaBot';
 
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
 
    // Handle telegram webhook request
    $telegram->handle();
    
 
    
    
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    echo $e;
}

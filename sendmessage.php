<?php
    $content = '';
    foreach ($_POST as $key => $value) {
        if($value){
            $content .= "<b>$key</b> : <i>$value</i>\n";
        }
    }
    if(trim($content)){
        $content = "<b>Message from Site:</b>\n".$content;
        $apiToken = '5719449214:AAEm3NSn9Q8CJEmK0JQDGgrbjCgl_qawHPA';
        $data = [
            'chat_id' => '@SendMessageVTestBot',
            'text' => $content,
            'parse_mode' => 'HTML'
        ];
        $responce = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
    }
>
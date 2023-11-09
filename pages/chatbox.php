<?php
if (isset($_POST['message'])) {
    $userMessage = $_POST['message'];
    
    // Xử lý logic trò chuyện và trả lời từ bot ở đây
    $botResponse = getBotResponse($userMessage);

    echo $botResponse;
}

function getBotResponse($userMessage) {
    // Viết logic xác định phản hồi từ bot dựa trên tin nhắn của người dùng
    // Ví dụ đơn giản:
    if (strpos($userMessage, 'xin chào') !== false) {
        return "Xin chào! Tôi là bot trò chuyện.";
    } else {
        return "Tôi không hiểu tin nhắn của bạn.";
    }
}
?>

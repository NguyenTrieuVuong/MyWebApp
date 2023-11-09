<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses_list</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
    <?php
        include 'conixion.php';
        $requete = "SELECT * FROM messages";
        $result = $con->query($requete);

        foreach ($result as $value) :
    ?>

<p><strong><li>User:</strong> <?php echo $value['message']; ?> - <?php echo date('H:i:s', strtotime($value['timestamp'])); ?><a>  </a><a href="remove_4.php?id=<?php echo $value['id']?>"><i class="far fa-trash"></i></a></p>



        <hr>
    <?php endforeach; ?>
    
    <div id="chat-box">
        <div id="chat-log">
            <!-- Thông tin trò chuyện sẽ được hiển thị ở đây -->
        </div>
        <input type="text" id="user-message" placeholder="Message" />
        <button id="send-button">Sent</button>
        
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#send-button").click(function() {
                var userMessage = $("#user-message").val();
                $("#chat-log").append("<p><strong>Bạn:</strong> " + userMessage + "</p>");
                $("#user-message").val("");
                
                // Gửi tin nhắn của người dùng đến server
                $.ajax({
                    url: "chatbot_1.php",
                    type: "POST",
                    data: { message: userMessage },
                    success: function(response) {
                        // $("#chat-log").append("<p><strong>Bot:</strong> " + response + "</p>");
                      
                    }
                });
            });
        });
    </script>
        
           
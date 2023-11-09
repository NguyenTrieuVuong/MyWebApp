<?php session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed">
    <div class="log d-flex justify-content-between">
        <h1 class="E-classe text-start ms-3 ps-1 mt-3 h6 fw-bold">E-Class</h1>
        <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
    </div>
    <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
        <img class="rounded-circle" src="../assets/img/img-admin.jpg" alt="img-admin" height="120" width="120">
        <h2 class="h6 fw-bold"><?php echo $_SESSION['name']; ?></h2>
<<<<<<< HEAD
        <span class="h7 admin-color">Quản Trị Viên</span>
=======
        <span class="h7 admin-color"><?php echo $_SESSION['role']; ?></span>
>>>>>>> d07503154cb95284a693a6ac136a097ce19bae11
    </div>
    <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
        <ul class="d-flex flex-column list-unstyled">
            <li class="h7"><a class=" nav-link text-dark" href="dashboard.php"><i class="fal fa-home-lg-alt me-2"></i> <span>Trang Chủ</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="course.php"><i class="fal fa-bookmark me-2"></i> <span>Khóa Học</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="students_list.php"><i class="far fa-graduation-cap me-2"></i> <span>Học Viên</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="payment_details.php"><i class="fal fa-usd-square me-2"></i> <span>Thanh Toán</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="about.php"><i class="fal fa-file-chart-line me-2"></i> <span>About</span></a></li>
<<<<<<< HEAD
            <li class="h7"><a class=" nav-link text-dark" href="contact.php"><i class="fal fa-sliders-v-square me-2"></i> <span>Liên Hệ</span></a></li>
=======
            <li class="h7"><a class=" nav-link text-dark" href="contact.php"><i class="fal fa-sliders-v-square me-2"></i> <span>Contact</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="chat.php"><i class="fal fa-sliders-v-square me-2"></i><span>Chat</span></a>
>>>>>>> d07503154cb95284a693a6ac136a097ce19bae11
        </ul>
        <ul class="logout d-flex justify-content-start list-unstyled">
            <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>Đăng xuất</span><i class="fal fa-sign-out-alt ms-2"></i></a></li>
        </ul>
        <!-- <style>
            #clock {
                border: 1px solid #333; /* Màu và độ rộng của đường viền */
                padding: 10px; /* Khoảng cách bên trong phần tử */
            }
        </style>
        <span id="clock" style="margin-right: 10px; color: black;" class="clock"></span>
        <script>
            function updateClock() {
                var now = new Date();
                var hours = now.getHours().toString().padStart(2, '0');
                var minutes = now.getMinutes().toString().padStart(2, '0');
                var seconds = now.getSeconds().toString().padStart(2, '0');
                var date = now.toLocaleDateString();
                
                var clockElement = document.getElementById('clock');
                clockElement.innerHTML =  date +' <br> ' + hours + ':' + minutes + ':' + seconds ;
            }

            // Cập nhật đồng hồ mỗi giây
            setInterval(updateClock, 1000);

            // Đảm bảo hiển thị đồng hồ khi trang web được tải
            updateClock();
        </script> -->
    </div>
    <hr>

    <div class="codepro-time">
    <span id="codepro-hour"></span>
    <span id="codepro-date"></span>
    </div>
    <style>
        
        .codepro-time{text-align:center;}
        #codepro-hour{font-weight:200;display:block;font-size:20px;margin: 0 0 5px;letter-spacing:5px;}
    </style> 
    <script>
        var myVar = setInterval(function() {
            myTimer()
        }, 10);
        function myTimer() {
            var d = new Date();
            var t = d.toLocaleTimeString();
            document.getElementById("codepro-hour").innerHTML = t;
        }
        n = new Date();
        if (n.getTimezoneOffset() == 0) t = n.getTime() + (7 * 60 * 60 * 1000);
        else t = n.getTime();
        n.setTime(t);
        var dn = new Array("Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
        d = n.getDay();
        m = n.getMonth() + 1;
        y = n.getFullYear()
        var date = dn[d] + ", " + (n.getDate() < 10 ? "0" : "") + n.getDate() + "/" + (m < 10 ? "0" : "") + m + "/" + y;
        document.getElementById("codepro-date").innerHTML = date;
    </script>
    

</div>
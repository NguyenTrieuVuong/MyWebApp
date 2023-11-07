<?php session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed">
    <div class="log d-flex justify-content-between">
        <h1 class="E-classe text-start ms-3 ps-1 mt-3 h6 fw-bold">E-class</h1>
        <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
    </div>
    <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
        <img class="rounded-circle" src="../assets/img/work3.jpg" alt="img-admin" height="120" width="120">
        <h2 class="h6 fw-bold"><?php echo $_SESSION['name']; ?></h2>
        <span class="h7 admin-color">admin</span>
    </div>
    <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
        <ul class="d-flex flex-column list-unstyled">
            <li class="h7"><a class="nav-link text-dark" href="dashboard_student.php"><i class="fal fa-home-lg-alt me-2"></i> <span>Home</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="course_student.php"><i class="fal fa-bookmark me-2"></i> <span>Course</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="students_list_student.php"><i class="far fa-graduation-cap me-2"></i> <span>Students</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="payment_details_student.php"><i class="fal fa-usd-square me-2"></i> <span>Payment</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="about_student.php"><i class="fal fa-file-chart-line me-2"></i> <span>About</span></a></li>
            <li class="h7"><a class=" nav-link text-dark" href="contact_student.php"><i class="fal fa-sliders-v-square me-2"></i> <span>Contact</span></a></li>
        </ul>
        <ul class="logout d-flex justify-content-start list-unstyled">
            <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>Logout</span><i class="fal fa-sign-out-alt ms-2"></i></a></li>
        </ul>

        <span id="clock" style="margin-right: 10px; color: black;"></span>
        <script>
            function updateClock() {
                var now = new Date();
                var hours = now.getHours().toString().padStart(2, '0');
                var minutes = now.getMinutes().toString().padStart(2, '0');
                var seconds = now.getSeconds().toString().padStart(2, '0');
                var date = now.toLocaleDateString();

                var clockElement = document.getElementById('clock');
                clockElement.innerHTML = hours + ':' + minutes + ':' + seconds + ' <br> ' + date;
            }

            // Cập nhật đồng hồ mỗi giây
            setInterval(updateClock, 1000);

            // Đảm bảo hiển thị đồng hồ khi trang web được tải
            updateClock();
        </script>
    </div>

</div>
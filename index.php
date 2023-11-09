<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <main class="bg-sign-in d-flex justify-content-center align-items-center">
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="E-classe text-start ms-3 ps-1" >E-class</h1>
        <div>
          <h2 class=" sign-in text-uppercase">Đăng nhập</h2>
        <p>Nhập thông tin xác thực của bạn để truy cập vào tài khoản của bạn</p>
        </div>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "please enter your email or password"){
              echo '<div sclass="alert alert-danger" role="alert">
            please enter your email or password
          </div>';
            }
            elseif($_GET['error'] == "email or password not found"){
              echo '<div class="alert alert-danger" role="alert">
              email or password not found
          </div>';
            }
          }    
        ?>
        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php  if(isset($_COOKIE['email'])){echo $_COOKIE['email']; }?>">
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>" autocomplete="on">
          </div>
          <div class="mb-3 form-check d-flex gap-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Nhớ tôi</label>
  </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Đăng nhập</button>
          <p class="mt-4">Quên mật khẩu? <a href="newpass.php">Reset mật khẩu</a></p>
          
        </form>
        <button href="" class="btn-register btn btn-success mb-3">Tạo tài khoản</button>
     </div>

   </main>

          <div class="bg"></div>

   <div class="register d-flex justify-content-center align-items-center">
   <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
       <div>
           <h2 class=" sign-in text-uppercase">Đăng ký</h2>
       </div>
       <form method="POST" id="signup" action="createaccout.php">
           <div class="mb-3 mt-3 text-start">
               <label class="label-signup" for="username">username: <span class="valid"></span></label>
               <input type="text" class="form-control" id="username" placeholder="Nhập username" name="username">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="email">Email: <span class="valid"></span></label>
               <input type="email" class="form-control" id="Email" placeholder="Nhập Email" name="email">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="pwd">Tạo mật khẩu: <span class="valid"></span></label>
               <input type="password" class="form-control" id="Pwd" placeholder="Nhập mật khẩu" name="pass" autocomplete="on">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="conPwd">Xác nhận mật khẩu: <span class="valid"></span></label>
               <input type="password" class="form-control" id="conPwd" placeholder="Xác nhận mật khẩu" name="conPass" autocomplete="on">
           </div>
                <div class="mb-3 text-start">
          <label class="label-signup" for="userRole">Chọn vai trò: <span class="valid"></span></label>
          <select class="form-select" id="userRole" name="userRole">
              <option value="admin">Admin</option>
              <option value="User">User</option>
        <!-- Thêm các lựa chọn khác nếu cần -->
    </select>
</div>

           <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">sign up</button>
           <p class="mt-4">Đã có tài khoản? <a href="index.php">Đăng nhập</a></p>
       </form>
   </div>
   </div>
   <script src="/js/bootstrap.bundle.js"></script>
   <script src="./js/validation.js"></script>
</body>
</html>
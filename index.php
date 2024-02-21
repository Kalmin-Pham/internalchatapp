<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Đăng ký vào gia đình Bun Chun</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Tên</label>
            <input type="text" name="fname" placeholder="Nhập tên" required>
          </div>
          <div class="field input">
            <label>Họ</label>
            <input type="text" name="lname" placeholder="Nhập họ" required>
          </div>
        </div>
        <div class="field input">
          <label>Tài khoản</label>
          <input type="text" name="email" placeholder="Tài khoản" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Nhập Password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Chọn ảnh</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Bắt đầu chat nào">
        </div>
      </form>
      <div class="link">Đã có tài khoản rồi? <a href="login.php">Đăng nhập nào</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

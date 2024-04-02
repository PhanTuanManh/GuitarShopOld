<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1Versace login</title>
    <link rel="stylesheet" href="./assets/css/main_auth.css">
    <link href="https://www.versace.com/on/demandware.static/-/Library-Sites-ver-shared-trans/default/dwc296e088/images/icon/jc-favicon.png" rel="icon" sizes="32x32">

</head>

<body>
    <header class="header">
        <div class="header-with-search" id="myHeader">
            <div class="header__logo">
                <a href="./Trangchu.php">
                    <svg class="header__logo-img" xmlns="header__logo-img" viewBox="0 0 284 64" width="100%" height="100%" xml:space="preserve" style="clip-rule:evenodd;fill-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2">
                        <path d="M343.98 115.21h-19.62V93.46h15.44v-5.72h-15.44V66.22h19.62v-5.77h-31.24v60.53h31.24zm-34.19-37.96c-.36-12.08-8.85-17.84-20.07-17.84-18.48 0-23.61 14.71-23.61 31.24 0 17.39 5.54 31.42 24.02 31.42 9.63 0 19.25-4.77 19.57-17.75h-9.72c-.14 6.86-3.22 13.98-9.81 13.98-10.58 0-11.67-15.48-11.67-27.11v-.77c0-8.95.23-27.29 10.94-27.29 7.22 0 8.99 8.45 9.26 14.12zm-60.38-16.8h-9l-20.61 60.53h5.77l6.72-19.93h17.44l5.95 19.93h12.71zm-15.22 34.87 7.04-20.93h.5L248 95.32Zm-13.03 7.08c0-8.81-4.54-14.76-14.39-17.39l-4.95-1.32c-5.81-1.54-10.44-3.86-10.44-10.44 0-5.86 3.72-8.76 8.22-8.76s9.63 2.91 12.67 8.63l6.36-6.45a22.732 22.732 0 0 0-16.57-7.17c-10.08 0-19.52 6.81-19.52 19.48 0 11.26 7.9 15.17 15.62 17.25l3.54.95c6.72 1.82 9.72 6.31 9.72 10.76 0 6.36-4.4 9.72-9.4 9.72-6.45 0-11.44-5.22-14.21-10.58-6.58 6.31-6.67 6.45-6.67 6.45 5.09 6.72 13.53 8.54 19.8 8.54 12.94 0 20.25-8.76 20.25-19.66m-53.12-9.76c7.08-2.45 10.81-8.72 10.81-15.21 0-8.45-5.95-16.98-18.98-16.98h-19.84v60.53h11.62V95.34h4.99l12.08 25.65h12.8l-13.49-28.33Zm-1.09-14.71c0 7.63-2.82 13.12-10.17 13.12h-5.13v-26.2h5.13c7.36 0 10.17 5.45 10.17 13.08m-29.65 37.28h-19.62V93.47h15.44v-5.72h-15.44V66.23h19.62v-5.77h-31.24v60.53h31.24zM98.55 60.46l-12.67 46.68h-.5L73.3 60.46H60.54l17.12 60.53h9.31l17.3-60.53z" style="fill-rule:nonzero" transform="matrix(1.00198 0 0 1.00198 -60.66 -59.527)"></path>
                    </svg>

                </a>
            </div>
            
    </header>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="user" placeholder="Name" require />
                <input type="email" name="email" placeholder="Email" require />
                <input type="password" name="password" placeholder="Password" require />
                <button type="submit" name="register" >Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" require />
                <input type="password" name="password" placeholder="Password" require/>
                <a href="#">Forgot your password?</a>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome!</h1>
                    <p>Please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your details</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>

    <?php 

    // B1: Kết nối CSDL
     $connect = mysqli_connect("sql108.epizy.com","epiz_33161425","7zrmTNo7VzlG","epiz_33161425_Versacee");
	if(isset($_POST['register'])){
		$username = $_POST['user'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$sql ="INSERT INTO users VALUES ('$username','$password','$email')";

		$result = mysqli_query($connect, $sql);
		if($result){
			echo "<script>alert('Thêm thành công') </script>";
		}
		else{
			echo "<script>alert('Thêm thất bại') </script>";
		}
	}

    if(isset($_POST['login'])){
		$e = $_POST['email'];
		$p = $_POST['password'];
		$run = "SELECT * FROM users WHERE email ='$e' AND password ='$p'";
		//B3: Thực thi truy vấn
		$ketqua = mysqli_query($connect, $run);
		//B4: Nhận kết quả truy vấn và xử lý
		$count_rows = mysqli_num_rows($ketqua);
		if($count_rows==0){
			echo "<script>alert('Sai tên người dùng hoặc mật khẩu') </script>";
		}
		else{
			echo "<script> alert('Đăng nhập thành công') </script>";
			echo"<script>window.open('Trangchu.php','_self')</script>";
			       $_SESSION['e'] = $e;
		}
	}	
    ?>
</body>

</html>
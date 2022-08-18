<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký tài khoản</title>
        <meta charset="UTF-8">
        <link href="NewFolder/SignUp.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div class="logo_login">
                         <img href="#" src="img/logo.png" alt="Logo"
                               class="img_logo_login">
                     </div>
        </header>
        <main>
            <div class="login-form">
                <form action="Storage.php" method="post">
                    <h1>Đăng ký tài khoản bằng Email</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Họ và tên">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Nhập Email">
                    </div>
                    <div class="input-box">   
                        <input type="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="input-box">   
                        <input type="password" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="input-box">
                        <div class="col-6">
                            <label for="ngaysinh">Ngày sinh</label>
                            <input type="date" id="ngaysinh"/>
                         </div> 
                        <div class="clear"></div>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Nhập SĐT">
                    </div>
                    <div class="sign_in">
                        <a href="SignIn.php" style="color:red">Bạn đã có tài khoản?</a>
                    </div>
                    <div class="btn-box">
                        <button type="submit">Đăng ký</button>
                    </div>
                </form>
            </div>
        </main>
        <!--Footer-->
        <footer class="dark">
            <div class="div_middle">
                <div class="left">
                    <p class="link">Liên hệ Email: 19T1021119@husc.edu.vn</p>
                </div>
                <div class="right">
                    <p>Mọi thông tin và hình ảnh trên website đều được sưu tầm trên Internet. Chúng tôi không sở hữu hay
                        chịu trách nhiệm bất kỳ thông tin nào trên web này. Nếu làm ảnh hưởng đến cá nhân hay tổ chức
                        nào, khi được yêu cầu, chúng tôi sẽ xem xét và gỡ bỏ ngay lập tức.</p>  
                </div>
            </div>
        </footer>
    </body>
</html>
<!DOCTYPE html >
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Thông tin cá nhân</title>
            <link rel="stylesheet" href="NewFolder/Personal.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <header>
                <div class="heading">
                     <div class="right">
                         <div class="logo">
                             <img href="#" src="img/logo.png" alt="Logo"
                                   class="img_logo">
                         </div>
                     </div>
                     <div class="map">
                         <h1>Thay đổi thông tin cá nhân</h1>
                     </div>
                    
                     <div class="left">  
                          <div class="avatar">
                             <img href="#" src="img/img_avatar.png" alt="Avatar"
                                   class="avatar_user">
                              <div class="dropdown-content">
                                   <form action="Personal.php">
                                       <button class="btn1">T.T Cá nhân</button>
                                   </form>
                                   <form action="HomePage.php">
                                       <button class="btn1">Đăng xuất</button>
                                   </form>
                              </div>
                         </div>
                     </div>
                </div>
            </header>
            <main>
                <div class="left_main">
                    <form action="AddFile.php">
                         <button class="add" name="button" type="submit">
                              <i class="fa fa-upload"> Tải tệp lên</i>
                         </button>
                    </form>
                    
                    <form action="Storage.php">
                         <button class="storage" name="button" type="submit">
                              <i class="fa fa-image"> Kho lưu trữ</i>
                         </button>
                    </form>
                    <form action="Trash.php">
                         <button class="trash" name="button" type="submit">
                              <i class="fa fa-trash"> Thùng rác</i>
                         </button>
                    </form>
                    <button class="cloud" name="button" type="submit">
                         <i class="fa fa-cloud"> Bộ nhớ</i>
                    </button>
                </div>
                <hr />
                <div class="right_main">
                    <div class="input-box">
                        <p style="font-size:20px">Họ và tên: </p>
                        <input type="text" placeholder="Họ và tên" class="name">
                    </div>
                    <div class="input-box">
                        <p style="font-size:20px">Email: </p>
                        <input type="text" placeholder="Nhập Email" class="email">
                    </div>
                    <div class="input-box">   
                        <p style="font-size:20px">Mật khẩu mới: </p>
                        <input type="password" placeholder="Nhập mật khẩu" class="pass1">
                    </div>
                    <div class="input-box">   
                        <p style="font-size:20px">Nhập lại mật khẩu: </p>
                        <input type="password" placeholder="Nhập lại mật khẩu" class="pass2">
                    </div>
                    <div class="input-box">
                        <div class="col-6">
                            <p style="font-size:20px">Ngày sinh: </p>
                            <input type="date" id="ngaysinh" class="datebirth"/>
                         </div> 
                        <div class="clear"></div>
                    </div>
                    <div class="input-box">
                        <p style="font-size:20px">SĐT: </p>
                        <input type="text" placeholder="Nhập SĐT" class="sdt">
                    </div>
                </div>
                <div class="btn2">
                    <form action="Personal.php">
                        <button class="yes" name="button" type="submit">        
                         <i class="fa fa-check-circle"> Đồng ý</i>
                        </button>
                    </form>
                    <form action="Storage.php">
                        <button class="no" name="button" type="submit">
                         <i class="fa fa-times-circle"> Quay lại</i>
                        </button>
                    </form>
                </div>
            </main>
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
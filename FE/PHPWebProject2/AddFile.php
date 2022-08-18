<!DOCTYPE html >
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Tải tệp lên</title>
            <link rel="stylesheet" href="NewFolder/AddFile.css" />
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
                         <h1>Tải tệp lên kho lưu trữ</h1>
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
                <div class="input-box" method="post">
                        <input type="text" placeholder="Đặt tên file">
                </div>
                    
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
                

                <div class="container">
                    <h1 class="content">Chọn ảnh hoặc video từ máy</h1>
                        <input type="file" accept=".jpg, .png, .mp4" class="add2" />
                    <div class="preview"></div>
                </div>
                <div class="btn2">
                    <form action="Storage.php">
                        <button class="yes" name="button" type="submit">        
                            <i class="fa fa-check-circle"> Đồng ý</i>
                            

                        </button>
                    </form>
                    <form action="AddFile.php">
                        <button class="no" name="button" type="submit">
                            <i class="fa fa-times-circle"> Hủy</i>
                        </button>
                    </form>
                </div>
                <script>
                    const ipnFileElement = document.querySelector('input')
                    const resultElement = document.querySelector('.preview')
                    const validImageTypes = ['image/gif', 'image/jpeg', 'image/png']

                    ipnFileElement.addEventListener('change', function (e) {
                    const files = e.target.files
                    const file = files[0]
                    const fileType = file['type']

                    if (!validImageTypes.includes(fileType)) {
                        resultElement.insertAdjacentHTML(
                            'beforeend',
                            '<span class="preview-img"></span>'
                        )
                        return
                    }

                    const fileReader = new FileReader()
                    fileReader.readAsDataURL(file)

                    fileReader.onload = function () {
                        const url = fileReader.result
                        resultElement.insertAdjacentHTML(
                            'beforeend',
                            `<img src="${url}" alt="${file.name}" class="preview-img" />`
                        )
                    }
                })
                </script>
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
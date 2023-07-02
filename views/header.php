<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="">

        /* định dạng cho button */
#myBtn {
display: none; /* Mặc định button sẽ được ẩn*/
position: fixed;
bottom: 20px;
right: 30px; 
z-index: 99; /* button được ưu tiên hiển thị đè lên các phần khác*/
border: none;
outline: none;
background-color: red;
color: white;
cursor: pointer;
padding: 15px;
border-radius: 10px;
}

#myBtn:hover {
background-color: #555;
}
#search-box{
border-radius: 30px;
}
#search-box #search-text{
border: none;
outline: none;
background: none;
font-size: 15px;
width: 0;
padding: 0;
transition: all 1s ease-in-out;
transition-delay: 1s;
}
#search-box:hover {
background-color: #fff;
}

#search-box:hover #search-text{
width: 200px;
padding: 10px 0px 10px 10px;
transition: all 0.5s ease-in-out;
}
#search-box:hover #button{

display: none;
}
#search-box #search-btn{

transition: all 1s ease-in-out;
transition-delay: 0.9s;
border: none;
cursor: pointer;
padding: 10px;
border-radius: 50%;
font-size: 15px;
}
#search-box:hover #search-btn{
transform: rotate(360deg) ;
transition-delay: 0s;
}
#Slider {
margin-bottom: 30px;
border-bottom: 2px solid rgba(0, 0, 0, 0.337);
overflow: hidden;

}

.aspect-ratio-169 {
    display: block;
    position: relative;
    padding-top: 56.25%;
    transition: 0.3s;
}

.aspect-ratio-169 img {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.dot-container {
    top: 1160px;
    position: absolute;
    height: 30px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 50;
}

.dot {
    margin: 0 5px;
    height: 18px;
    width: 16px;
    background-color: rgba(164, 164, 164, 0.656);
    border-radius: 50%;
    cursor: pointer;
    
}

.dot.active {
    background-color: rgba(0, 0, 0, 0.56);

}
.right_slider{
    right: 0;
    top: 150px;
    position: absolute;
    width: 500px;
    height: 1047px;
    background: rgba(0, 0, 0, 0);
}
.left_slider{
    top: 150px;
    position: absolute;
    width: 500px;
    height: 1047px;
    background: rgba(0, 0, 0, 0);
}
.dropbtn {
    color: black;
    font-weight: 700;
    padding: 16px;
    font-size: 20px;
    border: none;
    cursor: pointer;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.284);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    width: 250px;
    font-weight: 500;
    padding: 12px 15px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {
    background-color: #ebebeb
}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropbtn_dangnhap {
    color: black;
    font-weight: 700;
    font-size: 20px;
    border: none;
    cursor: pointer;

}
.dropdown_dangnhap {
    position: relative;
    display: inline-block;
    z-index: 70;
}
.dropdown-content_dangnhap {
    width: 500px;
    padding: 30px 50px;
    height:100%;
    display: none;
    position: fixed;
    right: 0px;
    background-color: #f9f9f900;
    top: 28px;
    z-index: 70;

}
.dropdown_dangnhap:hover .dropdown-content_dangnhap {
    display: block;
}
.login-page {
    width: 400px;

    margin: auto;
}
.form {
    position: relative;
    background: #FFFFFF;
    max-width: 400px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}
.form .submit{
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #333;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}
.form .submit:hover {
    background: 	#999999;
}

.form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 13px;
}
.form .message a {
    color: #9CDCFE;
    text-decoration: none;
    
}

    </style>
</head>

<body>
    <div class="max-w-full  w-auto mx-auto px-5 bg-[#F1F1F1] ">
        <div class="flex justify-between items-center border-b border-[#E3E3E3] py-5 relative">
            <form action="" method="get" id="search-box">
                <input type="hidden" name="" value="shop">
                <input type="text" name="" id="search-text" required placeholder="Tìm kiếm...">
                <button type="submit" onclick="" id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <a href="?ctr=home" class="absolute left-1/2 -translate-x-1/2"><img src="images/web_images/logo.png" alt="" /></a>
            <div class="flex justify-between space-x-3 items-center">
                <div class="flex justify-between">
                    <?php if (isset($_SESSION['id'])) : ?>
                        <!-- dropdown user  -->
                        <div>

                            <a href="?ctr=profile" class="my-auto flex items-center"><img src="images/user_images/" class="h-12 w-12 rounded-[100%] border border-red-500" alt=""></a>
                        </div>




                        <a href="logout"><i class="fa-solid fa-arrow-right-from-bracket text-xl mt-2"></i></a>
                    <?php else : ?>
                        <!-- drop down đăng nhập -->
                        <div class="dropdown_dangnhap ">
                            <button class="dropbtn_dangnhap"><a href=""><img class="" src="images/web_images/User.svg" alt=""></a></button>
                            <div class="dropdown-content_dangnhap ">
                                <div class="login-page">
                                    <div class="form ">
                                        <h1 class="uppercase font-medium text-[18px] mb-4 border-b-2">Đăng nhập tài khoản</h1>
                                        <form class="login-form" name="" action="site" method="post">
                                            <p class="text-left pl-4 pb-1">Tài khoản :</p>
                                            <input type="text" name="ten" value="" placeholder="Nhập tên tài khoản" autocomplete="off">
                                            <div id="loiTaikhoan" class="text-left mb-4 ml-4" style="color: red;"><?php if (isset($error)) {
                                                                                                                        echo $error;
                                                                                                                    } ?></div>

                                            <p class="text-left pl-4 pb-1">Mật khẩu :</p>
                                            <input type="password" name="matkhau" value="" placeholder="Nhập mật khẩu" autocomplete="off"> <br>
                                            <div id="loiMatkhau" class="text-left mb-4 ml-4" style="color: red;"><?php if (isset($error)) {
                                                                                                                        echo $error;
                                                                                                                    } ?></div>

                                            <button type="submit" class="submit">login</button>
                                            <p class="message">Chưa có tài khoản ? Đăng ký tại <a href="register" class="">ĐÂY</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>

                </div>



            </div>
        </div>
    </div>
    </div>
    <section class="bg-[#F1F1F1] pb-2 sticky top-[-1px] z-[60] shadow-xl">
        <div class="max-w-7xl w-auto mx-auto px-5 ">
            <header>
                <div class="menu">
                    <ul class="flex m-0 p-0 space-x-11 justify-between pl-2 ">
                        <li>
                            <a href="site" class="font-medium block py-4 hover:text-red-500 font-medium">Home</a>
                        </li>
                        <li>
                            <a href="shop" class="font-medium block py-4 hover:text-red-500 font-medium">Shop</a>

                        </li>

                        <li class=""><a class="font-medium block py-4 hover:text-red-500 font-medium" href="about">Giới thiệu</a></li>

                    </ul>`
                </div>
            </header>
        </div>
    </section>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <title><?= $title ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* định dạng cho button */
    #myBtn {
      display: none;
      /* Mặc định button sẽ được ẩn*/
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      /* button được ưu tiên hiển thị đè lên các phần khác*/
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

    .dropdown {
      position: relative;
      display: inline-block;
      font-weight: bold;
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
  </style>
</head>

<body class="grid-cols-2 flex">
  <div class="sticky inset-x-0 top-0 w-1/5 h-[935px] grid-cols-1 bg-gray-500 shadow-[5px_5px_25px_0px_#888888] z-[100]">

    <h1 class="px-auto py-10 item-center text-center bg-gray-900 text-white font-bold text-xl">QUẢN TRỊ WEBSITE</h1>


    <div class=" mt-20 border-b-2 boder-gray-900">
      <ul class="">
        <div class="flex-col text-white font-medium text-lx ">
          <li class="item-center text-center py-10 px-auto  hover:bg-gray-900 border-y-2 "><a href="categories">Loại Hàng</a></li>
          <li class="item-center text-center py-10 px-auto  hover:bg-gray-900 border-b-2 "><a href="products">Mặt hàng</a></li>
          <li class="item-center text-center py-10 px-auto  hover:bg-gray-900 border-b-2 "><a href="users">Tài khoản</a></li>
          <li class="item-center text-center py-10 px-auto  hover:bg-gray-900 border-b-2 "><a href="invoice">Đơn hàng</a></li>
          <li class="item-center text-center py-10 px-auto  hover:bg-gray-900 border-b-1 "><a href="ogout">Đăng xuất</a></li>
        </div>
      </ul>
    </div>
  </div>
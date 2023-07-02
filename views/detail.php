<?php include "header.php"; ?>

<div class="container mx-auto">
    <div>
        <div class="bg-[#f1f1f1] shadow-lg">
            <form action="" method="POST">
                <section class="mt-2">
                    <div class="flex justify-between py-10 h-[600px]">
                        <div class="w-1/2  mr-5 ">
                            <div class="">
                                <a href="#">
                                    <img class="w-[40%] mx-auto border-2" src="images/<?= $product->anh ?>" alt="">
                                </a>

                                <!-- <div class="">
                                <div class="flex justify-center mt-5">
                                    <div class="mini__box w-[100px] h-[100px]">
                                        <a href="#">
                                            <img src="images/product/aopolo1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="mini__box w-[100px] h-[100px]">
                                        <a href="#">
                                            <img src="images/product/aopolo1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="mini__box w-[100px] h-[100px]">
                                        <a href="#">
                                            <img src="images/product/aopolo1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="mini__box w-[100px] h-[100px]">
                                        <a href="#">
                                            <img src="images/product/aopolo1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="mini__box w-[100px] h-[100px]">
                                        <a href="#">
                                            <img src="images/product/aopolo1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                            </div>
                        </div>
                        <div class="w-1/2 ">
                            <div class="">
                                <p class="">
                                    <?= $product->ten ?>
                                </p>
                            </div>
                            <div class="">
                                <div class="">
                                    <div class="evaluate__box">
                                        <a href="#" class="evaluate__star">5.0</a><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="evaluate__box">
                                        <a href="#" class="">
                                            <?= $product->binhluan ?>
                                        </a><span>Đánh giá</span>
                                    </div>
                                    <div class="evaluate__box">
                                        <a href="#" class="">
                                            <?= $product->mua ?>
                                        </a><span>đã bán</span> <i class="fa-solid fa-question"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex mb-5 items-baseline">
                                <strike>
                                    <p class="">
                                        <?= $product->gia ?>
                                    </p>
                                </strike>
                                <p class="text-[red] ml-4 text-3xl ">
                                    <?= $product->gia - $product->gia * $product->sale / 100 ?>
                                </p>

                                <p class="text-[red] text-[12px] border-2 border-red-500 bg-red-100  rounded-lg bg-[#f1f1f1]  px-[2px] py-[1px] mb-auto">
                                    <?= $product->sale ?>%</p>
                            </div>

                            <!-- =======amount (số lượng)========= -->
                            <div class="flex items-center space-x-3 mt-5">
                                <p>Số lượng :</p>
                                <p class="btn-minus" class="cursor-pointer bg-[white] px-2 border-2 border-gray-200 rounded-lg" onclick="handMinus()"><i class="fa-solid fa-angle-left"></i></p>

                                <input type="text" name="soluong" id="amount" class="w-10 text-center" minlength="1" value="1">
                                <p class="btn-plus" class="cursor-pointer bg-[white] px-2 border-2 border-gray-200 rounded-lg" onclick="handPlus()"><i class="fa-solid fa-angle-right"></i></p>
                            </div>


                            <!-- =======Purchase (mua hàng)========= -->
                            <div class="flex space-x-3 my-5">
                                <div class="">
                                    <?php if (isset($_SESSION['tk_id'])) :
                                    ?>
                                        <button type="submit" name="btn_add" class="border-2 px-4 py-1 rounded-xl border-gray-400 "><i class="fa-solid fa-cart-arrow-down"></i>
                                            Thêm vào giỏ hàng</button>
                                        <div class="border-2 border-gray-400 px-4 py-1 rounded-xl hover:opacity-40 text-[#fff] bg-[#FD5E32]">
                                            <button>Mua hàng</button>
                                        </div>

                                    <?php else : ?>
                                        <button class="border-2 border-[#FD5E32] px-2 py-1 rounded-xl hover:opacity-40 text-[#FD5E32] "></i> Đăng nhập để mua</button>


                                    <?php endif ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </form>
            <!-- =======end overview (tổng quan)========= -->
        </div>

        <!-- =======detail (chi tiết)========= -->
        <div class="mt-10">
            <section id="">
                <div class="section__detail">
                    <div class="bg-[#f1f1f1]  p-4 text-[20px] shadow-lg">
                        <h1>MÔ TẢ SẢN PHẨM</h1>
                    </div>

                    <div class="section__detail--describe">
                        <div class="detail__describe--text">
                            <p> <?= $product->mota ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- =======comment (bình luận)========= -->
        <div class="grid">
            <section id="comment">
                <div class="section__comment">
                    <div class="section__comment--title">
                        <h1>ĐÁNH GIÁ SẢN PHẨM</h1>
                    </div>

                    <div class="section__comment--user">

                        <!-- <iframe src="views/user/mat_hang/show_bl.php" width="100%" height="300px" frameborder="0"></iframe> -->

                        <!-- <div class="post__comment">
                            <form action="" method="post">

                                <?php if (isset($_SESSION['tk_id'])) :
                                    if ($check_muahang == 'done') : ?>
                                        <textarea name="bl_noidung" cols="30" rows="5"></textarea> <br>
                                        <input type="submit" name="btn_bl" value="Gửi">
                                    <?php else : ?>

                                        <textarea disabled name="bl_noidung" cols="30" rows="5">Mua hàng lần đầu để bình luận</textarea> <br>
                                        <input type="submit" disabled name="btn_bl" value="Gửi">
                                    <?php endif ?>


                                <?php else : ?>




                                    <textarea disabled name="bl_noidung" cols="30" rows="5">Đăng nhập để bình luận</textarea> <br>
                                    <a href="?ctr=dangky">Đăng ký</a>
                                    <a href="?ctr=dangnhap">Đăng nhập</a>
                                <?php endif ?>

                            </form>
                        </div> -->


                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--  End body -->
</div>
<script>
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;

    let render = (amount) => {
        amountElement.value = amount;
    }

    //plus
    let handPlus = () => {
        amount++;
        render(amount);
    }
    //minus
    let handMinus = () => {
        if (amount > 1)
            amount--;
        render(amount);
    }

    amountElement.addEventListener('input', () => {
        amount = amountElement.value;
        amount = parseInt(amount);
        amount = (isNaN(amount) || amount == 0) ? 1 : amount;
        render(amount);

    })
</script>
<?php include "footer.php"; ?>
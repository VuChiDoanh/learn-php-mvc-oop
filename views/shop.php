<?php include "header.php"; ?>

<section class="Product container mx-auto px-5 pt-10 mb-10">
    <div class=" flex ">
        <div class="left w-1/5 bg-[#F1F1F1] p-4 mr-10 ">
            <h1 class="border-b-2 mb-4">Danh mục sản phẩm</h1>
            <ul>
                <li class="">
                    <a href="?ctr=shop">
                        <div class="py-3 px-2 hover:bg-gray-200 border-b-2">Tất cả sản phẩm</div>
                    </a>
                </li>
                <?php foreach ($categories as $cate) : ?>
                    <li class="">
                        <a href="<?= $cate->id ?>">
                            <div class="py-3 px-2   hover:bg-gray-300 border-b-2"><?= $cate->ten ?></div>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="right-0 w-4/5">
            <div class="bg-[#F1F1F1] pl-5 py-4 border-b-2 mb-3 flex justify-between">
                <?php  ?><!--  -->
                <h1 class="font-bold text-2xl my-auto">Tất cả sản phẩm</h1>
                <!-- <?php foreach ($categories as $cate) : ?>
                    <h1 class="font-bold text-2xl my-auto"><?= $cate->ten ?></h1>
                <?php endforeach; ?> -->
                <div>
                    Sắp xếp theo:
                    <div class="dropdown">
                        <button class="dropbtn">phân loại</button>
                        <div class="dropdown-content">
                            <a href="">mới nhất</a>
                            <a href="">Giá thấp -> cao</a>
                            <a href="">Giá cao -> thấp</a>

                        </div>
                    </div>
                </div>
            </div>
            <!--product 1 -->
            <div class=" right-0 grid grid-cols-3 gap-5">
                <?php foreach ($products as $product) : ?>
                    <div class="border-2 hover:shadow-xl">
                        <div class="block relative overflow-hidden group pb-2">
                            <a href="detail?id=<?= $product->id ?>"><img class="h-[500px] w-[400px] border border-gray-700 object-cover" src="images/<?= $product->anh ?>" alt="chưa có"></a>
                            <span class="absolute top-10 left-0 bg-[#1E2832] text-white px-3 py-2"><?= $product->sale ?>%</span>
                        </div>
                        <span class="mx-2">
                            <a href="detail?id=<?= $product->id ?>" class="font-medium text-[16px] leading-[21.79px] hover: "><?= $product->ten ?></a>
                            <div class="flex justify-between mx-2">
                                <a href="">
                                    <p class="font-medium text-[16px] leading-[21.79px] hover:text-[#FF6F61]">
                                        <?= $product->gia ?>
                                    </p>
                                </a>
                            </div>
                        </span>
                    </div>
                <?php endforeach ?>
                <!-- end product -->
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
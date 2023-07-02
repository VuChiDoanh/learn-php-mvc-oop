<?php include "header.php"; ?>



<section id="Slider" class="shadow-xl">
    <div class="aspect-ratio-169">
        <img src="images/web_images/s1.webp">
        <img src="images/web_images/s2.webp">
        <img src="images/web_images/36.jpg">
        <img src="images/web_images/s4.webp">
        <img src="images/web_images/s5.webp">
    </div>
    <div class="right_slider"></div>
    <div class="left_slider"></div>

    <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</section>
<section class="products shadow-xl  z-10 relative">
    <div class="max-w-7xl mx-auto px-5 pb-10">
        <h1 class="text-[45px] leading-[52.73px] font-medium text-center p-5 mb-4">
            New Products
        </h1>
        <div class="grid grid-cols-4 gap-10 ">



            <?php foreach ($products as $product) : ?>
                <div>
                    <a href="/detail?id=<?= $product->id ?>">
                        <div class="block relative overflow-hidden group pb-2">
                            <img class="h-[400px] w-[300px] border border-gray-700 object-cover" src="images/<?= $product->anh ?>" alt="chưa có ảnh" />
                            <span class="absolute top-10 left-0 bg-[#FF6F61] text-white px-3 py-2">Hot</span>
                        </div>
                        <span>
                            <a href="/detail?id=<?= $product->id ?>" class="font-medium text-[16px] leading-[21.79px] hover:text-[red]"><?= $product->ten ?></a>
                            <div class="flex justify-between">
                                <p class="font-medium text-[16px] leading-[21.79px] hover:text-[#FF6F61]">
                                    <?= $product->gia ?> VNĐ
                                </p>
                            </div>
                        </span>
                    </a>
                </div>



            <?php endforeach ?>


        </div>
    </div>
</section>
<section class=" bg-[#F1F1F1] shadow-xl">
    <div class="max-w-7xl mx-auto px-5 pb-10 ">
        <h1 class="text-[45px] leading-[52.73px] font-medium text-center mb-10 pt-10">
            Best Sellers
        </h1>

        <div class="grid grid-cols-4 gap-10">

            <?php foreach ($bestsellers as $best) : ?>
                <div>
                    <a href="/detail?id=<?= $best->id ?>">
                        <div class="block relative overflow-hidden group pb-2">
                            <img class="h-[400px] w-[300px] border border-gray-700 object-cover" src="images/<?= $best->anh ?>" alt="chưa có ảnh" />
                            <span class="absolute top-10 left-0 bg-[#FF6F61] text-white px-3 py-2">Hot</span>
                        </div>
                        <span>
                            <a href="/detail?id=<?= $best->id ?>" class="font-medium text-[16px] leading-[21.79px] hover:text-[red]"><?= $best->ten ?></a>
                            <div class="flex justify-between">
                                <p class="font-medium text-[16px] leading-[21.79px] hover:text-[#FF6F61]">
                                    <?= $best->gia ?> VNĐ
                                </p>
                            </div>
                        </span>
                    </a>
                </div>



            <?php endforeach ?>


        </div>
    </div>
</section>








<?php include "footer.php"; ?>
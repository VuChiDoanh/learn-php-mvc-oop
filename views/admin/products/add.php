<?php include "../views/admin/header.php"; ?>

<form action="/create-product" class="mx-5 container mx-10 mt-10 w-4/5" name="" method="post" enctype="multipart/form-data">
    <div class="mx-auto grid gap-5 ">
        <div>

            <label for="" class="text-[20px] font-medium">Tên hàng hóa</label><br>
            <input type="text" name="ten" value="" class="w-full border-2 rounded-lg p-2">

        </div>
        <div>
            <label for="" class="text-[20px] font-medium">Loại hàng</label><br>
            <select name="category_id" class="w-full border-2 rounded-lg p-2">
                <?php foreach ($categories as $category) { ?>
                    <option value="<?= $category->id ?>"><?= $category->ten ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="" class="text-[20px] font-medium">Đơn giá</label><br>
            <input type="number" name="gia" value="" min="0" class="w-full border-2 rounded-lg p-2">
        </div>
        <div>
            <label for="" class="text-[20px] font-medium">Số lượng</label><br>
            <input type="number" name="soluong" min="0" value="" class="w-full border-2 rounded-lg p-2">
        </div>
        <div>
            <label for="" class="text-[20px] font-medium">Giảm giá</label><br>
            <input type="number" name="sale" min="0" max="100" value="" class="w-full border-2 rounded-lg p-2">
        </div>
        <div>
            <label for="" class="text-[20px] font-medium">Mô tả</label><br>
            <textarea type="text" name="mota" class="w-full border-2 rounded-lg p-2"></textarea>
        </div>
        <div>
            <label for="" class="text-[20px] font-medium">Hình ảnh</label><br>
            <input type="file" value="<" name="anh" class="w-full border-2 rounded-lg p-2">
        </div>


    </div>

    <button type="submit" class=" mx-auto px-2 border-2 font-medium rounded-lg p-2 bg-gray-500 hover:bg-gray-700 hover:text-white">add</button>


</form>
<?php include "../views/admin/footer.php"; ?>
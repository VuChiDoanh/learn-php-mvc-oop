<?php include "../views/admin/header.php"; ?>

<?= $message ?>

<!-- <div class="w-4/5 mx-10">
    <table class="mx-0 container">
        <tr class="sticky inset-x-0 top-0 left-0 bg-gray-100 ">
            <th class="border-2">Mã Hàng Hóa</th>
            <th class="border-2">Tên Hàng Hóa</th>
            <th class="border-2">Đơn Giá</th>
            <th class="border-2">Số Hàng Đã Bán</th>
            <th class="border-2">Hàng Trong Kho</th>
            <th class="border-2"><a href="/create-product">Thêm</a></th>
        </tr>
        <?php foreach ($products as $product) : ?>
            <tr class="border-b-2 text-left h-10" id="tr-yellow">
                <td class=" border-2 "><?= $product->id ?></td>
                <td class=" border-2"><?= $product->ten ?></td>
                <td class=" border-2"><?= $product->gia ?></td>
                <td class=" border-2"><?= $product->mua ?></td>
                <td class=" border-2"> <?= $product->soluong ?></td>
                <td class="text-center border-2">
                    <a class="text-green-500" href="/update-product?id=<?= $product->id ?>"> Edit</a>
                    <a class="text-red-500" onclick="return confirm('Bạn có chắc muốn xóa?')" href="/delete-product?id=<?= $product->id  ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div> -->



<?php include "../views/admin/footer.php"; ?>
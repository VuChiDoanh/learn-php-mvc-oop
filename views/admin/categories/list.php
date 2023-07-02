<?php include "../views/admin/header.php"; ?>

<?= $message ?>

<div class="w-4/5 mx-10">
    <table class="mx-0 container">
        <tr class="sticky inset-x-0 top-0 left-0 bg-gray-100 ">
            <th class="border-2">Mã Loại Hàng </th>
            <th class="border-2">Tên Loại Hàng </th>
            <th class="border-2 text-yellow-600"><a href="/create-category">Add</a></th>
        </tr>
        <?php foreach ($categories as $category) : ?>
            <tr class="border-b-2 text-left h-10" id="tr-yellow">
                <td class=" border-2 "><?= $category->id ?></td>
                <td class=" border-2"><?= $category->ten ?></td>

                <td class="text-center border-2">
                    <a class="text-green-500" href="/update-category?id=<?= $category->id ?>"> Edit</a>
                    <a class="text-red-500" onclick="return confirm('Bạn có chắc muốn xóa?')" href="/delete-category?id=<?= $category->id  ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>



<?php include "../views/admin/footer.php"; ?>
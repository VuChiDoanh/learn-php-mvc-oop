<?php include "../views/admin/header.php"; ?>

<form action="/create-category" class="mx-5 container mx-10 mt-10 w-4/5" name="" method="post" enctype="multipart/form-data">
    <div class="mx-auto grid gap-5 ">
        <div>
            <label for="" class="text-[20px] font-medium">Tên Loại Hàng </label><br>
            <input type="text" name="ten" value="" class="w-full border-2 rounded-lg p-2">
        </div>

    </div>

    <button type="submit" class=" mx-auto px-2 border-2 font-medium rounded-lg p-2 bg-gray-500 hover:bg-gray-700 hover:text-white">add</button>


</form>
<?php include "../views/admin/footer.php"; ?>
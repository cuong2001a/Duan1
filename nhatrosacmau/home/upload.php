<!-- component -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="action.php">
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Tên phòng trọ <span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required></input>
                    </div>

                    <div>
                        <div class="flex">
                            <div class="mb-4 w-6/12">
                                <label class="text-xl text-gray-600">Giá phòng</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" placeholder="(Optional)"></input>
                            </div>
                            <div class="mb-4 pl-2 w-6/12">
                                <label class="text-xl text-gray-600">Ảnh đại diện phòng</label></br>
                                <input required type="file" class="border-2 border-gray-300 p-1 w-full" name="description" id="description" placeholder="(Optional)"></input>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="flex">
                            <div class="w-9/12">
                                <label class="text-xl text-gray-600">Địa chỉ chi tiết</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" placeholder="(Optional)"></input>
                            </div>
                            <div class=" ml-2 w-3/12">
                                <label class="text-xl text-gray-600">Địa chỉ </label></br>
                                <select class="border-2 border-gray-300 p-2 w-full" name="" id="">
                                    <?php
                                    foreach ($list as  $value) {
                                        extract($value);
                                    ?>
                                        <option value="<?= $value['id_diadiem'] ?>"><?= $value['ten_diadiem'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8 mt-3">
                        <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                        <textarea name="content" class="border-2 border-gray-500">

                            </textarea>
                    </div>

                    <div class="flex ">
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('content');
</script>
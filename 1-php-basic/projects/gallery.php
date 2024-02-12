<?php include "./template/header.php" ?>
<?php include "./template/sidebar.php" ?>

<section class=" bg-gray-100 p-10 rounded-lg">
    <form method="post" action="./gallery-process.php" enctype="multipart/form-data">
        <label for="file-input" class="sr-only">Choose file</label>
        <input type="file" name="upload[]" id="file-input" multiple class="block w-full border cursor-pointer border-gray-200 shadow-sm rounded-lg text-sm font-bold bg-gray-200 active:scale-95 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
    file:bg-gray-50 file:border-0
    file:me-4
    file:py-3 file:px-4
    dark:file:bg-gray-700 dark:file:text-gray-400">

        <button type="submit" class="py-3 px-4 mt-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active:scale-90">
            Upload
        </button>
    </form>

    <hr>


</section>

<?php

$photos = array_filter(scandir("photos"), fn ($el) => $el != "." && $el != "..");
// print_r($photos)
?>

<div class=" columns-3 gap-3 mt-5">
    <?php foreach ($photos as $photo) : ?>
        <div class=" inline-block relative group mb-3">
            <img class=" rounded-lg" src="photos/<?= $photo ?>" alt="">
            <a onclick="return confirm('Are you sure to delete?')" href="./gallery-photo-delete.php?file_name=<?= $photo ?>" class=" absolute bottom-0 right-0 py-3 px-4 hidden pointer-events-none group-hover:inline-flex group-hover:pointer-events-auto gap-x-2 text-center text-sm font-semibold rounded-lg border border-transparent bg-red-100 text-red-800 hover:bg-red-200 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-red-900 dark:text-red-500 dark:hover:text-red-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active:scale-90">
                Delete
            </a>
        </div>
    <?php endforeach; ?>
</div>

<?php include "./template/footer.php" ?>
<?php

// connect mysql

$conn = mysqli_connect("localhost", "zhh", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}

?>

<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>

<section class=" bg-gray-100 p-10 rounded-lg">

    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center text-lg font-bold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Home
        </li>
    </ol>

    <hr class="  border-gray-300 my-4">
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum iste, illum inventore commodi possimus provident nostrum quo praesentium repellendus, expedita blanditiis ullam neque eligendi totam aperiam impedit repudiandae recusandae in.
    </p>

</section>

<?php include("./template/footer.php"); ?>
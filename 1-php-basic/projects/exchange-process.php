<?php

// print_r($_POST);

$amount = $_POST["amount"];
$form_currency_arr = explode("-", $_POST["from_currency"]);
$from_currency_name = $form_currency_arr[0];
$from_currency_rate = str_replace(',', '', $form_currency_arr[1]);

$to_currency_arr = explode("-", $_POST["to_currency"]);
$to_currency_name = $to_currency_arr[0];
$to_currency_rate =  str_replace(',', '', $to_currency_arr[1]);


$mmk = $amount * ($from_currency_rate);

$to = $mmk / $to_currency_rate;

// echo $to;

?>

<?php include("./template/header.php") ?>

<!-- End Navigation Toggle -->
<?php include("./template/sidebar.php") ?>

<section class=" bg-gray-100 p-10">
    <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="index.php">
                Area Calculator
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>
        </li>
        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Calculate Result
        </li>
    </ol>

    <hr class=" border-gray-300 my-4">

    <?php

    $from_currency_name = $form_currency_arr[0];
    $to_currency_name = $to_currency_arr[0];

    $mmk = $amount * ($from_currency_rate);

    $to = $mmk / $to_currency_rate;
    $toRound = round($to, 2);

    $fileName = "saveRecord.txt";
    if (!file_exists($fileName)) {
        touch($fileName);
    };

    $fileStream = fopen($fileName, "a");
    fwrite($fileStream, "\n"."from "."$from_currency_name". " to "."$to_currency_name = $toRound " . $to_currency_name);
    fclose($fileStream);

    ?>

    <p class=" text-5xl text-center my-10">
        <?= $toRound ?> <?= $to_currency_name ?>
    </p>

    <div class="flex gap-3">
        <a href="./exchange.php" class="flex-grow justify-center py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Exchange Again
        </a>

        <a href="./record-list.php" class="flex-grow justify-center py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-blue-600 text-blue-600 hover:bg-blue-700 hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            All Record
        </a>

    </div>
</section>

<?php include("./template/footer.php") ?>
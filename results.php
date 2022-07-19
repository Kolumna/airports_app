<?php 

if (!empty($_GET['icao'])) {
    $icao = strtolower($_GET['icao']);
    $db_url = "https://airportdb.io/api/v1/airport/$icao?apiToken=ea49b03b7dbb62fbbcaa43068698698310a345721030809985d7a4ff8cef03134a48403033b72c81bd5d26785999988e";
    $icao_json = file_get_contents($db_url);
    $icao_array = json_decode($icao_json, true);
}

?>

<?php include('header.php'); ?>
    <div class=" flex flex-col justify-center items-center text-center">
        <h2 class=" text-[42px] font-extrabold text-green-500">Nazwa</h2>
        <h1 class=" text-[72px] font-bold">
            <?php
                if ($icao_array['name']) {
                    echo $icao_array['name'];
                }
            ?>
        </h1>
    </d>
</body>
</html>
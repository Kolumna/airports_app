<?php include('header.php'); ?>
    <form class=" flex flex-col justify-center items-center text-center" action="results.php" method="GET">
        <h1 class=" text-[72px] font-bold">Wpisz kod lotniska</h1>
        <input class=" border-4 border-black rounded-full h-[50px] w-[200px] mt-8 text-center text-xl" type="text" name="icao" placeholder="ICAO" maxlength="4" minlength="4">
        <input class=" border-4 border-green-500 hover:border-green-700 bg-green-500 text-white cursor-pointer mt-4 p-2 rounded-full font-bold" type="submit" value="Wyślij">
    </form>
</body>
</html>
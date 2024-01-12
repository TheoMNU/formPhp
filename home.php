<?php
session_start();

if($_SESSION["isOnline"] == false){
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-3xl font-semibold text-indigo-600">Bienvenue</p>
            <h1 class="mt-4 text-xl font-bold tracking-tight text-gray-900 sm:text-5xl"><?php echo $_SESSION["safeCreateName"] ?></h1>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="./reset.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Se Deconnecter</a>
            </div>
        </div>
    </main>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>

</html>
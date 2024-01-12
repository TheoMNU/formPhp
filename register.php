<?php

session_start();
$message = "";

if (isset($_POST["envoyer"])) {

    $_SESSION["safeCreateEmail"] = htmlspecialchars(strip_tags(trim($_POST["createEmail"])));
    $_SESSION["safeCreatePassword"] = htmlspecialchars(strip_tags(trim($_POST["createPassword"])));
    $_SESSION["safeCreateName"] = htmlspecialchars(strip_tags(trim($_POST["createName"])));
    
    if (!isset($_SESSION["safeCreateEmail"]) || empty($_SESSION["safeCreateEmail"]) || !isset($_SESSION["safeCreatePassword"]) || empty($_SESSION["safeCreatePassword"]) || !isset($_SESSION["safeCreateName"]) || empty($_SESSION["safeCreateName"])) {
        $message = "Remplissez le formulaire correctement";
    } else {
        header("Location: index.php");
    }
}
/* 

variable pour l'adresse mail
variable pour le mot de passe
variable pour le nom


 <?php die(); ?>
*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
</head>

<body>


</html>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="./index.php"><img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"></a>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Créer un compte</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="register.php" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Adresse mail</label>
                <div class="mt-2">
                    <input id="email" name="createEmail" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="createPassword" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                <div class="flex items-center justify-between">
                    <label for="Name" class="block text-sm font-medium leading-6 text-gray-900">Nom d'utilisateur</label>
                </div>
                <div class="mt-2">
                    <input id="name" name="createName" type="text" autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <p class="text-red-700 my-1"><?php echo $message ?></p>
            <div>
                <a href="./index.php"><button type="submit" name="envoyer" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Créer le compte</button></a>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>
<?php


session_start();

$messageLogIn = "";


if (isset($_POST["envoyer"])) {
    $emailConnect = htmlspecialchars(strip_tags(trim($_POST["emailConnect"])));
    $passwordConnect = htmlspecialchars(strip_tags(trim($_POST["passwordConnect"])));
    if ($emailConnect !== $_SESSION["safeCreateEmail"]  ||  $passwordConnect !== $_SESSION["safeCreatePassword"]) {
        $messageLogIn = "Un des champs renseigné n'est pas correct";
    } else {
        header("Location: home.php");
        $_SESSION["isOnline"] = true;
    }
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


</html>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="./signIn.php" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="emailConnect" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="passwordConnect" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <p class="text-red-700 my-1"><?php echo $messageLogIn ?></p>
            <p class="mt-10 text-center text-sm text-gray-500">
                Créer un compte
                <a href="index.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">ici</a>
            </p>
            <div>
                <button type="submit" name="envoyer" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Se connecter</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include "helpers/db.php" ?>

<body>
    <?php include "layout/header.php"; ?>
    <main class="m-auto mt-20 flex justify-center">
        <form class="w-full max-w-lg" method="post" action="actions/create.php">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Title
                    </label>
                    <input class="block w-full text-gray-700 border
                     border-gray-600 rounded py-3 px-4 mb-3
                      leading-tight focus:outline-none focus:bg-white focus
                      :border-gray-500" name="title" id="grid-password" type="text">
                    <p class="text-gray-600 text-xs italic">enter your task</p>
                </div>
            </div>
            <button class="w-full text-3xl bg-green-300 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">
                add
            </button>
        </form>
    </main>

</body>



</html>
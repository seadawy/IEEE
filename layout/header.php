<?php
$currentURL = explode('/', $_SERVER['REQUEST_URI']);
$nonActive = "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white";
$Active = "rounded-md px-3 py-2 text-sm font-medium bg-gray-700 text-white";
function isUrl($page)
{
    $currentURL = explode('/', $_SERVER['REQUEST_URI']);
    $currentURL = end($currentURL);
    return $currentURL == $page;
}

?>

<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="index.php"
                                class="<?= isUrl('index.php') ? $Active : $nonActive  ?>" aria-current="page">Dashboard</a>
                            <a href="team.php" class="<?= isUrl('team.php') ? $Active  : $nonActive  ?>">Team</a>
                            <a href="#" class="<?= isUrl('home.php') ? $Active  : $nonActive  ?>">Projects</a>
                            <a href="#" class="<?= isUrl('home.php') ? $Active  : $nonActive  ?>">Calendar</a>
                            <a href="#" class="<?= isUrl('home.php') ? $Active  : $nonActive  ?>">Reports</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
        </div>
    </header>
</div>
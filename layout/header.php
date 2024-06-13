<!-- navigation bar -->
<nav
    class="fixed z-50 w-full top-0 left-0 xl:px-20 lg:px-14 md:px-10 sm:px-8 p-4 flex items-center justify-between bg-white text-sky-800 font-semibold border-b border-gray-50/5">
    <!-- left side -->
    <div class="flex gap-8 items-center">
        <a href="" class="text-2xl ps-2 text-sky-500 flex items-center font-semibold">
            <div class="-rotate-45">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke="rgb(14 165 233)"
                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>
            </div>
            Aireon
        </a>
        <div class="lg:flex gap-8 hidden">
            <a href="index.php" class="hover:text-sky-500">Home</a>
            <a href="destination.php" class="hover:text-sky-500">Destination</a>
            <a href="" class="hover:text-sky-500">Blogs</a>
            <a href="" class="hover:text-sky-500">About</a>
            <a href="" class="hover:text-sky-500">Book</a>
        </div>
    </div>
    <!-- right side -->
    <div class="lg:flex gap-3 hidden">
        <a href="" class="hover:scale-125 scale-110 duration-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6">
                <path stroke="rgb(14 165 233)" stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </a>
        <a href="" class="hover:scale-125 scale-110 duration-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6">
                <path stroke="rgb(14 165 233)" stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
        </a>
        <a href="" class="hover:scale-125 scale-110 duration-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6">
                <path stroke="rgb(14 165 233)" stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
        </a>
    </div>
    <!-- menu button -->
    <button class="lg:hidden scale-125 hover:rotate-180 duration-500" id="menuBtn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke="rgb(14 165 233)" stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>
    <!-- menu -->
    <div class="fixed top-0 left-0 h-full w-full bg-sky-500 translate-x-full duration-300 flex flex-col items-center justify-center" id="menu">
        <button class="absolute top-5 right-5 scale-150 hover:rotate-180 duration-500" id="menuBtn2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke="#fff"  stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>

        <a href="" class="text-2xl text-white flex items-center font-semibold">
            <div class="-rotate-45">
                <svg xmlns="http://www.w3.org/2000/svg" fill="rgb(14 165 233)" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>
            </div>
            Aireon
        </a>
        <div class="text-center flex flex-col pt-5 text-white">
            <a href="index.php" class="p-3 hover:text-sky-700">Home</a>
            <a href="destination.php" class="p-3 hover:text-sky-700">Destination</a>
            <a href="" class="p-3 hover:text-sky-700">Blogs</a>
            <a href="" class="p-3 hover:text-sky-700">About</a>
            <a href="" class="p-3 hover:text-sky-700">Book</a>
        </div>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const menuBtn2 = document.getElementById('menuBtn2');
    const menu = document.getElementById('menu');
    menuBtn.addEventListener('click', function() {
        menu.classList.remove('translate-x-full');
    });
    menuBtn2.addEventListener('click', function() {
        menu.classList.add('translate-x-full');
    });
</script>
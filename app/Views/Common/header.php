<div class="relative bg-white col-span-12 lg:col-span-10 overflow-y-auto h-full dark:bg-slate-900 dark:text-gray-300">
    <header class="flex flex-row-reverse gap-4 p-5 items-center">
        <div class="lg:hidden block group">
            <span class="material-symbols-outlined" onclick="openMobileMenu(event)">
                menu
            </span>
            <div class="absolute inset-0 bg-white z-10 -translate-x-full group-[.open]:-translate-x-0 transition-all duration-300">
                <span class="material-symbols-outlined absolute right-5 top-6" onclick="closeMobileMenu(event)">
                    close
                </span>
                <ul class="flex flex-col mt-10">
                    <li class="relative group <?php if ($pageName == 'home') {
                                                    echo "active";
                                                } ?>">
                        <a href="/" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 dark:group-[.active]:text-gray-300 dark:group-[.active]:border-white hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> home </span>
                            Home
                        </a>
                    </li>
                    <li class="relative group <?php if ($pageName == 'bookmark') {
                                                    echo "active";
                                                } ?>">
                        <a href="/bookmark" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> bookmark </span>
                            Bookmark
                        </a>
                    </li>
                    <li class="relative group <?php if ($pageName == 'playlist') {
                                                    echo "active";
                                                } ?>">
                        <a href="/playlist" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> queue_music </span>
                            Playlist
                        </a>
                    </li>
                    <li class="relative group <?php if ($pageName == 'archives') {
                                                    echo "active";
                                                } ?>">
                        <a href="/archives" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> inventory_2 </span>
                            Archives
                        </a>
                    </li>
                </ul>
                <hr class="m-4 border-gray-200 dark:border-gray-700" />

                <!-- section header -->
                <div class="px-4 pb-2 rounded-full">
                    <p class="text-sm tracking-[.00714em] font-medium">Categories</p>
                </div>
                <ul class="flex flex-col">
                    <li class="relative group <?php if ($pageName == 'lok_sabha') {
                                                    echo "active";
                                                } ?>">
                        <a href="/lok-sabha" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> video_library </span>
                            Lok Sabha
                        </a>
                    </li>
                    <li class="relative group <?php if ($pageName == 'rajya_sabha') {
                                                    echo "active";
                                                } ?>">
                        <a href="/rajya-sabha" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> video_library </span>
                            Rajya Sabha
                        </a>
                    </li>
                    <li class="relative group <?php if ($pageName == 'members') {
                                                    echo "active";
                                                } ?>">
                        <a href="/members" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> group </span>
                            Members
                        </a>
                    </li>
                    <li class="relative group <?php if ($pageName == 'ministries') {
                                                    echo "active";
                                                } ?>">
                        <a href="/ministries" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> account_balance </span>
                            Ministries
                        </a>
                    </li>
                    <li class="relative group <?php if ($pageName == 'parties') {
                                                    echo "active";
                                                } ?>">
                        <a href="/parties" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> subject </span>
                            Political Parties
                        </a>
                    </li>
                </ul>
                <ul class="flex flex-col bg-white dark:bg-slate-900 dark:text-gray-300">
                    <hr class="m-4 border-gray-200 dark:border-gray-700" />
                    <li class="relative group <?php if ($pageName == 'setting') {
                                                    echo "active";
                                                } ?>">
                        <a href="#" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> settings </span>
                            Setting
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="/login" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
                            <span class="material-symbols-outlined"> logout </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden lg:flex gap-4 flex-row-reverse">
            <div class="flex items-center gap-2">
                <div class="relative cursor-pointer flex h-10 w-10 shrink-0 select-none items-center justify-center rounded-full bg-gray-100 text-sm font-bold uppercase text-gray-800">
                    <svg class="h-1/2 w-1/2 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h1 1 14H20z"></path>
                    </svg>
                </div>
            </div>
            <div class="relative cursor-pointer flex h-10 w-10 shrink-0 select-none items-center justify-center rounded-full bg-gray-100 text-sm font-bold uppercase text-gray-800">
                <span class="material-symbols-outlined" onclick="toggleDarkMode(event)"> dark_mode </span>
            </div>
        </div>
        <div class=" mr-auto lg:hidden">
            <a href="/" class="flex gap-2 items-center">
          <img class="mx-auto h-12 w-auto mix-blend-dark" src="/dist/assets/emblem.png" alt="Emblem" />
          <span class="text-xl">Parliament of India</span>
        </a>
        </div>
    </header>
    <hr class="mx-3 bg-gray-400 dark:bg-blue-950" />
<div class="relative col-span-2 hidden lg:block bg-white dark:bg-slate-900 dark:text-gray-300 overflow-y-auto h-full border-r">
  <div class="w-full h-full flex flex-col rounded-2xl">
    <!-- section header -->
    <div class="py-4 px-4 flex justify-center items-center sticky bg-white dark:bg-slate-900 dark:text-gray-300 top-0 left-0 right-0 z-10">
      <a href="/" class="flex gap-2 items-center">
        <img class="mx-auto h-12 w-auto mix-blend-dark" src="/dist/assets/emblem.png" alt="Emblem" />
        <span class="text-xl">Parliament of India</span>
      </a>
    </div>
    <ul class="flex flex-col">
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
    <ul class="flex flex-col sticky bg-white dark:bg-slate-900 dark:text-gray-300 bottom-0 mt-auto left-0 right-0 z-10">
      <hr class="m-4 border-gray-200 dark:border-gray-700" />
      <li class="relative group <?php if ($pageName == 'admin') {
                                  echo "active";
                                } ?>">
        <a href="/admin" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
          <span class="material-symbols-outlined">
            account_circle
          </span>
          Admin
        </a>
      </li>
      <li class="relative group <?php if ($pageName == 'setting') {
                                  echo "active";
                                } ?>">
        <a href="/setting" class="flex flex-row items-center gap-3 py-4 pl-4 pr-6 group-[.active]:bg-gray-200 group-[.active]:border-r-2 group-[.active]:border-blue-700/40 group-[.active]:bg-opacity-30 group-[.active]:text-gray-700 hover:bg-gray-200 hover:bg-opacity-30 hover:border-r-2 hover:border-blue-700/40">
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
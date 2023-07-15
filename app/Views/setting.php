<div class="relative col-span-12 lg:col-span-10 overflow-y-auto h-full dark:bg-slate-900 dark:text-gray-300">
    <?php include 'Common/header.php'; ?>
    <div class="p-3 flex flex-col items-center py-5">
        <h2 class="text-2xl">Change Password</h2>

        <form class="mt-5 lg:w-1/2" onsubmit="uploadVideo(event)">
            <div class="relative mb-5">
                <input type="password" name="old-password" id="old-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="old-password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Old Password</label>
            </div>
            <div class="relative mb-5">
                <input type="password" name="new-password" id="new-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="new-password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">New Password</label>
            </div>
            <div class="relative mb-5">
                <input type="password" name="confirm-password" id="confirm-password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="confirm-password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Confirm Password</label>
            </div>

            <div class="mb-5">
                <div id="success" class="rounded-lg px-4 py-2 bg-gray-100 text-green-400 hidden">Successfully uploaded</div>
                <div id="failed" class="rounded-lg px-4 py-2 bg-gray-100 text-red-400 hidden">Failed Upload</div>
            </div>
            <div>
                <button type="submit" class="bg-blue-700/60 px-4 py-2 rounded-lg text-white cursor-pointer">Change Password</button>
            </div>

        </form>
    </div>

</div>
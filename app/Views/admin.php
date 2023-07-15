<div class="relative col-span-12 lg:col-span-10 overflow-y-auto h-full dark:bg-slate-900 dark:text-gray-300">
    <?php include 'Common/header.php'; ?>
    <div class="p-3 flex flex-col items-center py-5">
        <h2 class="text-2xl">Upload Video</h2>

        <form class="mt-5 lg:w-1/2" onsubmit="uploadVideo(event)">
            <div class="relative mb-5 lg:w-2/4">
                <label for="speaker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Azure Video Title</label>
                <select name="speaker" id="speaker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Choose a Video</option>
                    <?php foreach ($members as $member) { ?>
                        <option value="<?php echo $member['id']; ?>"><?php echo $member['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="relative mb-5">
                <input type="text" name="video-title" id="video-title" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="video-title" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Video Title</label>
            </div>
            <div class="relative mb-5">
                <textarea type="text" name="video-description" id="video-description" class="block px-2.5 pb-2.5 pt-4 w-full text-sm h-28 text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "></textarea>
                <label for="video-description" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-5 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Video Description</label>
            </div>

            <div class="flex flex-col gap-4 mb-5">
                <div class="relative flex-grow">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Video</label>
                    <input name="video-upload" class="block px-2.5 py-2.5 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                </div>
                <div class="relative flex-grow">
                    <input name="video-url" type="text" id="video_url" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="video_url" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Video url</label>
                </div>
            </div>
            <div class="relative mb-5 lg:w-2/4">
                <label for="speaker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Speaker</label>
                <select name="speaker" id="speaker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Choose a Memebr</option>
                    <?php foreach ($members as $member) { ?>
                        <option value="<?php echo $member['id']; ?>"><?php echo $member['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="relative mb-5 lg:w-2/4">
                <label for="house" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select House</label>
                <select id="house" name="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a house</option>
                    <option value="rajya-sabha">Rajya Sabha</option>
                    <option value="lok-sabha">Lok Sabha</option>
                </select>
            </div>
            <div class="relative mb-5 lg:w-2/4">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Date</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input datepicker id="date" name="date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                </div>
            </div>
            <div class="relative mb-5 lg:w-2/4">
                <input type="text" name="tags" id="tags" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="tags" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Tags</label>
            </div>
            <div class="flex flex-wrap gap-3 mb-5" id="tagList">

            </div>
            <div class="mb-5">
                <div id="success" class="rounded-lg px-4 py-2 bg-gray-100 text-green-400 hidden">Successfully uploaded</div>
                <div id="failed" class="rounded-lg px-4 py-2 bg-gray-100 text-red-400 hidden">Failed Upload</div>
            </div>
            <div>
                <button type="submit" class="bg-blue-700/60 px-4 py-2 rounded-lg text-white cursor-pointer">Submit</button>
            </div>

        </form>
    </div>

</div>
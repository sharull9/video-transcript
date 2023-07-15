<div class="relative col-span-12 lg:col-span-10 overflow-y-auto h-full dark:bg-slate-900 dark:text-gray-300">
    <?php include dirname(__FILE__) . '/../Common/header.php'; ?>

    <div class="m-2 my-3 md:m-5">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 grid-rows-[masonsry] items-start">
            <?php $i=0; foreach ($members as $member) {
                if($i > 10) {continue;}
                ?>
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <div class="flex flex-col items-center py-10">
                            <img class="w-32 h-32 mb-3 rounded-full shadow-lg object-cover" src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcSE4-HOaTyTWAJ74kV22Ry3fGvk0XsfknM4lhzP9_S9V-T5mg2grIUUgQ7F8jrWAldbRscyCixmO3jaIs0" alt="Bonnie image" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?php echo $member['name'] ?></h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400"><?php echo $member['party'] ?></span>
                            <span class="text-sm text-black dark:text-gray-400">
                                <?php if ($member['party'] == 'rajya-sabha') {
                                    echo "Rajya Sabha";
                                } else {
                                    echo "Lok Sabha";
                                } ?>
                            </span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="#" class="inline-flex gap-2 items-center px-4 py-2 text-sm font-medium text-center text-black bg-gray-200 rounded-lg hover:bg-gray-300 focus:ring-4  focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <span class="material-symbols-outlined">
                                        play_circle
                                    </span>
                                    View Videos
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php $i++; } ?>
        </div>
    </div>

</div>
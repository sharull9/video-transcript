<div class="relative col-span-12 lg:col-span-10 overflow-y-auto h-full dark:bg-slate-900 dark:text-gray-300">
    <?php include dirname(__FILE__) . '/../Common/header.php'; ?>

    <div class="m-2 my-3 md:m-5">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <?php foreach ($parties as $party) { ?>
                <div class="bg-gray-100/30 border p-2 rounded-lg">
                    <a href="#">
                        <div class="grid grid-cols-12 gap-3 p-3 items-center">
                            <div class="rounded-lg col-span-6 overflow-hidden border bg-white/60 backdrop-blur-sm flex items-center justify-center">
                                <img src="/dist/party/<?php echo $party['icon'] ?>" class="aspect-square object-contain" alt="">
                            </div>
                            <div class="pt-3 pb-1 col-span-6 flex-grow">
                                <p class="font-bold mb-4 text-2xl">
                                    <?php echo $party['name'] ?>
                                </p>
                            </div>
                            <!-- <div class="col-span-12 grid grid-cols-2 justify-evenly text-center gap-1">
                                <p class="bg-gray-500 cursor-pointer text-white px-4 py-2 text-sm rounded-md">Video: 20</p>
                                <p class="bg-gray-500 cursor-pointer text-white px-4 py-2 text-sm rounded-md">Members: 17</p>
                            </div> -->
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
    <div class="m-2 my-3 md:m-5">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 grid-rows-[masonsry] items-start">
            <?php foreach ($ministries as $ministry) { ?>
                <div class="bg-gray-100 p-2 rounded-lg">
                    <a href="#">
                        <div class="rounded-lg overflow-hidden flex bg-white items-center justify-center">
                            <img src="/dist/ministry/<?php echo $ministry['icon'] ?>" class="w-full h-full aspect-video object-contain" alt="">
                        </div>
                        <div class="pt-3 pb-1 text-center">
                            <p class="font-bold mb-4">
                                <?php echo $ministry['name'] ?>
                            </p>
                            <div class="flex justify-evenly gap-1">
                                <p class="bg-gray-500 cursor-pointer text-white px-4 py-2 text-sm rounded-md">Video: 20</p>
                                <p class="bg-gray-500 cursor-pointer text-white px-4 py-2 text-sm rounded-md">Speakers: 17</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
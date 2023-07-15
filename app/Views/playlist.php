<div class="m-2 my-3 md:m-5">
    <div class="mt-10 lg:mt-5">
        <h2 class="text-2xl font-semibold mb-2">Playlist</h2>
        <?php for ($t = 1; $t <= 4; $t++) { ?>
            <div class="mt-5 p-3 border rounded-lg group/playlist">
                <div class="flex justify-between group-[.open]/playlist:border-b group-[.open]/playlist:pb-2">
                    <p>My Playlist <?php echo $t ?></p>
                    <span class="material-symbols-outlined cursor-pointer" onclick="openPlaylist(event)">
                        keyboard_arrow_down
                    </span>
                </div>
                <div class="hidden group-[.open]/playlist:grid grid-cols-1 gap-12 mt-5" id="playlist-video">

                </div>
            </div>
        <?php } ?>

    </div>
</div>
</div>
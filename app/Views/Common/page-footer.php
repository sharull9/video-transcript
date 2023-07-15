</div>

<script src="/dist/js/common.js"></script>
<script src="/dist/js/script.js"></script>
<script src="/dist/js/video.js"></script>
<script>
    <?php if (isset($subPage) &&  $subPage == 'video') { ?>
        getVideo();
    <?php } ?>
    <?php if (isset($subPage) &&  $subPage == 'home') { ?>
        getVideoList();
    <?php } ?>
    <?php if (isset($subPage) &&  $subPage == 'bookmark') { ?>
        getHouseVideo();
    <?php } ?>
    <?php if (isset($subPage) &&  $subPage == 'archives') { ?>
        getHouseVideo();
    <?php } ?>
    <?php if (isset($subPage) &&  $subPage == 'playlist') { ?>
        getPlaylist();
    <?php } ?>
    <?php if (isset($subPage) &&  $subPage == 'lok_sabha') { ?>
        getHouseVideo();
    <?php } ?>
    <?php if (isset($subPage) &&  $subPage == 'rajya_sabha') { ?>
        getHouseVideo();
    <?php } ?>
    <?php if (isset($subPage) &&  $subPage == 'search') { ?>
        let pageQuery = new URLSearchParams(window.location.search)
        for (let [key, value] of pageQuery) {
            if (key == "query") {
                getSearchResult();
            }
        }
    <?php } ?>
</script>
</body>

</html>
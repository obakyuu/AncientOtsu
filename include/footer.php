<div class="uk-section uk-section-small uk-box-shadow-medium <?php if ($theme == 1) {
    print 'uk-section-secondary';
} else {
    print 'uk-section-muted';
} ?>">
    <div class="uk-container">
        <div class="uk-text-center">
            <?php
            //開設年+1
            if (date('Y') > 2020) {
                print "Copyright©2020-" . date('Y') . " ";
            } else {
                print "Copyright©2020 ";
            }
            ?>Eriel All Rights Reserved.
        </div>
    </div>
</div>
</body>
</html>
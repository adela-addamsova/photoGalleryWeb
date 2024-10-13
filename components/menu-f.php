<nav>
<ul class='main-nav'>
    <?php
    foreach ($pages as $page) {
        if (isset($page->menu)) {
            if ($page->menu == "404") {
                continue;
            } else {
                echo "<li><a href='?page={$page->id}'>{$page->menu}</a></li>";
            }
        } else if ($page == $subPages) {
            echo "<li><a href='#'>Gallery</a>";}
    }
    ?>
    </ul>

    <ul class='sub-nav'>
    <?php

    foreach ($subPages as $subpage) {
            echo "<li><a href='?page={$subpage->id}'>{$subpage->menu}</a></li>";
    }
    ?>
    </ul>

</nav>
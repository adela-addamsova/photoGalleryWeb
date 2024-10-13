<nav>
    <ul class="main-nav">
        <?php
        foreach ($pages as $page) {
            if (isset($page->menu)) {
                if ($page->menu == "404") {
                    continue;
                } else {
                    echo "<li><a class='main-nav-a' href='?page={$page->id}'>{$page->menu}</a>";
                }
            } else if ($page == $subPages) {
                echo "<li><a class='main-nav-a' href='index.php#gallery'>Gallery</a>";
                
                echo "<ul class='sub-nav'>";
                foreach ($subPages as $subpage) {
                    echo "<li><a class='sub-nav-a' href='?page={$subpage->id}'>{$subpage->menu}</a></li>";
                }
                echo "</ul>";
                echo "</li>";
                
            }
        }
        ?>
    </ul>
</nav>
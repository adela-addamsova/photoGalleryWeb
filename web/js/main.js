class MyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = ` 

        
    <!-- Burger menu -->
        <nav class="burger-menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php#category">GALLERY</a>
                    <ul>
                        <li><a href="landscape.php">Landscape</a></li>
                        <li><a href="macro.php">Macro</a></li>
                        <li><a href="#">Animals</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Architecture</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </nav>
    
    
    <!-- Header -->
        <header class="header-main">
          <div class="header-main-logo">
            <a href="index.php">
                <img src="logo/5a28d563aa6e96.1476758515126255076981.png" alt="logo">
            </a>
            </div>
 
    <nav class="header-main-nav">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php#gallery">GALLERY</a>
                <ul>
                    <li><a href="landscape.php">Landscape</a></li>
                    <li><a href="macro.php">Macro</a></li>
                    <li><a href="#">Animals</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li><a href="#">ABOUT</a></li>
        </ul>
    </nav>

    <!-- nav vložené do logo, aby v rámci space-between header-main nastavení
    byl vedle loga a ne uprostřed -->
            
    <div class="header-main-social">
        <a href="https://www.instagram.com/photo_by_jackie/" target="_blank">
            <div class="header-main-social-ig"></div></a>
                <div class="burger-menu-btn"></div>
            </div>
        </header>

        `
    }
}

customElements.define('h-eader', MyHeader)


class MyFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = ` 
    <!-- Footer -->
        
    <footer>
    <div class="footer-main">
        <div class="footer-sitemap">
                        <ul>
                <li><a href="#">NATURE</a></li>
                <li><a href="macro.php">MACRO</a></li>
                <li><a href="#">ANIMALS</a></li>
            </ul>
            <ul class="main-f">
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php#category">GALLERY</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
            <ul>
                <li><a href="#">TECHNOLOGY</a></li>
                <li><a href="#">ARCHITECTURE</a></li>
                <li><a href="#">OTHER</a></li>
            </ul>
        </div>

        <div class="footer-main-social">
            <p>Copyright© 2023 PhotoByJackie</p>
            <a href="https://www.instagram.com/photo_by_jackie/" target="_blank">
                <div class="footer-main-social-ig"></div>
            </a>
        </div>
    </div>
</footer>


        `
    }
}

customElements.define('f-ooter', MyFooter)



let burgerBtn = document.querySelector(".burger-menu-btn");
let burgerMenu = document.querySelector(".burger-menu");

let isBurgerOpen = false;

burgerBtn.onclick = function () {
    if (!isBurgerOpen) {
        burgerMenu.style.display = "block";
        burgerBtn.style.backgroundPosition = "center left 50px, center";
        isBurgerOpen = true;
    }
    else if (isBurgerOpen) {
        burgerMenu.style.display = "none";
        burgerBtn.style.backgroundPosition = "center, center left 50px";
        isBurgerOpen = false;
    }
}




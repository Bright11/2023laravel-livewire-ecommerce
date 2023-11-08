    <!-- header top -->
    <section class="topbar">
        <nav class="topnav">
<div class="mobile-hurmbugar-div" onclick="opennavemobilebtn()">
    <button class="closnav-btn"><i class="fa-solid fa-bars"></i></button>
</div>
            <ul class="topul">
                <li class="topli dropdown">
                    <a href="#">Help <span><i class="fa-solid fa-circle-chevron-down"></i></span> </a>
                    <ul class="dorpdownul">
                       <div class="dropdownchildern">
                        <li class="dropdwonli"><a href="">Help center</a></li>
                        <li class="dropdwonli"><a href="">Disputs & report</a></li>

                        <li class="dropdwonli"><a href="">report IPR infrigement</a></li>

                       </div>
                    </ul>
                </li>
                <!-- end of dorpdown -->
                <li class="topli"><a href="">Buyer Protection</a></li>
                <li class="topli"><a href="">App</a></li>

                <li class="topli"><a href="">Language</a></li>

                <li class="topli"><a href=""><i class="fa-regular fa-heart"></i><span>Wish List</span></a></li>

                <li class="topli account"><a href="#"><span><i class="fa-solid fa-user"></i></span> Account</a>
                    <ul class="accountdropdwonul">
                      <div class="accountdiv">
                        <div class="register-accountdiv">
                            <li class="accountli regisgterli"><a wire:navigate href="{{ route("regisetrpage") }}">Register</a></li>
                            <li class="accountli loginli"><a href="">Login</a></li>
                        </div>
                        <li class="topli"><a href="">My Order</a></li>
                        <li class="topli"><a href="">My Coins</a></li>
                        <li class="topli"><a href="">Message Center</a></li>
                        <li class="topli"><a href="">Peyment</a></li>
                        <li class="topli"><a href="">Wish List</a></li>
                        <li class="topli"><a href="">My Favourite Stores</a></li>
                        <li class="topli"><a href="">My Coupons</a></li>
                      </div>
                    </ul>

                </li>

            </ul>
        </nav>
    </section>

    <!-- the end of header top -->

    <!-- search bar -->

    <section class="searcnbar-seaction">
        <ul class="searchbarul">
            <li class="logo">
                <a href="/" wire:navigate>
                    AliExpress
                </a>
            </li>
            <div class="searchbardiv">
                <form action="" class="searchbar-form">
                    <input type="text" placeholder="I'm shipping for">
                    <button><i class="fa-solid fa-magnifying-glass searchicon"></i></button>
                </form>

            </div>
            <button onclick="opensearchform()" class="open-searchformbtn"><i class="fa-solid fa-magnifying-glass open--icon"></i></button>
            <li class="shopping-cart-li"><a href=""><i class="fa-solid fa-cart-shopping shopping-icon"></i>
                <span class="count-span">90</span>
            </a>

            </li>
            <li class="qrcode"><a href="">
                <img src="img/qrlcode.webp" alt="">
            </a></li>
        </ul>
       <div onclick="closeform()" class="closeform-div">
        <button class="close-form-btn"><i class="fa-solid fa-xmark"></i></button>
       </div>
    </section>

    <!-- the end of search bar -->

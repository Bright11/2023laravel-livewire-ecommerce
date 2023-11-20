<section class="category-and-main">
    <div class="mobile-cate">
        <h1 onclick="sidebarclick()"><span ><i class="fa-solid fa-bars"></i></span> Categories</h1>
    </div>
 <div class="sidebar-holder">
    <div class="category-and-main-div">
        <div class="sidebar">
            <div class="categorys-icon-div">
                <h1 onclick="sidebarclick()"><span ><i class="fa-solid fa-bars"></i></span> Categories</h1>
            </div>
            <!--  -->
            <div class="category-items">
                <ul class="category-ui">
                   @forelse ($cat as $item)
                   <li class="sidebar-li">
                    <a href=""><span><i class="fa-solid fa-shirt"></i></span>{{ $item->name }}</a>
                </li>
                   @empty

                   @endforelse

                </ul>
            </div>
            <!--  -->
        </div>
        <div class="best-salers-div">
          <!-- top policese -->
          <div class="top-policies-div">
            <div class="polices-item">
                <h1><span><i class="fa-solid fa-shield"></i></span> Safe & reliable payments</h1>
            </div>
            <div class="polices-item">
                <h1><span><i class="fa-solid fa-sack-dollar"></i></span> Money back guarantee</h1>
            </div>
            <div class="polices-item">
                <h1> <span><i class="fa-solid fa-headphones"></i></span> 24/7 Customer Service</h1>
            </div>
          </div>

          <!-- the end of policis -->

          <!-- best salers items -->

          <div class="best-salers-items-div">
            <div class="best-salers-left-items">
                <h1>Your fave shopping guide</h1>
                <div class="latest-deal-link">
                    <a  href="">Check out the latest new deals</a>
                </div>
                <div class="shopping-guid-promo-div">
               <div class="shopping-guid-promo-first">
                @forelse ($latestItems as $item)
                <div class="shopping-promo-img">
                    <a href="">
                        <img src="{{ Storage::url($item->image) }}" alt="">
                    <div class="discount-best-saler">
                        <h2>-{{ $item->discount }}%</h2>
                    </div>
                    </a>
                    <div class="price-best-saler">
                        <p>${{ $item->price }}</p>
                    </div>
                </div>
                @empty

                @endforelse



               </div>


               <div class="shopping-guid-promo-first">
                @forelse ($latestItemsdown as $item)
                <div class="shopping-promo-two-img">
                    <a href="">
                      <img src="{{ Storage::url($item->image) }}" alt="">
                  <div class="discount-best-saler">
                      <h2>-{{ $item->discount }}%</h2>
                  </div>
                  </a>
                  <div class="price-best-saler">
                      <p>${{ $item->price }}</p>
                  </div>
                  </div>



                @empty

                @endforelse
            </div>
                </div>

            </div>

            <div class="best-salers-right-items">
            <div class="first-best-saler-right-item">
               <div class="best-sale-advert">
                <img src="img/sales.webp" alt="">
               </div>
               <div class="welcometo-chika">
                <h1>Welcome to AliExpress!</h1>
                <div class="welcome-links">
                    <div class="join-div">
                        <a href="">Join</a>
                    </div>
                    <div class="login-div">
                        <a href="">Login</a>
                    </div>
                </div>
               </div>


            </div>
            <div class="right-div">
               <div class="superbest-dealsdiv">
                <div class="superdeal">
                    <h1>Super <span>Deals</span></h1>
                    <a href="">Top products, incrediable prices</a>
                </div>
                <a href="">View All</a>
               </div>
                <div class="right-item-div">
                    @forelse ($lowPriceItems as $item)
                    <div class="items-right-image-div">
                        <a href="">
                            <img src="{{ Storage::url($item->image) }}" alt="">
                            <div class="price-best-saler">
                                <p>${{ $item->price }}</p>
                            </div>
                        </a>
                        <div class="discount-best-saler">
                            <h2>-{{ $item->discount }}%</h2>
                        </div>
                    </div>
                    @empty

                    @endforelse

                   </div>
            </div>
            </div>
          </div>

          <!-- the end of best salers items -->


        </div>
       </div>
 </div>
</section>

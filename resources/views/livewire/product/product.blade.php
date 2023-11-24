<div>
    @forelse ($pro as $c)
    @if(count($c->Product)>0)
    {{-- @if(count($c->Product)>0) --}}
    <div class="items-category-name">
        <div class="cate-name">
            <h1>{{ $c->name }}</h1>
        </div>
        <div class="items-cate-links">
            <a href="">View All</a>
        </div>
    </div>

    <div class="weekly-sales">
        @forelse ($c->Product as $item)
        <div class="weekly-products-item">
            <a href="">
                <img src="{{ Storage::url($item->image) }}" alt="">
            <div class="product-prices">
                <p>${{ $item->price }}</p>
                <p> <s>{{ $item->discount }}</s> </p>
                <h1>{{ $item->name }}</h1>
            </div>
            </a>
            <div class="addto-cart">
                {{-- <a href=""><span><i class="fa-solid fa-cart-shopping"></i></span> Add to Cart</a> --}}
                <button type="button" wire:click="addtocat({{ $item->id }})"><span><i class="fa-solid fa-cart-shopping"></i></span>Add to Cart</button>

            </div>
        </div>
        @empty

        @endforelse
    </div>


    @endif

     @empty

     @endforelse
</div>

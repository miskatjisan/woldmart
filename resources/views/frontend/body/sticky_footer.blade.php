

<div class="sticky-footer sticky-content fix-bottom" >
        <a href="{{url('/')}}" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="{{ route('shop.products') }}" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        
        <a href="{{ url('/dashboard') }}" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="{{ route('mycart') }}" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
         
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form method="post" action="{{ route('product.search') }}" class="input-wrapper">
                @csrf
                <input type="text" class="form-control" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
                
            </form>
        </div>
    </div>

 
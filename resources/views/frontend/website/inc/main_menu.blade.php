<div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light main_box">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{route('homepage')}}"><img src="{{asset('assets/frontend/img/logo.png')}}" alt="{{env('APP_NAME')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">

                    <li class="nav-item @if (Request::is('/')) active @endif"><a class="nav-link" href="{{route('homepage')}}">Home</a></li>

                    <li class="nav-item submenu dropdown @if (Request::is('shop*')) active @endif">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('shop.home')}}">All Products</a>
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.shipping.info')}}">Product Checkout</a>
                            <li class="nav-item"><a class="nav-link" href="{{route('cart.index')}}">Shopping Cart</a></li>
                            <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                        </ul>
                    </li>

                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                        </ul>
                    </li>

                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a>
                            <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Registration</a>
                            <li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a>
                            <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="{{route('cart.index')}}" class="cart" style="position: relative"><i class="lnr lnr lnr-cart"></i> <span class="badge cart-badge" style="color: #c5322d; top: -3px; right: -22px; position: absolute;">{{Cart::count()}}</span></a></li>
                    <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

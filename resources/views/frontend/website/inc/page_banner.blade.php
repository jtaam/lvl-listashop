<section class="banner_area" @if (Request::is('/'))
    style="display: none"
@endif>
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">

                @if (Request::segment(1) == 'login'))
                    <h2>Login</h2>
                    <div class="page_link">
                        <a href="{{route('homepage')}}">Home</a>
                        <a href="{{route('login')}}">Login</a>
                    </div>
                @elseif(Request::segment(1) == 'register')
                    <h2>Register</h2>
                    <div class="page_link">
                        <a href="{{route('homepage')}}">Home</a>
                        <a href="{{route('register')}}">Register</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>
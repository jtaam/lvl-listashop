<div class="top_menu row m0">
    <div class="container">
        <div class="float-left">
            <a href="mailto:support@colorlib.com">support@colorlib.com</a>
            <a href="#">Welcome to Catalouge</a>
        </div>
        <div class="float-right">
            <ul class="header_social">
                @guest
                <li><a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a></li>
                @else
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-reddit-alien"> Dashboard</i></a></li>
                @endguest
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>
    </div>
</div>
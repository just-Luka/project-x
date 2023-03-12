<header>
    <ul class="header-block">

        @if(URL::current() === url('profile'))
            <li class="nav-block nav-block-active">
                <a href="{{ url("/profile") }}"><i class="fa-solid fa-user"></i></a>
            </li>
            <li class="nav-block">
                <a href="{{ url("/chats") }}"><i class="fa-solid fa-comments"></i></a>
            </li>
        @else
            <li class="nav-block">
                <a href="{{ url("/profile") }}"><i class="fa-solid fa-user"></i></a>
            </li>
            <li class="nav-block nav-block-active">
                <a href="{{ url("/chats") }}"><i class="fa-solid fa-comments"></i></a>
            </li>
        @endif
        
    </ul>
</header>
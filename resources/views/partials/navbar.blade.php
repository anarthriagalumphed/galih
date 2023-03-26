<ul class="nav justify-content-center  bg-danger ">
    <li class="nav-item">
        <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $title === 'Blog' ? 'active' : '' }}" href="/blog">Blog</a>
    </li>

</ul>

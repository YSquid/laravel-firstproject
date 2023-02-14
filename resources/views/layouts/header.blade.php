<nav class="top-menu-container">
    <div class="logo-header">
        <a href="">
            <img src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                alt="Logo personal portfolio" title="Logo personal portfolio" />
        </a>
    </div>

    <ul>
        <li>
            <a href="/" {{-- calling the request global object's is function --}} {{-- if the request matches this route, set as the active route --}}
                class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="/products" class="{{ request()->is('/products') ? 'active' : '' }}">Products</a>
        </li>
        <li>
            <a href="/contact">Contact</a>
        </li>
    </ul>
</nav>

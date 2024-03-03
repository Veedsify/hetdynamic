<ul class="main-menu__list">
    <li{{ request()->is('home') ? ` class="current"` : '' }}>
        <a href="{{ route('home') }}">Home </a>
        </li>
        <li{{ request()->is('about') ? ` class="current"` : '' }}>
            <a href="{{ route('about') }}">About </a>
            </li>
            <li class="dropdown">
                <a href="#">Study</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('coaching.details', 'canada') }}">Canada - Express Entry</a></li>
                    <li><a href="{{ route('coaching.details', 'turkey') }}">Turkey</a></li>
                    <li><a href="{{ route('coaching.details', 'malta') }}">Malta</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Citizenship</a>
                <ul class="sub-menu">
                    <li><a href="about.html">United Kingdom</a></li>
                    <li><a href="team.html">Grenada</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Residency</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('residency.details', 'united-kingdom') }}">United Kingdom</a></li>
                    <li><a href="{{ route('residency.details', 'united-states') }}">United States</a></li>
                    <li><a href="{{ route('residency.details', 'canada') }}">Canada</a></li>
                    <li><a href="{{ route('residency.details', 'greece') }}">Greece</a></li>
                    <li><a href="{{ route('residency.details', 'australia') }}">Australia Recedency</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Work Permit</a>
                <ul class="sub-menu">
                    <li><a href="about.html">United Kingdom</a></li>
                    <li><a href="team.html">Canada</a></li>
                </ul>
            </li>
            <li {{ request()->is('blog') ? ` class="current"` : '' }}>
                <a href="{{ route('blog') }}">Blog</a>
            </li>
            <li {{ request()->is('blog') ? ` class="current"` : '' }}>
                <a href="{{ route('contact') }}">Contact</a>
            </li>
</ul>

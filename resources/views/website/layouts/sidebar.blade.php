<?php
    $segment1 = request()->segment(1);
?>

<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ route('website.index') }}">
                    <img src="{{ asset('assets/website/img/logo/logo.png') }}" alt="Dalkia Inc. Logo" title="Dalkia Inc. Logo" style="max-width: 284px; max-height: 60px; width: 100%;">
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{ route('website.index') }}" class="{{ in_array($segment1, ['', 'home']) ? 'active' : '' }}">Home</a></li>
                    <li class="menu-has-children">
                        <a href="{{ route('website.about') }}" class="{{ in_array($segment1, ['about']) ? 'active' : '' }}">About Us</a>
                        <ul>
                            <li><a href="{{ route('website.about') }}#our-history" class="uppercase">Our History / Timeline</a></li>
                            <li><a href="{{ route('website.about') }}#our-mission" class="uppercase">Our Mission and Vision</a></li>
                            <li><a href="{{ route('website.about') }}#scope-and-services" class="uppercase">Scope and Services</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children">
                        <a href="{{ route('website.projects') }}" class="{{ in_array($segment1, ['projects']) ? 'active' : '' }}">Projects</a>
                        <ul>
                            <li><a href="{{ route('website.projects') }}#ongoing-projects" class="uppercase">Ongoing Projects</a></li>
                            <li><a href="{{ route('website.projects') }}#completed-projects" class="uppercase">Completed Projects</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('website.certifications-and-awards') }}" class="{{ in_array($segment1, ['certifications-and-awards']) ? 'active' : '' }}">Certifications & Awards</a></li>
                    <li><a href="{{ route('website.careers') }}" class="{{ in_array($segment1, ['careers']) ? 'active' : '' }}">Careers</a></li>
                    <li><a href="{{ route('website.contacts') }}" class="{{ in_array($segment1, ['contacts']) ? 'active' : '' }}">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
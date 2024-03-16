<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <!-- ---------------------------------- -->
        <!-- Home -->
        <!-- ---------------------------------- -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <!-- ---------------------------------- -->
        <!-- Dashboard -->
        <!-- ---------------------------------- -->
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <!-- ---------------------------------- -->
        <!-- Apps -->
        <!-- ---------------------------------- -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Blogs</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.blog.create') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-book"></i>
                </span>
                <span class="hide-menu">New Article</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.blog.article') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-books"></i>
                </span>
                <span class="hide-menu">All Articles</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.blog.comment') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-message-dots"></i>
                </span>
                <span class="hide-menu">Comments</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Study</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.study.caseStudy') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-vocabulary"></i>
                </span>
                <span class="hide-menu">All Case Studies</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="app-notes.html" aria-expanded="false">
                <span>
                    <i class="ti ti-book-2"></i>
                </span>
                <span class="hide-menu">New Study</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Citizenship</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.country.citizenship') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-building-estate"></i>
                </span>
                <span class="hide-menu">All Citizenship</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="app-notes.html" aria-expanded="false">
                <span>
                    <i class="ti ti-location"></i>
                </span>
                <span class="hide-menu">New Citizenship</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Residency</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.residency.allResidency') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-home-eco"></i>
                </span>
                <span class="hide-menu">All Residency</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="app-contact2.html" aria-expanded="false">
                <span>
                    <i class="ti ti-home-move"></i>
                </span>
                <span class="hide-menu">New Residency</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Work Permit</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="page-user-profile.html" aria-expanded="false">
                <span>
                    <i class="ti ti-network"></i>
                </span>
                <span class="hide-menu">Previous Work Permit</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="app-invoice.html" aria-expanded="false">
                <span>
                    <i class="ti ti-forklift"></i>
                </span>
                <span class="hide-menu">New Work Permit</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Contact</span>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.contact') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-phone"></i>
                </span>
                <span class="hide-menu">Contact</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.chat') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-messages"></i>
                </span>
                <span class="hide-menu">Chat</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.call') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-dialpad"></i>
                </span>
                <span class="hide-menu">Get a call</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">MAIL</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.email') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-mail"></i>
                </span>
                <span class="hide-menu">Email</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.support') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-mail"></i>
                </span>
                <span class="hide-menu">Support Mail</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Pages & Configuration</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-home"></i>
                </span>
                <span class="hide-menu">Home Page</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">


                <li class="sidebar-item">
                    <a href="{{ route('config.details') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Global Details</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('config.banner') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Banner</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('config.consulting') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Consulting</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('config.our.support') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Our Support</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('config.coaching.training') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Coaching and Traning</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="blog-posts.html" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Testimonials</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="blog-posts.html" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Countries List</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('config.our.consultants') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Our Consultants</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="blog-posts.html" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Contact</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-info-circle"></i>
                </span>
                <span class="hide-menu">About Page</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">

                <li class="sidebar-item">
                    <a href="{{route('config.about')}}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">About Banner</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('config.experience')}}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Years of Experience</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('config.about.us') }}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">About Us</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                    <i class="ti ti-info-circle"></i>
                </span>
                <span class="hide-menu">Contact Page</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">

                <li class="sidebar-item">
                    <a href="{{route('config.contact')}}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Contact Banner</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('config.checkout.location')}}" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                            <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Checkout Location</span>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</nav>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center {{ request()->is('/') ? 'header-transparent' : '' }}">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>ECA</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class="{{ request()->is('about*') ? 'active' : '' }}" href="{{ route('about.index') }}">About</a>
                </li>
                <li>
                    <a class="{{ request()->is('team') ? 'active' : '' }}" href="{{ route('team.index') }}">Team</a>
                </li>


                {{-- <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">ECA at a glance</a></li>
                        <li><a href="#">Our Values</a></li>
                        <li><a href="#">Our Mission & Vision</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </li> --}}
                <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('services.audit') }}">Audit and Assurance Services</a></li>
                        <li><a href="{{ route('services.tax') }}">Tax Services</a></li>
                        <li><a href="{{ route('services.legal') }}">Legal Services</a></li>
                        <li><a href="{{ route('services.advisory') }}">Advisory and Consultancy</a></li>
                        <li><a href="{{ route('services.training') }}">Training and Capacity Development</a></li>
                        <li><a href="{{ route('services.payroll') }}">Payroll Processing</a></li>
                        <li><a href="{{ route('services.cashDistribution') }}">Cash Distribution Services</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('sector.index') }}"
                        class="{{ request()->is('sector*') ? 'active' : '' }}">Sectors</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ route('contactus.index') }}"
                        class="{{ request()->is('contactus*') ? 'active' : '' }} ">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
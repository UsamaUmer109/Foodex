<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ url('/') }}"
                class="nav-item nav-link{{ Request::is('/') ? ' active' : '' }}">Home</a>
            <a href="{{ url('about') }}"
                class="nav-item nav-link{{ Request::is('about') ? ' active' : '' }}">About</a>
            <a href="{{ url('service') }}"
                class="nav-item nav-link{{ Request::is('service') ? ' active' : '' }}">Service</a>
            <a href="{{ url('menu') }}"
                class="nav-item nav-link{{ Request::is('menu') ? ' active' : '' }}">Menu</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ url('booking') }}" class="dropdown-item">Booking</a>
                    <a href="{{ url('team') }}" class="dropdown-item">Our Team</a>
                    <a href="{{ url('testimonial') }}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{ url('contact') }}"
                class="nav-item nav-link{{ Request::is('contact') ? ' active' : '' }}">Contact</a>
        </div>
        <a href="{{ url('book-table') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
    </div>
</nav>

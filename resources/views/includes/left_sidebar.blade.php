<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Management</span></li>

                <li class="sidebar-item"> <a class="sidebar-link" href="/users" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">User
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/products" aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Product</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/articles" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Article</span></a></li>

                <li class="list-divider"></li>
                @guest
                @if (Route::has('login'))
                <li class="nav-item sidebar-item">
                    <a class="sidebar-link nav-link" href="{{ route('login') }}"> <i class="fa fa-lock"></i> {{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item sidebar-item">
                    <a class="nav-link sidebar-link" href="{{ route('register') }}"><i class="fa fa-lock"></i> {{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown sidebar-item">
                <i class="fa fa-user"></i> {{ Auth::user()->name }}


                        <a class="dropdown-item sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                </li>
                @endguest
            </ul>
        </nav>
        <!-- <x-package-alert type="danger" message="demo component" /> -->
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

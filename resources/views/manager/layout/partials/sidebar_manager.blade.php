<header class="main-nav">
    <div class="sidebar-user text-center">
        {{--<a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a>--}}
        <img class="img-90 rounded-circle" src="{{asset('viho/images/dashboard/1.png')}}" alt="" />
        {{--<div class="badge-bottom"><span class="badge badge-primary">New</span></div>--}}
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">{{auth()->user()->name}}</h6></a>
        <p class="mb-0 font-roboto">{{auth()->user()->email}}</p>
{{--        <ul>--}}
{{--            <li>--}}
{{--                <span><span class="counter">19.8</span>k</span>--}}
{{--                <p>Follow</p>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <span>2 year</span>--}}
{{--                <p>Experince</p>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <span><span class="counter">95.2</span>k</span>--}}
{{--                <p>Follower</p>--}}
{{--            </li>--}}
{{--        </ul>--}}
    </div>

    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">

                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6></h6>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('manager.dashboard')}}">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>


                            <span>Dashboard</span>
                            <div class="according-menu">
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </a>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Menu</h6>
                        </div>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('manager.project.list')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                            <span>Projetos</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('manager.entity.list')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span>Entidades</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('manager.user.list')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span>Usuários</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('manager.ticket.list')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span>Tickets</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

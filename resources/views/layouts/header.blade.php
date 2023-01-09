<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <img src="{{ asset('assets/images/profile/17.jpg') }}" width="20" alt=""/>
                            <div class="header-info">
                                <span class="text-black"><strong>{{ Auth::user()->name }}</strong></span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>

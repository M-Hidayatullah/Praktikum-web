<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="{{ url('dashboard') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li><a class="ai-icon" href="{{ route('blog.index') }}" aria-expanded="false">
                    <i class="flaticon-381-box"></i>
                    <span class="nav-text">Blog</span>
                </a>
            </li>

            <li>
                <form id="logout-form" action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-primary text-center" type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</div>

@if(auth()->check())

    <div class="user-menu">
        <span>{{ auth()->user()->user_name }}</span>

        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" >
                Logout
            </button>
        </form>
    </div>

@else

    <a href="{{ route('auth.login') }}">Login</a>

@endif  
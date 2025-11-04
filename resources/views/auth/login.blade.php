<x-layout>
    <h2></h2>

    <form action="{{ Route('auth.login') }}" method="POST">

        @csrf

        <h2>login page</h2>


        <label>User name:</label>
        <input 
            type="text"
            id="user_name"
            name="user_name"
            value="{{ old('user_name') }}"
            require
        >


        <label>Password:</label>
        <input 
            type="password"
            id="password"
            name="password"
            value="{{ old('password') }}"
        >


        <button type="submit">Login</button>

        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
    </form>

</x-layout>
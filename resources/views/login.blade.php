<x-layout>

    <div class="login">
        <div class="container">
            <h2>login page</h2>

            <form class="form-grid" action="{{ Route('auth.login') }}" method="POST">

                @csrf



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


                <button type="submit" class="button primary">Login</button>

                @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                
            </form>
        </div>
        

    </div>

</x-layout>
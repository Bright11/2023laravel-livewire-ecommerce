<div>
    <form wire:submit.prevent="userregister" class="registerform register">
        {{-- @csrf --}}
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        <input type="text" wire:model="name" placeholder="user name">
        <input type="email" wire:model="email" placeholder="email">
        <input type="password" wire:model="password" placeholder="password">
        <button>Save</button>
        <button class="noaccount" type="button" onclick="login()">Already have an account? Login</button>
    </form>

    <form action="{{ route("login") }}" method="post" class="registerform loginform">
        @csrf
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button>Login</button>
        <button class="noaccount" type="button" onclick="login()">Don't have an account? Register</button>
    </form>

</div>

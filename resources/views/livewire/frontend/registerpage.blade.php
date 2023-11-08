<div>
    <form wire:submit.prevent="register" class="registerform register">
        {{-- @csrf --}}

        <input type="text" wire:model="name">
        <input type="email" wire:model="email" placeholder="email">
        <input type="password" wire:model="password" placeholder="password">
        <button>Save</button>
        <button class="noaccount" type="button" onclick="login()">Already have an account? Login</button>
    </form>

    <form action="" method="post" class="registerform loginform">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button>Login</button>
        <button class="noaccount" type="button" onclick="login()">Don't have an account? Register</button>
    </form>

</div>

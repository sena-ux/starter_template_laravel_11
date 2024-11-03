<div>
    <form wire:submit.prevent="sendResetLink">
        <input type="email" wire:model="email" placeholder="Email">
        <button type="submit">Send Password Reset Link</button>
    </form>
    @if (session()->has('status'))
        <span>{{ session('status') }}</span>
    @endif
</div>

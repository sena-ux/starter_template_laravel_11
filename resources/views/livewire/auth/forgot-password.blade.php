<div>
    <div class="login-container text-c animated flipInX">
        <div>
            <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
        </div>
        @if ($idUser == null)
            <h3 class="text-whitesmoke">Smanda-Learning</h3>
            <p class="text-whitesmoke">Forgot Password</p>
            <div class="container-content">
                <form class="margin-t needs-validation" wire:submit.prevent="forgotPassword">
                    <div class="form-group">
                        <input type="text" wire:model="key" class="form-control" placeholder="Insert Email or Password" required="">
                        @error('key')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Wajib di sini.
                        </div>
                    </div>
                    <button type="submit" class="form-button button-l margin-b" wire:loading.attr="disabled">Forgot
                        Password</button>
                    <div wire:loading wire:target="forgotPassword">
                        <div class="d-flex align-items-center justify-content-between w-100 text-warning">
                            <div role="status">Loading...</div>
                            <div class="spinner-border ms-auto" aria-hidden="true"></div>
                        </div>
                    </div>
                </form>
                <p class="margin-t text-whitesmoke"><small> Your Name &copy; 2018</small> </p>
            </div>
        @else
            <h3 class="text-whitesmoke">Smanda-Learning</h3>
            <p class="text-whitesmoke">New Password</p>
            <div class="container-content">
                <form class="margin-t needs-validation" wire:submit.prevent="NewPassword">
                    <div class="form-group">
                        <div class="form-group input-group">
                            <input type="password" wire:model="password" class="form-control" id="passwordInput"
                                placeholder="Password" required>
                            <span class="input-group-text" id="basic-addon2" onclick="togglePassword()"><i
                                    class="fas fa-eye" id="toggleIcon"></i></span>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Wajib di sini.
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="form-button button-l margin-b">Save Password</button>
                    <div wire:loading wire:target="NewPassword">
                        <div class="d-flex align-items-center justify-content-between w-100 text-warning">
                            <div role="status">Loading...</div>
                            <div class="spinner-border ms-auto" aria-hidden="true"></div>
                        </div>
                    </div>
                </form>
                <p class="margin-t text-whitesmoke"><small> Your Name &copy; 2018</small> </p>
            </div>
        @endif
    </div>
</div>

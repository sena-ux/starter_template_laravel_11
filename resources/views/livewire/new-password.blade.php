<div>
    <div class="login-container text-c animated flipInX">
        <div>
            <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
        </div>
        <h3 class="text-whitesmoke">Smanda-Learning</h3>
        <p class="text-whitesmoke">Forgot Password</p>
        <div class="container-content">
            <form class="margin-t needs-validation" wire:submit.prevent="NewPassword">
                <div class="form-group">
                    <div class="form-group input-group">
                        <input type="password" wire:model="password" class="form-control" id="passwordInput"
                            placeholder="Password" required>
                        <span class="input-group-text" id="basic-addon2" onclick="togglePassword()"><i class="fas fa-eye"
                                id="toggleIcon"></i></span>
    
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
                <button type="submit" class="form-button button-l margin-b">Forgot Password</button>
            </form>
            <p class="margin-t text-whitesmoke"><small> Your Name &copy; 2018</small> </p>
        </div>
    </div>
</div>

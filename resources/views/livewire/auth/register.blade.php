<div>
    <div class="login-container my-4 text-c animated flipInX">
        <div>
            <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
        </div>
        <h3 class="text-whitesmoke">Smanda-Learning</h3>
        <p class="text-whitesmoke text-white">Sign Up</p>
        <div class="container-content">
            <form class="margin-t needs-validation" wire:submit.prevent="register">
                <div class="form-group">
                    <input type="text" wire:model="name" class="form-control" placeholder="Name" required="">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Wajib di sini.
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" wire:model="username" class="form-control" placeholder="Username"
                        required="">
                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Wajib di sini.
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" wire:model="email" class="form-control" placeholder="Email" required="">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Wajib di sini.
                    </div>
                </div>
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
                <div class="form-group input-group">
                    <input type="password" wire:model="password_confirmation" class="form-control" id="passwordInput"
                        placeholder="Confirm Password" required>
                    <span class="input-group-text" id="basic-addon2" onclick="togglePassword()"><i class="fas fa-eye"
                            id="toggleIcon"></i></span>
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Wajib di sini.
                    </div>
                </div>
                <button type="submit" class="form-button button-l margin-b">Sign Up</button>

                <a class="text-darkyellow" href="{{route('password.request')}}"><small>Forgot your password?</small></a>
                <p class="text-whitesmoke text-center"><small>Do not have an account?</small></p>
                <a class="text-darkyellow" href="{{route('login')}}"><small>Sign In</small></a>
            </form>
            <p class="margin-t text-whitesmoke"><small> Sena Pernata &copy; 2024</small> </p>
        </div>
    </div>
</div>

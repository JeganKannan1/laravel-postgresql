    
 @props(['name', 'email', 'type'])
    <div class="input-group mb-3">
        <input type="text" name="name"
                class="form-control"
                placeholder="{{ __('Name') }}" value="{{ $name }}" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="email" name="email"
                class="form-control"
                placeholder="{{ __('Email') }}" value="{{ $email }}" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>

    @if($type == 1)
        <div class="input-group mb-3">
            <input type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="{{ __('New password') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="password" name="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    placeholder="{{ __('New password confirmation') }}"
                    autocomplete="new-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
    @endif
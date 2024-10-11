<div>
    <div class="text-center mb-4">
        <h4 class="text-uppercase mt-0">Sign In</h4>
    </div>

    @if($errors->any())
        <p class="alert alert-danger text-center">Invalid Username Or Password</p>
    @endif


    <form wire:submit="process"  method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="emailaddress" class="form-label">Username</label>
            <input class="form-control" type="text" required="" wire:model="username"  placeholder="Enter your username">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control" type="password" wire:model="password" required=""  id="password" placeholder="Enter your password">
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                <label class="form-check-label" for="checkbox-signin">Remember me</label>
            </div>
        </div>

        <div class="mb-3 d-grid text-center">
            <x-button loadingText="Logging In...">
                Sign In
            </x-button>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p> <a href="{{ route('password.request') }}" class="text-muted ms-1"><i class="fa fa-lock me-1"></i>Forgot your password?</a></p>
            </div> <!-- end col -->
        </div>
    </form>
</div>

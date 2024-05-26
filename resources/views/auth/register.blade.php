<x-layout>
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 p-3 mt-5">{{ __('ui.register') }}</h1>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-8 border p-5 shadow rounde">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.username') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.mail') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror " name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.password') }}</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror " name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.confirmPassword') }}</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror " name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('ui.submit') }}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

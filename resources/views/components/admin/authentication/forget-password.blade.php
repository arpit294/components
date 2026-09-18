

  @if (session('status'))
    <div class="alert alert-success mb-3">
      {{ session('status') }}
    </div>
  @endif

  <x-admin.authentication.auth-container>
    <h4 class="mb-1">Forgot Password? 🔒</h4>
    <p class="mb-6">Enter your email and we'll send you instructions to reset your password</p>
    <form id="formAuthentication" class="mb-3" action="{{ route('password.email') }}" method="POST" novalidate>
      @csrf
      <div class="mb-6">
        <label for="emacil" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
          placeholder="Enter your email" autofocus />
        @error('email')
          <div class="text-danger mt-1 small">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
    </form>
    <div class="text-center">
      <a href="{{ route('login') }}" class="d-flex justify-content-center">
        <i class="icon-base bx bx-chevron-left me-1"></i>
        Back to login
      </a>
    </div>
  </x-admin.authentication.auth-container>



<x-admin.authentication.auth-container>

  <!-- /Logo -->
  <h4 class="mb-1">Reset Password 🔒</h4>
  <p class="mb-6">Your new password must be different from previously used passwords</p>

  <form id="formAuthentication" class="mb-3" action="{{ route('password.update') }}" method="POST" novalidate>
    @csrf
    <input type="hidden" name="token" value="{{ $request->token }}">

    <div class="mb-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email"
        value="{{ old('email', $request->email) }}" placeholder="Enter your email" readonly required />
      @error('email')
        <div class="text-danger mt-1 small">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-6 form-password-toggle">
      <label class="form-label" for="password">New Password</label>
      <div class="input-group input-group-merge">
        <input type="password" id="password" class="form-control" name="password" placeholder="············"
          autofocus />
        <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
      </div>
      @error('password')
        <div class="text-danger mt-1 small">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-6 form-password-toggle">
      <label class="form-label" for="password_confirmation">Confirm Password</label>
      <div class="input-group input-group-merge">
        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
          placeholder="············" />
        <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
      </div>
      @error('password_confirmation')
        <div class="text-danger mt-1 small">{{ $message }}</div>
      @enderror
    </div>

    <button class="btn btn-primary d-grid w-100 mb-6" type="submit">Set New Password</button>

    <div class="text-center">
      <a href="{{ route('login') }}" class="d-flex justify-content-center">
        <i class="icon-base bx bx-chevron-left me-1"></i>
        Back to login
      </a>
    </div>
  </form>

</x-admin.authentication.auth-container>

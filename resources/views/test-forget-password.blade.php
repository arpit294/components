<!DOCTYPE html>
<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="{{ asset('/assets') . '/' }}" dir="ltr"
  data-skin="default" data-base-url="{{ url('/') }}" data-framework="laravel" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password - Test</title>
  <x-admin.style />
  <x-admin.meta />

  <!-- Page Auth CSS for centering card and auth styling -->
  @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])

  <!-- Include Scripts for helper and config -->
  @vite(['resources/assets/vendor/js/helpers.js'])
  @vite(['resources/assets/js/config.js'])
</head>
<body>

  <!-- Calling your Forget Password Component -->
  <x-admin.authentication.forget-password />

  <x-admin.script />
</body>
</html>

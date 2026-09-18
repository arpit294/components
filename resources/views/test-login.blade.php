<!DOCTYPE html>
<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="{{ asset('/assets') . '/' }}" dir="ltr"
  data-skin="default" data-base-url="{{ url('/') }}" data-framework="laravel" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Test</title>
  <x-admin.style />
  <x-admin.meta />
  @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
  @vite(['resources/assets/vendor/js/helpers.js'])
  @vite(['resources/assets/js/config.js'])
</head>
<body>
  <x-admin.authentication.login />
  <x-admin.script />
</body>
</html>

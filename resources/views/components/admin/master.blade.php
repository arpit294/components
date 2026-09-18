<!DOCTYPE html>
<html lang="en" class="layout-menu-fixed layout-compact" data-assets-path="{{ asset('/assets') . '/' }}" dir="ltr"
  data-skin="default" data-base-url="{{ url('/') }}" data-framework="laravel" data-bs-theme="light"
  data-template="vertical-menu-template">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <x-admin.block.style />
  <x-admin.block.meta />

  <!-- Include Scripts for customizer, helper, analytics, config -->
  @vite(['resources/assets/vendor/js/helpers.js'])
  @vite(['resources/assets/js/config.js'])
</head>

<body>

  <div class="layout-wrapper layout-content-navbar {{ $isMenu ? '' : 'layout-without-menu' }}">
    <div class="layout-container">
      <x-admin.sidebar />
      <div class="layout-page">
        <x-admin.navbar />
        <div class="content-wrapper">

          {{-- <x-admin.authentication.login /> --}}
          {{-- <x-admin.authentication.register /> --}}
          {{-- <x-admin.authentication.forget-password /> --}}

          {{-- <x-admin.layout.modals />

          <x-admin.layout.offcanvas />


          <x-admin.layout.cards>
          </x-admin.layout.cards> --}}
        </div>
      </div>
    </div>
  </div>
  </div>

  <x-admin.block.script />
</body>

</html>

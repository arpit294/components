<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo">
    <a href="{{ url('/') }}" class="app-brand-link">
      <span class="app-brand-logo demo">@include('_partials.macros')</span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">{{ config('variables.templateName') }}</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="icon-base bx bx-chevron-left icon-sm d-flex align-items-center justify-content-center"></i>
    </a>
  </div>

  <div class="menu-divider mt-0"></div>
  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    {{-- <x-admin.sititle="Dashboard">

      </x-admin.sidebar.item-nested> --}}
    <x-admin.sidebar.item-nested title="Dashboard" active="true" icon="menu-icon icon-base bx bx-bxs-dashboard">
      <x-admin.sidebar.item url="{{ url('/') }}" active="true" iconClass="bx-analyse" title="Analytics" />
    </x-admin.sidebar.item-nested>

    <x-admin.sidebar.item url="{{ url('/') }}" active="true" iconClass="menu-icon icon-base bx bx-user"
      title="Users" />


  </ul>

</aside>

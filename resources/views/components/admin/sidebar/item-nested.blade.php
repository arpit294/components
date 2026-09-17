<li class="menu-item {{ $active ? 'active open' : '' }}">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    @if ($icon)
      <i class="{{ $icon }}"></i>
    @endif
    <div>{{ $title }}</div>
    {{-- @if ($badge)
      <div class="badge rounded-pill bg-{{ $badgeColor }} text-uppercase ms-auto">{{ $badge }}</div>
    @endif --}}


  </a>
  <ul class="menu-sub">
    {{ $slot }}
  </ul>
</li>

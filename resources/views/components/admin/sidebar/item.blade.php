@props([
    'url' => '',
    'activeClass' => '',
    'iconClass' => '',
    'title' => '',
])

<li class="menu-item {{ $activeClass }}">
  <a href="{{ $url ?: 'javascript:void(0);' }}" class="menu-link">
    @if (!empty($iconClass))
      <i class="{{ $iconClass }}"></i>
    @endif
    <div>{{ $title }}</div>
  </a>
</li>

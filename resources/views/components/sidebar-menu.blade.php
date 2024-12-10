@props(['active', 'icon'])

@php
$icon = $icon ?? 'far fa-circle';
$classes = ($active ?? false)
? 'flex items-center p-2 text-white bg-blue-600 rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group'
: 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';
$iconClasses = ($active ?? false)
? 'w-5 h-5 text-slate-100 transition duration-75 dark:text-gray-400 group-hover:text-slate-300 dark:group-hover:text-white'
: 'w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white';
@endphp

<li>
  <a {{ $attributes->merge(['class' => $classes]) }}>
    <i class="{{ $icon }} {{ $iconClasses }}"></i>
    <span class="ms-3">{{ $slot }}</span>
  </a>
</li>
<div>
    <a {{ $attributes }}aria-current="page" class="{{ request()->is('/') ? 'bg-gray-900 text-white rounded-2xl px-3 py-2' : 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-2xl px-3 py-2' }} ml-140 px-3 py-2 text-sm font-medium text-white">{{ $slot }}</a>
</div>
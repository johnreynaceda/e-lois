@props([
    'title' => '',
    'total' => '',
])
<div class="border-2 shadow-md  rounded-2xl p-4 px-6">
  <div class="flex justify-between items-end">
    <h1 class="font-medium text-gray-700">{{ $title }}</h1>
    {{ $slot }}
  </div>
  <h1 class="font-bold text-xl text-gray-700">{{ $total }}</h1>
</div>

@props(['value'])
<li class="group flex">
    <a
        {{ $attributes->merge(['class' => 'text-sm lg:text-base w-full text-gray-700 py-2 mx-4 lg:mx-3 xl:mx-4 lg:group-hover:font-bold lg:font-medium group-hover:text-primary font-normal dark:text-gray-200']) }}>
        {{ Str::title($value) }}
    </a>
</li>

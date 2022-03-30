<div>
    @props(['active'])

    @php
    $classes = ($active ?? false)
                ? 'px-2
                      lg:px-6
                      py-6
                      text-sm
                      border-b-2 border-purple-600
                      hover:border-gray-100
                      leading-[22px]
                      text-gray-500
                      hover:text-gray-500'
                : 'px-2
                      lg:px-6
                      py-6
                      text-sm
                      border-b-2 border-transparent
                      hover:border-gray-100
                      leading-[22px]
                      text-gray-500
                      hover:text-blue-500';
    @endphp

    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>

</div>

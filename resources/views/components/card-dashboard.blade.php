
<div class="flex flex-col p-4 overflow-hidden transition duration-500 ease-in-out transform bg-white rounded-md cursor-pointer hover:scale-110">
    <a href="" class="">
        <span
            class="inline-block px-2 py-1 mb-4 text-xs font-semibold text-white rounded-md content bg-emerald-500">
            </span>
    </a>
    <div class="flex flex-col justify-between flex-1">
        <div class="flex mb-1 text-gray-500">
            <span> {{$title}} </span>
        </div>
        <div class="flex justify-between">
            <h3 class="text-4xl font-black text-neutral-600">{{ sprintf('%02d', $value)}}</h3>
            <p class="text-lg font-normal text-gray-500">
                {{$slot}}
            </p>
        </div>
    </div>
</div>

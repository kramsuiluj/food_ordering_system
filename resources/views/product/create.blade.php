<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="w-1/4 mx-auto mt-5">

        <form action="{{ route('add.product') }}" method="POST">
            @csrf

            <section>
                <x-label for="p_name">Product Name</x-label>
                <x-input name="p_name" id="p_name" type="text"/>
            </section>

            <section class="mt-5">
                <x-label for="p_price">Product Price</x-label>
                <x-input name="p_price" id="p_price" type="text"/>
            </section>

            <section class="mt-5">
                <select name="tags[]" id="tags" multiple>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </section>

            <x-button class="mt-5">
                ADD
            </x-button>

        </form>

    </div>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Setting E-Receipt Apps') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="p-6 bg-white border">
                    <h3 class="pb-3">Form Setting E-Receipt Apps</h3>
                    <form action="setting" method="post" autocomplete="off">
                        @csrf
                        <div class="mb-4 row">
                            <label for="attributesetting" class="col-sm-2 col-form-label">Attribute Setting</label>
                            <div class="col-sm-3">
                                <input type="text" name="attributesetting" class="form-control" id="attributesetting" aria-describedby="attributesetting">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="value" class="col-sm-2 col-form-label">Value</label>
                            <div class="col-sm-3">
                                <input type="text" name="value" class="form-control" id="value" aria-describedby="value">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

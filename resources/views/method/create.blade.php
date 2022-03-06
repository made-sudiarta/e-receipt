<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Payment Method') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="p-6 bg-white border">
                    <h3 class="pb-3">Form Payment Method</h3>
                    <form action="method" method="post" autocomplete="off">
                        @csrf
                        <div class="mb-4 row">
                            <label for="paymentmethod" class="col-sm-2 col-form-label">Payment Method</label>
                            <div class="col-sm-3">
                                <input type="text" name="paymentmethod" class="form-control" id="paymentmethod" aria-describedby="paymentmethod">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Payment Method') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="p-6 bg-white border">
                    <h3 class="pb-3">Form Update Payment Method</h3>
                    <form action="{{ route('method-update', $data->id) }}" method="post" autocomplete="off">
                        @csrf
                        @method('PATCH')
                        <div class="mb-4 row">
                            <label for="paymentmethod" class="col-sm-2 col-form-label">Payment Method</label>
                            <div class="col-sm-3">
                                <input type="text" name="paymentmethod" value="{{ $data->paymentmethod }}" class="form-control" id="paymentmethod" aria-describedby="paymentmethod">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

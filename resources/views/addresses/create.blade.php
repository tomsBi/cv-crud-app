@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Add your address</h3>
        <div class="max-w-7xl mx-auto px-8">
            <div class="overflow-hidden shadow-xl p-4">
                <form class="max-w-sm mx-auto" method="post" action="{{ route('address.store', ['resume' => $resume]) }}">
                    @csrf
                    @method('post')
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Country</label>
                        <input type="text" name="country"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Country" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Zip/Postal code</label>
                        <input type="number" name="zip_code"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="123" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">City</label>
                        <input type="text" name="city"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="City" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Street name</label>
                        <input type="text" name="street"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Street name" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Street number</label>
                        <input type="number" name="street_number"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="11" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Appartment number</label>
                        <input type="number" name="number"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="5">
                    </div>
                    <div class="flex items-center justify-evenly">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

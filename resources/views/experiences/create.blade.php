@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Add your experience</h3>
        <div class="max-w-7xl mx-auto px-8">
            <div class="overflow-hidden shadow-xl p-4">
                <form class="max-w-sm mx-auto" method="post" action="{{ route('experience.store', ['resume' => $resume]) }}">
                    @csrf
                    @method('post')
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Name of the workplace</label>
                        <input type="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Name of the workplace" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Position</label>
                        <input type="text" name="position"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Position" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Job type</label>
                        <select name="job_type"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5">
                            <option selected="selected" disabled="disabled">-- select one --</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                            <option value="Contract">Contract</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Duration</label>
                        <input type="number" name="duration"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Years" required>
                    </div>
                    <div class="flex items-center justify-evenly">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                            Add
                        </button>
                        <a href="{{ route('experience.index', ['resume' => $resume]) }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

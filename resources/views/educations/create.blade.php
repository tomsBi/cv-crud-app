@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Add your education</h3>
        <div class="max-w-7xl mx-auto px-8">
            <div class="overflow-hidden shadow-xl p-4">
                <form class="max-w-sm mx-auto" method="post" action="{{ route('education.store', ['resume' => $resume]) }}">
                    @csrf
                    @method('post')
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Name of the institution</label>
                        <input type="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Name of the institution" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Faculty</label>
                        <input type="text" name="faculty"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Faculty">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Study programme</label>
                        <input type="text" name="study_programme"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Study programme">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Study type</label>
                        <select name="study_type"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5">
                            <option selected="selected" disabled="disabled">-- select one --</option>
                            <option value="Primary education">Primary education</option>
                            <option value="Secondary education">Secondary education or high school</option>
                            <option value="Bachelor's degree">Bachelor's degree</option>
                            <option value="Master's degree">Master's degree</option>
                            <option value="Doctorate or higher">Doctorate or higher</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Study status</label>
                        <select name="status"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5">
                            <option selected="selected" disabled="disabled">-- select one --</option>
                            <option value="Completed">Completed</option>
                            <option value="Incomplete">Incomplete</option>
                            <option value="Studying">Studying</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Study duration</label>
                        <input type="number" name="study_duration"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Years" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Start year</label>
                        <input type="number" name="start_year"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="2000" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">End year</label>
                        <input type="number" name="end_year"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="2024">
                    </div>
                    <div class="flex items-center justify-evenly">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                            Add
                        </button>
                        <a href="{{ route('education.index', ['resume' => $resume]) }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

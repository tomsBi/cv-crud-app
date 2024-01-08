@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Edit your education</h3>
        <div class="max-w-7xl mx-auto px-8">
            <div class="overflow-hidden shadow-xl p-4">
                <form class="max-w-sm mx-auto" method="post"
                    action="{{ route('education.update', ['education' => $education]) }}">
                    @csrf
                    @method('put')
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Name of the institution</label>
                        <input type="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            required value="{{ $education->name }}">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Faculty</label>
                        <input type="text" name="faculty"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            value="{{ $education->faculty }}">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Study programme</label>
                        <input type="text" name="study_programme"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            value="{{ $education->study_programme }}">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Study type</label>
                        <select name="study_type"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5">
                            <option value="Primary education"
                                selected="{{ $education->study_type == 'Primary education' ? 'selected' : '' }}">
                                Primary education
                            </option>
                            <option value="Secondary education"
                                selected="{{ $education->study_type == 'Secondary education' ? 'selected' : '' }}">
                                Secondary education or high school
                            </option>
                            <option value="Bachelor's degree"
                                selected="{{ $education->study_type == "Bachelor's degree" ? 'selected' : '' }}">
                                Bachelor's degree
                            </option>
                            <option value="Master's degree"
                                selected="{{ $education->study_type == "Master's degree" ? 'selected' : '' }}">
                                Master's degree
                            </option>
                            <option value="Doctorate or higher"
                                selected="{{ $education->study_type == 'Doctorate or higher' ? 'selected' : '' }}">
                                Doctorate or higher
                            </option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Study status</label>
                        <select name="status"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5">
                            <option value="Completed"
                                selected="{{ $education->status == 'Completed' ? 'selected' : '' }}">
                                Completed
                            </option>
                            <option value="Incomplete"
                                selected="{{ $education->status == 'Incomplete' ? 'selected' : '' }}">
                                Incomplete
                            </option>
                            <option value="Studying"
                                selected="{{ $education->status == 'Studying' ? 'selected' : '' }}">
                                Studying
                            </option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Study duration</label>
                        <input type="number" name="study_duration"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            required value="{{ $education->study_duration }}">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Start year</label>
                        <input type="number" name="start_year"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            required value="{{ $education->start_year }}">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">End year</label>
                        <input type="number" name="end_year"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            value="{{ $education->end_year }}">
                    </div>
                    <div class="flex items-center justify-evenly">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                            Update
                        </button>
                        <a href="{{ route('education.index', ['resume' => $education->resume_id]) }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

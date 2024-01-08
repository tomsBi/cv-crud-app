@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Edit your experience</h3>
        <div class="max-w-7xl mx-auto px-8">
            <div class="overflow-hidden shadow-xl p-4">
                <form class="max-w-sm mx-auto" method="post" action="{{ route('experience.update', ['experience' => $experience]) }}">
                    @csrf
                    @method('put')
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Name of the workplace</label>
                        <input type="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            required value="{{ $experience->name }}">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Position</label>
                        <input type="text" name="position"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            value="{{ $experience->position }}">
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Job type</label>
                        <select name="job_type"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5">
                            <option value="Full-time"
                                selected="{{ $experience->job_type == 'Full-time' ? 'selected' : '' }}">
                                Full-time
                            </option>
                            <option value="Part-time"
                                selected="{{ $experience->job_type == 'Part-time' ? 'selected' : '' }}">
                                Part-time
                            </option>
                            <option value="Contract"
                                selected="{{ $experience->job_type == 'Contract' ? 'selected' : '' }}">
                                Contract
                            </option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Duration</label>
                        <input type="number" name="duration"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            required value="{{ $experience->duration }}">
                    </div>
                    <div class="flex items-center justify-evenly">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                            Update
                        </button>
                        <a href="{{ route('experience.index', ['resume' => $experience->resume_id]) }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

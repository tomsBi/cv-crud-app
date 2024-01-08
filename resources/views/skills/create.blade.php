@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Add your skills</h3>
        <div class="max-w-7xl mx-auto px-8">
            <div class="overflow-hidden shadow-xl p-4">
                <form class="max-w-sm mx-auto" method="post" action="{{ route('skill.store', ['resume' => $resume]) }}">
                    @csrf
                    @method('post')
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Description</label>
                        <textarea name="description"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Description" required></textarea>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Type</label>
                        <select name="type"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5">
                            <option selected="selected" disabled="disabled">-- select one --</option>
                            <option value="Main task">Main task</option>
                            <option value="Achievement">Achievement</option>
                            <option value="Additional skills">Additional skill</option>
                            <option value="Certification programme">Certification programme</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Workplace</label>
                        <select name="experience_id"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5">
                            <option selected="selected" disabled="disabled">-- select one --</option>
                            @foreach ($experiences as $experience)
                                <option value={{ $experience->id }}>{{ $experience->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center justify-evenly">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                            Add
                        </button>
                        <a href="{{ route('skill.index', ['resume' => $resume]) }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

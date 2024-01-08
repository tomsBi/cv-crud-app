@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Experiences</h3>
        <div class="max-w-7xl mx-auto lg:px-8">
            <div class="overflow-hidden shadow-xl sm:roudned-lg p-4">
                <div class="flex items-center justify-end py-4">
                    <div class="px-4 flex">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4"
                            href="{{ route('experience.create', ['resume' => $resume]) }}">Add new experience</a>
                    </div>
                    <div class="flex">
                        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4"
                            href="{{ route('skill.index', ['resume' => $resume]) }}">Next</a>
                    </div>
                </div>
                <table class="table-auto bg-white border min-w-full text-sm rounded-md">
                    <thead class="bg-blue-900">
                        <tr>
                            <th class="text-white text-left border-b py-2">Name of the workplace</th>
                            <th class="text-white text-left border-b py-2">Position</th>
                            <th class="text-white text-left border-b py-2">Job type</th>
                            <th class="text-white text-left border-b py-2">Duration</th>
                            <th class="text-white text-left border-b py-2">Action</th>
                        </tr>
                    </thead>
                    @foreach ($experiences as $experience)
                        <tbody>
                            <tr>
                                <td class="text-left border-b py-2">{{ $experience->name }}</td>
                                <td class="text-left border-b py-2">{{ $experience->position }}</td>
                                <td class="text-left border-b py-2">{{ $experience->job_type }}</td>
                                <td class="text-left border-b py-2">{{ $experience->duration }}</td>
                                <td class="border-b py-2">
                                    <div class="flex">
                                        <div class="px-4 flex">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-1"
                                                href="{{ route('experience.edit', ['experience' => $experience->id]) }}">Edit</a>
                                        </div>
                                        <div class="px-4 flex">
                                            <form method="post"
                                                action="{{ route('experience.destroy', ['experience' => $experience->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <input class="bg-red-500 hover:bg-red-700 text-white py-1 px-1"
                                                    type="submit" value="Delete" />
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection

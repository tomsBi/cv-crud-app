@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Educations</h3>
        <div class="max-w-7xl mx-auto lg:px-8">
            <div class="overflow-hidden shadow-xl sm:roudned-lg p-4">
                <div class="flex items-center justify-end py-4">
                    <div class="px-4 flex">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4"
                            href="{{ route('education.create', ['resume' => $resume]) }}">Add new education</a>
                    </div>
                    <div class="flex">
                        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4"
                            href="{{ route('experience.index', ['resume' => $resume]) }}">Next</a>
                    </div>
                </div>
                <table class="table-auto bg-white border min-w-full text-sm rounded-md">
                    <thead class="bg-blue-900">
                        <tr>
                            <th class="text-white text-left border-b py-2">Name of the institution</th>
                            <th class="text-white text-left border-b py-2">Faculty</th>
                            <th class="text-white text-left border-b py-2">Study programme</th>
                            <th class="text-white text-left border-b py-2">Study type</th>
                            <th class="text-white text-left border-b py-2">Study status</th>
                            <th class="text-white text-left border-b py-2">Study duration</th>
                            <th class="text-white text-left border-b py-2">Start year</th>
                            <th class="text-white text-left border-b py-2">End Year</th>
                            <th class="text-white text-left border-b py-2">Action</th>
                        </tr>
                    </thead>
                    @foreach ($educations as $education)
                        <tbody>
                            <tr>
                                <td class="text-left border-b py-2">{{ $education->name }}</td>
                                <td class="text-left border-b py-2">{{ $education->faculty }}</td>
                                <td class="text-left border-b py-2">{{ $education->study_programme }}</td>
                                <td class="text-left border-b py-2">{{ $education->study_type }}</td>
                                <td class="text-left border-b py-2">{{ $education->status }}</td>
                                <td class="text-left border-b py-2">{{ $education->study_duration }}</td>
                                <td class="text-left border-b py-2">{{ $education->start_year }}</td>
                                <td class="text-left border-b py-2">{{ $education->end_year }}</td>
                                <td class="border-b py-2">
                                    <div class="flex">
                                        <div class="px-4 flex">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-1"
                                                href="{{ route('education.edit', ['education' => $education->id]) }}">Edit</a>
                                        </div>
                                        <div class="px-4 flex">
                                            <form method="post"
                                                action="{{ route('education.destroy', ['education' => $education->id]) }}">
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

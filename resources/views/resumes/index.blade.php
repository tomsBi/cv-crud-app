@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Resumes</h3>
        <div class="max-w-7xl mx-auto lg:px-8">
            <div class="overflow-hidden shadow-xl sm:roudned-lg p-4">
                <a class="float-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4"
                    href="{{ route('resume.create') }}">Add new resume</a>
                <br /><br />
                <table class="table-auto bg-white border min-w-full text-sm rounded-md">
                    <thead class="bg-blue-900">
                        <tr>
                            <th class="text-white text-left border-b py-2">ID</th>
                            <th class="text-white text-left border-b py-2">First name</th>
                            <th class="text-white text-left border-b py-2">Last name</th>
                            <th class="text-white text-left border-b py-2">Profession</th>
                            <th class="text-white text-left border-b py-2">Action</th>
                        </tr>
                    </thead>
                    @foreach ($resumes as $resume)
                        <tbody>
                            <tr>
                                <td class="text-left border-b py-2">{{ $resume->id }}</td>
                                <td class="text-left border-b py-2">{{ $resume->first_name }}</td>
                                <td class="text-left border-b py-2">{{ $resume->last_name }}</td>
                                <td class="text-left border-b py-2">{{ $resume->profession }}</td>
                                <td class="border-b py-2">
                                    <div class="flex">
                                        <div class="px-4 flex">
                                            <a class="bg-green-500 hover:bg-green-700 text-white py-1 px-1"
                                                href="{{ route('resume.view', ['resume' => $resume]) }}">View</a>
                                        </div>
                                        <div class="px-4 flex">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-1"
                                                href="{{ route('resume.edit', ['resume' => $resume]) }}">Edit</a>
                                        </div>
                                        <div class="px-4 flex">
                                            <form method="post"
                                                action="{{ route('resume.destroy', ['resume' => $resume]) }}">
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

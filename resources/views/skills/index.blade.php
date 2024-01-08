@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Skills</h3>
        <div class="max-w-7xl mx-auto lg:px-8">
            <div class="overflow-hidden shadow-xl sm:roudned-lg p-4">
                <div class="flex items-center justify-end py-4">
                    <div class="px-4 flex">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4"
                            href="{{ route('skill.create', ['resume' => $resume]) }}">Add new skill</a>
                    </div>
                    <div class="flex">
                        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4"
                            @if($resume->address)
                                href="{{ route('address.edit', ['address' => $resume->address->id]) }}"
                            @else
                                href="{{ route('address.create', ['resume' => $resume]) }}"
                            @endif>
                            Next
                        </a>
                    </div>
                </div>
                <table class="table-auto bg-white border min-w-full text-sm rounded-md">
                    <thead class="bg-blue-900">
                        <tr>
                            <th class="text-white text-left border-b py-2">Workplace</th>
                            <th class="text-white text-left border-b py-2">Description</th>
                            <th class="text-white text-left border-b py-2">Type</th>
                            <th class="text-white text-left border-b py-2">Action</th>
                        </tr>
                    </thead>
                    @foreach ($skills as $skill)
                        <tbody>
                            <tr>
                                <td class="text-left border-b py-2">{{ $skill->experience->name }}</td>
                                <td class="text-left border-b py-2">{{ $skill->description }}</td>
                                <td class="text-left border-b py-2">{{ $skill->type }}</td>
                                <td class="border-b py-2">
                                    <div class="flex">
                                        <div class="px-4 flex">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-1"
                                                href="{{ route('skill.edit', ['skill' => $skill->id]) }}">Edit</a>
                                        </div>
                                        <div class="px-4 flex">
                                            <form method="post"
                                                action="{{ route('skill.destroy', ['skill' => $skill->id]) }}">
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

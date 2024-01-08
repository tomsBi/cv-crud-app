@extends('layouts.app')
@section('content')
    <nav class="bg-transparent text-white p-4 w-full z-10">
        <div class="container mx-auto flex justify-end items-center max-w-2xl">
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('resume.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">Home</a>
            </div>
        </div>
    </nav>

    <div class="flex items-center justify-center">
        <div class="w-full max-w-2xl p-8 bg-white shadow-md rounded-md">
            <header class="text-center py-8">
                <h1 class="text-4xl font-bold text-blue-900">{{ $resume->first_name . ' ' . $resume->last_name }}</h1>
                <p class="text-gray-600">{{ $resume->profession }}</p>
            </header>

            <section class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-blue-700">Contact Information</h2>
                <p class="text-sm text-gray-600">{{ 'Email: ' . $resume->email }}</p>
                <p class="text-sm text-gray-600">{{ 'Phone number: ' . $resume->phone_number }}</p>
                <p class="text-sm text-gray-600">
                    {{ $resume->address->city . ' ' . $resume->address->country . ' ' . $resume->address->zip_code }}
                </p>
            </section>

            <div class="flex mb-8">
                <section class="w-1/2 pr-4">
                    <h2 class="text-2xl font-bold text-blue-700">Education</h2>
                    @foreach ($resume->educations as $education)
                        <h3 class="text-md font-bold text-gray-700">{{ $education->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $education->study_type }}</p>
                        @if($education->study_programme)
                        <li class="text-sm text-gray-600">
                            {{ $education->study_programme }}
                        </li>
                        @endif
                        @if ($education->end_year)
                            <li class="text-sm text-gray-600">
                                {{ 'Attended from: ' . $education->start_year . ' to ' . $education->end_year }}
                            </li>
                        @else
                            <li class="text-sm text-gray-600">
                                {{ 'Started: ' . $education->start_year }}
                            </li>
                        @endif
                        <li class="text-sm text-gray-600">{{ 'Status: ' . $education->status }}</li>
                    @endforeach
                </section>

                <section class="w-1/2 pl-4">
                    <h2 class="text-2xl font-bold text-blue-700">Work Experience</h2>
                    @foreach ($resume->experiences as $experience)
                        <h3 class="text-md font-bold text-gray-700">{{ $experience->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $experience->position }}</p>
                        <li class="text-sm text-gray-600">{{ 'Job type: ' . $experience->job_type }}</li>
                    @endforeach
                </section>
            </div>

            <section class="mb-8">
                <h2 class="text-2xl font-bold text-blue-700">Skills</h2>
                @foreach ($resume->experiences as $experience)
                    <h3 class="text-md font-bold text-gray-700">{{ $experience->name }}</h3>
                    @foreach ($experience->skills as $skill)
                        <li class="text-sm text-gray-600">{{ $skill->type . ': ' . $skill->description }}</li>
                    @endforeach
                @endforeach
            </section>

        </div>
    </div>
@endsection

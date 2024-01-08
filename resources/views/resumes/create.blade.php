@extends('layouts.app')
@section('content')
    <div class="py-12 text-center">
        <h3 class="text-3xl font-bold text-blue-900">Add your resume</h3>
        <div class="max-w-7xl mx-auto px-8">
            <div class="overflow-hidden shadow-xl p-4">
                <form class="max-w-sm mx-auto" method="post" action="{{ route('resume.store') }}">
                    @csrf
                    @method('post')
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">First name</label>
                        <input type="text" name="first_name"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="First name" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Last name</label>
                        <input type="text" name="last_name"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Last name" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Profession</label>
                        <input type="text" name="profession"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="Profession" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Phone number</label>
                        <input type="text" name="phone_number"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="12345678" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-blue-900">Email</label>
                        <input type="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-blue-900 text-sm block w-full p-2.5 placeholder-gray-400"
                            placeholder="example@email.com" required>
                    </div>
                    <div class="flex items-center justify-evenly">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">Add</button>
                        <a href="{{ route('resume.index') }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

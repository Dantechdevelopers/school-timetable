@extends('admin.layouts.master')

@section('content')

<div class="container mx-auto px-4 py-8">

<<<<<<< HEAD
=======
     <div class="bg-gray-100">
        <nav  class="p-6 bg-white flex justify-between">
           <ul class="flex items-center">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Timetable</h1>
           </ul>
           <ul class="flex items-center">
            <a href="
            {{ route('admin.timetable.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Add Timetable</a>
           </ul>
        </nav>


     </div>
    <!-- Make the table horizontally scrollable on smaller screens -->
>>>>>>> 34227e796b9764c0772327a9c51ee51bcdd6b209
    <div class="overflow-x-auto shadow-md rounded-lg bg-white">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-blue-100 text-gray-700">
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Class</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Subject</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Teacher</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Day</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Time</th>
                    <th class="px-6 py-3 text-center text-sm font-medium uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($timetables as $timetable)
                <tr class="hover:bg-blue-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $timetable->room->room_name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $timetable->subject->subject_name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $timetable->subject->subject_teacher }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $timetable->day }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $timetable->time }}</td>
                    <td class="px-6 py-4 text-center">
<<<<<<< HEAD
                        <a href="{{ route('timetable.edit', $timetable->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Edit</a>
                        <form action="{{ route('timetable.destroy', $timetable->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
=======
                        <a href="{{ route('admin.timetable.edit',$timetable->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Edit</a>
                        <form action="#" method="POST" class="inline-block">
>>>>>>> 34227e796b9764c0772327a9c51ee51bcdd6b209
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bg-gray-200 dark:bg-gray-700 rounded-b-md p-5">
            {{ $timetables->links() }}
         </div>
    </div>
</div>

@endsection

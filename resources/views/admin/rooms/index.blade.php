@extends('admin.layouts.master')
@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Roooms</h1>

<<<<<<< HEAD
        <div>
            @can('add_users')
              Add rooms
            @endcan
        </div>

    </div>

    <div class="card">

        <div class="mt-5 mb-5 grid sm:grid-cols-1 md:grid-cols-3 gap-4">

            <div class="col-span-2">
                <x-form.input type="search" name="name"  label="none" :placeholder="__('Search Rooms')" />
            </div>

        </div>



        <div class="overflow-x-scroll">
            <table>
            <thead>
            <tr>
                <th><a href="#" wire:click="sortBy('name')">{{ __('Name') }}</a></th>
                <th><a href="#" wire:click="sortBy('email')">{{ __('Id') }}</a></th>
                <th>{{ __('Room Name') }}</th>

                <th>{{ __('Action') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms as $room)
               <td>
                {{$room->room_name}}
               </td>

                    <td>
                        <div class="flex space-x-2">



                                @if(can('edit_users'))
                                    <x-a href="{{ route('admin.rooms.edit', $room->id )}}">{{ __('Edit') }}</x-a>

                                @endif

                                @if(can('edit_users'))
                                    <x-a href="{{ route('admin.rooms.destroy', $room->id )}}">{{ __('delete') }}</x-a>

                                @endif


                        </div>
=======
    <!-- Make the table horizontally scrollable on smaller screens -->
    <div class="overflow-x-auto shadow-md rounded-lg bg-white">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-blue-100 text-gray-700">
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Room Id</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Room Name</th>


                    <th class="px-6 py-3 text-center text-sm font-medium uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($rooms as $room)
                <!-- Example Row -->
                <tr class="hover:bg-blue-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $room->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $room->room_name}}</td>


                    <td class="px-6 py-4 text-center">
                        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Edit</a>
                        <form action="#" method="POST" class="inline-block">
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-red-600">Delete</button>
                        </form>
>>>>>>> 34227e796b9764c0772327a9c51ee51bcdd6b209
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
      <div class="bg-gray-200 dark:bg-gray-700 rounded-b-md p-5">
         {{ $rooms->links() }}
      </div>
    </div>
</div>

        
            </tbody>
        </table>
    </div>
</div>



@endsection

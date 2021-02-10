<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }} || <a href="{{ route('clients') }}" class="bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                Back to Clients
             </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $client->name }}
                    <hr>
                    <p>
                        {{ $client->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="#" class="bg-green-500 rounded-lg font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-green-600 mr-6">
                        Edit
                      </a>
                      <form method="POST" action="/dashboard/clients/{{$client->id}}/delete"class="">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                
                        <div class="form-group">
                            <input type="submit" class="bg-red-500 rounded-lg font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-red-600 mr-6 delete-user" value="Delete user">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

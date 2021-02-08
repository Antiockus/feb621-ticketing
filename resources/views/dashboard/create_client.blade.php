<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="w-full max-w-lg" action="{{ route('saveClient') }}" method="post">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                              Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name" type="text">
                            <p class="text-gray-600 text-xs italic">Give title to ticket</p>
                          </div>
                        </div>
                    
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Email
                              </label>
                              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email">
                              <p class="text-gray-600 text-xs italic">Provide email for client</p>
                            </div>
                          </div>
                        
                        <div class="md:flex md:items-center">
                          <div class="md:w-1/3">
                            <button class="shadow bg-blue-400 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                              Create Ticket
                            </button>
                          </div>
                          <div class="md:w-2/3"></div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

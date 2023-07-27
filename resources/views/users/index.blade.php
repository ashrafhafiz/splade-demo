<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-table :for="$users" as="$user">
                        <x-splade-cell actions style="justify-content: space-between !important;">
                            <div class="flex justify-around flex-grow">
                                {{-- <a href="/users/{{ $user->id }}/edit"> Edit </a> --}}
                                <a href="{{ route('users.edit', $user->id) }}"
                                    class="bg-indigo-500 rounded-md text-white font-semibold px-3 py-1 hover:bg-indigo-600">
                                    Edit </a>
                                <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('users.destroy', $user) }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="bg-red-500 rounded-md text-white font-semibold px-3 py-1 hover:bg-red-600">
                                        Delete </a>
                                </form>
                            </div>
                        </x-splade-cell>
                        <x-slot:empty-state>
                            <p>Whoops!</p>
                            </x-slot>
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@extends('layouts.app')

@section('content')
    <table class="w-full table-auto rounded-sm">
        <tbody>
            @foreach ($services as $service)
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/services/{{ $service->id }}">
                            {{ $service->title }}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/services/{{ $service->id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i>
                            Edit</a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="/services/{{ $service->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tbody>
            @foreach ($abouts as $about)
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a href="{{ route('about.show', $about->id) }}">
                            {{ $about->name }}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="{{ route ('about.update', $about->id) }}" class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square">
                            </i>
                            Edit</a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="{{ route('about.destroy', $about->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

        <tbody>
            @foreach ($collaborate as $collaborate)
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="{{ route('collaborate.show', $collaborate->id) }}">
                            {{ $collaborate->title }}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="{{ route ('collaborate.update', $collaborate->id) }}" class="text-blue-400 px-6 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square">
                            </i>
                            Edit</a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="{{ route('collaborate.destroy', $collaborate->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

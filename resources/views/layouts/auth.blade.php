@extends('layouts.base')

@section('body')
    <div class="flex flex-col justify-center min-h-screen bg-gray-300" data-turbolinks="false">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection

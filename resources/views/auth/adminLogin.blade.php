@extends('base')

@section('title', 'Login as admin')

@section('content')

    <div class="container align-items-center">

        <h2 class="text-center fw-bolder">Login as admin</h2>
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <form action="{{ route('auth.adminlogin') }}" method="POST" class="vstack gap-2">
                    @csrf

                    @include('shared.input', [
                        'label' => 'Email adress',
                        'name' => 'email',
                        'type' => 'email',
                    ])
                    @include('shared.input', [
                        'label' => 'Password',
                        'name' => 'password',
                        'type' => 'password',
                    ])
                    <button class="btn color">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection

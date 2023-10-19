@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                A Fresh verification link has been send to your email
            </div>
            @endif

            Before proceeding, pleace check your email for verification.
            or 
            <form class="d-line" method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit"
            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
            .
            </form>
                <button type="submit" class="btn btn-primary">Send riset Link</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Available Laboratories</div>

                    <div class="card-body">
                        <ul>
                            @forelse ($laboratories as $laboratory)
                                <li>{{ $laboratory->type }} - Capacity: {{ $laboratory->capacity }}</li>
                            @empty
                                <li>No laboratories available for the selected time range.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

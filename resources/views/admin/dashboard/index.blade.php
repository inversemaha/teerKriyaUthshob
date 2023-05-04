@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">

                                    <p class="text-truncate font-size-14 mb-2"><a href="/admin/votes"> Number of
                                            Votes</a></p>
                                    <h4 class="mb-0">{{$votes}}</h4>
                         

                                </div>
                                <div class="text-primary">
                                    <i class="ri-user-2-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <h4 class="text-truncate font-size-14 mb-2">Best Player </h4>

                                    <p class="mb-0"><strong>{{getPlayerName(1)}}:</strong> {{$option1}}</p>
                                    <p class="mb-0"><strong>{{getPlayerName(2)}}:</strong> {{$option2}}</p>
                                    <p class="mb-0"><strong>{{getPlayerName(3)}}:</strong> {{$option3}}</p>
                                    <p class="mb-0"><strong>{{getPlayerName(4)}}:</strong> {{$option4}}</p>
                                    <p class="mb-0"><strong>{{getPlayerName(5)}}:</strong> {{$option5}}</p>
                                    <p class="mb-0"><strong>{{getPlayerName(6)}}:</strong> {{$option6}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end row -->


@endsection

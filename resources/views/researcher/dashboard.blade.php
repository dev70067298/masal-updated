@extends('layout.researcher_app')

@section('content')
<center><div>
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show {{ Session::get('alert-class', 'alert-success') }}" role="alert">
        {{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-primary alert-dismissible fade show  {{ Session::get('alert-class', 'alert-danger') }}" role="alert">
            {{ Session::get('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
        @endif
    </div></center>
@endsection

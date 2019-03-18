@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">Address directory</h4></div>
                        <div class="panel-body">
                            @if ($errors->any())
                                <input type="hidden" data-errors="{{$errors}}" class="errors">
                            @endif
                            
                            <form action="{{route('address.store')}}" method="post">
                                @csrf
                                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                    <label for="Name">Name</label>
                                    <input type="text" name="name" class="form-control input-sm" id="Name" placeholder="Name" value="{{old('name')}}">
                                </div>
                                <div class="form-group {{$errors->has('phone') ? 'has-error' : ''}}">
                                    <label for="Email">Phone</label>
                                    <input type="text" name="phone" class="form-control input-sm" id="Email" placeholder="Phone" value="{{old('phone')}}">
                                </div>
                                <div class="form-group {{$errors->has('zip') ? 'has-error' : ''}}">
                                    <label for="Zip">Zip code</label>
                                    <input type="text" name="zip" class="form-control input-sm" id="Zip" placeholder="Zip" value="{{old('zip')}}">
                                </div>
                                <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                                    <label for="Address">Address</label>
                                    <textarea name="address" class="form-control input-sm" id="Address" cols="30" rows="10">{{old('address')}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layout.app')

@section('content')
    <div class="container">
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <form action="{{route('address.filter')}}" method="get">
                        <div class="form-group">
                            <input type="text" name="query" class="form-control" placeholder="Search address">
                        </div>
                    </form>
                    <div class="panel panel-default">
                    <div class="panel-heading"><h4>Addresses</h4></div>
                    <div class="panel-body">
                        
                    </div>
                    <div class="panel-body">
                            <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($address->isNotEmpty())
                                        @foreach ($address as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>
                                                    <a href="{{route('address.edit', $item->id)}}" class="btn btn-success btn-xs btn-action" data-action="edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <form action="{{route('address.destroy', $item->id)}}" method="post" style="display:inline">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btn btn-danger btn-xs btn-action" data-action="delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                        <tr class="text-center">
                                            <td colspan="4">Currently no address found</td>
                                        </tr>
                                        @endif
                                        
                                    </tbody>
                            </table>
                    </div>
                    <div class="panel-footer text-center">
                        {{$address->links()}}
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    {{-- <div class="dialog">
            <p></p>
            <button class="btn btn-danger">Yes</button>
            <button class="btn btn-primary">No</button>
        </div>
        <div class="dialog-overlay"></div> --}}
@endsection
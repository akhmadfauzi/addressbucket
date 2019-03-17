@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                            <div class="panel-heading">Address directory</div>
                            <div class="panel-body">
                                <form action="" method="post">
                                    @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone</label>
                                            <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Zip code</label>
                                            <input type="zip" class="form-control" id="exampleInputEmail1" placeholder="Zip">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <textarea name="address" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                          </div>
                    
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new donor status
        </div>
   
        <div class="panel-body ">
            <form action="{{route('status.store')}}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Status</label>
                    <input type="text" name="status" class="form-control">
                </div>

                 

               

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit"> Store </button>
                     </div>
                 </div>
            </form>
        </div>
    </div>
@endsection
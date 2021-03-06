@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h3> Create a new blood group</h3>
            <a href="{{route('blood')}}" class="btn xs btn-success">
                Goto all blood groups 
         </a>
        </div>
       
        <div class="panel-body ">
            <form action="{{route('blood.store')}}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Blood group</label>
                    <input type="text" name="blood_group" class="form-control">
                </div>

                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control">
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
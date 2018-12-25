@extends('layouts.master')

@section('content')

<div class="container-fluid">
 @if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
 @endif
    <div class="row">
        <div class="col-md-12">
          <h2>My Curriculum vitaes</h2>
          <div class="text-right">
                <a href="{{url('cvs/create')}}" class="btn btn-success ">Add new CV</a>
          </div>
          <div class="row">
          @foreach($cvs as $cv)
            <div class="col-md-3 col-sm-6">
              <div class="thumbnail">
                <img src="{{asset('storage/'.$cv->image)}}" alt="">
                <div class="caption">
                  <h4>{{$cv->title}}</h4>
                  <h6>{{$cv->user->name}}</h6>
                  <p>{{$cv->presentation}}</p>
                  <p>
                   <a href="{{url('cvs/'.$cv->id)}}" role="button" class="btn btn-primary">Show</a>
                   <a href="{{url('cvs/'.$cv->id.'/edit')}}" role="button" class="btn btn-warning">Edit</a>
                   <a href="{{url('cvs/'.$cv->id.'/delete')}}" role="button" class="btn btn-danger">Delete</a>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
</div>

@endsection
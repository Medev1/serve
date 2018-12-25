@extends('layouts.master')

@section('content')

  <div class="container">
    <div class="row">
       <div class="col-md-12">
         <form role ="form" action="{{url('cvs')}}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
           <div class="form-group  @if($errors->get('title')) has-error @endif">
              <label for="title">Title</label>
              <input id="title" name="title" type="text"  class="form-control" value="{{old('title')}}">
              @if($errors->get('title'))
                 @foreach($errors->get('title') as $err)
                    <div class="alert alert-danger" role="alert">{{$err}}</div>
                 @endforeach
              @endif
           </div>
           <div class="form-group  @if($errors->get('presentation')) has-error @endif">
              <label for="presentation">Presentation</label>
              <textarea name="presentation" id="presentation" cols="30" rows="10" class="form-control" placeholder="Present your cv here...">{{old('presentation')}}</textarea>
              @if($errors->get('presentation'))
                 @foreach($errors->get('presentation') as $err)
                    <div class="alert alert-danger" role="alert">{{$err}}</div>
                 @endforeach
              @endif
           </div>
           <div class="form-group">
              <label>Image</label>
              <label for="image" class="btn btn-success">Upload</label>
              <input type="file" id="image" class="form-control file" name="image" hidden>
              <label class="filename"></label>
           </div>
           <div class="form-group">
              <input type="submit" value="Create" class="form-control btn btn-primary">
           </div>
         </form>
       </div>         
    </div>
  </div>
@endsection

@extends('layouts.master')

@section('content')
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-12">
      <h1>Contact</h1>
      <form>
        <div class="form-group ">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
        <div class="form-group col-md-4 col-md-offset-4 ">
          <input class="form-control btn btn-success " type="submit" value="Send">
        </div>
      </form>
     </div>
   </div>
 </div>
@endsection


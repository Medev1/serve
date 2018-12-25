@extends('layouts.master')


@section('content')
 
  <div class="container" id="app">

      
      <div class="row">
          <div class="col-md-12">
              <div class="card bg-dark">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-10">
                    <h4 class="text-center text-white">Experieces</h4>
                    </div>
                    <div class="col-md-2 text-right">
                      <button class="btn btn-success">Add</button>
                    </div>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item">
                       <div class="text-right">
                          <button class="btn btn-warning btn-sm">Edit</button>
                       </div>
                       <h5>Title</h5>
                       <small>12/12/1212</small>
                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores assumenda explicabo doloribus obcaecati. Esse deserunt qui harum iure quas consectetur?</p>
                    </li>
                    <li class="list-group-item">
                       <div class="text-right">
                          <button class="btn btn-warning btn-sm pull-right">Edit</button>
                       </div>
                       <h5>Title</h5>
                       <small>12/12/1212</small>
                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores assumenda explicabo doloribus obcaecati. Esse deserunt qui harum iure quas consectetur?</p>
                    </li>
                    <li class="list-group-item">
                       <div class="text-right">
                          <button class="btn btn-warning btn-sm pull-right">Edit</button>
                       </div>
                       <h5>Title</h5>
                       <small>12/12/1212</small>
                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores assumenda explicabo doloribus obcaecati. Esse deserunt qui harum iure quas consectetur?</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card bg-dark">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-10">
                    <h4 class="text-center text-white">Formations</h4>
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-success">Add</button>
                    </div>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item">
                       <div class="text-right">
                          <button class="btn btn-warning btn-sm">Edit</button>
                       </div>
                       <h5>Title</h5>
                       <small>12/12/1212</small>
                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores assumenda explicabo doloribus obcaecati. Esse deserunt qui harum iure quas consectetur?</p>
                    </li>
                    <li class="list-group-item">
                       <div class="text-right">
                          <button class="btn btn-warning btn-sm pull-right">Edit</button>
                       </div>
                       <h5>Title</h5>
                       <small>12/12/1212</small>
                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores assumenda explicabo doloribus obcaecati. Esse deserunt qui harum iure quas consectetur?</p>
                    </li>
                    <li class="list-group-item">
                       <div class="text-right">
                          <button class="btn btn-warning btn-sm pull-right">Edit</button>
                       </div>
                       <h5>Title</h5>
                       <small>12/12/1212</small>
                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores assumenda explicabo doloribus obcaecati. Esse deserunt qui harum iure quas consectetur?</p>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
      </div>
  </div>

<script src="{{asset('js/vue.js')}}"></script>
<script>
  var v= new Vue({
    el: '#app',
     data:{
       link: 'https://www.google.com'
     }

  });
</script>
@endsection
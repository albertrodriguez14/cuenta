@extends ("layouts.app")



@section('styles')
  <link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.css')}}">    
  
@endsection


@section('content')

<div class="container">
  
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cuenta</div>

      <div class="panel-body"> 
               <form   action="{{route ('acount.store')}}"  method="POST" class="form-horizontal">
             {{ csrf_field() }}

             <div class="form-group ">
                <div class="col-md-1"><label for="amount">Ciudad</label></div>
               <div class="col-md-4"> <input type="text" name="city" id="city"class="form-control" value="{{ old('city') }}"></div>
                  </div>


          <div class="form-group ">
              <div class="col-md-1"><label  for="enterprise_id" >Empresa</label></div>
              <div class="col-md-4"><select name="enterprise_id" id="enterprise_id" class="form-control col-md-4">

                    @foreach ($empresa->all() as $emp)
                    <option value={{$emp->id}}  >{{$emp->name}}</option>
                    @endforeach
                       
                    
                    
                 </select>
                </div>
                    
                 <div class="col-md-1"> <label for="user_id">user</label></div>
                 <div class="col-md-4">
                       {{-- @foreach ($user->all() as $us)
                        <option value={{$us->id}}>{{$us->name}}</option>
                        @endforeach --}}
                     <input type="text"  class=" form-control " id="user_id" placeholder="nit" name="user_id" value="{{ old('nit_enterprise') }}"> 
                    </div>
                
        </div>             
               
              <div class="form-group ">
                  <div class="col-md-1"><label for="amount">valor</label></div>
                 <div class="col-md-4"> <input type="text" name="amount" id="amount"class="form-control" value="{{ old('amout') }}"></div>     
                  
                 

                  <div class="col-md-1"> <label for="date">fecha</label>  </div>
                     <div id="sandbox-container" class=" col-md-4 input-group date" data-provide="datepicker" >
                      <input type="text" name="date" id="date" class="form-control">
                      <div class="input-group-addon  ">
                        <span class="glyphicon glyphicon-th"></span>
                  </div>
                  </div> 
                </div> 
                  
                  
                      

                               
                <div class="container-fluid">
                       <div><label for="description">description
                           </label></div>
                       <textarea name="description" id="description"  rows="12" class="form-control rounded-0" value="{{ old('description') }}">
                           </textarea>

                </div>
                
                         
                <br>
             <div class="form-group">{{--button form--}}
                 <div class = "col-md-10 col-md-offset-5">
               <input type="submit" class="btn btn-primary" value="Guardar">

                  </div>
          </div>  {{--button form--}}  
        </form>
         
   </div>
    </div>
</div>
</div>
</div>

@endsection



@section('script')
    <script  src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script  src="{{asset('asset/js/bootstrap-datepicker.js')}}"> </script>

    <script>
            $( document ).ready(function() {
               
                $('#sandbox-container').datepicker({
                    format: 'yy/mm/dd',
                    autoclose: true,
                    todayHighlight: true
                });

            });



            
    </script>


@endsection




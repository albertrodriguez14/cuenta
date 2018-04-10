@extends('layouts.app')


@section('content')
<div class="container">
    @include('messages.message')
    @if($errors->any())

    <div class ="alert alert-danger">
            <ul>
         @foreach($errors->all() as $error)
            <li>{{$error}}</li>   
         @endforeach
       </ul>
   
    </div>
   
   
      @endif 
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Empresa</div>

                <div class="panel-body">
               <form   action="{{route ('enterprise.store')}}"  method="POST" class="form-inline">
                    {{ csrf_field() }}

                <div class="form-group">
                     <label for="name" >Nombre Empresa </label>
                     <input type="text" class="form-control" id="name" placeholder="nombre empresa" name="name" value="{{old('name')}} ">
                </div>

                <div class="form-group">
                        <label for="nit_enterprise">Nit</label>
                       <input type="text"  class="form-control" id="nit_enterprise" placeholder="nit" name="nit_enterprise" value="{{ old('nit_enterprise') }}">
                 </div>{{--button form--}}
              <div class="form-group">{{--button form--}}
                     <div class = "col-md-8 col-md-offset-3">
                      <input type="submit" class="btn btn-primary" value="Guardar">

                         </div>
                 </div>  {{--button form--}}  
               </form>
                </div>
                 
                <div class="table-responsive ">
                    <table class="table table-striped">
                     <tr class="text-center">
                         <td>Nombre Empresa</td>
                         <td>Nit</td>
                         <td >acciones</td>
                         @foreach($enter as $dato)
                     </tr>
                         <tr class="text-center">
                        <td>{!!$dato->name!!}</td>
                         <td>{!!$dato->nit_enterprise!!}</td>
                         <td>
                            <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                             <a href="{{route('enterprise.destroy',$dato->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                             
                        </td>
                       </tr>
                          @endforeach        
                    </table>
                   </div>{{--table--}}


            </div>
        </div>
    </div>

       
</div>{{--end container--}}

@endsection
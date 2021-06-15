@extends('layout.admin')

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
    
        <div class="row">
            <div  class="col-md-3 " style="margin-bottom: 10px;">
                <h2><strong>Sourcing List</strong></h2>
                @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                @endif
                @if(Session::has('error'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                @endif
            </div>
            
        </div>
        
    
    <div class="row match-height">
        
        <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
    
            <thead>
    
                <tr>
    
                    <th class="text-center" style="width: 70px;">ID</th>
    
                    <th class="text-center">Title</th>
    
                    <th class="text-center">Description</th>
    
                    <th class="text-center">Image</th>
    
                    <th class="text-center">source</th>
        
                    <th class="text-center">Action</th>
    
                </tr>
    
            </thead>
    
            <tbody>
                @if(count($source) > 0)

            @foreach($source as $row)

            <tr>

                <td class="text-center"> {{$row->id}}  </td>

                <td class="text-center">  {{$row->title}}  </td>

                <td class="text-center"> {{$row->description}} </td>

                <td class="text-center">  <img src="{{$row->image}}" style="height:50px" class="img-fluid">  </td>

                <td class="text-center"> <a href="{{$row->source}}" style="color: black;"> <b>Source link</b> </a> </td>


                <td class="text-center">

                    <div class="btn-group btn-group-xs">
                    @if($row->status==0)

                        <a href="{{route('edit_source', array('id' => $row->id))}}" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-check"></i></a>
                        @else
                        <button type="button" class="btn btn-success">Approved</button>    
                        @endif

                    </div>

                </td>

            </tr>
            
            @endforeach
            @else

            <p>No Product stored</p>

            @endif
            
            </tbody>

           
    
        </table>
    
      
    
    
    </div>
    </section>
    <!-- Dashboard Ecommerce ends -->
    
    </div>
    </div>
    </div>


 

@endsection
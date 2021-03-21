@extends('layout.buyer_app')

@section('content')
<div class="bg-white boxer container mt-3">
<h3 class="h3 text-center mt-5"> Order List</h3>
<center><div>
    @if(Session::has('success'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif
        </div></center>
    <div class="table-responsive">
        <table class="table table-borderless table-hover table-md table-lg">
            <thead>
                 <tr>
                     <th class="text-center">ID </th>
                     <th class="text-center">PRODUCT NAME</th>
                     <th class="text-center">TOTAL PRICE</th>
                     <th class="text-center">PAID BY</th>
                 </tr>
            </thead>
             <tbody>
                 @if(count($order) > 0)
                 @php
                 $counter = 0;
             @endphp
                 @foreach ($order as $row)
               <tr>
                   <td class="text-center" style=" padding: 30px 0;">{{++$counter}}</td>
               <td class="text-center" style=" padding: 30px 0;" scope="row">{{$row->id}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">{{$row->product_name}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">{{$row->total_price}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">{{$row->paid_by}}</td>
               </tr>
               @endforeach
              @else
              No Record Found
              @endif

             </tbody>
           </table>
    </div>
    <div class="modal fade" id="description" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Settings</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
           <p id="shower" class="pop_up_data"></p>
            </div>

          </div>
        </div>
      </div>
      <a href="{{route('report')}}" class="btn btn-primary">Report generate</a>
      <br><br>
</div>

<script>
    $('.clicker').click(function()
    {
        var text=$(this).attr('id');
        $('#shower').html(text);
    });
</script>
@endsection

@include('superadmin.navbar')

<!-- [ Main Content ] start -->


<section class="pcoded-main-container">
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show {{ Session::get('alert-class', 'alert-success') }}" role="alert">
    {{ Session::get('success') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show  {{ Session::get('alert-class', 'alert-danger') }}" role="alert">
		{{ Session::get('error') }}					
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
    @endif
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Host List</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Host list</a></li>
                            <li class="breadcrumb-item"><a href="#!">Host Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ basic-table ] start -->
          
            <!-- [ dark-table ] end -->
            <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pending Requests</h5>
                        <span class="d-block m-t-5">Total Requests: {{$request1}}</span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                      
                                        <th>Email</th>
                                        <th>Date / Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($request) > 0)
          @php
          $counter = 0;
      @endphp
          @foreach ($request as $row)
                                    <tr>

                                        <td>{{++$counter}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td>
                                        <a href="{{route('reject_researcher',array('id'=>$row->id))}}" class="btn btn-outline-danger"> Reject </a>
                 <a href="{{route('accept_researcher',array('id'=>$row->id))}}" class="btn btn-outline-success"> Accept </a>
                                        </td>
                                    </tr>
                                    @endforeach
          @else
          <div class="alert alert-primary" role="alert">
							No Record Found
						</div>
          @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Host List</h5>
                        
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>No. </th>
                
                <th >Name</th>
              
                <th>Email</th>
                <th>Status</th>
                <th>Date / Time</th>
                <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($researcher) > 0)
            @php
            $counter = 0;
        @endphp
            @foreach ($researcher as $row)
                                    <tr>

                                        <td>{{++$counter}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>  @if($row->status == 1)
               Active
               @endif
               @if($row->status == 2)
               Rejected
               @endif
               @if($row->status == 3)
               Inactive
               @endif</td>
               <td>{{$row->created_at}}</td>
               
                                        <td>
                                        @if($row->status == 1)
                   <a href="{{route('deactive_researcher',array('id'=>$row->id))}}" class="btn btn-outline-primary"> InActive </a>
                   @endif
                   @if($row->status == 3 || $row->status == 2)
                   <a href="{{route('del_researcher',array('id'=>$row->id))}}" class="btn btn-outline-danger"> Delete </a>
                   @endif
                                        </td>
                                    </tr>
                                    @endforeach
          @else
          <div class="alert alert-primary" role="alert">
							No Record Found
						</div>
          @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->
            <!-- [ Contextual-table ] start -->
            <!-- [ Contextual-table ] end -->
            <!-- [ Background-Utilities ] start -->
            
            <!-- [ Background-Utilities ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>



</body>
</html>

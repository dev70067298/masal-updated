@extends('layout.web')
@section('content')

<div class="main-content" id="main" role="main">


    <div class="listing-cmp common-cmp bootstrap-iso  moncheri-cmp">
    
    
    
    <section class="section-listing section-listing-moncheri">
    <div class="container">
    <div class="row">
    
    
    
    <div class="listing-content listing-moncheri listing-content-main">
    <div class="list">
    <div class="list-item hidden-gt-sm">
    
    
    
    <div class="showcase plp-hero">
    <div class="content-blocks">
    
    <div class="content-block content-title">
    <h2
    role="heading" aria-level="1">
    Modern Romance
    </h2>
    </div>
    <div class="content-block content-count">
    <p>
    79 items
    </p>
    </div>
    
    
    
    
    </div>
    </div>
    
    </div>
    
    <div class="list-item filter-controls-item hidden-gt-sm">
    <div class="control-panels">
    <div class="control-panel mobile-filter-buttons">
        <div class="list">
            <div class="list-item">
                <label class="mobile-control control btn-filter"
                        toggle-accordeon=".filters-accordeon">
                    <span>Filter By</span>
                        <label class="col-md-12 control-label"> Enter Page Name <span style="color: red"> * </span></label>
                    <i class="icon-syvo icon-chevron-down sign" aria-hidden="true"></i>
                </label>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    <div class="list-item layout-controls-item hidden-gt-sm">
    <div class="control-panels">
    
    <div class="control-panel layout-controls">
    <div class="list" role="list" 
    aria-label="Layout Controls">
    <div class="list-item" 
    role="listitem">
    <span
    class="layout-control control active" 
    data-layout-col="3" 
    role="button"
    aria-label="Switch layout to 3 columns">
    <i class="icon-syvo icon-layout-row-col-3" aria-hidden="true"></i>
    </span>
    </div>
    <div class="list-item" 
    role="listitem">
    <span
    class="layout-control control" 
    data-layout-col="2" 
    role="button"
    aria-label="Switch layout to 2 columns">
    <i class="icon-syvo icon-layout-row-col-2" aria-hidden="true"></i>
    </span>
    </div>
    <div class="list-item" 
    role="listitem">
    <span
    class="layout-control control" 
    role="button"
    data-layout-col="1" 
    aria-label="Switch layout to 1 columns">
    <i class="icon-syvo icon-layout-col-1" aria-hidden="true"></i>
    </span>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    
    
    <div class="list-item desktop-left">
    <div class="control-panels">
    
    <div class="control-panels aside-filters has-sticky-submit" data-property="sticky-submit-parent">
    <div class="control-panel hidden-xs hidden-sm">
    <div class="control-heading">
    <h2>Filter By</h2>
    <p class="alert alert-danger warning" style="display: none;">Select Atleast One Category</p>
    </div>
    </div>
    
    <form @if(isset($sil)) action="{{route('filter_sil',array('id'=>$sil->id))}}" @else action="{{route('filter',array('id'=>$cat->id))}}" @endif method="POST" id="filter_form">
        @csrf
    <div class="control-panel filters-accordeon" plp-filter>
    <div class="panel-group">
    
    


    <div class="control-btns sticky-submit" data-property="sticky-submit">
        <input type="submit" name="submit" value="Apply Filter" id="filter" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-success-invert">
    
    </div>
    </div>
    </form>
    </div>
    
    </div>
    </div>
    
    
    
    
    
    
    
    <div class="list-item hidden-sm hidden-xs">
    
    
    
    <div class="showcase plp-hero">
    <div class="content-blocks">
    
    <div class="content-block content-title">
    <h2
    role="heading" aria-level="1">
    @if(isset($sil))
    {{ $sil->name }}
    @else
    {{$cat->name}}
    @endif
    </h2>
    </div>
    <div class="content-block content-count">
    <p>
    {{count($products)}} items
    </p>
    </div>
    
    
    
    
    </div>
    </div>
    
    </div>
    
   
    <div class="list-item">
    
    <div class="product-list">
    <div class="list" data-list="products" 
    role="listbox" aria-label="Product List">
    

    @foreach ($products as $row)
    <div class="list-item" data-layout-width 
    role="option" aria-label="Masal Kalani">
    
    <div class="product mc-item" data-property="parent" data-product-id="522">
    <div class="product-images">
    <div class="product-images--list list" data-list="images">
    <div class="list-item">
    <a href="{{route('detail', array('id' => $row->styleNumber))}}" class="product-image has-background"
    aria-label="Go to Masal Kalani product details page"
    style="background:url({{asset('images/'.$row->image1)}});  background-size:cover;" data-img="default">
    <img src="{{ asset('images/'.$row->image1) }}" alt="Masal Kalani"/>
    </a>
    </div>
    </div>
    <div class="product-images--top controls controls-top controls-right">
    <div class="list">
    
    <div class="list-item">
    
    
    <div
    class="control btn color-favorite "
    data-trigger="add-wishlist" data-product-id="522">
   
    </div>
    </div>
    </div>
    </div>
    
    
    </div>
    <div class="descriptions">
    <div class="description description-title">
    
    <h4 title="Masal Kalani">
    <span data-layout-font="">{{$row->name}} | #{{$row->styleNumber}}</span>
    </h4>
    
    
    </div>
    <div class="description description-options description-prices placeholder">
    <div class="prices">
    <div class="list">
    <div class="list-item">
    <div class="price placeholder"></div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="description description-options description-colors placeholder">
    <div class="colors">
    <div class="list">
    <div class="list-item">
    <div class="color placeholder"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
@endforeach


    </div>
    </div>                    
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <center>
    {{$products->links()}}
    </center>
    
    </div>
    
    
    
    </div>


    <script>
            var sil = 0;
            var neck = 0;
            var sleeve = 0;
            var fiber = 0;
            
        var form = document.getElementById('filter_form');
        form.addEventListener('submit', function(event) 
        {
            $("input:checkbox[class=filter_1]:checked").each(function () {
                fiber++;
            });
            
            
            $("input:checkbox[class=filter_2]:checked").each(function () {
                neck++;
            });
            
            
            $("input:checkbox[class=filter_3]:checked").each(function () {
                sil++;
            });
            
            
            $("input:checkbox[class=filter_4]:checked").each(function () {
                sleeve++;
            });

            if(fiber == 0 && neck == 0 && sil == 0 && sleeve == 0)
            {
                event.preventDefault();
                $('.warning').attr('style','block');
            } 


        });
    </script>

   


@endsection
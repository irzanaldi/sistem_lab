@extends('layouts.home')
@section ('tittle', 'Dasboard')
@section('content')
<div  class="row">
    <div class="col-md-6">
      <div class="card ">
         <div class="card-header ">
            <h4 class="card-title">2017 Sales</h4>
                <p class="card-category">All products including Taxes</p>
    
            </div>
                                <div class="card-body ">
                                    <div id="chartActivity" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
@endsection

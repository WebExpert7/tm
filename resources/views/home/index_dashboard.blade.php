@extends('layouts.dashlayout')

@section('content')
<script src="{{ asset('js/customization/dashboard/chart_show.js') }}"></script>

<div class="row">
        <div class="col-sm-8 col-xs-8 col-sm-offset-2 col-xs-offset-2">

            <div class="tile-stats tile-purple">
                <div class="icon"><img src="{{ asset('images/logo_dash_mark.png') }}" width="180" alt="" /></div>
                <div class="num">Join the Decentralized Revolution</div>
            </div>
    
        </div>
</div>

</br>
</br>

<div class="row">
    <div class="col-sm-7 col-xs-6">

            <div class="tile-progress tile-blue">
					
                <div class="tile-header">
                    <h2 style= "color: white;">1 ETH = 4000 TRM for Presale</h2>
                </div>
                
                <div class="tile-progressbar">
                    <span data-fill="78%" style="width: 78%;"></span>
                </div>
                
                <div class="tile-footer">
                    <h3 style="color : #f56954;">
                        <span id="round_time" class="pct-counter">Presale</span>
                    </h3>

                </div>
            </div>

    </div>

    <div class="col-sm-5 col-xs-6">

        <div class="tile-stats tile-aqua">
            <div class="icon"><img src="{{ asset('images/ethereum_icon.png') }}" width="40" alt="" /></div>
            <div style="text-align: center">
                <span style="font-size: 38px; font-weight: bold; color: white;">ETH Balance : 2.00</span>
            </div>
        </div>
        <div class="tile-stats tile-cyan">
            <div class="icon"><img style="margin-right: 7px;" src="{{ asset('images/trm_icon_black.png') }}" width="25" alt="" /></i></div>
            <div style="text-align: center">
                <span style="font-size: 38px; font-weight: bold; color: white;">TRM Balance : 200</span>
            </div>
        </div>

    </div>
    
</div>

<br />
<br />
<br />

<div class="row">
    
        <form id="rootwizard" method="post" action="" class="form-horizontal form-wizard">
			
            <div class="steps-progress" style="margin-left: 7.14286%; margin-right: 7.14286%;">
                <div class="progress-indicator" style="width: 100%;"></div>
            </div>
            
            <ul>
                <li class="completed">
                    <a href="#tab1" data-toggle="tab"><span>Step1</span><p>Deposit ETH</p></a>
                </li>
                <li class="completed">
                    <a href="#tab2" data-toggle="tab"><span>Step2</span><p>Exchange ETH for TRM</p></a>
                </li>
                <li class="completed">
                    <a href="#tab3" data-toggle="tab"><span>Step3</span><p>Trade and Earn</p></a>
                </li>
            </ul>
            
            <div class="tab-content">
                
                <div class="tab-pane" id="tab1">1</div>
                <div class="tab-pane" id="tab2">2</div>
                <div class="tab-pane" id="tab3">3</div>
                
                
            </div>
        </form>

</div>
<br />
<br />
<br />

<div class="row">

    <div class="col-sm-offset-1 col-sm-3">
        
        <div class="tile-title tile-orange">
            
            <div class="icon">
                <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<span>{{ Auth::user()->name }}</span>
            </div>
            
            <div class="title">
                <h3><i class="entypo-mail"></i>&nbsp;<sapn>{{ Auth::user()->email }}</span></h3>
                </br>
            </div>
        </div>
        
    </div>

    <div class="col-sm-offset-1 col-sm-6">
        <div class="tile-progress tile-primary">
            
            <div class="tile-header">
                <h3>Team</h3>
            </div>
            
            <div class="tile-progressbar">
                <span data-fill="65.5%" style="width: 65.5%;"></span>
            </div>
            
            <div class="tile-footer">
                <div class="row">
                    <div class="col-sm-4">
                        <div><i class="fa fa-shopping-cart"></i>&nbsp;<span class="key">Referal Link</span></div>
                    </div>
                    <div class="col-sm-8 pull-left">
                        <div class="value">
                            @if(Auth::user()->affiliate_id)
                                <input type="text" readonly="readonly" class="form-control input-transparent" style=""
                                    value="{{url('/register'.'/ref/'.Auth::user()->affiliate_id)}}">
                            @endif
                        </div>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-sm-4">
                        <div><i class="fa fa-user-plus"></i></i>&nbsp;<span class="key">Members</span></div>
                    </div>
                    <div class="col-sm-8 pull-left" style="text-align: left;">
                        <span class="badge badge-danger">5</span>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-sm-4">
                        <div><img src="{{ asset('images/trm_icon_white.png') }}" width="10" alt="" />&nbsp;<span class="key">Bonus TRM</span></div>
                    </div>
                    <div class="col-sm-8 pull-left" style="text-align: left;">
                        <span class="badge badge-default">30</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

@extends('layouts.dashlayout')

@section('content')
<div class="content container">
    <h2 class="page-title">Be Part of the Decentralized Revolution</h2>
    <div class="row">
            <div class="col-md-8">
                </br>
                <div class="box">
                    <div class="big-text">
                        <h3><span style="font-weight: bold;">1 ETH = 40000TRM</span> <span style="font-size: 15px;"> for</span> <span style="color: #41d628;">Presale</span></h3>
                    </div>
                    <div class="big-text">
                        <h3 style="font-weight: bold;"><span style="font-size: 15px;">Presale in &nbsp;</span><span id="round_time"></span></h3>
                    </div>
                    <div class="big-text">
                        <h3 style="font-weight: bold;"></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                </br>
                <div class="box">
                    <div class="big-text">
                        <h3><i class="fa fa-btc"></i> BTC <span style="font-size: 13px;">Balance</span> : <span style="font-weight: bold;">0.25</span></h3>
                    </div>
                    <div class="big-text">
                        <h3><i style="font-size: 15px;" class="fa fa-caret-right"></i> ETH <span style="font-size: 13px;">Balance</span> : <span style="font-weight: bold;">2.00</span></h3>
                    </div>
                    <div class="big-text">
                        <h3><i style="font-size: 15px;" class="fa fa-caret-right"></i> TRM <span style="font-size: 13px;">Balance</span> : <span style="font-weight: bold;">200</span></h3>
                    </div>
                </div>
            </div>
    </div>
    </br></br>
        {{--  <footer class="content-footer">
            Light Blue 4.0 Ajax Version - Made by <a href="https://flatlogic.com" rel="nofollow noopener noreferrer" target="_blank">Flatlogic</a>
        </footer>  --}}
    <div class="row">
        <div class="col-md-4 text-center">
            <section class="widget">
            </br><header>
                    <h3 style="color: #41d628;"><i class="fa fa-arrow-right"></i>
                        Step 1
                    </h3>  
                </br>						
                    <h4>Make a deposit of BTC or ETC</h4>						
                </br>  						
                </header> </br>                
            </section>
        </div>
        <div class="col-md-4 text-center">
            <section class="widget">
                    </br><header>
                    <h3 style="color: #41d628;"><i class="fa fa-arrow-right"></i>
                        Step 2
                    </h3>  
                        </br>						
                    <h4>Exchange BTC/ETH of TRN when the presale open</h4> </br> 						
                </header> </br> 
            </section>
        </div>
        <div class="col-md-4 text-center">
            <section class="widget">
                    </br><header>
                    <h3 style="color: #41d628;"><i class="fa fa-arrow-right"></i>
                        Step 3
                    </h3>  
                        </br>						
                    <h4>Trade and earn Passive incone when plateform launches</h4>  							
                </header> </br> 
            </section>
        </div>
    </div>
    <div class="row"></br></br></br></br></div>
    <div class="row">
        <div class="col-md-3 col-md-offset-1 text-center">
            <section class="widget">
                </br><header>
                     <h5>
                        <i class="fa fa-user"></i>&nbsp;&nbsp; Username : {{ Auth::user()->name }}
                    </h5>  
                        </br>						
                    <h5>
                        <i class="fa fa-envelope"></i> &nbsp;&nbsp; Email : {{ Auth::user()->email }}
                    </h5>						
                </header> </br>                
            </section>
        </div>
        <div class="col-md-5">
            <section class="widget widget-overview">
                <header>
                    <h4>
                        <i class="fa fa-lightbulb"></i>
                        Team
                    </h4>
                </header>
                <div class="body">
                    <ul class="overall-stats">
                        <li>
                            <div class="icon pull-left">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <span class="key">Referal Link</span>
                            <div class="value pull-right">
                                @if(Auth::user()->affiliate_id)
                                    <input type="text" readonly="readonly" class="form-control input-transparent" style="width:250px;"
                                        value="{{url('/register'.'/ref/'.Auth::user()->affiliate_id)}}">
                                @endif
                            </div>
                        </li>
                        <li>
                            <div class="icon pull-left">
                                <i class="fa fa-user"></i>
                            </div>
                            <span class="key">Members</span>
                            <div class="value pull-right">
                                <span class="badge badge-danger">5</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon pull-left">
                                <i class="fa fa-btc"></i>
                            </div>
                            <span class="key">Bonus TRM</span>
                            <div class="value pull-right">
                                <span class="badge badge-default">30</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
</div>
@endsection

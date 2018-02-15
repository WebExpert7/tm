@extends('layouts.dashlayout')

@section('content')
<script src="{{ asset('js/customization/dashboard/chart_show.js') }}"></script>

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <h1>Countdown Until Presale</h1>
            <h3 id="round_time"></h3>
        </div>
    </div>
</div>

</br>
</br>

<div class="row">
    <div class="col-sm-offset-2 col-sm-3">
        <div class="tile-stats tile-neon-red">
            <div class="icon"><img src="{{ asset('images/ethereum_icon.png') }}" width="40" alt="" /></div>
            <div class="fixed_num" data-start="0.00" data-end="2.00" data-postfix="" data-duration="1400" data-delay="0">2.00</div>
            
            <h3>Total ETH</h3>
        </div>	
    </div>

    <div class="col-sm-offset-2 col-sm-3">
        <div class="tile-stats tile-primary">
            <div class="icon"><img style="margin-right: 7px; padding-bottom: 4px;" src="{{ asset('images/trm_icon_white.png') }}" width="25" alt="" /></div>
            <div class="fixed_num" data-start="0" data-end="213" data-postfix="" data-duration="1400" data-delay="0">213</div>
            
            <h3>Total TRM</h3>
        </div>	

    </div>
    
</div>

<br />
<br />
<br />

<div class="row">
    
        <div class="col-sm-offset-1 col-sm-10">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Round</th>
                        <th>Date</th>
                        <th>Price(TRM/TEH)</th>
                        <th>Available TRM</th>
                        <th>Sold TRM</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Presale</td>
                        <td>March 1st</td>
                        <td>4000</td>
                        <td>1,000,000</td>
                        <td>0</td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>March 10th</td>
                        <td>3500</td>
                        <td>3,5000,000</td>
                        <td>0</td>
                    </tr>
                
                    <tr>
                        <td>2</td>
                        <td>March 17th</td>
                        <td>3000</td>
                        <td>4,000,000</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>March 23rd</td>
                        <td>2500</td>
                        <td>4,500,000</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>April 1st</td>
                        <td>2000</td>
                        <td>5,000,000</td>
                        <td>0</td>
                    </tr>

                </tbody>
            </table>
            
        </div>

</div>
<br />
<br />
<br />

<div class="row">
    <div class="col-sm-offset-1 col-sm-10">
        <h2>Token Sale Transactions</h2>
        <table class="table table-bordered datatable" id="token_transaction">
            <thead>
                <tr>
                    <th data-hide="phone">Transaction ID</th>
                    <th>Amount</th>
                    <th data-hide="phone">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td>Das0df87a0sdf89agf0a77890987gsdf</td>
                    <td>300</td>
                    <td>07/03/2018</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

@endsection

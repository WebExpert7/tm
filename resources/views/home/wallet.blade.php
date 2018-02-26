@extends('layouts.dashlayout')

@section('content')
<h1>Wallet</h1>

<div class="wallet-top-message">
</div>

<br />

<div class="row">

    <div class="col-sm-6 col-xs-12">

        <div class="wallet-balance-pannel wallet-custom-pannel wallet-total-eth">
            <div>
                <span>Total ETH</span>
                <br />
                <number id="balance_eth"></number>
            </div>
            <div class="icon"><img src="{{ asset('images/ether_black.png') }}" /></div>
        </div>

    </div>

    <div class="col-sm-6 col-xs-12">

        <div class="wallet-balance-pannel wallet-custom-pannel wallet-total-trm">

            <div>
                <span>Total TRM</span>
                <br />
                <number id="balance_tokens"></number>
            </div>
            <div class="icon"><img src="{{ asset('images/trm_icon_black.png') }}" /></div>
        </div>

    </div>

</div>

<br />
<br />
<div class="row">
    <div class="col-sm-12 col-xs-12">
        <h2>Your ETH and TRM Wallet Address</h2>
        <div class="col-sm-6 col-xs-12">
            <br />
            <br />
            <div style="width: 303px; margin: auto;">
                <h4>Public Address</h4>
                <input id="trm_addr" type="text" readonly="readonly" class="form-control input-transparent" style="">
            </div>
            <br />
            <br />
        </div>
        <div class="col-sm-6 col-xs-12">
            <img id="ethqr" src="https://chart.googleapis.com/chart?chs=180x180&amp;cht=qr&amp;chl=0xcefd33bf82b603d98fef874d149f5c2c89bbbfaa&amp;choe=UTF-8&amp;chld=L|0" width="180px" height="180px" style="display: block; margin: auto;" />
        </div>
    </div>
</div>

<br />
<br />

<div class="row">
    <div class="col-sm-12 col-xs-12">
        <h2>ETH Sale Transactions</h2>
        <table class="table table-bordered datatable" id="token_transaction">
            <thead>
                <tr>
                    <th data-hide="phone">Transaction ID</th>
                    <th>Amount</th>
                    <th data-hide="phone">Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td>Das0df87a0sdf89agf0a77890987gsdf</td>
                    <td>300</td>
                    <td>07/03/2018</td>
                    <td>Done</td>
                </tr>
                <tr class="odd gradeX">
                    <td>Das0df87a0sdf89agf0a77890987gsdf</td>
                    <td>300</td>
                    <td>07/03/2018</td>
                    <td>Done</td>
                </tr>
                <tr class="odd gradeX">
                    <td>Das0df87a0sdf89agf0a77890987gsdf</td>
                    <td>300</td>
                    <td>07/03/2018</td>
                    <td>Done</td>
                </tr>
                <tr class="odd gradeX">
                    <td>Das0df87a0sdf89agf0a77890987gsdf</td>
                    <td>300</td>
                    <td>07/03/2018</td>
                    <td>Done</td>
                </tr>
            </tbody>
            </tfoot>
        </table>
    </div>

</div>

@endsection

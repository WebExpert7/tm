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
                <number>2.0</number>
            </div>
            <div class="icon"><img src="{{ asset('images/ether_black.png') }}" /></div>
        </div>

    </div>

    <div class="col-sm-6 col-xs-12">

        <div class="wallet-balance-pannel wallet-custom-pannel wallet-total-trm">

            <div>
                <span>Total TRM</span>
                <br />
                <number>2.0</number>
            </div>
            <div class="icon"><img src="{{ asset('images/trm_icon_black.png') }}" /></div>
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

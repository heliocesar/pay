@extends('master')
@section('content')
    <div class="container">
        {{ Form::open(['route' => ['store-pay-boleto']]) }}
        <h2>Processar Pagamento Boleto</h2>
        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">dueDate *</label>
                    <input type="date" class="form-control" placeholder="" id="dueDate" name="dueDate">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>
        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">value *</label>
                    <input type="text" class="form-control" id="value" placeholder="value" name="value">
                </div>
            </div>
            <!--  col-md-6   -->
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">description</label>
                    <input type="text" class="form-control" id="description" placeholder="description" name="description">
                </div>
            </div>
            <!--  col-md-6   -->

        </div>
        <!--  row   -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="externalReference">externalReference *</label>
                    <input type="text" class="form-control" id="externalReference" placeholder="externalReference" name="externalReference">
                </div>
            </div>
        </div>

             
        {!! Form::hidden('customer', $customer) !!}
        {!! Form::hidden('billingType', "BOLETO") !!}

        <button type="submit" class="btn btn-primary">Submit</button>
        {{ Form::close() }}
    </div>
@endsection

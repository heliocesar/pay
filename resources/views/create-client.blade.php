@extends('master')
@section('content')
    <div class="container">
        {{ Form::open(['route' => ['store-client']]) }}
        <h2>Processar Pagamento</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first">Name</label>
                    <input type="text" class="form-control" placeholder="" id="name" name="name">
                </div>
            </div>
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">CPF/CNPJ</label>
                    <input type="text" class="form-control" placeholder="" id="cpfCnpj" name="cpfCnpj">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>
        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="phone" name="phone">
                </div>
            </div>
            <!--  col-md-6   -->
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">mobile Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="mobilePhone" name="mobilePhone">
                </div>
            </div>
            <!--  col-md-6   -->

        </div>
        <!--  row   -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                </div>
            </div>
        </div>

        <!--  ENDERECO   -->
        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">postalCode</label>
                    <input type="text" class="form-control" id="postalCode" placeholder="postalCode" name="postalCode">
                </div>
            </div>
            <!--  col-md-6   -->
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">address</label>
                    <input type="text" class="form-control" id="address" placeholder="address" name="address">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">addressNumber</label>
                    <input type="text" class="form-control" id="addressNumber" placeholder="addressNumber" name="addressNumber">
                </div>
            </div>
            <!--  col-md-6   -->
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">complement</label>
                    <input type="text" class="form-control" id="complement" placeholder="complement" name="complement">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        {{ Form::close() }}
    </div>
@endsection

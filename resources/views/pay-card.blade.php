@extends('master')
@section('content')
    <div class="container">
        {{ Form::open(['route' => ['store-pay-card']]) }}
        <h2>Processar Pagamento Cartão</h2>
        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">dueDate *</label>
                    <input type="date" class="form-control" placeholder="" id="dueDate" name="dueDate">
                </div>
            </div>
            <!--  col-md-6   -->
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">value *</label>
                    <input type="text" class="form-control" id="value" placeholder="value" name="value">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>
        <div class="row">

            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">description</label>
                    <input type="text" class="form-control" id="description" placeholder="description"
                        name="description">
                </div>
            </div>
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="externalReference">externalReference *</label>
                    <input type="text" class="form-control" id="externalReference" placeholder="externalReference"
                        name="externalReference">
                </div>
            </div>
        </div>
        <!--  row   -->
        <!--  creditCard   -->
        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">holderName *</label>
                    <input type="text" class="form-control" placeholder="" id="holderName" name="holderName">
                </div>
            </div>
            <!--  col-md-6   -->
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="number">number *</label>
                    <input type="text" class="form-control" id="number" placeholder="number" name="number">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>
        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="expiryMonth">expiryMonth *</label>
                    <input type="number" class="form-control" id="expiryMonth" placeholder="expiryMonth"
                        name="expiryMonth">
                </div>
            </div>
            <!--  col-md-6   -->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="expiryYear">expiryYear *</label>
                    <input type="number" class="form-control" id="expiryYear" placeholder="expiryYear" name="expiryYear">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ccv">ccv *</label>
                    <input type="number" class="form-control" id="ccv" placeholder="ccv" name="ccv">
                </div>
            </div>
        </div>
        <!--  row   -->

        <!--  creditCardHolderInfo   -->

        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="first">Name *</label>
                <input type="text" class="form-control" placeholder="" id="name" name="name">
            </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="last">CPF/CNPJ *</label>
                <input type="text" class="form-control" placeholder="" id="cpfCnpj" name="cpfCnpj">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>
    <div class="row">
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Phone Number *</label>
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
                <label for="email">Email address *</label>
                <input type="email" class="form-control" id="email" placeholder="email" name="email">
            </div>
        </div>
    </div>

    <!--  ENDERECO   -->
    <div class="row">
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">postalCode *</label>
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
                <input type="text" class="form-control" id="addressNumber" placeholder="addressNumber"
                    name="addressNumber">
            </div>
        </div>
        <!--  col-md-6   -->
        <!--  col-md-6   -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="addressComplement">addressComplement</label>
                <input type="text" class="form-control" id="addressComplement" placeholder="addressComplement"
                    name="addressComplement">
            </div>
        </div>
        <!--  col-md-6   -->
    </div>

    {!! Form::hidden('customer', $customer) !!}
    {!! Form::hidden('billingType', 'CREDIT_CARD') !!}

    <button type="submit" class="btn btn-primary">Submit</button>
    {{ Form::close() }}
    </div>
@endsection

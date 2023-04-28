@extends('master')
@section('content')
    <div class="container">
        <h2>Dados Pagamento PIX</h2>
        <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <img src="data:image/jpeg;base64, {{ $pix->encodedImage }}" />
                </div>
            </div>
            <!--  col-md-6   -->
            <!--  col-md-6   -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">payload</label>
                    <input type="text" class="form-control" id="value" value="{{ $pix->payload }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">expirationDate</label>
                    {{ Carbon\Carbon::parse($pix->expirationDate)->format('d/m/Y H:i') }}
                </div>
            </div>
            <!--  col-md-6   -->
        </div>
    </div>
@endsection

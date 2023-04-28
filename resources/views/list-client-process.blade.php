@extends('master')

@section('title', $title ?? __('Clientes'))

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">@yield('title')</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('id') }}</th>
                                    <th>{{ __('vencimento') }}</th>
                                    <th>{{ __('forma de pagamento') }}</th>
                                    <th>{{ __('situacao') }}</th>
                                    <th>{{ __('link') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td class="align-middle">{{ $payment->id }}</td>
                                        <td class="align-middle">
                                            {{$payment->dueDate}}
                                        <td class="align-middle">{{ $payment->billingType }}</td>
                                        <td class="align-middle">{{ $payment->status }}</td>
                                        <td class="align-middle">
                                            @if ($payment->billingType === 'PIX')
                                                <a href="{{ route('show-pix', $payment->id) }}" class="btn btn-primary"
                                                    data-toggle="tooltip" title="{{ __('link') }}"> ver -
                                                    {{ $payment->billingType }}
                                                </a>
                                            @else
                                                <a href="{{ $payment->invoiceUrl }}" class="btn btn-primary"
                                                    data-toggle="tooltip" title="{{ __('link') }}"> ver -
                                                    {{ $payment->billingType }}
                                                </a>
                                            @endif


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

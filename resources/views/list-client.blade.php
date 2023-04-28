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
    <div class="text-right">
        <!-- end page title -->
        <a href="{{ route('create-client') }}" class="btn btn-primary text-right" data-toggle="tooltip"
            title="{{ __('novo cliente') }}" style="margin-right: 5px;">
            Adicionar cliente
        </a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('id') }}</th>
                                    <th>{{ __('name') }}</th>
                                    <th>{{ __('email') }}</th>
                                    <th>{{ __('cpf') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>

                                        <td class="align-middle">{{ $customer->id }}</td>
                                        <td class="align-middle">{{ $customer->name }}</td>
                                        <td class="align-middle">{{ $customer->email }}</td>
                                        <td class="align-middle">{{ $customer->cpfCnpj }}</td>
                                        <td class="align-middle text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('list-client-process', $customer->id) }}"
                                                    class="btn btn-secondary" data-toggle="tooltip"
                                                    title="{{ __('lista de processos') }}" style="margin-right: 5px;">
                                                    lista de processos
                                                </a>
                                                <a href="{{ route('pay-boleto', $customer->id) }}" class="btn btn-primary"
                                                    data-toggle="tooltip" title="{{ __('gerar processos pagamento') }}"
                                                    style="margin-right: 5px;">
                                                    gerar boleto
                                                </a>
                                                <a href="{{ route('pay-pix', $customer->id) }}" class="btn btn-primary"
                                                    data-toggle="tooltip" title="{{ __('gerar processos pagamento') }}"
                                                    style="margin-right: 5px;">
                                                    gerar pix
                                                </a>
                                                <a href="{{ route('pay-card', $customer->id) }}" class="btn btn-primary"
                                                    data-toggle="tooltip" title="{{ __('gerar processos pagamento') }}">
                                                    gerar cartão
                                                </a>
                                            </div>
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

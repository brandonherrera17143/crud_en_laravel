@extends('layouts.app')

@section('template_title')
    {{ $tipoSangre->name ?? 'Show Tipo Sangre' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Sangre</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-sangres.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sangre:</strong>
                            {{ $tipoSangre->sangre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

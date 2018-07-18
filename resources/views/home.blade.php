@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <panel title="Painel">
                    Conteúdo do Painel
                    <div class="row">
                        <div class="col-md-4">
                            <panel title="Conteúdo 1" color="panel-success">
                                Texto do conteúdo 1
                            </panel>
                        </div>
                        <div class="col-md-4">
                            <panel title="Conteúdo 2">
                                Texto do conteúdo 2
                            </panel>
                        </div>
                        <div class="col-md-4">
                            <panel title="Conteúdo 3">
                                Texto do conteúdo 4
                            </panel>
                        </div>
                    </div>
                </panel>
            </div>
        </div>
    </div>
@endsection

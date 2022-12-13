@extends('layouts.main')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Artigo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('article.index') }}">Voltar</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Opa!</strong> Há algum problema com os campos preenchidos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($article, ['route' => ['article.update', $article->id], 'method' => 'PATCH']) !!}
        @include('components.form')
    {!! Form::close() !!}
@endsection
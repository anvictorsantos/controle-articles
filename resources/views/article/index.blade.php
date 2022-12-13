@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.5 CRUD Example #2</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('article.create') }}">Criar Novo Artigo</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nº</th>
            <th>Title</th>
            <th>Body</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($articles as $article)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->description }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('article.show', $article->id) }}">Visualizar</a>
                <a class="btn btn-primary" href="{{ route('article.edit', $article->id) }}">Editar</a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['article.destroy', $article->id], 'style' => 'display:inline']) !!}
                {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </table>

    {!! $articles->links() !!}
@endsection
@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

    <div class="container">
      <h3 class="center"> Lista de Cursos </h3>
      <div class="row">
          <table>
              <thead>
                <tr>
                  <th class="center">ID</th>
                  <th>Título</th>
                  <th>Descrição</th>
                  <th class="center">Imagem</th>
                  <th class="center">Publicado</th>
                  <th class="center">Ação</th>
                </tr>
              </thead>
              <tbody>
                @foreach($registros as $registro)

                  <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->titulo }}</td>
                    <td>{{ $registro->descricao }}</td>
                    <td><img width="60" src="{{ asset($registro->imagem) }}" alt="{{ $registro->titulo }}"/></td>
                    <td class="center">{{ $registro->publicado }}</td>
                    <td class="center">
                      <a class="btn deep-orange" style="width:90px;" href="{{ route('admin.cursos.editar',$registro->id) }}">Editar</a>
                      <a class="btn deep-red" style="width:90px;" href="{{ route('admin.cursos.deletar',$registro->id) }}">Deletar</a>
                    </td>
                  </tr>

                @endforeach
              </tbody>
          </table>
      </div>
      <div class="row">
        <a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
      </div>
    </div>

@endsection

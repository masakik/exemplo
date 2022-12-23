@extends('main')

@section('footer')
  Rodapé
@endsection

@section('content')
  @forelse ($livros as $livro)
    @include('livros.partials.fields')
  @empty
    Não há livros cadastrados
  @endforelse
@endsection

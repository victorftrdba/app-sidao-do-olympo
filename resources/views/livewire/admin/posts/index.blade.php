<div>
    <div class="container mt-5  bg-light rounded shadow p-4">
        <div class="row">
            <div class="col-12 mb-4">
                Bem-vindo, <i class="fas fa-user"></i> {{ Auth::user()->name }}.
            </div>
            <div class="col-12 mb-5">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-danger rounded-0" wire:click="logout">Voltar <i class="fas fa-undo-alt"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(count($posts) > 0)
                <table class="table-responsive table table-bordered text-center">
                    <thead>
                        <th>Título</th>
                        <th>Iframe do vídeo</th>
                        <th>Link do vídeo</th>
                        <th>Imagem</th>
                        <th>Criado em</th>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                {{ $post->iframe }}
                            </td>
                            <td>
                                {{ $post->link }}
                            </td>
                            <td>
                                {{ $post->image ?? 'Não existe' }}
                            </td>
                            <td>
                                {{ $post->created_at->format('d/m/Y H:i:s') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="text-center mb-4 fw-bold text-uppercase">
                    Nenhum resultado encontrado!
                </div>
                @endif
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

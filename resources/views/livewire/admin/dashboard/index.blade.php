<div>
    <div class="container mt-5  bg-light rounded shadow p-4">
        <div class="row">
            <div class="col-12 mb-4">
                Bem-vindo, <i class="fas fa-user"></i> {{ Auth::user()->name }}.
            </div>
            <div class="col-6 mb-5">
                @include('livewire.admin.dashboard.modal._modal_addPost')

                @include('livewire.admin.dashboard.modal._modal_addUser')

                @include('livewire.admin.dashboard.modal._modal_addImages')
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-header">
                        Lista de Postagens
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Última postagem adicionada</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary fw-bold" style="font-size:0.8rem">Ver lista de postagem <i class="fas fa-eye"></i></a>
                    </div>
                    <div class="card-footer text-muted">
                        0 posts
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-header">
                        Lista de Usuários
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Último usuário cadastrado</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary fw-bold" style="font-size:0.8rem">Ver lista de usuário <i class="fas fa-eye"></i></a>
                    </div>
                    <div class="card-footer text-muted">
                        0 usuários
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-header">
                        Galeria de Imagens
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Última imagem adicionada</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary fw-bold" style="font-size:0.8rem">Ver galeria de imagens <i class="fas fa-eye"></i></a>
                    </div>
                    <div class="card-footer text-muted">
                        0 imagens
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

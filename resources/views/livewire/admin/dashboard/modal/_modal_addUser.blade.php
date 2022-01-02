<button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal2">
    Adicionar usuário <i class="fas fa-plus-square"></i>
</button>

<div wire:ignore.self class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Novo usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row" wire:submit.prevent="addUser()">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="name">Nome</label>
                        <input type="text" wire:model="name" class="form-control" />
                    </div>

                    <div class="col-6 mb-3">
                        <label class="mb-2" for="email">E-mail</label>
                        <input type="email" wire:model="email" class="form-control" />
                    </div>

                    <div class="col-6 mb-3">
                        <label class="mb-2" for="password">Senha</label>
                        <input type="password" wire:model="password" class="form-control" />
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2 rounded-0" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary rounded-0">Adicionar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

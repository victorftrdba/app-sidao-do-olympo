<button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Adicionar postagem <i class="fas fa-plus-square"></i>
</button>

<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova postagem</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row" wire:submit.prevent="addPost()" enctype="multipart/form-data">

                    <div class="col-6 mb-3">
                        <label class="mb-2" for="title">Título</label>
                        <input type="text" wire:model="title" class="form-control" />
                    </div>

                    <div class="col-6 mb-3">
                        <label class="mb-2" for="iframe">Iframe do Vídeo</label>
                        <input type="text" wire:model="iframe" class="form-control" />
                    </div>

                    <div class="col-12 mb-3">
                        <label class="mb-2" for="description">Descrição</label>
                        <textarea wire:model="description" class="form-control" rows="8"></textarea>
                    </div>

                    <div class="col-6 mb-3">
                        <label class="mb-2" for="link">Link do Vídeo</label>
                        <input type="text" wire:model="link" class="form-control" />
                    </div>

                    <div class="col-6 mb-3">
                        <label class="mb-2" for="image">Imagem <small>(opcional)</small></label>
                        <input type="file" wire:model="image" class="form-control" />
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2 rounded-0" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary rounded-0">Adicionar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

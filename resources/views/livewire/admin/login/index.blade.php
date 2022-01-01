<div>
    <div class="container mt-5">
        <form wire:submit.prevent="login" class="row justify-content-center bg-light rounded shadow">

            <div class="col-12 text-center mb-5 text-uppercase mt-4">
                <h2 class="fw-bold">Faça seu login para acessar o painel</h2>

                @if($error)
                    <div class="alert alert-danger fw-bold">
                        {{ $error }}
                    </div>
                @endif

            </div>

            <div class="col-3">
                <label class="mb-2" for="email">E-mail</label>
                <input type="email" wire:model="email" class="form-control" />
            </div>

            <div class="col-3 mb-4">
                <label class="mb-2" for="password">Senha</label>
                <input type="password" wire:model="password" class="form-control" />
            </div>

            <div class="text-center mb-4">
                <button type="submit" class="btn btn-primary rounded-0 border-0">Logar</button>
            </div>

        </form>
    </div>
</div>

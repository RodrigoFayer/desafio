<div class="col-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title title-form">{{ $title ?? null }} </h3>
        </div>
        <div class="card-body">
            <form id="form-adicionar" action="{{ $url ?? '/' }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                {{ $form ?? null }}
            </form>
        </div>
        <div class="card-footer">
            {{ $back ?? null }}
            <button type="submit" form="form-adicionar" class="btn btn-primary float-right">Salvar</button>
        </div>
    </div>
</div>

{!! Form::model($model, [
    'route' => $model->exists ? ['buku.update', $model->id] : 'buku.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}


    <div class="form-group">
        <label for="" class="control-label">Penulis</label>
        {!! Form::text('penulis', null, ['class' => 'form-control', 'id' => 'penulis']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Judul</label>
        {!! Form::text('judul', null, ['class' => 'form-control', 'id' => 'judul']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Kota</label>
        {!! Form::text('kota', null, ['class' => 'form-control', 'id' => 'kota']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Penerbit</label>
        {!! Form::text('penerbit', null, ['class' => 'form-control', 'id' => 'penerbit']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Tahun</label>
        {!! Form::text('tahun', null, ['class' => 'form-control', 'id' => 'tahun']) !!}
    </div>

{!! Form::close() !!}

<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Penulis</th>
        <th>Judul</th>
        <th>Kota</th>
        <th>Penerbit</th>
        <th>Tahun</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->penulis }}</td>
        <td>{{ $model->judul }}</td>
        <td>{{ $model->kota }}</td>
        <td>{{ $model->penerbit }}</td>
        <td>{{ $model->tahun }}</td>
    </tr>
</table>

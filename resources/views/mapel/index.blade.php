@extends('layout.app')

@section('title')
Mapel
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Mapel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Mapel</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Mapel</h3>
            <div class="card-tools">
                <button type="button" onclick="addForm('{{route('mapel.store')}}')" class="btn btn-tool">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-hover text-nowrap">
                <thead>
                    <th>No.</th>
                    <th>Nama</th>
                </thead>
                @foreach ($mapel as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$item->nama}}</td>
                    <td>
                        <button onclick="editData()" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></button>
                        <a href="#" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                <tbody>

                </tbody>
            </table>      
            
        </div>
    </div>

</section>
@includeIf('mapel.form')
@endsection

@push('script')
    <script>
        function addForm(url){
            $('#modalForm').modal('show');
            $('#modalForm .modal-title').text('Tambah Data Mapel');            
        }

        function editData(){
            $('#modalForm').modal('show');
            $('#modalForm .modal-title').text('Edit Data Mapel');
            }
    </script>
@endpush
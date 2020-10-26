@extends('layouts.master')

@section('content')


    <div class="col-12">

        <div class="box box-warning">
            <div class="box-header">
                <p>
                <button class="btn text-white btn-warning btn-refresh">
                        <i class="fa fa-redo"></i>Refresh
                    </button>
                    <a class="btn text-white btn-primary" href="{{url('siswa')}}">
                        <i class="fa fa-arrow-left"></i>Kembali
                    </a>
                </p>
            
            </div>
            <div class="box-body">
            <form method="POST" action="{{ url('kandidat/add') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor urut</label>
                    <input type="number" name="no_urut" class="form-control" name="email" id="exampleInputEmail1" placeholder="Nomor Urut">
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Foto Paslon</label>
                    <input type="file" name="photo" id="exampleInputFile">
                </div>

                <div class="form-group">
                    <label for="name">Nama Calon Ketua</label>
                    <input type="text" class="form-control" name="calon_ketua" id="exampleInputEmail1" placeholder="Nama Calon Ketua">
                </div>

                <div class="form-group">
                    <label for="name">Nama Calon Wakil</label>
                    <input type="text" class="form-control" name="calon_wakil" id="exampleInputEmail1" placeholder="Nama Calon Wakil">
                </div>

                <div class="form-group">
                    <label for="name">Visi dan Misi</label>
                    <textarea name="visi_misi"  class="form-control summernote"></textarea>
                </div>
               
           
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            </div>
        </div>
    </div>


@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function  () {
        $('.btn-refresh').click(function (e) {
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
    })
</script>

@endsection
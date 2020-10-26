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
            <form method="POST" action="{{ url('siswa/'.$dt->id) }}" enctype="multipart/form-data">
                @csrf

                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="name" class="form-control" name="email" id="exampleInputEmail1" placeholder="Nomor Urut" value="{{$dt->nama }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="exampleInputFile" value="{{$dt->kelas}}">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Nama Calon Ketua" value="{{$dt->email}}">
                </div>

                <div class="form-group">
                    <label for="name">Ganti Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Nama Calon Wakil" value="{{$dt->password}}">
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
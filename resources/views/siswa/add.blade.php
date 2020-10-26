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
            <form method="POST" action="{{ url('siswa/add') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email ..." id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Name ..." id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="name">Kelas</label>
                    <input type="text" class="form-control" name="kelas" placeholder="Kelas ..." id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" placeholder="Password ..." id="exampleInputPassword1" name="password">
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
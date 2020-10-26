@extends('layouts.master')

@section('content')
<?php 
  $dt = \App\User::where('id', \Auth::user()->id)->first();
?>
 @if(\Auth::user()->id == 1)
            <div class="box-body">
                <p>
                    <button class="btn btn-warning btn-refresh text-white">
                    <i class="fa fa-redo"></i> Refresh
                    </button>
                
                    <a class="btn btn-success" href=" {{ url('siswa/add') }} " role="button">
                        <i class="fa fa-plus"></i>  Buat Akun
                    </a>
                </p>
            
            </div>
           
            <div class="table-responsive">
                <table id="example1" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td> {{ $e+1 }} </td>
                            <td> {{ $dt->nama }} </td>
                            <td> {{ $dt->kelas }} </td>
                            <td> {{ $dt->email }} </td>
                            <td> 
                                <a class="btn btn-warning text-white" href="{{url('siswa/'.$dt->id)}}" role="button">
                                    <i class="fa fa-edit"></i>  Edit
                                </a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

@endif

@endsection

@section('scripts')
<script src="{{url('../../ltex/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('../../ltex/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{url('../../ltex/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('../../ltex/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('../../ltex/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('../../ltex/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function  () {
        $('.btn-refresh').click(function (e) {
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        });
        $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
        });
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    })
</script>
<script>
 
</script>

@endsection
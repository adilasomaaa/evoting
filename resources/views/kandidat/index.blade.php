@extends('layouts.master')

@section('content')
<?php 
  $dt = \App\User::where('id', \Auth::user()->id)->first();
?>
 @if(\Auth::user()->id == 1)
    <div class="col-12">
 
        <div class="box box-warning">
            <div class="box-header">
                <p>
                <button class="btn btn-warning btn-refresh text-white">
                    <i class="fa fa-redo"></i> Refresh
                    </button>
                
                    <a class="btn btn-success" href=" {{ url('kandidat/add') }} " role="button">
                        <i class="fa fa-plus"></i>  Buat Kandidat
                    </a>
                </p>
            
            </div>
            <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Urut</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Calon Ketua</th>
                            <th scope="col">Calon Wakil</th>
                            <th scope="col">Visi Misi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td> {{ $e+1 }} </td>
                            <td> {{ $dt->no_urut }} </td>
                            <td> <img src="{{asset($dt->photo)}}" style="width:100px"> </td>
                            <td> {{ $dt->calon_ketua }} </td>
                            <td> {{ $dt->calon_wakil }} </td>
                            <td> {!! $dt->visi_misi !!} </td>
                            <td> 
                                <a class="btn btn-warning text-white" href="{{url('kandidat/'.$dt->id)}}" role="button">
                                    <i class="fa fa-edit"></i>  Edit
                                </a> 
                                <a class="btn btn-danger btn-hapus" href="{{url('kandidat/delete/'.$dt->id)}}" onclick="return confirm('yakin?');" >
                                    <i class="fa fa-trash"></i> Delete
                                </a> 
                                <a class="btn btn-success" href="{{url('kandidat/detail/'.$dt->id)}}" >
                                    <i class="fa fa-eye"></i> Detail
                                </a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@endif

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
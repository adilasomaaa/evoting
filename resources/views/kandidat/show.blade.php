@extends('layouts.master')

@section('content')

<div class="container justify-content text-center">
    <h2>
        <b>
            Nomor Urut : {{$dt->no_urut}}
        </b>
    </h2>
   
    <img src="{{asset($dt->photo)}}" style="width:500px;margin-bottom:10px"> 
  <div class="row">
    <div class="col">
        <h3>
         <b>  Calon Ketua : <br/>
        {{$dt->calon_ketua}} </b>
        </h3>
    </div>
    <div class="col">
        <h3>
          <b> Calon Wakil : <br/>
           {{$dt->calon_wakil}} </b>
        </h3>
    </div>
  </div>
  <div class="row">
      <div class="col">
          <h3>
              Visi Misi  :  
          </h3>
        <hr/>
          {!! $dt->visi_misi !!}
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
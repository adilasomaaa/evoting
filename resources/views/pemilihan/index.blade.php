@extends('layouts.master')

@section('content')


 
        @foreach($data as $dt)
        
           <div class="col-12">
             <div class="box-body">
             <div class="card bg-light">
                 <div class="card-header text-muted border-bottom-0">
                   Nomor Urut : {{$dt->no_urut}}
                 </div>
                 <div class="card-body pt-0">
                   <div class="row">
                     <div class="col-7">
                       <h2 class="lead">Nama Calon Ketua : <b>{{$dt->calon_ketua}}</b></h2>
                       <h2 class="lead">Nama Calon Wakil : <b>{{$dt->calon_wakil}}</b></h2>
                       <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                       <ul class="ml-4 mb-0 fa-ul text-muted">
                         <div>
                             <a href="{{url('kandidat/detail/'.$dt->id)}}" class="btn btn-lg btn-success">
                             <i class="fas fa-user"></i> Profil Kandidat
                             </a>
                             <a href="{{ url('pemilihan/vote/'.$dt->id)}}" class="btn btn-lg btn-warning text-white">
                             <i class="fas fa-vote-yea"></i> Pilih Kandidat
                             </a>
                         </div>
                       </ul>
                     </div>
                     <div class="col-5 text-center">
                       
                       <img src="{{asset($dt->photo)}}" style="width:200px" class="img-fluid">
                     </div>
                   </div>
                 </div>
                 <div class="card-footer">
                   
                 </div>
               </div>
 
             </div>

           </div>
        
        @endforeach

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
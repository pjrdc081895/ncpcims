@extends('frames.master')

@section('content')
@include('frames.header-home')
<style>
/* USER PROFILE PAGE */
 .well{
    border-radius: 0px;
 }
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    border-radius: 0px;
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 330px;
}
.card-background img {

    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 31vh;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(16, 24, 32, 0.25);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}


</style>
 
    
<script type="text/javascript"> 
    $(document).ready(function() {
    $(".btn-pref .btn").click(function () {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).removeClass("btn-default").addClass("btn-primary");   
    });
    });
</script>
<div class="col-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="../img/1.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="../img/profile.png">
        </div>
        <div class="card-info"> <span class="card-title">Remembering</span><br>
        <span class="card-title">Pamela Anderson</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Personal Info</div>
            </button>
        </div>
        
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                <div class="hidden-xs">Burial Location</div>
            </button>
        </div>
    </div>
 <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <center><h3>Birthdate:</h3>
          <p>December 31, 1995</p>
          <h5></h5>
          <h3>Deathdate:</h3>
          <p>December 31, 2017</p>
          <h3>Interment:</h3>
          <p>December 31, 2017</p></center>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <div class='map-wrapper'>
              <div id='map'> </div>
                
              </div>
            <h3>Deathdate:</h3>
          <p>December 31, 2017</p>
        </div>

      </div>
    </div>
@include('frames.footer')   
@endsection           
    
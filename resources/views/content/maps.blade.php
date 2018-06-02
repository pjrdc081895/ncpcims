@extends('layout_master.master')

@section('content')

<h1>My First Google Map</h1>

<div id="panel">
      <input id="city_country" type="textbox" value="Berlin, Germany">
      <input id="latitude" type="textbox" value="13.6256013">
      <input id="longtitude" type="textbox" value="123.1916718">
      <input type="button" value="Geocode" onclick="myMap()">
  </div>  
  <div id="_gmaps" style="height: 500px; width: 100%"></div>
  <div id="infoPanel"></div>
    <b>Marker status:</b>
    <div id="markerStatus"><i>Click and drag the marker.</i></div>
    <b>Current position:</b>
    <div id="info"></div>
   

@endsection


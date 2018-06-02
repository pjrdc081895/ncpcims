var editor;
$(document).ready(function() {
        
    $("#fin").text($('.tbldec tbody').children().length);
    //$.get('/search/' + id, function(data) {});

    
    $('#btnrelationships').click(function() {
        //alert($('input[name=birthdate').val());
        alert('hello');
        $.ajax({
            type: 'post',
            url: $("#addRelationship").attr('action'),
            dataType: "json",
            beforeSend: function(xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                var dataList = $(".rships").map(function() {
                    return $(this).text();
                }).get();
                
                 $.each(dataList,function(key, value) {
                    var rel = $.trim(dataList[key].toLowerCase());
                    alert(rel);
                    if(rel ===$('input[name=description]').val().toLowerCase().trim()){
                        alert($('input[name=description]').val().toLowerCase().trim() + " - already exist");
                        xhr.abort();
                        $("#addRelationship").trigger('reset');
                    }
                });

            },
            data: {
                '_token': $('input[name="_token]').val(),
                'description': $('input[name=description]').val()
            },
            success: function(data) {
                $("#cDet").show("slow").delay(2000).hide("slow");
                $("#addRelationship").trigger('reset');
                location.reload();

            },
            error: function(xhr) {
                var response = $.parseJSON(xhr.responseText);
                alert(response.relationship_type[0]);
                
            },
        });
    });

    $(".relationship li a").click(function(){
        //Get the value
        var id = $(this).attr('id');
        var value = $(this).text();
        //Put the retrieved value into the hidden input
        ///alert(value);
        //alert(value);
        $("input[name=relationship_id]").val(id);
        $(".rShip").text(value);
    });
    $('.panel a').click(function() {

        //alert($(this).attr('id'));
        $.get('/corpse/' + $(this).attr('id'), function(data) {
            //success data
            //console.log(data);
            //alert(data.middlename);
            //$('.modal-title').text((data.firstname).toUpperCase() + " " + (data.middlename).toUpperCase() + " " + (data.lastname).toUpperCase() + " BURIAL DETAILS");
            //$("#location").text("LATITUDE: Not Available LONGTITUDE: Not Available");
            //$('#myModal').modal('show');

            var latitude = $('#collapse'+data.id+' .panel-body #lat').text();
            var longtitude = $('#collapse'+data.id+' .panel-body #long').text();

            myMap(latitude,longtitude,true);
        })
    });

    // show account info
    accountInfo = function(id) {

        $.get('/search/' + id, function(data) {
            //success data
            //console.log(data);
            //alert(data.middlename);
            
            if(window.location.href.split("/")[3]==="settings"){
                 //$('input[name="_token]').val(data.remember_token);
                 $('input[name=firstname]').val(data.firstname);
                 $('input[name=middlename]').val(data.middlename);
                 $('input[name=lastname]').val(data.lastname);
                 $('input[name=username]').val(data.username);
                 $('input[name=email]').val(data.email);
                 //alert(data.username+" - "data.email);
            }else{
                //$('.modal-title').text((data.username).toUpperCase() + " " + (data.email).toUpperCase());
                //$("#location").text("LATITUDE: Not Available LONGTITUDE: Not Available");
                //$('#myModal').modal('show');
                //alert(id);
            }
        })
    }
    $('.crud').click(function(){
        accountInfo($(this).attr('id'));
    });
    // update account

    $('.update-account').click(function(event){
            $('.form-account').css('display','block');
            accountInfo($(this).attr('id'));
        
    });
    //delete account
    $('.delete-account').click(function(event){
        $('.modal-title').text('CONFIRMATION');
        $('.panel-title').text('DO YOU REALLY WANT TO DELETE THE ACCOUNT?');
        $('#myModal').modal('show');
    });

    $('.deleteAcct_cnfrm').click(function(event){
        var account_id = $('.delete-account').attr('id');

         $.ajax({

            type: "DELETE",
            url: '/search/' + account_id,
            success: function (data) {
                console.log(data);
                $("#"+account_id).remove();
                $('#myModal').modal('hide');
                $('.modal-title').text('DELETE');
                $('.panel-title').text('ACCOUNT HAS BEEN DELETED');
                $('.modal-footer').css('display','none');
                $('#myModal').modal('show');

                //$('#myModal').modal('hide');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });

    // adding of corpse
    $('#btnRegister').click(function() {
        //alert($('input[name=birthdate').val());
        $.ajax({
            type: 'post',
            url: $("#addCorpse").attr('action'),
            dataType: "json",
            beforeSend: function(xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }

                var a = window.location.href.split("/")[3];
                var b = $("#addCorpse").attr('action').split("/")[1];//authenticated user account
                var c = window.location.href;

                c = c.split("/")[0]+"//"+c.split("/")[2]+$("#addCorpse").attr('action');

                if(a!=b){
                    xhr.abort();
                    //var a = window.location.href;                                   
                    
                    $("#cDet h3").text(a.toUpperCase()+" IS NOT AN AUTHENTICATED ACCOUNT");

                    $("#cDet").show("slow").delay(2000).hide("slow",function(){
                     $('.modal-header').css('display','none');
                    $('.modal-footer').css('display','none');
                    $('#dispGmaps h4 center').text('EDITTING URI...');
                    $('#dispGmaps').off('click');
                    $('#myModal').modal('show');     
                    $("#addCorpse").trigger('reset');
                    });

                    setTimeout(function(){
                    window.location.replace(c);
                    }, 5000);
                }
                else{
                    //alert($('input[name=relationship_id]').val());
                    $.trim($('input[name=firstname]').val());
                    $.trim($('input[name=middlename]').val());
                    $.trim($('input[name=lastname]').val());
                }
            },
            data: {
                '_token': $('input[name="_token]').val(),
                'firstname': $('input[name=firstname]').val(),
                'middlename': $('input[name=middlename]').val(),
                'lastname': $('input[name=lastname]').val(),
                'interment': $('input[name=interment]').val(),
                'birthdate': $('input[name=birthdate]').val(),
                'deathdate': $('input[name=deathdate]').val(),
                'latitude': $('input[name=latitude]').val(),
                'longtitude': $('input[name=longtitude]').val(),
                'relationship_id': $('input[name=relationship_id]').val()
                //'relationship': $('input[name=relationship]').val()
            },
            success: function(data) {
                $("#cDet").show("slow").delay(2000).hide("slow");
                $("#addCorpse").trigger('reset');

            },
            error: function(xhr) {
                var response = $.parseJSON(xhr.responseText);
                var error="";
                $.each(response,function(key, value) {
                    error+=response[key]+"\n";
                });
                alert(error);
            },
        });
    });

    // registering an account
    $('#btnsubmit').click(function() {
        //alert($('input[name=birthdate').val());
        var sub_type;
        var _url;
        var formID;
        if ($(this).text()==="UPDATE"){
            sub_type= "PUT";
            formID="#accountUpdate";
            _url=$(formID).attr('action')+'/'+$('.update-account').attr('id');
            //alert(_url);
        }else{
            sub_type= "POST";
            formID="#acctreg";
            _url=$(formID).attr('action');
            alert('asdasdsad');
        }

        
        
    });

    $('.stats_info').click(function() {

        //alert('/statistics/' + $(this).attr('id').split("-")[0]+'/'+ $(this).attr('id').split("-")[1]+'/'+ $(this).attr('id').split("-")[2]);
        //alert($(this).attr('id'));
        $('.stat_det').empty();
        //alert('/statistics/' + $(this).attr('id').split("-")[0]+'/'+ $(this).attr('id').split("-")[1]+'/'+ $(this).attr('id').split("-")[2])
        $.get('/statistics/' + $(this).attr('id').split("-")[0]+'/'+ $(this).attr('id').split("-")[1]+'/'+ $(this).attr('id').split("-")[2], function(data) {
            var i = 0;
            var info="";
             $.each(data,function(key, value) {
                    $('.stat_det').append('Firstname: '+data[key].firstname+'<br/>Middlename: '+data[key].middlename+'<br/>Lastname: '+data[key].lastname+'<br/><br/>Asssociated with:<br/>');

                
                
                    while(data[key]._user[i].firstname!=" "){
                         $('.stat_det').append(data[key]._user[i].firstname+" - ");
                             $.get('/relationship/'+data[key]._user[i].pivot['relationship_id'], function(rel) {  
                              $('.stat_det').append(rel.description+"<br/>");  

                               
                             });
                        i++;
                    }
            });
           
             
        })
      
    });
    crpse = function(){

    }

   var geocoder;
    var map;
    var marker;

    myMap = function (lat,long,status) {
 
    var mapProp= {
       zoom: 30,
       streetViewControl: false,
        center: new google.maps.LatLng(lat,long),
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map=new google.maps.Map(document.getElementById("gmaps"),mapProp);

     marker = new google.maps.Marker({
              map: map,
              position: new google.maps.LatLng(lat,long),
              draggable: status,
          }); 

      map.setCenter(new google.maps.LatLng(lat,long));

      updateMarkerPosition(marker.getPosition());
      if(status === true)   {
          google.maps.event.addListener(marker, 'dragstart', function() {
        //updateMarkerAddress('Dragging...');
         });
          
          google.maps.event.addListener(marker, 'drag', function() {
            //updateMarkerStatus('Dragging...');
            updateMarkerPosition(marker.getPosition());
          });
      
          google.maps.event.addListener(marker, 'dragend', function() {
              updateMarkerStatus('Drag ended');
              map.panTo(marker.getPosition()); 
          });
      
          google.maps.event.addListener(map, 'click', function(e) {
            updateMarkerPosition(e.latLng);
            marker.setPosition(e.latLng);
            map.panTo(marker.getPosition()); 
          }); 
      }
      else{
        alert("FOR VIEW PURPOSE");
      }
      
    }

    function updateMarkerStatus(str) {
      //document.getElementById('markerStatus').innerHTML = str;
    }

    function updateMarkerPosition(latLng) {
        $('input[name=latitude]').val(latLng.lat());
        $('input[name=longtitude]').val(latLng.lng());
       
    }

});

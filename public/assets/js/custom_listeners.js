var editor;
$(document).ready(function() {
    if(window.location.href.split("/")[3]==="confirmation")
        {
            //myMap(13.620284,123.204900,true)

            initialize(13.620284,123.204900,true);
           
        }

    $("#fin").text($('.tbldec tbody').children().length);
    //$.get('/search/' + id, function(data) {});
    $('input[name=searchcorpse]').keyup(function(){
        //alert($(this).val());
        var i=0;

        $.get('/corpses/' + $(this).val(), function(data) {
                $('.dcs').empty();
                $('#mes').empty();

                $.each(data,function(key, value) {
                    
                    $('.dcs').append("<div class='col-md-4'>"+
                               "<div class='thumbnail'>"+
                                    "<img src='http://placehold.it/320x200' alt='ALT NAME' class='img-responsive'/>"+
                                    "<div class='caption'>"+
                                        "<h3>"+data[key].firstname+" "+data[key].middlename+" "+data[key].lastname+"</h3>"+
                                        "<p></p>"+
                                         "<p align='center'><a href='http://bootsnipp.com/' class='btn btn-primary btn-block'>More Info</a>"+
                                        "</p>"+
                                    "</div>"+
                                "</div>"+
                           "</div>"
                           );
                    i++;

                });

                if(i==0){
                    alert("no records to show");
                }
                
        });                        
    });
    
    $('#btnrelationships').click(function() {
        //alert($('input[name=birthdate').val());
        //alert('hello');
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
                alert($('input[name=birthdate').val());
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
        }else if ($(this).text()==="Sign me up!"){
            sub_type= "POST";
            formID="#acctreg";
            _url=$(formID).attr('action');
            //alert(_url);
        }
        var inputData = {
                '_token': $('input[name=_token]').val(),
                'role_id': $('input[name=role_id]').val(),
                'firstname': $('input[name=firstname]').val(),
                'middlename': $('input[name=middlename]').val(),
                'lastname': $('input[name=lastname]').val(),
                'username': $('input[name=username]').val(),
                'email': $('input[name=email]').val(),
                'password': $('input[name=password]').val(),
                'password_confirmation': $('input[name=password_confirmation]').val()
            };

        $.ajax({
            type: sub_type,
            url: _url,
            dataType: "json",
            beforeSend: function(xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }

                alert($('input[name=role_id]').val()+' '+ _url);
            },
            data: inputData,
            success: function(data) {
                $("#cDet").show("slow").delay(2000).hide("slow",function() {
                 });
                $(formID).trigger('reset');
                location.reload();
                

            },
            error: function(xhr) {
                var response = $.parseJSON(xhr.responseText);
                    $("#cDet h3").empty();
                $.each(response,function(key, value) {
                    $("#cDet h3").append(response[key]+'<br/>');
                });
                $("#cDet").show("slow").delay(3000).hide("slow",function(){
                    $('input[name=password]').val('');
                    $('input[name=password_confirmation]').val('');
                });
            }
        });
        
        
    });

    $(".dec_info span").each(function(){
        var a = $(this).text();
        $.get('/relationship/' +$(this).text() , function(data) {
           
         $("#rel_"+a).text(data.description);
             
    });

    });
    
    crpse = function(){

    }

   var geocoder;
    var map;
    var marker;

    

    var map;
        function initialize(lat,long, stat) {
       var myCenter = new google.maps.LatLng(lat,long);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
             zoom: 45,
       streetViewControl: false,
        center: myCenter,
        mapTypeId: google.maps.MapTypeId.HYBRID
        };
         var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({map: map,
              position: myCenter,
              draggable: stat});
        marker.setMap(map);

    
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

       // google.maps.event.addDomListener(window, 'load', initialize);

    function updateMarkerStatus(str) {
      //document.getElementById('markerStatus').innerHTML = str;
    }

    function updateMarkerPosition(latLng) {
        $('input[name=latitude]').val(latLng.lat());
        $('input[name=longtitude]').val(latLng.lng());
       
    }

});

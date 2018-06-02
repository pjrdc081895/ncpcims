

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background-color: #f9aa20;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: #636b6f;font-size: 25px;font-weight: bold;">Modal Header</h4>
      </div>

      <div class="modal-body" style="background-color: #636b6f;color: #f9aa20;font-size: 18px;font-weight: bold;">   

          <div class="panel-heading" id="dispGmaps" style="background-color: #f9aa20;">
                <h4 class="panel-title" style="color:#636b6f;font-size: 25px;font-weight: bold;text-align: center;">
                  <center>LOCATE BURIAL LOT</center>
                </h4>
          </div>
         
         <div id="gmaps" style="width:auto;height:380px; background-color:#636b6f; color: #f9aa20; display: none;border: 0.5px solid #f9aa20;" >
            
         </div>



         <div id="location" style="background-color: #f9aa20;color:#636b6f;font-size: 20px; width:93.5%;position: absolute;z-index: 10;bottom: 21px;
    right: 19px;display: none;text-align: center;">

              LATITUDE: <span id="lat">13.622711</span> LONGTITUDE: <span id="long">123.187442</span>
              
        
         </div>

      </div>

      <div class="modal-footer" style="background-color: #f9aa20;text-align: center;">

      <button type="button" class="btn btn-default deleteAcct_cnfrm"  style="background-color:#636b6f; color: #f9aa20;font-weight: bold;">YES</button>
      

        <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#636b6f; color: #f9aa20;font-weight: bold;">NO</button>

      </div>

    </div>

  </div>

</div>
<h1> CHANGE OCSP SETTINGS HERE! </h1>

{{ partial("layout_partials/base_form",['fields':ocspForm,'id':'frm_OCSPSettings'])}}

<script type="text/javascript">
    $( document ).ready(function() {
        mapDataToFormUI({'frm_OCSPSettings':"/api/betterca/OCSP/get"}).done(function(data){
            // place actions to run after load, for example update form styles.
        });
        // link save button to API set action
        $("#saveAct").click(function(){
            saveFormToEndpoint("/api/betterca/OCSP/set",'frm_OCSPSettings',function(){
                // action to run after successful save, for example reconfigure service.
                //ajaxCall(url="/api/betterca/service/reload", sendData={},callback=function(data,status) {
                    // action to run after reload
                //});
            });
        });
    });
</script>

<div class="col-md-12">
   <button class="btn btn-primary"  id="saveAct" type="button"><b>{{ lang._('Save') }}</b></button>
</div>
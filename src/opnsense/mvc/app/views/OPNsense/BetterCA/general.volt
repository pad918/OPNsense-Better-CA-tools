<h1> PAGE TO IMPLEMENT FRONTEND OF BETTERCA! </h1>

{{ partial("layout_partials/base_form",['fields':generalForm,'id':'frm_GeneralSettings'])}}


<script type="text/javascript">
    $( document ).ready(function() {
        mapDataToFormUI({'frm_GeneralSettings':"/api/betterca/settings/get"}).done(function(data){
            // place actions to run after load, for example update form styles.
        });
        // link save button to API set action
        $("#saveAct").click(function(){
            saveFormToEndpoint("/api/betterca/settings/set",'frm_GeneralSettings',function(){
                // action to run after successful save, for example reconfigure service.
                ajaxCall(url="/api/betterca/service/reload", sendData={},callback=function(data,status) {
                    // action to run after reload
                });
            });
        });
    });
</script>

<div class="col-md-12">
   <button class="btn btn-primary"  id="saveAct" type="button"><b>{{ lang._('Save') }}</b></button>
</div>

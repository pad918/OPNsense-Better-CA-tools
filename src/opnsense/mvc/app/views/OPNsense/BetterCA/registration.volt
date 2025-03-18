lear<h1>Settings</h1>
{{ partial("layout_partials/base_form",['fields':registrationForm,'id':'frm_RegistrationSettings'])}}

<script type="text/javascript">
    $( document ).ready(function() {
        mapDataToFormUI({'frm_RegistrationSettings':"/api/betterca/registration/get"}).done(function(data){
            // place actions to run after load, for example update form styles.
        });
        // link save button to API set action
        $("#saveAct").click(function(){
            saveFormToEndpoint("/api/betterca/registration/set",'frm_RegistrationSettings',function(){
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

<h1>Register new Certificates</h1>
<ul>
    {% for request in csrRequests %}
        <li>
            CSR ID: {{ request["id"] }} - Subject: {{ request["subject"] }}
            <button class="btn btn-success btn-sm">Sign</button>
        </li>
    {% else %}
        <li>No certificate signing requests found.</li>
    {% endfor %}
</ul>
/*$(document).ready(function(){ 

var request;

$("#foo").submit(function(event){
	
    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    $("#foo span").each(function(i,v){
        $this = $(this)
        $("#foo").append(
            $("<input type='hidden' />").attr({
                name:$this.attr('id'),
                value: $this.text()
            })
        )

    })
    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");


    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "./index.php?r=site%2Fsamplepdf",
        type: "post",
        data: serializedData
    });
    console.log(serializedData);
    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log("Hooray, it worked!");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

    // Prevent default posting of form
    event.preventDefault();
});
});*/
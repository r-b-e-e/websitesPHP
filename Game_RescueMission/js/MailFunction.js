$(window).load(function(){
    $("#contactForm").submit(function(event){
        event.preventDefault();
        var formDataObject = {}, formDataArray = $("#contactForm").serializeArray();
        $.each(formDataArray, function () {
            if (formDataObject[this.name] !== undefined) {
                if (!formDataObject[this.name].push) {
                    formDataObject[this.name] = [formDataObject[this.name]];
                }
                formDataObject[this.name].push(this.value || '');
            }else{
                formDataObject[this.name] = this.value || '';
            }
        });

        console.log(formDataObject);

        $('#success').html('');
        $.ajax({
            url: 'mail/MailFunction.php',
            dataType: 'json',
            type: 'POST',
            data: {"formData": formDataObject},
            success: function (data) {
                $('#success').html('<div class="alert alert-success"> Message Successfully Sent </div>');
            },
            error: function(){
                $('#success').html('<div class="alert alert-danger"> Message not sent. Please try again </div>');
            }
        });
    });
});
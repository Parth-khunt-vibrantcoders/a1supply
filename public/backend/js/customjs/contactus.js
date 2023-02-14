var Contactus = function(){
    var contact = function(){
        var form = $('#contact-form');
        var rules = {
            name: {required: true},
            company: {required: true},
            email: {email:true},
            mo_no: {required: true},
        };
        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form,true);
        });
    }
    return {
        init:function(){
            contact();
        }
    }
}();

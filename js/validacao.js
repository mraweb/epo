// validacao formulario
jQuery(document).ready(function(){
    jQuery("#formID, #formCurriculo").validationEngine();
});
function checkHELLO(field, rules, i, options){
    if (field.val() != "HELLO") {
        return options.allrules.validate2fields.alertText;
    }
}

var masks = ['(00) 00000-0000', '(00) 0000-00009'],
    maskBehavior = function(val, e, field, options) {
    return val.length > 14 ? masks[0] : masks[1];
};

$('#tel').mask(maskBehavior, {onKeyPress: 
   function(val, e, field, options) {
       field.mask(maskBehavior(val, e, field, options), options);
   }
});
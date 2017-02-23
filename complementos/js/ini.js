$(document).ready(function(){
    
    $(".datepicker").datepicker({        
        dateFormat: 'yy-mm-dd',        
        currentText: "Hoy",
        defaultDate: "-28y",
        minDate: new Date(1988, 1 - 1, 1)
    });

});
$(document).ready(function() {
 
 alert("Im here!!");

    $('#form').submit(function(e) {
                e.preventDefault();
                
                 var name = $('#name').val();
                 var email = $('#email').val();
                 var phone = $('#phone').val();
                 var zipCode = $('#zipCode').val();
                 var bestWay = $('#bestWay').val();
                 
                
                // checking if the form's inputs are empty 
                if (name.length === 0) {
                $('.nameError').toggle();
                errors = 1;
                }
                if (email.length === 0) {
                $('.emailError').toggle();
                errors = 1;
                }
                if (zipCode.length === 0) {
                $('.zipCodeError').toggle();
                errors = 1;
                }
                if (bestWay.length === 0) {
                $('.bestWayError').toggle();
                errors = 1;
                }
                
                
                
                // zip code validation
                if (zipCode.length !== 5){
                $('.zipCodeError').toggle();
                errors = 1;  
                 } 
                if (isNaN(zipCode)){      
                $('.zipCodeError').toggle();
                errors = 1;  
                }
    
    });
    
});




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
            
        
        
            
            // // checking if the form's inputs are empty 
            // $('#name').change(function(e) {
            //     $('#nameError').toggle();
            // });
            
            // $('#email').change(function(e) {
            //     $('.emailError').toggle();
            // });
            
            // $('#phone').change(function(e) {
            //     $('.phoneError').toggle();
            // });
            
            // $('#email').change(function(e) {
            //     $('.emailError').toggle();
            // });
            
            // $('#zipCode').change(function(e) {
            //     $('.zipCodeError').toggle();
            // });
            
            // $('#bestWay').change(function(e) {
            //     $('.bestWayError').toggle();
            // });

            // // // // 
            
            // $('#form').submit(function(e) {
            //     e.preventDefault();
    
            //     var name = $('#name').val();
            //     if (name.length === 0) {
            //         $('.name').toggle();
            //         errors = 1;
            //     }
                
            //     var email = $('#email').val();
            //     if (email.length === 0) {
            //         $('.email').toggle();
            //         errors = 1;
            //     }
                
            //     var phone = $('#phone').val();
            //     if (phone.length === 0) {
            //         $('.phone').toggle();
            //         errors = 1;
            //     }
                
            //     var email = $('#email').val();
            //     if (email.length === 0) {
            //         $('.email').toggle();
            //         errors = 1;
            //     }
                
            //     var bestWay = $('#bestWay').val();
            //     if (bestWay.length === 0) {
            //         $('.bestWay').toggle();
            //         errors = 1;
            //     }
            // // // //
            // // zip code validation
    
            // if (ipCode.length === 0) {
            //     $('.ZipcodeError').toggle();
            //     errors = 1;  
            // }
            // if (zipCode.length !== 5){
            //     $('.wrongZipcodeError').toggle();
            //     errors = 1;  
            // } 
            // if (isNaN(zipCode)){      
            //     $('.wrong2ZipcodeError').toggle();
            //     errors = 1;  
            //     }
         //});

});




$(document).ready(function() {
    
    getCarMakes();
    
    $('#makes').change(function() {
       getCarModels(); 
       getCarEngines();
    });
    
    var name = "";
    
    $('.sales-lead').submit(function(e) {
        e.preventDefault();
        
        name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var zip = $('#zip').val();
        var bestWay = $('input[type="radio"]:checked').val();
        var make = $('#makes').val();
        var model = $('#models').val();
        var engine = $('#engines').val();
        
        // checking if the form's inputs are empty  
        if (name.length === 0) {
            $('.nameError').toggle();
            errors = 1;
        }
        if (email.length === 0) {
            $('.emailError').toggle();
            errors = 1;
        }
         if (phone.length === 0) {
            $('.phoneError').toggle();
            errors = 1;
        }
        if (zip.length === 0) {
            $('.zipCodeError').toggle();
            errors = 1;
        }
        
        // zip code validation
        if (zip.length !== 5) {
            $('.zipCodeErrorTow').toggle();
            errors = 1;  
        } 
        
        if (isNaN(zip)) {      
            $('.zipCodeErrorThree').toggle();
            errors = 1;  
        }
        

        var data = {
            action : 'save', 
            name : name, 
            email : email, 
            phone : phone, 
            zip : zip, 
            bestWay : bestWay,
            make : make, 
            model : model,  
            engine : engine
        };
        
        $.ajax({
            url: 'handler.php',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            success: function(data, textStatus, jqXHR) {
                // console.log('Form Submit Success!');
                // console.log(data);
                // console.log(textStatus);
                //do something here on success 
                getGeoCode(data.zip);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Error!');
                console.log(textStatus);
                console.log(errorThrown);
                //do something here on error
            }
        });
        
        
    });




function getCarMakes()
{
    $.ajax({
        url: 'handler.php',
        type: 'POST',
        data: {
            action: 'makes',
        },
        cache: false,
        dataType: 'json',
        success: function(data, textStatus, jqXHR) {
            console.log('Success!');
            console.log(data);
            console.log(textStatus);
            //do something here on success
           
            for (var i = 0; i < data.length; i++) { 
                // code
                $('#makes').append('<option value=' + data[i][0] + '>' + data[i][1] + '</option>');
                }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Error!');
            console.log(textStatus);
            console.log(errorThrown);
            //do something here on error
        }
    });
}
    
function getCarModels()
{
    var makes = $('#makes').val();
    console.log(makes);
    $.ajax({
        url: 'handler.php',
        type: 'POST',
        data: {
            action: 'models', 
            make : makes,
        },
        cache: false,
        dataType: 'json',
        success: function(data, textStatus, jqXHR) {
            console.log('Success!');
            console.log(data);
            console.log(textStatus);
            //do something here on success
            for (var i = 0; i < data.length; i++) { 
                // code
                $('#models').append('<option value=' + data[i][0] + '>' + data[i][1] + '</option>');
                }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Error!');
            console.log(textStatus);
            console.log(errorThrown);
            //do something here on error
        }
    });
}

function getCarEngines()
{
    var makes = $('#makes').val();
    console.log(makes); 
    
    $.ajax({
        url: 'handler.php',
        type: 'POST',
        data: {
            action: 'engines', 
            make : makes,
        },
        cache: false,
        dataType: 'json',
        success: function(data, textStatus, jqXHR) {
            console.log('Success!');
            console.log(data);
            console.log(textStatus);
            //do something here on success
            for (var i = 0; i < data.length; i++) { 
                // code
                $('#engines').append('<option value=' + data[i][0] + '>' + data[i][1] + '</option>');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Error!');
            console.log(textStatus);
            console.log(errorThrown);
            //do something here on error
        }
        
    });
}

function getGeoCode(zip)
{
    var data = {
        action: 'geocode',
        zipcode: zip,
    };
  
  $.ajax({
        url: 'handler.php',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        success: function(data, textStatus, jqXHR) {
            console.log('Success!');
            console.log(data);
            console.log(textStatus);
            //do something here on success
            
            var greeting = "Thank you " + name + "!";
            var zipState = "Here are the closest car dealerships to your " + zip + " zipcode.";
            var list = "";
                        
            $.each(data, function(key, value) {
                list += "<ul class='dealer'>";
                list += "<li class='name'>"+ value.details.name +"</li>";
                list += "<li class='addy'>"+ value.details.address + "</li>";
                list += "<li class='phone'>" + value.details.phone + "</li>";
                list += "<li class='url'><a href='" + value.details.url + "' target='_blank'>" + value.details.url + "</a></li>";
                list += "<li class='rating'>Rating: " + value.details.rating + "</li>";
                list += "</ul>";
            });
                        
            $('.sales-lead').hide();
            $('h1.greeting').html(greeting).show();
            $('h2.zip-statement').html(zipState).show();
            $('.list').html(list).show();
            
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Error!');
            console.log(textStatus);
            console.log(errorThrown);
            //do something here on error
        }
        
    }); 
}

});

 
    
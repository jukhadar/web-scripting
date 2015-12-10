$(document).ready(function() {
    
    getCarMakes();
    
    $('#makes').change(function() {
        getCarModels($(this).val());
    });
    
    $('#models').change(function() {
        getCarEngines($('#makes').val(), $(this).val());
    });
    
    
    $('.ajax-fun').submit(function(event) {
        event.preventDefault();
        
        var data = {
            action: 'save',
            make: $('#makes').val(),
            model: $('#models').val(),
            engine: $('#engines').val(),
        };
        
        $.ajax({
            url: 'handler.php',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            success: function(data, textStatus, jqXHR) {
                console.log('Form Submit Success!');
                console.log(data);
                console.log(textStatus);
                //do something here on success
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
                console.log(data);
                
                var makes = '<option value="">Choose Make...</option>';
                
                $.each(data, function(i, item) {
                    makes += '<option value="' + data[i][0] + '">' + data[i][1] + '</option>';
                });
                
                $('#makes').html(makes);
                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Error!');
                console.log(textStatus);
                console.log(errorThrown);
                //do something here on error
            }
        });
    }
    
    function getCarModels(makeId)
    {
        $.ajax({
            url: 'handler.php',
            type: 'POST',
            data: {
                action: 'models',
                make: makeId,
            },
            cache: false,
            dataType: 'json',
            success: function(data, textStatus, jqXHR) {
                console.log(data);
                
                var models = '<option value="">Choose Model...</option>';
                
                $.each(data, function(i, item) {
                    models += '<option value="' + data[i][0] + '">' + data[i][1] + '</option>';
                });
                
                $('#models').prop("disabled", false);
                $('#models').html(models);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Error!');
                console.log(textStatus);
                console.log(errorThrown);
                //do something here on error
            }
        });
    }
    
    function getCarEngines(makeId, modelId)
    {
        $.ajax({
            url: 'handler.php',
            type: 'POST',
            data: {
                action: 'engines',
                make: makeId,
                model: modelId,
            },
            cache: false,
            dataType: 'json',
            success: function(data, textStatus, jqXHR) {
                console.log(data);
                
                var models = '<option value="">Choose Engine...</option>';
                
                $.each(data, function(i, item) {
                    models += '<option value="' + data[i][0] + '">' + data[i][1] + '</option>';
                });
                
                $('#engines').prop("disabled", false);
                $('#engines').html(models);
                
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
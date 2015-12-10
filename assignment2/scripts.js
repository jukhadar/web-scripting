$(document).ready(function() {
    
    $('.ajax-fun').submit(function(event) {
        event.preventDefault();
        
        hideForm();
        showSpinner();
        
        
        var data = $('.file-upload').val();
        
        $.ajax({
            url: 'handler.php',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'text',
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                console.log('success!');
                console.log(data);
                console.log(textStatus);
                //do something here on success
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('error!');
                console.log(textStatus);
                console.log(errorThrown);
                //do something here on error
            }
        });
        
    });
    
    function hideForm() {
        $('.main').hide();
    }
    
    function showForm() {
        $('.main').show();
    }
    
    function showSpinner() {
        $('.spinner').show();
    }
    
});
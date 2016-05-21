$(document).ready(function(){
  $(".reply_doc").click(function () {
    //var a = $("a.reply_doc").attr("data-doc_value"); //<-- Add this
    var a = $(this).data("doc_value");
    if (a != "") {
        //alert(a);
    	$.ajax({
        	type: "POST",
	        url: "inc/serialcommand.php",
    	    data: "button=" + a,
    	    
        	success: function (data) {
            	//alert(a+' ok. '+b)
            	console.log(data);
        	}
        
    	});
  }
 });
});


$(document).ready(function() {
    $(".btn1").click(function(){

	//$('form').submit(function(event) {
            var formData = {'name': $('input[name=rcmd]').val(), 'altro':'ssss',};
            //alert($('input[name=rcmd]').val());
            //var formData = {'name':'ssss',};
            //alert(formData);
            $.ajax({
                    type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    //async:  false,
                    url 		: 'somepage.php', // the url where we want to POST

                    data 		: formData, // our data object
                    dataType 	: 'json', // what type of data do we expect back from the server
                    //encode          : true,

                    success: function(data){
                        //alert(JSON.stringify(data));
                        /*
                        var risultato = data.success;
                        var token = data.token;
                        var title = data.title;
                        var surname = data.surname;
                        var firstname = data.firstname;
                        
                        var datiagg = data.datiagg;
                        var consensodati = data.consensodati;
                        
                        var flag3 = data.flag3;
                        var flag4 = data.flag4;
                        var flag5 = data.flag5;
                        var flag6 = data.flag6;
                        var flag7 = data.flag7;
                        var flag8 = data.flag8; 
                        */
                        
                        if (data.success==true ){
                            
                        }
                        
                        
                    }
                    
            })
            
            // using the done promise callback
            .done(function(data) { console.log(data); });

		// stop the form from submitting the normal way and refreshing the page
            event.preventDefault();                
	//});
    });
});

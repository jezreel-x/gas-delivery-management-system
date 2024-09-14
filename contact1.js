$(document).ready(function(){	
	$("#form").submit(function(event){
		submitForm();
		return false;
	});
});


function submitForm(){
    $.ajax({
       type: "POST",
       url: "orders.php",
       cache:false,
       data: $('form#form').serialize(),
       success: function(response){
           $("#contact").html(response)
           $("#exampleModal").modal('hide');
       },
       error: function(){
           alert("Error");
       }
   });
}
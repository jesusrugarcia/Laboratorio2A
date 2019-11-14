function ajaxAdd(){
    event.preventDefault();
	var questionary= $('#fquestion')[0];
	var data = new FormData(questionary);

	 $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "../php/AddQuestionWithImage.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function(data){
            verPreguntas();
              console.log(data);
            $('#results').fadeIn().html(data);
        },
            error:function(){
            
            $('#results').fadeIn().html('Algo ha fallado');} // our data object
        });
	

}
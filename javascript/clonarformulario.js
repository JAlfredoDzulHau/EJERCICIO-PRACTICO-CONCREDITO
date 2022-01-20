

    $(function () { 
      var i = 1;
      $('.add-btn').click(function (e) {
        e.preventDefault();
          i++;

        $('.newData').append('<div id="newRow'+i+'" class="row g-3">'
           
            +'<div class="col-md-6">'
              +'<label>Nombre del Documento:</label><br>'
              +'<input type="text" name="nom_doc[]" class="form-control">'
              +'<label>Documento:</label>'
            +'</div>'
            +'<div class="col-md-6">'
              +'<input type="file" name="documento[]" class="form-control-file" id="formFileMultiple" multiple>'
              +'<button  type="button" href="#" class=" btn btn-danger remove-lnk" id="'+i+'"><i class="bi bi-trash-fill"></i> "'+i+'"</button>'
            +'</div>'
          );  
      });
 

       $(document).on('click', '.remove-lnk', function(e) {
         e.preventDefault();

          var id = $(this).attr("id");
           $('#newRow'+id+'').remove();
        });
     
    });

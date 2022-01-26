$('.salir').on('click',function(e){
    e.preventDefault();
    const href = $(this).attr('href') 
    Swal.fire({
        position: 'top',
        icon: 'question',
        title: '¿Esta seguro que quiere salir?, perderá sus datos',
        confirmButtonColor: '#3085d6',
        showConfirmButton: true,
        showCancelButton: true,
        
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
                
            }
        })
 })

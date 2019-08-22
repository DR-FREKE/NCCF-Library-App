function logout(){
    swal({
        title: 'Are you sure?',
        text: "We hate to see you leave",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, logout!',
        showLoaderOnConfirm: true,
    }).then((result)=>{
        if(result.value){
            swal(
                'Logging out',
                'Hope to see you soon',
                'success',
                window.location='logout.php',
            )
        }
    })
}
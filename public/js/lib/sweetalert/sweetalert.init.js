document.querySelector('.sweet-message').onclick = function(){
    swal("Hey, Here's a message !!")
};
document.querySelector('.sweet-success').onclick = function(){
    swal("Hey, Good job !!", "You clicked the button !!", "success")
};
document.querySelector('.sweet-confirm').onclick = function(){
    swal({
            title: "Are you sure to delete ?",
            text: "You will not be able to recover this imaginary file !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it !!",
            closeOnConfirm: false
        },
        function(){
            swal("Deleted !!", "Hey, your imaginary file has been deleted !!", "success");
        });
};
document.querySelector('.sweet-success-cancel').onclick = function(){
    swal({
            title: "Are you sure to delete ?",
            text: "You will not be able to recover this imaginary file !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it !!",
            cancelButtonText: "No, cancel it !!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal("Deleted !!", "Hey, your imaginary file has been deleted !!", "success");
            }
            else {
                swal("Cancelled !!", "Hey, your imaginary file is safe !!", "error");
            }
        });
};

document.querySelector('.sweet-ajax').onclick = function(){
    swal({
            title: "Sweet ajax request !!",
            text: "Submit to run ajax request !!",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        },
        function(){
            setTimeout(function(){
                swal("Hey, your ajax request finished !!");
            }, 2000);
        });
};


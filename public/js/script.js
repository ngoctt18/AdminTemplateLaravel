$(document).ready(function(){
    
    var alertMessage = (function(){
        $('.alert-message').delay(2500).slideUp().fadeOut();
    })();

    // Upload hiện ảnh lên luôn! (cho 1 ảnh)
    var uploadImage = (function(){
        $('.upload-image input[type=file]').change(function(e){
            // console.log(this.files);
            var _self = $(this);
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(_self).closest('.upload-image').find('img').attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    })();

    var deleteModal =(function(){
        $('a.btn-delete').click(function(e){
            e.preventDefault();
            var actionDelete = $(this).attr('href');
            // console.log(actionDelete);
            $('.modal-delete').find('form').attr('action', actionDelete);
            $('.modal-delete').modal('show');
        });
    })();

    
    
});
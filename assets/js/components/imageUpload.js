
$(document).ready(function() {
    $('.image-upload').parent().on('click', function(e){
        e.stopPropagation();
       $('.image-upload').get(0).click();
    });
    
    $('.image-upload').change(function(e) {
        e.stopPropagation();
        var tmppath = URL.createObjectURL(this.files[0]);
        console.log(this.files[0].lastModifiedDate.name);
        
        $('.uploaded-image-holder').css('background-image', `url('${tmppath}')`)
    })
   });

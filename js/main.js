function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.text-upload-wrap').hide();

      // $('.file-upload-text').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.text-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.text-upload-wrap').show();
}
$('.text-upload-wrap').bind('dragover', function () {
		$('.text-upload-wrap').addClass('text-dropping');
	});
	$('.text-upload-wrap').bind('dragleave', function () {
		$('.text-upload-wrap').removeClass('text-dropping');
});

$(document).ready(function(){
	$("#ajax_form").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
				url: "./controler.php",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(response){
					result = $.parseJSON(response);
					if(result !== null){
						$('#result_form').show();
					}
					$('#result_form').html('Search result: <br>' + result.value);
				}
		});
	}));
    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input2').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })

    /*==================================================================
    [ Validate ]*/
    var key = $('.validate-input input[name="key"]');
  
    $('.validate-form').on('submit',function(){
        var check = true;

        if($(key).val().trim() == ''){
            showValidate(key);
            check=false;
        }

        return check;
    });


    $('.validate-form .input2').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
		}
});

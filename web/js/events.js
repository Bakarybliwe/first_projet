var ReloadPageInterval = 600000;
var time_reload_page = new Date().getTime();
var screen_w = $(window).width();
jQuery(document).ready(function(e) {
	if(screen_w==1080){
		
		$('.img_gif').show();
		setTimeout(affichage_img_gif, 5000);
    }else{
    	$('.img_gif').hide();
    }
	
	// Manage mouse up events
	$(document).mouseup(function(e) {
		
		
		});
	/* Affichage clavier AZERTY 
	 */ $("[name=phone]").keyboard({
		keyboard:"AZERTY"});
 
	$(document.body).bind("mousemove keypress", function(e) {
		time_reload_page = new Date().getTime();
		
	});

	setTimeout(refresh_page, 30000);
	
	
	$('.voteItem').click(function(){
		 $prodId = $(this).attr("data-productId");
	  	$('.modal-body').load('/?action=productDetail&ajax=1&productId='+$prodId,function(result){
		    $('#voteModal').modal({show:true});
		   
		    if(screen_w==1080){
		    	//afficher QRcode
		    	//hide pdf icon
		    	$('.pdf_img').hide();
		    	$('.qrcode_img').show();
		    }
		    else{
		    	//hide qrCode icon
		    	//show pdf icon
		    	$('.pdf_img').show();
		    	$('.qrcode_img').hide();
		    	
		    	 
		    }
		});
	  
		
	});
	
	$('#addToCart').click(function(){
		
		var prodId = $('#paramsBtn1').val();
		if(prodId){
		  $.ajax({
		     url:  '/?action=addVote&productId='+prodId,
		     type: 'GET',
		     success: function(html){
		    	 
		    	 $('.modal-body').load('/?action=productDetail&ajax=1&productId='+$prodId,function(result){
		 		    $('#voteModal').modal({show:true});
		 		});
		     },
		     error: function(){
		       alert("error");
		     }  
		  });  
		}else{
			 $('#voteModal').modal('hide');
		}	 
	});
	
	
$('#voteAction').click(function(){
		var actionBtn1 = $('#actionBtn1').val();
		switch (actionBtn1) {
		case 'saveVote':
			var prodId = $('#paramsBtn1').val();
			var email = $('#email').val();
			var phone = $('#phone').val();

			if((email && isValidEmailAddress( email )) || phone){
				
			  $.ajax({
			     url:  '/?action=saveVote',
			     type: 'POST',
			     data: { email: email, phone: phone },
			     success: function(html){
			    	 $('.modal-body').load('/?action=saveVote&ajax=1',function(result){
			    		 $('#voteModal').modal('hide');
			 		});
			     },
			     error: function(){
			       alert("error");
			     }  
			  });  
			}else{
				$(".error").html("Votre mail ou numéro de téléphone incorect");
				//$('#voteModal').modal('hide');
			}
			break;
			
		default:
			var prodId = $('#paramsBtn1').val();
		if(prodId){
		  $.ajax({
		     url:  '/?action=addVote&productId='+prodId,
		     type: 'GET',
		     success: function(html){
		    	 $('.modal-body').load('/?action=confirmVote&ajax=1',function(result){
		 		    $('#voteModal').modal({show:true});
		 		   if(screen_w==1080){
		 			   $('#phone').keyboard(); 
		 			   $('#email').keyboard();
		 		   }
		 		 
		 		});
		     },
		     error: function(){
		       alert("error");
		     }  
		  });  
		}else{
			 $('#voteModal').modal('hide');
		}
			break;
		}
	
	});
	
});	


var editor = CKEDITOR.replace( 'editor1', {
		filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
		filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
		filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor, '../' );



//		DEVELOPED BY 
//		SAYEED HASAN
//sayeedhasan169@gmail.com

window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        var element = document.getElementById("nav-logo");
        if (currentScrollPos<=200) {
          element.style.width = "100%";
        } else {
          element.style.width = "70%";
        }
      }

window.addEventListener('load', function(){
	var images = document.getElementsByTagName('img');
	for(var i=0; i<images.length; i++){
		images[i].setAttribute('src', images[i].getAttribute('data-src'));
	}
}, false);

$('#email_form').submit(function(event){
	event.preventDefault();
	$.ajax({
		type: 'POST',
		url: 'http://localhost/human_library/mail.php',
		data: $(this).serialize(),
		success: function(result){
	    // console.log(result);
	    var status = document.getElementById('mail_status');
	    if(result==1){
	      status.innerHTML = "We have heared you voice!";
	      status.classList.add("text-success");
	    }else{
	      status.innerHTML = "Error while sending";
	      status.classList.add("text-danger");
	    }
	    document.getElementById('email_form').reset();
	  }
	});
});
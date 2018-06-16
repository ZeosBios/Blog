$(document).ready(function() {
   $('#add_comment').click(function() {
	   var obj = $('#form_add_comment').serialize();  
	   $.ajax({
		   url: 'functions.php',
		   cache: false,
           type: 'POST',
		   dataType: 'json',
		   data: obj,
		   success: function() {
			   alert('Комментарий добавлен');
		   },
		   error: function() {
			   alert('Ошибка при добавлении комментария');
		   },
	   });
	   return false;
   });
});

function inter() {
	setTimeout(function() {window.location.reload();}, 150);
}

$(document).ready(function() {
   $('#add_article').click(function() {
	   var obj = $('#form_add_article').serialize();  
	   $.ajax({
		   url: 'functions.php',
		   cache: false,
           type: 'POST',
		   dataType: 'json',
		   data: obj,
		   success: function() {
			   alert('Статья опубликована');
		   },
		   error: function() {
			   alert('Ошибка');
		   },
	   });
	   return false;
   });
});
function backAr() {
	setTimeout(function() {document.location.href = "http://localhost/site/?view=article&;";}, 250);
}


$(document).ready(function() {
   $('#add_project').click(function() {
	   var obj = $('#form_add_project').serialize();  
	   $.ajax({
		   url: 'functions.php',
		   cache: false,
           type: 'POST',
		   dataType: 'json',
		   data: obj,
		   success: function() {
			   alert('Проект добавлен');
		   },
		   error: function() {
			   alert('Ошибка');
		   },
	   });
	   return false;
   });
});

function backPr() {
	setTimeout(function() {document.location.href = "http://localhost/site/?view=project&;";}, 250);
}
$(document).ready(function() {
   $('#add_advert').click(function() {
	   var obj = $('#form_add_advert').serialize();  
	   $.ajax({
		   url: 'functions.php',
		   cache: false,
           type: 'POST',
		   dataType: 'json',
		   data: obj,
		   success: function() {
			   alert('Проект добавлен');
		   },
		   error: function() {
			   alert('Ошибка');
		   },
	   });
	   return false;
   });
});
function backAd() {
	setTimeout(function() {document.location.href = "http://localhost/site/?view=advert&;";}, 250);
}
$(document).ready(function() {
   $('#add_user').click(function() {
	   var obj = $('#form_add_user').serialize();  
	   $.ajax({
		   url: 'functions.php',
		   cache: false,
           type: 'POST',
		   dataType: 'json',
		   data: obj,
		   success: function() {
			   alert('Регистрация прошла успешно');
		   },
		   error: function() {
			   alert('Ошибка при добавлении регистарции');
		   },
	   });
	   return false;
   });
});   



$(document).ready(function (){
    $.ajax({
        'url' : './Controller/ShowAllContactController.php',
        'type' : 'GET',
        success : function(data){
          data = JSON.parse(data);
          data = data.data;
          data.forEach(dt => {
              
          });  
        }
    });
});
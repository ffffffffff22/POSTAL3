var url = window.location.href;
$(document).ready(function () 
    {
        $('#find_number').click(function(){
            document.getElementById("valid_number").innerHTML = "";
            document.getElementById("invalid_number").innerHTML = "";
            var number = document.getElementById("number_input");
            $.ajax({
                url: url+"ajax/" + number.value,
                success: function( result ) {
                  if(result == "Número invalido")
                  {
                    document.getElementById("invalid_number").innerHTML = "Número invalido";
                  }
                  else
                  {
                    document.getElementById("valid_number").innerHTML = result;
                  }
                }
            });
        });
    }
);
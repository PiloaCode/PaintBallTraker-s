
var input = $("input[name = cMdp]");
var login = $('input[name=login]');
var mdp = $('input[name=mdp]');
var add = $("#loginDiv");
var add = $('#mdpDiv');
var form = $('#form');
var cMdp = $('input[name=cMdp]')

var dataLogin = 'login=' + login.val();
var dataMdp = {mdp: mdp.val(), cMdp: cMdp.val()};

var data = 
/*input.keyup(function (e) { 
    //alert("Le texte change");
    //$('#cMdp').val().alert()
   // $('#mdp').val().alert()

    if( $('#mdp').val() != $('#cMdp').val())
    {
        e.preventDefault();
        $("form").after("<p>c pas les même</p>");

    }
    else
    {
        alert("Salut");
    }
    
});*/

login.keyup(function (e) { $.ajax({ 
    url: "include/AjaxLogin.inc.php",
    type:"GET" ,
    data: {login: login.val()},
    
    success: function (response) 
    {
        
        if(response == "True")
        {
            $('input[name=login]').css({"border": "solid", "border-color": "green"});
        }
        else
        {
            $('input[name=login]').css({"border": "solid", "border-color": "red"});
        }
    }
});
});

cMdp.keyup(function(e){
    $.ajax({
        url: "include/AjaxMdp.inc.php",
        type: "GET",
        data: {mdp: mdp.val(), cMdp: cMdp.val()},

        success: function (response) 
        {
            if(response === "True")
            {
                $('input[name=cMdp]').css({"border": "solid", "border-color": "green"});
            }
            else
            {
                $('input[name=cMdp]').css({"border" : "solid", "border-color": "red"});
            }
        }
    });
});



test.keyup(function(e)
{
    e.preventDefault();
  
});

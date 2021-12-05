
var input = $("input[name = cMdp]");
var login = $('input[name=login]');
var mdp = $('input[name=mdp]');
var add = $("#loginDiv");
var add = $('#mdpDiv');
var form = $('#form');
var cMdp = $('input[name=cMdp]')

//recuperation buton html de la pages Matchs
var addMatch = $('#addMatch');
var printMatch = $('#printMatch');
var addMEquipe = $('#addMEquipe');
//recupe div a changer
var result = $('#result');

var dataLogin = 'login=' + login.val();

var dataMdp = {mdp: mdp.val(), cMdp: cMdp.val()};

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
    url: "ajax/AjaxLogin.inc.php",
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
        url: "ajax/AjaxMdp.inc.php",
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

printMatch.click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "get",
        url: "ajax/Matchs.ajax.php",
        success: function (response) 
        {
            result.html(response);
        }
    });
    
});

addMatch.click(function (e) { 
    e.preventDefault();

    $.ajax({
        type: "get",
        url: "ajax/addMatch.ajax.php",
        success: function (response) 
        {
            result.html(response);
        }
    });
    
});

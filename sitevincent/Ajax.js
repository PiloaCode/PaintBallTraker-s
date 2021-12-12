
var input = $("input[name = cMdp]");
var login = $('input[name=login_i]');
var mdp = $('input[name=mdp]');
var add = $("#loginDiv");
var add = $('#mdpDiv');
var form = $('#form');
var cMdp = $('input[name=cMdp]')

//recuperation buton html de la pages Matchs
var addMatch = $('#addMatch');
var printMatch = $('#printMatch');
var addEquipe = $('#addMEquipe');
var addMembre = $('#addMembre');

//recupe des div a changer
var result = $('#result');
var formMatch = $('#formMatch');

var dataLogin = 'login_i=' + login.val();

var dataMdp = {mdp: mdp.val(), cMdp: cMdp.val()};

login.keyup(function (e) { $.ajax({ 
    url: "ajax/AjaxLogin.inc.php",
    type:"GET" ,
    data: {login: login.val()},
    
    success: function (response) 
    {
        if(response == "True")
        {
            $('input[name=login_i]').css({"border": "solid", "border-color": "green"});
        }
        else
        {
            $('input[name=login_i]').css({"border": "solid", "border-color": "red"});
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
    $('#formMatch').attr('hidden', '');
    $('#formEquipe').attr('hidden', '');
    $('#formMenbre').attr('hidden', '');

    $.ajax({
        type: "get",
        url: "ajax/Matchs.ajax.php",
        success: function (response) 
        {
            result.html(response);
        }
    });
    
});

addMatch.click(function (e) 
{    
    $('#formMatch').removeAttr('hidden');
    $('#formEquipe').attr('hidden', '');
    $('#formMenbre').attr('hidden', '');
    result.html('');
});

addEquipe.click(function (e)
{
    $('#formEquipe').removeAttr('hidden');
    $('#formMatch').attr('hidden', '');
    $('#formMenbre').attr('hidden', '');
    result.html('');
});

addMembre.click(function(e)
{
    $('#formMenbre').removeAttr('hidden');
    $('#formMatch').attr('hidden', '');
    $('#formEquipe').attr('hidden', '');
    result.html('');

});




$(document).ready(function() {
    //connexion
    $("#login_btn").click(function(){
      var login = $("#login").val();
      var password = $("#password").val();

      $.ajax({
        url:"login.php",
        type:"post",
        data:{login:login, password:password},
        success : function(data)
        {
          $("#affreslt_aut").html(data);
        }
      });

    //  guy.showNotificationerror('top','right','Login ou mots de passe incorect');
    })
    //enregistrer un client
    $("#enr_cli").click(function(){
      var nom_client = $("#nom_client").val();
      var mail = $("#mail").val();

      $.ajax({
        url:"clients.php",
        type:"post",
        data:{nom_client:nom_client, mail:mail},
        success : function(data)
        {
          $("#affreslt_aut").html(data);
        }
      });
    })

  $('#data-table-basic').DataTable();

  //vente des articles patalons ou Chemises
$("#art").change(function(){
  //var nbr = 0;
  if ($("#art").val() == "1") {
    $("#tot").val("");
    $("#nbr").val("");

    $("#pu").parent().removeClass("is-empty");
    $("#pu").val("20");

    $("#nbr").keyup(function(){
      var nbr = $("#nbr").val();

      //if(parseInt(nbr) >= 0 ) console.log("wheee1");
      if(parseInt(nbr) >= 0 ) nbr =  parseInt(nbr);
      else nbr = 0;

      $("#tot").parent().removeClass("is-empty");
       tot = parseInt($("#pu").val()) * parseInt(nbr) ;
        $("#tot").val(tot);
    })
    $("#tot").val("");

  }
  else if($("#art").val() == "2")  {
    $("#tot").val("");
    $("#nbr").val("");

    $("#pu").parent().removeClass("is-empty");
    $("#pu").val("35");

    $("#nbr").keyup(function(){
      $("#tot").parent().removeClass("is-empty");
      var nbr = $("#nbr").val();

      if(parseInt(nbr) >= 0 ) nbr =  parseInt(nbr);
      else nbr = 0;

      var tot = parseInt($("#pu").val()) * parseInt(nbr);
        $("#tot").val(tot);
    })
  }
});

// cl
// code

$("#cl").change(function(){
  $("#code").parent().removeClass("is-empty");
    $("#code").val($("#cl").val());
});


//save ventes
$("#vente").click(function(){

  var art = $("#art").val();
  var tot = $("#tot").val();
  var code = $("#code").val();

  console.log(art)
  console.log(tot)
    console.log(code)

  $.ajax({
    url:"vente.php",
    type:"post",
    data:{
      art:art,
      tot:tot,
      code:code
    },
    success : function(data)
    {
      $("#affreslt_aut").html(data);
    }
  });

});


    //type = ['', 'info', 'success', 'warning', 'danger'];
    guy = {
        initPickColor: function() {
            $('.pick-class-label').click(function() {
                var new_class = $(this).attr('new-class');
                var old_class = $('#display-buttons').attr('data-class');
                var display_div = $('#display-buttons');
                if (display_div.length) {
                    var display_buttons = display_div.find('.btn');
                    display_buttons.removeClass(old_class);
                    display_buttons.addClass(new_class);
                    display_div.attr('data-class', new_class);
                }
            });
        },

        showNotificationerror: function(from, align,messg) {
            $.notify({
                icon: "notifications",
                message: messg
            }, {
                type: 'danger',
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });
        },

        showNotificationSucces: function(from, align,messg) {
            $.notify({
                icon: "notifications",
                message: messg
            }, {
                type: 'success',
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }

    }

});

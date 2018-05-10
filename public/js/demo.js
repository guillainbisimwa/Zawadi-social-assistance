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
    })
    //enregistrer un client
    $("#enr_cli1").click(function(){
      var nom_parent = $("#nom_parent1").val();
      var Age = $("#Age").val();
      var genre = $("#genre").val();
      var etat_civil = $("#etat_civil").val();
      var Telephone = $("#Telephone").val();
      var Fonction = $("#Fonction").val();
      var Adresse = $("#Adresse").val();
      var niv_rev = $("#niv_rev").val();
      var taille_menage = $("#taille_menage").val();
      var t_m_g = $("#t_m_g").val();
      var t_m_f = $("#t_m_f").val();
      var enf_sco = $("#enf_sco").val();
      var enf_sco_g = $("#enf_sco_g").val();
      var enf_sco_f = $("#enf_sco_f").val();
      var enf_zsa = $("#enf_zsa").val();
      var enf_zsa_g = $("#enf_zsa_g").val();
      var enf_zsa_f = $("#enf_zsa_f").val();

      console.log("---> "+nom_parent);

      $.ajax({
        url:"clients.php",
        type:"post",
        data:{
          nom_parent : nom_parent,
          Age : Age,
          genre : genre,
          etat_civil : etat_civil,
          Telephone : Telephone,
          Fonction : Fonction,
          Adresse : Adresse,
          niv_rev : niv_rev,
          taille_menage : taille_menage,
          t_m_g : t_m_g,
          t_m_f : t_m_f,
          enf_sco : enf_sco,
          enf_sco_g : enf_sco_g,
          enf_sco_f : enf_sco_f,
          enf_zsa : enf_zsa,
          enf_zsa_g : enf_zsa_g,
          enf_zsa_f : enf_zsa_f
        },
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

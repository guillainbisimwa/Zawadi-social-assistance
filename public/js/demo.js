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

  $('#data-table-basic').DataTable();

// cl
// code

$("#cl").change(function(){
  $("#code").parent().removeClass("is-empty");
    $("#code").val($("#cl").val());
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

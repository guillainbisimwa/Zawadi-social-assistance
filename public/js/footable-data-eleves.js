/*FooTable Init*/
$(function () {
	"use strict";

	/*Init FooTable*/
	$('#elev_footable_1,#elev_footable_3').footable();

	/*Editing FooTable*/

	var $modal = $('#elev_editor-modal'),
	$editor = $('#elev_editor'),
	$editorTitle = $('#elev_editor-title'),
	ft = FooTable.init('#elev_footable_2', {
		editing: {
			enabled: true,
			addRow: function(){
				$modal.removeData('row');
				$editor[0].reset();
				$editorTitle.text('Ajouter un parent');
				$modal.modal('show');
			},
			editRow: function(row){
				var values = row.val();

				//set is-focused Class
				$editor.find('.label-floating').addClass("is-focused");
				//var id2 = $(this).parent().parent().attr("id");


				$editor.find('#elev_id').val(values.id);
				$editor.find("#elev_nom_eleve").val(values.nom_parent);
				$editor.find("#elev_Age").val(values.Age);
				$editor.find("#elev_genre").val(values.genre);
				$editor.find("#elev_matricule").val(values.etat_civil);
				$editor.find("#elev_degre").val(values.Telephone);
				$editor.find("#elev_class").val(values.Fonction);
				$editor.find("#elev_id_parent").val(values.Adresse);
				$editor.find("#elev_id_ecole").val(values.niv_rev);

				$modal.data('row', row);
				$editorTitle.text('Modification #' + values.id);
				$modal.modal('show');
			},
			deleteRow: function(row){
				if (confirm('Are you sure you want to delete the row?')){
					row.delete();
				}
			}
		}
	}),
	uid = 10;

	$editor.on('submit', function(e){
		if (this.checkValidity && !this.checkValidity()) return;
		e.preventDefault();
		var row = $modal.data('row'),
			values = {

				elev_nom_eleve : $editor.find("#elev_nom_eleve").val(),
				elev_Age : $editor.find("#elev_Age").val(),
				elev_genre : $editor.find("#elev_genre").val(),
				elev_matricule : $editor.find("#elev_matricule").val(),
				elev_degre : $editor.find("#elev_degre").val(),
				elev_class : $editor.find("#elev_class").val(),
				elev_id_parent : $editor.find("#elev_id_parent").val(),
				elev_id_ecole : $editor.find("#elev_id_ecole").val()
			};

			var _elev_id = values.elev_id;
			var _elev_nom_eleve = values.elev_nom_eleve;
			var _elev_Age = values.elev_Age;
			var _elev_genre = values.elev_genre;
			var _elev_matricule = values.elev_matricule;
			var _elev_degre = values.elev_degre;
			var _elev_class = values.elev_class;
			var _elev_id_parent = values.elev_id_parent;
			var _elev_id_ecole = values.elev_id_ecole;


		if (row instanceof FooTable.Row){
			//row.val(values);
			//ajax submit update
			$.ajax({
					 type: "POST",
					 url: "eleves.php",
					 data:{id : "0"},
					 success: function(data) {
							 row.val(values);
							 $modal.modal('hide');
						 }
				 });
		} else {
			//ajax submit create
			$.ajax({
        url:"eleves.php",
        type:"post",
        data:{
          elev_nom_eleve : _elev_nom_eleve,
          elev_Age : _elev_Age,
          elev_genre : _elev_genre,
          elev_matricule : _elev_matricule,
          elev_degre : _elev_degre,
          elev_class : _elev_class,
          elev_id_parent : _elev_id_parent,
          elev_id_ecole : _elev_id_ecole
        },
        success : function(data)
        {
					$('#elev_affreslt_aut2').html(data);
					if(data == "ok") {
						//values.id = uid++
						ft.rows.add(values);
						$modal.modal('hide');
					}
					else {
						$('#elev_affreslt_aut').html("Erreur, Impossible...");
					}
          //$("#elev_affreslt_aut").html(data);
					//ft.rows.add(values);
					//$modal.modal('hide');
					/*values.id = uid++;
				 ft.rows.add(values);*/
        }
      });
			/*$.ajax({
					 type: "POST",
					 url: "clients.php",
					 data:{id : "0"},
					 success: function(data) {
							 ft.rows.add(values);
							 $modal.modal('hide');

						 }
				 });*/
		}
		//$modal.modal('hide');
	});
});

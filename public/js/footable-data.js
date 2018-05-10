/*FooTable Init*/
$(function () {
	"use strict";

	/*Init FooTable*/
	$('#footable_1,#footable_3').footable();

	/*Editing FooTable*/

	var $modal = $('#editor-modal'),
	$editor = $('#editor'),
	$editorTitle = $('#editor-title'),
	ft = FooTable.init('#footable_2', {
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

				$editor.find('#id').val(values.id);
				$editor.find("#nom_parent").val(values.nom_parent);
				$editor.find("#Age").val(values.Age);
				$editor.find("#genre").val(values.genre);
				$editor.find("#etat_civil").val(values.etat_civil);
				$editor.find("#Telephone").val(values.Telephone);
				$editor.find("#Fonction").val(values.Fonction);
				$editor.find("#Adresse").val(values.Adresse);
				$editor.find("#niv_rev").val(values.niv_rev);
				$editor.find("#taille_menage").val(values.taille_menage);
				$editor.find("#t_m_g").val(values.t_m_g);
				$editor.find("#t_m_f").val(values.t_m_f);
				$editor.find("#enf_sco").val(values.enf_sco);
				$editor.find("#enf_sco_g").val(values.enf_sco_g);
				$editor.find("#enf_sco_f").val(values.enf_sco_f);
				$editor.find("#enf_zsa").val(values.enf_zsa);
				$editor.find("#enf_zsa_g").val(values.enf_zsa_g);
				$editor.find("#enf_zsa_f").val(values.enf_zsa_f);

				// $editor.find('#firstName').val(values.firstName);
				// $editor.find('#lastName').val(values.lastName);
				// $editor.find('#jobTitle').val(values.jobTitle);
				// $editor.find('#startedOn').val(values.startedOn);
				// $editor.find('#dob').val(values.dob);

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

				nom_parent : $editor.find("#nom_parent1").val(),
				Age : $editor.find("#Age").val(),
				genre : $editor.find("#genre").val(),
				etat_civil : $editor.find("#etat_civil").val(),
				Telephone : $editor.find("#Telephone").val(),
				Fonction : $editor.find("#Fonction").val(),
				Adresse : $editor.find("#Adresse").val(),
				niv_rev : $editor.find("#niv_rev").val(),
				taille_menage : $editor.find("#taille_menage").val(),
				t_m_g : $editor.find("#t_m_g").val(),
				t_m_f : $editor.find("#t_m_f").val(),
				enf_sco : $editor.find("#enf_sco").val(),
				enf_sco_g : $editor.find("#enf_sco_g").val(),
				enf_sco_f : $editor.find("#enf_sco_f").val(),
				enf_zsa : $editor.find("#enf_zsa").val(),
				enf_zsa_g : $editor.find("#enf_zsa_g").val(),
				enf_zsa_f : $editor.find("#enf_zsa_f").val()
			};

			var _id = values.id;
			var _nom_parent = values.nom_parent;
			var _Age = values.Age;
			var _genre = values.genre;
			var _etat_civil = values.etat_civil;
			var _Telephone = values.Telephone;
			var _Fonction = values.Fonction;
			var _Adresse = values.Adresse;
			var _niv_rev = values.niv_rev;
			var _taille_menage = values.taille_menage;
			var _t_m_g = values.t_m_g;
			var _t_m_f = values.t_m_f;
			var _enf_sco = values.enf_sco;
			var _enf_sco_g = values.enf_sco_g;
			var _enf_sco_f = values.enf_sco_f;
			var _enf_zsa = values.enf_zsa;
			var _enf_zsa_g = values.enf_zsa_g;
			var _enf_zsa_f = values.enf_zsa_f;

		if (row instanceof FooTable.Row){
			//row.val(values);
			//ajax submit update
			$.ajax({
					 type: "POST",
					 url: "clients.php",
					 data:{id : "0"},
					 success: function(data) {
							 row.val(values);
							 $modal.modal('hide');
						 }
				 });
		} else {
			//ajax submit create
			$.ajax({
        url:"clients.php",
        type:"post",
        data:{
          nom_parent : _nom_parent,
          Age : _Age,
          genre : _genre,
          etat_civil : _etat_civil,
          Telephone : _Telephone,
          Fonction : _Fonction,
          Adresse : _Adresse,
          niv_rev : _niv_rev,
          taille_menage : _taille_menage,
          t_m_g : _t_m_g,
          t_m_f : _t_m_f,
          enf_sco : _enf_sco,
          enf_sco_g : _enf_sco_g,
          enf_sco_f : _enf_sco_f,
          enf_zsa : _enf_zsa,
          enf_zsa_g : _enf_zsa_g,
          enf_zsa_f : _enf_zsa_f
        },
        success : function(data)
        {
					$('#affreslt_aut2').html(data);
					if(data == "ok") {
						//values.id = uid++
						ft.rows.add(values);
						$modal.modal('hide');
					}
					else {
						$('#affreslt_aut').html("Erreur, Impossible...");
					}
          //$("#affreslt_aut").html(data);
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

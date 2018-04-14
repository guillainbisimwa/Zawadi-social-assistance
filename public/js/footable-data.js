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

				nom_parent : $editor.find("#nom_parent").val(),
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

				// id: $editor.find('#id').val(),
				// firstName: $editor.find('#firstName').val(),
				// lastName: $editor.find('#lastName').val(),
				// jobTitle: $editor.find('#jobTitle').val(),
				// startedOn: moment($editor.find('#startedOn').val(), 'YYYY-MM-DD'),
				// dob: moment($editor.find('#dob').val(), 'YYYY-MM-DD')
			};

		if (row instanceof FooTable.Row){
			row.val(values);
		} else {
			values.id = uid++;
			ft.rows.add(values);
		}
		$modal.modal('hide');
	});
});

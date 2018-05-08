// JavaScript Document
 $(document).ready(function(){
	"use strict";
	// valida nombre
	var eregex1 = /[A-Za-z]/;
	$.validator.addMethod("validNombre", function( value, element ){
		return this.optional( element ) || eregex1.test( value );
	});

	// valida imail
	var eregex2 = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	$.validator.addMethod("validemail", function( value, element ){
		return this.optional( element ) || eregex2.test( value );
	});

	// valida telefono
	var eregex3 = /^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/;
	$.validator.addMethod("validTel", function( value, element ){
		return this.optional( element ) || eregex3.test( value );
	});

  // valida ciudad
  var eregex4 = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/;
	$.validator.addMethod("validCiudad", function( value, element ){
		return this.optional( element ) || eregex1.test( value );
	});

 $('#formularios').validate({
	 rules: {
		nombre:{
			required:true,
			validNombre:true
		},
  	email: {
			required: true,
			validemail: true,
			maxlength: 50
		},
		telefono: {
			required: true,
			minlength: 10,
			maxlength: 15,
			validTel:true
		 },
     ciudad:{
 			required:true,
 			validCiudad:true
 		},
    fecha:"required"
	},

	messages: {
		nombre:{
			required: "Este campo es requerido",
			validNombre: "El formato no coincide"
		},
		email:{
			required: "Este campo es requerido",
			validemail: "El formato no coincide",
			maxlength: "Maximmo 50 caracteres"
		},
		telefono:{
			required: "Este campo es requerido",
			minlength: "Mínimo 10 caracteres",
			maxlength: "Maximo 15 caracteres"
		},
  ciudad:{
			required: "Este campo es requerido",
			validCiudad: "El formato no coincide"
		},
    fecha:"este campo es requerido"
	},
	highlight: function (element) {
		$(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
		$(element).addClass('form-control-danger');
	},

	unhighlight: function ( element) {
		$(element).parents('.form-group').addClass('has-success');
		$(element).addClass('form-control-success');
		$(element).parents('.form-group').removeClass('has-danger');
		$(element).removeClass('form-control-danger');
	}
});




});

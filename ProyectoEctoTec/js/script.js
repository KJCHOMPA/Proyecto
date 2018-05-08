/*JavaScript Document*/

	$("#datepickerE").datepicker({
		showAnim: "clip",
		dateFormat: "yy-mm-dd",
		changeMonth:true,
		changeYear:true
	});

	    $(function() {
	        $("#location").autocomplete({
	            paramName: 'q',
	            ajaxSettings:{type: 'GET',
	                async: false,
	                dataType: 'json'},
	            transformResult: function(response) {

	                return {
	                    suggestions: $.map( response.data, function(data) {
	                        return { value: data.name, data: data.subtext };
	                    })
	                };
	            },
	            serviceUrl: 'https://graph.facebook.com/search?type=adcity&method=GET&format=json&suppress_http_code=1',
	            onSelect: function (suggestion) {
	                alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
	            }
	        });
	    });

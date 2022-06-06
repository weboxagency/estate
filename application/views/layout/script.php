<script src="<?php echo base_url('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/nanoscroller/nanoscroller.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-placeholder/jquery-placeholder.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/select2/js/select2.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/fuelux/js/spinner.js');?>"></script>

<!-- Jquery Datatables JS -->
<script src="<?php echo base_url('assets/vendor/datatables/media/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/media/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.colVis.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/extras/TableTools/RowGroup-1.0.2/js/dataTables.rowGroup.min.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/vendor/summernote/summernote.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-appear/jquery-appear.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-validation/jquery.validate.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/screenfull/screenfull.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/sweetalert/sweetalert.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/plug.init.js');?>"></script>
<script src="<?php echo base_url('assets/js/app.js')?>"></script>
<script src="<?php echo base_url('assets/js/app.fn.js')?>"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcVxlZlT3nO44ljCnR2f89GqzxkuCQftY&libraries=places&callback=initMap&language=az"></script>

<script type="text/javascript">
	jQuery.extend(jQuery.validator.messages, {
		required: "<?=translate('this_value_is_required')?>",
		email: "<?=translate('enter_valid_email')?>",
		url: "Please enter a valid URL.",
		date: "Please enter a valid date.",
		dateISO: "Please enter a valid date (ISO).",
		number: "Please enter a valid number.",
		digits: "Please enter only digits.",
		remote: "Please fix this field.",
		creditcard: "Please enter a valid credit card number.",
		equalTo: "Please enter the same value again.",
		accept: "Please enter a value with a valid extension.",
		maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
		minlength: jQuery.validator.format("Please enter at least {0} characters."),
		rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
		range: jQuery.validator.format("Please enter a value between {0} and {1}."),
		max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
		min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
	});
</script>

<script type="text/javascript">
	$('.room').hide();
	$('.floor').hide();
	$('.max-floor').hide();
	$('.land-area').hide();
	$('.region').hide();
	$('.district').hide();
	$('.deed').hide();
	$('.mortgage').hide();
	$('.repair').hide();

	$('#estate_type').change(function(){
		var estate_type_id = $(this).val();
		if(estate_type_id == 1 || estate_type_id == 2)
		{
			$('.deed').show();
			$('.mortgage').show();
			$('.repair').show();
			$('.room').show();
			$('.floor').show();
			$('.max-floor').show();
		}
		else if(estate_type_id==3 || estate_type_id == 4)
		{
			$('.deed').show();
			$('.mortgage').show();
			$('.repair').show();
			$('.room').show();

			$('.floor').hide();
			$('.max-floor').hide();
		}
		else if(estate_type_id == 5)
		{
			$('.deed').show();
			$('.mortgage').show();
			$('.repair').show();
			$('.room').show();
			$('.area').show();
			$('.land-area').hide();
		}
		else if(estate_type_id == 6)
		{
			$('.deed').show();
			$('.mortgage').show();
			$('.repair').hide();
			$('.room').hide();
			$('.area').show();
			$('.land-area').show();
		}
		else if(estate_type_id == 7 || estate_type_id == 8)
		{
			$('.deed').show();
			$('.mortgage').show();
			$('.repair').show();
			$('.area').show();
			$('.room').hide();
			$('.land-area').hide();
		}
		else 
		{
			$('.room').hide();
			$('.floor').hide();
			$('.max-floor').hide();
			$('.land-area').hide();
			$('.region').hide();
			$('.district').hide();
			$('.deed').hide();
			$('.mortgage').hide();
			$('.repair').hide();
		}
	})

	var loadFile = function(event) {
    var output = document.getElementById('file');
	    output.src = URL.createObjectURL(event.target.files[0]);
	    output.onload = function() {
	      URL.revokeObjectURL(output.src) // free memory
	    }
  	};

		const image_input = document.querySelector("#image-input");
			image_input.addEventListener("change", function() {
			  const reader = new FileReader();
			  reader.addEventListener("load", () => {
			    const uploaded_image = reader.result;
			    document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
			  });
			  reader.readAsDataURL(this.files[0]);
			  alert("Salam");
			});
</script>
<script type="text/javascript">
	function initMap()
        {
            var geocoder = new google.maps.Geocoder();

            var map = new google.maps.Map(
                document.getElementById( 'gmap' ),
                {
                    center : {
                        lat: 40.3913,
                        lng: 49.8666
                    },
                    zoom : 15,
                    // disableDefaultUI: true,
                    mapTypeId: "roadmap",
                    fullscreenControl: true,
                    fullscreenControlOptions : {
                        position : google.maps.ControlPosition.RIGHT_TOP
                    }
                }
            );

            var input = document.getElementById("pac-input");
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            let markers = [];

            var defaulticon = {
                lat : 40.3913 ,
                lng : 49.8666
            };

            var map = new google.maps.Map(
                document.getElementById( 'gmap' ) ,
                {
                    zoom : 15 ,
                    center : defaulticon
                }
            );

            
            var request = {
                placeId : 'ChIJN1t_tDeuEmsRUsoyG83frY4' ,
                fields : [ 'name' , 'formatted_address' , 'place_id' , 'geometry' ]
            };

            var infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService( map );

            service.getDetails( request , function( place , status )
            {
                if( status === google.maps.places.PlacesServiceStatus.OK )
                {
                    var flag = 0;
                    var x;
                    searchBox.addListener("places_changed", function( event ) {
                        const places = searchBox.getPlaces();

                        if (places.length == 0) {
                            return;
                        }

                        deleteMarkers();

                        const bounds = new google.maps.LatLngBounds();
                        places.forEach((place) => {
                            if (!place.geometry) {
                                console.log("Returned place contains no geometry");
                                return;
                            }

                            placeMarker(place.geometry.location);

                            if (place.geometry.viewport) {
                                bounds.union(place.geometry.viewport);
                            } else {
                                bounds.extend(place.geometry.location);
                            }
                            $("#map-id").attr('src',`https://maps.googleapis.com/maps/api/staticmap?center=${place.geometry.location.lat()},${place.geometry.location.lng()}&zoom=11&size=360x220&maptype=roadmap&markers=${place.geometry.location.lat()},${place.geometry.location.lng()}&key=AIzaSyCcVxlZlT3nO44ljCnR2f89GqzxkuCQftY`);
                            document.getElementById( "latitude" ).value = place.geometry.location.lat();
                            document.getElementById( "longitude" ).value = place.geometry.location.lng();
                            // geocoder.geocode( {
                            //     'latLng' : place.geometry.location
                            // } , function( results , status )
                            // {
                            //     if( status == google.maps.GeocoderStatus.OK )
                            //     {
                            //         if( flag == 0 )
                            //         {
                            //             if( results[ 0 ] && document.getElementById( "location" ).value == "" )
                            //             {
                            //                 document.getElementById( "location" ).value = results[ 0 ].formatted_address;
                            //                 flag = 1;
                            //             }
                            //             else
                            //             {
                            //                 x = document.getElementById( "location" ).value;
                            //             }
                            //         } else
                            //         {
                            //             if( results[ 0 ] && document.getElementById( "location" ).value != x )
                            //             {
                            //                 document.getElementById( "location" ).value = results[ 0 ].formatted_address;
                            //             } else
                            //             {
                            //                 document.getElementById( "location" ).value = x;
                            //             }
                            //         }
                            //     }
                            // } );
                        });
                        map.fitBounds(bounds);
                    });
                    map.addListener("bounds_changed", () => {
                        searchBox.setBounds(map.getBounds());
                    });
                    google.maps.event.addListener( map , 'click' , function( event )
                    {

                        $("#map-id").attr('src',`https://maps.googleapis.com/maps/api/staticmap?center=${event.latLng.lat()},${event.latLng.lng()}&zoom=11&size=360x220&maptype=roadmap&markers=${event.latLng.lat()},${event.latLng.lng()}&key=AIzaSyCcVxlZlT3nO44ljCnR2f89GqzxkuCQftY`)

                        deleteMarkers();
                        placeMarker( event.latLng );
                        // geocoder.geocode( {
                        //     'latLng' : event.latLng
                        // } , function( results , status )
                        // {
                        //     if( status == google.maps.GeocoderStatus.OK )
                        //     {
                        //         if( flag == 0 )
                        //         {
                        //             if( results[ 0 ] && document.getElementById( "location" ).value == "" )
                        //             {
                        //                  document.getElementById( "location" ).value = results[ 0 ].formatted_address;
                        //                  flag = 1;
                        //             } else
                        //             {
                        //                 x = document.getElementById( "location" ).value;
                        //             }
                        //         } else
                        //         {
                        //             if( results[ 0 ] && document.getElementById( "location" ).value != x )
                        //             {
                        //                document.getElementById( "location" ).value = results[ 0 ].formatted_address;
                        //             } else
                        //             {
                        //                  document.getElementById( "location" ).value = x;
                        //             }
                        //         }
                        //     }
                        // } );

                        document.getElementById( "latitude" ).value = event.latLng.lat();
                        document.getElementById( "longitude" ).value = event.latLng.lng();

                    } );

                    function placeMarker( location )
                    {

                        var marker = new google.maps.Marker( {
                            position : location ,
                            map : map
                        } );
                        markers.push( marker );
                    }

                    function setMapOnAll( map )
                    {
                        for( var i = 0; i < markers.length; i++ )
                        {
                            markers[ i ].setMap( map );
                        }
                    }

                    function clearMarkers()
                    {
                        setMapOnAll( null );
                    }

                    function deleteMarkers()
                    {
                        clearMarkers();
                        markers = [];
                    }
                }

            } );
        }
</script>
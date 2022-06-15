<footer class="footer">
   <div class="footer-navbar">
      <ul>
         <li>
            <a href="az/axtar.html">
               <svg class="icon icon-home">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-home"></use>
               </svg>
               <p><?= translate('home') ?></p>
            </a>
         </li>
         <li>
            <a href="<?= base_url() ?>add_listing">
               <svg class="icon icon-plusnew">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-plusnew"></use>
               </svg>
               <p><?= translate('add_listing') ?></p>
            </a>
         </li>
         <li>
            <a href="az/axtar.html">
               <svg class="icon icon-loupe">
                  <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-loupe"></use>
               </svg>
               <p><?= translate('search') ?></p>
            </a>
         </li>
         
         
      </ul>
   </div>
   <div class="page-container container">
      <div class="footer-primary">
         <div class="footer-primary__container container d-flex justify-content-between">
            <p><?= translate('follow_us_on_social_networks') ?></p>
            <div class="links">
               <a target="_blank" href="https://www.facebook.com/www.evelani.az" class="links-social links-facebook">
                  <svg class="icon icon-facebook">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-facebook"></use>
                  </svg>
               </a>
               <a target="_blank" href="https://www.instagram.com/estate.az/" class="links-social links-instagram">
                  <svg class="icon icon-instagram">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-instagram"></use>
                  </svg>
               </a>
               <a target="_blank" href="https://www.youtube.com/channel/UCCrOZVl8IDhrV7AqbGK_FjQ" class="links-social links-youtube">
                  <svg class="icon icon-youtube">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-youtube"></use>
                  </svg>
               </a>
               <a target="_blank" href="https://www.linkedin.com/company/evelani-az/" class="links-social links-linkedin">
                  <svg class="icon icon-linkedin">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-linkedin"></use>
                  </svg>
               </a>
               <a target="_blank" href="https://twitter.com/EvelaniAz" class="links-social links-twitter">
                  <svg class="icon icon-twitter">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-twitter"></use>
                  </svg>
               </a>
               <a target="_blank" href="https://t.me/Evelani" class="links-social links-telegram">
                  <svg class="icon icon-telegram">
                     <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-telegram"></use>
                  </svg>
               </a>
            </div>
         </div>
      </div>
      <div class="footer-secondary">
         <div class="footer-secondary__container container">
            <div class="footer-secondary__column footer-secondary--about">
               <a href="<?= base_url() ?>" class="logo">
               <img src="<?php echo base_url('uploads/frontend/images/' . $cms_setting['logo']); ?>">
               </a>
               <p>Estate.az daşınmaz əmlakın satış və kirayəsi xidmətlərini digital sferada təqdim edən platformadır. Estate.az saytı vasitəsilə daşınmaz əmlakınızın satış və kirayəsini, tez və interaktiv şəkildə təşkil edə, yüksək məhsuldarlıq əldə edə bilərsiniz.</p>
            </div>
            <div class="footer-secondary__column footer-nav  d-lg-flex">
               <h6>Ümumi</h6>
               <a href="az/istifadeci-razilasmasi.html">İstifadəçi razılaşması</a>
               <a href="az/haqqimizda.html">Haqqımızda</a>
               <a href="az/balansi-artirmaq.html">Balansı artır</a>
               <a href="az/reklam-yerlesdirmek.html">Reklam yerləşdir</a>
               <a href="az/sitemap.html" target="_blank">Saytın xəritəsi</a>
               <p class="footer-nav--date">© 2020 - 2022 Evelani.az</p>
            </div>
            <div class="footer-secondary__column footer-nav d-none d-lg-flex">
               <h6>Qısayollar</h6>
               <a href="az/agentlikler.html">Agentliklər</a>
               <a href="az/yasayis-kompleksleri.html">Yaşayış kompleksləri</a>
               <a href="az/insaat-sirketleri.html">İnşaat şirkətləri</a>
               <a href="az/biznez-merkezleri.html">Biznes mərkəzləri</a>
            </div>
            <div class="footer-secondary__column footer-contact d-none d-md-flex">
               <h6>Əlaqə</h6>
               <a href="tel:info@evelani.az"><span class="__cf_email__" data-cfemail="422b2c242d022734272e232c2b6c2338">[email&#160;protected]</span></a>
               <a href="tel:info@evelani.az"><span class="__cf_email__" data-cfemail="ec85828a83ac899a89808d8285c28d96">[email&#160;protected]</span></a>
               <a href="cdn-cgi/l/email-protection.html#e1888f878ea18497848d808f88cf809b"><span class="__cf_email__" data-cfemail="4b22252d240b2e3d2e272a2522652a31">[email&#160;protected]</span></a>
            </div>
         </div>
         <div class="footer-secondary__container container">
            <div class="footer-secondary__column footer-secondary--about" style="max-width: unset;">
               <p>© 2020 - 2022 Estate.az | Bütün hüquqlar qorunur</p>
            </div>
         </div>
         <div class="scroll-up">
            <i class="fas fa-chevron-up"></i>
         </div>
      </div>
   </div>
</footer>
<script src="<?= base_url('assets/site/admin/jquery-3.3.1.min.js') ?>"></script>
<script src='<?= base_url('assets/site/admin/sweetalert2.all.min.js') ?>'></script>
<script src='<?= base_url('assets/site/admin/underscore-min.js') ?>'></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcVxlZlT3nO44ljCnR2f89GqzxkuCQftY&libraries=places&callback=initMap&language=az">
    
</script>
<script>
    $(window).bind('load', function() {
        $('img').each(function() {
            if((typeof this.naturalWidth != "undefined" && this.naturalWidth == 0) || this.readyState == 'uninitialized') {
                $(this).attr('src', '<?php echo base_url('uploads/frontend/images/' . $cms_setting['logo']); ?>');
            }
        });
    });
function afterComplain()
{
    let modal = $( '[x-target="afterComplain"]' ).closest( '.modal' );

    modal.html( _.template( $( 'script[x-success]' ).html() )( { message : 'Şikayət qəbul olundu' } ) );

    modal.addClass( 'modal--small editmodal' );
}

        function afterPermit( data ) { location.href = data.link; }

        function afterDelete()
        {
            let modal = $( '[x-target="afterDelete"]' ).closest( '.modal' );

            modal.html( _.template( $( 'script[x-success]' ).html() )( { message : 'Elan müvəffəqiyyətlə silindi' , linkAfterClose : '' } ) );

            modal.addClass( 'modal--small editmodal' );
        }

        function afterPayment( data ) { if( data.link.length ) location.href = data.link; }

        function typeChange( input )
        {
            let type = input.val() , form = input.closest( 'form' );

            if( type == 'balance' )
            {
                form.find( '[name="period"]' ).each( function ()
                {
                    let price = $( this ).attr( 'x-price' );

                    if( 0 >= price ) $( this ).closest( 'div' ).show();

                    else $( this ).closest( 'div' ).hide();
                } );
            }

            else form.find( '[name="period"]' ).closest( 'div' ).show();
        }


        $( document ).ready( function()
        {
            $( document ).on( 'click' , '[name="type"]' , function () { typeChange( $( this ) ); } );
        });
    </script>

<script type="text/javascript">
   _.templateSettings.variable = "rc";
   var token = "<?php echo $this->security->get_csrf_hash();?>";
   let locale = 'az' ,
       csrf = token ,
       deleted_files = [] ,
       _map , _marker;
   
   
   function initMap( latitude = <?= (isset($ads_detail['latitude']) AND !empty($ads_detail['latitude'])) ? $ads_detail['latitude'] : '40.4093'; ?>  ,  longitude = <?= (isset($ads_detail['longitude']) AND !empty($ads_detail['longitude'])) ? $ads_detail['longitude'] : '49.8671'; ?>  )
   {
       var input = document.getElementById("pac-input");
       var searchBox = new google.maps.places.SearchBox(input);
   
       let defaultLocation = { lat: latitude , lng: longitude };
   
       _map = new google.maps.Map( document.getElementById( 'map' ) , { center: defaultLocation , zoom: 15 } );
   
       setLocation( defaultLocation );
       searchBox.addListener("places_changed", function( event ) {
           const places = searchBox.getPlaces();
   
           if (places.length == 0) {
               return;
           }
   
           const bounds = new google.maps.LatLngBounds();
           places.forEach((place) => {
               if (!place.geometry) {
                   console.log("Returned place contains no geometry");
                   return;
               }
   
               setLocation(place.geometry.location);
   
               if (place.geometry.viewport) {
                   bounds.union(place.geometry.viewport);
               } else {
                   bounds.extend(place.geometry.location);
               }
           });
           _map.fitBounds(bounds);
       });
       google.maps.event.addListener( _map , 'click' , function( event ) { setLocation( { lat: event.latLng.lat() , lng: event.latLng.lng() } ); } );
   }
   
   function setLocation( location )
   {
       if( _marker !== undefined ) _marker.setMap( null );
   
       _marker = new google.maps.Marker( { position: location , map: _map } );
   
       $( '[name="latitude"]' ).val( location.lat );
       $( '[name="longitude"]' ).val( location.lng );
   }
   
   
   function loading( state = 0 , target = false )
   {
       if( state )
       {
           if( !target )
           {
               $( '#loading' ).show();
   
               $( 'body' ).addClass( 'loading-progress' );
           } else
           {
               if( target.prop( 'tagName' ) == 'FORM' )
               {
                   target.append( '<div class="loading"><svg class="spinner" viewBox="0 0 50 50"><circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle></svg></div>' );
   
                   if( target.find( 'button[type="submit"]' ).length ) target.find( 'button[type="submit"]' ).attr( 'disabled' , 'disabled' );
               } else if( target.prop( 'tagName' ) == 'BUTTON' )
               {
                   target.append( '<svg class="spinner" viewBox="0 0 50 50"><circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle></svg>' );
   
                   target.attr( 'disabled' , 'disabled' );
               }
           }
       } else
       {
           if( !target )
           {
               $( '#loading' ).hide();
   
               $( 'body' ).removeClass( 'loading-progress' );
           } else
           {
               target.find( '.loading' ).remove();
   
               target.find( '.spinner' ).remove();
   
               if( target.prop( 'tagName' ) == 'FORM' && target.find( 'button[type="submit"]' ).length ) target.find( 'button[type="submit"]' ).removeAttr( 'disabled' );
   
               else if( target.prop( 'tagName' ) == 'BUTTON' ) target.removeAttr( 'disabled' );
           }
       }
   }
   
   
   function error( message = '' , title = "Xəta baş verdi" )
   {
       const swalWithBootstrapButtons = swal.mixin( {
           confirmButtonClass : 'btn btn-primary' ,
           buttonsStyling : false ,
       } );
   
       swalWithBootstrapButtons( {
           title : title ,
           text : message ,
           type : 'warning'
       } );
   
       loading();
   }
   
   
   function warning( title = "Xəta baş verdi" )
   {
       const swalWithBootstrapButtons = swal.mixin( {
           confirmButtonClass : 'btn btn-primary' ,
           buttonsStyling : false ,
       } );
   
       swalWithBootstrapButtons( {
           title : title ,
           type : 'warning'
       } );
   
       loading();
   }
   
   
   function init()
   {
       $( '.datetimepicker.dropdown-menu' ).remove();
       $( '.daterangepicker.dropdown-menu' ).remove();
   
       $( '[x-datetime]' ).each( function()
       {
           $( this ).datetimepicker( {
               todayHighlight : true ,
               pickerPosition : 'bottom-left' ,
               autoclose : true ,
               todayBtn : true ,
               format : 'yyyy-mm-dd hh:ii:ss' ,
               weekStart : 1 ,
               locale : locale
           } );
       } );
   
       $( '[x-date]' ).each( function()
       {
           let t = $( this ) , weekday = t.attr( 'x-weekday' ) ,
               $disabledWeekDays = weekday != undefined ? [ 0 , 1 , 2 , 3 , 4 , 5 , 6 ] : [];
   
           if( weekday != undefined )
           {
               $disabledWeekDays = jQuery.grep( $disabledWeekDays , function( value )
               {
                   return value != weekday;
               } );
           }
   
           $( this ).datetimepicker( {
               todayHighlight : true ,
               pickerPosition : 'bottom-left' ,
               autoclose : true ,
               todayBtn : true ,
               format : 'yyyy-mm-dd' ,
               startView : 2 , minView : 2 , forceParse : 0 ,
               weekStart : 1 ,
               daysOfWeekDisabled : $disabledWeekDays ,
               locale : locale
           } );
       } );
   
       $( '[x-date-range]' ).each( function()
       {
           let t = $( this ) , form = t.closest( 'form' );
   
           t.daterangepicker( {
               todayHighlight : true ,
               pickerPosition : 'bottom-left' ,
               autoclose : true ,
               todayBtn : true ,
               autoUpdateInput : false ,
               weekStart : 1 ,
               locale : {
                   format : 'YYYY-MM-DD'
               }
           } , function( start , end )
           {
               t.val( start.format( 'YYYY-MM-DD' ) + ' - ' + end.format( 'YYYY-MM-DD' ) );
   
               form.submit();
           } ).on( 'cancel.daterangepicker' , function()
           {
               t.val( '' );
   
               form.submit();
           } );
       } );
   
       $( '[x-select]' ).each( function()
       {
           $( this ).selectpicker();
       } );
   
       $( '[x-select-2]' ).each( function()
       {
           $( this ).select2();
       } );
   
       $( '[x-select-2-min]' ).each( function()
       {
           $( this ).select2( { minimumResultsForSearch : -1 } );
       } );
   
       $( '[x-select-2-url]' ).each( function()
       {
           let t = $( this ) , url = t.attr( 'x-select-2-url' ) , query = { _token : csrf } ,
               column = t.attr( 'x-data-column' ) !== undefined ? t.attr( 'x-data-column' ) : false ,
               value = t.attr( 'x-data-value' ) !== undefined ? t.attr( 'x-data-value' ) : null ,
               foreign = t.attr( 'x-foreign' ) ,
               input = t.closest( '[x-list-form]' ).find( '[name="' + foreign + '"]' );
   
           if( column ) query[ [ column ] ] = value;
   
           let column2 = t.attr( 'x-data-column2' ) !== undefined ? t.attr( 'x-data-column2' ) : false ,
               value2 = t.attr( 'x-data-value2' ) !== undefined ? t.attr( 'x-data-value2' ) : null;
           if( column2 ) query[ [ column2 ] ] = value2;
   
           t.select2( {
               ajax : {
                   url : url ,
                   type : 'POST' ,
                   data : function( params )
                   {
                       query.search = params.term;
   
                       if( input.length ) query[ [ foreign ] ] = input.val();
   
                       return query;
                   } ,
                   processResults : function( data )
                   {
                       return {
                           results : data.data
                       };
                   }
               }
           } );
       } );
   
       $( '[x-text-editor]' ).each( function()
       {
           let t = $( this ) , name = t.attr( 'name' ) ,
               height = t.attr( 'x-height' ) !== undefined ? t.attr( 'x-height' ) : 222;
   
           ClassicEditor.create( document.querySelector( '[name="' + name + '"]' ) , {
               language: 'az',
               toolbar: {
                   items: [
                       'heading',
                       '|',
                       'bold',
                       'italic',
                       'link',
                       'bulletedList',
                       'numberedList',
                       '|',
                       'indent',
                       'outdent',
                       '|',
                       'imageUpload',
                       'blockQuote',
                       'insertTable',
                       'mediaEmbed',
                       'undo',
                       'redo'
                   ]
               },
               image: {
                   styles: [
                       'alignLeft', 'alignCenter', 'alignRight'
                   ] ,
                   resizeOptions: [
                       {
                           name: 'resizeImage:original',
                           label: 'Orijinal ölçü',
                           value: null
                       },
                       {
                           name: 'resizeImage:25',
                           label: '25%',
                           value: 25
                       },
                       {
                           name: 'resizeImage:50',
                           label: '50%',
                           value: 50
                       },
                       {
                           name: 'resizeImage:75',
                           label: '75%',
                           value: 75
                       },
                       {
                           name: 'resizeImage:100',
                           label: '100%',
                           value: 100
                       }
                   ],
                   toolbar: [
                       'imageStyle:alignLeft', 'imageStyle:alignCenter', 'imageStyle:alignRight',
                       '|',
                       'resizeImage',
                       '|',
                       'imageTextAlternative'
                   ]
               },
               table: {
                   contentToolbar: [
                       'tableColumn',
                       'tableRow',
                       'mergeTableCells',
                       'tableCellProperties',
                       'tableProperties'
                   ]
               }
           } )
           .then( editor => {
               window.editor = editor;
           } )
           .catch( error => {
               console.error( error );
           } );
       } );
   
       $( '[data-switch=true]' ).bootstrapSwitch();
   
       $( '#modalMap' ).on( 'hidden.bs.modal' , function()
       {
           setTimeout( function()
           {
               if( $( '.modal' ).length )
                   $( 'body' ).addClass( 'modal-open' );
               else
                   $( 'body' ).removeClass( 'modal-open' );
   
           } , 5 );
       } );
   
       loading();
   }
   
   
   function createModal( title , body , close = true , widthClass = 'my-col-xs-12' , buttons = '' , headerClass = '' )
   {
       let modalNumber = createModalHTML( widthClass , close );
   
       let m = $( "#newModal" + modalNumber );
       m.find( ".modal-content" ).children( ":not([do=loading] , .modal-header:eq(0) , .modal-body:eq(0) , .modal-footer:eq(0))" ).remove();
       if( m.find( ".modal-content" ).children( ".modal-body" ).length == 0 )
       {
           m.find( ".modal-content" ).append( '<div class="modal-body"></div>' );
       }
       if( m.find( ".modal-content" ).children( ".modal-footer" ).length == 0 )
       {
           //m.find( ".modal-content" ).append( '<div class="modal-footer"></div>' );
       }
       m.find( ".modal-header" ).addClass( headerClass );
       m.find( ".modal-title" ).html( title );
       m.find( ".modal-body-content" ).html( body );
       m.find( ".modal-footer" ).html( buttons );
       m.css( 'cssText' , 'z-index: ' + ( 12 + modalNumber * 2 ) + ' !important; margin: 5px; position: absolute;' );
       m.modal( "show" );
   
       $( '.modal-backdrop' ).eq( modalNumber - 1 ).css( 'cssText' , 'z-index: ' + ( 11 + modalNumber * 2 ) + ' !important' );
   
       if( m.find( '[x-modal-title]' ) ) m.find( '.modal-title' ).html( m.find( '[x-modal-title]' ).attr( 'x-modal-title' ) );
   
       if( m.find( '[x-modal-class]' ) ) m.find( '.modal-dialog' ).addClass( m.find( '[x-modal-class]' ).attr( 'x-modal-class' ) );
   
       return m;
   }
   
   function createModalHTML( widthClass , close )
   {
       var n = 1;
       while( $( "#newModal" + n ).length ) n++;
       var effects = [ "flipInX" , "flipInY" , "pulse" , "jello" , "fadeIn" ] ,
           effect = effects[ Math.floor( Math.random() * 111 ) % effects.length ];
       $( "#m_aside_right" ).append( '<div class="modal scroll fade" id="newModal' + n + '" role="dialog" ' + ( close ? '' : 'data-backdrop="static"' ) + '><div class="modal-dialog ' + effect + ' ' + widthClass + ' animated"><div class="modal-content"><div class = "modal-header" style = "width: 100%; position: relative; padding: 8px;"><h4 class = "modal-title" style="font-size: 21px; margin-left: 10px;"></h4><span class="close-modal" data-dismiss="modal" aria-label="Bağla" style="position:absolute; top: 9px; right: 9px; cursor: pointer;"><i class="la la-close" style="font-size: 30px; font-weight: bold;"></i></span></div><div class="modal-body scroll" style="height: ' + ( window.innerHeight - 190 ) + 'px;"><div class="row modal-body-content"></div></div></div></div></div></div>' );
       $( "#newModal" + n ).on( "hidden.bs.modal" , function()
       {
           $( this ).remove();
       } );
       return n;
   }
   
   
   function pagination( page , all , per , length , list = 'main' )
   {
       let show = 3 , count = Math.ceil( all / per ) , html = '';
   
       if( all )
       {
           html += '<ul class="m-datatable__pager-nav"><h5 style="color: #5f7beb;">Cəmi: ' + all + '</h5></ul>';
       }
   
       if( count > 1 )
       {
           html += '<ul class="m-datatable__pager-nav pull-right" style="margin-top: 5px; margin-left: 30px;">';
   
           if( page > 1 )
           {
               html += '<li><a x-paginate="' + ( page - 1 ) + '" class="m-datatable__pager-link"><i class="la la-angle-left"></i></a></li>';
           }
   
           if( page > ( show + 1 ) )
           {
               html += '<li><a x-paginate="1" class="m-datatable__pager-link">1</a></li>';
   
               if( page > ( show + 2 ) )
               {
                   html += '<li><a>. . .</a></li>';
               }
           }
   
           for( let i = 1; i <= count; i++ )
           {
               if( ( page > i && ( page - i ) <= show ) || ( page < i && ( i - page ) <= show ) || i === page )
               {
                   html += '<li><a ' + ( i !== page ? 'x-paginate="' + i + '"' : '' ) + ' class="m-datatable__pager-link ' + ( i === page ? 'm-datatable__pager-link--active' : '' ) + '">' + i + '</a></li>';
               }
           }
   
           if( ( count - page ) > show )
           {
               if( ( count - page ) > ( show + 1 ) )
               {
                   html += '<li><a>. . .</a></li>';
               }
   
               html += '<li><a x-paginate="' + count + '" class="m-datatable__pager-link">' + count + '</a></li>';
           }
   
           if( page < count )
           {
               html += '<li><a x-paginate="' + ( page + 1 ) + '" class="m-datatable__pager-link"><i class="la la-angle-right"></i></a></li>';
           }
       }
   
       $( '[x-pagination="' + list + '"]' ).html( html );
   
   
       if( ( page - 1 ) * per + length < all ) $( '[x-more]' ).show();
       else $( '[x-more]' ).hide();
   }
   
   
   function checkboxList()
   {
       $( '[x-checkbox-list]' ).each( function()
       {
           let t = $( this ) ,
               name = t.attr( 'x-checkbox-list' ) ,
               f = t.closest( 'form' ) ,
               parameters = [];
   
           if( t.find( '[x-checkbox-id]' ).length )
           {
               t.find( '[x-checkbox-id]' ).each( function()
               {
                   let i = $( this ) , id = i.attr( 'x-checkbox-id' );
   
                   if( id != undefined && i.prop( 'checked' ) )
                   {
                       parameters.push( id );
                   }
               } );
           }
   
           if( name != undefined )
           {
               if( name === 'roles' && t.find( '[x-checkbox-id="admin"]' ).prop( 'checked' ) )
               {
                   f.find( '[name="' + name + '"]' ).val( 'admin' );
               } else
               {
                   f.find( '[name="' + name + '"]' ).val( parameters );
               }
           }
       } );
   }
   
   
   function check( name , data )
   {
       $( '[name="' + name + '"]' ).val( data.join( ',' ) );
   
       for( let i in data ) $( '[x-checkbox-list="' + name + '"] [x-checkbox-id="' + data[ i ] + '"]' ).prop( 'checked' , true );
   }
   
   
   function media( url = '' )
   {
       if( url !== null && url !== undefined && url.length ) return url;
   
       return '<?php echo base_url('uploads/frontend/images/' . $cms_setting['logo']); ?>';
   }
   
   
   function images( data , minus = false )
   {
       if( data.images !== undefined && data.images.length )
       {
           $.each( data.images , function( i , image )
           {
               if( minus ) image.id = -1 * image.id;
   
               $( '[x-images]' ).append( _.template( $( 'script[x-image]' ).html() )( image ) );
           } );
       }
   }
   
   
   function translate( word )
   {
       let translations = {
           create_announcement : 'Elan ver' ,
           find_me_home : 'Mənə ev tap'
       };
   
       return translations[ word ];
   }
   
   
   $( document ).ready( function()
   {
       $( '[x-list-form="main"]' ).append( '<input type="hidden" name="page" value="1">' );
   
       
   
       $( document ).on( 'submit' , '[x-list-form]' , function( e )
       {
           e.preventDefault();
   
           loading( 1 );
   
           let t = $( this ) , formData = new FormData( this ) , html = '' , body = t.find( '[x-list-tbody]' ) ,
               list = t.attr( 'x-list-form' ) ,
               modal = t.attr( 'x-modal' ) !== undefined ? t.attr( 'x-modal' ) : 'tr';
   
           formData.append( '_token' , csrf );
   
           $.ajax( {
               type : 'POST' ,
               url : t.attr( 'action' ) ,
               data : formData ,
               cache : false ,
               contentType : false ,
               processData : false ,
               success : function( res )
               {
                   if(
                       res &&
                       typeof ( res[ 'data' ] ) !== 'undefined' &&
                       typeof ( res[ 'all' ] ) !== 'undefined' &&
                       typeof ( res[ 'page' ] ) !== 'undefined' &&
                       typeof ( res[ 'per' ] ) !== 'undefined'
                   )
                   {
                       let data = res[ 'data' ] ,
                           all = res[ 'all' ] ,
                           page = res[ 'page' ] ,
                           per = res[ 'per' ];
   
                       if( data.length )
                       {
                           let k = 1;
   
                           for( let i in data )
                           {
                               data[ i ][ 'no' ] = k++;
   
                               html += _.template( $( 'script[x-' + modal + ']' ).html() )( data[ i ] );
                           }
                       } else
                       {
                           html = '<tr><td colspan="55" style="text-align: center;"><h4>Heç bir məlumat yoxdur!</h4></td></tr>';
                       }
   
                       pagination( page , all , per , data.length , list );
   
                       if( t.find( '[x-more]' ).length )
                       {
                           if( page == 1 ) body.html( '' );
   
                           body.append( html );
                       } else body.html( html );
   
                                                   body.closest( '.scroll' ).animate( { scrollTop : 0 } , 'slow' );
                       
                       if( $.isFunction( window.afterList ) ) afterList( t , res );
   
                       loading();
                   } else
                   {
                       error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
                   }
               } ,
               error : function( res )
               {
                   error( 'Network error!' );
               }
           } );
       } );
   
   
       $( document ).on( 'click' , '[x-paginate]' , function()
       {
           let page = $( this ).attr( 'x-paginate' ) ,
               list = $( this ).closest( '[x-pagination]' ).attr( 'x-pagination' );
   
           $( '[x-list-form="' + list + '"] [name="page"]' ).val( page );
   
           $( '[x-list-form="' + list + '"]' ).submit();
       } );
   
   
       $( document ).on( 'change' , '[x-per]' , function()
       {
           let per = $( this ).val();
   
           $( '[x-list-form="main"] [name="per"]' ).val( per );
   
           $( '[x-list-form="main"]' ).submit();
       } );
   
   
       $( document ).on( 'change' , '[x-search]' , function()
       {
           let search = $( this ).val();
   
           $( '[x-list-form="main"] [name="search"]' ).val( search );
   
           $( '[x-list-form="main"]' ).submit();
       } );
   
   
       $( document ).on( 'change' , '[x-list-form] select' , function()
       {
           if( $( this ).attr( 'x-no-submit' ) === undefined ) $( this ).closest( '[x-list-form]' ).submit();
       } );
   
   
       $( document ).on( 'change' , '[x-list-form] input' , function()
       {
           if( $( this ).attr( 'x-activate-url' ) === undefined && $( this ).attr( 'x-no-submit' ) === undefined ) $( this ).closest( '[x-list-form]' ).submit();
       } );
   
   
       $( document ).on( 'click' , '[x-edit-url]' , function( e )
       {
           e.preventDefault();
           e.stopPropagation();
   
           loading( 1 );
   
           let t = $( this ) , tr = t.closest( '[x-tr-id]' ) ,
               id = tr.attr( 'x-tr-id' ) , xId = t.attr( 'x-modal-id' ) ,
               url = t.attr( 'x-edit-url' ) ,
               _modal = t.attr( 'x-modal' ) !== undefined ? t.attr( 'x-modal' ) : 'edit-modal' ,
               list = t.closest( '[x-list-form]' ).attr( 'x-list-form' ) ,
               column = t.attr( 'x-data-column' ) !== undefined ? t.attr( 'x-data-column' ) : false ,
               value = t.attr( 'x-data-value' ) !== undefined ? t.attr( 'x-data-value' ) : null;
   
           id = xId !== undefined ? xId : id;
   
           $.post( url , {
               'id' : id ,
               '_token' : csrf
           } ).done( function( res )
           {
               if( res[ 'status' ] === 'success' )
               {
                   res[ 'data' ][ 'x_list_form' ] = list;
   
                   if( column ) res[ 'data' ][ [ column ] ] = value;
   
                   let info = _.template( $( 'script[x-' + _modal + ']' ).html() )( res[ 'data' ] ) ,
                       modal = createModal( 'Düzəliş et' , '<div class="modal-body">' + info + '</div>' , false );
   
                   setTimeout( function()
                   {
                       init();
   
                       $( '[x-checkbox-list]' ).each( function()
                       {
                           var t = $( this ) , name = t.attr( 'x-checkbox-list' ) ,
                               max = t.attr( 'x-checkbox-max' );
   
                           if( res.data[ name ] != undefined && res.data[ name ].length )
                           {
                               if( $.type( res.data[ name ] ) == 'string' )
                               {
                                   let variants = res.data[ name ].split( ',' );
   
                                   if( name === 'roles' && variants == 'admin' )
                                   {
                                       $( '[x-checkbox-list="' + name + '"] [x-checkbox-id]' ).prop( 'checked' , true );
                                   } else if( variants.length )
                                   {
                                       $.each( variants , function( k , variant )
                                       {
                                           $( '[x-checkbox-list="' + name + '"] [x-checkbox-id="' + variant + '"]' ).prop( 'checked' , true );
                                       } );
                                   }
   
                                   if( max !== undefined && variants.length >= max )
                                   {
                                       $( '[x-checkbox-list="' + name + '"] [x-checkbox-id]:not(:checked)' ).prop( 'disabled' , true );
                                       $( '[x-checkbox-list="' + name + '"] [x-checkbox-id]:not(:checked)' ).closest( 'label' ).addClass( 'disabled' );
                                   }
                               }
                           }
                       } );
   
                       new mPortlet( 'm_portlet_tools_role' );
   
                       if( $.isFunction( window.loadDependencies ) ) loadDependencies( res.data );
   
                       setTimeout( function()
                       {
                           checkboxList();
                       } , 55 );
                   } , 5 );
               } else
               {
                   error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
               }
           } ).fail( function()
           {
               error( 'Network error!' );
           } );
       } );
   
   
       $( document ).on( 'click' , '[x-add]' , function( e )
       {
           e.preventDefault();
           e.stopPropagation();
   
           loading( 1 );
   
           let t = $( this ) , _modal = t.attr( 'x-modal' ) !== undefined ? t.attr( 'x-modal' ) : 'edit-modal' ,
               list = t.closest( '[x-list-form]' ).attr( 'x-list-form' ) ,
               column = t.attr( 'x-data-column' ) !== undefined ? t.attr( 'x-data-column' ) : false ,
               value = t.attr( 'x-data-value' ) !== undefined ? t.attr( 'x-data-value' ) : null ,
               data = { x_list_form : list };
   
           if( column ) data[ [ column ] ] = value;
   
           let info = _.template( $( 'script[x-' + _modal + ']' ).html() )( data ) ,
               modal = createModal( 'Əlavə et' , '<div class="modal-body">' + info + '</div>' , false );
   
           setTimeout( function()
           {
               init();
   
               new mPortlet( 'm_portlet_tools_role' );
   
               if( $.isFunction( window.addDependency ) ) addDependency();
           } , 5 );
       } );
   
   
       $( document ).on( 'click' , '[x-tab-title]' , function()
       {
           let t = $( this ) ,
               step = Number( t.attr( 'x-tab-title' ) ) ,
               form = t.closest( 'form' ) ,
               id = Number( form.find( '[name="id"]' ).val() ) ,
               button = form.find( '[x-submit]' ) ,
               last = Number( button.attr( 'x-submit' ) );
   
           if( !id )
           {
               button.attr( 'x-step' , step );
   
               button.attr( 'type' , step === last ? 'submit' : 'button' );
   
               button.text( step === last ? 'Add' : 'Next' );
           }
       } );
   
   
       $( document ).on( 'click' , '[x-submit]' , function()
       {
           let button = $( this ) ,
               step = Number( button.attr( 'x-step' ) ) ,
               form = button.closest( 'form' ) ,
               id = Number( form.find( '[name="id"]' ).val() ) ,
               last = Number( button.attr( 'x-submit' ) );
   
           step++;
   
           if( !id )
           {
               setTimeout( function()
               {
                   $( '[x-tab-title="' + step + '"]' ).click();
               } , 5 );
           }
       } );
   
   
       $( document ).on( 'click' , '[x-add-new]' , function()
       {
           let button = $( this ) ,
               form = button.closest( 'form' );
   
           form.append( '<input type="hidden" name="add_new" value="1">' );
   
           form.submit();
   
       } );
   
   
       $( document ).on( 'submit' , '[x-edit-form]' , function( e )
       {
           e.preventDefault();
   
           let t = $( this ) , formData = new FormData( this ) , url = t.attr( 'action' ) ,
               list = t.attr( 'x-list' ) !== undefined ? t.attr( 'x-list' ) : 'main' ,
               target = t.attr( 'x-target' ) , targetWithData = t.attr( 'x-target-with-data' ) ,
               addNew = t.find( '[name="add_new"]' ).length ? Number( t.find( '[name="add_new"]' ).val() ) : 0 ,
               edit = t.find( '[name="id"]' ) !== undefined;
   
            loading( 1 , t );
           
           t.find( '[name]' ).each( function()
           {
               let _t = $( this ) , name = _t.attr( 'name' );
   
               _t.css( 'border-color' , '#ebedf2' );
               _t.prev( 'label' ).css( 'color' , '#575962' );
           } );
   
           t.find( '[for]' ).css( 'color' , '#575962' );
           t.find( '[x-tab-title]' ).css( 'color' , '#575962' );
   
           t.find( '[x-validations]' ).html( '' );
   
           formData.append( '_token' , csrf );
   
           $.ajax( {
               type : 'POST' ,
               url : url ,
               data : formData ,
               cache : false ,
               contentType : false ,
               processData : false ,
               success : function( res )
               {
                    res = JSON.parse(res);
                   if( res[ 'status' ] === 'success' )
                   {
                       if( res.validations !== undefined && Object.keys( res.validations ).length )
                       {
                           $.each( res.validations , function( name , v )
                           {
                               let tab = t.find( '[name="' + name + '"]' ).closest( '[x-tab]' ).attr( 'id' );
   
                               t.find( '[for="' + name + '"]' ).css( 'color' , 'red' );
   
                               if( target == 'afterAddEmployee' ) t.find( '[name="' + name + '"]' ).css( 'border-color' , 'red' );
   
                               
                               t.find( '[x-tab-title][href="#' + tab + '"]' ).css( 'color' , 'red' );
   
                               if( $( 'script[x-validation]' ).length )
                               {
                                   $.each( v , function( k , m )
                                   {
                                       t.find( '[x-validations]' ).append( _.template( $( 'script[x-validation]' ).html() )( { message : m } ) );
                                   } );
                               }
                           } );
                       } 
                       else
                       {
                           if( targetWithData && typeof window[ targetWithData ] === 'function' )
                           {
                               window[ targetWithData ]( res );
                           } 
                           else if( target && typeof window[ target ] === 'function' )
                           {
                               window[ target ]();
                           } 
                           else if( $.isFunction( window.editFormCallback ) ) editFormCallback( res );
                           else
                           {
                               let title = res.title !== undefined ? res.title : '' ,
                                   text = res.text !== undefined ? res.text : '';
   
                               const swalWithBootstrapButtons = swal.mixin( {
                                   confirmButtonClass : 'btn btn-primary' ,
                                   buttonsStyling : false
                               } );
   
                               swalWithBootstrapButtons( {
                                   type : 'success' ,
                                   title : title ,
                                   text : text ,
                                   showConfirmButton : false ,
                                   timer : addNew ? 1000 : 3000
                               } );
   
                               if( addNew )
                               {
                                   t.trigger( 'reset' );
   
                                   t.find( '[name="add_new"]' ).remove();
                               }
   
                               if( t.attr( 'x-redirect-url' ) !== undefined )
                               {
                                   location.href = t.attr( 'x-redirect-url' );
                               } 
                               else if( t.closest( '.modal' ).length )
                               {
                                   $( '[x-list-form="' + list + '"]' ).submit();
   
                                   if( !addNew ) t.closest( '.modal' ).modal( 'hide' );
                               } 
                               else
                               {
                                   //
                               }
                           }
                       }
   
                        loading( 0 , t );                         
                    } 
                    else
                    {
                       error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
                    }
               } ,
               error : function( res )
               {
                   error( 'Network error!' );
               }
           } );
       } );
   
   
       $( document ).on( 'submit' , '[x-edit-confirm-form]' , function( e )
       {
           e.preventDefault();
   
           loading( 1 );
   
           let t = $( this ) , formData = new FormData( this ) , url = t.attr( 'action' ) ,
               list = t.attr( 'x-list' ) !== undefined ? t.attr( 'x-list' ) : 'main' ,
               title = t.attr( 'x-modal-confirm-title' );
   
           const swalWithBootstrapButtons = swal.mixin( {
               confirmButtonClass : 'btn btn-primary' ,
               cancelButtonClass : 'btn btn-dark' ,
               buttonsStyling : false ,
           } );
   
           swalWithBootstrapButtons( {
               title : title ,
               type : 'warning' ,
               showCancelButton : true ,
               confirmButtonText : "Bəli" ,
               cancelButtonText : "No" ,
               reverseButtons : true
           } ).then( ( r ) =>
           {
               if( r.value )
               {
                   loading( 1 );
   
                   t.find( '[name]' ).each( function()
                   {
                       let _t = $( this ) , name = _t.attr( 'name' );
   
                       _t.css( 'border-color' , '#ebedf2' );
                       _t.prev( 'label' ).css( 'color' , '#575962' );
                   } );
   
                   t.find( '[for]' ).css( 'color' , '#575962' );
                   t.find( '[x-tab-title]' ).css( 'color' , '#575962' );
   
                   formData.append( '_token' , csrf );
   
                   $.ajax( {
                       type : 'POST' ,
                       url : url ,
                       data : formData ,
                       cache : false ,
                       contentType : false ,
                       processData : false ,
                       success : function( res )
                       {
                           if( res[ 'status' ] === 'success' )
                           {
                               if( res.validations !== undefined && Object.keys( res.validations ).length )
                               {
                                   $.each( res.validations , function( name , v )
                                   {
                                       let tab = t.find( '[name="' + name + '"]' ).closest( '[x-tab]' ).attr( 'id' );
   
                                       t.find( '[name="' + name + '"]' ).css( 'border-color' , 'red' );
                                       t.find( '[name="' + name + '"]' ).prev( 'label' ).css( 'color' , 'red' );
                                       t.find( '[for="' + name + '"]' ).css( 'color' , 'red' );
   
                                       t.find( '[x-tab-title][href="#' + tab + '"]' ).css( 'color' , 'red' );
                                   } );
                               } else
                               {
                                   let title = res.title !== undefined ? res.title : '' ,
                                       text = res.text !== undefined ? res.text : '';
   
                                   const swalWithBootstrapButtons = swal.mixin( {
                                       confirmButtonClass : 'btn btn-primary' ,
                                       buttonsStyling : false
                                   } );
   
                                   swalWithBootstrapButtons( {
                                       type : 'success' ,
                                       title : title ,
                                       text : text ,
                                       showConfirmButton : false ,
                                       timer : 3000
                                   } );
   
                                   if( t.attr( 'x-redirect-url' ) !== undefined )
                                   {
                                       location.href = t.attr( 'x-redirect-url' );
                                   } else if( t.closest( '.modal' ).length )
                                   {
                                       $( '[x-list-form="' + list + '"]' ).submit();
   
                                       t.closest( '.modal' ).modal( 'hide' );
                                   } else
                                   {
                                       //
                                   }
                               }
   
                               loading();
                           } else
                           {
                               error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
                           }
                       } ,
                       error : function( res )
                       {
                           error( 'Network error!' );
                       }
                   } );
               } else loading();
           } );
   
       } );
   
   
       $( document ).on( 'click' , '[x-view-url]' , function( e )
       {
           e.preventDefault();
           e.stopPropagation();
   
           loading( 1 );
   
           let t = $( this ) , tr = t.closest( '[x-tr-id]' ) , id = tr.attr( 'x-tr-id' ) ,
               url = t.attr( 'x-view-url' ) ,
               column = t.attr( 'x-modal-column' ) , xId = t.attr( 'x-modal-id' ) ,
               modal_ = t.attr( 'x-modal' );
   
           column = column !== undefined ? column : 'id';
   
           id = xId !== undefined ? xId : id;
   
           modal_ = modal_ !== undefined ? modal_ : 'x-view-modal';
   
           $.post( url , {
               [ column ] : id ,
               '_token' : csrf
           } ).done( function( res )
           {
               if( res[ 'status' ] === 'success' )
               {
                   var info = _.template( $( 'script[' + modal_ + ']' ).html() )( res[ 'data' ] ) ,
                       modal = createModal( 'Məlumat' , '<div class="modal-body">' + info + '</div>' );
   
                   if( $.isFunction( window.loadDependencies ) ) loadDependencies( res.data );
   
                   loading();
               } else
               {
                   error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
               }
           } ).fail( function()
           {
               error( 'Network error!' );
           } );
       } );
   
   
       $( document ).on( 'click' , '[x-modal-url]' , function( e )
       {
           e.preventDefault();
           e.stopPropagation();
   
           loading( 1 );
   
           let t = $( this ) , tr = t.closest( '[x-tr-id]' ) ,
               id = t.attr( 'x-modal-id' ) !== undefined ? t.attr( 'x-modal-id' ) : tr.attr( 'x-tr-id' ) ,
               url = t.attr( 'x-modal-url' ) , column = t.attr( 'x-modal-column' ) ,
               dataColumn = t.attr( 'x-data-column' ) !== undefined ? t.attr( 'x-data-column' ) : '___' ,
               dataValue = t.attr( 'x-data-value' ) !== undefined ? t.attr( 'x-data-value' ) : null;
   
           column = column !== undefined ? column : 'id';
   
           $.post( url , {
               [ column ] : id ,
               [ dataColumn ] : dataValue ,
               '_token' : csrf
           } ).done( function( res )
           {
               if( res[ 'status' ] === 'success' )
               {
                   modal = createModal( 'Məlumat' , '<div class="modal-body">' + res[ 'data' ] + '</div>' );
   
                   setTimeout( function()
                   {
                       modal.find( '[x-list-form]' ).submit();
   
                       init();
                   } , 5 );
               } else
               {
                   error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
               }
           } ).fail( function()
           {
               error( 'Network error!' );
           } );
       } );
   
   
       $( document ).on( 'change' , '[x-activate-url]' , function( e )
       {
           e.stopPropagation();
   
           loading( 1 );
   
           let t = $( this ) , url = t.attr( 'x-activate-url' ) , xId = t.attr( 'x-modal-id' ) ,
               id = t.closest( '[x-tr-id]' ).attr( 'x-tr-id' ) ,
               active = Number( t.prop( 'checked' ) ) , column = t.attr( 'x-modal-column' );
   
           id = xId !== undefined ? xId : id;
   
           column = column !== undefined ? column : 'active';
   
           $.post( url , {
               'id' : id ,
               '_token' : csrf ,
               [ column ] : active
           } ).done( function( res )
           {
               if( res[ 'status' ] === 'success' )
               {
                   loading();
               } else
               {
                   error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
               }
           } ).fail( function()
           {
               error( 'Network error!' );
           } );
       } );
   
   
       $( document ).on( 'change , click' , '[x-change-url]' , function( e )
       {
           e.stopPropagation();
   
           let t = $( this ) , url = t.attr( 'x-change-url' ) ,
               xId = t.attr( 'x-modal-id' ), id = t.closest( '[x-tr-id]' ).attr( 'x-tr-id' ) ,
               value = t.val() ,
               column = t.attr( 'x-modal-column' ) !== undefined ? t.attr( 'x-modal-column' ) : 'status' ,
               title = t.attr( 'x-change-modal-title' ) !== undefined ? t.attr( 'x-change-modal-title' ) : 'Sure to change status?' ,
               form = t.closest( '[x-list-form]' );
   
           id = xId !== undefined ? xId : id;
   
           const swalWithBootstrapButtons = swal.mixin( {
               confirmButtonClass : 'btn btn-primary' ,
               cancelButtonClass : 'btn btn-dark' ,
               buttonsStyling : false ,
           } );
   
           swalWithBootstrapButtons( {
               title : title ,
               type : 'warning' ,
               showCancelButton : true ,
               confirmButtonText : "Bəli" ,
               cancelButtonText : "Ləğv et" ,
               reverseButtons : true
           } ).then( ( r ) =>
           {
               if( r.value )
               {
                   loading( 1 );
   
                   $.post( url , {
                       'id' : id ,
                       '_token' : csrf ,
                       [ column ] : value
                   } ).done( function( res )
                   {
                       if( res[ 'status' ] === 'success' )
                       {
                           $( '[x-list-form="main"]' ).submit();
   
                           t.closest( '.modal' ).modal( 'hide' );
   
                           loading();
                       } else
                       {
                           error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
                       }
                   } ).fail( function()
                   {
                       error( 'Network error!' );
                   } );
               } else form.submit();
           } );
       } );
   
   
       $( document ).on( 'click' , '[x-checkbox-id]' , function()
       {
           let t = $( this ) , name = t.attr( 'x-checkbox-id' ) ,
               p = t.closest( '[x-checkbox-list]' ) , p_name = p.attr( 'x-checkbox-list' ) ,
               max = p.attr( 'x-checkbox-max' ) ,
               group = t.closest( '[x-checkbox-group="' + name + '"]' ) ,
               state = t.prop( 'checked' )
           ;
   
           if( p_name === 'roles' )
           {
               if( name === 'admin' ) p.find( '[x-checkbox-id]' ).prop( 'checked' , state );
   
               else if( !state ) p.find( '[x-checkbox-id="admin"]' ).prop( 'checked' , false );
   
               else if( p.find( '[x-checkbox-id]:checked' ).length + 1 === p.find( '[x-checkbox-id]' ).length ) p.find( '[x-checkbox-id="admin"]' ).prop( 'checked' , true );
           }
   
           if( max !== undefined )
           {
               if( p.find( '[x-checkbox-id]:checked' ).length >= max )
               {
                   p.find( '[x-checkbox-id]:not(:checked)' ).prop( 'disabled' , 'disabled' );
   
                   p.find( '[x-checkbox-id]:not(:checked)' ).closest( 'label' ).addClass( 'disabled' );
               } else
               {
                   p.find( '[x-checkbox-id]' ).prop( 'disabled' , '' );
   
                   p.find( '[x-checkbox-id]:not(:checked)' ).closest( 'label' ).removeClass( 'disabled' );
               }
           }
   
           if( group !== undefined && group.length && group.find( '[x-checkbox-id]' ).length ) group.find( '[x-checkbox-id]' ).prop( 'checked' , state );
   
           t.parents( '[x-checkbox-group]' ).each( function()
           {
               let _t = $( this ) , _name = _t.attr( 'x-checkbox-group' );
   
               if( !state || ( _t.find( '[x-checkbox-id]:checked' ).length + 1 === _t.find( '[x-checkbox-id]' ).length && _name !== 'admin' ) ) $( '[x-checkbox-id="' + _name + '"]' ).prop( 'checked' , state );
           } );
   
           setTimeout( function()
           {
               checkboxList();
           } , 5 );
       } );
   
   
       $( document ).on( 'keyup' , '[x-checkbox-search]' , function()
       {
           let t = $( this ) , search = t.val().trim().toLowerCase() , name = t.attr( 'x-checkbox-search' );
   
           $( '[x-checkbox-list="' + name + '"]' ).find( 'label' ).each( function ()
           {
               if ( $( this ).text().toLowerCase().indexOf( search ) == -1 ) $( this ).closest( 'div' ).hide();
   
               else $( this ).closest( 'div' ).show();
           } );
       } );
   
   
       $( document ).on( 'keyup' , '[x-menu-search]' , function()
       {
           let t = $( this ) , search = t.val().trim().toLowerCase();
   
           $( 'li.m-menu__item' ).each( function ()
           {
               if ( $( this ).find( '.m-menu__link-text' ).text().toLowerCase().indexOf( search ) == -1 ) $( this ).hide();
   
               else $( this ).show();
           } );
       } );
   
   
       $( document ).on( 'click' , '[x-delete-url]' , function( e )
       {
           let t = $( this ) , tr = t.closest( '[x-tr-id]' ) , url = t.attr( 'x-delete-url' ) ,
               _with = t.attr( 'x-with' ) , _with_id = t.attr( 'x-with-id' ) ,
               id = tr.attr( 'x-tr-id' );
   
   
           const swalWithBootstrapButtons = swal.mixin( {
               confirmButtonClass : 'btn btn-dark' ,
               cancelButtonClass : 'btn btn-primary' ,
               buttonsStyling : false ,
           } );
   
           swalWithBootstrapButtons( {
               title : "Silmək istədiyinizdən əminsinizmi?" ,
               type : 'warning' ,
               showCancelButton : true ,
               confirmButtonText : "Bəli" ,
               cancelButtonText : "Ləğv et" ,
               reverseButtons : true
           } ).then( ( r ) =>
           {
               if( r.value )
               {
                   loading( 1 );
   
                   $.post( url , {
                       'id' : id ,
                       [ _with ] : _with_id ,
                       '_token' : csrf
                   } ).done( function( res )
                   {
                       if( res[ 'status' ] === 'success' )
                       {
                           tr.fadeOut( function()
                           {
                               $( this ).remove();
                           } );
   
                           if( $.isFunction( window.__u ) ) __u();
   
                           loading();
                       } else
                       {
                           error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
                       }
                   } ).fail( function()
                   {
                       error( 'Network error!' );
                   } );
               }
           } );
       } );
   
   
       $( document ).on( 'keydown' , '[x-no-enter]' , function( e )
       {
           if( e.keyCode === 13 )
           {
               e.preventDefault();
               return false;
           }
       } );
   
   
       $( document ).on( 'change' , '[x-photo-input]' , function( e )
       {
           let ext = e.target.files[ 0 ][ 'name' ].replace( /^.*\./ , '' ).toLowerCase() ,
               t = $( this ) , name = t.attr( 'x-photo-input' ) ,
               img = t.closest( '[x-photo]' ).find( '[x-photo-img="' + name + '"]' );
   
           if( ext == 'jpeg' || ext == 'png' || ext == 'jpg' || 'gif' )
           {
               img.attr( 'src' , URL.createObjectURL( e.target.files[ 0 ] ) );
           } else
           {
               t.val( '' );
   
               img.attr( 'src' , img.attr( 'x-photo-default' ) );
   
               error( '' , 'Select valid image extension' );
           }
       } );
   
   
       $( document ).on( 'change' , '[x-file-input]' , function( e )
       {
           let t = $( this ) , val = t.val() , name = t.attr( 'x-file-input' ) ,
               _file = t.closest( '[x-file]' ).find( '[x-file-a="' + name + '"]' );
   
           if( val ) _file.hide();
           else _file.show();
       } );
   
   
       $( document ).on( 'click' , '[x-modal-view]' , function( e )
       {
           e.preventDefault();
           e.stopPropagation();
   
           loading( 1 );
   
           let t = $( this ) , tr = t.closest( '[x-tr-id]' ) ,
               modal_ = t.attr( 'x-modal' ) !== undefined ? t.attr( 'x-modal' ) : 'x-view-modal' ,
               title = t.attr( 'x-modal-title' ) !== undefined ? t.attr( 'x-modal-title' ) : 'Info' ,
               data = {
                   id : t.attr( 'x-modal-id' ) !== undefined ? t.attr( 'x-modal-id' ) : tr.attr( 'x-tr-id' ) ,
                   column : t.attr( 'x-data-column' ) !== undefined ? t.attr( 'x-data-column' ) : '___' ,
                   value : t.attr( 'x-data-value' ) !== undefined ? t.attr( 'x-data-value' ) : null
               } ,
               info = _.template( $( 'script[' + modal_ + ']' ).html() )( data ) ,
               modal = createModal( title , '<div class="modal-body">' + info + '</div>' );
   
           setTimeout( function()
           {
               init();
           } , 55 );
   
           loading();
       } );
   
       $( document ).keyup( function( e )
       {
           if( e.keyCode == 27 ) $( '.close-modal:last' ).click();
       } );
   
   
       $( document ).on( 'keyup' , '[x-front-search]' , function( e )
       {
           let t = $( this ) , name = t.attr( 'x-front-search' ) , search = t.val().trim().toLowerCase() ,
               form = t.closest( 'form' ) , list = form.find( 'tbody' );
   
           form.find( '[x-front-search-show]' ).each( function()
           {
               let i = $( this );
   
               if( i.find( '[x-front-search-for="' + name + '"]' ).text().toLowerCase().includes( search ) ) i.removeClass( 'hidden_' + name );
               else i.addClass( 'hidden_' + name );
           } );
   
           if( e.keyCode === 13 )
           {
               e.preventDefault();
               return false;
           }
       } );
   
   
       $( document ).on( 'click' , '[x-selectbox-id]' , function()
       {
           let t = $( this ) ,
               form = t.closest( '[x-selectbox-area]' ).length ? t.closest( '[x-selectbox-area]' ) : t.closest( 'form' ) ,
               checked = t.prop( 'checked' ) ,
               name = t.attr( 'x-selectbox-id' );
   
           if( name == 'all' )
           {
               if( checked ) form.find( '[x-selectbox-id]' ).prop( 'checked' , true );
               else form.find( '[x-selectbox-id]' ).prop( 'checked' , false );
           } else
           {
               if( !checked ) form.find( '[x-selectbox-id="all"]' ).prop( 'checked' , false );
   
               if( !form.find( '[x-selectbox-id]:not(checked)' ).length ) form.find( '[x-selectbox-id="all"]' ).prop( 'checked' , true );
           }
   
           if( form.find( '[x-selectbox-id]:checked' ).length )
           {
               $( '[x-event-representative-add-button]' ).removeClass( 'hidden' );
   
               form.find( '[x-multi-select-button]' ).removeAttr( 'disabled' );
           } else
           {
               $( '[x-event-representative-add-button]' ).addClass( 'hidden' );
   
               form.find( '[x-multi-select-button]' ).attr( 'disabled' , true );
           }
       } );
   
   
       $( document ).on( 'click' , '[x-image-id] [x-image-delete]' , function( e )
       {
           e.stopPropagation();
           e.preventDefault();
   
           let div = $( this ).closest( '[x-image-id]' ) , id = div.attr( 'x-image-id' );
   
           deleted_files.push( id );
   
           $( '[name="deleted_files"]' ).val( JSON.stringify( deleted_files ) );
   
           div.fadeOut( function()
           {
               $( this ).remove();
           } );
       } );
   
   
       $( document ).on( 'click' , '[x-make-same]' , function( e )
       {
           e.preventDefault();
           e.stopPropagation();
   
           let t = $( this ) , form = t.closest( 'form' ) ,
               target = form.find( '[name="' + t.attr( 'x-make-same' ) + '"]' ) ,
               source = form.find( '[name="' + target.attr( 'x-same-with' ) + '"]' );
   
           target.val( source.val() );
           target.prev( 'div' ).find( '[contenteditable]' ).html( source.val() );
       } );
   
   
       $( document ).on( 'click' , '[x-more]' , function()
       {
           let t = $( this ) ,
               form = t.closest( 'form' ) ,
               input = form.find( '[name="page"]' ) ,
               page = input.val();
   
           input.val( ++page );
   
           form.submit();
       } );
   
   
       $( document ).on( 'click' , '[x-export]' , function()
       {
           let t = $( this ) , form = t.closest( 'form' );
   
           window.open( t.attr('x-export') + '?' + form.serialize() , '_blank' );
       } );
   
   
       
       $( '[x-list-form="main"]' ).submit();
   } )
   ;
</script>
<script> let HIDE_MAP = 'Xəritəni gizlət'; </script>
<script src="<?= base_url() ?>assets/site/js/popper.js"></script>
<script src="<?= base_url() ?>assets/site/js/jquery-ui.js"></script>
<script src="<?= base_url() ?>assets/site/js/libs.min.js"></script>
<script src="<?= base_url() ?>assets/site/js/bootstrap-swipe-carousel.min.js"></script>
<script src="<?= base_url() ?>assets/site/js/lightslider.js"></script>
<script src="<?= base_url() ?>assets/site/js/isotope-docs.min.js"></script>
<script src="<?= base_url() ?>assets/site/js/semantic.min.js"></script>
<script src="<?= base_url() ?>assets/site/js/common.js"></script>
<script src="<?= base_url() ?>assets/site/js/js/select2.full.js"></script>
<script>
   function numberWithSpaces(x) {
       return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
   }
   eles = document.getElementsByClassName("pricemain");
   for(var i in eles) {
       var p = eles[i].innerText;
       if(parseInt(p) > 999){
           eles[i].innerText=numberWithSpaces(p);
       }
   }
</script>
<script>
    function afterRegister( data )
    {
       let modal = $( '[x-target-with-data="afterRegister"]' ).closest( '.modal' );
   
       modal.html( _.template( $( 'script[x-email-success]' ).html() )( { title : 'Qeydiyyat təsdiq linki göndərildi' , text : data.text } ) );
   
       modal.addClass( 'modal--small modal-message' );
    }
   
   
   function afterForgotPassword( data )
    {
       let modal = $( '[x-target-with-data="afterForgotPassword"]' ).closest( '.modal' );
   
       modal.html( _.template( $( 'script[x-email-success]' ).html() )( { title : 'Şifrə yeniləmə linki göndərildi' , text : data.text } ) );
   
       modal.addClass( 'modal--small modal-message' );
    }
    <?php if ((isset($_GET['reset'])) AND ($_GET['reset']==1) AND (sess_reset_tkn())){ ?>
    function afterResetPassword()
    {
        let modal = $( '[x-target="afterResetPassword"]' ).closest( '.modal' );
        modal.html( _.template( $( 'script[x-success]' ).html() )( { message : 'Şifrə uğurla dəyişdirildi' } ) );
        modal.addClass( 'editmodal' );
    }
    $( document ).ready( function()
    {            
        $( '[data-target="#reset-password"]' ).click();
        history.replaceState( '' , '' , '<?= base_url() ?>' );
        loading();
    });
    <?php } ?>
   
   function afterLogin( data ) { location.reload(); }
   
   
   function afterWishlist( data )
   {
       let id = data.announcement , result = data.result , favorites = data.favorites ,
           form = $( '[x-target-with-data="afterWishlist"][x-edit-form="' + id + '"]' ) ,
           svg_area = form.find( 'button' ) ,
           svg = `
               <svg class="icon icon-heart` + ( result ? '' : '-outline' ) + `">
                   <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart` + ( result ? '' : '-outline' ) + `"></use>
               </svg>
               `
           , text_area = form.find( '[x-wishlist-text]' )
           , text_area_m = form.find( '[x-wishlist-text-m]' )
           , text = result ? 'Seçilmişlərdən çıxart' : 'Seçilmişlərə əlavə et'
           , text_m = result ? 'Seçilmişlərdən çıxart' : 'Seçilmişlərə əlavə et';
   
       svg_area.find( 'svg' ).remove();
       svg_area.prepend( svg );
   
       text_area.text( text );
       text_area_m.text( text_m );
   
       if( $( '[x-remove-announcement="' + id + '"]' ).length )
       {
           if( $( '[x-wishlist_count]' ).length )
           {
               let count = Number( $( '[x-wishlist_count]' ).text() );
   
               $( '[x-wishlist_count]' ).text( --count );
           }
   
           $( '[x-remove-announcement="' + id + '"]' ).fadeOut( function (){ $( this ).remove() } );
       }
   
       $( '[x-favorites]' ).html( `
           <svg class="icon ` + ( favorites ? 'favorite-icon' : 'icon-heart-outline' ) + `">
               <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-heart` + ( favorites ? '' : '-outline' ) + `"></use>
           </svg>
           <?= translate('wishlist') ?>
       `);
   }
   
   
   $(document).ready( function()
   { 
    loading();
   });
</script>
<script>
    // const val = undefined;
   var count = 0;
   function addId( name , id )
   {
       let input = $( '[x-search-form] [name="' + name + '"]' ) , val = input.val();
   
       val = val.length ? val.split( ',' ) : [];
   
       val.push( id );
   
       input.val( val.join() );
   }
   
   function removeId( name , id )
   {
       let input = $( '[x-search-form] [name="' + name + '"]' ), val = input.val();
   
       val = val.split( ',' );
   
       val = jQuery.grep( val , function( value ) { return value != id ; } );
   
       input.val( val.join() );
   }
   
   function resetName( name )
   {
       $( '[x-search-form] [name="' + name + '"]' ).val( '' );
   }
   
   
   function addRegion( id )
   {
       addId( 'region' , id );
   }
   
   function removeRegion( id )
   {
       removeId( 'region' , id );
   }
   
   function resetRegion()
   {
       resetName( 'region' );
   }
   
   
   function addDistrict( id )
   {
       addId( 'district' , id );
   }
   
   function removeDistrict( id )
   {
       removeId( 'district' , id );
   }
   
   function resetDistrict()
   {
       resetName( 'district' );
   }
   
   
   function addMetro( id )
   {
       addId( 'metro' , id );
   }
   
   function removeMetro( id )
   {
       removeId( 'metro' , id );
   }
   
   function resetMetro()
   {
       resetName( 'metro' );
   }
   
   
   function addPlacemark( id )
   {
       addId( 'placemark' , id );
   }
   
   function removePlacemark( id )
   {
       removeId( 'placemark' , id );
   }
   
   function resetPlacemark()
   {
       resetName( 'placemark' );
   }
   
   var cityArray = [];
   
   function cityChange()
   {
       let city = $( '[x-search-form] [name="city"]' ).val();
       cityArray.push(city);
       if( city == 1 )
       {
           $( '#metro-tab' ).show();
           $( '#target-tab' ).show();
           $( '.metro-tab-mobile' ).show();
           $( '.target-tab-mobile' ).show();
       }
   
       else
       {
           $( '#metro-tab' ).hide();
           $( '#target-tab' ).hide();
           $( '.metro-tab-mobile' ).hide();
           $( '.target-tab-mobile' ).hide();
       }
       if( city == 1 || city == 3 || city == 31 )
       {
           $( '#regions-tab' ).show();
           $( '.regions-tab' ).removeClass( 'd-none' );
           $( '.regions-tab-mobile' ).show();
       }
       else
       {
           $( '#regions-tab' ).hide();
           $( '.regions-tab' ).addClass( 'd-none' );
           $( '.regions-tab-mobile' ).hide();
           var cityCount = 0;
           for(var i = 0; i < cityArray.length; ++i){
               if(cityArray[i] == city)
                   cityCount++;
           }
           if(cityCount == 1){
               count++;
               $("#check-location").text("("+count+")");
           }
       }
   
       $( '[x-search-form] [x-city]' ).hide();
   
       $( '[x-search-form] [x-city="' + city + '"]' ).show();
   }
   
   
   function inputs()
   {
       let type = $( '[x-search-form] [type-select]' ).val()
           , property_types = [];
   
       $( '[x-input]' ).hide();
   
       let count = 0;
   
       $( '[x-search-form] [x-property_type] [type="checkbox"]' ).each( function()
       {
           let t = $( this ) , property_type = t.closest( '[x-property_type]' ).attr( 'x-property_type' ) , checked = t.prop( 'checked' );
   
           if( checked )
           {
               $( '[x-input][x-type-' + type + '][x-property-' + property_type + ']' ).show();
   
               property_types.push( property_type );
   
               if( property_type == 8 )
               {
                   $( '[x-area-span]' ).text( 'sot' );
   
                   $( '[x-area-name-span]' ).text( 'Torpaq sahəsi' );
               }
   
               else
               {
                   $( '[x-area-span]' ).text( 'm²' );
   
                   $( '[x-area-name-span]' ).text( 'Sahə' );
               }
   
               count++;
           }
   
           if($('[name="property_type[1]"]').prop("checked") == true || $('[name="property_type[2]"]').prop("checked") == true ){
               $( '[x-search-form] [x-property_type] [type="checkbox"]' ).attr("disabled", true);
               $( '[x-search-form] [x-property_type] [name="property_type[1]"]' ).attr("disabled", false);
               $( '[x-search-form] [x-property_type] [name="property_type[2]"]' ).attr("disabled", false);
           }
           else if($('[name="property_type[3]"]').prop("checked") == true || $('[name="property_type[5]"]').prop("checked") == true){
               $( '[x-search-form] [x-property_type] [type="checkbox"]' ).attr("disabled", true);
               $( '[x-search-form] [x-property_type] [name="property_type[3]"]' ).attr("disabled", false);
               $( '[x-search-form] [x-property_type] [name="property_type[5]"]' ).attr("disabled", false);
           }
           else if($('[name="property_type[6]"]').prop("checked") == true){
               $( '[x-search-form] [x-property_type] [type="checkbox"]' ).attr("disabled", true);
               $( '[x-search-form] [x-property_type] [name="property_type[6]"]' ).attr("disabled", false);
           }
           else if($('[name="property_type[8]"]').prop("checked") == true){
               $( '[x-search-form] [x-property_type] [type="checkbox"]' ).attr("disabled", true);
               $( '[x-search-form] [x-property_type] [name="property_type[8]"]' ).attr("disabled", false);
           }
           else if($('[name="property_type[9]"]').prop("checked") == true){
               $( '[x-search-form] [x-property_type] [type="checkbox"]' ).attr("disabled", true);
               $( '[x-search-form] [x-property_type] [name="property_type[9]"]' ).attr("disabled", false);
           }
           else if($('[name="property_type[10]"]').prop("checked") == true){
               $( '[x-search-form] [x-property_type] [type="checkbox"]' ).attr("disabled", true);
               $( '[x-search-form] [x-property_type] [name="property_type[10]"]' ).attr("disabled", false);
           }
           else{
               $( '[x-search-form] [x-property_type] [type="checkbox"]' ).attr("disabled", false);
           }
           // $( '[x-search-form] #propertyType .dropdown-toggle span strong' ).text('(' +count+ ')');
       } );
   
                   $.post( 'https://evelani.az/az/form-action' , {
                               'type' : type ,
               'property_type' : property_types.join() ,
               '_token' : csrf
           } ).done( function( res )
           {
               if( res[ 'status' ] === 'success' && typeof ( res[ 'action' ] ) !== 'undefined' )
               {
                   $( '[x-search-form]' ).attr( 'action' , res[ 'action' ] );
               } else
               {
                   error( res.exception !== undefined ? ( res.exception.message + ' | Line: ' + res.exception.line + ' | File: ' + res.exception.file ) : ( res.warning !== undefined ? res.warning : '' ) );
               }
           } ).fail( function()
           {
               error( 'Network error!' );
           } );
           }
   
   $(function() {
       $(document).on('keyup', function(evt) {
           if ( (evt.keyCode || evt.which) === 27 ) {
               $('.home-search').removeClass('open');
           }
       });
   
       $(document).on('click', function(evt) {
           if ( $(evt.target).closest(".home-search > .caption").length === 0 ) {
               $('.home-search').removeClass('open');
           }
       });
   
       $('.home-search > .caption').on('click', function() {
           $(this).parent().toggleClass('open');
       });
       if($( '[x-search-form] [type-select]' ).val() == 1){
           let selectedOption = $('.home-search .item:first-child');
           selectedOption.addClass("selected");
           $('.home-search .caption span').text( selectedOption.text() );
       }
       else if($( '[x-search-form] [type-select]' ).val() == 2){
           let selectedOption = $('.home-search .item:nth-child(2)');
           selectedOption.addClass("selected");
           $('.home-search .caption span').text( selectedOption.text() );
       }
       else if($( '[x-search-form] [type-select]' ).val() == 3){
           let selectedOption = $('.home-search .item:last-child');
           selectedOption.addClass("selected");
           $('.home-search .caption span').text( selectedOption.text() );
       }
   
       let option = $('.home-search .item');
   
       option.on('click', function() {
   
           option.removeClass('selected');
   
           $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').find("span").text( $(this).text() );
   
           let type = $( this ).attr("data-value");
   
           $("[x-search-form] [type-select]").val(type);
   
           $( '[x-search-form] [x-property_type]' ).hide();
   
           $( '[x-search-form] [x-property_type]' ).each( function()
           {
               if( $( this ).attr( 'x-type-' + type ) !== undefined ) $( this ).show();
           } );
   
           inputs();
       });
   });
   $( document ).ready( function()
   {
       $( document ).on( 'change' , '[x-search-form] [type-select]' , function()
       {
           let type = $( this ).val();
   
           $( '[x-search-form] [x-property_type]' ).hide();
   
           $( '[x-search-form] [x-property_type]' ).each( function()
           {
               if( $( this ).attr( 'x-type-' + type ) !== undefined ) $( this ).show();
           } );
   
           inputs();
       } );
   
   
       $( document ).on( 'change' , '[x-search-form] [x-property_type] [type="checkbox"]' , function() {
   
            inputs();
       } );
   
       $( document ).on( 'change' , '[x-search-form] [name="city"]' , function() { cityChange(); } );
   
       $( document ).on( 'change' , '[x-sort]' , function()
       {
           let form = $( '[x-search-form]' );
   
           form.find( '[name="sort"]' ).val( $( this ).val() );
   
           form.submit();
       } );
   
   
       $( document ).on( 'click' , '[x-paginate]' , function()
       {
           let page = $( this ).attr( 'x-paginate' ) ,
               form = $( '[x-search-form]' );
   
           form.find( '[name="page"]' ).val( page );
   
           form.submit();
       } );
   
   
       $( document ).on( 'click' , '[x-search-in-map]' , function()
       {
           let form = $( '[x-search-form]' );
   
           location.href = 'https://evelani.az/az/xeritede-axtar?' + form.serialize();
       } );
   
   
       cityChange();
   
       // inputs();
    } );
</script>
<script>
   var slider;
   $('#locationSearch').on('shown.bs.modal', function (e) {
       slider = $(".selected-regions__content").lightSlider({
           autoWidth: true,
           loop: true,
           item: 3,
           slideMargin:10
       });
   });
   $('#locationSearch').on('hidden.bs.modal', function (e) {
       slider.destroy();
   });
   $( document ).ready( function(){
    // const let = undefined;
       let regions = $( '[x-search-form] [name="region"]' ).val().split(",");
       for(let i=0; i<regions.length; i++){
           $(".region-"+regions[i]).addClass("active");
           $(".region-"+regions[i]).parent().find(".region-part").addClass("active");
           if(regions.length > 0 && regions[i]!=""){
               $(".selected-regions__content").append('<li class="lslide"><p class="region-part region-'+regions[i]+'"><span>' + $(".region-"+regions[i]).find("span").text()+ '</span><svg class="icon icon-close"><use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-close"></use></svg></p></li>');
               count++;
           }
           $(".region-list .pretty#region-"+regions[i]+" input").prop("checked", true);
       }
       let districts = $( '[x-search-form] [name="district"]' ).val().split(",");
       for(let i=0; i<districts.length; i++){
           $(".district-"+districts[i]).addClass("active");
           if(districts.length > 0 && districts[i]!=""){
               $(".selected-regions__content").append('<li class="lslide"><p class="region-part district-'+districts[i]+'"><span>' + $(".district-"+districts[i]).find("span").text()+ '</span><svg class="icon icon-close"><use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-close"></use></svg></p></li>');
               count++;
           }
           $(".region-list .pretty#region-"+districts[i]+" input").prop("checked", true);
       }
       let placemarks = $( '[x-search-form] [name="placemark"]' ).val().split(",");
       for(let i=0; i<placemarks.length; i++){
           $(".target-"+placemarks[i]).addClass("active");
           if(placemarks.length > 0 && placemarks[i]!=""){
               $(".selected-regions__content").append('<li class="lslide"><p class="region-part target-'+placemarks[i]+'"><span>' + $(".target-"+placemarks[i]).find("span").text()+ '</span><svg class="icon icon-close"><use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-close"></use></svg></p></li>');
               count++;
           }
           $(".region-list .pretty#target-"+placemarks[i]+" input").prop("checked", true);
       }
       let stations = $( '[x-search-form] [name="metro"]' ).val().split(",");
       for(let i=0; i<stations.length; i++){
           $(".station-"+stations[i]).addClass("active");
           if(stations.length > 0 && stations[i]!=""){
               $(".selected-regions__content").append('<li class="lslide"><p class="region-part station-'+stations[i]+'"><span>' + $(".station-"+stations[i]).find("span").text()+ '</span><svg class="icon icon-close"><use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-close"></use></svg></p></li>');
               count++;
           }
           $(".region-list .pretty#station-"+stations[i]+" input").prop("checked", true);
       }
       if(count !=0){
           $("#check-location").text("("+count+")");
       }
       selectedTrigger();
   });
   function selectedTrigger(){
       $(".selected-regions__content p svg").on("click", function(){
           var className = $(this).parent().attr("class");
           var classNameArray = className.split(" ");
           if(classNameArray[1].includes("region")){
               $(".regions-tab ." +classNameArray[1]).removeClass("active");
               $("."+classNameArray[1]).parent().find(".region-part").removeClass("active");
               removeRegion(classNameArray[1].split("-")[1]);
           }
           if(classNameArray[1].includes("district")){
               $(".regions-tab .region-part." +classNameArray[1]).removeClass("active");
               $(".regions-tab .region-part." +classNameArray[1]).parent().find(".region-title").removeClass("active");
               removeDistrict(classNameArray[1].split("-")[1]);
           }
           else if(classNameArray[1].includes("target")){
               $(".target-tab ." +classNameArray[1]).removeClass("active");
               removePlacemark(classNameArray[1].split("-")[1]);
           }
           else if(classNameArray[1].includes("station")){
               $(".metro ." +classNameArray[1]).removeClass("active");
               removeMetro(classNameArray[1].split("-")[1]);
           }
           if(classNameArray[1] == "station-13"){
               // $(".purple").css({"left" : "69px", "top" : "98px"});
               $(".purple").css({"z-index" : "3"});
           }
           if(classNameArray[1] == "station-9"){
               $(".green-light").css({"left" : "339px", "top" : "283px"});
               $(".station-22").css("top" , "279px");
           }
           $(".selected-regions__content ." +classNameArray[1]).parent().remove();
           $(".region-list .pretty#"+classNameArray[1]+" input").prop("checked", false);
           slider.destroy();
           if (!slider.lightSlider) {
               slider = $('.selected-regions__content').lightSlider({
                   autoWidth: true,
                   loop: true,
                   item: 3,
                   slideMargin:10
               });
           }
           count = $(".regions-tab .region-title.active").length + $(".regions-tab .region-title").not(".active").parent().find(".region-part.active").length + $(".target-tab .active").length + $(".metro .active").length;
           if(count !=0){
               $("#check-location").text("("+count+")");
           }
           else{
               $("#check-location").text("");
           }
       });
   }
   $(".region-part span").on("click", function(){
       if($(this).parent().hasClass("active")){
           return false;
       }
       else{
           $(this).parent().addClass("active");
           var className = $(this).parent().attr("class");
           var classNameArray = className.split(" ");
           $(".selected-regions__content").append('<li class="lslide"><p class="region-part '+classNameArray[1]+'">' + $(this).parent().html()+ '</p></li>');
   
           slider.destroy();
           if (!slider.lightSlider) {
               slider = $('.selected-regions__content').lightSlider({
                   autoWidth: true,
                   loop: true,
                   item: 3,
                   slideMargin:10
               });
           }
   
           $(".region-list .pretty#"+classNameArray[1]+" input").prop("checked", true);
   
           if(classNameArray[1].includes("target")){
               addPlacemark(classNameArray[1].split("-")[1]);
           }
           else if(classNameArray[1].includes("station")){
               addMetro(classNameArray[1].split("-")[1]);
           }
           else if(classNameArray[1].includes("district")){
               addDistrict(classNameArray[1].split("-")[1]);
           }
           count++;
           if(count !=0){
               $("#check-location").text("("+count+")");
           }
           else{
               $("#check-location").text("");
           }
       }
       selectedTrigger();
   });
   $(".region-container .region-part svg").on("click", function(){
       var className = $(this).parent().attr("class");
       var classNameArray = className.split(" ");
       if($(this).parent().parent().find(".region-title").hasClass("active")){
           $(this).parent().parent().find(".region-title svg").click();
           $(this).parent().parent().find(".region-part").not("."+classNameArray[1]).find("span").click();
       }
       else{
           $(this).parent().removeClass("active");
           $(".selected-regions__content ." +classNameArray[1]).parent().remove();
           $(".region-list .pretty#"+classNameArray[1]+" input").prop("checked", false);
           if(classNameArray[1].includes("target")){
               removePlacemark(classNameArray[1].split("-")[1]);
           }
           else if(classNameArray[1].includes("station")){
               removeMetro(classNameArray[1].split("-")[1]);
           }
           else if(classNameArray[1].includes("district")){
               removeDistrict(classNameArray[1].split("-")[1]);
           }
           slider.destroy();
           if (!slider.lightSlider) {
               slider = $('.selected-regions__content').lightSlider({
                   autoWidth: true,
                   loop: true,
                   item: 3,
                   slideMargin:10
               });
           }
           count--;
           if(count !=0){
               $("#check-location").text("("+count+")");
           }
           else{
               $("#check-location").text("");
           }
       }
   });
   $(".regions-tab .region-title span").on("click", function(){
       if($(this).parent().hasClass("active")){
           return false;
       }
       else{
           if($(this).parent().parent().find(".region-part").hasClass("active")){
               $(this).parent().parent().find(".region-part.active svg").click();
           }
           $(this).parent().addClass("active");
           $(this).parent().parent().find(".region-part").addClass("active");
           var className = $(this).parent().attr("class");
           var classNameArray = className.split(" ");
           addRegion(classNameArray[1].split("-")[1]);
           $(".selected-regions__content").append('<li class="lslide"><p class="region-part '+classNameArray[1]+'">' + $(this).parent().html()+ '</p></li>');
           selectedTrigger();
           slider.destroy();
           if (!slider.lightSlider) {
               slider = $('.selected-regions__content').lightSlider({
                   autoWidth: true,
                   loop: true,
                   item: 3,
                   slideMargin:10
               });
           }
           count++;
           if(count !=0){
               $("#check-location").text("("+count+")");
           }
           else{
               $("#check-location").text("");
           }
       }
   });
   $(".regions-tab .region-title svg").on("click", function(){
       $(this).parent().removeClass("active");
       $(this).parent().parent().find(".region-part").removeClass("active");
       var className = $(this).parent().attr("class");
       var classNameArray = className.split(" ");
       removeRegion(classNameArray[1].split("-")[1]);
       $(".selected-regions__content ." +classNameArray[1]).parent().remove();
       slider.destroy();
       if (!slider.lightSlider) {
           slider = $('.selected-regions__content').lightSlider({
               autoWidth: true,
               loop: true,
               item: 3,
               slideMargin:10
           });
       }
       count--;
       if(count !=0){
           $("#check-location").text("("+count+")");
       }
       else{
           $("#check-location").text("");
       }
   });
   $(".metro .station").on("click", function(){
       var className = $(this).attr("class");
       var classNameArray = className.split(" ");
       $(this).toggleClass("active");
       if($(this).hasClass("active")){
           $(".selected-regions__content").append('<li class="lslide"><p class="region-part '+classNameArray[1]+'"><span>' + $(this).find("p").text()+ '</span><svg class="icon icon-close"><use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-close"></use></svg></p></li>');
           if($(this).hasClass("station-13")){
               // $(".purple").css({"left" : "64px", "top" : "91px"});
               $(".purple").css({"z-index" : "2"});
           }
           if($(this).hasClass("station-2")){
               $(".green-light").css({"left" : "345px", "top" : "289px"});
               $(".station-19").css("top" , "285px");
           }
           $(".region-list .pretty#"+classNameArray[1]+" input").prop("checked", true);
           addMetro(classNameArray[1].split("-")[1]);
           count++;
           if(count !=0){
               $("#check-location").text("("+count+")");
           }
           else{
               $("#check-location").text("");
           }
       }
       else{
           $(".selected-regions__content ."+classNameArray[1]).parent().remove();
           if($(this).hasClass("station-13")){
               // $(".purple").css({"left" : "69px", "top" : "98px"});
               $(".purple").css({"z-index" : "3"});
           }
           if($(this).hasClass("station-2")){
               $(".green-light").css({"left" : "339px", "top" : "283px"});
               $(".station-19").css("top" , "279px");
           }
           $(".region-list .pretty#"+classNameArray[1]+" input").prop("checked", false);
           removeMetro(classNameArray[1].split("-")[1]);
           count--;
           if(count !=0){
               $("#check-location").text("("+count+")");
           }
           else{
               $("#check-location").text("");
           }
       }
       slider.destroy();
       if (!slider.lightSlider) {
           slider = $('.selected-regions__content').lightSlider({
               autoWidth: true,
               loop: true,
               item: 3,
               slideMargin:10
           });
       }
       selectedTrigger();
   });
   $("#resetLocations").on('click', function(){
       $(".selected-regions__content p svg").click();
       resetRegion();
       resetDistrict();
       resetPlacemark();
       resetMetro();
   });
   $(".region-list .pretty input").on('click' , function(){
       var parent = $(this).parent().attr("id");
       if($(this).prop("checked") == true){
           if(parent.includes("target") || parent.includes("district")){
               $(".region .region-part." +parent+ " span").trigger("click");
           }
           else{
               $(".metro .station." +parent).trigger("click");
           }
       }
       else{
           if(parent.includes("target") || parent.includes("district")){
               $(".region .region-part." +parent+ " svg").trigger("click");
           }
           else{
               $(".metro .station." +parent).trigger("click");
           }
       }
   });
   
   $(document).click(function(e)
   {
       var container = $(".region-list");
       var secondCase = $(".location-input");
       var thirdCase = $(".region-part__title");
       var fourthCase = $(".station");
       var fifthCase = $(".selected-regions");
       var sixthCase = $(".region-part svg");
       // if the target of the click isn't the container nor a descendant of the container
       if (
           (!container.is(e.target) && !container.has(e.target).length) &&
           (!secondCase.is(e.target) && !secondCase.has(e.target).length) &&
           (!thirdCase.is(e.target) && !thirdCase.has(e.target).length) &&
           (!fourthCase.is(e.target) && !fourthCase.has(e.target).length) &&
           (!fifthCase.is(e.target) && !fifthCase.has(e.target).length) &&
           (!sixthCase.is(e.target) && !sixthCase.has(e.target).length)
       )
       {
           container.hide();
           secondCase.val("");
       }
   });
   function updateRegion( input ){
   
       if(input.length > 0){
           document.getElementById('region-list').style.display = "block";
       }
       else{
           document.getElementById('region-list').style.display = "none";
       }
   
       let sections = document.getElementsByClassName('region-span');
   
       for (let i = 0; i < sections.length; i++) {
           let section = sections[i];
           let content = section.innerHTML.trim();
   
           if (content.toLowerCase().indexOf(input.toLowerCase()) == -1) {
   
               section.parentElement.parentElement.style.display = 'none';
   
           }
           else{
               section.parentElement.parentElement.style.display = 'flex';
           }
       }
   }
   function updateTarget( input ){
   
       if(input.length > 0){
           document.getElementById('target-list').style.display = "block";
       }
       else{
           document.getElementById('target-list').style.display = "none";
       }
   
       let sections = document.getElementsByClassName('target-span');
   
       for (let i = 0; i < sections.length; i++) {
           let section = sections[i];
           let content = section.innerHTML.trim();
   
           if (content.toLowerCase().indexOf(input.toLowerCase()) == -1) {
   
               section.parentElement.parentElement.style.display = 'none';
   
           }
           else{
               section.parentElement.parentElement.style.display = 'flex';
           }
       }
   }
   function updateMetro( input ){
   
       if(input.length > 0){
           document.getElementById('metro-list').style.display = "block";
       }
       else{
           document.getElementById('metro-list').style.display = "none";
       }
   
       let sections = document.getElementsByClassName('metro-span');
   
       for (let i = 0; i < sections.length; i++) {
           let section = sections[i];
           let content = section.innerHTML.trim();
   
           if (content.toLowerCase().indexOf(input.toLowerCase()) == -1) {
   
               section.parentElement.parentElement.style.display = 'none';
   
           }
           else{
               section.parentElement.parentElement.style.display = 'flex';
           }
       }
   }
   window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='search'){e.preventDefault();return false;}}},true);
</script>
<script>
   function numberWithSpaces(x) {
   return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
   }
   
   var priceMain = document.getElementsByClassName("pricemain");
   var i;
   for (i = 0; i < priceMain.length; i++) {
       var pricemain = priceMain[i].innerText;
       priceMain[i].innerText=numberWithSpaces(pricemain);
   }
   
   function isNumberKey( evt )
   {
       var charCode = ( evt.which ) ? evt.which : event.keyCode
       if( charCode > 31 && ( charCode < 48 || charCode > 57 ) && charCode != 46 )
           return false;
       return true;
   }
   
   $('#numberTxt').on("paste",function(e) {
       var $this = $(this);
       setTimeout(function(){
           var val = $this.val(),
               regex = /^[\d]+$/;
           if( regex.test(val) ){
               $this.val( val );
           }
           else{
               $this.val('');
               alert("Zəhmət olmasa yalnız rəqəm daxil edin.");
           }
       },0);
   
   });
</script>
<script>
   function numberWithSpaces(x) {
       return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
   }
   eles = document.getElementsByClassName("pricemain");
   for(var i in eles) {
       var p = eles[i].innerText;
       if(parseInt(p) > 999){
           eles[i].innerText=numberWithSpaces(p);
       }
   }
   
   
   let _last = 0 , premium_announcements = [];
   
   
   function showAnnouncement( index )
   {
       if( premium_announcements[ index ] !== undefined )
       {
           $( '[x-premium-announcements]' ).append( _.template( $( 'script[x-premium-announcement]' ).html() )( premium_announcements[ index ] ) );
   
           _last = index;
       }
   }
   
   
   $( document ).ready( function()
   {
       if(window.matchMedia("(max-width: 768px)").matches){
           $('.announcement-slider').removeClass("carousel slide");
       }
   } );
   var footerHeight = $(".footer").height();
   var footerContainerHeight = $(".footer-container").height();
   $( document ).ready( function()
   {
       for( i = 0; i < 8; i++ ) showAnnouncement( i );
       announcementHeadline();
       eles = document.getElementsByClassName("pricemain");
       for(var i in eles) {
           var p = eles[i].innerText;
           if(parseInt(p) > 999){
               eles[i].innerText=numberWithSpaces(p);
           }
       }
       announcementScroll();
   } );
   function announcementScroll(){
       let _count = 8;
       let j;
       window.addEventListener("scroll", function() {
           // console.log(window.innerHeight);
           // console.log(Math.ceil(document.documentElement.scrollTop));
           // console.log(document.scrollingElement.scrollHeight-(footerHeight+footerContainerHeight));
           if((window.innerHeight  +  Math.ceil(document.documentElement.scrollTop)) >= (document.scrollingElement.scrollHeight-(footerHeight+footerContainerHeight))) {
               for( j = _count; j < _count + 4; j++ ){
                   showAnnouncement( j );
               } 
               _count +=4;
               announcementHeadline();
               eles = document.getElementsByClassName("pricemain");
               for(var i in eles) {
                   var p = eles[i].innerText;
                   if(parseInt(p) > 999){
                       eles[i].innerText=numberWithSpaces(p);
                   }
               }
               $('.announcement-slider--premium .carousel-indicators  li').on('mouseover',function(){
                   $(this).trigger('click');
               })
           }
           
       });
   }
   
   var fixmeTop2 = $('.banner-left').offset().top;
   $(window).scroll(function() {
       var currentScroll = $(window).scrollTop();
       if (currentScroll >= fixmeTop2) {
           $('.banner-left').css({
               position: 'fixed'
           });
           $('.banner-right').css({
               position: 'fixed'
           });
       } else {
           $('.banner-left').css({
               position: 'absolute'
           });
           $('.banner-right').css({
               position: 'absolute'
           });
       }
   
   });
  
</script>
<script type="text/template" x-validation>
   <p class="form-message form-message--error">
       <svg class="icon icon-triangle-error">
           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?#icon-triangle-error"></use>
       </svg>
       <span><%- rc.message %></span>
   </p>
</script>
<script type="text/template" x-success>
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-body">
               <h6 class="modal-title mt-5 text-center"><%- rc.message %></h6>
               <% if( rc.linkAfterClose !== undefined ) { %>
                   <a class="link-button link-button--primary mx-auto mt-5 px-4" href="<%- rc.linkAfterClose.length ? rc.linkAfterClose : 'https://evelani.az/az' %>">Bağla</a>
               <% } else { %>
               <button class="link-button link-button--primary mx-auto mt-5 px-4" data-dismiss="modal">Bağla</button>
               <% } %>
               <div class="modal-close" data-dismiss="modal">
                   <svg class="icon icon-close">
                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-close"></use>
                   </svg>
               </div>
           </div>
       </div>
   </div>
</script>
<script type="text/template" x-email-success>
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <div class="modal-close" data-dismiss="modal">
                   <svg class="icon icon-close">
                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-close"></use>
                   </svg>
               </div>
           </div>
           <div class="modal-body">
               <svg class="icon icon-message-sent">
                   <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-message-sent"></use>
               </svg>
               <h6><%- rc.title %></h6>
               <p><%= rc.text %></p>
               <button class="link-button link-button--primary" data-dismiss="modal">Bağla</button>
           </div>
       </div>
   </div>
</script>
<script type="text/template" x-premium-announcement>
   <div class="announcement announcement--short announcement-template">
       <div class="announcement-image">
           <div id="announcement-premium_<%- rc.id %>" class="announcement-slider announcement-slider--premium carousel slide" data-interval="false" data-pause="true">
               <ol class="carousel-indicators">
                   <li data-target="#announcement-premium_<%- rc.id %>" data-slide-to="0" class="active"></li>
                   <li data-target="#announcement-premium_<%- rc.id %>" data-slide-to="1"></li>
                   <li data-target="#announcement-premium_<%- rc.id %>" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                   <a target="_blank" href="<%- rc.href %>" class="carousel-item active">
                       <img src="<%- rc.image_0 %>" alt="<%- rc.title %>">
                   </a>
                   <a target="_blank" href="<%- rc.href %>" class="carousel-item">
                       <img src="<%- rc.image_1 %>" alt="<%- rc.title %>">
                   </a>
                   <a target="_blank" href="<%- rc.href %>" class="carousel-item">
                       <img src="<%- rc.image_2 %>" alt="<%- rc.title %>">
                   </a>
               </div>
           </div>
           <div class="announcement-icons">
               <% if( rc.is_premium ) { %>
                   <div class="shape">
                       <svg class="icon icon-premium-icon">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-premium-icon"></use>
                       </svg>
                   </div>
               <% } %>
               <% if( rc.vip ) { %>
                   <div class="shape">
                       <svg class="icon icon-vipp">
                           <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-vipp"></use>
                       </svg>
                   </div>
               <% } %>
               <div class="shape">
                   <form action="https://evelani.az/az/wishlist" method="post" x-edit-form="<%- rc.id %>" x-target-with-data="afterWishlist">
                       <input type="hidden" name="id" value="<%- rc.id %>">
                       <button type="submit">
                           <svg class="icon icon-heart<%- rc.wishlist %>">
                               <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg?v=2022-04-21 19:44:49#icon-heart<%- rc.wishlist %>"></use>
                           </svg>
                       </button>
                   </form>
               </div>
           </div>
       </div>
       <a target="_blank" href="<%- rc.href %>" class="announcement-description template-announcement">
           <p class="announcement-price py-0"><span class="pricemain pricemain--premium"><%- rc.price %></span>AZN<%- rc.type == 2 ? '/ay' : ( rc.type == 3 ? '/gün' : '' ) %></p>
           <p class="announcement-location"><%- rc.place %></p>
           <p class="announcement-size announcement-headline"><%- rc.headline %></p>
           <p class="announcement-deadline"><span><%- rc.approved_at %></span></p>
       </a>
   </div>
</script>
<script>
   $( function()
   {
       $( '[data-toggle="tooltip"]' ).tooltip()
   } )
</script>
<script>
   // calc
   $( ".reset-button" ).click( function()
   {
       return false; // prevent submitting
   
   } );
   $( ".reset-button" ).click( function()
   {
       $( '.block-footer p .cost span' ).text( '0' );
       $( '#calculator .range input' ).val( 0 )
       $( '#calculator .pull-right input' ).val( 0 )
   } )
   
   $( '.counter-num' ).each( function()
   {
       let $this = $( this );
       jQuery( { Counter : 0 } ).animate( { Counter : parseInt( $this.attr( "data-number" ) ) } , {
           duration : 1000 ,
           easing : 'swing' ,
           step : function( now )
           {
               var num = Math.ceil( now ).toString();
               if( Number( num ) > 999 )
               {
                   while( /(\d+)(\d{3})/.test( num ) )
                   {
                       num = num.replace( /(\d+)(\d{3})/ , '$1' + ' ' + '$2' );
                   }
               }
               $this.text( num );
           }
       } );
   } );
   
   
   var config = {
       c1 : {
           km : 300 , // Kreditin müddəti
           gkm : 360 , // Güzəştli kreditin müddəti
           kf : 8 , //Kredit faizi (illik)
           gkf : 4 , // Güzəştli kredit faizi (illik)
           ausx : 190 , // Ailə üzvlərinin saxlanma xərci
           amge : 0.7 , // Aylıq məcmu gəlir əmsalı
           eosx : 0.008 , // Ehtimal olunan sığorta xərci
           kmm : 150000 , // Kreditin maksimal məbləği
           gkmm : 100000 , // Güzəştli kreditin maksimal məbləği
           miof : 0.15 , // Minimal ilkin ödəniş faizi
           gmiof : 0.1 // Güzəştli minimal ilkin ödəniş faizi
       } , c2 : {
           bokb : 0.004 , // Bankın ödəyəcəyi komissiyalar - Birdəfəlik
           mkm : 5000000 , // Maksimal kredit məbləği
           gmkm : 10000000 , // Güzəştli maksimal kredit məbləği
           mkm1 : 12 , // Maksimal kredit müddəti birinci şərt
           mkm2 : 24 , // Maksimal kredit müddəti ikinci şərt
           mkm3 : 84 , // Maksimal kredit müddəti üçüncü şərt
           mgm1 : 11 , // Maksimal güzəşt müddəti birinci şərt
           mgm2 : 23 , // Maksimal güzəşt müddəti ikinci şərt
           mgm3 : 24 , // Maksimal güzəşt müddəti üçüncü şərt
           msm : 36 // Maksimal subsidiya müddəti birinci şərt
       } , c3 : {
           mi : 20000 , // Aylıq məcmu gəlir əmsalı
           ol : 2000 , // Digər öhdəliklər
           ht : 300 , // Kirayənin müddəti
       }
   };
   
   
   var acc = document.getElementsByClassName( "accordion" );
   var i;
   
   for( i = 0; i < acc.length; i++ )
   {
       acc[ i ].addEventListener( "click" , function()
       {
           //hide news and statistics and calculator div
           $( '.article-section' ).hide();
           $( '.cal' ).hide();
   
           //banners
           let cat_id = this.getAttribute( 'data-banner-id' );
           $( '.banners-block a' ).hide();
           $( '.ban' + 0 ).show();
           $( '.ban' + cat_id ).show();
   
           // sub categories
           $( '.subCategory' ).hide();
           $( '.sub-' + cat_id ).show();
   
           // $('.banners-block a').show();
           this.classList.toggle( "active" );
           var panel = this.nextElementSibling;
           if( panel.style.display === "block" )
           {
               panel.style.display = "none";
           } else
           {
               panel.style.display = "block";
           }
       } );
   }
   
   $( '.cal-button ' ).on( 'click' , function()
   {
       //hide news and statistics div
       $( '.subCategory' ).hide();
   
       let id = $( this ).attr( 'data-id' );
       $( '.cal' ).hide();
       $( '#calculator' + id ).show();
       $( '.statistics-section' ).hide();
   } );
   
   $( document ).ready( function()
   {
       $( '.banners-block .ban' + 2 ).hide();
       $( '.banners-block .ban' + 3 ).hide();
   } );
   
   function checkAccept( t )
   {
       if( $( '#check-accept' ).is( ":checked" ) )
       {
           $( '.payment-button' ).show();
       } else
       {
           $( '.payment-button' ).hide();
       }
   }
   
   function checkPayment( t )
   {
       $( '#message' ).show();
   }
   
   function goSite()
   {
       $( '#check-accept' ).attr( 'checked' , false );
       $( '.payment-button' ).hide();
       window.open( 'https://gpp.az/GPEWebPortal/Infosite/RedirectFromSc/981600/aHR0cDovL21jZ2YuYXovPy9hei9tZW51LzU0Lw==' , '_blank' );
   }
   
   var widId = "";
   var onloadCallback = function()
   {
       widId = grecaptcha.render( 'recapchaWidget' , {
           'sitekey' : '6Ld5ZrcUAAAAAPQwsqzt56U8Aa49WIAqCdTluw_o'
       } );
   };
   $( '.carousel' ).carousel( {
       interval : 2000
   } )
   $( '.language-switch' ).change( function()
   {
       var locale = $( this ).val();
       window.location.href = '/locale/' + locale;
   } );   
   function showUl( t )
   {
       let parent = $( t ).parents( "li" );
       let ul = parent.find( 'ul' );
       if( ul.hasClass( 'show' ) )
       {
           ul.removeClass( 'show' );
       } else
       {
           ul.addClass( 'show' );
       }
   }
</script>
<script>
   $('.announcement-slider').swipeCarousel({});
   var y = document.getElementsByClassName('announcement-slider');
   for (var i = 0; i < y.length; i++) {
       var section = y[i];
       var x = $(y[i]).attr("id");
       if($("#" +x+ " .carousel-inner").children().length < 3){
           $("#" +x+ " .carousel-indicators").addClass("d-none");
       }
   }
   $('.announcement-slider .carousel-indicators  li').on('mouseover',function(){
       $(this).trigger('click');
   })
</script>
<script>
   function isNumberKey( evt )
   {
       var charCode = ( evt.which ) ? evt.which : event.keyCode
       if( charCode > 31 && ( charCode < 48 || charCode > 57 ) && charCode != 46 )
           return false;
       return true;
   }
   $('.select2').select2();
   $( document ).ready( function()
   {
       $('#locationSearch').on('shown.bs.modal', function () {
           if(window.matchMedia("(min-width: 768px)").matches){
               $('.select2-modal').select2({
                   dropdownParent: $('#locationSearch')
               });
               $('.select2-modal').on('select2:open', function(e) {
                   $('input.select2-search__field').prop('placeholder', 'Axtar');
               });
           }
       });
       if(window.matchMedia("(max-width: 768px)").matches){
           $("#locationSearch .modal-content").height(window.innerHeight);
           $("#locationSearch .modal-body").height(window.innerHeight - 185);
           $("#locationSearch .modal-body__content").height(window.innerHeight - 261);
   
           $("#advancedSearch .modal-content").height(window.innerHeight);
           $("#advancedSearch .modal-body").height(window.innerHeight - 185);
   
           $("#make-announcement-premium .modal-content").height(window.innerHeight);
           $("#make-announcement-premium .modal-body").height(window.innerHeight - 60);
   
           $("#make-announcement-vip .modal-content").height(window.innerHeight);
           $("#make-announcement-vip .modal-body").height(window.innerHeight - 60);
   
           $("#pull-forward-announcement .modal-content").height(window.innerHeight);
           $("#pull-forward-announcement .modal-body").height(window.innerHeight - 60);
   
           $("#mortgagemodal1 .modal-content").height(window.innerHeight);
           $("#mortgagemodal1 .modal-body").height(window.innerHeight - 60);
   
           $("#mortgagemodal .modal-content").height(window.innerHeight);
           $("#mortgagemodal .modal-body").height(window.innerHeight - 60);
       }
   });
    <?php if ((isset($_GET['finish'])) AND ($_GET['finish']==1)){ ?>
       $(document).ready( function()
        {
            $('#finish-register').modal('show');
            history.replaceState( '' , '' , '<?= base_url() ?>' );
            loading();
        });
    <?php } ?>

</script>
<script>
        function afterEditName( data )
        {
            $( '#edit-name .modal-close' ).click();
            $( '[x-after-edit-name]' ).click();
            $( '[x-name]' ).text( data.user.name );
            $( '.ad' ).text( data.user.name );
            $( '.profile_name' ).text( data.user.name );
            $( '#nfl' ).text( data.user.name[0] );
            $( '[x-name-input]' ).val( data.user.name );
        }


        function afterEditEmail_1()
        {
            $( '[x-target="afterEditEmail_1"]' ).hide();
            $( '[x-target-with-data="afterEditEmail_2"]' ).show();
        }


        function afterEditEmail_2( data )
        {
            $( '#edit-email .modal-close' ).click();
            $( '[x-after-edit-email]' ).click();

            $( '[x-target="afterEditEmail_1"]' ).show();
            $( '[x-target-with-data="afterEditEmail_2"]' ).hide();

            $( '[x-email]' ).text( data.user.email );
            $( '[x-email-input]' ).val( data.user.email );

            $( '[x-code-input]' ).val( '' );
        }


        function afterEditMobile( data )
        {
            $( '#edit-mobile .modal-close' ).click();
            $( '[x-after-edit-mobile]' ).click();

            $( '[x-mobile]' ).text( data.user.mobileBeautified );
            $( '[x-mobile-input]' ).val( data.user.mobile.replace( '+994' , '' ) );
        }


        function afterEditPassword()
        {
            $( '#edit-password .modal-close' ).click();
            $( '[x-after-edit-password]' ).click();

            $( '[type="password"]' ).val('');
        }
    </script>
</body>
</html>

<?php
date_default_timezone_set('America/Santiago');
//{{ Config::get('settings.sitename') }}
$setting_data['sitename'] 	= "Kawas";
$setting_data['siteUrl'] 	= 'http://www.kawas.cl/';
$setting_data['slogan'] 	= "La Rostería del Café";
$setting_data['author'] 	= 'ITD Chile | Elías Cruz';

/////SISTEMA
$setting_data['parent_id'] = 1;
$setting_data['ultimos_meses'] = 12;

//////DATOS COMPRA FORMULARIO
$setting_data['compraEmail']      ='ccastillo@itdchile.cl';
$setting_data['compraNombre']     ='Elec contacto';

//////DATOS COTIZACION FORMULARIO
$setting_data['cotizacionEmail']      ='ccastillo@itdchile.cl';
$setting_data['cotizacionNombre']     ='Elec contacto';

//////DATOS CONTACTO FORMULARIO
$setting_data['contactoEmail']      ='contacto@kawas.cl';
$setting_data['contactoNombre']     ='Contacto Kawas';

//////DATOS CONTACTO 
$setting_data['emailFrom']      ='no-reply@carloscastillo.cl';
$setting_data['emailFromPass']  ='12345';

$setting_data['latLong']  		='-33.4869875,-70.7067877';
$setting_data['direccion']  	='Piloto Lazo 235, Cerrillos, Santiago de Chile';
$setting_data['fonoMesaCentral']='(56-2) 2756-7400';
$setting_data['fonoVentas']  	='(56-2) 2756-7412';
$setting_data['fonoFax']  		='(56-2) 2557-1380';
$setting_data['email']  		='info@kawas.cl';

//////ARCHIVOS
$setting_data['maxUploadTxt']  			='2MB';
$setting_data['maxUpload']  			='2000';
$setting_data['uploadFolder']  			=$_SERVER["DOCUMENT_ROOT"];
$setting_data['uploadManualProducts']  	="/uploads/products/manual";
$setting_data['uploadImagesProducts']  	="/uploads/products/";
$setting_data['uploadCatProducts']	   	="/uploads/products/categorias";
$setting_data['uploadClientes']	   		="/uploads/clientes";
$setting_data['uploadServicios']	   	="/uploads/servicios";
$setting_data['uploadCatBlog']	   		="/uploads/blog/categorias";
$setting_data['uploadBlog']	   			="/uploads/blog/";
$setting_data['uploadNosotros']	   		="/uploads/nosotros/";
$setting_data['uploadCatalogosImg'] 	="/uploads/catalogos/";
$setting_data['uploadCatalogosPdf'] 	="/uploads/catalogos/pdf";
$setting_data['uploadSliderHome'] 		="/uploads/slider-home";
$setting_data['uploadBannerHome'] 		="/uploads/banner-home";
$setting_data['uploadBannerRotatorio'] 	="/uploads/banner-rotatorio";
$setting_data['uploadSavePDFCompras'] 	="/uploads/pdf/compras";

////VENTAS
$setting_data['emailVentas'] 			="ventas@kawas.cl";


////REDES SOCIALES
$setting_data['redesFacebook'] 			="http://facebook.com";
$setting_data['redesTwitter'] 			="http://twitter.com";

//////SITIO WEB
/*$setting_data['menuCategorias']  	= Categoria::whereHas('productos', function ($q)  {
                                $q->where('productos.active','=', 1);
                                })->orderBy('categorias.name', 'asc')->take(6)->get();
 

$setting_data['footerClientes']  	= Cliente::orderByRaw("RAND()")->get();

$setting_data['menuMarcas']			= Marca::whereHas('productos', function($q){
				                        $q->where('productos.active', '=', 1);
				                        $q->orderBy('productos.es_oferta', 'desc');
				                        $q->orderBy('productos.name', 'asc');
				                    })->orderBy('name', 'asc')->get();

$setting_data['bannerRotatorio']  	= BannerRotatorio::where('active', '=', 1)->orderBy('order', 'asc')->get();

$setting_data['menuServices']  		= Service::orderBy('name', 'asc')->take(6)->get();

$setting_data['menuCatalogos'] 		= Catalogo::where('archivo', '!=', 'null')->orderBy('name', 'asc')->take(6)->get();
*/
return $setting_data;

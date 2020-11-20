window.onload = function(){				
	//IE/SAFARI/OPERA/CHROME/FF
	const lang = (window.navigator.userLanguage || window.navigator.language).substring(0,2);

	const localize = lang=>{
		if(lang == 'es'){
			$('#mnuTitle').html('Menú')
			$('#mnuOStart').html('Inicio')
			$('#mnuOProds').html('Productos')
			$('#mnuOContact').html('Contacto')
			
			$('#siteSubtitle').html('TI para la plenitud de la Gobernanza de TI')
			$('#siteSlogan').html('Soluciones avanzadas para la gestión, gobernanza y aseguramiento de TI enfocadas en el valor empresarial')
			
			$('#itaudit_service').html('Auditoría de TI')
			$('#itaudit_service_desc').html('Servicio de realización de auditorías de sistemas automatizados en todo tipo de organización.')
			$('#prdITSA').html('Aplicación web para la realización de auditorías semánticas de TI en todo tipo de organización.')
			$('#prdDMS').html('Aplicación web para la extracción de contenido, almacenamiento seguro, control de acceso y búsqueda de documentos procesados.')

			$('#lang').html('En')
			$('#lang').data('lang',"es")
		}else{
			$('#mnuTitle').html('Menu')
			$('#mnuOStart').html('Start')
			$('#mnuOProds').html('Products')
			$('#mnuOContact').html('Contact')
			
			$('#itaudit_service').html('IT Audit')
			$('#itaudit_service_desc').html('IT audit service in all types of organizations.')
			$('#siteSubtitle').html('IT for the fullness of IT Governance')
			$('#siteSlogan').html('Advanced solutions for IT management, IT governance and IT assurance focused on business value')
			
			$('#prdITSA').html('Web application for the realization of IT semantic audits in all types of organizations.')
			$('#prdDMS').html('Web application for content extraction, secure storing, access control, and searching of processed documents.')

			$('#lang').html('Es')
			$('#lang').data('lang',"en")																	
		}				
	}

	localize(lang)			

	$('#lang').click(()=>{
		let lng = $('#lang').data('lang');
		lng == 'en'? localize('es'): localize('en')					
	})
}

<?php
	$lang = "";
	
	if(isset($_COOKIE['lang'])){
		$lang = $_COOKIE['lang'];
	}else{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	
	if($lang == "es"){
		$siteTitle = "Enablitech - IT Semantic Audit";		
		$siteContent = "Enablitech: mejorando las funciones de negocio con soluciones informáticas listas para usar.";
		
		$mnuTitle = "Menú";
		$mnuOStart = "Inicio";
		$mnuOAbout = "Acerca de";
		$mnuOImageGallery = "Galería de Imágenes";
		$mnuOContact = "Contacto";
		
		$langTitle = "English";
		$tlang = "en";
		$siteSubtitle = "Modelado de segmentos de aseguramiento de Tecnología de Información";		
		
		$prodDescTitle = "Descripción";
		$prodDesc = "IT Semantic Audit es una aplicación Windows Forms que facilita la planeación de trabajos de ";
		$prodDesc .= "aseguramiento de TI en todo tipo de organización.";
		$prodDesc .= "<br><br>Lo hace mediante el modelado semántico de cada segmento, lo que permite el ";
		$prodDesc .= "descubrimiento y comprensión de todos los aspectos relevantes.";
		$prodDesc .= "<br><br>Un modelo semántico es una representación del ambiente interno de la organización ";
		$prodDesc .= "y su entorno con relación a un tema específico.";
		$prodDesc .= "<br><br>A partir del modelo resulta muy fácil identificar en detalle las áreas que ";
		$prodDesc .= "requieren atención. Además, permite la generación de una base de conocimiento que habilita ";
		$prodDesc .= "el trabajo colaborativo del equipo de aseguramiento antes, durante y después de la fase ";
		$prodDesc .= "de planeación.";
		
		$prodUseTitle = "Uso";
		$prodUseDesc = "La aplicación está dirigida a los procesos de aseguramiento de TI ";
		$prodUseDesc .= "(auditoría, control, gestión y gobierno).";
		$prodUseDesc .= "<br><br>Su diseño está basado por completo en objetos, permitiendo representar ";
		$prodUseDesc .= "cada concepto del contexto, así como las propiedades que lo definen.";
		$prodUseDesc .= "<br><br>Los objetos son instancias de superclases, especializables por medio de ";
		$prodUseDesc .= "subclases particulares. Por ejemplo: 'Centro de Datos' es una instancia de ";
		$prodUseDesc .= "la clase 'Facilidad', que puede contener una o más instancias anidadas de la ";
		$prodUseDesc .= "clase 'Sala'.";
		$prodUseDesc .= "<br><br>Esto permite el análisis y especificación detallada de las actividades de ";
		$prodUseDesc .= "aseguramiento que deberán ser realizadas conforme a los objetivos del compromiso.";
		
		$prodFuncTitle = "Funcionalidades";
		$prodFuncL1 = "Modelado jerárquico de los componentes del segmento y las relaciones entre ellos.";
		$prodFuncL2 = "Especificación de las propiedades más significativas de cada componente, como por ejemplo, ";
		$prodFuncL2 .= "geolocalización de las facilidades, identificación de vulnerabilidades, riesgos...";
		$prodFuncL3 = "Registro de documentos digitales que evidencian las principales características y ";
		$prodFuncL3 .= "comportamiento de cada componente.";
		$prodFuncL4 = "Edición de contenido de texto y gráficos sin necesidad de abandonar la aplicación.";
		$prodFuncL5 = "Generación de informes que representan instantáneas del modelo actual, incluyendo el ";
		$prodFuncL5 .= "reporte de pre-auditoría.";
		$prodFuncL6 = "Generación de la base de conocimiento con capacidad de interacción de usuarios ";
		$prodFuncL6 .= "mediante foros.";
		
		$btnContactUs = "Contáctenos";
		
		$imgGal1 = "Pantalla de inicio";
		$imgGal2 = "Contenedor maestro de documentos";
		$imgGal3 = "Modelo";
		$imgGal4 = "Propiedades del modelo";
		$imgGal5 = "Controles de referencia del modelo";
		$imgGal6 = "Explorador de Adjuntos";
		$imgGal7 = "Editor de comentarios";
		$imgGal8 = "Editor de diagramas";
		$imgGal9 = "Reporte semántico de la rama de un nodo";
		$imgGal10 = "Árbol semántico de un nodo";
		$imgGal11 = "Reporte de Auditoría Semántica";
		
		$imgGalNext = "Siguiente";
		$imgGalPrev = "Anterior";
	}else{
		$siteTitle = "Enablitech - IT Semantic Audit";
		$siteContent = "Enablitech: improving the business functions with out of the box IT solutions";
		
		$mnuTitle = "Menu";
		$mnuOStart = "Start";
		$mnuOAbout = "About";
		$mnuOImageGallery = "Image Gallery";
		$mnuOContact = "Contact";
		
		$langTitle = "Spanish";
		$tlang = "es";
		$siteSubtitle = "Modeling of information technology assurance segments";		
		
		$prodDescTitle = "Description";
		$prodDesc = "IT Semantic Audit is a Windows Forms application that facilitates the planning "; 
		$prodDesc .= "of IT assurance jobs in all types of organizations.";
		$prodDesc .= "<br><br>It does this through the semantic modeling of each segment, ";
		$prodDesc .= "which allows the discovery and understanding of all Relevant aspects.";
		$prodDesc .= "<br><br>A semantic model is a representation of the internal environment ";
		$prodDesc .= "of the organization and its environment in relation to a specific topic.";
		$prodDesc .= "<br><br>From the model it is very easy to identify in detail the areas that ";
		$prodDesc .= "they require attention. In addition, it allows the generation of a knowledge base ";
		$prodDesc .= "that enables the collaborative work of the assurance team before, during and after ";
		$prodDesc .= "the planning phase.";
		
		$prodUseTitle = "Use";
		$prodUseDesc = "The application is aimed at IT assurance processes (audit, control, ";
		$prodUseDesc .= "management and government).";
		$prodUseDesc .= "<br><br>Its design is based entirely on objects, allowing to represent each concept ";
		$prodUseDesc .= "of the context, as well as the properties that define it.";
		$prodUseDesc .= "<br><br>The objects are instances of superclasses, specializable by means of ";
		$prodUseDesc .= "particular subclasses. For example: 'Data Center' is an instance of the 'Facility' ";
		$prodUseDesc .= "class, which may contain one or more nested instances of the 'Room' class.";
		$prodUseDesc .= "<br><br>This allows the analysis and detailed specification of the assurance ";
		$prodUseDesc .= "activities that must be carried out in accordance with the objectives of the commitment.";
		
		$prodFuncTitle = "Functionalities";
		$prodFuncL1 = "Hierarchical modeling of the components of the segment and the relationships between them.";
		$prodFuncL2 = "Specification of the most significant properties of each component, such as geolocation of"; 
		$prodFuncL2 .= "facilities, identification of vulnerabilities, risks ...";
		$prodFuncL3 = "Registration of digital documents that show the main characteristics and behavior of each ";
		$prodFuncL3 .= "component.";
		$prodFuncL4 = "Editing text content and graphics without having to abandon the application.";
		$prodFuncL5 = "Generation of reports that represent snapshots of the current model, including ";
		$prodFuncL5 .= "the pre-audit report.";
		$prodFuncL6 = "Generation of the knowledge base with the ability of user interaction through forums.";
		
		$btnContactUs = "Contact Us";
		
		$imgGal1 = "Splash Screen";
		$imgGal2 = "Master document container";
		$imgGal3 = "Model";
		$imgGal4 = "Model properties";
		$imgGal5 = "Model reference controls";
		$imgGal6 = "Attachment explorer";
		$imgGal7 = "Comment editor";
		$imgGal8 = "Diagram editor";
		$imgGal9 = "Semantic report of the branch of a node";
		$imgGal10 = "Semantic tree of a node";
		$imgGal11 = "Semantic Audit Report";
		
		$imgGalNext = "Next";
		$imgGalPrev = "Prev";
	}
?>
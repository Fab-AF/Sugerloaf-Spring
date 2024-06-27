<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="favicon.ico">
      <title>{{env('APP_NAME')}}</title>

	  <!-- Latest compiled and minified CSS -->	  	  
      <link href="/css/editor.css" rel="stylesheet">
	  <script>
		var contentType = '{{$type}}';
	  </script>
   </head>
   <body>
      <div id="vvveb-builder">
         <div id="top-panel">
			@include("admin.editor.top.index")
		 </div>

		  <div id="left-panel">
			@include("admin.editor.left.index")
		  </div>

		  <div id="canvas">
			@include("admin.editor.middle.index")
		  </div>
		  
		 <div id="right-panel">
			@include("admin.editor.right.index")
		 </div>

		 <div id="bottom-panel">
			@include("admin.editor.bottom.index")
		 </div>

		 @include("admin.editor.templateBlock")
		 @include("admin.editor.editorModel")	

      </div>
      <!-- jquery-->
      <script src="/editor-js/jquery.min.js"></script>
      <script src="/editor-js/jquery.hotkeys.js"></script>
      <!-- bootstrap-->
      <script src="/editor-js/popper.min.js"></script>
      <script src="/editor-js/bootstrap.min.js"></script>
      <!-- builder code-->
      <script src="/editor-js/libs/builder/builder.js"></script>	
      <script src="/editor-js/libs/builder/undo.js"></script>	
      <script src="/editor-js/libs/builder/inputs.js"></script>
      <!-- media gallery -->
      <link href="/editor-js/libs/media/media.css" rel="stylesheet">
      <script>
         window.mediaPath = '/media';          
      </script>
      <script src="/editor-js/libs/media/media.js"></script>	
      <!--<script src="editor-js/libs/media/openverse.js"></script>-->
      <script src="/editor-js/libs/builder/plugin-media.js"></script>
      <!-- components-->
      <!-- script src="libs/builder/components-server.js"></script -->	
      <script src="/editor-js/libs/builder/plugin-google-fonts.js"></script>	
      <script src="/editor-js/libs/builder/components-common.js"></script>	
      <script src="/editor-js/libs/builder/plugin-aos.js"></script>
      <script src="/editor-js/libs/builder/components-elements.js"></script>	
      <script src="/editor-js/libs/builder/components-bootstrap5.js"></script>	
      <script src="/editor-js/libs/builder/components-widgets.js"></script>	
      <script src="/editor-js/libs/builder/components-html.js"></script>	
      <!-- sections-->
      <script src="/editor-js/libs/builder/sections-bootstrap4.js"></script>
      <!-- blocks-->
      <script src="/editor-js/libs/builder/blocks-bootstrap4.js"></script>
      <!-- plugins -->
      <!-- code mirror - code editor syntax highlight -->
      <link href="/editor-js/libs/codemirror/lib/codemirror.css" rel="stylesheet"/>
      <link href="/editor-js/libs/codemirror/theme/material.css" rel="stylesheet"/>
      <script src="/editor-js/libs/codemirror/lib/codemirror.js"></script>
      <script src="/editor-js/libs/codemirror/lib/xml.js"></script>
      <script src="/editor-js/libs/codemirror/lib/formatting.js"></script>
      <script src="/editor-js/libs/builder/plugin-codemirror.js"></script>	
      <!-- jszip - download page as zip -->
      <script src="/editor-js/libs/jszip/jszip.min.js"></script>
      <script src="/editor-js/libs/jszip/filesaver.min.js"></script>
      <script src="/editor-js/libs/builder/plugin-jszip.js"></script>
      <!-- autocomplete plugin used by autocomplete input-->
      <script src="/editor-js/libs/autocomplete/jquery.autocomplete.js"></script>
	  
	  <!-- select2 js-->
	  <link href="/editor-js/libs/select2/select2.min.css" rel="stylesheet"/>
	  <script src="/editor-js/libs/select2/select2.min.js"></script>

      <script>
         $(document).ready(function() 
         {
			 setCSRFToken();
				if (window.location.hash.indexOf("no-right-panel") != -1)
				{
					$("#vvveb-builder").addClass("no-right-panel");
					$(".component-properties-tab").show();
					Vvveb.Components.componentPropertiesElement = "#left-panel .component-properties";
				} else
				{
					$(".component-properties-tab").hide();
				}

         		Vvveb.Builder.init('/public/editor.html', function() {
					//run code after page/iframe is loaded
				});

				Vvveb.Gui.init();
				Vvveb.SectionList.init();
         		Vvveb.Breadcrumb.init();
         });

		 function setCSRFToken()
		 {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('[name="csrf-token"]').attr('content'),
				}
			});
			
			if(contentType == "post") 
			{
				$("#custome-assign-categoery").select2({
					placeholder:"Choose Category"
				});
				$("#custome-assign-tag").select2({
					placeholder:"Choose Tag"
				});			
			}
		}
		
		/*Custome Code by Hasamukh*/
		function adjustCustomeHeight(elements) {	
			 let wHeight = $(window).height();
			 let maxOffset = 0;
			 
			 elements.each(function (i,e) {
				 maxOffset = Math.max(maxOffset, e.getBoundingClientRect()["top"]);
			});
			
			 elements.each(function (i,e) {
				 e.style.height = (wHeight - maxOffset) + "px";
			});
		}
		
		/*Extra Param added when page saved*/
		function extraAttributeFill()
		{
			if(contentType == "post") 
			{
				return {
					"type" : contentType,
					"title": $("#custome-assign-title").val(),
					"status": $("#custome-assign-status").val(),
					"category": $("#custome-assign-categoery").val(),
					"tag": $("#custome-assign-tag").val(),
					"seo_title": $("#seo_title").val(),
					"seo_keyword": $("#seo_keyword").val(),
					"seo_description": $("#seo_description").val(),
				};
			}
			else 
			{
				return {
					"type" : contentType,
					"title": $("#custome-assign-title").val(),
					"type": $("#custome-assign-type").val(),
					"status": $("#custome-assign-status").val(),
					"seo_title": $("#seo_title").val(),
					"seo_keyword": $("#seo_keyword").val(),
					"seo_description": $("#seo_description").val(),
				}
			}
		}
      </script>
   </body>
</html>
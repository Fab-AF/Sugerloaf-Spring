<!-- templates -->
<script id="vvveb-input-textinput" type="text/html">
	 <div>
		<input name="{%=key%}" type="text" class="form-control"/>
	</div>
</script>

<script id="vvveb-input-textareainput" type="text/html">
	<div>
	   <textarea name="{%=key%}" rows="3" class="form-control"/>
	</div>
</script>

<script id="vvveb-input-checkboxinput" type="text/html">
   <div class="form-check">
   	  <input name="{%=key%}" class="form-check-input" type="checkbox" id="{%=key%}_check">
   	  <label class="form-check-label" for="{%=key%}_check">{% if (typeof text !== 'undefined') { %} {%=text%} {% } %}</label>
   </div>   
</script>

<script id="vvveb-input-radioinput" type="text/html">
   <div>   
   	{% for ( var i = 0; i < options.length; i++ ) { %}
		<label class="form-check-input  {% if (typeof inline !== 'undefined' && inline == true) { %}custom-control-inline{% } %}"  title="{%=options[i].title%}">
   			<input name="{%=key%}" class="form-check-input" type="radio" value="{%=options[i].value%}" id="{%=key%}{%=i%}" {%if (options[i].checked) { %}checked="{%=options[i].checked%}"{% } %}>
   			<label class="form-check-label" for="{%=key%}{%=i%}">{%=options[i].text%}</label>
   		</label>
   	{% } %}   
   </div>
</script>

<script id="vvveb-input-radiobuttoninput" type="text/html">
   <div class="btn-group {%if (extraclass) { %}{%=extraclass%}{% } %} clearfix" role="group">
   	{% var namespace = 'rb-' + Math.floor(Math.random() * 100); %}
   	
   	{% for ( var i = 0; i < options.length; i++ ) { %}
   
   	<input name="{%=key%}" class="btn-check" type="radio" value="{%=options[i].value%}" id="{%=namespace%}{%=key%}{%=i%}" {%if (options[i].checked) { %}checked="{%=options[i].checked%}"{% } %} autocomplete="off">
   	<label class="btn btn-outline-primary {%if (options[i].extraclass) { %}{%=options[i].extraclass%}{% } %}" for="{%=namespace%}{%=key%}{%=i%}" title="{%=options[i].title%}">
   	  {%if (options[i].icon) { %}<i class="{%=options[i].icon%}"></i>{% } %}
   	  {%=options[i].text%}
   	</label>
   
   	{% } %}
   			
   </div>
</script>
<script id="vvveb-input-toggle" type="text/html">
   <div class="toggle">
       <input 
   type="checkbox" 
   name="{%=key%}" 
   value="{%=on%}" 
   {%if (off) { %} data-value-off="{%=off%}" {% } %}
   {%if (on) { %} data-value-on="{%=on%}" {% } %} 
   class="toggle-checkbox" 
   id="{%=key%}">
       <label class="toggle-label" for="{%=key%}">
           <span class="toggle-inner"></span>
           <span class="toggle-switch"></span>
       </label>
   </div>
   
</script>
<script id="vvveb-input-header" type="text/html">
   <h6 class="header">{%=header%}</h6>
   
</script>
<script id="vvveb-input-select" type="text/html">
   <div>
   
   	<select class="form-select">
   		{% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
   			{% if (options[i].optgroup) {  %}
   				{% if (optgroup) {  %}
   					</optgroup>
   				{% } %}
   				<optgroup label="{%=options[i].optgroup%}">
   			{% optgroup = true; } else { %}
   		<option value="{%=options[i].value%}" 
   			{% 
   				for (attr in options[i]) {
   						if (attr != "value" && attr != "text") {
   					 %} 
   						{%=attr%}={%=options[i][attr]%} 
   					{% } 
   				} %}>
   		{%=options[i].text%}</option>
   		{% } } %}
   	</select>
   
   </div>
   
</script>
<script id="vvveb-input-icon-select" type="text/html">
   <div class="input-list-select">
   	
   	<div class="elements">
   		<div class="row">
   			{% for ( var i = 0; i < options.length; i++ ) { %}
   			<div class="col">
   				<div class="element">
   					{%=options[i].value%}
   					<label>{%=options[i].text%}</label>
   				</div>
   			</div>
   			{% } %}
   		</div>
   	</div>
   </div>
   
</script>
<script id="vvveb-input-html-list-select" type="text/html">
   <div class="input-html-list-select">
   	
   	<div class="current-element">
   	
   	</div>
   	
   	<div class="popup">
   		<select class="form-select">
   			{% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
   				{% if (options[i].optgroup) {  %}
   					{% if (optgroup) {  %}
   						</optgroup>
   					{% } %}
   					<optgroup label="{%=options[i].optgroup%}">
   				{% optgroup = true; } else { %}
   				<option value="{%=options[i].value%}">{%=options[i].text%}</option>
   			{% } } %}
   		</select>
   		
   	      <div class="search">
   			  <input class="form-control search" placeholder="Search elements" type="text">
   			  <button class="clear-backspace">
   				  <i class="la la-times"></i>
   			  </button>
   		</div>
   		
   		<div class="elements">
   				{%=elements%}
   			</div>
   		</div>
   	</div>
   </div>
   
</script>
<script id="vvveb-input-html-list-dropdown" type="text/html">
   <div class="input-html-list-select" {% if (typeof id !== "undefined") { %} id={%=id%} {% } %}>
   	
   	<div class="current-element">
   	
   	</div>
   	
   	<div class="popup">
   		<select class="form-select">
   			{% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
   				{% if (options[i].optgroup) {  %}
   					{% if (optgroup) {  %}
   						</optgroup>
   					{% } %}
   					<optgroup label="{%=options[i].optgroup%}">
   				{% optgroup = true; } else { %}
   				<option value="{%=options[i].value%}">{%=options[i].text%}</option>
   			{% } } %}
   		</select>
   		
   	      <div class="search">
   			  <input class="form-control search" placeholder="Search elements" type="text">
   			  <button class="clear-backspace">
   				  <i class="la la-times"></i>
   			  </button>
   		</div>
   		
   		<div class="elements">
   				{%=elements%}
   			</div>
   		</div>
   	</div>
   </div>
   
</script>
<script id="vvveb-input-dateinput" type="text/html">
   <div>
   	<input name="{%=key%}" type="date" class="form-control" 
   		{% if (typeof min_date === 'undefined') { %} min="{%=min_date%}" {% } %} {% if (typeof max_date === 'undefined') { %} max="{%=max_date%}" {% } %}
   	/>
   </div>
   
</script>
<script id="vvveb-input-listinput" type="text/html">
   <div class="row">
   
   	{% for ( var i = 0; i < options.length; i++ ) { %}
   	<div class="col-6">
   		<div class="input-group">
   			<input name="{%=key%}_{%=i%}" type="text" class="form-control" value="{%=options[i].text%}"/>
   			<div class="input-group-append">
   				<button class="input-group-text btn btn-sm btn-danger">
   					<i class="la la-trash la-lg"></i>
   				</button>
   			</div>
   		  </div>
   		  <br/>
   	</div>
   	{% } %}
   
   
   	{% if (typeof hide_remove === 'undefined') { %}
   	<div class="col-12">
   	
   		<button class="btn btn-sm btn-outline-primary">
   			<i class="la la-trash la-lg"></i> Add new
   		</button>
   		
   	</div>
   	{% } %}
   		
   </div>
   
</script>
<script id="vvveb-input-grid" type="text/html">
   <div class="row">
   	<div class="col-6 mb-2">
   	
   		<label>Flexbox</label>
   		<select class="form-select" name="col">
   			
   			<option value="">None</option>
   			{% for ( var i = 1; i <= 12; i++ ) { %}
   			<option value="{%=i%}" {% if ((typeof col !== 'undefined') && col == i) { %} selected {% } %}>{%=i%}</option>
   			{% } %}
   			
   		</select>
   	</div>
   
   	<div class="col-6 mb-2">
   		<label>Extra small</label>
   		<select class="form-select" name="col-xs">
   			
   			<option value="">None</option>
   			{% for ( var i = 1; i <= 12; i++ ) { %}
   			<option value="{%=i%}" {% if ((typeof col_xs !== 'undefined') && col_xs == i) { %} selected {% } %}>{%=i%}</option>
   			{% } %}
   			
   		</select>
   	</div>
   	
   	<!-- div class="col-6">
   		<label>Small</label>
   		<select class="form-select" name="col-sm">
   			
   			<option value="">None</option>
   			{% for ( var i = 1; i <= 12; i++ ) { %}
   			<option value="{%=i%}" {% if ((typeof col_sm !== 'undefined') && col_sm == i) { %} selected {% } %}>{%=i%}</option>
   			{% } %}
   			
   		</select>
   		<br/>
   	</div -->
   	
   	<div class="col-6 mb-2">
   		<label>Medium</label>
   		<select class="form-select" name="col-md">
   			
   			<option value="">None</option>
   			{% for ( var i = 1; i <= 12; i++ ) { %}
   			<option value="{%=i%}" {% if ((typeof col_md !== 'undefined') && col_md == i) { %} selected {% } %}>{%=i%}</option>
   			{% } %}
   			
   		</select>
   	</div>
   	
   	<div class="col-6 mb-2">
   		<label>Large</label>
   		<select class="form-select" name="col-lg">
   			
   			<option value="">None</option>
   			{% for ( var i = 1; i <= 12; i++ ) { %}
   			<option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
   			{% } %}
   			
   		</select>
   	</div>
   	
   	
   	<div class="col-6 mb-2">
   		<label>Extra large </label>
   		<select class="form-select" name="col-xl">
   			
   			<option value="">None</option>
   			{% for ( var i = 1; i <= 12; i++ ) { %}
   			<option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
   			{% } %}
   			
   		</select>
   	</div>
   	
   	<div class="col-6 mb-2">
   		<label>Extra extra large</label>
   		<select class="form-select" name="col-xxl">
   			
   			<option value="">None</option>
   			{% for ( var i = 1; i <= 12; i++ ) { %}
   			<option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
   			{% } %}
   			
   		</select>
   	</div>
   	
   	{% if (typeof hide_remove === 'undefined') { %}
   	<div class="col-12">
   	
   		<button class="btn btn-sm btn-outline-light text-danger">
   			<i class="la la-trash la-lg"></i> Remove
   		</button>
   		
   	</div>
   	{% } %}
   	
   </div>
   
</script>
<script id="vvveb-input-textvalue" type="text/html">
   <div class="row">
   	<div class="col-6 mb-1">
   		<label>Value</label>
   		<input name="value" type="text" value="{%=value%}" class="form-control"/>
   	</div>
   
   	<div class="col-6 mb-1">
   		<label>Text</label>
   		<input name="text" type="text" value="{%=text%}" class="form-control"/>
   	</div>
   
   	{% if (typeof hide_remove === 'undefined') { %}
   	<div class="col-12">
   	
   		<button class="btn btn-sm btn-outline-light text-danger">
   			<i class="la la-trash la-lg"></i> Remove
   		</button>
   		
   	</div>
   	{% } %}
   
   </div>
   
</script>
<script id="vvveb-input-rangeinput" type="text/html">
   <div class="input-range">
   	
   	<input name="{%=key%}" type="range" min="{%=min%}" max="{%=max%}" step="{%=step%}" class="form-range" data-input-value/>
   	<input name="{%=key%}" type="number" min="{%=min%}" max="{%=max%}" step="{%=step%}" class="form-control" data-input-value/>
   </div>
   
</script>
<script id="vvveb-input-imageinput" type="text/html">
   <div>
   	<input name="{%=key%}" type="text" class="form-control"/>
   	<input name="file" type="file" class="form-control"/>
   </div>
   
</script>
<script id="vvveb-input-imageinput-gallery" type="text/html">
   <div>
   	<img id="thumb-{%=key%}" class="img-fluid rounded" data-target-input="#input-{%=key%}" data-target-thumb="#thumb-{%=key%}" style="cursor:pointer" src="">
   	<input name="{%=key%}" type="text" class="form-control mt-1" id="input-{%=key%}"/>
   	<button name="button" class="btn btn-primary btn-sm btn-icon mt-2" data-target-input="#input-{%=key%}" data-target-thumb="#thumb-{%=key%}"><i class="la la-image la-lg"></i>&ensp;Set image</button>
   </div>
   
</script>
<script id="vvveb-input-colorinput" type="text/html">
   <div>
   	<input name="{%=key%}" type="color" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %}  pattern="#[a-f0-9]{6}" class="form-control form-control-color"/>
   </div>
   
</script>
<script id="vvveb-input-bootstrap-color-picker-input" type="text/html">
   <div>
   	<div id="cp2" class="input-group" title="Using input value">
   	  <input name="{%=key%}" type="text" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %}	 class="form-control"/>
   	  <span class="input-group-append">
   		<span class="input-group-text colorpicker-input-addon"><i></i></span>
   	  </span>
   	</div>
   </div>
   
</script>
<script id="vvveb-input-numberinput" type="text/html">
   <div>
   	<input name="{%=key%}" type="number" value="{%=value%}" 
   		  {% if (typeof min !== 'undefined' && min != false) { %}min="{%=min%}"{% } %} 
   		  {% if (typeof max !== 'undefined' && max != false) { %}max="{%=max%}"{% } %} 
   		  {% if (typeof step !== 'undefined' && step != false) { %}step="{%=step%}"{% } %} 
   	class="form-control"/>
   </div>
</script>
<script id="vvveb-input-button" type="text/html">
   <div>
   	<button class="btn btn-sm btn-primary">
   		<i class="la  {% if (typeof icon !== 'undefined') { %} {%=icon%} {% } else { %} la-plus {% } %} la-lg"></i> {%=text%}
   	</button>
   </div>		
</script>
<script id="vvveb-input-cssunitinput" type="text/html">
   <div class="input-group" id="cssunit-{%=key%}">
   	<input name="number" type="number"  {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %} 
   		  {% if (typeof min !== 'undefined' && min != false) { %}min="{%=min%}"{% } %} 
   		  {% if (typeof max !== 'undefined' && max != false) { %}max="{%=max%}"{% } %} 
   		  {% if (typeof step !== 'undefined' && step != false) { %}step="{%=step%}"{% } %} 
   	class="form-control"/>
   	 <div class="input-group-append">
   	<select class="form-select small-arrow" name="unit">
   		<option value="em">em</option>
   		<option value="px">px</option>
   		<option value="%">%</option>
   		<option value="rem">rem</option>
   		<option value="auto">auto</option>
   	</select>
   	</div>
   </div>
   
</script>
<script id="vvveb-breadcrumb-navigaton-item" type="text/html">
   <li class="breadcrumb-item"><a href="#">{%=name%}</a></li>
</script>
<script id="vvveb-input-sectioninput" type="text/html">
   <label class="header" data-header="{%=key%}" for="header_{%=key%}"><span>{%=header%}</span> <div class="header-arrow"></div></label> 
   <input class="header_check" type="checkbox" {% if (typeof expanded !== 'undefined' && expanded == false) { %} {% } else { %}checked="true"{% } %} id="header_{%=key%}"> 
   <div class="section row" data-section="{%=key%}"></div>		
   
</script>
<script id="vvveb-property" type="text/html">
   <div class="mb-3 {% if (typeof col !== 'undefined' && col != false) { %} col-sm-{%=col%} {% } else { %}row{% } %} {% if (typeof inline !== 'undefined' && inline == true) { %}inline{% } %} " data-key="{%=key%}" {% if (typeof group !== 'undefined' && group != null) { %}data-group="{%=group%}" {% } %}>
   	
   	{% if (typeof name !== 'undefined' && name != false) { %}<label class="{% if (typeof inline === 'undefined' ) { %}col-sm-4{% } %} form-label" for="input-model">{%=name%}</label>{% } %}
   	
   	<div class="{% if (typeof inline === 'undefined') { %}col-sm-{% if (typeof name !== 'undefined' && name != false) { %}8{% } else { %}12{% } } %} input"></div>
   	
   </div>		 
   
</script>
<script id="vvveb-input-autocompletelist" type="text/html">
   <div>
   	<input name="{%=key%}" type="text" class="form-control"/>
   	
   	<div class="form-control autocomplete-list" style="min=height: 150px; overflow: auto;">
                    </div>
                    </div>
   
</script>
<script id="vvveb-input-tagsinput" type="text/html">
   <div>
   	<div class="form-control tags-input" style="height:auto;">
   			
   
   			<input name="{%=key%}" type="text" class="form-control" style="border:none;min-width:60px;"/>
                    </div>
                    </div>
   
</script>
<script id="vvveb-input-noticeinput" type="text/html">
   <div>
   	<div class="alert alert-dismissible fade show alert-{%=type%}" role="alert" style="">		  
   		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>		  
   		<h6><b>{%=title%}</b></h6> 
   		
   		{%=text%}
   	</div>
   </div>
</script>
<script id="vvveb-section" type="text/html">
   {% var suffix = Math.floor(Math.random() * 10000); %}
   
   <div class="section-item" draggable="true">
   	<div class="controls">
   		<div class="handle"></div>
   		<div class="info">
   			<div class="name">{%=name%} 
   				<div class="type">{%=type%}</div>
   			</div>
   		</div>
   		<div class="buttons">
   			<a class="delete-btn" href="" title="Remove section"><i class="la la-trash text-danger"></i></a>
   			<!-- 
   			<a class="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
   			<a class="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
   			-->
   			<a class="properties-btn" href="" title="Properties"><i class="la la-cog"></i></a>
   	</div>
   	</div>
   
   
   	<input class="header_check" type="checkbox" id="section-components-{%=suffix%}">
   
   	<label for="section-components-{%=suffix%}"> 
   		<div class="header-arrow"></div>
   	</label>
   	
   	<div class="tree">
   		<ol >
   			<li data-component="Products" class="file">							
   				<label for="idNaN" style="background-image:url(/js/vvvebjs/icons/products.svg)"><span>Products</span></label>							
   				<input type="checkbox" id="idNaN">
   			</li>
   			<li data-component="Posts" class="file">							
   				<label for="idNaN" style="background-image:url(/js/vvvebjs/icons/posts.svg)"><span>Posts</span></label>							
   				<input type="checkbox" id="idNaN">
   			</li>
   		</ol>
   	</div>
   </div>   
</script>
<!--// end templates --><?php /**PATH C:\xampp\htdocs\Sugerloaf-Spring\resources\views/admin/editor/templateBlock.blade.php ENDPATH**/ ?>
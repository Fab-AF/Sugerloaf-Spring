<div class="drag-elements">
  <div class="header">
	 <ul class="nav nav-tabs  nav-fill" id="elements-tabs" role="tablist">		
		<li class="nav-item sections-tab">
		   <a class="nav-link active" id="sections-tab" data-bs-toggle="tab" href="#sections" role="tab" aria-controls="sections" aria-selected="false" title="Sections">
		   <i class="la la-stream"></i>                           
		   </a>
		</li>
		<li class="nav-item component-tab">
		   <a class="nav-link" id="components-tab" data-bs-toggle="tab" href="#components-tabs" role="tab" aria-controls="components" aria-selected="true" title="Components">
		   <i class="la la-box"></i>                           
		   </a>
		</li>		
		<li class="nav-item component-properties-tab" style="display:none">
		   <a class="nav-link" id="properties-tab" data-bs-toggle="tab" href="#properties" role="tab" aria-controls="properties" aria-selected="false" title="Properties">
		   <i class="la la-cog"></i>                           
		   </a>
		</li>
		<li class="nav-item component-configuration-tab">
		   <a class="nav-link" id="configuration-tab" data-bs-toggle="tab" href="#configuration" role="tab" aria-controls="configuration" aria-selected="false" title="Configuration">
		   <i class="la la-tools"></i>                           
		   </a>
		</li>
	 </ul>
	 <div class="tab-content">
		<div class="tab-pane fade show active sections" id="sections" role="tabpanel" aria-labelledby="sections-tab">
		   <ul class="nav nav-tabs nav-fill sections-tabs" id="properties-tabs" role="tablist">
			  <li class="nav-item content-tab">
				 <a class="nav-link active" data-bs-toggle="tab" href="#sections-new-tab" role="tab" aria-controls="components" aria-selected="false">
					<i class="la la-plus"></i> 
					<div><span>Add section</span></div>
				 </a>
			  </li>
			  <li class="nav-item style-tab">
				 <a class="nav-link" data-bs-toggle="tab" href="#sections-list" role="tab" aria-controls="sections" aria-selected="true">
					<i class="la la-th-list"></i> 
					<div><span>Page Sections</span></div>
				 </a>
			  </li>
		   </ul>
		   <div class="tab-content">
			  <div class="tab-pane fade" id="sections-list" data-section="style" role="tabpanel" aria-labelledby="style-tab">
				 <div class="drag-elements-sidepane sidepane">
					<div>
					   <div class="sections-container">
						  <div class="section-item" draggable="true">
							 <div class="controls">
								<div class="handle"></div>
								<div class="info">
								   <div class="name">
									  &nbsp;
									  <div class="type">&nbsp;</div>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="section-item" draggable="true">
							 <div class="controls">
								<div class="handle"></div>
								<div class="info">
								   <div class="name">
									  &nbsp;
									  <div class="type">&nbsp;</div>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="section-item" draggable="true">
							 <div class="controls">
								<div class="handle"></div>
								<div class="info">
								   <div class="name">
									  &nbsp;
									  <div class="type">&nbsp;</div>
								   </div>
								</div>
							 </div>
						  </div>
					   </div>
					</div>
				 </div>
			  </div>
			  <div class="tab-pane fade show active" id="sections-new-tab" data-section="content" role="tabpanel" aria-labelledby="content-tab">
				 <div class="search">
					<div class="expand">
					   <a href="#" class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></a>
					   <a href="#" title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></a> 
					</div>
					<input class="form-control section-search" placeholder="Search sections" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
					<button class="clear-backspace"  data-vvveb-action="clearSearch" title="Clear search">
					<i class="la la-times"></i>
					</button>
				 </div>
				 <div class="drag-elements-sidepane sidepane">
					<div class="block-preview"><img src="" style="display:none"></div>
					<div>
					   <ul class="sections-list clearfix" data-type="leftpanel">
					   </ul>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
		<div class="tab-pane fade" id="components-tabs" role="tabpanel" aria-labelledby="components-tab">
		   <ul class="nav nav-tabs nav-fill sections-tabs" role="tablist">
			  <li class="nav-item components-tab">
				 <a class="nav-link active" data-bs-toggle="tab" href="#components" role="tab" aria-controls="components" aria-selected="true">
					<i class="la la-box"></i> 
					<div><span>Components</span></div>
				 </a>
			  </li>
			  <li class="nav-item blocks-tab">
				 <a class="nav-link" data-bs-toggle="tab" href="#blocks" role="tab" aria-controls="components" aria-selected="false">
					<i class="la la-copy"></i> 
					<div><span>Blocks</span></div>
				 </a>
			  </li>
		   </ul>
		   <div class="tab-content">
			  <div class="tab-pane fade show active components" id="components" data-section="components" role="tabpanel" aria-labelledby="components-tab">
				 <div class="search">
					<div class="expand">
					   <a href="#" class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></a>
					   <a href="#" title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></a> 
					</div>
					<input class="form-control component-search" placeholder="Search components" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
					<button class="clear-backspace" data-vvveb-action="clearSearch">
					<i class="la la-times"></i>
					</button>
				 </div>
				 <div class="drag-elements-sidepane sidepane">
					<div>
					   <ul class="components-list clearfix" data-type="leftpanel">
					   </ul>
					</div>
				 </div>
			  </div>
			  <div class="tab-pane fade show active blocks" id="blocks" data-section="content" role="tabpanel" aria-labelledby="content-tab">
				 <div class="search">
					<div class="expand">
					   <a href="#" class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></a>
					   <a href="#" title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></a> 
					</div>
					<input class="form-control block-search" placeholder="Search blocks" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
					<button class="clear-backspace" data-vvveb-action="clearSearch">
					<i class="la la-times"></i>
					</button>
				 </div>
				 <div class="drag-elements-sidepane sidepane">
					<div class="block-preview"><img src=""></div>
					<div>
					   <ul class="blocks-list clearfix" data-type="leftpanel">
					   </ul>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
		<div class="tab-pane fade" id="properties" role="tabpanel" aria-labelledby="properties-tab">
		   <div class="component-properties-sidepane">
			  <div>
				 <div class="component-properties">
					<ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
					   <li class="nav-item content-tab">
						  <a class="nav-link content-tab active" data-bs-toggle="tab" href="#content-left-panel-tab" role="tab" aria-controls="components" aria-selected="true">
							 <i class="la la-lg la-sliders-h"></i> 
							 <div><span>Content</span></div>
						  </a>
					   </li>
					   <li class="nav-item style-tab">
						  <a class="nav-link" data-bs-toggle="tab" href="#style-left-panel-tab" role="tab" aria-controls="style" aria-selected="false">
							 <i class="la la-lg la-paint-brush"></i> 
							 <div><span>Style</span></div>
						  </a>
					   </li>
					   <li class="nav-item advanced-tab">
						  <a class="nav-link" data-bs-toggle="tab" href="#advanced-left-panel-tab" role="tab" aria-controls="advanced" aria-selected="false">
							 <i class="la la-lg la-tools"></i> 
							 <div><span>Advanced</span></div>
						  </a>
					   </li>
					</ul>
					<div class="tab-content">
					   <div class="tab-pane fade show active" id="content-left-panel-tab" data-section="content" role="tabpanel" aria-labelledby="content-tab">
						  <div class="alert alert-dismissible fade show alert-light m-3" role="alert" style="">		  
							 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>		  
							 <strong>No selected element!</strong><br> Click on an element to edit.		
						  </div>
					   </div>
					   <div class="tab-pane fade show" id="style-left-panel-tab" data-section="style" role="tabpanel" aria-labelledby="style-tab">
					   </div>
					   <div class="tab-pane fade show" id="advanced-left-panel-tab" data-section="advanced"  role="tabpanel" aria-labelledby="advanced-tab">
					   </div>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
		<div class="tab-pane fade" id="configuration" role="tabpanel" aria-labelledby="configuration-tab">
		   <div class="drag-elements-sidepane sidepane">
			  <div>
				 <div class="component-properties">
					<!-- color palette -->                                 
					<input class="header_check" type="checkbox" checked="true" id="header_pallette">
					<div class="tab-pane section px-0" data-section="content">
					   <div class="mb-3  col-sm-6  inline " data-key="background-color">
						  <label class=" form-label" for="input-model">Background Color</label>      
						  <div class=" input">
							 <div>   <input name="background-color" type="color" pattern="#[a-f0-9]{6}" class="form-control form-control-color">  </div>
						  </div>
					   </div>
					   <div class="mb-3  col-sm-6  inline " data-key="background-color">
						  <label class=" form-label" for="input-model">Background Color</label>      
						  <div class=" input">
							 <div>   <input name="background-color" type="color" pattern="#[a-f0-9]{6}" class="form-control form-control-color">  </div>
						  </div>
					   </div>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
	 </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\listingpix_backend\resources\views/admin/editor/left/index.blade.php ENDPATH**/ ?>
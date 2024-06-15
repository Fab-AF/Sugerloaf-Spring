<div id="iframe-wrapper">
  <div id="iframe-layer">
	 <div class="loading-message active">
		<div class="animation-container">
		   <div class="dot dot-1"></div>
		   <div class="dot dot-2"></div>
		   <div class="dot dot-3"></div>
		</div>
		<svg xmlns="https://www.w3.org/2000/svg" version="1.1">
		   <defs>
			  <filter id="goo">
				 <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
				 <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"/>
			  </filter>
		   </defs>
		</svg>
	 </div>
	 <div id="highlight-box">
		<div id="highlight-name"></div>
		<div id="section-actions">
		   <a id="add-section-btn" href="" title="Add element"><i class="la la-plus"></i></a>
		</div>
	 </div>
	 <div id="select-box">
		<div id="wysiwyg-editor" class="default-editor">
		   <a id="bold-btn" href="" title="Bold">
			  <svg height="18" viewBox="0 0 24 24" width="18" xmlns="https://www.w3.org/2000/svg">
				 <path d="M6,4h8a4,4,0,0,1,4,4h0a4,4,0,0,1-4,4H6Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
				 <path d="M6,12h9a4,4,0,0,1,4,4h0a4,4,0,0,1-4,4H6Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
			  </svg>
		   </a>
		   <a id="italic-btn" href="" title="Italic">
			  <svg height="18" viewBox="0 0 24 24" width="18" xmlns="https://www.w3.org/2000/svg">
				 <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="19" x2="10" y1="4" y2="4"/>
				 <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="14" x2="5" y1="20" y2="20"/>
				 <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="15" x2="9" y1="4" y2="20"/>
			  </svg>
		   </a>
		   <a id="underline-btn" href="" title="Underline">
			  <svg height="18" viewBox="0 0 24 24" width="18" xmlns="https://www.w3.org/2000/svg">
				 <path d="M6,4v7a6,6,0,0,0,6,6h0a6,6,0,0,0,6-6V4" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" y1="2" y2="2"/>
				 <line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="4" x2="20" y1="22" y2="22"/>
			  </svg>
		   </a>
		   <a id="strike-btn" href="" title="Strikeout">
		   <del>S</del>
		   </a>
		   <div class="dropdown">
			  <a class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <i class="la la-align-left"></i>
			  </a>
			  <div id="justify-btn" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				 <a class="dropdown-item" href="#" data-value="Left"><i class="la la-lg la-align-left"></i> Align Left</a>
				 <a class="dropdown-item" href="#" data-value="Center"><i class="la la-lg la-align-center"></i> Align Center</a>
				 <a class="dropdown-item" href="#" data-value="Right"><i class="la la-lg la-align-right"></i> Align Right</a>
				 <a class="dropdown-item" href="#" data-value="Full"><i class="la la-lg la-align-justify"></i> Align Justify</a>
			  </div>
		   </div>
		   <div class="separator"></div>
		   <a id="link-btn" href="" title="Create link">
		   <i class="la la-link">
		   </i></a>
		   <div class="separator"></div>
		   <input id="fore-color" name="color" type="color" title="Color" pattern="#[a-f0-9]{6}" class="form-control form-control-color">
		   <input id="back-color" name="background-color" type="color" title="Background Color" pattern="#[a-f0-9]{6}" class="form-control form-control-color">
		   <div class="separator"></div>
		   <select id="font-size" class="form-select">
			  <option value="">Default</option>
			  <option value="8px">8 px</option>
			  <option value="9px">9 px</option>
			  <option value="10px">10 px</option>
			  <option value="11px">11 px</option>
			  <option value="12px">12 px</option>
			  <option value="13px">13 px</option>
			  <option value="14px">14 px</option>
			  <option value="15px">15 px</option>
			  <option value="16px">16 px</option>
			  <option value="17px">17 px</option>
			  <option value="18px">18 px</option>
			  <option value="19px">19 px</option>
			  <option value="20px">20 px</option>
			  <option value="21px">21 px</option>
			  <option value="22px">22 px</option>
			  <option value="23px">23 px</option>
			  <option value="24px">24 px</option>
			  <option value="25px">25 px</option>
			  <option value="26px">26 px</option>
			  <option value="27px">27 px</option>
			  <option value="28px">28 px</option>
		   </select>
		   <select id="font-family" class="form-select">
			  <option value="">Default</option>
			  <optgroup label="System default">
				 <option value="Arial, Helvetica, sans-serif">Arial</option>
				 <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Lucida Grande</option>
				 <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Palatino Linotype</option>
				 <option value="'Times New Roman', Times, serif">Times New Roman</option>
				 <option value="Georgia, serif">Georgia, serif</option>
				 <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
				 <option value="'Comic Sans MS', cursive, sans-serif">Comic Sans</option>
				 <option value="Verdana, Geneva, sans-serif">Verdana</option>
				 <option value="Impact, Charcoal, sans-serif">Impact</option>
				 <option value="'Arial Black', Gadget, sans-serif">Arial Black</option>
				 <option value="'Trebuchet MS', Helvetica, sans-serif">Trebuchet</option>
				 <option value="'Courier New', Courier, monospace">Courier New</option>
				 <option value="'Brush Script MT', sans-serif">Brush Script</option>
			  </optgroup>
		   </select>
		</div>
		<div id="select-actions">
		   <a id="drag-btn" href="" title="Drag element"><i class="la la-arrows-alt"></i></a>
		   <a id="parent-btn" href="" title="Select parent" class="la-rotate-180"><i class="la la-level-up-alt"></i></a>
		   <a id="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
		   <a id="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
		   <a id="clone-btn" href="" title="Clone element"><i class="la la-copy"></i></a>
		   <a id="delete-btn" href="" title="Remove element"><i class="la la-trash"></i></a>
		</div>
		<div class="resize">
		   <!-- top -->
		   <div class="top-left">
		   </div>
		   <div class="top-center">
		   </div>
		   <div class="top-right">
		   </div>
		   <!-- center -->
		   <div class="center-left">
		   </div>
		   <div class="center-right">
		   </div>
		   <!-- bottom -->
		   <div class="bottom-left">
		   </div>
		   <div class="bottom-center">
		   </div>
		   <div class="bottom-right">
		   </div>
		</div>
	 </div>
	 <!-- add section box -->
	 <div id="add-section-box" class="drag-elements">
		<div class="header">
		   <ul class="nav nav-tabs" id="box-elements-tabs" role="tablist">
			  <li class="nav-item component-tab">
				 <a class="nav-link active" id="box-components-tab" data-bs-toggle="tab" href="#box-components" role="tab" aria-controls="components" aria-selected="true">
					<i class="la la-lg la-cube"></i> 
					<div><small>Components</small></div>
				 </a>
			  </li>
			  <li class="nav-item sections-tab">
				 <a class="nav-link" id="box-sections-tab" data-bs-toggle="tab" href="#box-blocks" role="tab" aria-controls="blocks" aria-selected="false">
					<i class="la la-lg la-image"></i> 
					<div><small>Blocks</small></div>
				 </a>
			  </li>
		   </ul>
		   <div class="section-box-actions">
			  <div id="close-section-btn" class="btn btn-light btn-sm bg-white btn-sm float-end"><i class="la la-times la-lg"></i></div>
			  <div class="small mt-1 me-3 float-end">
				 <div class="d-inline me-2">
					<input type="radio" id="add-section-insert-mode-after" value="after" checked="checked" name="add-section-insert-mode" class="form-check-input">
					<label class="form-check-label" for="add-section-insert-mode-after">After</label>
				 </div>
				 <div class="d-inline">
					<input type="radio" id="add-section-insert-mode-inside" value="inside" name="add-section-insert-mode" class="form-check-input">
					<label class="form-check-label" for="add-section-insert-mode-inside">Inside</label>
				 </div>
			  </div>
		   </div>
		   <div class="tab-content">
			  <div class="tab-pane fade show active" id="box-components" role="tabpanel" aria-labelledby="components-tab">
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
				 <div>
					<div>
					   <ul class="components-list clearfix" data-type="addbox">
					   </ul>
					</div>
				 </div>
			  </div>
			  <div class="tab-pane fade" id="box-blocks" role="tabpanel" aria-labelledby="blocks-tab">
				 <div class="search">
					<div class="expand">
					   <a href="#" class="text-sm" title="Expand All" data-vvveb-action="expand"><i class="la la-plus"></i></a>
					   <a href="#" title="Collapse all" data-vvveb-action="collapse"><i class="la la-minus"></i></a> 
					</div>
					<input class="form-control block-search" placeholder="Search blocks" type="text" data-vvveb-action="search" data-vvveb-on="keyup">
					<button class="clear-backspace"  data-vvveb-action="clearSearch">
					<i class="la la-times"></i>
					</button>
				 </div>
				 <div>
					<div>
					   <ul class="blocks-list clearfix"  data-type="addbox">
					   </ul>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
	 </div>
	 <!-- //add section box -->
	 <div id="drop-highlight-box">
	 </div>
  </div>
  <iframe src="" id="iframe1">
  </iframe>
</div><?php /**PATH C:\xampp\htdocs\listingpix_backend\resources\views/admin/editor/middle/index.blade.php ENDPATH**/ ?>
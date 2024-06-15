<div id="top-panel">
   <img src="/images/logo.png" style="width: 97px;height: 33px;" alt="Logo" class="float-start" id="logo">
   <div class="btn-group float-start" role="group">
      <button class="btn btn-light" title="Toggle file manager" id="toggle-file-manager-btn" data-vvveb-action="toggleFileManager" data-bs-toggle="button" aria-pressed="false">
      <img src="/editor-js/libs/builder/icons/file-manager-layout.svg" width="20px" height="20px">
      </button>
      <button class="btn btn-light" title="Toggle left column" id="toggle-left-column-btn" data-vvveb-action="toggleLeftColumn" data-bs-toggle="button" aria-pressed="false">
      <img src="/editor-js/libs/builder/icons/left-column-layout.svg" width="20px" height="20px">
      </button>
      <button class="btn btn-light" title="Toggle right column" id="toggle-right-column-btn" data-vvveb-action="toggleRightColumn" data-bs-toggle="button" aria-pressed="false">
      <img src="/editor-js/libs/builder/icons/right-column-layout.svg" width="20px" height="20px">
      </button>
   </div>
   <div class="btn-group me-3" role="group">
      <button class="btn btn-light" title="Undo (Ctrl/Cmd + Z)" id="undo-btn" data-vvveb-action="undo" data-vvveb-shortcut="ctrl+z">
      <i class="la la-undo"></i>
      </button>
      <button class="btn btn-light la-flip-horizontal"  title="Redo (Ctrl/Cmd + Shift + Z)" id="redo-btn" data-vvveb-action="redo" data-vvveb-shortcut="ctrl+shift+z">
      <i class="la la-undo"></i>
      </button>
   </div>
   <div class="btn-group me-3" role="group">
      <button class="btn btn-light" title="Designer Mode (Free component dragging)" id="designer-mode-btn" data-bs-toggle="button" aria-pressed="false" data-vvveb-action="setDesignerMode">
      <i class="la la-hand-rock"></i>
      </button>
      <button class="btn btn-light" title="Preview" id="preview-btn" type="button" data-bs-toggle="button" aria-pressed="false" data-vvveb-action="preview">
      <i class="la la-eye"></i>
      </button>
      <button class="btn btn-light" title="Fullscreen (F11)" id="fullscreen-btn" data-bs-toggle="button" aria-pressed="false" data-vvveb-action="fullscreen">
      <i class="la la-expand-arrows-alt"></i>
      </button>
      <button class="btn btn-light" title="Download" id="download-btn" data-vvveb-action="download" data-v-download="index.html">
      <i class="la la-download"></i>
      </button>
   </div>
   <div class="btn-group me-3 float-end" role="group">
      <button class="btn btn-primary btn-icon" title="Export (Ctrl + E)" id="save-btn" data-vvveb-action="saveAjax" data-vvveb-url="<?php echo e(route('public.editor.store', $page->id)); ?>" data-v-vvveb-shortcut="ctrl+e">
      <i class="la la-save"></i> <span data-v-gettext>Save page</span>
      </button>
	  <?php if($type == "post"): ?>
		   <a  href="<?php echo e(route('blog.post.list')); ?>" style="margin-left:3px;"class="btn btn-primary btn-icon" id="back-btn">
			  <i class="la la-arrow-left"></i> <span>Back</span>
		  </a>
	  <?php else: ?>
		  <a  href="<?php echo e(route('cms.list')); ?>" style="margin-left:3px;"class="btn btn-primary btn-icon" id="back-btn">
			  <i class="la la-arrow-left"></i> <span>Back</span>
		  </a>
	  <?php endif; ?>
   </div>
   <div class="btn-group float-end me-3 responsive-btns" role="group">
      <button id="mobile-view" data-view="mobile" class="btn btn-light"  title="Mobile view" data-vvveb-action="viewport">
      <i class="la la-mobile"></i>
      </button>
      <button id="tablet-view"  data-view="tablet" class="btn btn-light"  title="Tablet view" data-vvveb-action="viewport">
      <i class="la la-tablet"></i>
      </button>
      <button id="desktop-view"  data-view="" class="btn btn-light"  title="Desktop view" data-vvveb-action="viewport">
      <i class="la la-laptop"></i>
      </button>
   </div>
</div><?php /**PATH C:\xampp\htdocs\listingpix_backend\resources\views/admin/editor/top/index.blade.php ENDPATH**/ ?>
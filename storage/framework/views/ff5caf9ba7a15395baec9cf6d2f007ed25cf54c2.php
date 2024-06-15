<!-- export html modal-->
<div class="modal fade" id="textarea-modal" tabindex="-1" role="dialog" aria-labelledby="textarea-modal" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <p class="modal-title text-primary"><i class="la la-lg la-save"></i> Export html</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
            </button>
         </div>
         <div class="modal-body">
            <textarea rows="25" cols="150" class="form-control"></textarea>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><i class="la la-times"></i> Close</button>
         </div>
      </div>
   </div>
</div>
<!-- message modal-->
<div class="modal fade" id="message-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <p class="modal-title text-primary"><i class="la la-lg la-comment"></i> Information</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
            </button>
         </div>
         <div class="modal-body" style="font-size: 15px; font-weight:400;">
            <p>Page was successfully saved!.</p>
         </div>
         <div class="modal-footer">
            <!-- <button type="button" class="btn btn-primary">Ok</button> -->
            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><i class="la la-times"></i> Close</button>
         </div>
      </div>
   </div>
</div>
<!-- new page modal-->
<div class="modal fade" id="new-page-modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form action="save.php">
         <div class="modal-content">
            <div class="modal-header">
               <p class="modal-title text-primary"><i class="la la-lg la-file"></i> New page</p>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
               </button>
            </div>
            <div class="modal-body text">
               <div class="mb-3 row" data-key="type">
                  <label class="col-sm-3 form-label">
                  Template 
                  <abbr class="badge badge-pill badge-secondary" title="This template will be used as a start">?</abbr> 
                  </label>      
                  <div class="col-sm-9 input">
                     <div>
                        <select class="form-select" name="startTemplateUrl">
                           <option value="new-page-blank-template.html">Blank Template</option>
                           <option value="demo/narrow-jumbotron/index.html">Narrow jumbotron</option>
                           <option value="demo/album/index.html">Album</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3 row" data-key="href">
                  <label class="col-sm-3 form-label">Page name</label>      
                  <div class="col-sm-9 input">
                     <div>   
                        <input name="title" type="text" value="My page" class="form-control" placeholder="My page" required>  
                     </div>
                  </div>
               </div>
               <div class="mb-3 row" data-key="href">
                  <label class="col-sm-3 form-label">File name</label>      
                  <div class="col-sm-9 input">
                     <div>   
                        <input name="file" type="text" value="my-page.html" class="form-control" placeholder="my-page.html" required>  
                     </div>
                  </div>
               </div>
               <div class="mb-3 row" data-key="href">
                  <label class="col-sm-3 form-label">Folder</label>      
                  <div class="col-sm-9 input">
                     <div>   
                        <input name="folder" type="text" value="my-pages" class="form-control" placeholder="/" required>  
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button class="btn btn-primary btn-lg" type="submit"><i class="la la-check"></i> Create page</button>
               <button class="btn btn-secondary btn-lg" type="reset" data-bs-dismiss="modal"><i class="la la-times"></i> Cancel</button>
            </div>
         </div>
      </form>
   </div>
</div><?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/admin/editor/editorModel.blade.php ENDPATH**/ ?>
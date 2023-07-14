<div class="wraper container-fluid">
            <div class="page-title">
               <h3 class="title"> Product's</h3>
            </div>
            <div class="row">
               
               <div class="col-md-12">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <form class="form-horizontal" method="post" action="submit_post" id="frmData" name="frmData" 												enctype="multipart/form-data">
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Title</label>
                              <div class="col-sm-9">
                                 <input type="textbox" class="form-control" name="title" id="title" placeholder="Enter Title" value="">
								 <span id="title_error" class="field_error"></span>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Category</label>
								<div class="col-sm-9">
									 
									 <span id="category_error" class="field_error"></span>
								</div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Image</label>
                              <div class="col-sm-9">
                                 <input type="file" class="form-control" name="image" id="image" placeholder="Select Image">
								 <span id="image_error" class="field_error"></span>
                              </div>
                           </div>
                           
						   <div class="form-group">
                              <label class="col-sm-3 control-label">Description</label>
                              <div class="col-sm-9">
                                  <textarea class="form-control" name="desc" id="desc" rows="5" cols="10"></textarea>
								  <span id="desc_error" class="field_error"></span>
                              </div>
                           </div>
                           
                            
                           <div class="form-group m-b-0">
                              <div class="col-sm-offset-3 col-sm-9">
                                 <button type="button" onclick="valid_post()" class="btn btn-info">Submit</button>
                              </div>
                           </div>
						   <input type="hidden" id="id" name="id" value="">
                        </form>
                     </div>
                     <!-- panel-body -->
                  </div>
                  <!-- panel -->
               </div>
               <!-- col -->
            </div>
            <!-- End row -->
         </div>
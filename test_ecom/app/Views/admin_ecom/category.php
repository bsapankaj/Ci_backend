<div class="wraper container-fluid">
            <div class="page-title">
				<div class="row">
					<div class="col-md-10">
						<h3 class="title">Category's</h3>
					</div>
					<div class="col-md-2">
						<h3 class="title"><a href="add_category"/>Add Category's</a></h3>
					</div>
				</div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th width="15%">#</th>
                                          <th width="20%">ID</th>
                                          <th width="58%">Category's</th>
                                          <th width="15%"></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
										if(isset($data['0'])){
										$i=1;
										foreach($data as $list){
									   ?>
                                       <tr>
                                          <td><?php echo $i?></td>
                                          <td><?php echo $list->category_name?></td>
                                          <td><?php echo $list->added_on?></td>
										  <td>
											<a href="add_category/<?php echo $list->id?>">Edit</a>/
											<?php
											if($list->status==1){
												?>
												<a href="status/0/category/<?php echo $list->id?>">Active</a>/											
												<?php
											}else{
											?>
											<a href="status/1/category/<?php echo $list->id?>">Deactive</a>/
											<?php
											}
											?>
											<a href="status/-1/category/<?php echo $list->id?>">Delete</a>
										  </td>
                                       </tr>
										<?php 
										$i++;
										} } else{ ?>
										<tr>
                                          <td colspan="4">Data not found</td>
                                       </tr>
										<?php } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
         
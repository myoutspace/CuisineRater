<div class="container">
      <div class="row">
         <div class="col-md-6">
         <div class="panel with-nav-tabs panel-info">
			<div class="panel-body" style="border-color:transparent">
               <div class="tab-content">
                  <div id="rate_restaurant" class="tab-pane fade in active register">
                     <div class="container-fluid">
					 <form id="rateBoxForm" name="formID" method="post" action="" role="form">
                        <div class="row">    
                               <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">											 <label style="color:black; font-size:15px">Food</label>										
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-cutlery"></span>
                                             </div>
												<input style="margin-left:10px" id="food" name="food" method = "post" type="number" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs" data-show-clear="false" data-show-caption="false" required/>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								 
								 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
									   <label style="color:black; font-size:15px">Price</label>
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="fa fa-usd"></span>
                                             </div>
											<input style="margin-left:10px" id="price" name="price" method = "post" type="number" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs" data-show-clear="false" data-show-caption="false" required/>
											</div>
                                       </div>
                                    </div>
                                 </div>
								 
								 
								 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
									   <label style="color:black; font-size:15px">Staff</label>
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="fa fa-users"></span>
                                             </div>
											<input style="margin-left:10px" id="staff" name="staff" method = "post" type="number" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs" data-show-clear="false" data-show-caption="false" required/>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								 
								 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
									   <label style="color:black; font-size:15px">Mood</label>
                                          <div class="input-group">
												<div class="input-group-addon iga1">
                                                <span style="font-size:18px" class="fa fa-smile-o"></span>
												</div>
												<input style="margin-left:10px" id="mood" name = "mood" method="post" type="number" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs" data-show-clear="false" data-show-caption="false" required/>	
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								 
								 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
									   <label style="color:black; font-size:15px">Comments</label>
                                          <div class="input-group">

										  <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-comment"></span>
                                          </div>
											<textarea method="post" name="comments" id="comments" rows="5" placeholder="Comments"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" style="border-radius:10px" class="btn col-sm-12 button burgundy solid"><strong>Rate Restaurant</strong></button>
                                 </div>
                              </div>							  			
							</div>
						</form>	
                     </div> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> 

   
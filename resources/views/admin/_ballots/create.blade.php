@extends('admin.list.list')

@section('list-title')
    Nuevo Registro
@stop

@section('buttons')
    <a href="#" id="btn-cancelar" class="btn btn-effect-ripple btn-important" >Cancelar</a>
@stop

@section('list-content')
    @parent
  

            <div class="wizard-container"> 
                <form action="" method="">
                <div class="card wizard-card ct-wizard-orange" id="wizard">
                
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                      <div class="wizard-header">
                          <h3>
                             <b>BUILD</b> YOUR PROFILE <br>
                             <small>This information will let us know more about you.</small>
                          </h3>
                      </div>

                      <ul>
                            <li><a href="#about" data-toggle="tab">About</a></li>
                            <li><a href="#account" data-toggle="tab">Account</a></li>
                            <li><a href="#address" data-toggle="tab">Address</a></li>
                      </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture">
                                          </div>
                                          <h6>Choose Picture</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control" placeholder="andrew@creative-tim.com">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> What are you doing? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio">
                                                <input type="radio" name="job" value="Design">
                                                <div class="icon">
                                                    <i class="fa fa-pencil"></i>
                                                </div>
                                                <h6>Design</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio">
                                                <input type="radio" name="job" value="Code">
                                                <div class="icon">
                                                    <i class="fa fa-terminal"></i>
                                                </div>
                                                <h6>Code</h6>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice"  data-toggle="wizard-radio">
                                                <input type="radio" name="job" value="Develop">
                                                <div class="icon">
                                                    <i class="fa fa-laptop"></i>
                                                </div>
                                                <h6>Develop</h6>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <labe>Street Name</label>
                                            <input type="text" class="form-control" placeholder="5h Avenue">
                                          </div>
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group">
                                            <label>Street Number</label>
                                            <input type="text" class="form-control" placeholder="242">
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="New York...">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                              <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />
        
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>  
                </div>
                </form>
            </div> 


<script>
	$("#btn-cancelar").click(function(e){
		$("#page").load("ballots");     
	});

</script>


{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}


{!! Html::script('wizar/js/jquery.bootstrap.wizard.js') !!}
{!! Html::script('wizar/js/wizard.js') !!}


@stop
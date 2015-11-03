<!-- BEGIN MAIN CONTENT -->
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Report</h3>
        </div>

        <!-- Commented by javed 10 april
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">


                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="m-b-20"><strong>Stage</strong></p>
                                            <select class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>Data Collection</option>
                                                <option>Data Validator</option>
                                                <option>VRM Integrator</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="m-b-20"><strong>Role</strong></p>
                                            <select class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>All</option>
                                                <option>Data Collector</option>
                                                <option>Data Validator</option>
                                                <option>VRM Integrator</option>
                                                <option>RS Data Interpreter</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="m-b-20"><strong>User</strong></p>
                                            <select class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>All</option>
                                                <option>Rohit</option>
                                                <option>Javed</option>
                                            </select>
                                        </div>

                                    </div>

                            
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>District</strong></p>
                                            <select class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>Jalaun</option>
                                                <option>Datia</option>
                                                <option>Jhansi</option>
                                                <option>Hamirpur</option>
                                                <option>Mahoba</option>
                                                <option>Banda</option>
                                                <option>Chitrakoot</option>
                                                <option>Tikamgarh</option>
                                                <option>Chhatarpur</option>
                                                <option>Lalitpur</option>
                                                <option>Panna</option>
                                                <option>Sagar</option>
                                                <option>Damoh</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Tehsil</strong></p>
                                            <select class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>Jalaun</option>
                                                <option>Kalpi</option>
                                                <option>Konch</option>
                                                <option>Madhogarh</option>
                                                <option>Orai</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>village</strong></p>
                                            <select class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>Jalaun</option>
                                                <option>Abudullapur Mustakil</option>
                                                <option>Aidalpur</option>
                                                <option>Baraila</option>
                                                <option>Chhani Ahir</option>
                                                <option>Daulatpur</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <p class="m-b-20"><strong>Panchayat</strong></p>
                                            <select class="form-control" data-style="input-lg btn-default">
                                                <option>Select</option>
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                
                        </div>
                    </div>
                </div>
            </div> -->


            <!-- start table -->
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-red">
                            <h3 class="panel-title"><strong>Attributes To Be collector </strong></h3>
                        </div>
                        <div class="panel-body">

                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Search</button>
                            </form>

                            <!-- <div class="dropdown pull-right">
                                <button type="button" class="btn btn-default">Map</button>
                                <button type="button" class="btn btn-default">Graph</button>
                                <button type="button" class="btn btn-default">Table</button>
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Download
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:;">xls</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:;">pdf</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:;">image</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:;">kml</a></li>
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:;">shp</a></li>
                                </ul>
                              </div> -->
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                               <!-- <th>Date</th>-->
                                                <th>User Name</th>
                                              <!--  <th>Action</th>
                                                <th>Map</th>
                                                <th>Graph</th>
                                                <th>Table</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $i=''; foreach ($data_report as $report){ $i++; ?>
                                            <tr>
                                                <!--<td><?=$report->date?></td>-->
                                                <td><?=$report->report_name?></td>
                                                <td><a href="<?=base_url();?>validator/view_report/<?=$report->add_report_id?>" ><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-file-o"></i> View</button></a></td>
                                                <td><button type="button" class="btn btn-sm btn-dark"><i class="fa fa-map-marker"></i> Map</button></td>
                                                <td><button type="button" class="btn btn-sm btn-dark"><i class="fa fa-share-square-o"></i> Graph</button></td>
                                               <!-- <td><button type="button" class="btn btn-sm btn-dark"><i class="fa fa-table"></i> Table</button></td>-->
                                                <td>
                                                    <select class="form-control select" data-style="btn-primary btn-sm">
                                                    <option>Download</option>
                                                    <option>xls</option>
                                                    <option>pdf</option>
                                                    <option>image</option>
                                                    <option>kml</option>
                                                    <option>shp</option>
                                                    </select>
                                                </td>
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
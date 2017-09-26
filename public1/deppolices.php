<?php include'includes/header.php'?>

        <div class="col-md-3" style="padding-top:25px;">
            <div class="list-group">
                <a href="tqm" class="list-group-item active ">Quality & Safety </a>
                <a href="procedur&policy" class="list-group-item list-group-item-action">Policies & procedures</a>
                <a href="clinicalprocedureguideline" class="list-group-item list-group-item-action">Clinical Procedures & Guidelines</a>
                <a href="tqmbook" class="list-group-item list-group-item-action">Books</a>
                <a href="tqmpresentation" class="list-group-item list-group-item-action">Orientations</a>
                <a href="tqmvedio" class="list-group-item list-group-item-action">videos</a>
            </div>
        </div>
        <div class="col-md-9" style="padding-top:25px;">
            <div class="row">
                <div class="col-md-10" >
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <a href="procedur&policy" class="btn btn-primary">Introduction</a>
                        </div>
                        <div class="btn-group" role="group">
                           <a href="cebahichapters" class="btn btn-primary">Genral Policies</a>
                        </div>
                         <div class="btn-group" role="group">
                           <a href="deppolices" class="btn btn-primary">Departmental Policies</a>
                       </div>

                    </div>
                </div>

                <br> <br> <br>



                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"  >
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    chapter ###### ( chapter code)
                                </a>
                                <br>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body" >
                                <span class="tab-space">Effective date: 1/1/2017</span>  <span class="tab-space"> Review date 1/9/2017</span>
                                <span class="tab-space">
                                    <input type="search" id="myInput" onkeyup="search('myInput','myUL','myli')" placeholder="Search for names.." title="Type in a name">                                        </span>
                                <br><br>
                                <ul id="myUL" >
                                    <div class="row">

                             <div class="col-md-10">
                            <li class='myli'><a href="files/doc/test.pdf" class="list-group-item ">ll <span class="badge">New</span></a></li>
                                </div>
                                <div class="col-md-1">
                                 <a type="button" class="btn btn-xs btn-default" href="files/doc/test.pdf" download >
                                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                    </a>
                                </div>

                            </div>


                          <div class="row">

                             <div class="col-md-10">
                            <li class='myli'><a href="files/doc/test.pdf" class="list-group-item ">Policy####</a></li>
                                </div>
                                <div class="col-md-1">
                                 <a type="button" class="btn btn-xs btn-default" href="files/doc/test.pdf" download >
                                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                    </a>
                                </div>

                            </div>



                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTow" aria-expanded="false" aria-controls="collapseTow">
                                    chapter ###### ( chapter code)
                                </a>
                                <br>
                            </h4>
                        </div>
                        <div id="collapseTow" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTow">
                            <div class="panel-body" >
                                <span class="tab-space">Effective date: 1/1/2017</span>  <span class="tab-space"> Review date 1/9/2017</span>
                                <span class="tab-space">
                                    <input type="search" id="myInput2" onkeyup="search('myInput2','myUL2','myli')" placeholder="Search for names.." title="Type in a name">                                        </span>
                                <br><br>
                                <ul id="myUL2" >
                                    <div class="row">

                             <div class="col-md-10">
                            <li class='myli'><a href="files/doc/test.pdf" class="list-group-item ">ll <span class="badge">New</span></a></li>
                                </div>
                                <div class="col-md-1">
                                 <a type="button" class="btn btn-xs btn-default" href="files/doc/test.pdf" download >
                                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                    </a>
                                </div>

                            </div>


                          <div class="row">

                             <div class="col-md-10">
                            <li class='myli'><a href="files/doc/test.pdf" class="list-group-item ">Policy####</a></li>
                                </div>
                                <div class="col-md-1">
                                 <a type="button" class="btn btn-xs btn-default" href="files/doc/test.pdf" download >
                                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                    </a>
                                </div>

                            </div>


                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-md-12">
            <br><br>
        </div>

        <?php include"includes/footer.php" ?>
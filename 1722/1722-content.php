<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
	<div class="type-1824">
		<div class="container">
    		<div class="row kc">
        		<div class="col-md-4 col-sm-6 col-xs-12">
            		<div class="panel panel-primary">
                		<div class="panel-heading">
                    		<h3 class="panel-title">Bronze</h3>
            			</div>
                		<div class="panel-body">
                    		<div class="the-price">
                        		<h1>$10<span class="subscript">/mo</span></h1>
                        		<small>1 month FREE trial</small>
                    		</div>
                    		<table class="table">
                        		<tr>
		                            <td>
		                                1 Account
		                            </td>
                        		</tr>

		                        <tr class="active">
		                            <td>
		                                1 Project
		                            </td>
		                        </tr>

		                        <tr>
		                            <td>
		                                100K API Access
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                100MB Storage
		                            </td>
		                        </tr>

		                        <tr>
		                            <td>
		                                Custom Cloud Services
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                Weekly Reports
		                            </td>
		                        </tr>
                    		</table>
                		</div>

                		<div class="panel-footer">
                    		<a href="#" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial
                		</div>
            		</div>
       			</div>

        		<div class="col-md-4 col-sm-6 col-xs-12">
            		<div class="panel panel-success">
		                <div class="cnrflash">
		                    <div class="cnrflash-inner">
		                        <span class="cnrflash-label">MOST
		                            <br>
		                            POPULAR</span>
		                    </div>
		                </div>	

		                <div class="panel-heading">
		                    <h3 class="panel-title">
		                        Silver</h3>
		                </div>

                		<div class="panel-body">
                    		<div class="the-price">
                        		<h1>$20<span class="subscript">/mo</span></h1>
                        		<small>1 month FREE trial</small>
                    		</div>

		                    <table class="table">
		                        <tr>
		                            <td>
		                                2 Account
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                5 Project
		                            </td>
		                        </tr>

		                        <tr>
		                            <td>
		                                100K API Access
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                200MB Storage
		                            </td>
		                        </tr>

		                        <tr>
		                            <td>
		                                Custom Cloud Services
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                Weekly Reports
		                            </td>
		                        </tr>

		                    </table>
                		</div>

                		<div class="panel-footer">
                    		<a href="http://www.jquery2dotnet.com" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial
                		</div>
            		</div>
        		</div>

        		<div class="col-md-4 col-sm-6 col-xs-12">
            		<div class="panel panel-info">
                		<div class="panel-heading">
                    		<h3 class="panel-title">Gold</h3>
                		</div>

            		<div class="panel-body">
                    	<div class="the-price">
                        	<h1>$35<span class="subscript">/mo</span></h1>
                        	<small>1 month FREE trial</small>
                    	</div>

	                    <table class="table">
	                        <tr>
	                            <td>
	                                5 Account
	                            </td>
	                        </tr>

	                        <tr class="active">
	                            <td>
	                                20 Project
	                            </td>
	                        </tr>

	                        <tr>
	                            <td>
	                                300K API Access
	                            </td>
	                        </tr>

	                        <tr class="active">
	                            <td>
	                                500MB Storage
	                            </td>
	                        </tr>

	                        <tr>
	                            <td>
	                                Custom Cloud Services
	                            </td>
	                        </tr>

	                        <tr class="active">
	                            <td>
	                                Weekly Reports
	                            </td>
	                        </tr>
	                    </table>
                	</div>

                	<div class="panel-footer">
                    	<a href="#" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial</div>
            		</div>
        		</div>
    		</div>
		</div>
	</div>
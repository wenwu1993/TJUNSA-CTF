<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1">

		<title>exercise</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="/Public/Article/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="/Public/Article/css/custom.css" rel="stylesheet">
	
	</head>
	<body>

		<div style="width:100%;">
			<div style="height:100%;width:250px;position:fixed;background-color: #e7e7e7;font-size: 18px;">

					<div align="center" style="padding:20px;">
			            <a href="/" style="font-size:20px;text-decoration:none;color:"><span class="glyphicon glyphicon-home"></span> Hello <?php echo session("name"); ?></a>
			        </div>
			        <div style="padding-left:10px;">
			        	<ul class="nav nav-stacked">
							
		                    <li><a href="/register"><span class="glyphicon glyphicon-user"></span> register</a></li>
		                    <li>
			                    <?php
 if(session("name")!==NULL){ echo '<a href="/logout"><a href="/register"><span class="glyphicon glyphicon-log-out"></span> logout</a>'; } else{ echo '<a href="/login"><a href="/register"><span class="glyphicon glyphicon-log-in"></span> login</a>'; } ?>
							</li>
							<hr>
							<li><a href="/article"><span class="glyphicon glyphicon-list-alt"></span> article</a></li>
							<li><a href="/exercise"><span class="glyphicon glyphicon-list-alt"></span> exercise</a></li>
						</ul>
			        </div>
			</div>

			<div style="position:relative;margin-left:260px">
				<div class="col-md-8">    		   
					
    <h1 class="page-header">
        TJUNSA
        <small>exercise</small>
    </h1>
    	<div style='background: #f6f6f6;padding:10px;width:1050px auto;height:600px auto;'>
    	

    		<?php
 if ($_GET["page"]!==null) { $page=$_GET["page"]; } else $page=1; for ($i=5*($page-1); $list[$i]['id']!==null&&$i<(5*$page) ; $i++) { echo '<li style="margin:10px;padding:2%;margin-bottom:2%;background: white;list-style: none;">
							<a style="color:#666666;font-size:150%;text-decoration:none;" href="/question/'.$list[$i]['id'].'">题目：'.$list[$i]['name'].'</a></br></br>
							<span style="color:#888888;paddiing:10px;margin-right:10%">题目来源：'.$list[$i]['source'].'</span>
							<span style="color:#888888;paddiing:10px;margin-right:10%">难度：'.$list[$i]['difficult'].' </span>
							<span style="color:#888888;paddiing:10px;margin-right:10%">已解答数：'.$list[$i]['didtimes'].' </span>
							<span style="color:#888888;paddiing:10px;margin-right:10%">类型：'.$list[$i]['category'].'</span>
						  </li>'; } echo '<nav style="text-align:center">
					  <ul class="pagination pagination-lg">'; if ($page==='1') { echo '<li><a herf="/exercise/'.$page.'">&laquo;</a></li>'; } else echo '<li><a href="/exercise/'.($page-1).'">&laquo;</a></li>'; for ($i=1; $i <=ceil(count($list,0)/5) ; $i++) { echo '<li><a href="/exercise/'.$i.'">'.$i.'</a></li>'; } if ($page==ceil(count($list,0)/5)) { echo '<li><a href="/exercise/'.$page.'">&raquo;</a></li>'; } else echo '<li><a href="/exercise/'.($page+1).'">&raquo;</a></li>'; echo ' </ul>	
						</nav>'; ?>		  
			
				
		</div>

			    </div>
			    <div class="col-md-4" style="padding-top:70px;">

	                <!-- Blog Search Well -->
	                <div class="well">
	                    <h4>Question Search</h4>
	                    <div class="input-group">
	                        <input type="text" class="form-control">
	                        <span class="input-group-btn">
	                            <button class="btn btn-default" type="button" name="search" >
	                                <span class="glyphicon glyphicon-search"></span>
	                        </button>
	                        </span>
	                    </div>
	                    <!-- /.input-group -->
	                </div>

	                <!-- Blog Categories Well -->
	                <div class="well">
	                    <h4>Hot Question Categories</h4>
	                    <div class="row">
	                        <div class="col-lg-6">
	                            <ul class="list-unstyled">
	                                <li><a href="#">Question Name</a>
	                                </li>
	                                <li><a href="#">Question Name</a>
	                                </li>
	                                <li><a href="#">Question Name</a>
	                                </li>
	                                <li><a href="#">Question Name</a>
	                                </li>
	                            </ul>
	                        </div>
	                        <!-- /.col-lg-6 -->
	                        <div class="col-lg-6">
	                            <ul class="list-unstyled">
	                                <li><a href="#">Question Name</a>
	                                </li>
	                                <li><a href="#">Question Name</a>
	                                </li>
	                                <li><a href="#">Question Name</a>
	                                </li>
	                                <li><a href="#">Question Name</a>
	                                </li>
	                            </ul>
	                        </div>
	                        <!-- /.col-lg-6 -->
	                    </div>
	                    <!-- /.row -->
	                </div>

	                <!-- Side Widget Well -->
	                <div class="well">
	                    <h4>Side Widget Well</h4>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
	                </div>

	            </div>
			</div>
		</div>


		<!-- jQuery -->
	    <script src="/Public/Article/js/jquery.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="/Public/Article/js/bootstrap.min.js"></script>
	</body>
</html>
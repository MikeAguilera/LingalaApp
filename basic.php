<!--Header Begin-->
<?php 
$pageTitle = "Basic Quiz";
include 'inc/header.php'; 
?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Basic <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Basic Lingala
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1 class="quizName">Basics Quiz</h1>

        <div class="quizArea">
            <div class="quizHeader">
                <!-- where the quiz main copy goes -->

                <a class="button startQuiz btn btn-success" href="#">Get Started!</a>
            </div>

            <!-- where the quiz gets built -->
        </div>

        <div class="quizResults">
            <h3 class="quizScore">You Scored: <span><!-- where the quiz score goes --></span></h3>

            <h3 class="quizLevel"><strong>Ranking:</strong> <span><!-- where the quiz ranking level goes --></span></h3>

            <div class="quizResultsCopy">
                <!-- where the quiz result copy goes -->
            </div>
       </div>
    </div>

    <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-book fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Basics 2</div>
                                        <div>   </div>
                                    </div>
                                </div>
                            </div>
                            <a href="basic2.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-comment fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Verbs</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="verbs.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Phrases</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="phrase.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-comment-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Intermediate</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="Intermediate.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
</div>
</div>

<!--Footer Begin-->
<?php
include 'inc/footer.php'; 
?>
 <!--Footer End-->   
 <script src="js/config/slickQuiz-config.js"></script>    
    </body>


</html>

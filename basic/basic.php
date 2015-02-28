<!--Header Begin-->
<?php 
require_once('../inc/config.php');
$pageTitle = "Basic Quiz 1";    
include(ROOT_PATH . 'inc/header.php');?>
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
                                <i class="fa fa-dashboard"></i> Basic Lingala 1
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

        <div class="jumbotron">
                    
                 
            <h1 class="quizName">Basics Quiz 1</h1>

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
            <div class="container">
                <div class="content">
                    <div class="panel panel-primary">
                          <!-- Default panel contents -->
                          <div class="panel-heading">Lingala Basics</div>
                          <div class="panel-body">
                            <p>In the four column chart given below, column I gives the orthography except for /e/ and /0/, column II
                            II gives the phonemes, column III gives the phonetlc symbols, and column IV is an approxlmat1on of the sound using American 
                            English and French sounds for comparlson.</p>
                          </div>

                          <!-- Table -->
                          <table class="table">
                                <tr>
                                    <th>
                                        Symbol
                                    </th>
                                    <th>
                                        Phoneme
                                    </th>
                                    <th>
                                        Phonetics
                                    </th>
                                    <th>
                                        Approximation
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        p
                                    </td>
                                    <td>
                                       /p/
                                    </td>
                                    <td>
                                        [p]
                                    </td>
                                    <td>
                                        <strong>p</strong>in
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                </div>
            </div>
        </div>


    </div>
</div>


<!--Footer Begin-->

<?php include(ROOT_PATH . 'inc/footer.php') ?>

 <!--Footer End-->   
<script src="../js/Config/basic/basicQuiz-config.js"></script>

    </body>


</html>

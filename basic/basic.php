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
   <div class="content" id="gone">
            <div class="panel panel-default">
                            <!-- Default panel contents -->
                                <div class="panel-heading">Subject Markers </div>
                                <div class="panel-body"> Below are the list of English Subject Markers followed by their corresponding Lingala Subject Markers.
                                </div>
                                  <!-- Table -->
                                  <table class="table">
                                        <tr>
                                            <th>
                                                English
                                            </th>
                                            <th>
                                                Lingala
                                            </th>
                                            <th>
                                                Example - To Drink : Komela
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                I
                                            </td>
                                            <td>
                                               Na
                                            </td>
                                            <th>
                                                I drink : <strong class='red';>Na</strong>zo Mela
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (singular)
                                            </td>
                                            <td>
                                               O
                                            </td>
                                            <th>
                                                You drink : <strong class='red';>O</strong>zo Mela
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                He/She
                                            </td>
                                            <td>
                                               A
                                            </td>
                                            <th>
                                                He/She drinks : <strong class='red';>A</strong>zo Mela
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                It
                                            </td>
                                            <td>
                                               E
                                            </td>
                                            <th>
                                                It drinks : <strong class='red';>E</strong>zo Mela
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                We
                                            </td>
                                            <td>
                                               To
                                            </td>
                                            <th>
                                                We drink : <strong class='red';>To</strong>zo Mela
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (plural)
                                            </td>
                                            <td>
                                               Bo
                                            </td>
                                            <th>
                                                You all drink : <strong class='red';>Bo</strong>zo Mela
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                They
                                            </td>
                                            <td>
                                               Ba
                                            </td>
                                            <th>
                                                They drink : <strong class='red';>Ba</strong>zo Mela
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>

            

                    <a class="button startQuiz btn btn-success" href="#">Take Quiz</a>
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
        </div>

    </div>
</div>


<!--Footer Begin-->

<?php include(ROOT_PATH . 'inc/footer.php') ?>

 <!--Footer End-->   
<script src="../js/Config/basic/basicQuiz-config.js"></script>
    </body>


</html>

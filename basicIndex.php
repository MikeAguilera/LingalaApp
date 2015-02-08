<!--Header Begin-->
<?php 
$pageTitle = "Basic Quiz";
$quizTitle1 = "Quiz 1";
$quizTitle2 = "Quiz 2";
$quizTitle3 = "Quiz 3";
$quizTitle4 = "Quiz 4";
$quizIcon1 = "book";
$quizIcon2 = "comment";
$quizIcon3 = "comments";
$quizIcon4 = "comment-o";
$quizHref1 = "basic.php";
$quizHref2 = "basic2.php";
$quizHref3 = "basic3.php";
$quizHref4 = "basic4.php";
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
                
             
        <h1>Basic Quizes</h1>
        <p>This is a great place to begin!</p>  
        
    </div>

    <!--Quiz Body Begin-->
    <?php
    include 'inc/quizbody.php'; 
    ?>
    <!--Quiz Body End-->   
    
</div>
</div>

<!--Footer Begin-->
<?php
include 'inc/footer.php'; 
?>
 <!--Footer End-->   
 <script src="js/config/basicQuiz-config.js"></script>    
    </body>


</html>

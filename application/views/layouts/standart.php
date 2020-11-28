<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("containers/head"); ?>
    </head>

    <body>
        <header>
            
            <div class="topnav" id="myTopnav">
                    <a href="#home" class="active">Home</a>
                    <a href="http://localhost/Bil372_Grup4_Etunet/index.php/Courses">Courses</a>
                    <a href="#contact">Homework</a>
                    <a href="#about">Resources</a>
                    <a href="<?php echo MAIN; ?>Enterence/out">Out</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                    </a>
    </div>
        </header>

        <div id="wrapper">
            <div id="navigation">
                <div id="interactors" style="margin-top: 9px;">
                    <!-- buttons and search -->
                    <a href="#" class="btn">New question form</a>
                    <input type="text" name="search" id="search"
                        placeholder="Search questions..." />
                </div>

                <div id="left-pane">
                    <!-- add questions to this container -->
                </div>
            </div>

            <div id="right-pane">
                <?php $this->load->view("subviews/".$subview); ?>
            </div>
        </div>

        <?php $this->load->view("containers/foot"); ?>
        
    </body>
</html>

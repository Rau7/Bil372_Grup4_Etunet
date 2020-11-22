<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("containers/head"); ?>
    </head>

    <body>
        <header>
            <h1><a href="/">Callback Piazza</a></h1>
        </header>

        <div id="wrapper">
            <div id="navigation">
                <div id="interactors">
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

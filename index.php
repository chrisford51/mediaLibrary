    <?php 
    
    //includes sections of info from data.php and functions.php
    include("inc/data.php");
    include("inc/functions.php");
    
    //sets variables used on page, $section isn't used on this page thus the null val
    $pageTitle = "Personal Media Library";
    $section = null;
    
    //includes the header info
    include("inc/header.php"); ?>

		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>
                    
					<ul class="items">
	                    <?php 
	                    $random = array_rand($catalog,4);          // creates a random array of 4 items from $catalog
	                    foreach($random as $id) {       //foreach loop to show all catalog items.
                            echo get_item_html($id, $catalog[$id]);
                        }
                        ?>
					</ul>

			</div>

		</div>


<?php include("inc/footer.php"); //includes footer info ?>
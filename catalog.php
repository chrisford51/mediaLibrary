<?php 

include("inc/data.php");
include("inc/functions.php");

//Set page title var
$pageTitle = "Full Catalog";
$section = null;

//check to see if a category is set, if not run conditional
if (isset($_GET["cat"])) {

    if ($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    } else if ($_GET["cat"] == "movies") {
        $pageTitle = "Movies"; 
        $section = "movies";
    } else if ($_GET["cat"] == "music") {
        $pageTitle = "Music";
        $section = "music";
    }
}

//includes header.php so header is shown. header cats detailed here. 
include("inc/header.php"); ?>

<!--- Echo the page title found above as the H1 -->
    <div class="section catalog page">
        
        <div class="wrapper">
            <h1><?php 
            if  ($section != null) {
                echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
            }
            echo $pageTitle?></h1>
            <!--- replaces the multiple LI tags that were in the <ul> with a foreach loop that displays one item for each element in the array-->
            
            <ul class="items">
                <?php 
                    $categories = array_category($catalog,$section);          // creates a random array of 4 items from $catalog
                    foreach ($categories as $id) {                                   //foreach loop to show all catalog items.
                        echo get_item_html($id, $catalog[$id]);
                        }
                ?>

            </ul>
        </div>
    </div>
    
<!--- Include footer.php where all footer links and info are detailed -->
<?php include("inc/footer.php"); ?>
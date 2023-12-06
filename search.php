

<!DOCTYPE html>
<html>

<?php include_once("components/head.php");?>

<body>

      <style>

         h3 {
         margin:0;
         color:blue;
         }

         a {
         text-decoration:none;
         color:#1a0dab;
         }

         a:hover {
         text-decoration:underline;
         }

         div {
         font-size:14px;
         color:#006621;
         }
        
         #search_list {
         background-color: #f5f5f5;
         text-align: left;
         display: flex;
         flex-direction: column;
         justify-content: space-evenly;
         align-items: center;
            }
        
        .search_item {
                background-color: #fff;
                max-width: 1000px;
                width: 100%;
                margin: 10px 20px;
                padding: 10px 5px;
            }
        
        .pagination {
                display: flex;
                justify-content: center;
                margin-top: 20px;
                padding: 10px 10px;
            }
        
                .page-link {
                    display: block;
                    padding: 5px 10px;
                    margin: 0 5px;
                    background-color: #fff;
                    border: 1px solid #ccc;
                    text-align: center;
                    color: #333;
                    text-decoration: none;
                    cursor: pointer;
                }
        
                .page-link:hover,
                .page-link:focus {
                    background-color: #eee;
                }
        
                .page-link.active {
                    background-color: #333;
                    color: #fff;
                    border-color: #333;
                }


    </style>




  <?php include 'components/header.php';?>

    <div class="banner">

        <div class="opacity_overlay">

            <div class="info">
                <div class="subscribe">
                    <div style="margin-top: -100px;" class="opacity_overlay">

                        <div class="container">

                            <form class="form-subscribe" action="search.php">
                                <div class="input-group">
                                    <input style="color:white;" type="text" class="form-input" name="query"
                                        placeholder="Search here">
                                    <span class="btn-group">
                                        <button class="btn" type="submit">Search</button>
</form>



                                                              </div>

                            </form>

                        </div>
                    </div>
                </div>

               

                <?php



                    $html = "";
                    if (isset($_GET['query'])) {
                        $search_query = $_GET['query'];
                        $search_engine_id = "12df0fc9b39e74ab9";
                        $api_key = "AIzaSyDT9ocVlzkbQx0l-mpMU-zQq3F0wyDvMzc";
                        $start_index = isset($_GET['start_index']) ? $_GET['start_index'] : 1;

                        $url = "https://www.googleapis.com/customsearch/v1?key=" . $api_key . "&cx=" . $search_engine_id . "&q=" . urlencode($search_query) . "&start=" . $start_index;

                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $output = curl_exec($ch);
                        curl_close($ch);

                        $results = json_decode($output, true);

                        if (isset($results['items'])) {

                            $html .= "<div id='search_list'>";
                            $html .= "<h2 style='color:black; text-transform:none;'>Search Results for " . $search_query . "</h2>";

                            $items_per_page = 10;
                            $current_page = floor($start_index / $items_per_page) + 1;
                            $total_pages = ceil($results['searchInformation']['totalResults'] / $items_per_page);
                            $first_page = max(1, $current_page - 3);
                            $last_page = min($total_pages, $current_page + 3);

                            foreach ($results['items'] as $item) {
                                $html .= "<div class='search_item' style='padding: 35px; 35px; 35px; 35px;'>";
                                $html .= "<h3 style='font-size:22px; text-transform:none;'>
                            <a href='" . $item['link'] . "' target='_blank'>" . $item['title'] . "</a>
                        </h3>";
                                $html .= "<div>" . $item['link'] . "</div>";
                                $html .= "<p style='color:black;'>" . htmlspecialchars($item['snippet']) . "</p><br><br>";
                                $html .= "</div>";
                            }

                            if ($total_pages > 1) {
                                $html .= "<div class='pagination'>";

                                if ($current_page > 1) {
                                    $prev_start_index = ($current_page - 2) * $items_per_page + 1;
                                    $html .= "<a href='?query=" . urlencode($search_query) . "&start_index=" . $prev_start_index . "' class='page-link'>
                                Previous
                            </a>";
                                }

                                for ($i = $first_page; $i <= $last_page; $i++) {
                                    $start_index = ($i - 1) * $items_per_page + 1;
                                    $active_class = ($i == $current_page) ? 'active' : '';
                                    $html .= "<a href='?query=" . urlencode($search_query) . "&start_index=" . $start_index . "' class='page-link " . $active_class . "'>
                                " . $i . "
                            </a>";
                                }

                                if ($current_page < $total_pages) {
                                    $next_start_index = $current_page * $items_per_page + 1;
                                    $html .= "<a href='?query=" . urlencode($search_query) . "&start_index=" . $next_start_index . "' class='page-link'>
                                Next
                            </a>";
                                }

                                $html .= "</div>";
                            }

                            $html .= "</div>";
                        } else {
                            $html = "<h2>No results found for '" . $search_query . "'</h2>";
                        }

                        echo $html;
                    }
                
                ?>
              




            </div>


            <div class="secondary_layer">

            </div>

        </div>
    </div>




  <?php include 'components/footer.php';?>

    <div class="copyright-part">
        <p>&copy 2023 <span>SearchSerpent</span> All Rights Reserved</p>
    </div>







    <script type="text/javascript">
        $(document).ready(function () {
            $('.toggle-menu').jPushMenu({
                closeOnClickLink: false
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>

    <script type="text/javascript">
        var terms = ["responsive", "reliable", "relevant"];

        function rotateTerm() {
            var ct = $("#rotate").data("term") || 0;
            $("#rotate").data("term", ct == terms.length - 1 ? 0 : ct + 1).text(terms[ct]).fadeIn()
                .delay(1000).fadeOut(200, rotateTerm);
        }
        $(rotateTerm);
    </script>


    <script type="text/javascript">
        jQuery('.counter-item').appear(function () {
            jQuery('.counter-number').countTo();
            jQuery(this).addClass('funcionando');
            console.log('funcionando');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#clients-slider").carousel({
                interval: 5000 //TIME IN MILLI SECONDS
            });
        });
    </script>


    <script type="text/javascript">
        $(function () {
            $.scrollUp({
                scrollName: 'scrollUp', // Element ID
                topDistance: '300', // Distance from top before showing element (px)
                topSpeed: 600, // Speed back to top (ms)
                animation: 'fade', // Fade, slide, none
                animationInSpeed: 200, // Animation in speed (ms)
                animationOutSpeed: 200, // Animation out speed (ms)
                activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
                scrollImg: true,
            });
        });
    </script>

</body>

</html>
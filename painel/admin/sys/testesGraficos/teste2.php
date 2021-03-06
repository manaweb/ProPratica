<style type="text/css">
/* IN PAGE ANALYTICS */
#page-analtyics {
    clear: left;
}
#page-analtyics .metric {
    background: #fefefe; /* Old browsers */
        background: -moz-linear-gradient(top, #fefefe 0%, #f2f3f2 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fefefe), color-stop(100%,#f2f3f2)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #fefefe 0%,#f2f3f2 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #fefefe 0%,#f2f3f2 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #fefefe 0%,#f2f3f2 100%); /* IE10+ */
        background: linear-gradient(top, #fefefe 0%,#f2f3f2 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefefe', endColorstr='#f2f3f2',GradientType=0 ); /* IE6-9 */
    border: 1px solid #ccc;
    float: left;
    font-size: 12px;
    margin: -4px 0 1em -1px;
    padding: 10px;
    width: 105px;
}
#page-analtyics .metric:hover {
    background: #fff;
    border-bottom-color: #b1b1b1;
}
#page-analtyics .metric .legend {
    background-color: #058DC7;
    border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
    font-size: 0;
    margin-right: 5px;
    padding: 10px 5px 0;
}
#page-analtyics .metric strong {
    font-size: 16px;
    font-weight: bold;
}
#page-analtyics .range {
    color: #686868;
    font-size: 11px;
    margin-bottom: 7px;
    width: 100%;
}
</style>
<?php
require('../gapi.class.php');

/* Define variables */
$ga_email       = 'manawebsuporte@gmail.com';
$ga_password    = 'manaweb001';
$ga_profile_id  = '79572632';
$ga_url         = $_SERVER['REQUEST_URI'];

/* Create a new Google Analytics request and pull the results */
$ga = new gapi($ga_email,$ga_password);
$ga->requestReportData($ga_profile_id, array('date'),array('pageviews'), 'date', 'pagePath == '.$ga_url);    

$results = $ga->getResults();
?>   

<!-- Create an empty div that will be filled using the Google Charts API and the data pulled from Google -->
<div id="chart"></div>

<!-- Include the Google Charts API -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!-- Create a new chart and plot the pageviews for each day -->
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = new google.visualization.DataTable();

    <!-- Create the data table -->
    data.addColumn('string', 'Day');
    data.addColumn('number', 'Pageviews');

    <!-- Fill the chart with the data pulled from Analtyics. Each row matches the order setup by the columns: day then pageviews -->
    data.addRows([
      <?php
      foreach($results as $result) {
          echo '["'.date('M j',strtotime($result->getDate())).'", '.$result->getPageviews().'],';
      }
      ?>
    ]);

    var chart = new google.visualization.AreaChart(document.getElementById('chart'));
    chart.draw(data, {width: 630, height: 180, title: '<?php echo date('M j, Y',strtotime('-30 day')).' - '.date('M j, Y'); ?>',
                      colors:['#058dc7','#e6f4fa'],
                      areaOpacity: 0.1,
                      hAxis: {textPosition: 'in', showTextEvery: 5, slantedText: false, textStyle: { color: '#058dc7', fontSize: 10 } },
                      pointSize: 5,
                      legend: 'none',
                      chartArea:{left:0,top:30,width:"100%",height:"100%"}
    });
  }
</script>

<?php
$ga->requestReportData($ga_profile_id, 'pagePath', array('pageviews', 'uniquePageviews', 'exitRate', 'avgTimeOnPage', 'entranceBounceRate'), null, 'pagePath == '.$ga_url);
$results = $ga->getResults();

function secondMinute($seconds) {
    $minResult = floor($seconds/60);
    if($minResult < 10){$minResult = 0 . $minResult;}
    $secResult = ($seconds/60 - $minResult)*60;
    if($secResult < 10){$secResult = 0 . round($secResult);}
    else { $secResult = round($secResult); }
    return $minResult.":".$secResult;
}
echo '<div id="page-analtyics">';
foreach($results as $result) {
    echo '<div class="metric"><span class="label">Pageviews</span><br /><strong>'.number_format($result->getPageviews()).'</strong></div>';
    echo '<div class="metric"><span class="label">Unique pageviews</span><br /><strong>'.number_format($result->getUniquepageviews()).'</strong></div>';
    echo '<div class="metric"><span class="label">Avg time on page</span><br /><strong>'.secondMinute($result->getAvgtimeonpage()).'</strong></div>';
    echo '<div class="metric"><span class="label">Bounce rate</span><br /><strong>'.round($result->getEntrancebouncerate(), 2).'%</strong></div>';
    echo '<div class="metric"><span class="label">Exit rate</span><br /><strong>'.round($result->getExitrate(), 2).'%</strong></div>';
    echo '<div style="clear: left;"></div>';
}
echo '</div>';
?>
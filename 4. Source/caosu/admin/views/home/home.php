<?php
include_once("models/m_hoa_don.php");
$m_hoa_don=new M_hoa_don();
$hoa_don=$m_hoa_don->Thong_ke_hoa_don();
$thang=array();
$tong=array();
foreach($hoa_don as $hd)
{
	$thang[]=$hd->ThangNam;
	$tong[]=(float)$hd->tong;	
}

$arr=array(
			"labels"=>$thang,
			"datasets"=>array(
								array(
										"label"=>"Doanh thu theo tháng 6 ",
										"borderColor"=>"#F00",
										"backgroundColor"=>"#FF9",
										"fillColor"=>"rgba(172,194,132,0.4)",
										"strokeColor"=>"#ACC26D",
										"pointBorderColor"=>"#0C0",
										"pointStrokeColor"=>"#9DB86D",
										"pointBorderWidth" => 1,
										"pointHoverRadius"=>5,
										"pointHoverBorderWidth"=>3,
										"pointRadius"=>5,
										"pointHitRadius"=>10,
										"data"=>$tong
										)
								)
			);
$strJSON=json_encode($arr);
//die("<xmp>".$strJSON."</xmp>");
?>
<div class="col-md-9">
  <div class="content-wrapper wood-wrapper">
    <div class="content-inner">
      <div class="page-header">
        <?php require_once("header.php"); ?>
        <h1><i class="icon-bar-chart"></i> Dashboard</h1>
      </div>
      <div class="main-content">
		<div style="width:100%;color:#FF9; padding-bottom:15px;">
        <canvas id="buyers" ></canvas>
        </div>
        <script>
            // get line chart canvas
            var buyers = document.getElementById('buyers').getContext('2d');
        
            var myLineChart = new Chart(buyers,{
                    type: 'line',
                    data: <?php echo $strJSON ;  ?>,
                    options: {
                                responsive: true,
                                title: {
                                    display: true,
                                    position:'right',
                                    text:'Doanh thu năm 2017'
                                },// end title
                                scales: {
                                            xAxes: [{
                                                display: true,
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Tháng Sáu',
                                                    
                                                }
                                            }],
                                            yAxes: [{
                                                display: true,
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Trị giá'
                                                },
                                                ticks: {
                                                    suggestedMin: -10,
                                                    suggestedMax: 250,
                                                }
                                            }]
                                        }
                             }
            });
        </script>
      </div>
    </div>
  </div>
</div>

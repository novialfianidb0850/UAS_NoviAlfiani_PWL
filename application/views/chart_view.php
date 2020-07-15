<title>Penerapan Chartjs di Codeignitie</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href=""><h1 class="m-0 text-dark"><i class="nav-icon fas fa-chart-pie"> CHART DATA CORONA </i></h1></a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Corona Jepara</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
</head>
<body>
	<div align="center">
		<h1>MONITORING DATA COVID-19</h1>
		<h2>Di Kabupaten Jepara</h2>
	</div>
	<canvas id="myChart" width="200" height="75">
	<script>
	var ctx = document.getElementById('myChart').getContext('2d');
	var dataPp = {
	  label: 'PP',
	  data: [
	            <?php
	            if(count($stat)>0){
	            	foreach($stat as $val){
	            		echo $val->pp.",";
	            	}
	            }
	            ?>
	            ],
	  backgroundColor: 'rgba(0, 0, 255, 0.5)',
	  borderColor: 'rgba(0, 0, 255 1)',
	  yAxisID: "y-axis-pp"
	};
	 
	var dataOdp = {
	  label: 'ODP',
	  data: [
	            <?php
	            if(count($stat)>0){
	            	foreach($stat as $val){
	            		echo $val->odp.",";
	            	}
	            }
	            ?>
	            ],
	  backgroundColor: 'rgba(0, 230, 0, 0.5)',
	  borderColor: 'rgba(0, 230, 0 1)',
	  yAxisID: "y-axis-odp"
	};
	var dataPdp = {
	  label: 'PDP',
	  data: [
	            <?php
	            if(count($stat)>0){
	            	foreach($stat as $val){
	            		echo $val->pdp.",";
	            	}
	            }
	            ?>
	            ],
	  backgroundColor: 'rgba(255, 204, 0, 0.8)',
	  borderColor: 'rgba(255, 204, 0)',
	  yAxisID: "y-axis-pdp"
	};
	
	var dataOtg = {
	  label: 'OTG',
	  data: [
	            <?php
	            if(count($stat)>0){
	            	foreach($stat as $val){
	            		echo $val->otg.",";
	            	}
	            }
	            ?>
	            ],
	  backgroundColor: 'rgba(140, 140, 140, 0.8)',
	  borderColor: 'rgba(255, 204, 0)',
	  yAxisID: "y-axis-otg"
	};

	var dataPositif = {
	  label: 'Positif',
	  data: [
	            <?php
	            if(count($stat)>0){
	            	foreach($stat as $val){
	            		echo $val->positif.",";
	            	}
	            }
	            ?>
	            ],
	  backgroundColor: 'rgba(255, 0, 0, 0.5)',
	  borderColor: 'rgba(255, 0, 0)',
	  yAxisID: "y-axis-positif"
	};	 
	var dataKecamatan = {
	  labels: [
	        <?php 
	        if(count($stat)>0){
	        	foreach($stat as $val){
	        		echo"'".$val->kecamatan."',";
	        	}
	        }	        
	        ?>
	        ],
	  datasets: [dataPp, dataOdp, dataPdp, dataOtg, dataPositif]
	};
	 
	var chartOptions = {
	  scales: {
	    xAxes: [{
	      barPercentage: 1,
	      categoryPercentage: 0.6
	    }],
	    yAxes: [{
	      id: "y-axis-pp"
	    }, {
	      id: "y-axis-odp"
	    }, {
	    	id: "y-axis-pdp"
	    }, {
	    	id: "y-axis-otg"
	    }, {
	    	id: "y-axis-positif"
	    }]
	  }
	};
	 
	var barChart = new Chart(ctx, {
	  type: 'bar',
	  data: dataKecamatan,
	  options: chartOptions
	});
	</script>
	</canvas>

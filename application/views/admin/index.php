<div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
            Number of clients</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $qCts->amount ?></div>
          </div>
          <div class="auto-col">
            <i class="fas fa-user fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
            Loan Number</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $qLoans->amount ?></div>
          </div>
          <div class="auto-col">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Number of collections
            </div>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $qPaids->quantity ?></div>
          </div>
          <div class="auto-col">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Welcome <?php echo $this->session->userdata('first_name'). ' '.$this->session->userdata('last_name'); ?>!</h6>
    </div>
    <div class="card-body">
      <p class="text-center h5 mb-4">Total loans by type of currency</p>
      
      <canvas id="graphic"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
<script>
  //When receiving data from a web server, the data is always a string.
  //Parse the data with JSON.parse(), and the data becomes a JavaScript object.
  var cData = JSON.parse('<?php echo $countLC; ?>');
 
  console.log("data", cData)

  // Get a reference to the DOM's canvas element
  const $graphic = document.querySelector("#graphic");
  // Labels are the slices of the graph
  const labels = cData.label
  // We can have multiple datasets. let's start with one
  const revenueData = {
    data: cData.data, // The data is an array that must have the same number of values ​​as the number of labels
    // Now there should be as many background colors as data, i.e. for this example 4
    backgroundColor: [
        'rgba(163,221,203,0.2)',
        'rgba(232,233,161,0.2)',
        'rgba(230,181,102,0.2)',
        'rgba(229,112,126,0.2)',
    ],// Background color
    borderColor: [
        'rgba(163,221,203,1)',
        'rgba(232,233,161,1)',
        'rgba(230,181,102,1)',
        'rgba(229,112,126,1)',
    ],// Border Color
    borderWidth: 1,// Width of the border
  };

  new Chart($chart, {
    type: 'pie',// Type of graph. May be dougnhut or foot
    data: {
      labels: labels,
      dataset: [
          dataIncome,
          // More data here...
      ]
    },
  });
</script>
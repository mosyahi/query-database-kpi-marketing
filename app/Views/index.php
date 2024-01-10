<?= $this->extend('layouts/front-end-main') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        KPI Marketing</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($kpiMarketing) ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4" style="height: 500px;">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Query No 1</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body" style="height: 100%;">
            <div class="chart-area" style="height: 100%;">
                <canvas id="myChart" style="width: 100%; height: 100%;"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4" style="height: 500px;">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Query No 2</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body" style="height: 100%;">
            <div class="chart-area" style="height: 100%;">
                <canvas id="myChart2" style="width: 100%; height: 100%;"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($chartData, 'Nama')); ?>,
                datasets: [
                {
                    label: 'Sales_Target',
                    data: <?php echo json_encode(array_column($chartData, 'Sales_Target')); ?>,
                    backgroundColor: 'rgba(255, 251, 0, 0.2)',
                    borderColor: 'rgba(255, 251, 0, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Sales_Actual',
                    data: <?php echo json_encode(array_column($chartData, 'Sales_Actual')); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Sales_Pencapaian',
                    data: <?php echo json_encode(array_column($chartData, 'Sales_Pencapaian')); ?>,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Sales_Actual_Bobot',
                    data: <?php echo json_encode(array_column($chartData, 'Sales_Actual_Bobot')); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Report_Target',
                    data: <?php echo json_encode(array_column($chartData, 'Report_Target')); ?>,
                    backgroundColor: 'rgba(112, 86, 55, 0.2)',
                    borderColor: 'rgba(112, 86, 55, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Report_Actual',
                    data: <?php echo json_encode(array_column($chartData, 'Report_Actual')); ?>,
                    backgroundColor: 'rgba(0, 156, 41, 0.2)',
                    borderColor: 'rgba(0, 156, 41, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Report_Pencapaian',
                    data: <?php echo json_encode(array_column($chartData, 'Report_Pencapaian')); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Report_Actual_Bobot',
                    data: <?php echo json_encode(array_column($chartData, 'Report_Actual_Bobot')); ?>,
                    backgroundColor: 'rgba(146, 150, 209, 0.2)',
                    borderColor: 'rgba(146, 150, 209, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Total_KPI',
                    data: <?php echo json_encode(array_column($chartData, 'Total_KPI')); ?>,
                    backgroundColor: 'rgba(119, 52, 153, 0.2)',
                    borderColor: 'rgba(119, 52, 153, 1)',
                    borderWidth: 1
                },
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($tasklistSummary, 'Nama')); ?>,
                datasets: [
                {
                    label: 'Total_Tasklist',
                    data: <?php echo json_encode(array_column($tasklistSummary, 'Total_Tasklist')); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'OnTime_Tasklist',
                    data: <?php echo json_encode(array_column($tasklistSummary, 'OnTime_Tasklist')); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Late_Tasklist',
                    data: <?php echo json_encode(array_column($tasklistSummary, 'Late_Tasklist')); ?>,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Persentase_OnTime',
                    data: <?php echo json_encode(array_column($tasklistSummary, 'Persentase_OnTime')); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Persentase_Late',
                    data: <?php echo json_encode(array_column($tasklistSummary, 'Persentase_Late')); ?>,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                },
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<?= $this->endSection() ?>
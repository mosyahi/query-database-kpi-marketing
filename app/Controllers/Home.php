<?php

namespace App\Controllers;
use App\Models\KpiMarketingModel;

class Home extends BaseController
{

    public function index(): string
    {
        $model = new KpiMarketingModel();
        $chartData = $model->getChartData();
        $tasklistSummary = $model->getTasklistSummary();

        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'kpiMarketing' => $model->findAll(),
            'chartData' => $chartData,
            'tasklistSummary' => $tasklistSummary,
        ];

        return view('index', $data);
    }

}

<?php

namespace App\Models;

use CodeIgniter\Model;

class KpiMarketingModel extends Model
{
    protected $table            = 'table_kpi_marketing';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'tasklist', 
        'kpi', 
        'karyawan', 
        'deadline', 
        'aktual', 
    ];

    public function getChartData()
    {
        $builder = $this->db->table($this->table);
        $builder->select("karyawan AS Nama,
            SUM(CASE WHEN kpi = 'Sales' THEN 1 ELSE 0 END) AS Sales_Target,
            SUM(CASE WHEN kpi = 'Sales' AND aktual <= deadline THEN 1 ELSE 0 END) AS Sales_Actual,
            ROUND(SUM(CASE WHEN kpi = 'Sales' AND aktual <= deadline THEN 1 ELSE 0 END) / NULLIF(SUM(CASE WHEN kpi = 'Sales' THEN 1 ELSE 0 END), 0), 2) * 100 AS Sales_Pencapaian,
            ROUND(ROUND(SUM(CASE WHEN kpi = 'Sales' AND aktual <= deadline THEN 1 ELSE 0 END) / NULLIF(SUM(CASE WHEN kpi = 'Sales' THEN 1 ELSE 0 END), 0), 2) * 100 * 0.5, 2) AS Sales_Actual_Bobot,
            SUM(CASE WHEN kpi = 'Report' THEN 1 ELSE 0 END) AS Report_Target,
            SUM(CASE WHEN kpi = 'Report' AND aktual <= deadline THEN 1 ELSE 0 END) AS Report_Actual,
            ROUND(SUM(CASE WHEN kpi = 'Report' AND aktual <= deadline THEN 1 ELSE 0 END) / NULLIF(SUM(CASE WHEN kpi = 'Report' THEN 1 ELSE 0 END), 0), 2) * 100 AS Report_Pencapaian,
            ROUND(ROUND(SUM(CASE WHEN kpi = 'Report' AND aktual <= deadline THEN 1 ELSE 0 END) / NULLIF(SUM(CASE WHEN kpi = 'Report' THEN 1 ELSE 0 END), 0), 2) * 100 * 0.5, 2) AS Report_Actual_Bobot,
            ROUND(ROUND(SUM(CASE WHEN kpi = 'Sales' AND aktual <= deadline THEN 1 ELSE 0 END) / NULLIF(SUM(CASE WHEN kpi = 'Sales' THEN 1 ELSE 0 END), 0), 2) * 100 * 0.5 +
            ROUND(SUM(CASE WHEN kpi = 'Report' AND aktual <= deadline THEN 1 ELSE 0 END) / NULLIF(SUM(CASE WHEN kpi = 'Report' THEN 1 ELSE 0 END), 0), 2) * 100 * 0.5, 2) AS Total_KPI");
        $builder->groupBy('karyawan');
        $builder->limit(25);
        
        return $builder->get()->getResultArray();
    }

    public function getTasklistSummary()
    {
        $builder = $this->db->table($this->table);
        $builder->select("karyawan AS Nama,
            COUNT(*) AS Total_Tasklist,
            SUM(CASE WHEN aktual <= deadline THEN 1 ELSE 0 END) AS OnTime_Tasklist,
            SUM(CASE WHEN aktual > deadline THEN 1 ELSE 0 END) AS Late_Tasklist,
            ROUND((SUM(CASE WHEN aktual <= deadline THEN 1 ELSE 0 END) / NULLIF(COUNT(*), 0)) * 100, 2) AS Persentase_OnTime,
            ROUND((SUM(CASE WHEN aktual > deadline THEN 1 ELSE 0 END) / NULLIF(COUNT(*), 0)) * 100, 2) AS Persentase_Late");
        $builder->groupBy('karyawan');
        return $builder->get()->getResultArray();
    }
}

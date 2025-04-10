<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\SalarySlip;
use Carbon\Carbon;
use App\Models\User;
class AdminDashboardController extends Controller
{
    public function  index(){
        $totalEmployees = User::count();
        $totalSalary = SalarySlip::sum('base_salary');
        $totalBonus = SalarySlip::sum('bonus');
        $totalFines = SalarySlip::sum('fine');
        $totalDaysOffAmount = SalarySlip::sum('days_off');


         // Monthly totals
    $currentMonth = Carbon::now()->month;
    $currentYear = Carbon::now()->year;


    $monthlySalary = SalarySlip::whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', $currentYear)
                                ->sum('base_salary');


    $monthlyBonus = SalarySlip::whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', $currentYear)
                                ->sum('bonus');


    $monthlyFines = SalarySlip::whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', $currentYear)
                                ->sum('fine');




        return view('dashboard',compact('totalEmployees','totalSalary','totalBonus','totalFines','totalDaysOffAmount','monthlySalary','monthlyBonus','monthlyFines'));
    }
}

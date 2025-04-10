@extends('layouts.app')


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      Dashboard
    </div>
  </div>


  <div class="row">
    <!-- Total Employees -->
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card text-white bg-primary h-100">
        <div class="card-body">
          <h5 class="card-title">
            Total Employees
            <span style="
              animation: blinker 1.5s linear infinite;
              padding: 3px 8px;
              font-size: 12px;
              background-color: #ff6b6b;
              color: white;
              border-radius: 12px;
              margin-left: 10px;
              display: inline-block;
            ">Overall</span>
          </h5>
          <h3>{{$totalEmployees}}</h3>
        </div>
      </div>
    </div>


    <!-- Total Base Salary -->
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card text-white bg-success h-100">
        <div class="card-body">
          <h5 class="card-title">
            Total Base Salary
            <span style="
              animation: blinker 1.5s linear infinite;
              padding: 3px 8px;
              font-size: 12px;
              background-color: #ff6b6b;
              color: white;
              border-radius: 12px;
              margin-left: 10px;
              display: inline-block;
            ">Overall</span>
          </h5>
          <h3>Rs {{$totalSalary}}</h3>
        </div>
      </div>
    </div>


    <!-- Total Bonus -->
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card text-white bg-info h-100">
        <div class="card-body">
          <h5 class="card-title">
            Total Bonus
            <span style="
              animation: blinker 1.5s linear infinite;
              padding: 3px 8px;
              font-size: 12px;
              background-color: #ff6b6b;
              color: white;
              border-radius: 12px;
              margin-left: 10px;
              display: inline-block;
            ">Overall</span>
          </h5>
          <h3>Rs {{$totalBonus}}</h3>
        </div>
      </div>
    </div>


    <!-- Total Fines -->
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card text-black bg-grey h-100">
        <div class="card-body">
          <h5 class="card-title">
            Total Fines
            <span style="
              animation: blinker 1.5s linear infinite;
              padding: 3px 8px;
              font-size: 12px;
              background-color: #ff6b6b;
              color: white;
              border-radius: 12px;
              margin-left: 10px;
              display: inline-block;
            ">Overall</span>
          </h5>
          <h3>Rs {{$totalFines}}</h3>
        </div>
      </div>
    </div>


    <!-- Total Off Days Fine -->
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card text-white bg-info h-100">
        <div class="card-body">
          <h5 class="card-title">
            Total Off Days Fine
            <span style="
              animation: blinker 1.5s linear infinite;
              padding: 3px 8px;
              font-size: 12px;
              background-color: #ff6b6b;
              color: white;
              border-radius: 12px;
              margin-left: 10px;
              display: inline-block;
            ">Overall</span>
          </h5>
          <h3>Rs {{$totalDaysOffAmount}}</h3>
        </div>
      </div>
    </div>


    <!-- Total Salary This Month -->
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card text-white bg-warning h-100">
        <div class="card-body">
          <h5 class="card-title">
            Total Pay Salary This Month
            <span style="
              animation: blinker 1.5s linear infinite;
              padding: 3px 8px;
              font-size: 12px;
              background-color: #343a40;
              color: white;
              border-radius: 12px;
              margin-left: 10px;
              display: inline-block;
            ">This Month</span>
          </h5>
          <h3>Rs {{$monthlySalary}}</h3>
        </div>
      </div>
    </div>


   
    <div class="col-md-6 col-lg-3 mb-4">
      <div class="card text-white bg-warning h-100">
        <div class="card-body">
          <h5 class="card-title">
            Total Fines
            <span style="
              animation: blinker 1.5s linear infinite;
              padding: 3px 8px;
              font-size: 12px;
              background-color: #343a40;
              color: white;
              border-radius: 12px;
              margin-left: 10px;
              display: inline-block;
            ">This Month</span>
          </h5>
          <h3>Rs {{$monthlyFines}}</h3>
        </div>
      </div>
    </div>
 


      <!-- Total Salary This Month -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card text-white bg-warning h-100">
          <div class="card-body">
            <h5 class="card-title">
              Monthly Bonus
              <span style="
                animation: blinker 1.5s linear infinite;
                padding: 3px 8px;
                font-size: 12px;
                background-color: #343a40;
                color: white;
                border-radius: 12px;
                margin-left: 10px;
                display: inline-block;
              ">This Month</span>
            </h5>
            <h3>Rs {{$monthlyBonus}}</h3>
          </div>
        </div>
      </div>
    </div>


  <!-- Blinker keyframes (inline in page) -->
  <style>
    @keyframes blinker {
      50% { opacity: 0; }
    }
  </style>


</div>





@endsection



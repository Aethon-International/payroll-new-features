@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Salary Slips</h5>
      <a href="{{ route('admin.salary-slips.create') }}" class="btn btn-primary">
        <i class="ti ti-plus me-1"></i>
      </a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Employee Name</th>
            <th>Payroll</th>
            <th>Base Salary</th>
            <th>Adjustment Amount</th>
            <th>Net Amount</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse ($salaryslips as $salaryslip)
            <tr>
              <td>
                <span class="fw-medium">{{ $salaryslip->employee->name }}</span>
              </td>
              <td>
                <span class="fw-medium">{{ $salaryslip->payrollPeriod->month . " , " . $salaryslip->payrollPeriod->year }}</span>
              </td>
              <td>
                <span class="fw-medium">{{ $salaryslip->base_salary }}</span>
              </td>

              <td>
              <span class="fw-medium">
                {{ $salaryslip->adjustment_amount}}
                </span>
              </td>
              <td>
                <span class="fw-medium">{{ $salaryslip->net_salary }}</span>
              </td>
              <td>
                <form method="POST" action="{{ route('admin.salary-slips.destroy', $salaryslip->id) }}" onsubmit="return confirm('Are you sure you want to delete this adjustmenttype?');" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class="ti ti-trash me-2"></i></button>
                </form>
                <a href="{{ route('generate-pdf', ['salary_slip_id' => $salaryslip->id]) }}" class="text-white">
                  <button class="btn btn-success" type="submit">Generate PDF</button>
                </a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="12" class="text-center">No salary slips found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>



@endsection

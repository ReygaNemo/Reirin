<h1>AVAILABLE EMPLOYEE SERVICE WITH SHIFT</h1>
@foreach($appointments as $ap)
        <form action="{{ route('changeStatus') }}" method="post">
                @csrf
                <input type="hidden" name="appointmentId" value="{{ $ap->appointment_id }}">
                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">{{ $ap->customer->customer_name }}</h5>
                                <p class="card-text">{{ $ap->employeeService->employee->employee_name }}</p>
                                <p class="card-text">{{ $ap->employeeService->service->service_name }}</p>
                        </div>
                        <div class="card-footer">
                                <small class="text-body-secondary">{{ $ap->appointment_id}}</small>
                                <br>
                                <small class="text-body-secondary">{{ $ap->appstatus->appstatus_name }}</small>
                                <br>
                                <small class="text-body-secondary">{{ $ap->employeeService->date_available}}</small>
                                <br>
                                <small class="text-body-secondary">{{ $ap->employeeService->time_available}}</small>
                        </div>
                        @if($ap->appstatus_id <= 3)
                                <button type="submit" class="btn btn-primary">Change Status</button>
                        @endif
                </div>
        </form>
        <br>
@endforeach


@extends('layouts.app')

@section('content')
<div class="col">
    <div class="card border-0 shadow-sm">
        <div class="card-header">Activity</div>
        <div class="card-body">
            <canvas id="activityChart"></canvas>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    window.addEventListener('load', function() {
        new Chart('activityChart', {
            type: 'line',
            data: {
                labels: {!! json_encode($activities->keys()->toArray()) !!},
                datasets: [{
                    label: 'Activity',
                    data: {{ json_encode($activities->values()->toArray()) }},
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    display: false
                },
            }
        });
    });
</script>
@endpush
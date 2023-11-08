@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<h3>Bienvenue {{ Auth::user()->name}} !</h3>
<div class="row mt-3">
    <div class="col-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Documents</h5>
                <p class="card-text">Gérer facilement vos documents</p>
                <a href="{{route ('documents.index')}}" class="btn btn-primary btn-sm">Gérer vos documents</a>
            </div>
        </div>
    </div>
    <div class="col-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Types de documents</h5>
                <p class="card-text">Gérer facilement vos types de documents</p>
                <a href="{{route ('documenttypes.index')}}" class="btn btn-primary btn-sm">Gérer vos types de documents</a>
            </div>
        </div>
    </div>
    <div class="col-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Produits</h5>
                <p class="card-text">Gérer facilement vos documents</p>
                <a href="{{route ('products.index')}}" class="btn btn-primary btn-sm">Gérer vos documents</a>
            </div>
        </div>
    </div>
    <div class="col-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Clients</h5>
                <p class="card-text">Gérer facilement vos documents</p>
                <a href="{{route ('customers.index')}}" class="btn btn-primary btn-sm">Gérer vos documents</a>
            </div>
        </div>
    </div>
    <div class="col-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Utilisateurs</h5>
                <p class="card-text">Gérer facilement les utilisateurs de votre PaperPro</p>
                <a href="{{route ('users.index')}}" class="btn btn-primary btn-sm">Gérer vos utilisateurs</a>
            </div>
        </div>
    </div>
    <div class="col-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gérer votre compte</h5>
                <p class="card-text">Gérer facilement votre compte PaperPro</p>
                <a href="{{ route('users.edit', Auth::user()->id) }}" class="btn btn-primary btn-sm">Gérer votre compte</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">Graphique des revenus</h5>
            <div class="card-body">
                <div id="revenues"></div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var revenuesData = {!! json_encode($revenues->values()) !!};
        var categoriesData = {!! json_encode($revenues->keys()) !!};

        var options = {
            series: [{
                name: 'Revenus',
                data: revenuesData
            }],
            chart: {
                type: 'line',
                height: '400px',
                toolbar: {
                    show: false
                }
            },
            colors: ['#90568e'],
            stroke: {
                curve: 'smooth',
                width: 3,
            },
            xaxis: {
                categories: categoriesData,
                labels: {
                    style: {
                        fontSize: '14px',
                        fontFamily: 'Arial, sans-serif'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        fontSize: '14px',
                        fontFamily: 'Arial, sans-serif'
                    }
                }
            },
            grid: {
                borderColor: '#e0e0e0',
                row: {
                    colors: ['transparent'],
                    opacity: 0.2
                },
            },
            fill: {
                gradient: {
                    enabled: true,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                }
            },
            markers: {
                size: 5,
                colors: ['#90568e'],
                strokeColors: '#fff',
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: '300px'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#revenues"), options);
        chart.render();
    });
</script>

@endsection

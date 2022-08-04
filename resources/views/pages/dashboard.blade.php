@extends('include/base')

@section('content')
    <div class=" flex">
        <div class="w-1/4 p-5 h-screen">
           @include("include/side")
        </div>
        <div class="w-3/4 p-10">
            <div class="flex mt-4 gap-10 px-5">
                <div class="w-1/2 h-auto">
                    <canvas id="pie" width="300px" height="250px"></canvas>
                </div>
                <div class="w-1/2 h-auto">
                    <canvas id="bar" width="300px" height="250px"></canvas>

                </div>
            </div>
        </div>
    </div>

    <script>
        var xValues = ["active","inactive"];
        var yValues = [55, 49];
        var barColors = ["green", "red","blue","orange","brown"];

        let pie_values = [10, 20, 40]
        let pie_labels = ["mouse","keyboard","moniter"]

        let myChart  = new Chart("bar",{
            type:"bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            }
        })

        let piechar  = new Chart("pie",{
            type:"pie",
            data: {
                labels: pie_labels,
                datasets: [{
                backgroundColor: barColors,
                data: pie_values
                }]
            }
        })


        
    </script>
@endsection
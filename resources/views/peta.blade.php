<!DOCTYPE html>
@extends('template.app')
@section('content')
<html lang="en">
<head>
    <title>Pemetaan Lahan</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" 
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" 
    crossorigin=""/>
    
</head>

<body >
    <div class="container text-center">
        <div class="card-header pt-1 row">
            <div class="col-lg-12 card-content">
                <center>
                    <br>
                    <h3>PEMETAAN LAHAN PERTANIAN GEOGRAFIS</h3>
                </center>
            </div>
           {{-- <div class="col-md-4 card-content bg-white rounded-1 box-shadow-1">
                <div>
                    {!! Form::open(['route' => 'peta','method'=>'get'], ['class' => 'form']) !!}
                    <div class="form-group mb-0 pl-1">
                        <div class="row align-items-center">
                            <label class="text-bold-700 mt-0-1 ml-0-1">Pilih Kelurahan :</label>
                            {!! Form::select('kelurahan', ['0','Jagung'], ['class' => 'col-sm-3 form-control-2 p-0-1 m-1']) !!}
                            {!! Form::submit('Filter', ['class' => 'btn btn-green m-0-1 p-0-1 pr-2 pl-2']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div> --}}
            <div class="col-md-12 card-content bg-white rounded-1 box-shadow-1 mt-1 ">
                <div class="card-body">
                    <div class="row justify-content-center align-items-center">
                        <!-- <div class="col-md-12">
                            <input class="skin skin-flat mb-0-1" id="all" type="button" value="Clear Map" onClick="clearMap()">
                        </div> -->
                        <div class="col-md-3">
                            <input id="cb-id-def" class="skin skin-flat mb-0-1" type="checkbox" onchange="callPolygonDA(this,1)">
                            <span>
                                <label class="ml-0-1 text-bold-600 font-small-4 black mb-0">Jagung</label>
                                <i style="background-color: #006400; padding: 2px" class="fa fa-square transparent"></i>
                            </span>
                        </div>

                        <div class="col-md-3">
                            <input id="cb-id-deg" class="skin skin-flat mb-0-1" type="checkbox" onchange="callPolygonDA(this,2)">
                            <span>
                                <label class="ml-0-1 text-bold-600 font-small-4 black mb-0">Sawah</label>
                                <i style="background-color: #FF7F50; padding: 2px" class="fa fa-square transparent"></i>
                            </span>
                        </div>
                        
                        <div class="col-md-3">
                            <input id="cb-id-peat" class="skin skin-flat mb-0-1" type="checkbox" onchange="callPolygonDA(this,3)">
                            <span>
                                <label class="ml-0-1 text-bold-600 font-small-4 black mb-0">Padi Ladang</label>
                                <i style="background-color: #8FBC8F; padding: 2px" class="fa fa-square transparent"></i>
                            </span>
                        </div>

                        <div class="col-md-3">
                            <input id="cb-id-peat" class="skin skin-flat mb-0-1" type="checkbox" onchange="callPolygonDA(this,4)">
                            <span>
                                <label class="ml-0-1 text-bold-600 font-small-4 black mb-0">Intersection</label>
                                <i style="background-color: #e83e8c; padding: 2px" class="fa fa-square transparent"></i>
                            </span>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="card-header bg-white rounded-1 box-shadow-1 mt-1 text-center">
        <center>
            <div id="mapid" style="width: 900px; height: 400px;"></div>
        </center>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <!-- <script src="maps/bataskec.json"></script>  -->

    <script>
        var mymap = L.map('mapid').setView([-0.6104914,117.1596547], 13);
        var layerGroup = new L.LayerGroup();
        
        
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            zoom: 12,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery ?? <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        layerGroup.addTo(mymap);
            function callPolygonDA (element, id){
                var urlpolygon='';
                switch (id){
                    case 1:urlpolygon='jagung';
                    break;
                    case 2:urlpolygon='sawah';
                    break;
                    case 3:urlpolygon='padi_ladang';
                    break;
                    case 4:urlpolygon='intersection';
                    break;
                

                }

                if(element.checked){
                    $.ajax({url:urlpolygon,
                        success: function (response) {
                            //console.log(response);
                            DrawPolygon (response, id);
                            
                        }
                    });
                }else{
                    layerGroup.removeLayer(id);
                }
                
            }
            function DrawPolygon(response,id) {
                var colorMap='';
                switch (id){
                    case 1:colorMap='#006400';
                    break;
                    case 2:colorMap='#FF7F50';
                    break;
                    case 3:colorMap='#8FBC8F';
                    break;
                    case 4:colorMap='#e83e8c';
                    break;
                   

                }
                datalayer= L.geoJson(response.features,{ 
                    style: {
                        color: colorMap,
                        weight: 4
                    },
                    onEachFeature: function(feature, featureLayer){
                        featureLayer.bindPopup(
                            "kelurahan1: "+feature.properties.kelurahan1 +
                            "kelurahan2: "+feature.properties.kelurahan2 +
                            "luas: "+feature.properties.luas 
                        );
                    } 
                });
                datalayer._leaflet_id=id;
                layerGroup.addLayer(datalayer);
                mymap.fitBounds(datalayer.getBounds());

            }
            $.ajax({url:"bataskelurahan",
                success: function (response) {
                    //console.log(response);
                    DrawBatas (response);
                    
                }
            });

            function DrawBatas(response) {
                datalayer= L.geoJson(response.features,{ 
                    
                    onEachFeature: function(feature, featureLayer){
                        featureLayer.bindPopup(
                            
                        );
                    } 
                }).addTo(mymap);
                
            }
           
   
    </script>

</body>
</html>
@endsection

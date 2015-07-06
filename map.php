<?php /* Template Name: Map Template */ ?>

<!--scripts.php-->
<!--wp_enqueue_style( 'cesium_widgets_style', get_template_directory_uri() . '/Cesium/Widgets/widgets.css');
  wp_enqueue_script('cesium', get_template_directory_uri() . '/Cesium/Cesium.js', false, null, false);-->

<div id="cesiumContainer"></div>
 <script>
    var viewer = new Cesium.Viewer('cesiumContainer', {
        baseLayerPicker : false,
        geocoder : false,
        timeline : false,
        navigationInstructionsInitiallyVisible: true,
        fullscreenElement : document.getElementById('cesiumContainer'),
        imageryProvider : new Cesium.BingMapsImageryProvider({
            url : '//dev.virtualearth.net',
            key : 'AiL8RM2VH01_zKVjyov3I1pnjFqsyciHcCUavxknsCHOky3r7_q-uLQByl1Y_laK',
            mapStyle : Cesium.BingMapsStyle.AERIAL_WITH_LABELS
        }),
    });
    
    viewer.dataSources.add(Cesium.CzmlDataSource.load('/wp-content/themes/dw-timeline/outforaride.czml')).then(function(dataSource){
      var currentPos = dataSource.entities.getById('Calgary');
      viewer.selectedEntity = currentPos;
      viewer.flyTo(currentPos, { duration: 3, offset: {heading :0, pitch: -1, range:2000000} }); 
    });
  </script>


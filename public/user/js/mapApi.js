var formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'NGN',
  })

const map = new google.maps.Map(document.getElementById("googleMap"), {
    center: { lat: 6.5227, lng: 3.6218 },
    zoom: 13,
    mapTypeControl: false,
  });


  const options = {
      componentRestrictions: { country: "ng", },
    fields: ["formatted_address", "geometry", "name"],
    strictBounds: false,
    types: ["establishment"],
  };

  const input = document.getElementById("pickup");
  const input2 = document.getElementById("dropoff");

  const autocomplete = new google.maps.places.Autocomplete(input, options);
  const autocomplete2 = new google.maps.places.Autocomplete(input2, options);


  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();

  console.log(directionsDisplay);

  autocomplete.bindTo("bounds", map);

  const infowindow = new google.maps.InfoWindow();
  const infowindowContent = document.getElementById("infowindow-content");

  infowindow.setContent(infowindowContent);

  const marker = new google.maps.Marker({
    map,
    anchorPoint: new google.maps.Point(0, -29),
  });

  autocomplete.addListener("place_changed", () => {
    infowindow.close();
    marker.setVisible(false);

    const place = autocomplete.getPlace();

    if (!place.geometry || !place.geometry.location) {
      window.alert("No details available for input: '" + place.name + "'");
      return;
    }

      if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
      } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);
      }

  });

  function calculateDistance() {
            var origin = $('#pickup').val();
            var destination = $('#dropoff').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
  }

        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Can't get price of "  + origin + " and " + destination);
                } else {

                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;

                    let total = distance.value.toFixed() / 1000 * 80 + 420
                    let TotalPrice = formatter.format(Math.round(total))

                    $('#subject').text("Fare Estimate: ");
                    $('#per_km').text(TotalPrice);
                    $('#price').val(Math.round(total));

                    // var distance_in_kilo = distance.value / 1000; // the kilom
                    // var distance_in_mile = distance.value / 1609.34; // the mile
                    // var duration_text = duration.text;
                    // var duration_value = duration.value;
                    // $('#in_mile').text(distance_in_mile.toFixed(2) * 300);
                    // $('#in_kilo').text(distance_in_kilo.toFixed() * 75 + 425 );
                    //
                    // $('#duration_text').text(duration_text);
                    // $('#duration_value').text(duration_value);
                    // $('#from').text(origin);
                    // $('#to').text(destination);

                }
            }
        }

    document.getElementById("distance_form").onclick = function(e){

        e.preventDefault();

        $('#loading').text("Fetching Price .......... ");
        $('#distance_form').text("Getting Price ....... ");
        $('#distance_form').css("background-color", "green");

        setTimeout(() => {
            calculateDistance();
            $('#loading').fadeOut(1000)
            $('#distance_form').text("Get price");
            $('#distance_form').css("background-color", "blue");
        }, 2000);

    }
    

    // $('#distance_form').click(function(e){
    //             e.preventDefault();
    //             calculateDistance();
    // });


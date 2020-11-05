function myMap() {
    let location = {lat:59.325860, lng:18.071060};
    let map = new google.maps.Map(document.getElementById("google-map"), {
    zoom:16,
    center: location
    });
    let marker= new google.maps.Marker({
      position:location,
      map: map
    });
  }
 

  
  


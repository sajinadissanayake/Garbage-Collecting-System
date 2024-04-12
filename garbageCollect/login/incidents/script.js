function IncidentLoc(){
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showLocation,showError);
  }
}
function showLocation(position){
  document.querySelector('.myForm input[name="latitude"]').value = position.coords.latitude;
  document.querySelector('.myForm input[name="longitude"]').value = position.coords.longitude;
}
function showError(error){
  switch(error.code){
    case error.PERMISSION_DENIED:
    alert("Error Occured !");
    location.reload();
    break;
  }
}
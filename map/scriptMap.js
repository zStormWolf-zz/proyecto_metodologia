window.onload=iniciarBtn();
  function iniciarBtn(){
    var btnAlessa = document.getElementById("location-button");
    btnAlessa.addEventListener("click", clickBtnLlegar(8.870453, -79.818716));
}
function clickBtnLlegar(latitud, longitud){
  
        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
        console.log(position);
        });
        }
    }
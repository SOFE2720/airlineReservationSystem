var today = new Date();
$(function(){
$("#return_date").datepicker({ dateFormat: 'yy-mm-dd', minDate: 0, maxDate: '2022-12-31', showButtonPanel: true, changeMonth: true, changeYear: true, showAnim: "slideDown" });
$("#depart_date").datepicker({ dateFormat: 'yy-mm-dd', minDate: 0, maxDate: '2022-12-31', showButtonPanel: true, changeMonth: true, changeYear: true, showAnim: "slideDown" }).bind("change",function(){
var minValue = $(this).val();
minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
minValue.setDate(minValue.getDate());
$("#return_date").datepicker( "option", "minDate", minValue );
})
          });


function passvalues(){

var PhilippineAirlines = "Philippine Airlines";
var AmericanAirlines = "American Airlines";
var ANA = "All Nippon Airways";
var AirCanada = "Air Canada";
var WestJet ="West Jet";

var selectedValue = document.getElementById("origin_drop").value;
localStorage.setItem("passvalue1", selectedValue);

if(document.getElementById('destination_drop').value == "Manila, Philippines [MNL]") {
localStorage.setItem("airlines", PhilippineAirlines);
}

if(document.getElementById('destination_drop').value == "San Francisco, United States [SFO]") {
localStorage.setItem("airlines", AmericanAirlines);
}

if(document.getElementById('destination_drop').value == "Tokyo-Narita, Japan [NRT]") {
localStorage.setItem("airlines", ANA);
}

if(document.getElementById('destination_drop').value == "Toronto, Canada [YYZ]") {
localStorage.setItem("airlines", AirCanada);
}

if(document.getElementById('destination_drop').value == "Toronto, Canada [YYZ]") {
localStorage.setItem("airlines2", WestJet);
}

if(document.getElementById('destination_drop').value == "Montreal-Pierre Eliott Trudeau International, Canada [YUL]") {
localStorage.setItem("airlines", AirCanada);
}    

var selectedValue2 = document.getElementById("destination_drop").value;
localStorage.setItem("passvalue2", selectedValue2);

}
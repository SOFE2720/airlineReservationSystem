<html>
    <title>OT Flight Portal</title>

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="nav.js"> </script>
      <script type="text/javascript" src="jquery.min.js"> </script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <script>
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
      </script>


    </head>

<body>

<div id="bar">
    <p style="font-size: 32px; text-align: left; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">COVID-19 Travel Updates: <a href="https://travel.gc.ca/travelling/advisories" style="font-size: 20; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  color: rgb(235, 234, 241);"
      >Visit this Travel Advice and Advisories for more information about health & safety when travelling, entry requirements, and more</a></p>

</div>

<div class="bar">
    <a href="HomePage.html"><img id="menu_logo" src="images/otu-logo.png" alt="OTU"/></a>               
</div>    

<div class="container-fluid">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a id="col1" class="hover" href="HomePage.html" style="color: black;">Home</a></li>
        <li><a id="col2" class="hover" href="https://travel.usnews.com/rankings/worlds-best-vacations/" style="color: black;">Popular Destinations</a></li>
        <li><a id="col3" class="hover" href="UserPage_Files/enterUserPage.php" style="color: black;">Sign In</a></li>
        <li><a id="col4" class="hover" href="About Us.html" style="color: black;">About Us </a></li>
        <li><a id="col4" class="hover" href="Contact Us.html" style="color: black;">Contact Us </a></li>
      </ul>
    </div>
  </nav>
  <div id="home">

    </div>
  </div>
</div>

<div id="background_contain">                        
  <div class="quick_book">
    <h3 id="booking_header">Book A Flight</h3>

      <form action="Flights.html">
        <div id="from_block">
          FROM: <br/><select id="origin_drop" onchange="updateSelect(this,'destination_drop'); getSelectValue();" name="origin" required>
            <option value="" selected="selected"></option>
            <option value="Manila, Philippines [MNL]">Manila, Philippines [MNL]</option>
            <option value="Toronto, Canada [YYZ]">Toronto, Canada [YYZ]</option>
            <option value="San Francisco, United States [SFO]">San Francisco, United States [SFO]</option>
            <option value="Tokyo-Narita, Japan [NRT]">Tokyo-Narita, Japan [NRT]</option>
            <option value="Montreal-Pierre Eliott Trudeau International, Canada [YUL]">Montreal-Pierre Eliott Trudeau International, Canada [YUL]</option>
                      </select>
         </div>
                    
            <div id="to_block">
              TO: <br/><select id="destination_drop" onchange="updateSelect(this,'origin_drop'); getSelectValue();" name="destination" required>
                <option value="" selected="selected"></option>
                <option value="Manila, Philippines [MNL]">Manila, Philippines [MNL]</option>
                <option value="Toronto, Canada [YYZ]">Toronto, Canada [YYZ]</option>
                <option value="San Francisco, United States [SFO]">San Francisco, United States [SFO]</option>
                <option value="Tokyo-Narita, Japan [NRT]">Tokyo-Narita, Japan [NRT]</option>
                <option value="Montreal-Pierre Eliott Trudeau International, Canada [YUL]">Montreal-Pierre Eliott Trudeau International, Canada [YUL]</option>
                        </select>
            </div>
                
            <div id="depart_block">
              Depart Date:<br/> <input id="depart_date" name="depart" type="text" placeholder="yyyy-mm-dd" required>
            </div>
                    
            <div id="return_block">
              Return Date:<br/> <input id="return_date" name="return" type="text" placeholder="yyyy-mm-dd" required> 	
            </div>
                    
            <div id="passenger_block">
              Passengers:<br/> 
                <select id="passenger_drop" name="passengernumber" required>
                  <option value=""></option>
                  <option value=1>1</option>
                  <option value=2>2</option>
                  <option value=3>3</option>
                  <option value=4>4</option>
                  <option value=5>5</option>
                  <option value=6>6</option>
                </select>
            </div>
                    
            <div id="trip_block">
              Type: <br/>
                <select id="trip_drop" name="trip_type" onchange="displayChange()" required>
                  <option value=""></option>
                  <option value="ROUND">Round Trip</option>
                  <option value="ONE">One Way</option>
                </select>
            </div>
    
            <button id="search" value="Submit" type="submit" onclick="passvalues()">SEARCH FLIGHTS</button>
        </form>            
            </div>            
            </div>

<script>
  var type = document.getElementById("trip_drop");
  var returnDate = document.getElementById("return_block");
  var returnElement = document.getElementById("return_date");
                
    if(type.value == "ROUND"){
      returnDate.style.visibility = 'visible';
      returnElement.required = true;
    }
    else if(type.value == "ONE"){
      returnDate.style.visibility = 'hidden';
      returnElement.required = false;
    }               
                    
  function updateSelect(changedSelect, selectId) {
  var otherSelect = document.getElementById(selectId);
  for (var i = 0; i < otherSelect.options.length; ++i) {
      otherSelect.options[i].disabled = false;
      }
      if (changedSelect.selectedIndex == 0) {
        return;
        }
      otherSelect.options[changedSelect.selectedIndex].disabled = true;
  }        
            
  function displayChange(){
  var type = document.getElementById("trip_drop");
  var returnDate = document.getElementById("return_block");
  var returnElement = document.getElementById("return_date");

    if(type.value == "ROUND"){
      returnDate.style.visibility = 'visible';
      returnElement.required = true;
    }

    else if(type.value == "ONE"){
      returnDate.style.visibility = 'hidden';
      returnElement.required = false;
      returnElement.value = '';
    }          
  }            
</script>        
</body>
</html>
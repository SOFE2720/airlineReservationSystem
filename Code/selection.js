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
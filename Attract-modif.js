/*function selectRow(checkbox) {
    var checkboxes = document.getElementsByName('row');
    checkboxes.forEach(function(item) {
      if (item !== checkbox) {
        item.checked = false;
      }
    });
  }*/
 
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var noVisible = document.getElementsByClassName('no');
  var yesVisible = document.getElementsByClassName('yes');
  
  



  checkboxes.forEach(function(item){
   item.addEventListener("click",function(){
      if(this.checked == true){
         for(var i=0 ; i<noVisible.length ; i++){
            if(item == checkboxes[i]){
               noVisible[i].style.display = 'inline';
               yesVisible[i].style.display = 'none';
               item.value = 'off';
   
            }
         }
         var newValue = this.value;
         localStorage.setItem('inputValue', newValue);
      }
      else{
         for(var i=0 ; i<noVisible.length ; i++){
            if(item == checkboxes[i]){
               noVisible[i].style.display = 'none';
               yesVisible[i].style.display = 'inline';
               item.value = 'on';
            }
         }
         
         var newValue = this.value;
         localStorage.setItem('inputValue', newValue);
         
      }
   });
   
  });

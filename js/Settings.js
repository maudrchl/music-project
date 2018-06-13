const colorPicker = document.querySelector('.color_choice')
const colorLabel = document.querySelector('.label_color')
newColor = colorPicker.value

colorPicker.addEventListener('change', () => {
    newValue = colorPicker.value
    colorLabel.innerHTML = newValue
})



// checkbox acting like radio

$("input:checkbox").on('click', function() {
    // in the handler, 'this' refers to the box clicked on
    var $box = $(this);
    if ($box.is(":checked")) {
      // the name of the box is retrieved using the .attr() method
      // as it is assumed and expected to be immutable
      var group = "input:checkbox[name='" + $box.attr("name") + "']";
      // the checked state of the group/box on the other hand will change
      // and the current value is retrieved using .prop() method
      $(group).prop("checked", false);
      $box.prop("checked", true);
    } else {
      $box.prop("checked", false);
    }
  });

// checked even if it is refreshed
const checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
      $checkboxes = $(".checkbox-container :checkbox");

$checkboxes.on("change", function(){
  $checkboxes.each(function(){
    checkboxValues[this.id] = this.checked;
  });
  
  localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
});

// On page load
$.each(checkboxValues, function(key, value) {
  $("#" + key).prop('checked', value);
});
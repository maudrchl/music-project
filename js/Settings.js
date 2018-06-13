const colorPicker = document.querySelector('.color_choice')
const colorLabel = document.querySelector('.label_color')
const colorPicker2 = document.querySelector('.color_choice2')
const colorLabel2 = document.querySelector('.label_color2')
const colorPicker3 = document.querySelector('.color_choice3')
const colorLabel3 = document.querySelector('.label_color3')

newColor = colorPicker.value
newColor2 = colorPicker2.value
newColor3 = colorPicker3.value

colorPicker.addEventListener('change', () => {
    newValue = colorPicker.value
    colorLabel.innerHTML = newValue
})

colorPicker2.addEventListener('change', () => {
  newValue2 = colorPicker2.value
  colorLabel2.innerHTML = newValue2
})

colorPicker3.addEventListener('change', () => {
  newValue3 = colorPicker3.value
  colorLabel3.innerHTML = newValue3
})

const $submit = document.querySelector('.submit_color')

$submit.addEventListener('click',() =>
{
  let colorPad = colorPicker.value;
  localStorage.setItem("colorPad", colorPad);
  colorPad = localStorage.getItem("colorPad")
  colorPicker.value = colorPad

  let colorPad2 = colorPicker2.value;
  localStorage.setItem("colorPad2", colorPad2);

  let colorPad3 = colorPicker3.value;
  localStorage.setItem("colorPad3", colorPad3);
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
function redirectOnChange() {
  var selectElement = document.getElementById("nom");
  var selectedValue = selectElement.options[selectElement.selectedIndex].text;
  var new_path =
    new URL(window.location.href).pathname +
    "?page=delete_produit&sel=" +
    selectedValue;
  window.location.href = new_path;
}


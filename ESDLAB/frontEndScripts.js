/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function showInsert(){
	document.getElementById("newItemForm").style.display="block";
	document.getElementById("deleteForm").style.display="none";
	document.getElementById("updateForm").style.display="none";
	document.getElementById("backupForm").style.display="none";
}
function showDelete(){
	document.getElementById("newItemForm").style.display="none";
	document.getElementById("deleteForm").style.display="block";
	document.getElementById("updateForm").style.display="none";
	document.getElementById("backupForm").style.display="none";
}
function showUpdate(){
	document.getElementById("newItemForm").style.display="none";
	document.getElementById("deleteForm").style.display="none";
	document.getElementById("updateForm").style.display="block";
	document.getElementById("backupForm").style.display="none";
}
function showBackup(){
	document.getElementById("newItemForm").style.display="none";
	document.getElementById("deleteForm").style.display="none";
	document.getElementById("updateForm").style.display="none";
	document.getElementById("backupForm").style.display="block";
}
function showCheckout(){
	document.getElementById("checkoutForm").style.display="block";
	document.getElementById("returnForm").style.display="none";
}
function showReturn(){
	document.getElementById("checkoutForm").style.display="none";
	document.getElementById("returnForm").style.display="block";
}

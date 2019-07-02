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
	document.getElementById("restoreForm").style.display="none";
}
function showDelete(){
	document.getElementById("newItemForm").style.display="none";
	document.getElementById("deleteForm").style.display="block";
	document.getElementById("updateForm").style.display="none";
	document.getElementById("backupForm").style.display="none";
	document.getElementById("restoreForm").style.display="none";
}
function showUpdate(){
	document.getElementById("newItemForm").style.display="none";
	document.getElementById("deleteForm").style.display="none";
	document.getElementById("updateForm").style.display="block";
	document.getElementById("backupForm").style.display="none";
	document.getElementById("restoreForm").style.display="none";
}
function showBackup(){
	document.getElementById("newItemForm").style.display="none";
	document.getElementById("deleteForm").style.display="none";
	document.getElementById("updateForm").style.display="none";
	document.getElementById("backupForm").style.display="block";
	document.getElementById("restoreForm").style.display="none";
}function showRestore(){
	document.getElementById("newItemForm").style.display="none";
	document.getElementById("deleteForm").style.display="none";
	document.getElementById("updateForm").style.display="none";
	document.getElementById("backupForm").style.display="none";
	document.getElementById("restoreForm").style.display="block";
}
function showCheckout(){
	document.getElementById("checkoutForm").style.display="block";
	document.getElementById("returnForm").style.display="none";
}
function showReturn(){
	document.getElementById("checkoutForm").style.display="none";
	document.getElementById("returnForm").style.display="block";
}

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}


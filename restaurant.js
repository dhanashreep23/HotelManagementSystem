// Will open order.php page
function redirectToOrderPage() {
  window.location.href = 'http://localhost/signup/order.php';
}
// Will open menu.html page
document.getElementById("openHome").addEventListener("click", function() {
  window.location.href = "restaurant.html"; 
});
// Will open login.html page
document.getElementById("openDetails").addEventListener("click", function() {
  window.location.href = 'http://localhost/signup/signup1.php'; 
});

// For expert services
// Menu card opens
document.getElementById("menuCard").addEventListener("click", function() {
  window.location.href = 'menu.html'; 
});
document.getElementById("serviceCard").addEventListener("click", function() {
  window.location.href = 'services.html'; 
});
document.getElementById("aboutCard").addEventListener("click", function() {
  window.location.href = 'about.html #about'; 
});
document.getElementById("reviewCard").addEventListener("click", function() {
  window.location.href = '#reviews'; 
});
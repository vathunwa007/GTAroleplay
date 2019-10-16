function startTime() {

  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML =
  h + ":" + m + ":" + s;

  var t = setTimeout(startTime, 500);
  var m_names = ["January", "February", "March",
  "April", "May", "June", "July", "August", "September",
  "October", "November", "December"];

  var d_names = ["Sunday","Monday", "Tuesday", "Wednesday",
  "Thursday", "Friday", "Saturday"];

  var myDate = new Date();
  myDate.setDate(myDate.getDate()+7);
  var curr_date = myDate.getDate()-7;
  var curr_month = myDate.getMonth();
  var curr_day  = myDate.getDay();
document.getElementById('date').innerHTML = d_names[curr_day] + "," + " " +curr_date+" "+ m_names[curr_month];
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;

}
//-----------------------------------------
function goBack() {
window.history.back();
}

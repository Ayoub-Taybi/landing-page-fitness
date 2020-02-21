/*------ export excel ----------------*/
var tableToExcel = (function() {
    var uri = 'data:application/vnd.ms-excel;base64,'
      , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
      , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
      , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
    return function(table, name) {
      if (!table.nodeType) table = document.getElementById(table)
      var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
      window.location.href = uri + base64(format(template, ctx))
    }
  })()

/*------ menu toggle ----------------*/
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

/*------------ notification ------------*/
var title=document.getElementById("title-notification");
var paragraph=document.getElementById("paragraph-notification");
var time=document.getElementById("time-notification");

title.onkeypress=function(){
  document.getElementsByClassName("title-notification")[0].innerHTML=title.value;
}

paragraph.onkeypress=function(){
  document.getElementsByClassName("paragraph-notification")[0].innerHTML=paragraph.value;
}

time.onkeypress=function(){
  document.getElementsByClassName("time-notification")[0].innerHTML=time.value;
}
/*----------------- upload image --------------------*/
window.addEventListener('load', function() {
  document.querySelector('input[type="file"]').addEventListener('change', function() {
      if (this.files && this.files[0]) {
          var img = document.getElementsByClassName('img-notification')[0];  // $('img')[0]
          img.src = URL.createObjectURL(this.files[0]); // set src to blob url
          img.onload = imageIsLoaded;
          
      }
  });
});


/*-------------- notification ------------------*/
var notif=document.getElementsByClassName("notification-item")[0];
if(notif.dataset.show=="true"){
    setTimeout(function(){
    notif.style.visibility="visible";
    deletenotif();
 },notif.dataset.delay);
}
 function deletenotif(){
    setTimeout(() => {
      notif.style.visibility="hidden";
 }, notif.dataset.rest);
 }        

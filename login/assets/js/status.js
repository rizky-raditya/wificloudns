$(if advert-pending=='yes')
var popup='';function focusAdvert(){if(window.focus)popup.focus();}
function openAdvert(){popup=open('$(link-advert)','hotspot_advert','');setTimeout("focusAdvert()",1000);}
$(endif)
function openLogout(){if(window.name!='hotspot_status')return true;open('$(link-logout)?erase-cookie=1','hotspot_logout','toolbar=0,location=0,directories=0,status=0,menubars=0,resizable=1,width=280,height=250');window.close();return false;}
function readablizeBytes(bytes){var s=['bytes','kb','MB','GB','TB','PB'];var e=Math.floor(Math.log(bytes)/Math.log(1000));return(bytes/Math.pow(1000,Math.floor(e))).toFixed(2)+" "+s[e];}

function PopUp(url, name, h, w, s){
leftPos = 0

  if (name.document) {
    name.document.location.href = url;
  }
  else {
    popup = window.open(url,name,"height="+h+",width="+w+",scrollbars="+s+",screenX=0,screenY=0,left="+leftPos+",top=0,resizable=1");
    popup.focus()
  }
}

function PopUpNoResize(url, name, h, w, s){
leftPos = 0

  if (name.document) {
    name.document.location.href = url;
  }
  else {
    popup = window.open(url,name,"height="+h+",width="+w+",scrollbars="+s+",screenX=0,screenY=0,left="+leftPos+",top=0,resizable=0");
    popup.focus()
  }
}

function PopUpFloorPlan(url, name, h, w, s){
leftPos = 0
  if (name.document) {
    name.document.location.href = url;
  }
  else {
    popup = window.open(url,name,"height="+h+",width="+w+",scrollbars="+s+",screenX=0,screenY=0,left="+leftPos+",top=0,resizable=1");
    popup.focus()
  }
}

function PopUpLotMap(url, name, h, w, s){
leftPos = 0
  if (name.document) {
    name.document.location.href = url;
  }
  else {
    popup = window.open(url,name,"height="+h+",width="+w+",scrollbars="+s+",screenX=0,screenY=0,left="+leftPos+",top=0,resizable=1");
    popup.focus()
  }
}


function PopUpLarger(url, name, h, w, s){
leftPos = 0
if (screen){
//needed to add a little more to offset the window a little from the edge
leftPos = screen.width-407
}
  if (name.document) {
    name.document.location.href = url;
  }
  else {
    popup = window.open(url,name,"height="+h+",width="+w+",scrollbars="+s+",screenX=0,screenY=0,left="+leftPos+",top=0,resizable=0");
    popup.focus()
  }
}


function PopUpCentered(mypage,myname,w,h,scroll){
	var win= null;
	var winl = (screen.width-w)/2;
	var wint = (screen.height-h)/2;
	var settings ='height='+h+',';
	settings +='width='+w+',';
	settings +='top='+wint+',';
	settings +='left='+winl+',';
	settings +='scrollbars='+scroll+',';
	settings +='resizable=no';
	win=window.open(mypage,myname,settings);
	win.focus();
}



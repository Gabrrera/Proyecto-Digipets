
function CrearMeet(){
    var murl = window.location.origin + "/meeting.html?mid=" +  (new Date()).getTime();
    //$('#meetingid').attr('href',murl).text(murl);
    console.log(murl);
    return(murl);
};


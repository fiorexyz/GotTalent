var video = false;

function show(id){
    console.log(id);
    var col = document.getElementById(id).style.display = "block";
}

function hide(id){
    document.getElementById(id).style.display = "none";
}

function changeTalentInput(){
    document.getElementById('talentIMG').style.display = video ? "flex" : "none";
    document.getElementById('talentVIDEO').style.display = video ? "none" : "flex";
    video = !video;
}

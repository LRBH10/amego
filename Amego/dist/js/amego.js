// Activates the Carousel
$('.carousel').carousel({
  interval: 5000
})

// Activates Tooltips for Social Links
$('.tooltip-social').tooltip({
  selector: "a[data-toggle=tooltip]"
})

function calculeVolume()
{
    var volume=0;
    //Armoire    
    volume += parseInt(document.getElementById("inArmoire1porte").value) * 1;
    volume += parseInt(document.getElementById("inArmoire2porte").value) * 2;
    volume += parseInt(document.getElementById("inArmoire3porte").value) * 3;
    volume += parseInt(document.getElementById("inArmoire4porte").value) * 4;
    //Canapé
    volume += parseInt(document.getElementById("inCanape1place").value) * 1;
    volume += parseInt(document.getElementById("inCanape2place").value) * 2;
    volume += parseInt(document.getElementById("inCanape3place").value) * 3;
    volume += parseInt(document.getElementById("inCanape4place").value) * 5;
    //Buffet
    volume += parseInt(document.getElementById("inBuffetHaut").value) * 1;
    volume += parseInt(document.getElementById("inBuffetBas").value) * 1;
    //Living 
    volume += parseInt(document.getElementById("inLiving").value) * 3;
    //Meuble TV
    volume += parseInt(document.getElementById("inMeubleTv").value) * 1;
    //Vaisselier
    volume += parseInt(document.getElementById("inVaisselier").value) * 2;
    //Meuble cuisine    
    volume += parseInt(document.getElementById("inCusineHaut").value) * 1;
    volume += parseInt(document.getElementById("inCusineHaut").value) * 1;
    //Matlas + Sommier
    volume += parseInt(document.getElementById("inMatela1place").value) * 1;
    volume += parseInt(document.getElementById("inMatela2place").value) * 1;
    volume += parseInt(document.getElementById("inSommier1place").value) * 1;
    volume += parseInt(document.getElementById("inSommier2place").value) * 1;
    //TV
    volume += parseInt(document.getElementById("inPetiteTv").value) * 1;
    volume += parseInt(document.getElementById("inMoyenneTv").value) * 1;
    volume += parseInt(document.getElementById("inGrandeTv").value) * 1;
    volume += parseInt(document.getElementById("inOrdinateur").value) * 1;
    //Velo
    volume += parseInt(document.getElementById("inVeloAdulte").value) * 1;
    volume += parseInt(document.getElementById("inVeloEnfant").value) * 1;
    volume += parseInt(document.getElementById("inVeloAppartement").value) * 1;
    //Commode + Chevet
    volume += parseInt(document.getElementById("inCommode").value) * 1;
    volume += parseInt(document.getElementById("inChevet").value) * 1;
    //Bureau
    volume += parseInt(document.getElementById("inBurreauSimple").value) * 1;
    volume += parseInt(document.getElementById("inBurreauAngle").value) * 2;
    //Table
    volume += parseInt(document.getElementById("inTableManger").value) * 2;
    volume += parseInt(document.getElementById("inTableBase").value) * 1;
    //Chaise
    volume += parseInt(document.getElementById("inChaise").value) * 0.2;
    volume += parseInt(document.getElementById("inChaisePliante").value) * 0.5;
    //Etagiere
    volume += parseInt(document.getElementById("inEtagiere").value) * 1;
    //Lave ligne + veselle + seche ligne + Frigo
    volume += parseInt(document.getElementById("inLaveLigne").value) * 1;
    volume += parseInt(document.getElementById("inLaveVaisselle").value) * 1;
    volume += parseInt(document.getElementById("inSecheLinge").value) * 1;
    volume += parseInt(document.getElementById("inFrigo").value) * 1;
    volume += parseInt(document.getElementById("inCuisiniere").value) * 1;
    //Piano + Coffre fort
    volume += parseInt(document.getElementById("inPianoDroit").value) * 2;
    volume += parseInt(document.getElementById("inPianoQueue").value) * 3;
    volume += parseInt(document.getElementById("inCoffreFort").value) * 1;
    //Stature + Miroire + Luminaire
    volume += parseInt(document.getElementById("inStatue").value) * 1;
    volume += parseInt(document.getElementById("inMiroir").value) * 1;
    volume += parseInt(document.getElementById("inLuminaire").value) * 1;
    //Carton
    volume += parseInt(document.getElementById("inCarton").value) * 0.5;
    
    document.getElementById("volumeVal").innerHTML=volume;
    if(volume < 0)
        document.getElementById("calculatedVolume").value = volume;
}
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<!-- the html element where to put the paper -->
<div id="paper2"></div>

<!-- a script that create's a paper and a rectangle -->
<script type="text/javascript">
  var paper = Raphael("paper2", 800, 800);


  var font = {font: "17px 'Fontin Sans', Fontin-Sans, Cursive", fill: "white"}
  var font2 = {font: "17px 'Fontin Sans', Fontin-Sans, Cursive", fill: "black"}

  var pie = paper.piechart(330, 330, 300, [25, 75], {colors:["#a2bf2f","#2f69bf"],legendpos:"south",legend: ["Client", "Amego"], startFromFixedAngle: 90});


  var text3 = paper.text(215, 150, "Emballage  des\n articles  non  fragiles \n(Linge plier, livres, DVD...)  ").attr(font);
  var text3 = paper.text(215, 240, "Les effets personnels ").attr(font);

  var text1 = paper.text(420, 100, "Emballage de la \n vaisselles  fragiles  ").attr(font2);
  var text21 = paper.text(450, 150, "Mise en penderie des \nvêtements sur cintre  ").attr(font2);
  var text2 = paper.text(470, 210, "Emballage des objets fragiles \n( cadre, miroir, tableau ...) ").attr(font2);
  
  var text22 = paper.text(470, 270, "Protection et conditionnnement\n  du mobilier").attr(font2);
  var text23 = paper.text(320, 380, "Protection sous hausse des sommiers, matelas, canapés, fauteuils ...  ").attr(font2);
  
  var text4 = paper.text(300, 430, "Demontage  des  meubles imposant ( lit , dressing, living ...) ").attr(font2);
  
  var text25 = paper.text(430, 500, "Démarche pour autorisation\n de stationnement  ").attr(font2);
  
  
  var text24 = paper.text(470, 320, "Manutention, transport encamion\n capitonné  ").attr(font2);
  
  var text26 = paper.text(200, 500, "Livraison des \ncartons + adhesifs  ").attr(font2);



  
  pie.hover(function() {
    this.sector.stop();
    this.sector.scale(1.1, 1.1, this.cx, this.cy);

    if (this.label) {
      this.label[0].stop();
      this.label[0].attr({r: 7.5});
      this.label[1].attr({"font-weight": 800});
    }
  }, function() {
    this.sector.animate({transform: 's1 1 ' + this.cx + ' ' + this.cy}, 500, "bounce");

    if (this.label) {
      this.label[0].animate({r: 5}, 500, "bounce");
      this.label[1].attr({"font-weight": 400});
    }
  });
</script>
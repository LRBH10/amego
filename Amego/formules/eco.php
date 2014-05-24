<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<!-- the html element where to put the paper -->
<div id="paper1"></div>

<!-- a script that create's a paper and a rectangle -->
<script type="text/javascript">
  var paper = Raphael("paper1", 800, 800);


  var font = {font: "17px 'Fontin Sans', Fontin-Sans, Cursive", fill: "black"}
  var font2 = {font: "17px 'Fontin Sans', Fontin-Sans, Cursive", fill: "white"}

  var pie = paper.piechart(330, 330, 300, [55, 45], {colors:["#a2bf2f","#2f69bf"],legendpos:"south",legend: ["Client", "Amego"], startFromFixedAngle: 90});


  var text1 = paper.text(450, 150, "Emballage de la \n vaisselles  fragiles  ").attr(font);
  var text2 = paper.text(460, 250, "Emballage des \nobjets fragiles\n ( cadre, miroir, tableau ...) ").attr(font);
  var text3 = paper.text(460, 350, "Emballage integral des\n articles  non  fragiles \n(Linge plier, livres, DVD...)  ").attr(font);
  var text4 = paper.text(460, 450, "Demontage  des \n meubles imposant \n( lit , dressing, living ...) ").attr(font);



  var text21 = paper.text(215, 130, "Mise en penderie des \nvêtements sur cintre  ").attr(font2);
  var text22 = paper.text(200, 190, "Protection et conditionnnement\n  du mobilier").attr(font2);
  var text23 = paper.text(187, 260, "Protection sous hausse des somm-\niers, matelas, canapés, fauteuils ...  ").attr(font2);
  var text24 = paper.text(180, 320, "Manutention, transport encamion\n capitonné  ").attr(font2);
  var text25 = paper.text(180, 390, "Démarche pour autorisation\n de stationnement  ").attr(font2);
  var text26 = paper.text(170, 460, "Livraison des \ncartons + adhesifs  ").attr(font2);



  
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
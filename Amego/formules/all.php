<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
  <div class="col-md-4">
    <div id="eco" ></div>
    <a class="btn btn-default"  href="./formules.php#formule_eco"/> plus de détails </a>
  </div>
  <div class="col-md-4">
    <div id="sta" ></div>
    <a class="btn btn-default"  href="./formules.php#formule_standard"/> plus de détails </a>
  </div>
  <div class="col-md-4">
    <div id="vip" ></div>
    <a class="btn btn-default"  href="./formules.php#formule_luxe"/> plus de détails </a>
  </div>
  
  
</div>

<script type="text/javascript">
  var paper = Raphael("vip", 300, 300);

  var pie = paper.piechart(150, 150, 100, [5, 95], {colors: [ "#a2bf2f","#2f69bf"], startFromFixedAngle: 90});

  paper.text(135, 75, "Client  ").attr({ font: "15px 'Fontin Sans', Fontin-Sans, Cursive" }).rotate("70");
  paper.text(150, 175, "Amego  ").attr({ font: "20px 'Fontin Sans', Fontin-Sans, Cursive" });
  
  paper.text(150, 30, "Formule Complète").attr({ font: "20px 'Fontin Sans', Fontin-Sans, Cursive" });

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

  var paper = Raphael("sta", 300, 300);

  var pie = paper.piechart(150, 150, 100, [25, 75], {colors: ["#a2bf2f","#2f69bf"], startFromFixedAngle: 90});
  paper.text(150, 30, "Formule Standard").attr({ font: "20px 'Fontin Sans', Fontin-Sans, Cursive" });
  
  paper.text(105, 125, "Client  ").attr({ font: "20px 'Fontin Sans', Fontin-Sans, Cursive" });
  paper.text(150, 175, "Amego  ").attr({ font: "20px 'Fontin Sans', Fontin-Sans, Cursive" });

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


  var paper = Raphael("eco", 300, 300);

  var pie = paper.piechart(150, 150, 100, [45,55], {colors: ["#2f69bf","#a2bf2f"], startFromFixedAngle: 90});

  paper.text(150, 30, "Formule Economique").attr({ font: "20px 'Fontin Sans', Fontin-Sans, Cursive" });

  paper.text(100, 150, "Amego  ").attr({ font: "20px 'Fontin Sans', Fontin-Sans, Cursive" }); 
  paper.text(200, 150, "Client  ").attr({ font: "20px 'Fontin Sans', Fontin-Sans, Cursive" });
  
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
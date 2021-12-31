function myFunction() {
    var link = document.getElementById("um");
    var segments = link.href.split('/');
    var currentStyle = segments[segments.length - 1];
    var style =  (currentStyle == 'styl_1.scss') ? 'styl_2.scss' 
                                                     : 'styl_1.scss';
    document.getElementById("um").href = style + ".scss"
  }

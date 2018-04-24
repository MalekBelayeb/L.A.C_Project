
        
function countdown()
{
    var now = new Date();
    var eventDate = new Date(<?php echo substr($donnes['date_ev'],0,4); ?>, <?php  echo substr($donnes['date_ev'],5,2); ?>, <?php echo substr($donnes['date_ev'],8,2);   ?>);

    var currenTiime = now.getTime();
    var eventTiime = eventDate.getTime();

    var remTime = eventTiime - currenTiime;

    var s = Math.floor(remTime /1000);
    var m = Math.floor(s/60);
    var h = Math.floor(m/60);
    var d = Math.floor(h/24)-30;


    h %= 24;
    m %= 60;
    s %= 60;

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;


    document.getElementById('days<?php  echo $donnes['id_ev']; ?>').textContent = d;
    document.getElementById('hours<?php  echo $donnes['id_ev']; ?>').textContent = h;
    document.getElementById('minutes<?php  echo $donnes['id_ev']; ?>').textContent = m;
    document.getElementById('secondes<?php  echo $donnes['id_ev']; ?>').textContent = s;



    setInterval(countdown,1000); 
}
//substr — Return part of a string
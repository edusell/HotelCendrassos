<div class='sidebar'>
  <?php
    $r = $_REQUEST['r'];
    
  ?>
        <a href="index.php?r=admin" class='menuesquerra <?php if($r=='admin'){print 'actiu';} ?>'>&nbsp&nbsp<img src="logos/admin_icon/panell.png" width='25px'><div>&nbsp&nbsp PANELL</div></a>
        <a href="index.php?r=adminusuari" class='menuesquerra <?php if($r=='adminusuari'){print 'actiu';} ?>'>&nbsp&nbsp<img src="logos/admin_icon/people.png" width='25px'><div>&nbsp&nbsp USUARIS</div></a>
        <a href="index.php?r=adminreserva" class='menuesquerra <?php if($r=='adminreserva'){print 'actiu';} ?>'>&nbsp&nbsp<img src="logos/admin_icon/reserves.png" width='25px'><div>&nbsp&nbsp RESERVES</div></a>
        <a href="index.php?r=admincalendari" class='menuesquerra <?php if($r=='admincalendari'){print 'actiu';} ?>'>&nbsp&nbsp<img src="logos/admin_icon/calendari.png" width='25px'><div>&nbsp&nbsp CALENDARI</div></a>
        <a href="index.php?r=adminhabitacio" class='menuesquerra <?php if($r=='adminhabitacio'){print 'actiu';} ?>'>&nbsp&nbsp<img src="logos/admin_icon/room.png" width='25px'><div>&nbsp&nbsp HABITACIONS</div></a>
      </div>
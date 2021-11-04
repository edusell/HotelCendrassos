<?php
   include 'roladmin.php';
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="admin.css"rel="stylesheet" type="text/css">
      <title>Admin</title>
   </head>
   <body>
      <?php include('menu.php') ?>
      <?php include('sidebar.php') ?>
      <div class='pagina'>
         <table class='taulacalendari'>
            <tr>
               <td>
               <P>GENER</P>
                        <table id='gener' class=mes>
                        </table>
               </td>
               <td>
               <P>FEBRER</P>
                        <table id='febrer' class=mes>
                        </table>
               </td>
               <td>
               <P>MARÇ</P>
                        <table id='marc' class=mes>
                        </table>
               </td>
               <td>
               <P>ABRIL</P>
                        <table id='abril' class=mes>
                        </table>
               </td>
            </tr>
            <tr>
            <td>
               <P>MAIG</P>
                        <table id='maig' class=mes>
                        </table>
               </td>
               <td>
               <P>JUNY</P>
                        <table id='juny' class=mes>
                        </table>
               </td>
               <td>
               <P>JULIOL</P>
                        <table id='juliol' class=mes>
                        </table>
               </td>
               <td>
               <P>AGOST</P>
                        <table id='agost' class=mes>
                        </table>
               </td>
            </tr>
            <tr>
            <td>
               <P>SEPTEMBRE</P>
                        <table id='septembre' class=mes>
                        </table>
               </td>
               <td>
               <P>OCTUBRE</P>
                        <table id='octubre' class=mes>
                        </table>
               </td>
               <td>
               <P>NOVEMBRE</P>
                        <table id='novembre' class=mes>
                        </table>
               </td>
               <td>
               <P>DESEMBRE</P>
                        <table id='desembre' class=mes>
                        </table>
               </td>
            </tr>
         </table>
      </div>
      <script>
         var m=1;
         var arr=<?= json_encode($arraycalendari) ?>;
         var mes = ['gener','febrer','marc','abril','maig','juny','juliol','agost','septembre','octubre','novembre','desembre'];
         var dies = ['31','28','30','31','30','31','30','31','30','31','30','31'];
         var row;
         var boto;
         
         
         
         for(var m=0;m<12;m++){
         var dia=1;
         var table = document.getElementById(mes[m]);
         
         for(var i =0;i<5;i++){
             var  row = table.insertRow(-1);
                 for(var z=0;z<7;z++){
                     if(arr[m][dia]==0){
                         var cell1 = row.insertCell(-1);
                         boto = "<button class='butcalendari' data-dia='"+m+','+dia+"' onclick='calendari("+m+','+dia+")'>"+dia+"</button>";
                         cell1.innerHTML = boto;
                     } else if(arr[m][dia]==1){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "red";
                         boto = "<button class='butcalendari' data-dia='"+m+','+dia+"' onclick='calendari("+m+','+dia+")'>"+dia+"</button>";
                         cell1.innerHTML = boto;
                     }
                     else if(arr[m][dia]==2){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "#c9c9c9";
                         boto = "<button class='butcalendari' data-dia='"+m+','+dia+"' onclick='calendari("+m+','+dia+")'>"+dia+"</button>";
                         cell1.innerHTML = boto;
                     }
                     else if(arr[m][dia]==3){
                         var cell1 = row.insertCell(-1);
                         cell1.style.backgroundColor = "#8f8f8f";
                         boto = "<button class='butcalendari' data-dia='"+m+','+dia+"' onclick='calendari("+m+','+dia+")'>"+dia+"</button>";
                         cell1.innerHTML = boto;
                     }
                     dia++;
                 }
             }
         }
         
         function calendari( mes,  dia){
            console.log(mes +','+dia);
         }    
         
         
      </script>
   </body>
</html>
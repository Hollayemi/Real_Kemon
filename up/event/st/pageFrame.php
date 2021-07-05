
      
     <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd !important;
}
</style>
      </head>

      <?php 
      $Pict=sizeof($Mypic)-1;
      for ($i=$Pict; $i >= 0; $i--){
        if(array_key_exists("$i'_delete'", $_POST)){
         $i.'_delete'();
        }

        
        // $funced = "function {$i}_delete(){
            
        //     yessss

        // } ";
        // eval($funced());

        
        ?>
        <table>
        <tr>
        
        <td class="pic-td"><a href="<?php echo $Mypic[$i] ?>"><img src="<?php echo $Mypic[$i] ?>" alt="err" class="main-td-pic"></a></td>
        <?php
        $txt = strlen( $Mycap[$i]);
        $MyRealpic =  $Mycap[$i];
        $ti = explode('_This was uploaded on_',$Mycap[$i]);

        $tim =  $ti[1];
        $timi=explode('`for`',$ti[1]);
        $time = $timi[0];

        if($txt < 230){
        echo '<td class="cap-td">'.$ti[0].'"<br><br>"'.$time.'</td>';
        }else{
          $remo = substr($Mycap[$i],0,230);
          echo '
          <style>
          #more'.$i.'{display:none;}
          button{
            height:25px !important;
          }
        </style>
          <td class="cap-td" style="max-width:20% !important"><p><span id="remo'.$i.'">'.$remo.'</span> <span id="dots'.$i.'">...</span><span id="more'.$i.'">'.$ti[0].'</span></p><br>
           <button onclick="myFunction'.$i.'()" id="myBtn'.$i.'"class="readMoreBtn">Read more</button><br><br>'.$time;
        }
          echo '
          <div style="display:flex;padding:5px">
            <h4 id="media'.$i.'a" style="display:none"><a href=""><i class="anime fir fa fa-whatsapp"></a></i></h4>
            <h4 id="media'.$i.'b" style="display:none"><a href=""><i class="anime sec fa fa-facebook"></a></i></h4>
            <h4 id="media'.$i.'c" style="display:none"><a href=""><i class="anime thr fa fa-instagram"></a></i></h4>
          </div>
          <button id="share" onclick="myShare'.$i.'()" class="readMoreBtn shareBtn">Share <i class="fa fa-share"></i></button>><br><br><br>';

          if ($user_id == $myVisitor){
            echo '<form action="../st/myAction.php" method="GET">
             <input type="text" style="border:none;background-color:#fff; display:none;" disabled="true" name="text'.$i.'" value="'.$Mypic[$i].'"><br><br>
             <input type="submit" name="deleteNo'.$i.'" class="readMoreBtn deleteBtn" value="Delete">
           </form>
            ';}
          echo '
          </td>
          <hr>
          <script>
          function myFunction'.$i.'() {
            var remo = document.getElementById("remo'.$i.'");
            var dots = document.getElementById("dots'.$i.'");
            var moreText = document.getElementById("more'.$i.'");
            var btnText =document.getElementById("myBtn'.$i.'");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more"; 
                moreText.style.display = "none";
                remo.style.display = "inline";
              } else {
                  dots.style.display = "none";
                  btnText.innerHTML = "Read less"; 
                  moreText.style.display = "inline";
                  remo.style.display = "none";
                }
            }
            function myShare'.$i.'(){
              var media'.$i.'a = document.getElementById("media'.$i.'a");
              var media'.$i.'b = document.getElementById("media'.$i.'b");
              var media'.$i.'c = document.getElementById("media'.$i.'c");
              if (media'.$i.'a.style.display === "none"){
                media'.$i.'a.style.display = "block"
                media'.$i.'b.style.display = "block"
                media'.$i.'c.style.display = "block"
              }else{
                media'.$i.'a.style.display = "none"
                media'.$i.'b.style.display = "none"
                media'.$i.'c.style.display = "none"
              }
          }
      

          </script>
          
          ';
      
        ?>
        <td class="amt-td">&#x20A6 <?php echo $timi[1] ?></td>
        </tr>
        <?php
      }
        ?>
        </table>
        
    </div>
    
  </section>
  </div>
  </div>
        <script>
        function toggleNav(){
          document.querySelector(".holla").classList.toggle("navbar--open");
        }
        function myFunction() {
            var newPageName = document.getElementById("newPageName"); 
            var newPageDis = document.getElementById("newPageDis");           
    
            if (newPageName.style.display === "none"){
                newPageName.style.display = "block";
                newPageButton.style.display = "block";
             
            } else {
                newPageName.style.display = "none";
                newPageButton.style.display = "none";
      }
    }
    
    function showLinks(){
        document.querySelector(".closeLink").classList.toggle("tab-sec");
        document.querySelector(".body").classList.toggle("bodymi");

        var shwLnk = document.getElementById('shwLnk');
        if(shwLnk.style.display=="block"){
          shwLnk.style.display="none"
        }else{
          shwLnk.style.display="block"
        }
    }
    


    document.querySelector('.showSideLinks').addEventListener('click', function(){
      if(document.querySelector('.sec-mainDiv').style.marginLeft!="70%"){
        document.querySelector('.sec-mainDiv').style.marginLeft="70%"
        document.querySelector('.sub-menuDiv').style.visibility="visible"
        document.querySelector('.sub-menuDiv').style.opacity="1"
        document.querySelector('.menu-fa2').style.transform="scale(1)"
        document.querySelector('.menu-fa1').style.transform="scale(0)"
      
      }else{
        document.querySelector('.sec-mainDiv').style.marginLeft="0%"
        document.querySelector('.sub-menuDiv').style.visibility="hidden"
        document.querySelector('.sub-menuDiv').style.opacity="0"
        document.querySelector('.menu-fa2').style.transform="scale(0)"
        document.querySelector('.menu-fa1').style.transform="scale(1)"
      }
    })
</script>

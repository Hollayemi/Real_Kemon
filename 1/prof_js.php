<script>
  const entries =  document.getElementById('entries')
  document.querySelector('.knownAs').addEventListener("click", function(){
  if(entries.style.height == "1px"){
     entries.style.height = "300px"
     entries.style.overflow = "auto"
     document.querySelector('.firstArr').style.transform ="scale(-1)";
     document.querySelector('.firstArr').style.marginTop = "-16px"; 
  }else{
    entries.style.height = "0px";
    document.querySelector('.firstArr').style.transform = "scale(1)";
    document.querySelector('.firstArr').style.marginTop = "-38px"; 
  }
})

const inactiveLinks =  document.querySelector('.inactiveLinks')
  document.querySelector('.profContact').addEventListener("click", function(){
  if(inactiveLinks.style.height == "0px"){
    inactiveLinks.style.display='block';
    inactiveLinks.style.height = "200px"
    inactiveLinks.style.overflow = "auto"
     document.querySelector('.firstArr2').style.transform ="scale(-1)";
     document.querySelector('.firstArr2').style.marginTop = "-16px"; 
  }else{
    inactiveLinks.style.height = "0px";
    document.querySelector('.firstArr2').style.transform = "scale(1)";
    document.querySelector('.firstArr2').style.marginTop = "-38px"; 
  }
})


const Customers =  document.querySelector('.myCustomers')
  document.querySelector('.Customers').addEventListener("click", function(){
  if(Customers.style.height == "0px"){
    Customers.style.display='block';
    Customers.style.height = "50px"
    Customers.style.overflow = "auto"
     document.querySelector('.firstArr3').style.transform ="scale(-1)";
     document.querySelector('.firstArr3').style.marginTop = "-16px"; 
  }else{
    Customers.style.height = "0px";
    document.querySelector('.firstArr3').style.transform = "scale(1)";
    document.querySelector('.firstArr3').style.marginTop = "-38px"; 
  }
})


const brandsCreated =  document.querySelector('.brandsCreated')
  document.querySelector('.Brands').addEventListener("click", function(){
  if(brandsCreated.style.height == "0px"){
    brandsCreated.style.display='block';
    brandsCreated.style.height = "200px"
    brandsCreated.style.overflow = "auto"
     document.querySelector('.firstArr4').style.transform ="scale(-1)";
     document.querySelector('.firstArr4').style.marginTop = "-16px"; 
  }else{
    brandsCreated.style.height = "0px";
    document.querySelector('.firstArr4').style.transform = "scale(1)";
    document.querySelector('.firstArr4').style.marginTop = "-38px"; 
  }
})


const productsCreated =  document.querySelector('.productsCreated')
  document.querySelector('.Products').addEventListener("click", function(){
  if(productsCreated.style.height == "0px"){
    productsCreated.style.display='block';
    productsCreated.style.height = "200px"
    productsCreated.style.overflow = "auto"
     document.querySelector('.firstArr5').style.transform ="scale(-1)";
     document.querySelector('.firstArr5').style.marginTop = "-16px"; 
  }else{
    productsCreated.style.height = "0px";
    document.querySelector('.firstArr5').style.transform = "scale(1)";
    document.querySelector('.firstArr5').style.marginTop = "-38px"; 
  }
})

const ratingStar =  document.querySelector('.ratingStar')
  document.querySelector('.Rating').addEventListener("click", function(){
  if(ratingStar.style.height == "0px"){
    ratingStar.style.display='block';
    ratingStar.style.height = "100px"
    ratingStar.style.overflow = "auto"
     document.querySelector('.firstArr6').style.transform ="scale(-1)";
     document.querySelector('.firstArr6').style.marginTop = "-16px"; 
  }else{
    ratingStar.style.height = "0px";
    document.querySelector('.firstArr6').style.transform = "scale(1)";
    document.querySelector('.firstArr6').style.marginTop = "-38px"; 
  }
})


      // $(function () {
      //   var rating = <?php //echo $averageStars?>;
      //   $(".rateyo-readonly-widg").rateYo({
      //     rating: rating,
      //     numStars: 5,
      //     precision: 2,
      //     minValue: 1,
      //     maxValue: 5
      //   })
      //   console.log(<?php //echo $averageStars?>)
      // });





    //   window.addEventListener('mouseup', function(event){
    //   if(event.target != document.getElementById('Profile') && event.target.parentNode != document.getElementById('Profile')){
    //     document.getElementById('Profile').style.marginLeft="-79%"
    //   }

    // })

    
      document.querySelector(".arrRight").addEventListener('click',function(){
            document.getElementById('Profile').style.marginLeft="-3%"
            document.getElementById('Profile').style.opacity="1"
            document.querySelector(".cloudCover").style.visibility="visible"
        
      });

      document.querySelector(".lArr").addEventListener('click',function(){
            document.getElementById('Profile').style.marginLeft="-79%"
            document.getElementById('Profile').style.opacity=".8"
            document.querySelector(".cloudCover").style.visibility="hidden"
        
      });
    
  
    function moveNotify(){
      if(document.querySelector(".notify").style.right != "-70px"){
        document.querySelector(".notify").style.right="-70px"
      }else{
        document.querySelector(".notify").style.right="0px"
      }
    }
  </script>
  <script>
    function readURLProfile(input) {    
        var blab = document.getElementById('blab');
            if (input.files && input.files[0]) {
                    blab.style.display = "block";
                    var reader = new FileReader();
                    reader.onload = function (e){
                        $('#agnblah')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                            };
                           reader.readAsDataURL(input.files[0]);
               }
            }
    // <input type='file' onchange="readURL(this);"/>
    // <img id="blah" src="#" alt="your image"/>

   
function readURL(input) {    

        var blab2 = document.getElementById('myblab');
        var blab = document.getElementById('secblab');
            if (input.files && input.files[0]) {
              document.querySelector('.myCme').style.display="none"
                    blab.style.display = "block";
                    blab2.style.display = "block";
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#myblab')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                            };
                           reader.readAsDataURL(input.files[0]);
               }
            }
        
  
<?php
  if(isset($_GET['alert'])){
    ?>
    window.addEventListener('mouseup', function(event){
    if(event.target != document.querySelector('.myAlertbox') && event.target.parentNode != document.querySelector('.myAlertbox')){
      document.querySelector('.mainBox').style.display='none'
      document.querySelector('.profBody').style.overflow='auto'
    }
})
<?php
  }
?>


<?php 
			if(isset($knwO)){
				?>
				window.addEventListener('mouseup', function(event){
				if(event.target != document.querySelector('.loginStatus') && event.target.parentNode != document.querySelector('.loginStatus')){
				document.querySelector('.loginStatus').style.marginTop = '-400px';
				}

			})
		<?php
			}
		?>





</script>

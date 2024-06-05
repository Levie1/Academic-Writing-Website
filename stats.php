<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
    <style>
       
     </style>
  <body onload="load()">
        <p>
        <div class="containerst">
           <div class="row">
           </div>
              <div class="col-sm">
                 <p id='0101' class="fs-2 text-light">6500</p>
                 <p class="text-light">Completed Assignments</p>
              </div>
              <div class="col-sm">
                 <p id='0102' class="fs-2 text-light">257</p>
                 <p class="text-light">Qualified Writers</p>
           </div>
           <div class="col-sm">
              <p class="fs-2 text-light"><span id='0103'>5000</span></p>
              <p class = "text-light align-content-center"><h5>Satisfied Customers</p>
           </div>
        </div>
     </div>
     </p>
     <script>
        function animate(obj, initVal, lastVal, duration) {
           let startTime = null;
  
        //get the current timestamp and assign it to the currentTime variable
        let currentTime = Date.now();
  
        //pass the current timestamp to the step function
        const step = (currentTime ) => {
  
        //if the start time is null, assign the current time to startTime
        if (!startTime) {
           startTime = currentTime ;
        }
  
        //calculate the value to be used in calculating the number to be displayed
        const progress = Math.min((currentTime - startTime)/ duration, 1);
  
        //calculate what to be displayed using the value gotten above
        obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);
  
        //checking to make sure the counter does not exceed the last value (lastVal)
        if (progress < 1) {
           window.requestAnimationFrame(step);
        } else {
              window.cancelAnimationFrame(window.requestAnimationFrame(step));
           }
        };
        //start animating
           window.requestAnimationFrame(step);
        }
        let text1 = document.getElementById('0101');
        let text2 = document.getElementById('0102');
        let text3 = document.getElementById('0103');
        const load = () => {

         animate(text1, 0, 6500, 7000);
           animate(text2, 0, 300, 300);
           animate(text3, 200, 6300, 7000);


        }
     </script>
</body>
</html>
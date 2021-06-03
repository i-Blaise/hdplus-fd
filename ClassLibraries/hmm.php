<!doctype html>
<html>
 <head>
  <!-- <script type="text/javascript" src="dist/html2canvas.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 </head>
 <body>
  <h1>Take screenshot of webpage with html2canvas</h1>
  <div class="container" id='container'>
   <img src='../form/images/Dad.png' width='100' height='100'>
   <img src='../form/images/daudad.jpg' width='100' height='100'>
  </div>
  <input type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();'><br/>
  <button id="save_image_locally">download img</button>

    <!-- Script -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <script type='text/javascript'>
  function screenshot(){
    html2canvas(document.body).then(function(canvas) {
    document.body.appendChild(canvas);
    // var dt = canvas.toDataURL('image/jpeg');
    // this.href = dt;
   });
  }
  </script>


<!-- <script>
function screenshot(){
html2canvas(document.body).then(function(canvas) {

document.body.appendChild(canvas);
var a = document.createElement(‘a’);
a.href = canvas.toDataURL(“image/jpeg”).replace(“image/jpeg”, “image/octet-stream”);
window.location.href=image; 
a.download = ‘image.jpg’;
a.click();
});
}


     </script> -->




<script>

  // $('#save_image_locally').click(function(){
  //   html2canvas($('#container'), 
  //   {
  //     onrendered: function (canvas) {
  //       var a = document.createElement('a');
        // alert('hi');
        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
  //       a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
  //       a.download = 'somefilename.jpg';
  //       a.click();
  //     }
  //   });
  // });


  function capture() {
  const capture = document.querySelector('#container')
	html2canvas(capture)
		.then(canvas => {
			document.body.appendChild(canvas)
			canvas.style.display = 'none'
			return canvas
		})
		.then(canvas => {
			const image = canvas.toDataURL('image/png').replace('image/png', 'image/octet-stream')
			const a = document.createElement('a')
			a.setAttribute('download', 'my-image.png')
			a.setAttribute('href', image)
			a.click()
			canvas.remove()
		})
}

const btn = document.querySelector('#save_image_locally')
btn.addEventListener('click', capture)

</script>

 </body>
</html>
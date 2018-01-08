<body class="hold-transition skin-blue sidebar-collapse" >
<div class="wrapper"> 
<div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
 
 	<div align="center" style="padding-top:100px">
  <img style="size:auto" src="<?php  echo base_url()  ?>avator/stu.png" >
  
  <h1>Codignator</h1>
   <div style="font-size:50px;font-weight:bold;font-style:inherit">Skin Testing</div>
  <label>Copyright 2016, Cloud Tech Software. All Rights Reserved.</label>
  <label>Contact Us -00000000</label>
 
  </div>
 			</div>
		  </div>
		</section>
         
</div>
</div>
</body>

<script>

function PrintDiv() {
            var contents = document.getElementById("dvContents").innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
			frame1.style.height = "330px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
           frameDoc.document.open();
            frameDoc.document.write(contents);
      
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();

            }, 500);
            return false;
        }
</script>

</script>

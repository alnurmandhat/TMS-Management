<?php
include_once("header.php");
?>
<link rel="stylesheet" href="sider.css">

<section class="about" id="book">

    <h1 class="heading">
        <span>a</span>
        <span>b</span>
        <span>o</span>
        <span>u</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
    </h1>

    <div class="content">
            <h3>Tour & Travel Agency</h3>
            <p>Welcome to Tourism Management System!!!<br>
Since then, our courteous and committed team members have always
 ensured a pleasant and enjoyable tour for the clients. This 
  effort has enabled Shreya Tour & Travels to be recognized as a dependable 
  Travel Solutions provider with three offices Delhi. We have got packages
   to suit the discerning traveler's budget and savor. Book your dream vacation
    online. Supported quality and proposals of our travel consultants,
 we have a tendency to welcome you to decide on from holidays packages 
 and customize them according to your plan.</p><br>
 
          <h3> Privacy-policy </h3>
           <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
             praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
              excepturi sint occaecati cupiditate non provident, similique sunt in culpa 
              qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
               Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
             placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
              Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
               eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
                 maiores alias consequatur aut perferendis doloribus asperiores repellat</p><br>
    </div>

    <div class="slideshow-container">
      <div class="mySlides fade">

        <img src="images/g-5.jpg" style="width:100%">
      </div>
      <div class="mySlides fade">
        <img src="images/g-6.webp" style="width:100%">
      </div>
      <div class="mySlides fade">
        <img src="images/g-8.jpg" style="width:100%">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(0)"></span>
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
    </div>

    <div  class="content" data-aos="fade-left" data-aos-delay="600">
        <span>why choose us?</span>
        <h3>Nature's Majesty Awaits You</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde fugit repellat error deserunt nam aperiam odit libero quos provident. Nostrum?<br>
    you want to expireance of this wonderfull tour and you have any issus regarding booking and all then contact us!......</p>
        <a href="contact.php" class="btn">Contact us</a>                
 </div>
       
</section>

<?php
include_once("footer.php");
?>
</body>
</html>
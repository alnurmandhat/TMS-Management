
<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="css/admin.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   <div class="sidebar">
     <div class="logo_content">
       <div class="logo">
         <div class="logo_name">Admin panel</div>
       </div>
       <i class='bx bx-menu' id="btn"></i>
     </div>
     <ul class="nav_list">
       <li>
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
       </li>
       <li>
        <a href="dashboard.php">
         <i class='bx bx-grid-alt'></i>
         <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
       <li>
         <a href="tour_pack.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Tour packages</span>
         </a>
         <span class="tooltip">Tour packages</span>
       </li>
      
      <li>
        <a href="#">
         <i class='bx bx-cog'></i>
         <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
     </ul>
     <div class="content">
       <div class="user">
        
         <i class='bx bx-log-out' id="log_out"></i>
       </div>
     </div>
   </div>
  

<script >
    let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search");

btn.onclick = function(){
    sidebar.classList.toggle("active");
}
searchBtn.onclick = function(){
    sidebar.classList.toggle("active");
}


</script>
</body>
</html>


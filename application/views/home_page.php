<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 12px;
  color: white;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 12px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content .header {
  background: red;
  padding: 10px;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.column {
  float: left;
  width: 33.33%;
  padding: 20px;
  background-color: #ccc;
  height: 450px;
}

.column a {
  float: none;
  color: black;
  padding: 10px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.column a:hover {
  background-color: #ddd;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">Frofil</a>
  <div class="dropdown">
    <button class="dropbtn">PRODUCT 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
       
      </div>   
      <div class="row">
        <div class="column">
          <h3>PRODUK MECHANICAL</h3>
          <a href="#">MESIN IPAL</a>
          <a href="#">KRASER</a>
          <a href="#">REAKTOR</a>
          <a href="#">FILTERING</a>
          <a href="#">KONVEYOR</a>
          <a href="#">DICE</a>
          <a href="#">SHEREDER</a>
          <a href="#">MEMBRAN</a>
          <a href="#">HYDRAN RAMPANG</a>
        </div>
        <div class="column">
          <h3>PRODUK ELECTRICAL</h3>
          <a href="#">MASINING OTOMATION CONTROLING</a>
          <a href="#">HOME OTOMATION</a>
          <a href="#">MECHANICAL ELECTRICAL</a>
        </div>
        <div class="column">
          <h3>INFORMASI TEKNOLOGI</h3>
          <a href="#">LAN</a>
          <a href="#">WAN</a>
          <a href="#">TELEMETRI</a>
          <a href="#">SOFTWARE DEVELOPMENT</a>
          <a href="#">WEB DEVELOPMENT</a>
        </div>
      </div>
    </div>
  </div> 
</div>

<div style="padding:10px">
  <h3>Responsive Mega Menu (Full-width dropdown in navbar)</h3>
  <p>Hover over the "Dropdown" link to see the mega menu.</p>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

</body>
</html>

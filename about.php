<?php
    $title = 'About';
    require_once 'includes/header.php';
?>

<style>
body {
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>At ToDo by Kareem Hyatt, our mission is to make life easy and simple so that people can concentrate on what really matters in their life. 
        Todo by Kareem Hyatt not only makes people effortlessly stay organized but also makes sure that they never miss important things. 
        Todo by Kareem Hyatt aims to simplify taking notes and make them availabe at the touch of a button. 
        This is accomplished by providing data storage in the cloud that can be accessed worldwide.</p>
  <p>Todo by Kareem Hyatt was founded in 2020 as a part of a final assignment for an Applied Web Developement course at VTDI.</p>
</div>

<h2 style="text-align:center">Development Team</h2>
<div class="row">

<div class="column" >
    <div class="card">
      <img src="uploads/ProfileDefault.png" alt="Kareem" style="width:100%">
      <div class="container">
        <h2>Kareem Hyatt</h2>
        <p class="title">Designer/Student</p>
        <p>Final year student at VTDI majoring in Software Development and Networking.</p>
        <p>kareem_hyatt@yahoo.com</p>
      </div>
    </div>
  </div>

  <div class="column" >
    <div class="card">
      <img src="uploads/ProfileDefault.png" alt="Kareem" style="width:100%">
      <div class="container">
        <h2>Trevoir Williams</h2>
        <p class="title">Lecturer</p>
        <p>Applied Web Programming facilitator</p>
        <p>trevoirwilliams.com</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<?php require_once 'includes/footer.php'; ?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="fname">Select Image :</label>
	<input type="file" name="image" placeholder="Select Image">
	<input type="text" name="servicetitle" placeholder="Service Title">
	<input type="text" name="imagetitle" placeholder="Image Title" >
	<input type="text" name="imagedesc" placeholder="Image description">
    <input onclick="window.location.href = 'images.php';" type="submit" name="Submit" value="Upload" />
  </form>
</div>
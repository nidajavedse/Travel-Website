<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT * FROM images ORDER BY id DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 

 <br><br>
  <h1 style="text-align:center; ">Gallery</h1><br><br>
 <div class="container">
        <?php while($row = $result->fetch_assoc()){ ?> 

        <img class="box" style="width:600px;height:300px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> <br><br>
        <?php } ?> 
 
 </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

<html>
<head>

	<title>View</title>
	<style>
.container {
  display: flex;
  width: 100%;
  padding: 4% 2%;
  box-sizing: border-box;
  height: 100%;
}

.box {
  flex: 1;
  overflow: hidden;
  transition: .5s;
  margin: 0 2%;
  box-shadow: 0 20px 30px rgba(0,0,0,.1);
  line-height: 0;
}

.box > img {
  width: 200%;
  height: calc(100% - 10vh);
  object-fit: cover; 
  transition: .5s;
}

.box > span {
  font-size: 3.8vh;
  display: block;
  text-align: center;
  height: 10vh;
  line-height: 2.6;
}

.box:hover { flex: 1 1 10%; }
.box:hover > img {
  width: 100%;
  height: 100%;
}
 
	</style>
</head>
<body>



</body>
</html>
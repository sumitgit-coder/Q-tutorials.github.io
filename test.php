<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <style>
    html,
    body {
    font-family: 'Flamenco', cursive;
    font-weight: 400;
    background-color: #fff;
    font-size: 18px;
    -ms-text-size-adjust: 100%;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    #content:hover {
      
      font-weight: bold;
      color: #434343;
    }
  </style>
</head>
<body>

<div class="container mt-3">
  <h2>Online Quiz </h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Menu 3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4">Menu 4</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu5">Menu 5</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>HOME</h3>
      <div class="text-center" id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <input type="submit" value="submit" class="btn btn-primary" />
    		</form>
    	</div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Showing profile</h3>
      <table class="table">
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>image</th>
              </tr>
            </thead>
            <tbody>
        	
        	<?php 
        	foreach($profile->data as $prof)
        	{?>
              <tr>
                <td><?php echo $prof['id'];?></td>
                <td><?php echo $prof['name'];?></td>
                <td><?php echo $prof['email'];?></td>
                <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="35px" height="30px" /></td>
              </tr>
            </tbody>
        	<?php 	}?>
          </table>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Read Instructions</h3>
      < Step:01.)  First selct the Exam category which was show on your Home menu.<br><br>
                  <h4> Read All Question Carefully </h4>
                  <h6> All questions are Multiple Choice Questions(MCQ) based.</h6>
                  Step:02)  Then the question will show to your screen .<br><br>
                  Step:03.)  And the Timer will start .<br><br>
                  Step:04.) Before the Timeout you finish the Quiz.<br><br>
                  Steps:05.) Then your result will desplay after the Quiz end.<br><hr>
                <a href="#"><button class="btn btn-success"> Best of Luck :)</button></a>
                <br>
                <hr>
                <div class="text-center" id="select" class="container tab-pane fade">
                </div>
         

                <form  method="post" action="qus_show.php">
                <select class="form-control" id="" name="cat">
                <option class="text-center">select category</option>
                <?php		  
                foreach($profile->cat as $category)
                {  ?>			  			
                <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
                <?php   }?>
                </select><br>
                <input type="submit" value="submit" class="btn btn-primary" />
                </form>

    </div>

    <div id="menu3" class="container tab-pane fade"><br>
      <h3>About Our Quiz</h3>
      Online Exam  will provide a basis for effective fulfillment of conducting online tests as a replacement for the paper based tests which are conducted during the internals in the college. It is a website. <br>This website is used  by any college, school or institute. <br>The only necessary condition for the usage of this application is that there should be following <i class="fas fa-user-shield" style="font-size: 50px; color:blue; margin-top:10px"></i></p>
          	<p>Administrator: He is the person who will be responsible for maintaining the whole system. He will have access to the profile of every student which will give the record of the performance of that student in various tests he gave. <br> <br></p>
          <p>	Faculty: He is the person who will be responsible for incorporating new questions of different levels in the database. He will be given options for modifying as well as deleting the already existing questions. Further, he will be supposed to decide the question paper pattern, the marking scheme and the duration.<br><br></p><i class="fas fa-user-graduate" style="font-size: 50px; color:blue"></i>
          <p>	Student: He is the person who will be appearing in the Exam  test which will be conducted online by the faculty or person who conduct this exam. He will know his result instantaneously. Also, he will get the answers of the paper. Before all this, he will have to register himself or fill login-id and password if already registered.

    </div>
    <div id="menu4" class="container tab-pane fade"><br>
      <h3>Test Your Code here</h3>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            
            <!-- CSS Style -->
            
            <style type="text/css">
            br { display: none; }
             textarea{display: block;margin: 10px 0; width:100%; border: 1px solid #333;}
             
             iframe{display: block;margin: 10px 0; width:100%; resize:both; overflow: auto; border: 1px solid #333;}
            </style>
            
            <!-- JavaScript -->
            
            <script type="text/javascript">
             function updateIframe(){
             var myFrame = $("#myframe").contents().find('body');
             var textareaValue = $("textarea").val();
             myFrame.html(textareaValue);
             }
            </script>
            <h1 style="color: green;">See Your HTML Code Preview</h1>
            
            <textarea rows="5" cols="50" placeholder="Type HTML Code Here" style="background-color: #e5e5e5;"></textarea>
            
            <button style="border:1" type="button" onclick="updateIframe()"><i class="fa fa-pencil-square-o"></i>Run The Code</button>
            
            <iframe id="myframe"></iframe>
            
            <div>
            	<p style="text-align:center"><span style="text-decoration: none"><b>
               </div>
    </div>

    <div id="menu5" class="container tab-pane fade"><br>
      <h3>About Our Quiz</h3>
      Online Exam  will provide a basis for effective fulfillment of conducting online tests as a replacement for the paper based tests which are conducted during the internals in the college. It is a website. <br>This website is used  by any college, school or institute. <br>The only necessary condition for the usage of this application is that there should be following <i class="fas fa-user-shield" style="font-size: 50px; color:blue; margin-top:10px"></i></p>
          	<p>Administrator: He is the person who will be responsible for maintaining the whole system. He will have access to the profile of every student which will give the record of the performance of that student in various tests he gave. <br> <br></p>
          <p>	Faculty: He is the person who will be responsible for incorporating new questions of different levels in the database. He will be given options for modifying as well as deleting the already existing questions. Further, he will be supposed to decide the question paper pattern, the marking scheme and the duration.<br><br></p><i class="fas fa-user-graduate" style="font-size: 50px; color:blue"></i>
          <p>	Student: He is the person who will be appearing in the Exam  test which will be conducted online by the faculty or person who conduct this exam. He will know his result instantaneously. Also, he will get the answers of the paper. Before all this, he will have to register himself or fill login-id and password if already registered.

    </div>

  </div>
</div>

</body>
</html>

<?php
include "header.php";
include "../connection.php";
$id=$_GET["id"];
$exam_category='';
$res=mysqli_query($link,"select * from category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $exam_category=$row["cat_name"];
}
?>

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Add Questions inside
                        <?php echo "<font color='red'>" .$exam_category. "</font>"; ?>
                    </h1>
                </div>
            </div>
        </div>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="col-lg-6">

                                <form name="form1" action="" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header"><strong>Add New Questions with text</strong><small></small></div>
                                        <div class="card-body card-block">
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text" placeholder="Add Question" class="form-control" name="questions"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 1</label><input type="text" placeholder="Add Option 1" class="form-control" name="ans1"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 2</label><input type="text" placeholder="Add Option 2" class="form-control" name="ans2"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 3</label><input type="text" placeholder="Add Option 3" class="form-control" name="ans3"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Option 4</label><input type="text" placeholder="Add Option 4" class="form-control" name="ans4"></div>
                                            <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><input type="text" placeholder="Add Answer" class="form-control" name="ans"></div>
                                            <div class="form-group">
                                                <input type="submit" name="submit1" value="Add Question" class="btn btn-success" />
                                            </div>


                                        </div>
                                    </div>



                            </div>


                            <div class="col-lg-6">


                                <div class="card">
                                    <div class="card-header"><strong>Add New Questions with images</strong><small></small></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text" placeholder="Add Question" class="form-control" name="fquestions" ></div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add Option 1</label><input type="file"  class="form-control" name="fans1" style="padding-bottom:35px"></div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add Option 2</label><input type="file"  class="form-control" name="fans2" style="padding-bottom:35px"></div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add Option 3</label><input type="file"  class="form-control" name="fans3" style="padding-bottom:35px"></div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add Option 4</label><input type="file"  class="form-control" name="fans4" style="padding-bottom:35px"></div>
                                        <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><input type="file"  class="form-control" name="fans" style="padding-bottom:35px"></div>
                                        <div class="form-group">
                                            <input type="submit" name="submit2" value="Add Question" class="btn btn-success" />
                                        </div>


                                    </div>
                                </div>



                            </div>


                            </form>


                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Questions</th>
                                    <th>Opt1</th>
                                    <th>Opt2</th>
                                    <th>Opt3</th>
                                    <th>Opt4</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <?php
                                    $res=mysqli_query($link,"select * from questions where cat_name='$exam_category' order by question_no asc");
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        echo "<tr>";
                                        echo "<td>"; echo $row["question_no"];  echo "</td>";
                                        echo "<td>"; echo $row["questions"];  echo "</td>";
                                        echo "<td>"; 
                                        if(strpos($row["ans1"],'opt_images/')!==false)
                                        {
                                            ?>
                                            <img src="<?php echo $row["ans1"];?>"height="50" width="50">
                                            <?php
                                        }
                                        else{
                                            echo $row["ans1"];
                                        }
                                          
                                        echo "</td>";

                                        echo "<td>"; 
                                        if(strpos($row["ans2"],'opt_images/')!==false)
                                        {
                                            ?>
                                            <img src="<?php echo $row["ans2"];   ?>"height="50" width="50">
                                            <?php
                                        }
                                        else{
                                            echo $row["ans2"];
                                        }
                                          
                                        echo "</td>";

                                        echo "<td>"; 
                                        if(strpos($row["ans3"],'opt_images/')!==false)
                                        {
                                            ?>
                                            <img src="<?php echo $row["ans3"];   ?>"height="50" width="50">
                                            <?php
                                        }
                                        else{
                                            echo $row["ans3"];
                                        }
                                          
                                        echo "</td>";

                                        echo "<td>"; 
                                        if(strpos($row["ans4"],'opt_images/')!==false)
                                        {
                                            ?>
                                            <img src="<?php echo $row["ans4"];?>"height="50" width="50">
                                            <?php
                                        }
                                        else{
                                            echo $row["ans4"];
                                        }
                                          
                                        echo "</td>";
                                        
                                        echo "<td>";

                                        if(strpos($row["ans4"],'opt_images/')!==false)
                                        {
                                            ?>
                                            <a href="edit_option_images.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Edit</a>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <a href="edit_option.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>" >Edit</a>
                                            <?php
                                        }

                                        echo "</td>";

                                        echo "<td>";
                                        ?>
                                        <a href="delete_option.php?id=<?php echo $row["id"]; ?>&id1=<?php echo $id; ?>">Delete</a>
                                        <?php
                                        echo "</td>";

                                        echo "</tr>";
                                    }
                                ?>
                                
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- .content -->

    <?php
    if(isset($_POST['submit1']))
    {
        $loop=0;

            $count=0;
             $res=mysqli_query($link,"select * from questions where id ='$exam_category' order by id asc") or die(mysqli_error($link));
                
                $count=mysqli_num_rows($res);

                if($count==0)
                {

                }
                else {
                    while($row=mysqli_fetch_array($res))
                    {
                        $loop=$loop+1;
                        mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");
                    }
                }
                $loop=$loop +1;
                mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[questions]','$_POST[ans1]','$_POST[ans2]','$_POST[ans3]','$_POST[ans4]','$_POST[ans]','$exam_category')") or die(mysqli_error($link));
                ?>
        <script type="text/javascript">
            alert("Your New Question Add Successfully :)");
            window.location.href = window.location.href;
        </script>
        <?php
    }
    ?>

<?php
    if(isset($_POST['submit2']))
    {
        $loop=0;

            $count=0;
             $res=mysqli_query($link,"select * from questions where id='$exam_category' order by id asc") or die(mysqli_error($link));
                
                $count=mysqli_num_rows($res);

                if($count==0)
                {

                }
                else {
                    while($row=mysqli_fetch_array($res))
                    {
                        $loop=$loop+1;
                        mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");
                    }
                }
                $loop=$loop +1;

                $tm=md5(time());

                $fnm1=$_FILES["fans1"]["name"];
                $dst1="./opt_images/".$tm.$fnm1;    //uploading image
                $dst_db1="opt_images/".$tm.$fnm1;       //storing image
                move_uploaded_file($_FILES["fans1"]["tmp_name"],$dst1);

                $fnm2=$_FILES["fans2"]["name"];
                $dst2="./opt_images/".$tm.$fnm2;    //uploading image
                $dst_db2="opt_images/".$tm.$fnm2;       //storing image
                move_uploaded_file($_FILES["fans2"]["tmp_name"],$dst2);

                $fnm3=$_FILES["fans3"]["name"];
                $dst3="./opt_images/".$tm.$fnm3;    //uploading image
                $dst_db3="opt_images/".$tm.$fnm3;       //storing image
                move_uploaded_file($_FILES["fans3"]["tmp_name"],$dst3);

                $fnm4=$_FILES["fans4"]["name"];
                $dst4="./opt_images/".$tm.$fnm4;    //uploading image
                $dst_db4="opt_images/".$tm.$fnm4;       //storing image
                move_uploaded_file($_FILES["fans4"]["tmp_name"],$dst4);

                $fnm5=$_FILES["fans"]["name"];
                $dst5="./opt_images/".$tm.$fnm5;    //uploading image   $tm for make a unique name of same image or differnt images
                $dst_db5="opt_images/".$tm.$fnm5;       //storing image
                move_uploaded_file($_FILES["fans"]["tmp_name"],$dst5);

                mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[fquestions]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')") or die(mysqli_error($link));
                ?>
        <script type="text/javascript">
            alert("Your New Question Add Successfully :)");
            window.location.href = window.location.href;
        </script>
        <?php
    }
    ?>

            <?php
    include "footer.php";
    ?>
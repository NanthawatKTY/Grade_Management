<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../Style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
</head>
<center>
    
        <table class="table"style="height: 300px; width: 900px;">
        <thead>
          <tr>
            
            <th scope="col",width = "90"><div align = "center">รหัสอาจารย์</div></th></th>
            <th scope="col",width = "90"><div align = "center">รหัสผ่าน</div></th></th>
            <th scope="col",width = "90"><div align = "center">ชื่อจริง</div></th></th> 
            <th scope="col",width = "90"><div align = "center">นามสกุล</div></th></th>
            <th scope="col",width = "90"><div align = "center">ID Card</div></th></th>
            <th scope="col",width = "90"><div align = "center">Email</div></th></th>
           
           </tr>
     
        </thead>
        </center>
 <?php 
     include './control/connect.php' ;

        $sql = "SELECT * FROM teacher_table";
        $query = mysqli_query($conn, $sql);
        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) //ใช้ในการคืนค่าข้อมูลในฐานข้อมูลที่อยู่ในลักษณะเป็นแถวหรือว่าเป็น
        {
            ?>
            <tr>
           
            
            <td><div align="center">
            <?php echo $result['T_Code'];?></div></td>
            <td><div align="center">
            <?php echo $result['T_Pass'];?></div></td>   
            <td><div align="center"> 
            <?php echo $result['T_Fname'];?></div></td>
            <td><div align="center">
            <?php echo $result['T_Lname'];?></div></td>
            <td><div align="center">
            <?php echo $result['ID_Card'];?></div></td>
            <td><div align="center">
            <?php echo $result['T_Email'];?></div></td>
        
            </tr>
            <?php

        
      }
    ?>
        </tbody>
    </table>
</div> 
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
</body>

</html>
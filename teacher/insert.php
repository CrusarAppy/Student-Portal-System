<?php
    $subject=$_GET['Subject'];
    echo $subject;

?>
<html>
    <head>
        <title></title>
       
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <script type="text/javascript">
        function validateMarks(){
            var flag;
            var unitTest1 = document.forms['uploadMarks']['unitTest1'];
            if(unitTest1.value>"5"){
                var flag=0;
            }
            if(flag==0){
                return false;
            }else{
                return true;
            }
        }
    </script>
</head>
    <body>
        <?php include "teacherdash.php" ;?>
        <form action="insertmarks.php" method="post" name="uploadMarks" onsubmit="return validateMarks()" enctype="multipart/form-data">
            <table width="1200" border>
                <tr>
                    <th>Roll</th>
                    <th>Subject</th>
                    <th>Unit Test 1</th>
                    <th>Unit Test 2</th>
                    <th>Lab Performance</th>
                </tr>
                <tr>
                    <td><input type="text"  name="roll"></td>
                    <td> <input type="text" name="subject" value="<?php echo $subject ?>"></td>
                    <td><input type="text"  name="unitTest1"></td>
                    <td><input type="text"  name="unitTest2"></td>
                    <td><input type="text"  name="labPerformance"></td>
                </tr>
            </table><br>
            <table>
                <tr>
                    <th>Practical Exam</th>
                    <th>Attendance</th>
                    <th>Assignments</th>
                    <th>Final Assessment</th>
                    <th>Extra Credit</th>
                </tr>
                <tr>               
                    <td><input type="text"  name="practicalExam"></td>
                    <td><input type="text"  name="attendance"></td>
                    <td><input type="text"  name="assignment"></td>
                    <td><input type="text"  name="finalAssessment"></td>
                    <td><input type="text"  name="extraCredit"></td>
                </tr>
            </table>
            <input type="submit" value="upload">
        </form>
                <footer>
                 COPYRIGHT &copy 2015 Batch 
        </footer>
    </body>
</html>
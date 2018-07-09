s
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/inserttest.css">
<script type="text/javascript">
// function validation(){
//             var extraCredit = document.forms['uploadMarks']['extraCredit[]'];
//             var extraCreditError = document.getElementById('extraCreditError');

//             if (extraCredit.value == "") {
//                 extraCreditError.style.color = 'red';
//                 extraCreditError.innerHTML = "The field shouldn't be empty";
//                 return false;
//             }else {
//                 extraCreditError.innerHTML = "";
//                 return true;
//             }
//         }
</script>
</head>
<body>

    <?php include "teacherdash.php" ;?>
    <h1> Please fill all the information</h1>
    <?php 


     $subject= $_GET['subject'];
     echo "<h2 style=text-align:center> Internal marks of " .  $subject . "</h2>"; 
 ?>
     
	<form method="POST" action="insertmarks1.php?subject=<?php echo $subject ?>" name="uploadMarks" type="multipart/form-data">
        <div >
            <div>    
            <table width="100" border=1 id="main">
               
                <thead> 
                <tr>
                    <th scope="col">Roll</th>
                    <th scope="col">Subject</th>        
                    <th scope="col">Unit Test 1</th>
                    <th scope="col">Unit Test 2</th>
                    <th scope="col">Lab Performance</th>
                    <th scope="col">Practical Exam</th>
                    <th scope="col">Attendance</th>
                    <th scope="col">Assignments</th>
                    <th scope="col">Final Assessment</th>
                    <th scope="col">Extra Credit</th>
                </tr>
                </thead>
                <tbody>
                <tr  id="replicate"><td data-label="Roll">                    
                    <input type="text"  placeholder="Roll Number" name="roll[]" style="width:80px";></td>
                    <td data-label="Subject"> <input type="text" name="subject[]" value="<?php echo $subject; ?>"  style="width:80px;"></td>
                    <td data-label="Unit Test 1">
                    <Select name="unitTest1[]">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                    </select>
                    </td>
                    <td data-label="Unit Test 2">
                    <Select name="unitTest2[]">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                    </select>
                    </td data-label="Lab Performance">
                    <td>
                    <Select name="labPerformance[]">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                    </select>
                    </td>                         
                    <td data-label="Practical Exam">
                    <Select name="practicalExam[]">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                    </select>
                    </td>
                    <td data-label="Attendance">
                    <Select name="attendance[]">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                    </select>
                    </td>
                    <td data-label="Assignment">
                    <Select name="assignment[]">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                    </select>
                    </td data-label="Final Assessment">
                    <td>
                    <Select name="finalAssessment[]">
                        <option value="1" >1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30" selected="selected">30</option>
                    </select>
                    </td data-label="Extra Credit">
                    <td><input type="text"  name="extraCredit[]" value="0"  style="width:50px;"></td>
                    <span id="extraCreditError"></span>
                </tr>
            </tbody>
            </table>            
            </div>
            </div>
            <input type="button" value="Add More" onclick="myFunction()" style="width:80px;"><br>
            <input type="submit"  name="submit" value="upload" style="width:80px;">
        </form>
            

            
<script>
function myFunction() {
    var elmnt = document.getElementById("replicate");
    var cln = elmnt.cloneNode(true);
    document.getElementById('main').appendChild(cln);
}
</script>

</body>
</html>

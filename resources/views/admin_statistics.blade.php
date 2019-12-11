@extends('layout.app2')
@section('content')

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/button.css')}}">
</head>

<body>
    <div class="container" ><br><br> 
        <button class="login100-form-btn" id="CMPN" value="CMPN">CMPN</button>&nbsp;&nbsp;&nbsp;
        <button class="login100-form-btn" id="INFT" value="INFT">INFT</button>&nbsp;&nbsp;&nbsp;
        <button class="login100-form-btn" id="ETRX">ETRX</button>&nbsp;&nbsp;&nbsp;
        <button class="login100-form-btn" id="EXTC">EXTC</button>&nbsp;&nbsp;&nbsp;
        <button class="login100-form-btn" id="INST">INST</button>&nbsp;&nbsp;&nbsp;
        <button class="login100-form-btn" id="MCA">MCA</button>&nbsp;&nbsp;&nbsp;
    </div><br><br>
    <div>
    <div id="CMPN1">       
        <table>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost","root","","placement");
                if (!$conn) {
                    die(mysql_error());
                }
                    $results = mysqli_query($conn,"SELECT a.email, c.c_name FROM applied_student AS a INNER JOIN company_details AS c ON a.c_id=c.c_id AND c.for_dept='CMPN' ORDER BY c.c_name");
                    while($row = mysqli_fetch_array($results)) {
                ?>
                <tr>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['c_name']?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div id="INFT1">       
            <table>
                <tbody>
                    <?php
                    $conn = mysqli_connect("localhost","root","","placement");
                    if (!$conn) {
                        die(mysql_error());
                    }
                        $results = mysqli_query($conn,"SELECT a.email, c.c_name FROM applied_student AS a INNER JOIN company_details AS c ON a.c_id=c.c_id AND c.for_dept='IT' ORDER BY c.c_name");
                        while($row = mysqli_fetch_array($results)) {
                    ?>
                    <tr>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['c_name']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#CMPN1,#INFT1").hide();
            $("#CMPN").on('click', function() {            
            $("#INFT1").hide();
            $("#CMPN1").show();
            });
            $("#INFT").on('click', function() {
            $("#CMPN1").hide();
            $("#INFT1").show();
            });
        })        
    </script>
</body>

@endsection
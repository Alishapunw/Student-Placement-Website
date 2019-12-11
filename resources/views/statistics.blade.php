@extends('layout.app')
@section('content')


<!DOCTYPE html>
<html>
 <head>
     
    <meta name="viewport" content="width=device-width,initial-scale=1>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->

  <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  
  <!--<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        $u11={{(int)$user[0]->for_higher_studies}};
        $u12={{(int)$user[0]->placed_students}};
        $u13={{(int)$user[0]->applied_students}};
        $u14={{(int)$user[0]->total_students}};
        $u21={{(int)$user[1]->for_higher_studies}};
        $u22={{(int)$user[1]->placed_students}};
        $u23={{(int)$user[1]->applied_students}};
        $u24={{(int)$user[1]->total_students}};
        $u31={{(int)$user[2]->for_higher_studies}};
        $u32={{(int)$user[2]->placed_students}};
        $u33={{(int)$user[2]->applied_students}};
        $u34={{(int)$user[2]->total_students}};
        $u41={{(int)$user[3]->for_higher_studies}};
        $u42={{(int)$user[3]->placed_students}};
        $u43={{(int)$user[3]->applied_students}};
        $u44={{(int)$user[3]->total_students}};
        $u51={{(int)$user[4]->for_higher_studies}};
        $u52={{(int)$user[4]->placed_students}};
        $u53={{(int)$user[4]->applied_students}};
        $u54={{(int)$user[4]->total_students}};
        $u61={{(int)$user[5]->for_higher_studies}};
        $u62={{(int)$user[5]->placed_students}};
        $u63={{(int)$user[5]->applied_students}};
        $u64={{(int)$user[5]->total_students}};
        $f1=$u11+$u21+$u31+$u41+$u51+$u61;
        $f2=$u12+$u22+$u32+$u42+$u52+$u62;
        $f3=$u13+$u23+$u33+$u43+$u53+$u63;
        $f4=$u14+$u24+$u34+$u44+$u54+$u64;


        var data = google.visualization.arrayToDataTable([
          ['Branch', 'For Higher Studies','Placed Students','Applied Students', 'Total Students' ],
          ['CMPN',$u11,$u12,$u13,$u14],
          ['IT',$u21,$u22,$u23,$u24],
          ['MCA',$u31,$u32,$u33,$u34],
          ['ETRX',$u41,$u42,$u43,$u44],
          ['EXTC',$u51,$u52,$u53,$u54],
          ['INST',$u61,$u62,$u63,$u64],
        ]);

        var data2 = google.visualization.arrayToDataTable([
          ['Year', 'For Higher Studies','Placed Students','Applied Students', 'Total Students' ],
          ['2016-17',45,567,677,700],
          ['2017-18',23,520,650,695],
          ['2018-19',50,557,617,725],
          ['2019-20',$f1,$f2,$f3,$f4]
        ]);

        

        
        var options = {'title':'Placement Statistics'};
        var options2 = {'title':'VESITs overall Placement Statistics'};
       
        
          
        
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
        var chart2 = new google.charts.Bar(document.getElementById('overall_columnchart_material'));
        chart2.draw(data2, google.charts.Bar.convertOptions(options2));



      



      }
  </script>
-->
  
</head>
<body>
<br>
<br>
<br>
<br>
<div style="margin: auto;width: 95%;overflow: auto;">
<hr>
<p><strong><h2 style="text-align: center; color:#204184;">2019-20 Live statistics</h2></strong></p>
<hr> 
<div style="margin: auto;width: 95%;">
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
          <i class="material-icons">format_list_numbered</i>
        </div>
        <p class="card-category">Total number of companies visited</p>
        <h3 class="card-title">25+
          <small>Dream: 23</small>
        </h3>

      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">update</i> Live
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">local_offer</i>
        </div>
        <p class="card-category">Total number of offers</p>
        <h3 class="card-title">317
          <small>Dream: 113+</small>
        </h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> Last 1 month
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-danger card-header-icon">
        <div class="card-icon">
          <i class="material-icons">attach_money</i>
        </div>
        <p class="card-category">Highest Salary</p>
        <h3 class="card-title">14 LPA</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">add_box</i> As of August
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
          <i class="material-icons">fiber_new</i>
        </div>
        <p class="card-category">Number of new companies</p>
        <h3 class="card-title">+05</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">autorenew</i> More expected
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h3 class="card-title">Accenture</h3>
                  <p class="card-category">2019-20 batch</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Sr.</th>
                      <th>Type</th>
                      <th>Salary</th>
                      <th>Offers</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Full Stack Engineer</td>
                        <td>6.5 LPA</td>
                        <td>22</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Associate Software Engineer</td>
                        <td>4.5 LPA</td>
                        <td>186</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Total</td>
                        <td></td>
                        <td>208</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h3 class="card-title">Highlights Core Branch</h3>
                  <p class="card-category">ETRX, EXTC, INST. Total Offers: 100+</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Sr. No.</th>
                      <th>Branch</th>
                      <th>Total/Dream</th>
                      <th>Salary Range</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Electronics and Telecommunication</td>
                        <td>57/13</td>
                        <td>5-7 LPA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Electronics</td>
                        <td>34/02</td>
                        <td>6.5 LPA</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Instrumentation</td>
                        <td>09</td>
                        <td></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>
</div> 
</div>  
<p><strong><h2 style="text-align: center; color:#204184;">2018-19 Overall statistics</h2></strong></p>
<hr> 
<div class="row">
    <div class="col-md-6">
        <iframe width="600" height="371" seamless frameborder="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ijqKMw8weDlLe1qDjUmbs0XvLOh6jL7ivezlvS6AWxhQlU96IpYVrd_2Wk_OhuOZw4NhJSFZjO9q/pubchart?oid=430206286&amp;format=interactive"></iframe>
      </div>
      <div class="col-md-6">
    <iframe width="600" height="371" seamless frameborder="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ijqKMw8weDlLe1qDjUmbs0XvLOh6jL7ivezlvS6AWxhQlU96IpYVrd_2Wk_OhuOZw4NhJSFZjO9q/pubchart?oid=290038863&amp;format=interactive"></iframe>
    </div>
  </div>

      <hr>
      <p><strong><h2 style="text-align: center; color:#204184;">2018-19 Department wise statistics </h2></strong></p>

      <hr>  
    </center>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6" >
        <iframe width="600" height="371" seamless frameborder="0"  src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ijqKMw8weDlLe1qDjUmbs0XvLOh6jL7ivezlvS6AWxhQlU96IpYVrd_2Wk_OhuOZw4NhJSFZjO9q/pubchart?oid=20414195&amp;format=interactive"></iframe>
        <p style="text-align: left; color:#204184;">Electronics (Total companies - 16)</p>
      </div>
        
      <div class="col-md-6">
        <iframe width="530" height="370" seamless frameborder="2%"  src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ijqKMw8weDlLe1qDjUmbs0XvLOh6jL7ivezlvS6AWxhQlU96IpYVrd_2Wk_OhuOZw4NhJSFZjO9q/pubchart?oid=1926884853&amp;format=interactive"></iframe>
        <p style="text-align: left; color:#204184;">Computer (Total companies - 40)</p>
        
      </div> 
    </div>
<hr>
    <div class="row">
      <div class="col-md-6">
        <iframe width="600" height="371" seamless frameborder="0"  src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ijqKMw8weDlLe1qDjUmbs0XvLOh6jL7ivezlvS6AWxhQlU96IpYVrd_2Wk_OhuOZw4NhJSFZjO9q/pubchart?oid=724248167&amp;format=interactive"></iframe>
        <p style="text-align: left; color:#204184;">Instrumentation (Total companies - 24)</p>

        </div>
      <div class="col-md-6">
        <iframe width="600" height="371" seamless frameborder="2%""  src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ijqKMw8weDlLe1qDjUmbs0XvLOh6jL7ivezlvS6AWxhQlU96IpYVrd_2Wk_OhuOZw4NhJSFZjO9q/pubchart?oid=833646554&amp;format=interactive"></iframe>
        <p style="text-align: left; color:#204184;">Electronics & Telecommunications (Total companies - 21)</p>

      </div>
    </div>
<hr>
    <div class="row">
      <div class="col-md-6">
        <iframe width="600" height="370" seamless frameborder="2%"  src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ijqKMw8weDlLe1qDjUmbs0XvLOh6jL7ivezlvS6AWxhQlU96IpYVrd_2Wk_OhuOZw4NhJSFZjO9q/pubchart?oid=1036932054&amp;format=interactive"></iframe>
        <p style="text-align: left; color:#204184;">Information & Technology (Total companies - 32)</p>

      </div>
      <div class="col-md-6">
        <iframe width="600" height="370" seamless frameborder="2%"  src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-ijqKMw8weDlLe1qDjUmbs0XvLOh6jL7ivezlvS6AWxhQlU96IpYVrd_2Wk_OhuOZw4NhJSFZjO9q/pubchart?oid=1883790223&amp;format=interactive"></iframe>
        <p style="text-align: left; color:#204184;">Masters Of Computer Applications (Total companies - 21)</p>

      </div>      
    </div>
</div>
</body>
</html>
@endsection
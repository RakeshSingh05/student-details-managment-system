<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Structure </title>
  
  <style>

    *{
      margin:0%;
      padding:0%;
    }
    body{
      margin:20px;
   
    background-repeat: no-repeat;
    background-position: center;
    background-size: 673px 700px;


    }
    
    .blue{
      border:2px solid rgb(19, 19, 73);
      margin:2px;
      height:140%;
    }
    .green{
      border:3px solid green;;
      margin:9px;
      height:140%;
    }
    .jutSemRegistrationNo{
      display: flex;
      justify-content: flex-end;
      padding:4px;
      margin-top:6px;
      margin-bottom:10px;
      text-transform:uppercase;
    }
    .logoTittle{
      display: inline-flex;
    
    }
    img{
      width:100%;
    }
    .logo{
      width:89px;
      padding-left:12px;
      
    }
    .tittle{
      color: darkgreen;
      letter-spacing: 6px;
      word-spacing: 11px;
      text-transform: uppercase;
      font-size: 24px;
      padding-left: 61px;
      padding-top: 18px;
      font-weight: bolder;
      text-align: center;
    
    }
    .tittle span{
      color :darkblue;
    }
    .semester{
      text-transform: uppercase;
      font-size:15px;
      padding:5px;
      text-align: center;
    }
    .detailsOfStudent{
      padding-left: 42px;
      text-transform: uppercase;
      line-height: 31px;
      margin-bottom:15px;
    }
    table {
      margin: 5px;
      width: calc(100% - 10px);
      border-collapse: collapse;
    }
    table, th, td {
      border: 1px solid black;
      text-transform: uppercase;
    }
    th, td {
      padding: 6px ;
      text-align: center;
    }

    .gradePerformance{
      padding-left:40px;
      font-weight: 700;
      padding-bottom:20px;
    }
    .marks{
      padding-left:42px;
      margin:11.5px;
    }
    .marksOfGrade{
      font-weight: 700;
      padding-left :41px;
      display: grid;
        grid-template-columns: 205px 116px 96px;
        column-gap:15px;
        row-gap:15px;
    }
    .no-border-table, .no-border-table th, .no-border-table td {
      border: none !important;
    }
    
    .marksOfGrade span{
      padding-right: 14px;
    }
    .conversion{
      padding:40px;
      font-weight: 700;
    }
    .footer{
      display: flex;
      justify-content: space-between;
      padding: 10px 40px;
      /* position:relative;
      top:297px; */
    
    }
    @page {
      size: A4;
      margin: 20mm;
    }
    @media print {
      body {
        margin: 0;
      }
      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="blue">
    <div class="green">
      <div class="jutSemRegistrationNo"> <p>No:JUT/DEG/MRK/1ST/2023/00475</p></div>
      <div class="logoTittle">
        <div class="logo"> <img src="" alt="jut logo "></div>
        <div class="tittle"> <p>jharkhand university of technology <br> <span>marks statement</span></p></div>
      </div>
      <div class="semester "> <p>b.tech 1st semester examnination - 2022 </p></div>
      <div class="detailsOfStudent">
        <div><p>registraion no      : 22013440069</p></div>
        <div><p>name                 : Rakes singh</p></div>
        <div><p>institute             : r.v.s college of enginnering and technology, jamshedpur</p></div>
        <div><p>branch name           : computer science & engineering.</p></div>
        <div><p>exam(month/year)  :march - april-2023</p></div>
      </div>
      <div class="marks">
      <table>
          <thead>
            <tr>
              <th style="width: 65%;">[subject code] name of the subject</th>
              <th style="width: 100px;">credit</th>
              <th style="width: 150px;">full marks<br> ese/marks</th>
              <th style="width: 100px;">grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="4" style="color: darkblue; font-weight: bold; text-align:left;">theory paper</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td colspan="4" style="color: darkblue; font-weight: bold; text-align:left;">theory paper</td>
            </tr>
            <tr>
              <td style="text-align:left;"  >[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align: right; color: #ff00008d; font-weight: bold;">total credit</td>
              <td style="text-align: left; color: #ff00008d; font-weight: bold;" colspan="3">17.5</td>
            </tr>
            <tr>
              <td style="text-align: right; color: #ff00008d; font-weight: bold;">sgpa</td>
              <td style="text-align: left; color: #ff00008d; font-weight: bold;" colspan="3">9.5</td>
            </tr>
          </tbody>
        </table>

      </div>
       <div class="gradePerformance">
        <p>% of marks obtains with letter grade & performance  : - </p>
       </div>
       <table class="no-border-table" style="padding-left:20px; margin-left: 65px;">
        <tr>
          <td style="padding:10px; width:175px; text-align:left;">90% and above</td>
          <td style="width:75px; text-align:left">:   A+</td>
          <td>Excellent</td>
        </tr>
        <tr>
          <td style="padding:10px; width:175px; text-align:left;">89% to 80%</td>
          <td style="width:75px ;text-align:left">:  A </td>
          <td>Very Good</td>
        </tr>
        <tr>
          <td style="padding:10px; width:175px; text-align:left;">79% to 70%</td>
          <td style="width:75px; text-align:left;">:  B+</td>
          <td>Good</td>
        </tr>
        <tr>
          <td style="padding:10px; width:175px; text-align:left;">69% to 60%</td>
          <td style="width:75px; text-align:left;">:  B</td>
          <td>Fair</td>
        </tr>
        <tr>
          <td style="padding:10px; width:175px; text-align:left;">59% to 50%</td>
          <td style="width:75px; text-align:left;">:  C+</td>
          <td>Average</td>
        </tr>
        <tr>
          <td style="padding:10px;width:175px; text-align:left;">49% to 40%</td>
          <td style="width:75px;text-align:left;">:  C</td>
          <td>Pass</td>
        </tr>
        <tr>
          <td style="padding:10px; width:175px; text-align:left;"><=40%</td>
          <td style="width:75px; text-align:left;">:  F</td>
          <td>Fail</td>
        </tr>
      </table>
      
        <div class="conversion">
          <div>Conversion Fomula:</div>
          <div>%marks - (CGPA - 0.5) * 10.0</div>
          <div>Abbreviation</div>
          <div>ESE:- End Semester Examination.</div>
          <div>MSE:- Mid Semester Examination.</div>
        </div>
       


        <div class="footer">
          <div><p>Date of Result: 15/09/23</p></div>
          <div><p>Controller of Examination</p></div>
        </div>


    </div>
  </div>

  <center>

  
  <div class="buttonToDownload">
    <button >
      <a href="generate.php">download</a></button>
  </div></center>
  
</body>
</html>
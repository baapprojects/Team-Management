<HTML>
<HEAD>
<STYLE>
h1 {
    background-color: lightblue;
}
.button {
    background-color: #008CBA;
    border: none;
    border-radius: 12px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
     height:70px;
    width:130px;
}

</STYLE>
</HEAD>
<BODY><CENTER>
<H1> EFFORT TRACKER </H1>
<TABLE border="2">
<THEAD>
<TH>PROJECT NAME</TH>
<TH>TEAM NAME</TH>
<TH>NUM OF DAYS TEAM WORKED</TH>
<TH>DATE OF START</TH>
<TH>DATE TO COMPLETE</TH>
<TH>DAYS TO COMPLETE</TH>
</THEAD>
<TR>
<TD>WELL POINT</TD>
<TD>CREATE</TD>
<TD>45</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>HCA</TD>
<TD>CREATE</TD>
<TD>25</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>AETNA</TD>
<TD>CREATE</TD>
<TD>23</TD>
<TD>28/01/15</TD>
<TD>29/02/19</TD>
<TD>589</TD>
</TR>
<TR>
<TD>HEALTHY NET</TD>
<TD>CREATE</TD>
<TD>56</TD>
<TD>28/01/13</TD>
<TD>29/06/18</TD>
<TD>495</TD>
</TR>
<TR>
<TD>WELL POINT</TD>
<TD>CREATE</TD>
<TD>56</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>HCA</TD>
<TD>CREATE</TD>
<TD>78</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>AETNA</TD>
<TD>CREATE</TD>
<TD>23</TD>
<TD>28/01/15</TD>
<TD>29/02/19</TD>
<TD>589</TD>
</TR>
<TR>
<TD>HEALTHY NET</TD>
<TD>CREATE</TD>
<TD>98</TD>
<TD>28/01/13</TD>
<TD>29/06/18</TD>
<TD>495</TD>
</TR>
<TR>
<TD>WELL POINT</TD>
<TD>CREATE</TD>
<TD>32</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>HCA</TD>
<TD>CREATE</TD>
<TD>90</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>AETNA</TD>
<TD>CREATE</TD>
<TD>12</TD>
<TD>28/01/15</TD>
<TD>29/02/19</TD>
<TD>589</TD>
</TR>
<TR>
<TD>HEALTHY NET</TD>
<TD>CREATE</TD>
<TD>54</TD>
<TD>28/01/13</TD>
<TD>29/06/18</TD>
<TD>495</TD>
</TR>
<TR>
<TD>WELL POINT</TD>
<TD>CREATE</TD>
<TD>89</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>HCA</TD>
<TD>CREATE</TD>
<TD>67</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>AETNA</TD>
<TD>CREATE</TD>
<TD>34</TD>
<TD>28/01/15</TD>
<TD>29/02/19</TD>
<TD>589</TD>
</TR>
<TR>
<TD>HEALTHY NET</TD>
<TD>CREATE</TD>
<TD>96</TD>
<TD>28/01/13</TD>
<TD>29/06/18</TD>
<TD>495</TD>
</TR>
<TR>
<TD>WELL POINT</TD>
<TD>CREATE</TD>
<TD>45</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>HCA</TD>
<TD>CREATE</TD>
<TD>41</TD>
<TD>28/01/16</TD>
<TD>29/06/17</TD>
<TD>289</TD>
</TR>
<TR>
<TD>AETNA</TD>
<TD>CREATE</TD>
<TD>89</TD>
<TD>28/01/15</TD>
<TD>29/02/19</TD>
<TD>589</TD>
</TR>
<TR>
<TD>HEALTHY NET</TD>
<TD>CREATE</TD>
<TD>80</TD>
<TD>28/01/13</TD>
<TD>29/06/18</TD>
<TD>495</TD>
</TR>


<form  method="post">
<BR>
<BR>
NAME OF PROJECT<INPUT TYPE="TEXT" NAME="NAME"/><BR><BR>
NAME OF TEAM  <INPUT TYPE="TEXT" NAME="TNAME"/><BR><BR>
NUM OF DAYS TEAM WORKED<INPUT TYPE="TEXT" NAME="DAYS"/><BR><BR>
TOTAL NUMBER OF DAYS TEAM NEEDS TO WORK<INPUT TYPE="TEXT" NAME="NDAYS"/><BR><BR>
<button class="button button1" type="submit" formaction="effortcalc.php">CALCULATE</button></BR></BR></BR>
</FORM>
</CENTER>
</BODY>
</HTML>
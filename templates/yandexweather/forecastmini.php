<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>


<table width=100% border=0><tr>
<td valign=top>
<!-- results -->
[#if RESULTMYCITY#]
<form action="?" method="post" name="indata" style="padding:0px" class="form">
 
[#begin RESULTMYCITY#]
<h2>
  <table width="100%" border=0><tr> 

 
<td>
<i class="fa [#trandtempfa#]"></i> 
[#if temp!=""#] [#temp#]
[#else#]  [#endif#]   
°С  
   </td>
<td>   
/   
   </td> 
<td>   
<i class="fa [#trandhumfa#]"></i>  
[#if humidity!=""#] [#humidity#]%
[#else#]  [#endif#]   
   </td> 
<td>   
/   
   </td> 
<td>   
<i class="fa [#trandpresfa#]"></i>  
[#if pressure_mm!=""#] [#pressure_mm#]mm
[#else#]  [#endif#]   
   </td> 
   

   
    
 </tr>  

<tr>
 <td valign=middle>
[#if conditionrus!=""#] [#conditionrus#]
[#else#]  [#endif#]   
  
 </td><tr>
 </table>
 </h2>  
[#end RESULTMYCITY#]
  </table>
<input type="hidden" name="data_source" value="<#DATA_SOURCE#>">
<input type="hidden" name="view_mode" value="<#VIEW_MODE#>">
</form>

[#else RESULTMYCITY#]
 
<p>
<font color="red"><#LANG_NO_RECORDS_FOUND#></font>
</p>
[#endif RESULTMYCITY#]

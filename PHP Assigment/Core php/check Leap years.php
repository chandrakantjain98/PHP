<!-- Write a PHP program to check Leap years between 1901 to 2016 Using nested 
if. -->

<?php  
echo "Write a PHP program to check Leap years between 1901 to 2016 Using nested 
if.";
echo "<br>";
echo "<br>";
function isLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}    
for($year=1901; $year<2016; $year++)  
{  
    If (isLeap($year))  
    {  
        echo "$year : LEAP YEAR<br />\n";  
    }  
    else  
    {  
        echo "$year : Not leap year<br />\n";  
    }  
}  
?>  
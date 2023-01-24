<html>
<body>

<?php
          $module=$_POST ['module'];
          if($module==1){
              echo "Your grade for the module is : Algorithms -";
          }
             elseif($module==2){
                 echo "Your grade for the module is : Database -";
             }
                 else{
                     echo "UNKNOWN MODULE AND  ";
                 }
             

         
                 $grade=$_POST['grade'];


       switch($grade)
           {
        case ($grade>=80 && $grade<=100) :
            echo "  Grade is A";
        break;

        case  ($grade>=70 && $grade<=79):
             echo "  Grade is B";
        break;

        case  ($grade>=60 && $grade<=69):
            echo "   Grade is C";
        break;

        case  ($grade>=50 && $grade<=59):
            echo "   Grade is D";
        break;
       
        case  ($grade>=40 && $grade<=49):
            echo "   Grade is E";
         break;
        
         case  ($grade>=0 && $grade<=39):
            echo "   Grade is F";
         break;

        default:
            echo  "  ENTER VALID MARK  ";
}

?>
</body>
</html>
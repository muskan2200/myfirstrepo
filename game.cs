
 using System;

namespace ConsoleApp
{
    class Program 
    {
  static void Main ( string [] args)    
{    
       while(true){
           // Console.WriteLine(" Choose between rock ,paper and scissor ");
       Console.WriteLine(" Enter 1 for paper");
      Console.WriteLine("Enter 2 for scissor");
      Console.WriteLine("Enter 3 for Rock");
        int myval=Convert.ToInt32(Console.ReadLine()); 
        if( !(myval>=1 && myval <=3) )
        {
            Console.WriteLine(" you enter wrong number ");
            continue;
        }
      Random random = new Random();
       int compval = random.Next(1, 4);
       string compchoose;
       if(compval==1)
         {
             compchoose="paper";
         }
        else if( compval==2)
        {
            compchoose="scissor";
        }
        else
        {
            compchoose="rock";
        }
     
     if(myval==1 ) // if we choose paper
     {     Console.WriteLine(" You choose paper");
          Console.WriteLine(  " Computer choose " + compchoose); 
          if(compval==1)
     {    
         Console.WriteLine(" Its a Tie");
     }
     else if (  compval==2)
     {
        Console.WriteLine(" computer win");

     }
      else 
      {
          Console.WriteLine(" you win");
      }

     }   
       
       else if( myval==2)
       {   Console.WriteLine(" You choose scissor");
          Console.WriteLine(  " Computer choose " + compchoose); 
           if( compval==1)
       {
           Console.WriteLine(" you win");
       }
       else if ( compval==2)
       {
           Console.WriteLine(" Its a Tie");
       }
       else 
       {
           Console.WriteLine(" computer win");
       }

       } 
       
       else {
             Console.WriteLine(" You choose rock");
          Console.WriteLine(  " Computer choose " + compchoose); 
         if( compval==1)
       {
           Console.WriteLine(" computer win");
       }
       else if ( compval==2)
       {
           Console.WriteLine(" you win");
       }
       else
       {
           Console.WriteLine(" Its a tie");
       } 
       }

          Console.WriteLine(" Enter 9 for exit and 8 for continue");
           int gameval=Convert.ToInt32(Console.ReadLine()); 
            if(gameval==9)
              { break; }
          }
   }
}
}
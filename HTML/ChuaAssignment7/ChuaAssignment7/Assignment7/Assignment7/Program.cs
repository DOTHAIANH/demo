using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Assignment7
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary dc = new Dictionary();
            int lenh;
            do
            {
                Console.WriteLine(" 1. Add a word \n 2. Edit word \n 3. Search a meaning \n 4. Quit");
                Console.WriteLine("Press any key to continue..");
                lenh = int.Parse(Console.ReadLine());

                switch (lenh)
                { 
                    case 1:
                        Console.Write("Hay nhap mot tu moi:");
                        string newword = Console.ReadLine();
                        Console.Write("Hay nhap nghia cua tu:");
                        string meaning = Console.ReadLine();
                        if (dc.AddWord(newword, meaning))
                            Console.WriteLine("Them moi thanh cong");
                        else
                            Console.WriteLine("Tu nay da co trong tu dien");
                        
                        Console.ReadKey();
                        break;
                    case 2:
                        Console.Write("Hay nhap tu can sua:");
                        string editword = Console.ReadLine();
                        Console.Write("Hay nhap nghia cua tu can sua:");
                        string newmeaning = Console.ReadLine();
                        if (dc.EditWord(editword, newmeaning))
                            Console.WriteLine("Cap nhat thanh cong");
                        else
                            Console.WriteLine("Tui nay khong co trong tu dien");
                        Console.ReadKey();
                        break;
                    case 3:
                        Console.Write("Hay nhap tu can tim:");
                        string searchword = Console.ReadLine();
                        Console.Write("Nghia cua tu la:");
                        Console.WriteLine(dc.Translate(searchword));
                        Console.ReadKey();
                        break;
                    case 4:
                        break;
                    default :
                        break;
                
                }


            }

            while (lenh != 4);

            


        }
    }
}

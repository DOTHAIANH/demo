using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace Assignment_58
{
    internal class Program
    {
        static void Main(string[] args)
        {

            /*Products objProduct = new Products();
            Console.WriteLine("Nhap chi tiet san pham:");
            Console.WriteLine("Nhap ten SP:");
            string name = Console.ReadLine();
            Console.WriteLine("Nhap so luong");
            int quantity = int.Parse(Console.ReadLine());
            objProduct.SetDetail(name, quantity);


            IProduct iproduct = objProduct;
            iproduct.ShowDetail();

            Console.WriteLine("Nhap them Quantity: ");
            int morequantity = int.Parse(Console.ReadLine());
            iproduct.AddQuantity(morequantity);
            objProduct.ShowDetail();
            */
            Storage newStorage = new Storage();
            int Chon;

            do
            {
                Console.WriteLine("<<<<<<<<MENU>>>>>>>>");
                Console.WriteLine("1. Show detail storage");
                Console.WriteLine("2. Change information for a product in the storage");
                Console.WriteLine("3. Add quantity for a product in the storage");
                Console.WriteLine("4. Add a new product to the storage");
                Console.WriteLine("5. Remove a product from the storage");
                Console.WriteLine("6. Exit");
                Console.WriteLine("Hay chon 1 lenh: ");
                Chon = int.Parse(Console.ReadLine());

                switch (Chon)
                {
                    case 1:
                        newStorage.ShowDetail();
                        break;
                    case 2:
                        Console.WriteLine("Nhap ID can sua: ");
                        string id = Console.ReadLine();
                        if (newStorage.IsProduct(id))
                        {
                            Console.WriteLine("Nhap Name: ");
                            string Name = Console.ReadLine();
                            Console.WriteLine("Nhap Quantity: ");
                            int Quantity = int.Parse(Console.ReadLine());
                            newStorage.SetDetail(id, Name, Quantity);
                        }
                        else
                        {
                            Console.WriteLine("Id khong ton tai!");
                        }
                        break;
                    case 3:
                        Console.WriteLine("Nhap ID can sua: ");
                        string Id = Console.ReadLine();
                        if (newStorage.IsProduct(Id))
                        {
                            Console.WriteLine("Nhap so luong can them: ");
                            int addQuantity = int.Parse(Console.ReadLine());
                            newStorage.AddQuantity(Id, addQuantity);
                        }
                        else
                        {
                            Console.WriteLine("Id khong ton tai!");
                        }
                        break;
                    case 4:
                        newStorage.AddProduct();
                        break;
                    case 5:
                        Console.WriteLine("Nhap ID sp can xoa: ");
                        string ID = Console.ReadLine();
                        newStorage.RemoveProduct(ID);
                        break;
                    case 6:
                        break;
                    default:
                        break;
                }
            } while (Chon != 6);

            Console.ReadKey();
        }
    }
}

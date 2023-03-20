using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment_58
{
    internal class Storage : IStorage
    {
        int Count = 0;
        Products[] arrProduct = new Products[100];
        string _ID;
        public string ID
        {
            get { return _ID; }
            set { _ID = value; }
        }
        string _Name;
        public string Name
        {
            get { return _Name; }
            set { _Name = value; }
        }
        int _Quantity;
        public int Quantity
        {
            get { return _Quantity; }
            set { _Quantity = value; }
        }

        public void AddQuantity(string ID, int Quantity)
        {
            for (int i = 0; i < Count; i++)
            {
                if (arrProduct[i].ID == ID)
                {
                    arrProduct[i].AddQuantity(Quantity);
                }
            }

        }

        public bool IsProduct(string ID)
        {
            bool check = false;
            for (int i = 0; i < Count; i++)
            {
                if (ID == arrProduct[i].ID)
                {
                    check = true;
                }
            }
            return check;
        }

        public void RemoveProduct(string id)
        {
            if (IsProduct(id))
            {
                int i;
                for (i = 0; i < Count; i++)
                {
                    if (arrProduct[i].ID == id)
                    {
                        break;
                    }
                    for (int j = i; j < Count - 1; j++)
                    {

                        arrProduct[j] = arrProduct[j + 1];
                    }
                }

            }
            else
            {
                Console.WriteLine("Id ban nhap khong ton tai");
            }

        }

        public void AddProduct()
        {
                Console.Write("Enter name: ");
                string name = Console.ReadLine();

                Console.Write("Enter quantity: ");
                int quantity = int.Parse(Console.ReadLine());

                Products newProduct = new Products();
                newProduct.SetDetail(name, quantity);
                arrProduct[Count] = newProduct;
                Count++;
        }

        public void SetDetail(string ID, string Name, int Quantity)
        {
            for (int i = 0; i < Count; i++)
            {
                if (arrProduct[i].ID == ID)
                {
                    arrProduct[i].SetDetail(Name, Quantity);
                    return;
                }
            }
        }

        public void ShowDetail()
        {
            for (int i = 0; i < Count; i++)
            {
                arrProduct[i].ShowDetail();
            }
        }
    }
}

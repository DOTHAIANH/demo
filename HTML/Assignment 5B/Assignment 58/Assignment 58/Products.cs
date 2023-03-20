using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment_58
{
    class Products : IProduct
    {
        static int Count = 0;
        string _ID;
        public string ID
        {
            get { return _ID; }
            set { _ID = value;  }
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
        public void AddQuantity(int addQuantity)
        {
            _Quantity = Quantity + addQuantity;
        }

        public void SetDetail(string name, int quantity)
        {
            _Name = name;
            _Quantity = quantity;
        }

        public void ShowDetail()
        {
            Console.WriteLine("== {0}      {1}       {2} ==", ID, Name, Quantity);
        }
        public Products()
        {
            Count++;
            _ID = "Hang" + Count.ToString();
            Name = "No Name";
            Quantity = 0;
        }
    }
}

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment_58
{
    interface IStorage
    {
        void ShowDetail();
        bool IsProduct(string ID);
        void SetDetail(string ID, string Name, int Quantity);
        void AddQuantity(string ID, int Quantity);
        void AddProduct();
        void RemoveProduct(string id);
    }
}

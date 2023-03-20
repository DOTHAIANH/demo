using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment_58
{
    interface IProduct
    {
        void ShowDetail();
        void SetDetail(string Name, int Quantity);
        void AddQuantity(int addQuantity);
    }
}

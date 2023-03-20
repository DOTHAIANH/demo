using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Assignment7
{
    interface IDictionary
    {
        bool AddWord(string a, string b);
        bool EditWord(string a, string b);
        string Translate(string a);
    }
}

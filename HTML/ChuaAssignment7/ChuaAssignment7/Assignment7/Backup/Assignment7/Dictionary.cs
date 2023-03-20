using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Collections;

namespace Assignment7
{
    class Dictionary : IDictionary
    {
        #region IDictionary Members
        Hashtable ht = new Hashtable();
        
        public bool AddWord(string a, string b)
        {
            try
            {
                ht.Add(a, b);
                return true;
            }
            catch
            {
                return false;
            }
        }

        public bool EditWord(string a, string b)
        {
            try
            {
                ht[a]=b;
                return true;
            }
            catch
            {
                return false;
            }
        }

        public string Translate(string a)
        {
            return ht[a].ToString();
        }

        #endregion
    }
}

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Collections;

namespace Assignment16
{
    class Program
    {
        static void Main(string[] args)
        {
            string chon;
            int ID = 0;
            DoctorManagement dm = new DoctorManagement();
            do{
                Console.Clear();
                Console.WriteLine("PLEASE AN OPTION:");
                Console.WriteLine("1. Add new doctor");
                Console.WriteLine("2. View list doctor");
                Console.WriteLine("3. Sort doctor by rank");
                Console.WriteLine("4. Delete a doctor");
                Console.WriteLine("5. Search doctor by email");
                Console.WriteLine("6. Exit");
                Console.Write("Enter a number:");
                chon=Console.ReadLine();
                switch(chon)
                {
                    case "1":
                        Doctor d = new Doctor();
                        d.ID = ++ID;
                        Console.Write("Name:");
                        d.Name = Console.ReadLine();
                        Console.Write("Birthday:");
                        DateTime dt;
                        while (!DateTime.TryParse(Console.ReadLine(), out dt))
                            Console.Write("Re enter birthday:");
                        
                        d.BirthDay = dt;
                        Console.Write("Speciality:");
                        d.Speciality = Console.ReadLine();
                        Console.Write("Email:");
                        d.Email = Console.ReadLine();
                        Console.Write("Rank:");
                        d.rank =int.Parse(Console.ReadLine());
                        for (int i = 0; i < 3; i++)
                        {
                            Console.Write("Phone {0}:", i+1);
                            d[i] = Console.ReadLine();
                        }
                        dm.Add(d);
                        break;
                    case "2":
                        foreach (IDoctor d1 in dm)
                            d1.ShowInfo();
                        break;
                    case "3":
                        dm.Sort(new SortByRank());
                        Console.WriteLine("Done!");
                        break;
                    case "4":
                        Console.WriteLine("Enter an ID to delete:");
                        int delID = int.Parse(Console.ReadLine());
                        Boolean daXoa = false;
                        foreach(IDoctor d1 in dm)
                            if (d1.ID == delID)
                            {
                                dm.Remove(d1);
                                daXoa = true;
                                break;
                            }
                        if(daXoa)
                            Console.WriteLine("Deleted");
                        else
                            Console.WriteLine("Not found!");
                        break;
                    case "5":
                        Console.WriteLine("Enter an email:");
                        string showEmail = Console.ReadLine();
                        foreach (IDoctor d1 in dm)
                            if (d1.Email==showEmail)
                                d1.ShowInfo();
                        break;
                    case "6":
                        Console.WriteLine("Bye bye!");
                        
                        break;
                    default:
                        Console.WriteLine("Invalid!");
                        break;
                }
                Console.ReadLine();
            }while(chon!="6");
            
        }
    }

    interface IDoctor
    {
        int ID { get; set; }
        string Name { get; set; }
        DateTime BirthDay { get; set; }
        string Speciality { get; set; }
        string Email { get; set; }
        int Rank{set;}
        string this[int index] { set; get; }
        void ShowInfo();
    }

    class Doctor : IDoctor
    {
        #region IDoctor Members
        
        int id;
        string name;
        DateTime birthday;
        string speciality;
        string email;
        public int rank;
        string[] PhoneList = new string[3];

        public int ID
        {
            get
            {
                return id;
            }
            set
            {
                id = value;
            }
        }

        public string Name
        {
            get
            {
                return name;
            }
            set
            {
                name = value;
            }
        }

        public DateTime BirthDay
        {
            get
            {
                return birthday;
            }
            set
            {
                birthday = value;
            }
        }

        public string Speciality
        {
            get
            {
                return speciality;
            }
            set
            {
                speciality = value;
            }
        }

        public string Email
        {
            get
            {
                return email;
            }
            set
            {
                email = value;
            }
        }

        public int Rank
        {
            set { rank = value; }
        }

        public string this[int index]
        {
            get
            {
                return PhoneList[index];
            }
            set
            {
                PhoneList[index] = value;
            }
        }

        public void ShowInfo()
        {
            Console.WriteLine("ID={0}, Name={1}, Birthday={2}, Speciality={3}, Email={4}", ID, Name, BirthDay, Speciality, Email);
        }

        #endregion
    }

    class DoctorManagement:IEnumerable
    {
        private ArrayList doctorList = new ArrayList();
        public void Add(IDoctor doctor)
        {
            doctorList.Add(doctor);
        }

        public void Remove(IDoctor doctor)
        {
            doctorList.Remove(doctor);
        }

        public void Sort(IComparer comp)
        {
            doctorList.Sort(comp);
        }

        #region IEnumerable Members

        public IEnumerator GetEnumerator()
        {
            foreach (IDoctor d in doctorList)
                yield return d;
        }

        #endregion
    }

    class SortByRank : IComparer
    {
        #region IComparer Members

        public int Compare(object x, object y)
        {
            Doctor a = x as Doctor;
            Doctor b = y as Doctor;
            return a.rank.CompareTo(b.rank);
        }

        #endregion
    }



}

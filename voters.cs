using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Election
{
    #region Voters
    public class Voters
    {
        #region Member Variables
        protected string _username;
        protected string _regno;
        #endregion
        #region Constructors
        public Voters() { }
        public Voters(string username)
        {
            this._username=username;
        }
        #endregion
        #region Public Properties
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Regno
        {
            get {return _regno;}
            set {_regno=value;}
        }
        #endregion
    }
    #endregion
}
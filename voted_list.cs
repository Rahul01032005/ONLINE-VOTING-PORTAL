using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Election
{
    #region Voted_list
    public class Voted_list
    {
        #region Member Variables
        protected string _voted;
        #endregion
        #region Constructors
        public Voted_list() { }
        public Voted_list(string voted)
        {
            this._voted=voted;
        }
        #endregion
        #region Public Properties
        public virtual string Voted
        {
            get {return _voted;}
            set {_voted=value;}
        }
        #endregion
    }
    #endregion
}
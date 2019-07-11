using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using MySql.Data.MySqlClient;
using System.Data;

namespace Laury.Pages
{
    public class ConnexionModel : PageModel
    {
        public void OnGet()
        {
        }
        public MySqlConnection ConnexionBDD()
        {
            string sCnx;
            MySqlConnection Cnx;
            sCnx = "server=localhost;uid=root;database=auditlaury;port=3306;pwd=''";

            //création d'un objet connexion
            Cnx = new MySqlConnection(sCnx);
            //ouverture de la connexion
            Cnx.Open();
            return Cnx;
        }
        public void deConnexionBDD(MySqlConnection Cnx)
        {
            Cnx.Close();
        }
        

        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            string sCnx;
            MySqlConnection Cnx;
            sCnx = "server=localhost;uid=root;database=auditlaury;port=3306;pwd=''";

            //création d'un objet connexion
            Cnx = new MySqlConnection(sCnx);
            //ouverture de la connexion
            Cnx.Open();


            MySqlCommand cmd = Cnx.CreateCommand();
            cmd.CommandType = CommandType.Text;
            cmd.CommandText = "select * from users where login ='" + user_login.Text + "'and password ='" + mdp.Text + "'";
            cmd.ExecuteNonQuery();
            DataTable dt = new DataTable();
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.Fill(dt);
            foreach (DataRow dr in dt.Rows)
            {
                Session["login"] = dr["login"].ToString();
                Response.Redirect("general.aspx");
            }

            label1.Text = "Mot de passe ou login incorrect";



            Cnx.Close();
        }

    }
}
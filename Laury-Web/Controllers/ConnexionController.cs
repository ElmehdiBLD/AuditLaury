using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Laury_Web.Models;
using Microsoft.AspNetCore.Mvc;

namespace Laury_Web.Controllers
{
    public class ConnexionController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }

        [HttpPost]
        public string ConexionPost(ConnexionModel connexion)
        {
            var test = connexion.Login + connexion.Password;
            return test;
        }
    }
}
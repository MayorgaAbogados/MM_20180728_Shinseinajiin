// ----------------------------------------------------------------//
// Controller : Memberships
// ----------------------------------------------------------------//
const database = require("../database/index.js");
// ----------------------------------------------------------------//
var controller = {};
// Membership's SignUp Routing Handler
controller.signup = function(req, res) {
  console.log("Sign Up");
  res.send("Sign Up from API");
};
// Add Membership Form to Signup, Append to database and send email
controller.add = function(req, res) {

  var db_data = {
    company: req.body.company,
    nit: req.body.nit,
    industry: req.body.industry,
    city: req.body.city,
    name: req.body.name,
    email: req.body.email,
    cellphone: req.body.cellphone,
    phone: req.body.phone,
    twitter: req.body.twitter,
    content: req.body.content
  };
  var db_config = {
    table_name : "memberships"
  }
  var dbResponse = await database.add(db_config,db_data);
  /*TODO :
    Add to Database;
    if (Suscesfull) then :
      send email,
      return ajax json : ok
    else
      return ajax json : error
  */
};

// Membership's Login Routing Handler
controller.login = function(req, res) {
  console.log("Log In");
};

// Membership's Main App Routing Handler
controller.app = function(req, res) {
  console.log("App");
};

// Membership's Main App Routing Handler
controller.admin = function(req, res) {
  console.log("Admin");
};

module.exports = controller;

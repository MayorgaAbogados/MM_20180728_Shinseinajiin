// ----------------------------------------------------------------//
// Controller : Memberships
// ----------------------------------------------------------------//
// ----------------------------------------------------------------//
var controller = {};
// Membership's SignUp Routing Handler
controller.signup = function(req, res) {
  console.log("Sign Up");
  res.send("Sign Up from API");
};
controller.add = function(req, res) {
  data = {
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

// ----------------------------------------------------------------//
// Controller : Memberships
// ----------------------------------------------------------------//
const database = require("../database/index.js");
// ----------------------------------------------------------------//
var controller = {};
// Membership's SignUp Routing Handler
controller.home = function(req, res) {
  res.send("Welcome to Mayorga Abogados");
};

module.exports = controller;

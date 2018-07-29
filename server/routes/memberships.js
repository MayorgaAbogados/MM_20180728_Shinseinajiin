// ----------------------------------------------------------------//
// Routing : Memberships
// ----------------------------------------------------------------//
var controller = require("../controllers/memberships.js");
var express = require("express");
var router = express.Router();
// ----------------------------------------------------------------//

// Membership's SignUp Routing Handler
router.get("/signup", function(req, res) {
  controller.signup(req, res);
});
// Membership's SignUp Routing Handler
router.post("/signup/add", function(req, res) {
  controller.add(req, res);
});

// Membership's Login Routing Handler
router.get("/login", function(req, res) {
  controller.login(req, res);
});

// Membership's Main App Routing Handler
router.get("/app", function(req, res) {
  controller.app(req, res);
});

// Membership's Main App Routing Handler
router.get("/admin", function(req, res) {
  controller.admin(req, res);
});

module.exports = router;

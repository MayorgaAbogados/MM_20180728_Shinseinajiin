// ----------------------------------------------------------------//
// Routing : Memberships
// ----------------------------------------------------------------//
var controller = require("../controllers/home.js");
var express = require("express");
var router = express.Router();
// ----------------------------------------------------------------//

// Membership's SignUp Routing Handler
router.get("", function(req, res) {
  controller.home(req, res);
});

module.exports = router;

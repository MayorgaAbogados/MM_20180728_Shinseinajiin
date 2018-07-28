// ------------------------------------------------------------------- //
// -- Node.js + Express Server for mm-abogados WebServices          -- //
// ------------------------------------------------------------------- //
//      Author   :  Jorge Luis Mayorga
//      Update   :  28/07/2018
//      City     :  Bogotá, Colombia.
//      Comments :
// ------------------------------------------------------------------- //
/*
 *
 */
// ------------------------------------------------------------------- //
// -- Loading Server Config files ------------------------------------ //
// ------------------------------------------------------------------- //
const config = require("./server/config.json");
// ------------------------------------------------------------------- //
/*
 *
 */
// ------------------------------------------------------------------- //
// -- Require Express & Path ----------------------------------------- //
// ------------------------------------------------------------------- //
const express = require("express");
const nodemailer = require("nodemailer");
const path = require("path");
// ------------------------------------------------------------------- //
/*
 *
 */
// ------------------------------------------------------------------- //
// -- Run Server App  ------------------------------------------------ //
// ------------------------------------------------------------------- //
const app = express();
// ------------------------------------------------------------------- //
/*
 *
 */
// Serve only the static files form the dist directory
app.use(express.static(__dirname + "/"));

app.get("/", function(req, res) {
  res.sendFile(path.join(__dirname + "/index.html"));
});

app.get("/:app", function(req, res) {
  let app_folder = req.params.app;
  res.sendFile(path.join(__dirname + `/apps/${app_folder}/dist/index.html`));
});

app.post("/api/email/", function(req, res) {
  var api_content = {};

  var transporter = nodemailer.createTransport({
    service: "gmail",
    auth: {
      user: "jl.mayorga236@gmail.com",
      pass: "lvosca.inc"
    }
  });

  var mailOptions = {
    from: "jl.mayorga236@gmail.com",
    to: "wallamejorge@hotmail.com",
    subject: "Sending Email using Node.js",
    text: "That was easy!"
  };

  transporter.sendMail(mailOptions, function(error, info) {
    if (error) {
      api_content = {
        api: "email",
        response: "Email Api Request Failed",
        error: error
      };
    } else {
      api_content = {
        api: "email",
        response: info.response
      };
    }
  });

  var api_out = JSON.stringify(api_content);
  res.send(api_out);
});

// Start the app by listening on the default Heroku port
app.listen(process.env.PORT || 8080);

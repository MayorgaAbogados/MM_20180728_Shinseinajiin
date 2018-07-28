// ------------------------------------------------------------------- //
// -- Node.js + Express Server for mm-abogados WebServices          -- //
// ------------------------------------------------------------------- //
//      Author   :  Jorge Luis Mayorga
//      Update   :  28/07/2018
//      City     :  Bogotá, Colombia.
//      Comments :
// ------------------------------------------------------------------- //

// ------------------------------------------------------------------- //
// -- Loading Server Config files ------------------------------------ //
// ------------------------------------------------------------------- //

//Install express server
const express = require("express");
const express = require("express");
const path = require("path");

const app = express();

// Serve only the static files form the dist directory
app.use(express.static(__dirname + "/"));

app.get("/:app", function(req, res) {
  let app_folder = req.params.app;
  res.sendFile(path.join(__dirname + `/apps/${app_folder}/dist/index.html`));
});

app.get("/api/email/", function(req, res) {
  var api_content = {};
  api_content = {
    api: "email",
    response: "Email Api Request"
  };
  var api_out = JSON.stringify(api_content);
  res.send(api_out);
});

// Start the app by listening on the default Heroku port
app.listen(process.env.PORT || 8080);

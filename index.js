//Install express server
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
  var api_content = null;
  api_content = {
    api: "email",
    response: "Email Api Request"
  };
  var api_out = JSON.stringify(api_content);
  res.send();
});

// Start the app by listening on the default Heroku port
app.listen(process.env.PORT || 8080);

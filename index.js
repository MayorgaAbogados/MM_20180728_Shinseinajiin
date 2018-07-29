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
const routes = require(config.path.route + "/" + "index.js");
// ------------------------------------------------------------------- //
/*
 *
 */
// ------------------------------------------------------------------- //
// -- Require Express & Path ----------------------------------------- //
// ------------------------------------------------------------------- //
const express = require("express");
const bodyParser = require("body-parser");
// ------------------------------------------------------------------- //
/*
 *
 */
// ------------------------------------------------------------------- //
// -- Run Server App  ------------------------------------------------ //
// ------------------------------------------------------------------- //
const app = express();
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
// ------------------------------------------------------------------- //
/*
 *
 */
// ------------------------------------------------------------------- //
// -- Load Models and Components ------------------------------------- //
// ------------------------------------------------------------------- //
app.use("/", require("./server/routes/home.js"));
app.use("/membership", require("./server/routes/memberships.js"));
// ------------------------------------------------------------------- //
/*
 *
 */
// ------------------------------------------------------------------- //
// -- Run Server App  ------------------------------------------------ //
// ------------------------------------------------------------------- //
app.listen(process.env.PORT || 8080);
// ------------------------------------------------------------------- //

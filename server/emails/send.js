// ---------------------------------------------- //
// -- Send Node.js Email Provider
// ---------------------------------------------- //
const nodemailer = require("nodemailer");
// ---------------------------------------------- //
module.exports = {
  send: function(email, data, callback) {
    let smtpConfig = {
      host: "perseo.yoursitesecure.net",
      port: 465,
      secure: true,
      auth: {
        user: "admin@mayorga.com.co",
        pass: "suaita.monteria"
      }
    };

    let mailOptions = {
      from: email.from,
      to: email.to,
      subject: email.subject,
      //attachDataUrls: true,
      text: email.text
    };

    let mailTransporter = nodemailer.createTransport(smtpConfig);
    console.log("Starting to Send Email");
    mailTransporter.sendMail(mailOptions, function(error, info) {
      if (error) {
        callback(error);
      } else {
        callback(info);
      }
    });
  }
};

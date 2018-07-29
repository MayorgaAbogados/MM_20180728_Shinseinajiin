// ---------------------------------------------- //
// -- Send Node.js Email Provider
// ---------------------------------------------- //
const nodemailer = require("nodemailer");
// ---------------------------------------------- //
module.exports = {
  send: function(email, data) {
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
      text: email.text,
      html: email
    };

    let mailTransporter = nodemailer.createTransport(smtpConfig);
    mailTransporter.sendMail(mailOptions, function(error, info) {
      if (error) {
        res.send(api_out);
      } else {
        res.send(api_out);
      }
    });
  }
};

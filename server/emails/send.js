// ---------------------------------------------- //
// -- Send Node.js Email Provider
// ---------------------------------------------- //
const nodemailer = require("nodemailer");
// ---------------------------------------------- //
module.exports = {
  send: function(email, data) {
    let smtpConfig = {
      host: "smtp.example.com",
      port: 587,
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
      attachDataUrls: true,
      text: email.text,
      html :

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

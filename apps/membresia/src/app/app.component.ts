import { Component } from "@angular/core";
import { Http } from "@angular/http";
import axios from "axios";

@Component({
  selector: "app-root",
  templateUrl: "./app.component.html",
  styleUrls: ["./app.component.less"]
})
export class AppComponent {
  public companyIsFocus = false;
  public nitIsFocus = false;
  public industryIsFocus = false;
  public cityIsFocus = false;
  public nameIsFocus = false;
  public emailIsFocus = false;
  public cellphoneIsFocus = false;
  public phoneIsFocus = false;
  public twitterIsFocus = false;
  public sendingFlag = true;
  public consultIsFocus = false;

  public form = {
    company: null,
    industry: null,
    nit: null,
    city: null,
    contactName: null,
    contactEmail: null,
    contactCellphone: null,
    phone: null,
    ext: null,
    twitter: null,
    consult: null
  };
  constructor(private http: Http) {}

  ngOnInit() {}

  focusAnim(str) {
    if (str == "company" && !this.form.company) {
      this.companyIsFocus = false;
    }
    if (str == "nit" && !this.form.nit) {
      this.nitIsFocus = false;
    }
    if (str == "industry" && !this.form.industry) {
      this.industryIsFocus = false;
    }
    if (str == "city" && !this.form.city) {
      this.cityIsFocus = false;
    }
    if (str == "name" && !this.form.contactName) {
      this.nameIsFocus = false;
    }
    if (str == "email" && !this.form.contactEmail) {
      this.emailIsFocus = false;
    }
    if (str == "cellphone" && !this.form.contactCellphone) {
      this.cellphoneIsFocus = false;
    }
    if (str == "phone" && !this.form.phone) {
      this.phoneIsFocus = false;
    }
    if (str == "twitter" && !this.form.twitter) {
      this.twitterIsFocus = false;
    }
    if (str == "consult" && !this.form.consult) {
      this.consultIsFocus = false;
    }
  }
  postForm() {
    let formData = new FormData();
    formData.append("company", this.form.company);
    formData.append("industry", this.form.industry);
    formData.append("nit", this.form.nit);
    formData.append("city", this.form.city);
    formData.append("name", this.form.contactName);
    formData.append("email", this.form.contactEmail);
    formData.append("cellphone", this.form.contactCellphone);
    formData.append("phone", this.form.phone);
    formData.append("twitter", this.form.twitter);
    formData.append("consult", this.form.consult);

    let url = "/memberships/add";
    let self = this;
    self.sendingFlag = true;
    axios
      .post(url, formData)
      .then(function(response) {
        self.sendingFlag = false;
        window.console.log(response);
      })
      .catch(function(error) {
        window.console.log("error");
      });
  }
}

import { Component } from '@angular/core';

@Component({
  selector: 'app-home-page',
  templateUrl: './home-page.component.html',
  styleUrls: ['./home-page.component.css']
})
export class HomePageComponent {
  slides = [
    { img: 'assets/images/corporateVehicle.jpg', heading: "Corporate Vehicle", para:"A Swiss Trust Company can conduct commercial activities, including engaging in financial business models; for their own....account or for those of others. In use for more than a century, a Swiss PTC has reemerged as a practical solution for the savvy investor or entrepreneur. Scroll down to read more about these unique vehicles function."},
    { img: 'assets/images/tax.jpg', heading: "Taxation", para:"Creating legal separation between you and your assets is the first step towards protecting them. A Swiss PTC benefits from Switzerland's incredibly business-friendly tax codes. Apart from this, Switzerland does not levy capital gains tax on any asset class - corporations from around the world have enjoyed these privileges, courtesy the highly sophisticated accountants and tax lawyers who work in the country." },
    { img: 'assets/images/anonomys.jpg', heading: "Anonymity", para:"Swiss trusts can provide a certain degree of anonymity to their beneficiaries, as the incorporation papers are not public documents and the identity of the beneficiaries can be kept confidential. Additionally, a Swiss Director act as a buffer between the beneficiaries and the outside world, shielding them from scrutiny and potential legal action." },
  ];
  slideConfig = { slidesToShow: 1, slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    fadeSpeed: 1000 };
}

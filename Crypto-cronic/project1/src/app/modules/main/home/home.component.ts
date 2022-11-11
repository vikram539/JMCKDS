import { Component, OnInit } from '@angular/core';
import * as $ from 'jquery';
@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {

    $(function(){
      setTimeout(() =>{
        $("#homeBtn").fadeIn();
      }, 1500);
      
      $(document).on("click", ".linkButton", function(e){
        e.preventDefault();
        let this_ = $(this);
        let signatureImg = $(".row>.signatureImg");
        let signatureText = $(".row>.signatureText");
        $(this).closest("#homeBtn").fadeOut();
        $(".row>.signatureImg>img").animate({marginLeft: 600}, 1000);
        $(".row>.signatureText").animate({left: 0, zIndex: 999}, 1000, function(){
          $(this).css({"opacity": 1, "transition":"all linear 0.5s"});
        });

        $(".row>.signatureBtnBlock").animate({bottom: 0, opacity: 1}, 1000);


      })
    })
  }

}

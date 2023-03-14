import { Component, ElementRef, OnInit, Renderer2 } from '@angular/core';
import * as $ from 'jquery';

@Component({
  selector: 'app-home-banner',
  templateUrl: './home-banner.component.html',
  styleUrls: ['./home-banner.component.css']
})
export class HomeBannerComponent implements OnInit {

  constructor(public elmRef: ElementRef, public render: Renderer2){

  }
  ngOnInit(): void {
    // let bannerLenght = this.elmRef.nativeElement.querySelector(".bannerWrap>.container").children.length;
    // let bannerItems = this.elmRef.nativeElement.querySelectorAll(".bannerWrap>.container>.bannerItems");
    // // console.log("bannerItems", bannerItems);
    // let image_array = [
    //   {"imgName": "slide", "path": "assets/images/"}
    // ]
    // let i = 0;
    // let bannerTimeInterval =  setInterval(() =>{
    //   i = (i + 1) % bannerLenght;
    //   console.log("bannerItems", bannerItems[i].addClass("active").siblings().removeClass("active"))
    //   // this.render.addClass(bannerItems[counter], "active");
    //   // bannerItems[counter].fadeOut(1000, () => {
    //   //   bannerItems[counter].fadeIn(1000)
    //   // })
      
    // }, 1000) 
    $(function(){
      let bannerLenght = $(".bannerWrap>.container").children().length;
      let bannerItems = $(".bannerWrap>.container>.bannerItems");

      let i = 0;
      setInterval(() => {
        i = (i + 1) % bannerLenght;

        $(bannerItems[i]).fadeIn("slow").siblings().fadeOut("slow");
      }, 3000)
    })   
  }
}

import { Component, ElementRef, OnInit, Renderer2 } from '@angular/core';

@Component({
  selector: 'app-home-banner',
  templateUrl: './home-banner.component.html',
  styleUrls: ['./home-banner.component.css']
})
export class HomeBannerComponent implements OnInit {

  constructor(public elmRef: ElementRef, public render: Renderer2){

  }
  ngOnInit(): void {
    let bannerLenght = this.elmRef.nativeElement.querySelector(".bannerWrap>.container").children.length;
    
    let counter = 0;
    let bannerTimeInterval =  setInterval(() =>{

      if(counter == bannerLenght){
        counter--;
        clearInterval(bannerTimeInterval);
        console.log("counter clear interval", counter);
      }
      else{
        counter++;      
        // this.render.  
      }
    }, 1000)    
  }
}

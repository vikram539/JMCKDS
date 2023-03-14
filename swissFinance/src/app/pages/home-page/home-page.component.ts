import { Component, OnInit } from '@angular/core';
import { Title, Meta } from '@angular/platform-browser';

@Component({
  selector: 'app-home-page',
  templateUrl: './home-page.component.html',
  styleUrls: ['./home-page.component.css']
})
export class HomePageComponent implements OnInit {
  constructor(public titleService: Title, public metaTagService: Meta){
  }

  ngOnInit(): void {
    this.titleService.setTitle("Home | Helvetia Capital Trust AG");

    this.metaTagService.addTags([
      { name: 'keywords', content: 'Discreet. Dynamic. Dependable' },  
      { name: 'robots', content: 'index, follow' },  
      { name: 'writer', content: ' Helvetia Capital Trust AG' },  
      { charset: 'UTF-8' }  
    ]);
    
  }
}

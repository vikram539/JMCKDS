import { Component } from '@angular/core';
import * as $ from 'jquery';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent {
  constructor(){}

  ngOnInit(): void {

    $(function(){
      $(document).on("click", ".toggleIcon", function(){
       $(".mobileMenuItems").animate({left: 0}, 500);
      })

      // Close menu
      $(document).on("click", ".closeMenu", function(){
        $(".mobileMenuItems").animate({left: -100+"%"}, 500);
      })

      // close menu toggle wrap
      $(document).on("click", ".mobileMenuItems>li>a", function(){
        $(".mobileMenuItems").animate({left: -100+"%"}, 0);
      })

    })
  }
}

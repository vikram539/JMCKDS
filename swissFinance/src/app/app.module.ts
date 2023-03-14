import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './includes/header/header.component';
import { FooterComponent } from './includes/footer/footer.component';
import { HomeBannerComponent } from './includes/home-banner/home-banner.component';
import { HomePageComponent } from './pages/home-page/home-page.component';
import { AboutUsComponent } from './pages/about-us/about-us.component';
import { WhatWeDoComponent } from './pages/what-we-do/what-we-do.component';
import { GetInTouchComponent } from './pages/get-in-touch/get-in-touch.component';
import { SubscribeComponent } from './includes/subscribe/subscribe.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    HomeBannerComponent,
    HomePageComponent,
    AboutUsComponent,
    WhatWeDoComponent,
    GetInTouchComponent,
    SubscribeComponent
  ],
  imports: [
    BrowserModule.withServerTransition({ appId: 'serverApp' }),
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

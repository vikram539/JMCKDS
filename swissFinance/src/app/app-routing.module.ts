import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutUsComponent } from './pages/about-us/about-us.component';
import { GetInTouchComponent } from './pages/get-in-touch/get-in-touch.component';
import { HomePageComponent } from './pages/home-page/home-page.component';
import { WhatWeDoComponent } from './pages/what-we-do/what-we-do.component';

const routes: Routes = [
  {path: "", component: HomePageComponent},
  {path: "about-us", component: AboutUsComponent},
  {path: "what-we-do", component: WhatWeDoComponent},
  {path: "get-in-touch", component: GetInTouchComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes, {
    initialNavigation: 'enabledBlocking'
})],
  exports: [RouterModule]
})
export class AppRoutingModule { }

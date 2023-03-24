import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomePageComponent } from './pages/home-page/home-page.component';
import { OurWorksPageComponent } from './pages/our-works-page/our-works-page.component';

const routes: Routes = [
  {path: "", component: HomePageComponent},
  {path: "swiss-trust", component: OurWorksPageComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes, {
    initialNavigation: 'enabledBlocking'
})],
  exports: [RouterModule]
})
export class AppRoutingModule { }

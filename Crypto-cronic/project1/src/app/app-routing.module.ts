import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './modules/main/home/home.component';
import { OurPastComponent } from './modules/main/our-past/our-past.component';

const routes: Routes = [
  
  {
    path: 'ourpast',
    component: OurPastComponent
  },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

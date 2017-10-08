import { BrowserModule } from '@angular/platform-browser';
import { NgModule, ModuleWithProviders } from '@angular/core';
import { HttpModule } from '@angular/http';
import {HttpClientModule} from '@angular/common/http';
import { FormsModule } from '@angular/forms';


import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
// import { ShowComponent } from './show/show.component';
import {MatSlideToggleModule} from '@angular/material/slide-toggle';

import {MdTabsModule,MdInputModule,MdButtonModule,MdCardModule,MdMenuModule,MdToolbarModule,MdIconModule} from'@angular/material';
import {MdSidenavModule} from '@angular/material/sidenav';
import {Routes,RouterModule} from '@angular/router';
import { MenuComponent } from './menu/menu.component';

export const appRoutes: Routes = [
  { path: '', redirectTo:'/home', pathMatch:'full'},
  
  
];



@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    MenuComponent
   
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    FormsModule,
    HttpModule,
    HttpClientModule,
    FormsModule,
    MdButtonModule,
    MdInputModule,
    MdMenuModule,
    MdCardModule,
    MdToolbarModule,
    MdIconModule,
    MdTabsModule,
    MatSlideToggleModule,
    MdSidenavModule,

    RouterModule.forRoot([
      {
        path:'',
        component: HomeComponent
      },
    ])

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }






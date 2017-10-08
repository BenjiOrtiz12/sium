import { BrowserModule } from '@angular/platform-browser';
import { Component, OnInit } from '@angular/core';
import {Http,Response,RequestOptionsArgs,Headers} from '@angular/http';
import { trigger,style,transition,animate,keyframes,query,stagger } from '@angular/animations';

import { Injectable } from '@angular/core';
import 'rxjs/Rx';
import {Observable} from 'rxjs/Rx';
import {MatSidenavModule} from '@angular/material';


@Component({

  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})

export class HomeComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}

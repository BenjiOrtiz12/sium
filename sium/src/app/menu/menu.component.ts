import { Component, OnInit, ViewChild } from '@angular/core';
  import { MdSidenav } from '@angular/material';
@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {
 @ViewChild('sidenav') sidenav: MdSidenav;
  constructor() { }

  ngOnInit() {
  }
   toggle() {
      this.sidenav.toggle();
    }

}

import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {User} from './User';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'app';
  user:User;
  constructor(private http:HttpClient){}

  ngOnInit(){
  	this.http.get<User>('http://127.0.0.1:8000/api/auth').subscribe(data=>{
  		console.log(data);
      this.user=data;
  	});
  }
}

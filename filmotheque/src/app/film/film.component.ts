import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormsModule } from '@angular/forms';

export interface film
{
  nom : string;
  description : string;
  duree : string;
  note : string;
  anneeS : string;
}

@Component({
  selector: 'app-film',
  templateUrl: './film.component.html',
  styleUrls: ['./film.component.css']
})


export class FilmComponent implements OnInit {

  listeP: any = [];

  constructor(private http:HttpClient) { }

  ngOnInit() {
    this. getListeFilmFromServer();
  }

  getListeFilmFromServer()
  {
    this.http.get<any>('http://127.0.0.1/Filmotheque/test/film.php').subscribe(data =>{
    //this.http.get<any>('http://127.0.0.1:8888/scripts/bdd/listePersonnes.php').subscribe(data =>{
      this.listeP=data;
    });
  }
}

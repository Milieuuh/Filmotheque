import { Component,OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';


export interface film
{
  nom : string;
  description : string;
  duree : string;
  note : string;
  anneeS : string;
}

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{
  listeP: any = [];
  titre='';

  constructor(private http:HttpClient) { }

  ngOnInit() {
    this. getListeFilmFromServer();
    this.rechercherFilmPrecisFromServer(event);
  }

  getListeFilmFromServer()
  {
    this.http.get<any>('http://127.0.0.1/Filmotheque/test/film.php').subscribe(data =>{
      this.listeP=data;
      console.log(data);
    });

  }

  rechercherFilmPrecisFromServer(event)
  {
    console.log("Titre : "+this.titre);
    //this.titre=event;
    this.titre="Les";
    let toSend = { Nom: this.titre};

    this.http.post<any>("http://127.0.0.1/Filmotheque/test/rechercheFilm.php", JSON.stringify(toSend))
     .subscribe(data =>{
       
       this.listeP=data;
     }); 
 
  }
}

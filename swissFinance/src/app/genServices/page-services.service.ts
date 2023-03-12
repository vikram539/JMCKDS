import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class PageServicesService {

  test =  [
    {id: 1, name: "test1"}
  ]
  constructor() { }
}

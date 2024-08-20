#let datos = json("diplomados.json")


#for dato in datos{
set text(13pt)
let linea = .0pt+green
let nro = [#dato.id]

let nombre = [#dato.nombre_persona]
let periodo = [#dato.gestion_inicio - #dato.gestion_fin]
let diplomado = [#dato.mencion]

let dia = [#dato.fecha_ingreso]
let mes 
let anio 

let horas =[#dato.horas_academicas]
let creditos =[#dato.creditos]

let secretaria = [M. Sc. Abg. Jaqueline Filipps D.]
let rector = [Ph. D. Ing. Pedro G. López C.]

set page(paper: "us-legal", margin: 0cm)
rotate(
  -0deg, origin: top+right,
  block(width: 100%, height: 100%, stroke: linea)[

  //Nro
  #place(dx: 17cm,dy: 4.2cm,block(stroke: linea,nro))
  
  // Nombre
  #place(dy: 8.4cm, block(stroke: linea, width: 100%)[
    #set align(center)
    #nombre
  ])
  
  
  #place(dx: 2.9cm,dy: 11.9cm,block(stroke: linea, periodo))
  
  
  #place(dy: 15.7cm, block(stroke: linea, width: 100%)[
    #set align(center)
    #diplomado
  ])
  
  #place(dx: 3cm,dy: 24.7cm,block(stroke: linea, dia))
  #place(dx: 10cm,dy: 24.75cm,block(stroke: linea, mes))
  #place(dx: 18cm,dy: 25cm,block(stroke: linea, anio))
  
  #place(dx: 2.7cm,dy: 32.3cm,block(stroke: linea, secretaria))
  #place(dx: 14.2cm,dy: 32.3cm,block(stroke: linea, rector))
])

}
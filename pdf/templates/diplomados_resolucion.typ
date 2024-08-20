#let datos = json("diplomados.json")

#for dato in datos{
set text(13pt)
let linea = .0pt+green
let nro = [#dato.numero_carton]

let nombre = [#dato.nombre_persona]
let periodo = [#dato.gestion_inicio - #dato.gestion_fin]
let diplomado = [#dato.mencion]

let dia = [#dato.fecha_ingreso]
let mes
let anio

let horas = [#dato.horas_academicas]
let creditos = [#dato.horas_academicas]

let secretaria = [M. Sc. Abg. Jaqueline Filipps D.]
let rector= [Ph. D. Ing. Pedro G. López C.]
  // RESOLUCION RECTORIAL
  set page(paper: "us-letter", margin: 0cm)
  rotate(
  -0deg, origin: top+right,
  block(stroke: linea, width: 100%, height: 100%)[
    
  #place(dx: 4.7cm, dy: 4.6cm, block(stroke: linea)[#dia])

  #place(dx: 7cm, dy: 4.7cm, block(stroke: linea)[#mes])
  
  
  #place(dx: 12.5cm, dy: 4.7cm, block(stroke: linea)[#anio])
  
  
  #place(dy: 7cm, block(stroke: linea ,width: 100%)[
    #set align(center)
    #nombre
  ])
  
  #place(dx: 9cm, dy: 8.6cm, block(stroke: linea)[#diplomado])
  
  
  #place(dx: 3.8cm, dy: 11.6cm, block(stroke: linea)[#horas])
  
  #place(dx: 12cm, dy: 11.7cm, block(stroke: linea)[#creditos])
  #place(dy: 17.5cm, block(stroke: linea, width: 100%)[
    #set align(center)
    #diplomado
  ])
  
  #place(dx: 9.5cm, dy: 19.1cm, block(stroke: linea)[#nombre])
  
  #place(dx: 3.3cm, dy: 25.5cm, block(stroke: linea)[#secretaria])
  
  #place(dx: 14.8cm, dy: 25.5cm, block(stroke: linea)[#rector])
])
}
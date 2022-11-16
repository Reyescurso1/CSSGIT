/*Select * from Personita; */ 
/*select * from Regalo;*/
/*Producto cartesiano o Join Es la combinacion
de todas las posibilidades*/
/*Select *from Personita, Regalo;*/
/*SELECT * from Personita inner JOIN regalo
on Personita.nombre=Regalo.personita_nombre*/
Select nombre,descripcion from  Personita inner Join
 Regalo on Personita.nombre=Regalo.personita_nombre
 

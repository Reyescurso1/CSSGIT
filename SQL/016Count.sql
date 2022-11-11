/*Cuenta el numero de facturas que tengo*/

 

/*SELECT  count(*) from Facturas;*/
select sum(importe) from facturas;
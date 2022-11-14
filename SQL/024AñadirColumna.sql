
/* Selecciono las facturas de fecha anterior a una dada
alter table Facturas add column Fecha date;*/
/*update facturas set fecha="2022-11-14";*/
/*update facturas set fecha="2022-10-14";*/
/*Select * from facturas
where empresa="empresaA";*/
/* Seleccionamos fechas por dias meses años
select day(fecha), MONTH(fecha),year(fecha)from Facturas;*/

/*
Presentamos la fecha con el formato incluyendo hora

Select date_format(fecha,"%h:%m %e-%M%-%Y")
from Facturas;*/

/*Select adddate(fecha,2) from Facturas;
Añadimos 2 dias a la fecha de las facturas*/
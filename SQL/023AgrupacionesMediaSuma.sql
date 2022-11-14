/*Select 
sum(importe) AS Gasto, empresa
from facturas
group by empresa having Gasto>200*/

/*select avg(importe) as Media,empresa from Facturas 
group by empresa having Media>200*/ 
select sum(importe) as Total,empresa from Facturas 
group by empresa having Total>30
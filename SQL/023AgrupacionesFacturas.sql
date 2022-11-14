
/* Selecciono las facturas de cada empresa con un importe maximo*/
Select 
max(importe) as MaxImporte,empresa,numero,concepto
from 
facturas 
group by 
  empresa
having MaxImporte>10
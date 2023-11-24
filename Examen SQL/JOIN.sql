-- Obtener los movimientos que contengan un número de empleado 
-- que no se encuentra registrado en el catálogo utilizando JOIN.

SELECT movimientos.empleado, movimientos.cliente, movimientos.tipo_movimientos, movimientos.telefono, movimientos.fec_movto
FROM public.movimientos 
LEFT JOIN public.catalogo_empleados ON movimientos.empleado = catalogo_empleados.empleado
WHERE catalogo_empleados.empleado IS NULL
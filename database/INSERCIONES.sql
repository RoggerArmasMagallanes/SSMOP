USE SYSMDPN;

# INSERCIONES DE LA TABLA CARGO
INSERT INTO CARGO (ID_CARGO, DESCRIPCION, ESTADO) 
VALUES  (NULL, 'JEFE DIVISION DE OBRAS', '1'),
		(NULL, 'INSPECTOR DE OBRA', '1'),
        (NULL, 'ARQUITECTO', '1'),
        (NULL, 'SECRETARIA', '1'),
        (NULL, 'JEFE UNIDAD FORMULADORA', '1');

SELECT * FROM CARGO;

#INSERCIONES DE LA TABLA CRITERIO
INSERT INTO CRITERIO (ID_CRITERIO, DESCRIPCION, ESTADO)
VALUES  (NULL, 'SANEAMIENTO', '1'),
		(NULL, 'EDUCACIÓN', '1'),
        (NULL, 'ORDEN PÚBLICO Y SEGURIDAD', '1'),
        (NULL, 'TRANSPORTE', '1'),
        (NULL, 'VIVIENDA Y DESARROLLO', '1'),
        (NULL, 'SALUD', '1'),
        (NULL, 'PROTECCIÓN SOCIAL', '1'),
        (NULL, 'CULTURA Y DEPORTE', '1'),
        (NULL, 'COMUNICACIONES', '1'),
        (NULL, 'TRABAJO', '1'),
        (NULL, 'PESCA', '1'),
        (NULL, 'ENERGÍA', '1'),
        (NULL, 'TURISMO', '1'),
        (NULL, 'AMBIENTE', '1'),
        (NULL, 'AGROPECUARIA', '1')
;

SELECT * FROM CRITERIO;

# INSERCIONES EN LA TABLA PERSONA
INSERT INTO PERSONA (ID_PERSONA, APE_PATERNO, APE_MATERNO, NOMBRES, N_DNI, GENERO, CORREO, FECHA_NAC, TELEFONO, CELULAR, ESTADO)
VALUES (NULL,'TASAYCO','DEL RIO','JULIANA','48474847','FEMENINO','TASAYCOJULI_15@HOTMAIL.COM','1990-02-15','951454758','951454758','1'),
	   (NULL,'CHAVEZ','SALAZAR','AZUCENA','45474841','FEMENINO','CHASAZUCENA_1988@HOTMAIL.COM','1988-11-12','963258741','951454758','1'),
       (NULL,'NUÑEZ','ALMEYDA','JOSÉ CARLOS','40337847','MASCULINO','JOSE.NUÑEZ@GMAIL.COM','1985-08-14','056282521','951646650','1'),
       (NULL,'ARMAS','MAGALLANES','ROGGER ARTURO','47414248','MASCULINO','ROGGERARMAS@GMAILCOM','1991-08-14','951454758','951454758','1'),
	   (NULL,'CARDENAS','GARCÍA','CARLOS','71727374','MASCULINO','CARLOSCARDENAS@GMAILCOM','1997-07-17','951454758','951454758','1')
;


# WHAT'S THE DIFERENT BETWEEN TRUNCATE AND DELETE 
SELECT * FROM PERSONA;

# INSERCIONES EN LA TABLA ENTIDAD
INSERT INTO ENTIDAD (ID_ENTIDAD, TIPO_ENTIDAD, RAZON_SOCIAL, N_RUC, TELEFONO, DIRECCION, CORREO, ESTADO)
VALUES (NULL, 'PUBLICA', 'ACADEMIA DE LA MAGISTRATURA', '20290898685', '056854758', 'CALLE LIMA S/N', 'ACADEMAGISTRA@ACA.COM.PE', '1'),
	   (NULL, 'PRIVADA', 'CONSORCIO GROCIO PRADO S.A.C', '20103030791', '056524147', 'AV. LAS PALMERAS S/C', 'CONSORCIOGROCIOPRADO@CTR.COM', '1'),
	   (NULL, 'PRIVADA', 'AGENCIA DE PROMOCION DE LA INVERSIÓN PRIVADA - PRO INVERSIÓN', '20380799643', '555874497','AV. CASTILLA - LINCE S/N', 'PROINVER@INV.COM.PE', '1'),
	   (NULL, 'PUBLICA', 'ARCHIVO GENERAL DE LA NACIÓN', '20131370726', '789456184', 'PASAJE CAQUETÁ LOTE 15 MZ D', 'ARCHNACION@AGN.GOB.PE', '1')
;

# INSERCCIONES DE USUARIO
INSERT INTO USUARIO (ID_USUARIO, ID_PERSONA, ID_CARGO, NOMBRE_USUARIO, CLAVE_USUARIO, ESTADO) 
VALUES (NULL, '1','1','JUALINITA1989','123456','1'),
	   (NULL, '2','3','AZUNCHAVEZ48','ADMIN','1')
;

SELECT CONCAT(P.APE_PATERNO,' ',P.APE_MATERNO,', ', P.NOMBRES) AS FUNCIONARIOS, C.DESCRIPCION, U.NOMBRE_USUARIO, U.CLAVE_USUARIO, U.ESTADO FROM USUARIO U
INNER JOIN PERSONA P ON U.ID_PERSONA = P.ID_PERSONA
INNER JOIN CARGO C ON U.ID_CARGO = C.ID_CARGO;



# INSERCIONES MODALIDAD
INSERT INTO MODALIDAD (ID_MODALIDAD, DESCRIPCION, ESTADO) 
VALUES  (NULL, 'ADMINISTRATIVA DIRECTA', '1'),
		(NULL, 'ADMINISTRATIVA INDIRECTA - POR CONTRATA', '1'),
		(NULL, 'ADMINISTRATIVA INDIRECTA - ASOCIACION PUBLICA PRIVADA (APP)', '1'),
		(NULL, 'ADMINISTRATIVA INDIRECTA - NUCLEO EJECUTOR', '1'),
		(NULL, 'ADMINISTRATIVA INDIRECTA - LEY 29230 (OBRAS POR IMPUESTOS)', '1')
;

SELECT * FROM MODALIDAD;


# INSERCIONES REPRESENTANTE
INSERT INTO REPRESENTANTE (ID_REPRESENTANTE, ID_PERSONA, ID_ENTIDAD, CARGO_ENTIDAD, NACIONALIDAD, ESTADO) 
VALUES  (NULL, '4', '3', 'GERENTE GENERAL', 'PERUANA', '1'),
		(NULL, '5', '4', 'GERENTE COMERCIAL', 'PERUANA', '1')
;

SELECT * FROM REPRESENTANTE;


# INSERCIONES TIPO SOLICITUD
INSERT INTO TIPO_SOLICITUD (ID_TIPO, DESCRIPCION, ESTADO) 
VALUES  (NULL, 'PROYECTO DE INVERSION', '1'),
		(NULL, 'INVERSIONES IOARR', '1'),
		(NULL, 'PROYECTO COOPERATIVO', '1'),
        (NULL, '...', '1')
;

SELECT * FROM TIPO_SOLICITUD;

# INSERCIONES SOLICITUD
INSERT INTO SOLICITUD (ID_SOLICITUD, ID_REPRESENTANTE, FECHA_ING, SERIE_SOL, CONTEXTO_SOL, ID_TIPO, ESTADO) 
VALUES (NULL, '1', '2019-10-15', '0015-12345', 'SOLICITO APROBACION DE IDEA DE PROYECTO DE INVERSION PARA AUTOPISTA', '1', '1');

SELECT * FROM SOLICITUD; 

# INSERCIONES EXPEDIENTE
INSERT INTO EXPEDIENTE (ID_EXPEDIENTE, ID_MODALIDAD, ID_REPRESENTANTE, ID_USUARIO, N_EXPEDIENTE,
 CONTEXTO, FECHA_APROBADO, MONTO_APROBADO, OBSERVACION, SUMILLA, UBICACION, MOTIVO, ESTADO) 
VALUES  (NULL, '2', '1', '1', '0024-1154','PROYECTO DE OBRA DE MEJORAMIENTO DE AUTOPISTA JIRON ARICA - LEON DE VIVERO',
		'2017-08-14', '15002500.00', 'ADJ. 2 COPIAS', 'INGRESA AL PROCESO INICIAL', 'ARCHIVO MODULAR', '............', '1')
;

SELECT * FROM EXPEDIENTE;

#INSERCIONES TIPO EJECUCION
INSERT INTO TIPO_EJECUCION (ID_TIPO_EJECUCION, DESCRIPCION, ESTADO) 
VALUES  (NULL, 'MANTENIMIENTO', '1'),
		(NULL, 'EN EJECUCION', '1'),
		(NULL, 'SIN EJECUCION', '1'),
		(NULL, 'PARALIZADA', '1'),
		(NULL, 'FINALIZADA', '1')
;

SELECT * FROM TIPO_EJECUCION;


#INSERCIONES OBRA
INSERT INTO OBRA (ID_OBRA, ID_EXPEDIENTE, NOMBRE_OBRA, FECHA_INICIO, FECHA_FIN, TOTAL_DIAS, MONTO_APTO, FINANCIA_UNO, FINANCIA_DOS, ID_TIPO_EJECUCION, ESTADO) 
VALUES (NULL, '1', 'MEJORAMIENTO DE LOS SERVICIOS TURISTICOS PUBLICOS EN EL SECTOR DE PUEBLO NUEVO', '2017-02-25', '2018-02-14', '710', '1785000.50', 'N', 'N', '1', '1');

SELECT * FROM OBRA;


INSERT INTO DETALLE_EXPEDIENTE (ID_DETEXPEDIENTE, ID_EXPEDIENTE, FECHA_DERIVACION, AREA_COMPETENTE, FOLIOS, OBSERVACION, NUEVO_ESTADO) 
VALUES (NULL, '1','2017-08-15','OFICINA DE SUPERVISION','05','EN ESPERA DE ANTECEDENTES SPA 001580','1'),
       (NULL, '1','2017-08-15','OFICINA DE FINANCIAMIENTO','105','REVISION.ADJ.96288','1'),
	   (NULL, '1','2017-08-16','UNIDAD FORMULADORA','35','FIRMA RLIF 22634.ADJ.96288','2'),
       (NULL, '1','2017-08-16','OFICINA DE SANEAMIENTO','254','CON COPIA DE LF 22634 PARA FISCALIZACION POSTERIOR','1'),
       (NULL, '1','2017-08-17','OFICINA DE SECRETARIA','170','ACUMULADO AL EXP. 81265','3');

/*
Solo para recordar que los estados del expediente son asi:
1- Pendiente
2- Observado
3- Concluido

Solo para expediente en movimientos sus estados seran:
1- Derivado
2- Devuelto
3- Atentido
*/

# MOVIMIENTO OBRA
INSERT INTO MOVIMIENTO_OBRA (ID_MOBRA, ID_OBRA, NOTIFICACION, OBSERVACION, ESTADO_NOTIFICAR, TIPO, MOTIVO_SUPER, FECHA_INICIO, FECHA_FIN, OBSERVACION_GENERAL)
VALUES (NULL,'1','P','NINGUNA','N','R','SE REALZIARA SEGUN CALENDARIO','2019-11-15','2020-01-15','45%');

SELECT MO.ID_MOBRA, O.ID_OBRA,  O.NOMBRE_OBRA, O.FECHA_INICIO, O.FECHA_FIN, O.MONTO_APTO,  TE.DESCRIPCION ,
       MO.NOTIFICACION, MO.OBSERVACION, MO.ESTADO_NOTIFICAR, MO.TIPO, MO.MOTIVO_SUPER, MO.FECHA_INICIO, 
       MO.FECHA_FIN, MO.OBSERVACION_GENERAL 
FROM MOVIMIENTO_OBRA MO
INNER JOIN OBRA O ON MO.ID_OBRA = O.ID_OBRA
INNER JOIN TIPO_EJECUCION TE ON O.ID_TIPO_EJECUCION = TE.ID_TIPO_EJECUCION
;
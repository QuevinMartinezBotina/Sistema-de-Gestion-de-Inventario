    CREATE database empresa;

    CREATE TABLE empresa (id_empresa varchar(14)NOT NULL, 
    nomempresa varchar(25)NOT NULL, 
   
    representante_legal varchar(25)NOT NULL,
    actividad_economica varchar(20)NOT NULL,
    direc_empresa varchar(20),
    telefono varchar(11)NOT NULL, 
    fax varchar(25) NULL, 
    email  varchar(50)NOT NULL, 
    pais  varchar(25)NOT NULL, 
    cuidad varchar(25)NOT NULL,
    zona  varchar(25)NOT NULL,
    PRIMARY KEY (id_empresa))ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



    CREATE table cargo (idcargo varchar(2) NOT NULL, 
    nomcargo varchar(20) NOT NULL,
    PRIMARY key (idcargo))ENGINE = INNODB DEFAULT CHARSET= utf8mb4;
        

    CREATE table sucursal (idsucursal varchar(2) NOT NULL,
    nomsucursal varchar(25) NOT NULL,
    direccion varchar(25)NOT NULL, 
    ciudad varchar(25)NOT NULL,
    PRIMARY key (idsucursal))ENGINE = INNODB DEFAULT CHARSET= utf8mb4;


    CREATE TABLE empleado (id_empleado varchar(14)NOT NULL,
    priapell varchar(25)NOT NULL,
    segapell varchar(25)NOT NULL,
    prinom varchar(25)NOT NULL,
    segnom varchar(25),
    email varchar(50)NOT NULL, 
    celular varchar(12)NOT NULL, 
    direccion varchar(50), 
    idsucursal varchar(2)  NOT NULL, 
    idcargo varchar(2) NOT NULL,
    ciudad varchar(25)NOT NULL, 
    departamento varchar(25)NOT NULL,
    fecha_contratarcion date NOT Null,
    PRIMARY KEY (id_empleado),
    INDEX (idcargo,idsucursal), 
    FOREIGN KEY(idcargo) REFERENCES cargo(idcargo) ON UPDATE CASCADE ON DELETE CASCADE, 
    FOREIGN KEY (idsucursal) REFERENCES sucursal(idsucursal)ON UPDATE CASCADE ON DELETE CASCADE)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    CREATE table proveedor(id_proveedor varchar(15)NOT NULL,
    nom_proveedor varchar(25)NOT NULL,
    email varchar(50)NOT NULL,
    tel_proveedor varchar(11)NOT NULL,
    direccion_proveedor varchar(30)NOT NULL,
    ciudad varchar(25)NOT NULL, 
    estado_departamento varchar(25)NOT NULL,
    banco varchar(25)NOT NULL, 
    cuenta varchar(25)NOT NULL,
    celular varchar(25)NOT NULL,
    PRIMARY KEY (id_proveedor))ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    CREATE table categoria
(id_categoria varchar(2) NOT NULL,
    nomcategoria varchar(25)NOT NULL,

    PRIMARY KEY (id_categoria))ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    CREATE table producto (id_producto varchar(3)NOT NULL,
    nom_producto varchar(25)NOT NULL,
    pre_producto int(9)NOT NULL, 
    cant_producto int(4)NOT NULL,
    id_categoria varchar(2) NOT NULL,
    deta_producto varchar(25)NOT NULL,
    PRIMARY KEY (id_producto),INDEX (id_categoria), 
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)ON UPDATE CASCADE ON DELETE CASCADE)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    CREATE table usuario( usuario_empleado varchar(25)NOT NULL,
    contra_empleado varchar(255)NOT NULL,
    id_empleado varchar(14)NOT NULL, 
    nivel_acceso varchar(1) NOT NULL,
    estado varchar(1)NOT NULL,
    primary key(usuario_empleado),
    INDEX (id_empleado),
    FOREIGN KEY (id_empleado) REFERENCES empleado (id_empleado)ON UPDATE CASCADE ON DELETE CASCADE )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    CREATE table movimientos (fecha date NOT NULL, 
    id_producto varchar(3)NOT NULL, 
    cantidad int (3) NOT NULL, 
    precio int(6) NOT NULL, 
    id_proveedor varchar(25)NOT NULL, 
    id_empleado varchar(14)NOT NULL, 
    compra_venta varchar(1) NOT NULL, 
    id_categoria varchar(2) NOT NULL,
    INDEX (id_empleado,id_proveedor,id_categoria),
    FOREIGN KEY (id_empleado) REFERENCES empleado(id_empleado)ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_proveedor) REFERENCES proveedor(id_proveedor)ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN key (id_producto) REFERENCES producto (id_producto) on UPDATE cascade on delete cascade,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)ON UPDATE CASCADE ON DELETE CASCADE)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


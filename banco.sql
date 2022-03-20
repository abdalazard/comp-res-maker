create table conta(
    iduser int primary key auto_increment,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(32),
    perfil enum('adm','user'),
);
insert into conta values(null,"Vinícius","adm",md5("123"),"adm");




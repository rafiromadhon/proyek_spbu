create table artikel
(
id_artikel int not null primary key auto_increment,
judul_artikel varchar(100),
isi_artikel text,
penulis_artikel varchar(250),
photo_artikel varchar(250),
tgl_artikel timestamp
);
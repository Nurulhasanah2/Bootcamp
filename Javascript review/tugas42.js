
let dataPribadi = {
    nama_depan: 'Nurul',
    nama_belakang: 'Hasanah',
    hobi: ['menulis', 'membaca', 'mendengarkan musik'],
    angka_favorit: 12,
    memakai_kacamata: true,
};

console.log('Nama Depan:', dataPribadi.nama_depan);
console.log('Nama Belakang:', dataPribadi.nama_belakang);
console.log('Hobi:', dataPribadi.hobi);
console.log('Angka Favorit:', dataPribadi.angka_favorit);
console.log('Memakai Kacamata:', dataPribadi.memakai_kacamata);

console.log('Nama Lengkap:', dataPribadi.nama_depan + ' ' + dataPribadi.nama_belakang);

dataPribadi.angka_favorit = 8;
console.log('Angka Favorit (setelah diubah):', dataPribadi.angka_favorit);

dataPribadi.hobi.push('coding');
console.log('Hobi (setelah ditambahkan "coding"):', dataPribadi.hobi);

dataPribadi.lulusan = 'Hacktiv8';
console.log('Lulusan:', dataPribadi.lulusan);

console.log('Hobi (loop):');
for (let i = 0; i < dataPribadi.hobi.length; i++) {
    console.log(dataPribadi.hobi[i]);
}

console.log('Keys:', Object.keys(dataPribadi));
console.log('Values:', Object.values(dataPribadi));

console.log('Semua Property:');
for (let key in dataPribadi) {
    console.log(`${key}: ${dataPribadi[key]}`);
}
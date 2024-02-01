function tanggalSekarang() {
    const tanggalHariini = new Date();
    console.log('Tanggal Sekarang:', tanggalHariini);
}
tanggalSekarang();
function tanggalBaru() {
    return new Date();
}
const y = tanggalSekarang();
console.log('Hasil cetak tanggal sekarang', y);

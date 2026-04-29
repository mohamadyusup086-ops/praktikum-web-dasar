// cek apakah file JS kebaca
console.log("JS aktif");

// fungsi kirim
function kirim() {
    var nama = document.getElementById("nama").value;
    var status = document.getElementById("status");

    if (!nama) {
        status.innerHTML = "Isi nama dulu ya";
        return;
    }

    status.innerHTML = "Terima kasih " + nama + ", data berhasil dikirim";
}


// fungsi hitung
function hitung() {
    var tugas = document.getElementById("tugas").value;
    var uts = document.getElementById("uts").value;
    var uas = document.getElementById("uas").value;

    if (!tugas || !uts || !uas) {
        document.getElementById("hasil").innerHTML = "Isi semua nilai dulu";
        return;
    }

    var hasil = (0.3 * tugas) + (0.3 * uts) + (0.4 * uas);

    document.getElementById("hasil").innerHTML =
        "Nilai akhir: " + hasil.toFixed(1);
}
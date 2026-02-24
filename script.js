document.addEventListener("DOMContentLoaded", function () {
  console.log("JS Aktif ");

  const btnJadwal = document.querySelector(".btn-jadwal");
  const btnBiodata = document.querySelector(".btn-biodata");

  if (btnJadwal) {
    btnJadwal.addEventListener("click", function () {
      alert("Kamu akan pindah ke halaman jadwal pelajaran Habibi");
      window.location.href = "jadwal.php";
    });
  }

  if (btnBiodata) {
    btnBiodata.addEventListener("click", function () {
      alert("Kamu akan kembali ke halaman Biodata");
      window.location.href = "index.php";
    });
  }
});

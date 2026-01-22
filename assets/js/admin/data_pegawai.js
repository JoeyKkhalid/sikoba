function showDetail(nama) {
    alert("Lihat detail untuk: " + nama);
  }

  function addData(nama) {
    alert("Tambah data untuk: " + nama);
  }

  function deleteData(nama) {
    if (confirm("Yakin ingin menghapus data " + nama + "?")) {
      alert(nama + " berhasil dihapus (simulasi).");
    }
  }

  document.getElementById("searchInput").addEventListener("keyup", function () {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("#dataTable tbody tr");
    rows.forEach(function(row) {
      let nama = row.querySelector(".pegawai-name").textContent.toLowerCase();
      row.style.display = nama.includes(filter) ? "" : "none";
    });
  });
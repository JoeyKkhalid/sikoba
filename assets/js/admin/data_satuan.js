function showDetail(nama) {
    alert("Lihat detail untuk: " + nama);
  }

  function editData(nama) {
    alert("Edit data untuk: " + nama);
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
      let uraian = row.querySelector(".satuan-name").textContent.toLowerCase();
      row.style.display = uraian.includes(filter) ? "" : "none";
    });
  });
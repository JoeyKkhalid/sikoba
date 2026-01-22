function showDetail(item) {
    alert("Lihat detail untuk: " + item);
  }

  function addData(item) {
    alert("Tambah data ke: " + item);
  }

  function deleteData(item) {
    if (confirm("Apakah Anda yakin ingin menghapus " + item + "?")) {
      alert(item + " berhasil dihapus (simulasi).");
    }
  }

  document.getElementById("searchInput").addEventListener("keyup", function () {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("#dataTable tbody tr");
    rows.forEach(function(row) {
      let text = row.querySelector(".teknis-name").textContent.toLowerCase();
      row.style.display = text.includes(filter) ? "" : "none";
    });
  });
<!-- footer.php -->
<footer class="site-footer">
    <p>&copy; 2025 Badan Pusat Statistik Kota Sukabumi</p>
</footer>


<style>
/* Styling Footer */
.site-footer {
    background-color: #1f2b6c;
    color: white;
    text-align: center;
    padding: 15px 0;
    font-size: 14px;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    margin-top: auto; /* Penting untuk flexbox */
}

.site-footer p {
    margin: 0;
}

/* Menjamin halaman mengisi seluruh tinggi */
html, body {
    height: 100%;
    margin: 0;
    display: grid;
}

/* Grid utama */
body {
    grid-template-rows: 1fr auto; /* 1fr untuk konten, auto untuk footer */
}

/* Footer tetap berada di bawah halaman */
footer {
    grid-row: 2; /* Letakkan footer di baris kedua (terakhir) */
}
</style>

</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
<p>© <?php echo date("Y"); ?> - Portafolio de Gino</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function toggleDarkMode(){
    document.body.classList.toggle("dark-mode");

    let btn = document.getElementById("btnDark");

    if(document.body.classList.contains("dark-mode")){
        localStorage.setItem("modo", "oscuro");
        btn.innerHTML = "☀️";
    } else {
        localStorage.setItem("modo", "claro");
        btn.innerHTML = "🌙";
    }
}

window.onload = function(){
    let btn = document.getElementById("btnDark");

    if(localStorage.getItem("modo") === "oscuro"){
        document.body.classList.add("dark-mode");
        if(btn) btn.innerHTML = "☀️";
    }
}
</script>

</body>
</html>
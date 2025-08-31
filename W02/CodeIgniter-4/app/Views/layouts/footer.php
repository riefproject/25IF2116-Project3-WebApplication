        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; <?= date('Y') ?> Aplikasi Biodata Mahasiswa oleh Arief (241511002). All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.getElementById('navToggle');
            const navMenu = document.getElementById('navMenu');
            
            navToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });
            
            // Highlight current nav item
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>

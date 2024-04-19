<footer class="footer">
    <div class="container @auth-fluid @endauth">
        <nav>
            <ul class="footer-menu">
            </ul>
            <p id="copyright" class="copyright text-center">
                &copy;<script>
                    document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                </script>{{ __(' by ') . __('Henry Lee') }}
            </p>
        </nav>
    </div>
</footer>
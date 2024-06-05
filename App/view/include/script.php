<script>
    function activateItem(element) {
        var menuItems = document.querySelectorAll('.nav-item');
        menuItems.forEach(function(item) {
            item.classList.remove('active', 'text-primary');
        });
        element.parentElement.classList.add('active');
        element.classList.add('text-primary');
    }
    var currentPage = window.location.href.split('/').pop().split('#')[0].split('?')[0];
    var menuLinks = document.querySelectorAll('.nav-item a');
    menuLinks.forEach(function(link) {
        if (link.getAttribute('href') === currentPage) {
            link.parentElement.classList.add('active');
            link.classList.add('text-primary');
        }
    });
</script>

<!-- Library Bundle Script -->
<script src="./../assets/js/core/libs.min.js"></script>

<!-- External Library Bundle Script -->
<script src="./../assets/js/core/external.min.js"></script>

<!-- Widgetchart Script -->
<script src="./../assets/js/charts/widgetcharts.js"></script>

<!-- mapchart Script -->
<script src="./../assets/js/charts/vectore-chart.js"></script>
<script src="./../assets/js/charts/dashboard.js"></script>

<!-- fslightbox Script -->
<script src="./../assets/js/plugins/fslightbox.js"></script>

<!-- Settings Script -->
<script src="./../assets/js/plugins/setting.js"></script>

<!-- Slider-tab Script -->
<script src="./../assets/js/plugins/slider-tabs.js"></script>

<!-- Form Wizard Script -->
<script src="./../assets/js/plugins/form-wizard.js"></script>

<!-- AOS Animation Plugin-->
<script src="./../assets/vendor/aos/dist/aos.js"></script>

<!-- App Script -->
<script src="./../assets/js/hope-ui.js"></script>

<script src="./../assets/js/ecommerce.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></body> -->

<!-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="./../assets/js/report.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>

</html>
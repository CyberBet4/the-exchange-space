</div>
<!-- page-body-wrapper ends -->
</div>

</div>

<script>
    let txt = document.getElementsByClassName("address");
    for(let x = 0; x < txt.length; x++) {
            txt[x].textContent = txt[x].textContent.substring(0, 11);
            txt[x].textContent.length >= 11 ? txt[x].textContent = txt[x].textContent + '...' : 
            txt[x].textContent;
    }
   
</script>
{{-- bootstrap --}}
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- container-scroller -->
<!-- plugins:js -->
<script src={{ asset("/vendors/js/vendor.bundle.base.js")}}></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src={{ asset("/vendors/chart.js/Chart.min.js")}}></script>
<script src={{ asset("/js/jquery.cookie.js")}} type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src={{ asset("/js/off-canvas.js")}}></script>
<script src={{ asset("/js/hoverable-collapse.js")}}></script>
<script src={{ asset("/js/misc.js")}}></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src={{ asset("/js/dashboard.js")}}></script>
<script src={{ asset("/js/todolist.js")}}></script>
<!-- End custom js for this page -->
</body>

</html>

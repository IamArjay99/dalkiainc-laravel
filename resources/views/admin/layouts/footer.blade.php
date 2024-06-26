        <div class="modal fade" id="custom-modal" tabindex="-1" data-bs-backdrop="static" data-backdrop="static"
                data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mb-0">Title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        </div>
                    </div>
                </div>
        </div>

        <footer class="page-footer px-xl-4 px-sm-2 px-0 pt-3 d-flex justify-content-center align-items-center">
            <p class="text-muted">© 2024 <a href="#" title="Dalkia Inc.">Dalkia Inc.</a>, All Rights Reserved.</p>
        </footer>
    </div>


    <!-- Custom -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    @if (Session::has('status'))
    <script>
        $(window).on('load', function() {
            showToast('{{ Session::get('status') }}', '{{ Session::get('message') }}')
        })
    </script>
    @endif


    <script>
        function updateRealTime() {
            $('#realTime').html(moment(new Date).format('hh:mm:ss A'));
        }

        $(function() {
            setInterval(updateRealTime, 1000);
        });
    </script>

</body>
</html>

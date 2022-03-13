            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Shreyu theme by <a href="#">Khayrul Shanto</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
            </div>
            </div>
            <!-- END wrapper -->
            <script>
                @if (Session::has('success'))
                    toastr.options =
                    {
                    "closeButton" : true,
                    "progressBar" : true
                    }
                    toastr.success("{{ session('success') }}");
                @endif
                @if (Session::has('error'))
                    toastr.options =
                    {
                    "closeButton" : true,
                    "progressBar" : true
                    }
                    toastr.error("{{ session('error') }}");
                @endif
                @if (Session::has('info'))
                    toastr.options =
                    {
                    "closeButton" : true,
                    "progressBar" : true
                    }
                    toastr.info("{{ session('info') }}");
                @endif
                @if (Session::has('warning'))
                    toastr.options =
                    {
                    "closeButton" : true,
                    "progressBar" : true
                    }
                    toastr.warning("{{ session('warning') }}");
                @endif
                @if (Session::has('updatepassword'))
                    toastr.options =
                    {
                    "closeButton" : true,
                    "progressBar" : true
                    }
                    toastr.warning("{{ session('updatepassword') }}");
                @endif
            </script>
            {{-- NOTIFICATION END --}}

            <!-- Vendor js -->
            <script src="{{ asset('assets') }}/js/vendor.min.js"></script>

            <!-- optional plugins -->
            <script src="{{ asset('assets') }}/libs/moment/min/moment.min.js"></script>
            <script src="{{ asset('assets') }}/libs/apexcharts/apexcharts.min.js"></script>
            <script src="{{ asset('assets') }}/libs/flatpickr/flatpickr.min.js"></script>

            <!-- page js -->
            <script src="{{ asset('assets') }}/js/pages/dashboard.init.js"></script>

            <!-- App js -->
            <script src="{{ asset('assets') }}/js/app.min.js"></script>
            <!-- Custom JavaScript -->
            <script src="{{ asset('assets') }}/js/custom.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

            <!-- third party js -->
            <script src="{{ asset('assets') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
            <script src="{{ asset('assets') }}/libs/datatables.net-select/js/dataTables.select.min.js"></script>
            <!-- third party js ends -->
            <!-- Datatables init -->
            <script src="{{ asset('assets') }}/js/pages/datatables.init.js"></script>

            </body>

            <!-- Mirrored from shreyu.coderthemes.com/layouts-dark-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Dec 2021 13:58:43 GMT -->

            </html>

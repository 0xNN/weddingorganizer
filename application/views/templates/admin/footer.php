        </div>
    </div>

    <script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        Array.from(document.querySelectorAll("#myImg")).forEach(item => {
            item.addEventListener("click", event => {
                modal.style.display = "block";
                modalImg.src = event.target.src;
                captionText.innerHTML = event.target.alt;
            });
        });

        // Get the <span> element that closes the modal
        document.querySelector(".close").addEventListener("click", () => {
            modal.style.display = "none";
        });

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#pemesanan').DataTable();
        });
        var year;
        var month;
        $('#year').change(function() {
            year = $(this).val();
        });

        $('#month').change(function() {
            month = $(this).val();
        });

        $('#print').click(function() {
            console.log(year);
            console.log(month);
            $.ajax({
                url: 'laporanpesan/print/'+month+'/'+year,
                type: "GET"
            });
        });
    </script>
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('#pemesanan').DataTable({
                dom: 'Blfrtip',
                buttons: {
                    buttons: [
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn btn-warning btn-sm mr-1',
                            orientation: 'landscape',
                            download: 'open',
                            init: function(api, node, config) {
                                $(node).removeClass('dt-button')
                            }
                        }
                    ],
                },
                "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;
        
                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };
                    
                    console.log(intVal);
                    // Total over all pages
                    total = api
                        .column( 4 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Total over this page
                    pageTotal = api
                        .column( 4, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    // Update footer
                    $( api.column( 4 ).footer() ).html(
                        '$'+pageTotal +' ( $'+ total +' total)'
                    );
                }
            });
        });

        $('.buttons-pdf').each(function() {
			$(this).removeClass('dt-button').addClass('btn')
        });
    </script> -->
</body>
</html>
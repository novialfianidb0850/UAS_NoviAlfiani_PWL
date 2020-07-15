<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href=""><h1 class="m-0 text-dark"><i class="nav-icon fas fa-file-alt"> DATA CORONA JEPARA </i></h1></a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Corona</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <section class="content">
        <button class="btn btn-success ml-4 mb-2 btn-sm" onclick="add_corona()"><i class="glyphicon glyphicon-plus"></i> Tambah Data</button>
        <button class="btn btn-default mb-2 btn-sm" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>  

        <div class="dropdown inline float-sm-right">
          <form method="POST" action="<?php echo base_url('index.php/corona/unggah')?>" enctype="multipart/form-data">
            <a class="btn text-dark float-sm-right"><button type="submit"><i class="fas fa-file-import"></i> Import </button></a> 
            <input type="file" name="file">
        </form>
        </div>
    </section>
<body> 
  <div class="content">
    <div class="container-fluid">
        <table id="table" class="table table-bordered table-striped mt-2 " cellspacing="0" width="100%"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>KECAMATAN</th>
                    <th>PP</th>
                    <th>ODP</th>
                    <th>PDP</th>
                    <th>OTG</th>
                    <th>POSITF</th>
                    <th style="width:125px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                <th>ID</th>
                <th>kecamatan</th>
                <th>pp</th>
                <th>odp</th>
                <th>pdp</th>
                <th>otg</th>
                <th>positif</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>   
    </div>

<script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/js/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets/js/buttons.colVis.min.js"></script>

<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({  
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('corona/ajax_list')?>",
            "type": "POST"
        },
        //Set column definition initialisation properties.
        columnDefs: [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
        dom:"<'row'<'col-md-5 mt-2'l><'col-md-6 mt-2'B><'col-md-1'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-md-12'p>>",
        buttons: [
            {extend: 'print', exportOptions: { columns: ':not(.not-export)'}},
            {extend: 'excel', exportOptions: { columns: ':not(.not-export)'}},
            {extend: 'pdf', orientation: 'landscape', pageSize: 'LEGAL', exportOptions: { columns: ':not(.not-export)'}},
            {extend:'csv', exportOptions: { columns: ':not(.not-export)'}},

        ],
        initComplete: function () {
            $(".buttons-print").addClass("btn btn-info btn-sm");
            $('.buttons-print').html('<i class="fas fa-print"/> Print')

            $(".buttons-excel").addClass("btn btn-success btn-sm");
            $('.buttons-excel').html('<i class="fas fa-file-excel"/> Excel')

            $(".buttons-pdf").addClass("btn btn-danger btn-sm");
            $('.buttons-pdf').html('<i class="fas fa-file-pdf"/> PDF')

            $(".buttons-csv").addClass("btn btn-secondary btn-sm");
            $('.buttons-csv').html('<i class="fas fa-file-csv"/> CSV')

            $(".buttons-colvis").addClass("btn btn-warning btn-sm");
            $('.buttons-colvis').html('<i class="fas fa-file"/>ColV')
        },
    });


});


function add_corona()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Data Corona'); // Set Title to Bootstrap modal title
}

function edit_corona(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('corona/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="kecamatan"]').val(data.kecamatan);
            $('[name="pp"]').val(data.pp);
            $('[name="odp"]').val(data.odp);
            $('[name="pdp"]').val(data.pdp);
            $('[name="otg"]').val(data.otg);
            $('[name="positif"]').val(data.positif);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data Corona'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('corona/ajax_add')?>";
    } else {
        url = "<?php echo site_url('corona/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_corona(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('corona/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">corona Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Kecamatan</label>
                            <div class="col-md-9">
                                <input name="kecamatan" placeholder="kecamatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pelaku Perjalanan</label>
                            <div class="col-md-9">
                                <input name="pp" placeholder="pp" class="form-control" type="number">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Orang Dalam Pemantauan</label>
                            <div class="col-md-9">
                                <input name="odp" placeholder="odp" class="form-control" type="number">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pasien Dalam Pengawasan</label>
                            <div class="col-md-9">
                                <input name="pdp" placeholder="pdp" class="form-control" type="number">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Orang Tanpa Gejala</label>
                            <div class="col-md-9">
                                <input name="otg" placeholder="otg" class="form-control" type="number">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Positif</label>
                            <div class="col-md-9">
                                <input name="positif" placeholder="positif" class="form-control" type="number">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('blog::blog.name') !!} <small> {!! trans('app.manage') !!} {!! trans('blog::blog.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('blog::blog.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='blog-blog-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('blog/blog')!!}">{!! trans('blog::blog.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('blog/blog?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('blog/blog?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('blog/blog/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('blog::admin.blog.partial.actions')
                    -->
                    @include('blog::admin.blog.partial.filter')
                    @include('blog::admin.blog.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="blog-blog-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="blog-blog-check-all"></th>
                        <th data-field="id">{!! trans('blog::blog.label.id')!!}</th>
                    <th data-field="category_id">{!! trans('blog::blog.label.category_id')!!}</th>
                    <th data-field="title">{!! trans('blog::blog.label.title')!!}</th>
                    <th data-field="viewcount">{!! trans('blog::blog.label.viewcount')!!}</th>
                    <th data-field="published">{!! trans('blog::blog.label.published')!!}</th>
                    <th data-field="published_at">{!! trans('blog::blog.label.published_at')!!}</th>
                    <th data-field="user_type">{!! trans('blog::blog.label.user_type')!!}</th>
                    <th data-field="created_at">{!! trans('blog::blog.label.created_at')!!}</th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    app.load('#blog-blog-entry', '{!!guard_url('blog/blog/0')!!}');
    oTable = $('#blog-blog-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + data.id + '">';
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('blog/blog') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'id'},
            {data :'id'},
            {data :'category_id'},
            {data :'title'},
            {data :'viewcount'},
            {data :'published'},
            {data :'published_at'},
            {data :'user_type'},
            {data :'created_at'},
        ],
        "pageLength": 25
    });

    $('#blog-blog-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#blog-blog-list').DataTable().row( this ).data();
        $('#blog-blog-entry').load('{!!guard_url('blog/blog')!!}' + '/' + d.id);
    });

    $('#blog-blog-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#blog-blog-check-all").on( 'change', function (e) {
        e.preventDefault();
        aIds = [];
        if ($(this).prop('checked')) {
            $("input[name^='id[]']").each(function(){
                $(this).prop('checked',true);
                aIds.push($(this).val());
            });

            return;
        }else{
            $("input[name^='id[]']").prop('checked',false);
        }
        
    });


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#blog-blog-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#blog-blog-list tbody').on('click', 'td.details-control', function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });

});
</script>
@extends('infoinven.template')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Produk Masuk</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
				
		
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">List Produk Masuk</div>
					<a class="btn btn-info" style="float:left;" href="{{ url('/list/produk/masuk/Report') }}">Report</a>
							<form method="GET"></form>
					<div style="float:right;">
					<input placeholder="Cari Kode atau Nama" type="text" name="cari">
						<button>Cari</button>
					</div>
					<br></br>
					<div class="panel-body">
						<table data-toggle="table" id="table-style"  data-row-style="rowStyle">
						    <thead>
                                    <th>No.</th>
                                    <th>Kode</th>
                                    <th>Nama Produk</th>
                                    <th>Info Produk</th>
                                    <th>Stok</th>
                                    <th>Tanggal Masuk Produk</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                    @foreach($data as $post)
                                        <tr>
                                            <td>{{ $i++}}.</td>
                                            <td>{{ $post->kode }}</td>
                                            <td>{{ $post->nama_produk }}</td>
                                            <td>{{ $post->info_produk }}</td>
                                            <td>{{ $post->stok }}</td>
                                            <td>{{ $post->created_at }}</td>
                                            <td><a class="btn btn-info" href="{{ url('/list/produk/masuk/detail/'.$post->id) }}">Detail</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
						</table>
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->
@endsection
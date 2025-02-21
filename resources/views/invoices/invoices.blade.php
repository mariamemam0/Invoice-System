@extends('layouts.master')
@section('title')
قائمة الفواتير
@stop
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"> /قائمةالفواتير </span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
				
					
					
				<div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                        <a href="invoices/create" class="modal-effect btn btn-sm btn-primary" style="color:white"><i
                                class="fas fa-plus"></i>&nbsp; اضافة فاتورة</a>
                    

                        <a class="modal-effect btn btn-sm btn-primary" href="{{ url('export_invoices') }}"
                            style="color:white"><i class="fas fa-file-download"></i>&nbsp;تصدير اكسيل</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example2">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0"> #</th>
												<th class="wd-15p border-bottom-0">رقم الفاتورةه </th>
												<th class="wd-20p border-bottom-0">تاريخ الفاتورة</th>
												<th class="wd-15p border-bottom-0"> تاريخ الإستحقاق</th>
												<th class="wd-10p border-bottom-0">المنتج</th>
												<th class="wd-25p border-bottom-0">القسم</th>
												<th class="wd-25p border-bottom-0">تاريخ الإستحقاق</th>
												<th class="wd-25p border-bottom-0">الخصم</th>
												<th class="wd-25p border-bottom-0">نسبة الضريبة</th>
												<th class="wd-25p border-bottom-0">قيمة الضريبة</th>
												<th class="wd-25p border-bottom-0">الإجمالي</th>
												<th class="wd-25p border-bottom-0">الحالة</th>
												<th class="wd-25p border-bottom-0">الملاحظات</th>





											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>41212</td>
												<td>System Developer</td>
												<td>2018/03/12</td>
												<td>$654,765</td>
												<td>b.Chloe@datatables.net</td>
												<td>Bella</td>
												<td>Chloe</td>
												<td>System Developer</td>
												<td>2018/03/12</td>
												<td>$654,765</td>
												<td>b.Chloe@datatables.net</td>
												<td>b.Chloe@datatables.net</td>
											</tr>
										
											
										</tbody>
									</table>
								</div>
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->

					<!--div-->
					  
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						
					</div>
				
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
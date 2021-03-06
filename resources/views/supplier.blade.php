@extends('admin.layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">


@endsection

@section('content')

<br>
<h1>المـــــــــــــــــــــــــوردين</h1>
            <!-- row opened -->
            <div class="row row-sm">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
<!-- add modal -->

<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
    <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-sign" data-toggle="modal" href="#modaldemo8">اضافة مورد جديدة</a>
</div>

<!-- Modal effects -->
        <div class="modal" id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">اضافة مورد جديد للمخزن</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>


                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <form  method="POST" action="supp_store" class="parsley-style-1"  name="selectForm2" novalidate="">
                                        @csrf

                                        <div class="row">
                                            
                                                {{--  SUPPLIER ID   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">اسم المورد</label>
                                                         <input type="text" name="name" class="form-control" placeholder="ادخل اسم المورد">

                                                    
                                                        <span class="text-danger" id="supplier_id_error"></span>
                                                    </div>
                                                </div>

                                                {{--  RESEVER NAME   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">الهاتف</label>
                                                        <input type="text" name="phone" class="form-control" placeholder="ادخل هاتف المورد">
                                                    
                                                            <span class="text-danger" id="resever_name_error"></span>
                                                    </div>
                                                </div>
                                                
                                                {{--  RESEVER PHONE   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">العنوان</label>
                                                        <input type="text" name="address" class="form-control" placeholder="ادخل العنوان">
                                                    
                                                            <span class="text-danger" id="resver_phone_error"></span>
                                                    </div>
                                                </div>

                                                {{--  GOVERNORATE_ID   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">الايميل</label>
                                                        
                                                        <input type="text" name="email" class="form-control" placeholder="ادخل الايميل">

                                                    </div>
                                                </div>
                                            

                                                {{-- CITY ID  --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">ملاحظة عن المورد</label>
                                                        <textarea type="text" name="about" class="form-control" placeholder="ادخل ملاحظة"> </textarea>

                                                        <span class="text-danger" id="city_id_error"></span>
                                                    </div> 
                                                </div>

                                              




                                            
                                        </div>

                                        
                                    
                                        <div class="mg-t-30">
                                            <button class="btn btn-main-primary pd-x-20"  type="submit">اضافة مورد جديد </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Modal effects-->

<br>







                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-0">المـــــــــــدن</h4>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
<!--                             <p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
 -->                        </div>
                        <div class="card-body">

                        {{--  START GET FLASH MESSAGES   --}}
                            @include('admin.alerts.success')
                            @include('admin.alerts.errors')

                            <div class="row mr-2 ml-2" id="successMsg" style="display: none">
                                <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2">
                                        تم الحزف بنجاح
                                </button>
                            </div>
                        {{--  END GET FLASH MESSAGES   --}}

                          

                            <div class="table-responsive">
                       
                                    <table class="table text-md-nowrap" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0"> اسم المورد</th>
                                                <th class="wd-15p border-bottom-0">الهاتف</th>
                                                <th class="wd-15p border-bottom-0">العنوان</th>
                                                <th class="wd-10p border-bottom-0">ملاحظة عن المورد</th>
                                                <th class="wd-10p border-bottom-0">الايميل</th>
                                                <th class="wd-10p border-bottom-0">الاجرائات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              
                                              @foreach($data as $item)
                                              <td>{{$item->name}}</td>
                                              <td>{{$item->phone}}</td>
                                              <td>{{$item->address}}</td>
                                              <td>{{$item->about}}</td>
                                              <td>{{$item->email}}</td>

                                                    <td>
                                                        <div class="btn-icon-list">
                                                            <a href="">
                                                                <button class="btn btn-indigo btn-icon"><i class="fa fa-edit"></i></button>
                                                            </a>&nbsp;
                                                            <a href="" class="makeDeleteCity" city_id=" ">
                                                                <button class="btn btn-primary btn-icon"><i class="fa fa-trash"></i></button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                        

                                        </tbody>
                                    </table>
                   
                                  @if($data->count() == 0)
                                
                                    <h1 class="text-center">لايوجد موردين</h1>
                                  
                                   @endif 
                          
                            </div>
                        </div>
                    </div>
                </div>
                <!--/div-->
            </div>
            <!-- /row -->
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


  <!--Internal  Datepicker js -->
  <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
  <!-- Internal Select2 js-->
  <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
  <!-- Internal Modal js-->
  <script src="{{URL::asset('assets/js/modal.js')}}"></script>



@endsection